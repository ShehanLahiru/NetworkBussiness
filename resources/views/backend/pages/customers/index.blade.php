@extends('backend.layouts.app', [
'namePage' => 'customers',
'class' => 'sidebar-mini',
'activePage' => 'customers',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Message List</h4>
                    <div class=" pull-center">
                        <form id="item" method="post" action="{{ route('backend.messageSearchByDate') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="from">{{__(" From")}}</label>
                                        <input type="text" class="form-control" name="from" data-provide="datepicker">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="to">{{__("To")}}</label>
                                        <input type="text" class="form-control" name="to" data-provide="datepicker">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-round">{{__('Search')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Received</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->contact_no }}</td>
                                    <td>{{ $customer->created_at }}</td>
                                    <td>
                                        <a href="{{ route('backend.customers.show',$customer->id) }}">
                                            <button class="btn btn-default">View</button>
                                        </a>
                                        {{-- <form method="post"
                                            action="{{ route('backend.customers.destroy',$customer->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form> --}}
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
    {{ $customers->links() }}
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(".form-control").attr("autocomplete", "off");
    $(document).ready(function() {
        $('.datepicker').datepicker();
    });
</script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

@endsection
