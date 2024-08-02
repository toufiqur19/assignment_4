@extends('layouts.app')
    
@section('content')
  
<div class="card mt-5 container" style="width: 50%">
    <div class="row card-header">
        <div class="col col-md-10">
            <h2>Edit contact</h2>
        </div>
        <div class="col col-md-2">
            <a class="btn btn-success btn-sm float-end" href="{{ route('home') }}">Back</a>
        </div>
    </div>
  <div class="card-body">
  
    <form action="{{ route('update', $contacts->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control w-full" placeholder="Enter name" value="{{old('name', $contacts->name)}}">
            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{old('email', $contacts->email)}}">
            </div>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter phone" value="{{old('phone', $contacts->phone)}}">
            </div>
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                  <label class="form-label">Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter address" value="{{old('address', $contacts->address)}}">
            </div>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  
  </div>
</div>
@endsection