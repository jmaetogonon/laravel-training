@extends('layouts.app')
@section('content')
    

    <div class="container">
        
        <div class="container">
            <a href={{route('users.create')}} class="btn btn-success text-right mb-3">Create User</a>
        </div>
        <div class="card">
            <div class="card-body">
                {{-- table --}}
               


                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{$user->id}} </td>
                                <td> {{$user->name}} </td>
                                <td> {{$user->email}} </td>
                                <td> {{$user->created_at}} </td>
                                <td> 
                                    <a  href="{{route('users.edit', ['id' => $user->id])}}" class="btn btn-warning">Edit</a>
                                    <form method="POST" action="{{ route('users.destroy', ['id' => $user->id]) }}">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                
                                    </form>

                                    
                                   
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection