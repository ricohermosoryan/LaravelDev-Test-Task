<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;

class ViewEmployee extends Component
{
    public $employee=[];

    public function mount(Employee $employee){
        $this->employee=$employee;
    }

    public function render()
    {
        return view('livewire.view-employee');
    }
}
