@extends('layout',['title'=>'Edit Contact'])

@section('content')
<hr>
    <div class="container">
        <h1>Edit contact</h1>
        <form>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" placeholder="">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contato</label>
            <input type="text" class="form-control" id="contact" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-secondary">Clear</button>
        </form>
    </div>
@endsection