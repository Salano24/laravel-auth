@extends('layouts.admin')
@section('content')
<div class="container">
<h1 class="py-5">Add new Project</h1>
    <form action="{{route('admin.projects.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title <strong class="text-danger">*</strong></label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="add title" aria-describedby="titleHlper" value="{{old('title')}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description <strong class="text-danger">*</strong></label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4" placeholder="add text">{{old('description')}}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection