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
                    <form id="item" method="post" action="{{ route('backend.searchByDate','Reload') }}"
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
    {{ $reloads->links() }}
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
