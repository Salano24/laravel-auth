@extends('layouts.admin')
@section('content')
<h1>Projects</h1>
<a class="btn btn-primary position-fixed bottom-0 end-0 m-5" href="{{route('admin.projects.create')}}" role="button"><i class="fas fa-plus fa-lg "></i></a>
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($projects as $project)
                <tr class="table-primary">
                    <td>{{$project->title}}</td>
                    <td>{{$project->slug}}</td>
                    <td>{{$project->description}}</td>
                    <td>
                       <a href="{{route('admin.projects.show', $project->id)}}"><i class="fas fa-eye fa-md"></i></a> 
                       <a href="{{route('admin.projects.edit', $project->id)}}"><i class="fas fa-pencil fa-md"></i></a> 
                       <a href="{{route('admin.projects.show', $project->id)}}"><i class="fas fa-trash fa-md"></i></a> 
                    </td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>

@endsection