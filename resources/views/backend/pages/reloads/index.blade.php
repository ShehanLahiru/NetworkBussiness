@extends('backend.layouts.app', [
    'namePage' => 'reloads',
    'class' => 'sidebar-mini',
    'activePage' => 'reloads',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Reloads List</h4>
                    <div class="pull-right">
                        <a href="{{ route('reload.create') }}">
                            <button class="btn btn-primary">Reload</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Number</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach($reloads as $reload)
                                <tr>
                                    <td>{{ $reload->id }}</td>
                                    <td>{{ $reload->user_id }}</td>
                                    <td>{{ $reload->number }}</td>
                                    <td>{{ $reload->amount }}</td>
                                    <td>{{ $reload->status }}</td>
                                    <td>
                                        @if( $reload->status=='pending' )
                                            <form method="post" action="{{ route('reload.destroy',$reload->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                            <form method="post" action="{{ route('reload.changeStatus',$reload->id) }}">
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
