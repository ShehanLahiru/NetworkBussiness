@extends('backend.layouts.app', [
    'namePage' => 'accounts',
    'class' => 'sidebar-mini',
    'activePage' => 'accounts',
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
                    {{-- <div class="pull-right">
                        <a href="{{ route('backend.accounts.create') }}">
                            <button class="btn btn-primary">Add</button>
                        </a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>From</th>
                                <th>Amount</th>
                            </thead>
                            <tbody>
                                @foreach($accounts as $account)
                                <tr>
                                    <td>{{ $account->id }}</td>
                                    <td>{{ $account->name }}</td>
                                    <td>{{ $account->child_name }}</td>
                                    <td>{{ $account->amount }}</td>
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
