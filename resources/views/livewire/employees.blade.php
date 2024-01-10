<div>
    <div class="row">
        <div class="col-auto">
        <button wire:navigate href="/employee/create" class="btn btn-success btn-sm">Create Employee</button>
        </div>
        <div class="col-auto">
            <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="Search Employee">
        </div>
    </div>

<livewire:flash-message/>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Position</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $employee)
    <tr>
      <th scope="row">{{$employee->id}}</th>
      <td>{{$employee->name}}</td>
      <td>{{$employee->email}}</td>
      <td>{{$employee->phone}}</td>
      <td>{{$employee->position}}</td>
      <td>
        <button wire:navigate href="/employees/{{$employee->id}}" class="btn btn-primary bt-sm">View</button>
        <button wire:navigate href="/employees/{{$employee->id}}/edit" class="btn btn-secondary bt-sm">Edit</button>
        <button wire:click="deleteemployee({{$employee->id}})" class="btn btn-danger bt-sm">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>