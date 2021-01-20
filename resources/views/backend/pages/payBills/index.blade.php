@extends('backend.layouts.app', [
    'namePage' => 'payBills',
    'class' => 'sidebar-mini',
    'activePage' => 'payBills',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> PayBills List</h4>
                    <div class="pull-right">
                        <a href="{{ route('payBill.create') }}">
                            <button class="btn btn-primary">Pay</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Account No</th>
                                <th>Company</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach($payBills as $payBill)
                                <tr>
                                    <td>{{ $payBill->id }}</td>
                                    <td>{{ $payBill->user_id }}</td>
                                    <td>{{ $payBill->name }}</td>
                                    <td>{{ $payBill->acc_no }}</td>
                                    <td>{{ $payBill->company }}</td>
                                    <td>{{ $payBill->amount }}</td>
                                    <td>{{ $payBill->status }}</td>
                                    <td>
                                        @if( $payBill->status=='pending' )
                                            <form method="post" action="{{ route('payBill.destroy',$payBill->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                            <form method="post" action="{{ route('payBill.changeStatus',$payBill->id) }}">
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
