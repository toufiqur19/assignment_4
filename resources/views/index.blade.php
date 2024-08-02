@extends('layouts.app')
   
@section('content')
  
<div class="card mt-5 container">
    <div class="row card-header">
        <div class="col col-md-10">
            <h2>Contact Management Application with Laravel </h2>
        </div>
        <div class="col col-md-2">
            <a class="btn btn-success btn-md float-end" href="{{ route('create') }}">Create</a>
        </div>
    </div>

  <div class="card-body">
          
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
  
        <div class="row">
            <form action="" class="col col-md-8 d-flex">
                <select name="sort" class="form-select" aria-label="Default select example" style="width: 30%">
                    <option selected>Sort By Name</option>
                    <option name="asc" value="asc">ASC</option>
                    <option name="desc" value="desc">DESC</option>
                  </select>
                  <select name="sort_date" class="form-select" aria-label="Default select example" style="width: 30%">
                    <option selected>Sort By Date</option>
                    <option name="asc" value="asc">ASC</option>
                    <option name="desc" value="desc">DESC</option>
                  </select>
                <div class="form-group">
                    <input type="search" class="form-control" name="search" placeholder="Search" value="{{ $search }}">
                </div>
                <button class="btn btn-primary">Search</button>
            </form>
        </div>
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
  
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ \Carbon\Carbon::parse($contact->created_at)->format('d-m-Y') }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{ route('show', $contact->id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('edit', $contact->id) }}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="{{ route('delete', $contact->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>  
@endsection

