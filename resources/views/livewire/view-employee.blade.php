<div class="card">
  <div class="card-header">
    View Employee
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$employee->name}}</h5>
    <p class="card-text">{{$employee->email}}</p>
    <p class="card-text">{{$employee->phone}}</p>
    <p class="card-text">{{$employee->position}}</p>
    <a href="/employees" class="btn btn-primary">Back</a>
  </div>
</div>

