@extends('layout')
	 
	@section('content')
	    <div class="card mt-5">
	         <div class="card-header">
	            <div class="col-md-12">
	                <h4 class="card-title"> CRUD con Laravel 7 <a class="btn btn-success ml-5" href="{{ route('movies.create') }}" id="createNewMovie"> Create New Movie</a>
	                </h4>
	            </div>
	         </div>
	         <div class="card-body">
	            @if ($message = Session::get('success'))
	                <div class="alert alert-success">
	                    <p>{{ $message }}</p>
	                </div>
	            @endif
	            <table class="table table-bordered">
	                <tr>
	                    <th width="5%">No</th>
	                    <th>Name</th>
	                    <th>Description</th>
	                    <th width="20%">Action</th>
	                </tr>
	                @foreach ($movies as $Movie)
	                <tr>
	                    <td>{{ ++$i }}</td>
	                    <td>{{ $Movie->name }}</td>
	                    <td>{{ $Movie->description }}</td>
	                    <td>
	                        <form action="{{ route('movies.destroy',$Movie->id) }}" method="POST">
	                            <a class="btn btn-info btn-sm" href="{{ route('movies.show',$Movie->id) }}">Show</a>
	                            <a class="btn btn-primary btn-sm" href="{{ route('movies.edit',$Movie->id) }}">Edit</a>
	                            @csrf
	                            @method('DELETE')
	                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
	                        </form>
	                    </td>
	                </tr>
	                @endforeach
	            </table>
	        </div>
	@endsection