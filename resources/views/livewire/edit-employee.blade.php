<div class="card offset-3 col-6">
  <div class="card-header">
    Edit Employee
  </div>
  <div class="card-body">
  <form wire:submit="updateEmployee">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="nameHelp">
    <!-- Validation Error message -->
    <div> 
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input wire:model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <!-- Validation Error message -->
    <div> 
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input wire:model="phone" type="number" class="form-control" id="phone">
    <!-- Validation Error message -->
    <div> 
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>

  <div class="mb-3">
    <label for="position" class="form-label">Position</label>
    <input wire:model="position" type="text" class="form-control" id="position">
    <!-- Validation Error message -->
    <div> 
        @error('position')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>

  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
  <button wire:navigate href="/employees" class="btn btn-secondary btn-sm">Back</button>
</form>
  </div>
</div>
