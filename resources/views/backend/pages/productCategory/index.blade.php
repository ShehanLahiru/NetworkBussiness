@extends('backend.layouts.app', [
    'namePage' => 'productCategory',
    'class' => 'sidebar-mini',
    'activePage' => 'productCategory',
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
                        <a href="{{ route('productCategory.create') }}">
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
                                <th>Name</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($productCategories as $productCategory)
                                <tr>
                                    <td>{{ $productCategory->id }}</td>
                                    <td><img width="50px" src="{{ asset($productCategory->image_url )}}" alt=""></td>
                                    <td>{{ $productCategory->name }}</td>
                                    <td>
                                        <a href="{{ route('productCategory.edit',$productCategory->id) }}">
                                            <button class="btn btn-default">Edit</button>
                                        </a>
                                        <form method="post" action="{{ route('productCategory.destroy',$productCategory->id) }}">
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
    {{-- {{ $projects->links() }} --}}
</div>
@endsection
