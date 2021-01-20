@extends('backend.layouts.app', [
    'namePage' => 'withdraws',
    'class' => 'sidebar-mini',
    'activePage' => 'withdraws',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Withdraw List</h4>
                    {{-- <div class="pull-right">
                        <a href="{{ route('withdraw.create') }}">
                            <button class="btn btn-primary">Add</button>
                        </a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Account_No</th>
                                <th>Status</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach($withdraws as $withdraw)
                                <tr>
                                    <td>{{ $withdraw->id }}</td>
                                    <td>{{ $withdraw->user_id }}</td>
                                    <td>{{ $withdraw->name }}</td>
                                    <td>{{ $withdraw->amount }}</td>
                                    <td>{{ $withdraw->status }}</td>
                                    <td>{{ $withdraw->acc_no }}</td>
                                    <td>
                                        @if( $withdraw->status=='pending' )
                                            <form method="post" action="{{ route('withdraw.destroy',$withdraw->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                            <form method="post" action="{{ route('withdraw.changeStatus',$withdraw->id) }}">
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
