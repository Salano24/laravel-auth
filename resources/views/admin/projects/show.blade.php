@extends('layouts.admin')
@section('content')
<a class="btn btn-primary" href="{{route('admin.projects.index')}}" role="button"><i class="fas fa-angle-left fa-fw"></i></a>
<div class="container text-center p-5">

        <h1>{{$project->title}}</h1>
        <h3>{{$project->slug}}</h3>
        <h5>{{$project->description}}</h5>

</div>
@endsection