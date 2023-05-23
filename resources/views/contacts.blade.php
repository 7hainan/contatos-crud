@extends('layout', ['title' => 'Contacts'])
@section('content')
<hr>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-sm-10">
           <h1>Contacts List {{session('name')}}</h1> 
        </div>
        <div class="col-sm-2">
            <a href="{{route('contacts-create')}}" type="button" class="btn btn-success">New Contact</a>
        </div>
    </div>
</div>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->contact}}</td>
                    <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                    <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>

    @if (session('success'))
    <div class="alert alert-primary" role="alert">
        {{ session('success') }}
    </div>
    @endif
@endsection