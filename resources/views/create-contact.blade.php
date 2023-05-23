@extends('layout',['title'=>'Create Contact'])

@section('content')
<hr>
    <div class="container">
        <h1>Create contact</h1>
        <form action="" method="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter a name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contato</label>
            <input type="text" class="form-control" id="contact" placeholder="Type a contact number">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-secondary">Clear</button>
        </form>
    </div>
@endsection