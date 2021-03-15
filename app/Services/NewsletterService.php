<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NewsletterService
{
    public function subscribe($data)
    {
        $lists = array_keys($data['list']);
        foreach ($lists as $listId) {
            if ($listId === 3) {
                $requestData = $this->requestDataSendlane($data);
                $response = Http::post(config('sendlane.url'), $requestData);
                logger((string)$response);
            } else {
                $requestData = $this->requestDataGetResponse($data, $listId);
                $response = Http::withHeaders([
                                                  'X-Auth-Token' => 'api-key ' . config('getresponse.token'),
                                                  'Content-Type' => 'application/json'
                                              ])->post(config('getresponse.url'), $requestData);
                logger((string)$response);
            }
        }
        return true;
    }

    private function requestDataGetResponse($data, $listId)
    {
        return [
            'name'              => $data['firstName'] . ' ' . $data['lastName'],
            'campaign'          => [
                'campaignId' => config('getresponse.lists.' . $listId),
            ],
            'email'             => $data['emailAddress'],
            'customFieldValues' => [
                [
                    'customFieldId' => 'VnjUlJ',
                    'value'         => [
                        $data['digistore24Id']
                    ],
                ]
            ]
        ];
    }

    private function requestDataSendlane($data)
    {
        return [
            'api' => config('sendlane.api_key'),
            'hash' => config('sendlane.api_hash'),
            'name' => $data['firstName'] . ' ' . $data['lastName'],
            'email' => $data['emailAddress'],
            'list_id' => config('sendlane.list_id')
        ];
    }
}
