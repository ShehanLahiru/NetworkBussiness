@extends('backend.layouts.app', [
'namePage' => 'users',
'class' => 'sidebar-mini',
'activePage' => 'users',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="pull-right">
                    <a href="{{ route('backend.users.index') }}">
                        <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                    </a>
                </div>
                <div class="card-header">
                    <h4 class="card-title"> Update Users</h4>
                </div>
                <div class="card-body">
                    <form id="riddle_update" method="post" action="{{ route('backend.users.update', $user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('backend.alerts.success')
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="name">{{__(" Name ")}}</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ old('name',$user->name) }}">
                                    @include('backend.alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="email">{{__(" Email ")}}</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{ old('email',$user->email) }}">
                                    @include('backend.alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="balance">{{__(" Balance ")}}</label>
                                    <input type="text" name="balance" class="form-control"
                                        value="{{ old('email',$user->balance) }}">
                                    @include('backend.alerts.feedback', ['field' => 'balance'])
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit"
                                class="btn btn-primary float-right btn-round">{{__('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <!-- Laravel Javascript Validation -->--}}
{{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
{{-- {!! JsValidator::formRequest('App\Http\Requests\CMS\AdCreateRequest', '#traditional_song_update') !!}--}}
@endsection

