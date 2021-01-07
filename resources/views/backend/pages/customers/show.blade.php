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
                    <div class="pull-right">
                        <a href="{{ route('backend.customers.index') }}">
                            <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                        </a>
                    </div>
                    <div class="card-header">
                        <h4 class="card-title"> Mesaage</h4>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="name">{{__(" Name ")}}</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name',$customer->name) }}">
                                        @include('backend.alerts.feedback', ['field' => 'name'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="email">{{__(" Email ")}}</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email',$customer->email) }}">
                                        @include('backend.alerts.feedback', ['field' => 'email'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="contact_no">{{__(" Contact No ")}}</label>
                                        <input type="text" name="contact_no" class="form-control" value="{{ old('contact_no',$customer->contact_no) }}">
                                        @include('backend.alerts.feedback', ['field' => 'contact_no'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="message">{{__(" Message")}}</label>
                                        <textarea type="text" rows="20" name="message" class="form-control" style="border:1px solid #E3E3E3">{{ old('message',$customer->message) }}</textarea>
                                        @include('backend.alerts.feedback', ['field' => 'message'])
                                    </div>
                                </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <!-- Laravel Javascript Validation -->--}}
    {{--    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
    {{--    {!! JsValidator::formRequest('App\Http\Requests\CMS\AdCreateRequest', '#traditional_song_update') !!}--}}
@endsection
  