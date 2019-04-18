@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <form action="/user/edit" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Project Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="repo">Repository</label>
            <select name="repo" class="form-control" id="repo">
                <optgroup label="-- Please select --">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </optgroup>

            </select>
        </div>
    </form>
@endsection
