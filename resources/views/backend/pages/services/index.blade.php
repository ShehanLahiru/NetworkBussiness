@extends('backend.layouts.app', [
    'namePage' => 'services',
    'class' => 'sidebar-mini',
    'activePage' => 'services',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Services List</h4>
                    <div class="pull-right">
                        <a href="{{ route('backend.services.create') }}">
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
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td><img width="50px" src="{{ $service->image_url }}" alt=""></td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->status }}</td>
                                    <td>
                                        <a href="{{ route('backend.services.edit',$service->id) }}">
                                            <button class="btn btn-default">Edit</button>
                                        </a>
                                        <form method="post" action="{{ route('backend.services.destroy',$service->id) }}">
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
    {{ $services->links() }}
</div>
@endsection
