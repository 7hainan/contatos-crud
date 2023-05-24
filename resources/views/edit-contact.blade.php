@extends('layout',['title'=>'Edit Contact'])

@section('content')
<hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <a href="{{route('contacts-index')}}" type="button" class="link">Back</a>
            </div>
        </div>
        @if ($errors->any())
           <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
           </div>
        @endif
        <h1>Edit contact</h1>
        <form action="{{route('contacts-update',['id' => $contacts->id])}}" method="POST">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$contacts->name}}" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email"  value="{{$contacts->email}}">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact"  value="{{$contacts->contact}}">
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
@endsection