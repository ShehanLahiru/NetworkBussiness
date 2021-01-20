@extends('backend.layouts.app', [
    'namePage' => 'products',
    'class' => 'sidebar-mini',
    'activePage' => 'products',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Products List</h4>
                    <div class="pull-right">
                        <a href="{{ route('product.create') }}">
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
                                <th>Category</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td><img width="50px" src="{{asset ($product->image_url) }}" alt=""></td>
                                    <td>{{ $product->name }}</td>
                                    {{-- <td>{{ $product->link }}</td> --}}
                                    <td>{{ $product->category }}</td>
                                    <td>
                                        <a href="{{ route('product.edit',$product->id) }}">
                                            <button class="btn btn-default">Edit</button>
                                        </a>
                                        <form method="post" action="{{ route('product.destroy',$product->id) }}">
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
