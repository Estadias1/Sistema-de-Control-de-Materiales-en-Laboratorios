@extends('layout')
	 
	@section('content')
	    <div class="card mt-5">
	         <div class="card-header">
	            <div class="col-md-12">
	                <h4 class="card-title"><strong>Edit Page</strong> CRUD con Laravel 7  
	                  <a class="btn btn-success ml-5" href="{{ route('movies.index') }}">Back</a>
	                </h4>
	            </div>
	         </div>
	         <div class="card-body">
	           @if ($errors->any())
	                <div class="alert alert-danger">
	                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
	                    <ul>
	                        @foreach ($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                        @endforeach
	                    </ul>
	                </div>
	            @endif
	               
	            <form action="{{ route('movies.update',$Movie->id) }}" method="POST">
	                @csrf
	                @method('PUT')
	                 <div class="row">
	                    <div class="col-xs-12 col-sm-12 col-md-12">
	                        <div class="form-group">
	                            <strong>Name:</strong>
	                            <input type="text" name="name" value="{{ $Movie->name }}" class="form-control" placeholder="Name">
	                        </div>
	                    </div>
	                    <div class="col-xs-12 col-sm-12 col-md-12">
	                        <div class="form-group">
	                            <strong>Description:</strong>
	                            <textarea class="form-control" style="height:150px" name="description"  placeholder="Description">{{ $Movie->description }}</textarea>
	                        </div>
	                    </div>
	                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	                            <button type="submit" class="btn btn-primary">Submit</button>
	                    </div>
	                </div>
	            </form>
	        </div>
	@endsection