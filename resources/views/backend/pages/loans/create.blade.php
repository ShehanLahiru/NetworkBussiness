@extends('backend.layouts.app', [
'namePage' => 'loans',
'class' => 'sidebar-mini',
'activePage' => 'loans',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="pull-right">
                    <a href="{{ route('loan.index') }}">
                        <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title"> Loan</h4>
                </div>
                <div class="card-body">
                    <form id="riddle_create" method="post" action="{{ route('loan.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @include('backend.alerts.success')
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="id">{{__("ID")}}</label>
                                    <input type="text" name="id" class="form-control" value="{{ old('id') }}">
                                    @include('backend.alerts.feedback', ['field' => 'id'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="amount">{{__("Amount")}}</label>
                                    <input type="text" name="amount" class="form-control" value="{{ old('amount') }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'amount'])
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit"
                                class="btn btn-primary float-right btn-round">{{__('Submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <!-- Laravel Javascript Validation -->--}}
{{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
{{-- {!! JsValidator::formRequest('App\Http\Requests\CMS\AdCreateRequest', '#riddle_create') !!}--}}
@endsection



