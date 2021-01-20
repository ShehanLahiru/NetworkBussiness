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
                <div class="pull-right">
                    <a href="{{ route('payBill.index') }}">
                        <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title"> Pay Bills</h4>
                </div>
                <div class="card-body">
                    <form id="riddle_create" method="post" action="{{ route('payBill.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @include('backend.alerts.success')
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="id">{{__("ID")}}</label>
                                    <input type="text" name="id" class="form-control" value="{{ old('id') }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'id'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="name">{{__("Name")}}</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="acc_no">{{__("Account No")}}</label>
                                    <input type="text" name="acc_no" class="form-control" value="{{ old('acc_no') }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'acc_no'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="company">{{__("Company")}}</label>
                                    <select name="company" class="form-control"  style="border:1px solid #E3E3E3" required>
                                        <option value="Insurance">Insurance</option>
                                        <option value="DialogTv">DialogTv</option>
                                        <option value="Sri Lanka Telecom">Sri Lanka Telecom</option>
                                        <option value="Dialog">Dialog</option>
                                        <option value="Mobitel">Mobitel</option>
                                        <option value="Etisalat">Etisalat</option>
                                        <option value="Hutch">Hutch</option>
                                    </select>
                                    @include('backend.alerts.feedback', ['field' => 'company'])
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
                                class="btn btn-primary float-right btn-round">{{__('Pay')}}</button>
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

