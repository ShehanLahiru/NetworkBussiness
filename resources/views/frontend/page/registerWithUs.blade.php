<base href="/public">
@include('frontend.layouts.head')
<div class="panel-header panel-header-sm">
    @include('backend.alerts.success')
</div>
<div class="site-section" style="background-image: url(images/main1.jpg);background-size: cover;
background-repeat: no-repeat;">
    <div class="container"style="margin-top:0px">
        <div class="row">
            <div class="col-md-12 col-lg-12 mb-12">
                <div class="card"  style="box-shadow: 3px 6px 15px 0 rgba(0,0,0,.4);background: rgba(0,0,0,.6);border-radius: 40px;border:2px solid #fbc834">
                    <div class="card-header">
                        <h4 class="card-title" style="color: white"> Register Here</h4>
                    </div>
                    <div class="card-body">
                        <form id="riddle_create" method="post" action="{{ route('register.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @include('backend.alerts.success')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="name"style="color: white">{{__("Name")}}</label>
                                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                                @include('backend.alerts.feedback', ['field' => 'name'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="username"style="color: white">{{__("Username")}}</label>
                                                <input type="text" name="username" class="form-control" value="{{ old('username') }}" style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                                @include('backend.alerts.feedback', ['field' => 'username'])
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="email"style="color: white">{{__("Email")}}</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                        @include('backend.alerts.feedback', ['field' => 'email'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="password"style="color: white">{{__("Password")}}</label>
                                        <input type="password" name="password" class="form-control" value="{{ old('password') }}" style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                        @include('backend.alerts.feedback', ['field' => 'password'])
                                    </div>
                                </div>
                            </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="contact_no"style="color: white">{{__("Contact No")}}</label>
                                                <input type="text" name="contact_no" class="form-control" value="{{ old('contact_no') }}" style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                                @include('backend.alerts.feedback', ['field' => 'contact_no'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="address"style="color: white">{{__("Adress")}}</label>
                                                <input type="text" name="address" class="form-control" value="{{ old('address') }}" style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                                @include('backend.alerts.feedback', ['field' => 'address'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 ">
                                            <div class="form-group">
                                                <label for="parent_id"style="color: white">{{__("Parent ID")}}</label>
                                                <input type="text" name="parent_id" class="form-control" value="{{$id}}" style="color: black;font-weight: 800;background: rgba(255,255,255,.4)"readonly>
                                                @include('backend.alerts.feedback', ['field' => 'parent_id'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="nic"style="color: white">{{__("NIC")}}</label>
                                                <input type="text" name="nic" class="form-control" value="{{ old('nic') }}" style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                                @include('backend.alerts.feedback', ['field' => 'nic'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <h5 class="title" style=" font-family: cursive;color:white;font-weight: 1000;">Already Registered, Please click <a href="{{ route('backend.login') }}">Here</a> to login</h5>
                                <button type="submit"
                                    class="btn btn-primary float-right btn-round">{{__('Register')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
