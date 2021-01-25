<base href="/public">
@include('frontend.layouts.head')
<div class="content" style="background-color: rgba(255,255,255);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-left:40px;margin-right:40px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Update </h4>
                </div>
                <div class="card-body">
                    <form id="riddle_update" method="post" action="{{ route('backend.users.update', $user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('backend.alerts.success')
                        <div class="row">
                        <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="name">{{__(" Name ")}}</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name',$user->name) }}"required>
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
                                    <label for="username">{{__(" Username ")}}</label>
                                    <input type="text" name="username" class="form-control"
                                        value="{{ old('username',$user->username) }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'username'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="nic">{{__(" NIC ")}}</label>
                                    <input type="text" name="nic" class="form-control"
                                        value="{{ old('nic',$user->nic) }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'nic'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="contact_no">{{__(" Contact No ")}}</label>
                                    <input type="text" name="contact_no" class="form-control"
                                        value="{{ old('contact_no',$user->contact_no) }}">
                                    @include('backend.alerts.feedback', ['field' => 'contact_no'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="address">{{__(" Address ")}}</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ old('address',$user->address) }}">
                                    @include('backend.alerts.feedback', ['field' => 'address'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="password">{{__("Password")}}</label>
                                    <input type="password" name="password" class="form-control"
                                        value="{{ old('password') }}"required>
                                    @include('backend.alerts.feedback', ['field' => 'password'])
                                </div>
                            </div>
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

