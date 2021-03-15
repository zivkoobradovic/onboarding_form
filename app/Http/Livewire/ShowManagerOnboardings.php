<?php

namespace App\Http\Livewire;

use App\Models\Manager;
use Livewire\Component;

class ShowManagerOnboardings extends Component
{
    public $compOpen = null;
    public $onboardings;
    public $onboardData = [];
    public $manager;




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
        return view('livewire.show-manager-onboardings');
    }
}
