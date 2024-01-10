<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;

class EditEmployee extends Component
{
    public $employee;
    public $name;
    public $email;
    public $phone;
    public $position;

    public function mount(Employee $employee){
        $this->employee=$employee;
        $this->name=$employee->name;
        $this->email=$employee->email;
        $this->phone=$employee->phone;
        $this->position=$employee->position;
    }
    public function render()
    {
        return view('livewire.edit-employee');
    }

    public function updateEmployee(){
        //for validation
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required|max:255',
            'position'=>'required|max:255',
        ]);

        //use to update the data on the table after the validation
        $this->employee->update($validated);
        session()->flash('success','Employee Update Sucessfully');
        return $this->redirect('/employees',navigate:true);
    }
}
