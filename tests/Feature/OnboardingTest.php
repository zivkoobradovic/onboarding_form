<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Team;
use App\Models\User;
use App\Models\Onboarding;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OnboardingTest extends TestCase
{

    use RefreshDatabase;


    /** @test */
    public function example()
    {
        $response = $this->get('http://onboarding.ds24mail.test/');

        $response->assertStatus(200);
    }

    /** @test */
    public function guest_can_see_oboarding_form () {
        $this->get('http://onboarding.ds24mail.test/')->assertSee('Digistore24 Onboarding Form');
    }
    /** @test */
    public function everyone_can_send_onboarding_form ()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('http://onboarding.ds24mail.test/onboarding-signup',
         [
             'ds24FullName' => 12,
             'fullName' => 'Zivko Obradovic',
             'timeZone' => 'Etc/GMT+12',
             'emailAddress' => 'zozobradovic@gmail.com',
             'companyName' => 'My Company',
             'phoneNumber' => '1213456789',
             'skypeZoom' => 'myskype-zoom',
             'digiStore24Id' => 'myIdds24',
             'password' => '123456',
             'productName' => 'My Product',
             'productType' => 1,
             'techSupport' => 1,
             'affiliateCommission' => 60,
             'productPrice' => 155,
             'salesPageType' => 2,
             'salesPage' => 'www.google.rs',
             'thankYouUrl' => 'www.google.rs',
             'upsellDownsell' => 1,
             'funnelUrl' => 'www.ede.com',
             'funnelPrice' => '50',
             'funnelCommission' => '60',
             'upsellThankYou' => 'www.ede.com',
             'fulfillment' => 'something',
             'customIntegration' => 1,
             'credentials' => 'something',
             'comments' => 'comments'
         ]);
        $this->assertDatabaseHas('onboardings', [
            'id' => 1,
            'managerEmail' => 'chuck.lasker@digistore24.team'
            ]);

        $response->assertRedirect('thank-you');
    }
}
