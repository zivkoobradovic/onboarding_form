<?php

namespace App\Http\Livewire;

use App\Models\Onboarding;
use Livewire\Component;

class ShowOnboardingComponent extends Component
{
    public $compOpen = null;
    public $details = false;
    public $onboardings;
    public $onboardData = [];
    public $currentOnboarding;



    public function __construct () {
        $this->onboardings = Onboarding::all()->sortKeysDesc();
    }



    public function openDetails ($id) {
        foreach($this->onboardings as $onboarding) {
         if($onboarding->id === $id) {
            $this->compOpen = $onboarding->id;
         }
        }
    }


    public function closeDetails () {
        $this->compOpen = null;
    }





    public function render()
    {
        return view('livewire.show-onboarding-component');
    }
}
