@include('frontend.layouts.head')
<div class="panel-header panel-header-sm">
    @include('backend.alerts.success')
</div>
<div class="site-section" style="background-image: url(images/main1.jpg);background-size: cover;
background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 mb-5">
                <div class="card"
                    style="box-shadow: 3px 6px 15px 0 rgba(0,0,0,.4);background: rgba(0,0,0,.6);border-radius: 40px;border:2px solid #fbc834">
                    <div class="card-header">
                        <h4 class="card-title" style="color: white"> Enter Your Message Here</h4>
                    </div>
                    <div class="card-body">
                        <form id="riddle_create" method="post" action=""
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="name" style="color: white">{{__("Name")}}</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                            style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                        @include('backend.alerts.feedback', ['field' => 'name'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="email" style="color: white">{{__("Email")}}</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email') }}"
                                            style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                        @include('backend.alerts.feedback', ['field' => 'email'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="contact_no" style="color: white">{{__("Contact Number")}}</label>
                                        <input type="text" name="contact_no" class="form-control"
                                            value="{{ old('contact_no') }}"
                                            style="color: black;font-weight: 800;background: rgba(255,255,255,.4)">
                                        @include('backend.alerts.feedback', ['field' => 'contact_no'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 pr-1">
                                    <div class="form-group">
                                        <label for="message" style="color: white">{{__("Meassage")}}</label>
                                        <textarea type="text" rows="5" name="message" class="form-control"
                                            style="border:1px solid #E3E3E3;color: black;font-weight: 700;background: rgba(255,255,255,.4)">{{ old('message') }}</textarea>
                                        @include('backend.alerts.feedback', ['field' => 'message'])
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
            <div class="col-md-12 col-lg-6 mb-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8788428067355!2d80.36915371477616!3d7.478628994605296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3398c00c0ebef%3A0xaa9f2ee1ef630972!2s304%20Kandy%20Rd%2C%20Kurunegala!5e0!3m2!1sen!2slk!4v1598436982730!5m2!1sen!2slk"
                    width="100%" height="100%" frameborder="1"
                    style="border:2px solid #fbc834;box-shadow: 3px 6px 15px 0 rgba(0,0,0,.4);border-radius: 40px;"
                    allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
