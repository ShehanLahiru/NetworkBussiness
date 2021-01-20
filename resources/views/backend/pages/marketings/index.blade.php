@extends('backend.layouts.app', [
    'namePage' => 'marketings',
    'class' => 'sidebar-mini',
    'activePage' => 'marketings',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> To Add List</h4>
                    <div class="pull-right">
                        <a href="{{ route('account.create') }}">
                            <button class="btn btn-primary">Add</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach($marketings as $marketing)
                                <tr>
                                    <td>{{ $marketing->id }}</td>
                                    <td>{{ $marketing->user_id }}</td>
                                    <td><img width="50px" src="{{ asset($marketing->image_url )}}" alt=""></td>
                                    <td>{{ $marketing->name }}</td>
                                    <td>{{ $marketing->amount }}</td>
                                    <td>{{ $marketing->status }}</td>
                                    <td>
                                        <a href="{{ route('account.edit',$marketing->id) }}">
                                            <button class="btn btn-default">Voucher</button>
                                        </a>
                                        @if( $marketing->status=='pending' )
                                            <form method="post" action="{{ route('account.destroy',$marketing->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                            <form method="post" action="{{ route('account.changeStatus',$marketing->id) }}">
                                                @csrf
                                                @method('post')
                                                <button class="btn btn-primary" type="submit">Confirm</button>
                                            </form>
                                            @endif
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
