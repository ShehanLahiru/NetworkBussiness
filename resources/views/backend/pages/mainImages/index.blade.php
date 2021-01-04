@extends('backend.layouts.app', [
    'namePage' => 'mainImages',
    'class' => 'sidebar-mini',
    'activePage' => 'mainImages',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Main Images List</h4>
                    <div class="pull-right">
                        <a href="{{ route('backend.mainImages.create') }}">
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
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($mainImages as $mainImage)
                                <tr>
                                    <td>{{ $mainImage->id }}</td>
                                    <td><img width="50px" src="{{ $mainImage->image_url }}" alt=""></td>
                                    <td>{{ $mainImage->status}}</td>
                                    <td>
                                        <a href="{{ route('backend.mainImages.edit',$mainImage->id) }}">
                                            <button class="btn btn-default">Edit</button>
                                        </a>
                                        <form method="post" action="{{ route('backend.mainImages.destroy',$mainImage->id) }}">
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
</div>
@endsection
