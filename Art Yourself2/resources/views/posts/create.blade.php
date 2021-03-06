@extends('layout.master')
@extends('layout.nav')

<div class="create-form">
    <h1>Create a post</h1>
    <hr>
    <form method="POST" action="/firstpage">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea id="body" name="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>