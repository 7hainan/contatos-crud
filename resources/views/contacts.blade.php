@extends('layout', ['title' => 'Contacts'])
@section('content')
<hr>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-sm-10">
           <h1>Contacts List {{session('name')}}</h1> 
        </div>
        @auth
        <div class="col-sm-2">
            <a href="{{route('contacts-create')}}" type="button" class="btn btn-success">New Contact</a>
        </div> 
        @endauth
    </div>
</div>
    <table class="table table-striped table-hover table-bordered" >
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            @auth
            <th>Edit</th>
            <th>Delete</th>
            @endauth
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->contact}}</td>
                    @auth
                    <td><a href="{{route('contacts-edit',['id'=>$contact->id])}}" type="button" class="btn btn-outline-primary">Edit</a></td>
                    <td>
                        <form action="{{route('contacts-destroy',['id'=>$contact->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
 
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" role="alert" id="contact-alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="btn-close-alert"></button>
    </div>
    @endif
@endsection