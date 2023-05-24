@extends('layout',['title'=>'Create Contact'])

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

        <h1>Create contact</h1>
        <form action="{{route('contacts-store')}}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter a name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Type a contact number">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-secondary">Clear</button>
        </form>
    </div>
@endsection