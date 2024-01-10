<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;

class CreateEmployee extends Component
{
    public $name='';
    public $email='';
    public $phone='';
    public $position='';
    public function render()
    {
        return view('livewire.create-employee');
    }

    //to save the data when clicking on submit button
    public function save(){
        //for validation
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:employees|max:255',
            'phone'=>'required|unique:employees|max:255',
            'position'=>'required|max:255',
        ]);
        
        Employee::create($validated);
        $this->reset();
        session()->flash('success','Employee Created Sucessfully');
        return $this->redirect('/employees',navigate:true);
    }
}
