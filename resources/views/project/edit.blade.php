@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/project/edit" method="POST" class="form">
                    <h1>My project</h1>

                    @csrf
                    <div class="form-group">
                        <label for="title">Project Title</label>
                        <input type="text" name="title" id="title" value="{{ $project }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="repo">Repository</label>
                        <select name="repo" class="form-control" id="repo">
                            <option disabled selected hidden>Select a repo to track</option>
                            @foreach($repos as $repo)
                                <option value="{{ $repo['full_name'] }}">{{ $repo['full_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
