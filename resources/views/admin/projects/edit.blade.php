@extends('layouts.admin')
@section('content')
<a class="btn btn-primary" href="{{route('admin.projects.index')}}" role="button"><i class="fas fa-angle-left fa-fw"></i></a>
<div class="container">
    <h1 class="py-5">Add new Project</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('admin.projects.update', $project->slug)}}" method="post" class="card p-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title <strong class="text-danger">*</strong></label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="add title" aria-describedby="titleHlper" value="{{old('title', $project->title)}}">
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description <strong class="text-danger">*</strong></label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4" placeholder="add text">{{old('description', $project->description)}}</textarea>
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>

@endsection