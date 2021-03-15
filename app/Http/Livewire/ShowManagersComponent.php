<?php

namespace App\Http\Livewire;

use App\Models\Manager;
use Livewire\Component;

class ShowManagersComponent extends Component
{

    public $managers;
    public $name;
    public $email;

    public function __construct () {
        $this->managers = Manager::all();
    }

    public function addManager () {
        Manager::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);


        return redirect('/managers');
    }

    public function deleteManager ($id) {
        Manager::destroy($id);

        return redirect('/managers');
    }



    public function render()
    {
        return view('livewire.show-managers-component');
    }
}
