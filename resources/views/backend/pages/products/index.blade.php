@extends('backend.layouts.app', [
    'namePage' => 'projects',
    'class' => 'sidebar-mini',
    'activePage' => 'projects',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Projects List</h4>
                    <div class="pull-right">
                        <a href="{{ route('backend.projects.create') }}">
                            <button class="btn btn-primary">Create</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Category</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td><img width="50px" src="{{ $project->image_url }}" alt=""></td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->status }}</td>
                                    <td>{{ $project->category }}</td>
                                    <td>
                                        <a href="{{ route('backend.projects.edit',$project->id) }}">
                                            <button class="btn btn-default">Edit</button>
                                        </a>
                                        <form method="post" action="{{ route('backend.projects.destroy',$project->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $projects->links() }}
</div>
@endsection
