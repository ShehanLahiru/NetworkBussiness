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
                                        <a href="{{ route('backend.users.edit',$user->id) }}">
                                            <button class="btn btn-default">Edit</button>
                                        </a>
                                        <form method="post" action="{{ route('backend.users.destroy',$user->id) }}">
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
