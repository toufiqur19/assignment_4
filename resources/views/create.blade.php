@extends('layouts.app')
    
@section('content')
  
<div class="card mt-5 container" style="width: 50%">
  <div class="row card-header">
    <div class="col col-md-10">
        <h2>Create a new contact</h2>
    </div>
    <div class="col col-md-2">
        <a class="btn btn-success float-end" href="{{ route('home') }}">Back</a>
    </div>
</div>
  <div class="card-body">
  
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control w-full" placeholder="Enter name">
            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter phone">
            </div>
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                  <label class="form-label">Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter address">
            </div>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  
  </div>
</div>
@endsection