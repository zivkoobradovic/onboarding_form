<?php

namespace Database\Factories;

use App\Models\Onboarding;
use Illuminate\Database\Eloquent\Factories\Factory;

class OnboardingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Onboarding::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "contactPerson" => "Chuck Lasker",
            "managerEmail" => "chuck.lasker@digistore24.team",
            "contactInfo" => json_encode([
              "name" => "Zivko Obradovic",
              "emailAddress" => "zozobradovic@gmail.com",
              "phoneNumber" => "1213456789",
              "timeZone" => "Etc/GMT+12",
              "companyName" => "My Company",
              "skypeZoom" => "myskype-zoom",
            ]),
            "platform" => json_encode([
              "username" => "myIdds24",
              "password" => "123456",
            ]),
            "product" => json_encode([
              "productName" => "My Product",
              "productType" => "Membership area",
              "techSupport" => "Vendor has their own tech support",
              "affiliateCommission" => 60,
              "productPrice" => 155,
            ]),
            "salesPage" => json_encode([
              "salesPageType" => "Custom php",
              "salesPageUrl" => "www.google.rs",
              "salesPageThankyou" => "www.google.rs",
            ]),
            "oto" => json_encode([
               [
                "type" => "Upsell",
                "funnelUrl" => "w",
                "funnelPrice" => "5",
                "funnelCommission" => "6",
                "upsellThankYou" => "w",
              ]
              ]),
            "integration" => json_encode([
               "Not defined",
              "fulfillment" => "something",
              "customIntegration" => 1,
              "credentials" => "something",
            ]),
            "comments" => "comments"
          ];
    }
}
