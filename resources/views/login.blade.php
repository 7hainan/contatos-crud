@extends('layout',['title'=>'Edit Contact'])

@section('content')
<div class="container" >
    <hr style="visibility: hidden;">
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
    @if(session('danger'))
        <div class="alert alert-danger">{{session('danger')}}</div>
    @endif
    <div class="row justify-content-center rounded">
        <div class="col-md-6 bg-body-tertiary" style="border:solid 1px #CCC; border-radius:5px;padding: 15px;">
            <form action="{{route('auth-user')}}" method="POST">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
       </div>
    </div>
   
</div>

@endsection