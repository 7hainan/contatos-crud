@php
 $a = 1;
@endphp
@extends('layout', ['title' => 'Contacts'])
@section('content')
    <hr>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            @if ($a == 0)
            <th>Edit</th>
            <th>Delete</th>
            @endif
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->contact}}</td>
                    @if ($a == 0)
                    <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                    <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>

    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>
@endsection