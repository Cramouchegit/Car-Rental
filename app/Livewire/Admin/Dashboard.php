<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    public $cars = 50;
    public $customers;

    public function mount() 
    {
        $this->customers = User::count();
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
