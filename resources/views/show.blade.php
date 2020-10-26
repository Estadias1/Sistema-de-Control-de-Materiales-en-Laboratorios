@extends('layout')
	 
	@section('content')
	    <div class="card mt-5">
	         <div class="card-header">
	            <div class="col-md-12">
	                <h4 class="card-title"><strong>Show Page</strong> CRUD con Laravel 7  
	                  <a class="btn btn-success ml-5" href="{{ route('movies.index') }}">Back</a>
	                </h4>
	            </div>
	         </div>
	         <div class="card-body">
	           <div class="row">
	                <div class="col-xs-12 col-sm-12 col-md-12">
	                    <div class="form-group">
	                        <strong>Name:</strong>
	                        {{ $Movie->name }}
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-12 col-md-12">
	                    <div class="form-group">
	                        <strong>Description:</strong>
	                        {{ $Movie->description }}
	                    </div>
	                </div>
	            </div>
	        </div>
	@endsection