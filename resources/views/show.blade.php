@extends('layouts.app')
  
@section('content')

<div class="card mt-5 container" style="width: 50%">
    <div class="row card-header">
        <div class="col col-md-10">
            <h2>Show Contact</h2>
        </div>
        <div class="col col-md-2">
            <a class="btn btn-success btn-sm float-end" href="{{ route('home') }}">Back</a>
        </div>
    </div>
  <div class="card-body">
  
    <center>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $contacts->id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $contacts->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $contacts->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Phone:</strong>
                    {{ $contacts->phone }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Address:</strong>
                    {{ $contacts->address }}
                </div>
            </div>
        </div>
    </center>
  </div>
</div>
@endsection