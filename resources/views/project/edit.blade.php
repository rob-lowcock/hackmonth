@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/project/save" method="POST" class="form">
                    <h1>My project</h1>

                    @csrf
                    <div class="form-group">
                        <label for="title">Project Title</label>
                        <input type="text" name="title" id="title" value="{{ $project->title }}" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description <span>(optional)</span></label>
                        <textarea name="description" id="description" class="form-control" rows="5" placeholder="Tell us a bit about your project">{{ $project->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="repo">Repository</label>
                        <select name="repository" class="form-control @error('repository') is-invalid @enderror" id="repo">
                            <option disabled
                                    @if(!$project->repo)
                                        selected
                                    @endif
                                    hidden>Select a repo to track</option>
                            @foreach($repos as $repo)
                                <option value="{{ $repo['full_name'] }}"
                                    @if($project->repo && $project->$repo == $repo['full_namne'])
                                        selected
                                    @endif
                                >{{ $repo['full_name'] }}</option>
                            @endforeach
                        </select>
                        @error('repository')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group text-right">
                        <button class="btn btn-primary" type="submit">
                            @if(!$project->repo)
                                Get started!
                            @else
                                Save
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
