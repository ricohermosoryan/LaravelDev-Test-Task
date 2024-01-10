<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;

class Employees extends Component
{
    public $employees=[];
    public $search='';


    public function render()
    {
        if(! $this->search){
            $this->employees=Employee::all();
        }else {
            $this->employees=Employee::where('name','like','%'.$this->search.'%')->get();
        }
        
        return view('livewire.employees');
    }

    public function deleteemployee(Employee $employee){
        $employee->delete();
        session()->flash('success','Employee Deleted Sucessfully');
        return $this->redirect('/employees',navigate:true);
    }
}
