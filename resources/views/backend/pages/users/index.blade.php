@extends('backend.layouts.app', [
    'namePage' => 'users',
    'class' => 'sidebar-mini',
    'activePage' => 'users',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Users List</h4>
                    <form id="item" method="post" action="{{ route('backend.searchByID','User') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="id">{{__("Search by ID")}}</label>
                                <input type="text" class="form-control" name="id">
                                </div>
                            </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-round">{{__('Search')}}</button>
                        </div>
                    </div>
                </form>
                <form id="item" method="post" action="{{ route('backend.searchByName','User') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="name">{{__("Search by Name")}}</label>
                            <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-round">{{__('Search')}}</button>
                    </div>
                </div>
            </form>
                <div class="pull-right">
                    <a href="{{ route('backend.users.create') }}">
                        <button class="btn btn-primary">Create</button>
                    </a>
                </div>
            </div>
                    <div class="pull-right">
                        <a href="{{ route('backend.users.create') }}">
                            <button class="btn btn-primary">Create</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Balance</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->balance }}</td>
                                    <td>
                                        <a href="{{ route('view',$user->id) }}">
                                            <button class="btn btn-default">View</button>
                                        </a>
                                        @if($user->status == "active")
                                        <form method="post" action="{{ route('backend.users.destroy',$user->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Deactive</button>
                                        </form>
                                        @else
                                        <form method="post" action="{{ route('backend.users.destroy',$user->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Active</button>
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
    {{ $users->links() }}
</div>
@endsection
