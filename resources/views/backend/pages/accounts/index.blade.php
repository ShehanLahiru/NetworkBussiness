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
                    <form id="item" method="post" action="{{ route('backend.searchByID','Account') }}"
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
                    <form id="item" method="post" action="{{ route('backend.searchByDate','Account') }}"
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
    {{ $accounts->links() }}
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
