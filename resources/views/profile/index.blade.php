@include('frontend.layouts.head')

    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user"style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                    <div class="image">
                        <img src="images/pro.png" alt="...">
                        <h5 class="title"style="font-family: cursive;color:black;font-weight: 1000;">{{$user->username}}</h5>
                    </div>
                    <div class="card-body">
                        <form id="profile_update" method="post" action="#"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="author form-group">
                                <div class="post-entry" style="margin-left:0px;">
                                    <div class="text p-4">
                                        <h2 class="h2 text-main">You have earned Rs.{{ $user->balance }} </h2>

                                    </div>
                                </div>
                                {{-- <a href="#">
                                    <img class="avatar border-gray prev_img" id="prev_img"
                                         {{-- src="{{$user->image!=null?$user->image:asset('uploads/profile/default.jpg')}}"
                                         alt="...">
                                    <input type="file" class="custom-file-input" id="custom-file-input" name="image">
                                    <h5 class="title">$user</h5>
                                </a> --}}
                                {{-- <button type="submit" class="btn btn-primary btn-round float-left">{{__('Edit Profile')}}</button> --}}
                            </div>
                        </form>
                        <a href="{{ route('profileEdit') }}">
                        <button type="button" class="btn btn-primary float-lg-left" >
                        Edit Profile
                    </button>
                         </a>
                        <button type="button" class="btn float-lg-right" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" style=" background-image: linear-gradient(-179deg, #5CF854 0%, #3EBA1F 100%);border-radius: 10px; font-weight: 1000;";">
                        Withdraw
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Withdraw your balance</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route('withdraw.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        @include('backend.alerts.success')
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="name">{{__("Name")}}</label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ old('name') }}">
                                                    @include('backend.alerts.feedback', ['field' => 'name'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="acc_no">{{__("Account Number")}}</label>
                                                    <input type="text" name="acc_no" class="form-control"
                                                        value="{{ old('acc_no') }}">
                                                    @include('backend.alerts.feedback', ['field' => 'acc_no'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="branch">{{__("Branch")}}</label>
                                                    <input type="text" name="branch" class="form-control"
                                                        value="{{ old('branch') }}">
                                                    @include('backend.alerts.feedback', ['field' => 'branch'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="amount">{{__("Amount")}}</label>
                                                    <input type="text" name="amount" class="form-control"
                                                        value="{{ old('amount') }}">
                                                    @include('backend.alerts.feedback', ['field' => 'amount'])
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="card-footer ">
                                        <button type="submit"
                                            class="btn btn-primary float-right btn-round">{{__('Create')}}</button>
                                    </div> --}}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-8" style="background-color: black">
                <div class="card">
                    <div class="card-header" style="background:rgba(165, 194, 223); border-radius: 3px; height:70px;border: 3px  white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                        <h5 class="title" style=" font-family: cursive;color:black;font-weight: 1000;">{{$user->name}}</h5>
                        <h5 class="title"style="font-family: cursive;color:black;font-weight: 1000;">{{$user->id}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="site-section" style="background-color: rgba(255,255,255);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="container">
                                <div class="row no-gutters align-items-stretch h-100">
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <a href="{{ route('marketing') }}"> <img src={{ asset("images/marketing1.jpg") }} alt="Image" class="img-fluid"
                                                    style="height: 200px"></a>
                                            </div>
                                            <div class="text p-4">
                                                <a href="{{ route('marketing') }}">  <h2 class="h2 text-main">Marketing</h2></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <a href="{{ route('productCategories') }}">  <img src={{ asset("images/products3.jpg") }} alt="Image" class="img-fluid"
                                                    style="height: 200px"></a>
                                            </div>
                                            <div class="text p-4">
                                                <a href="{{ route('productCategories') }}"> <h2 class="h2 text-main">Products</h2></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <a href="{{ route('billing') }}"> <img src={{ asset("images/billing1.jpg") }} alt="Image" class="img-fluid" style="height: 200px"></a>
                                            </div>
                                            <div class="text p-4">
                                                <a href="{{ route('billing') }}"> <h2 class="h2 text-main">Bill Payments</h2></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <a href="{{ route('videoes') }}"><img src={{ asset("images/youtube.jpg") }} alt="Image" class="img-fluid" style="height: 200px"></a>
                                            </div>
                                            <div class="text p-4">
                                                <a href="{{ route('videoes') }}">  <h2 class="h2 text-main">Watch videos</h2></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#img_btn").click(function () {
                $(".hidden-file").click();
            });
            $("#img-file").change(function () {
                let fileName = $(this).val();
                $("#img_btn").val(fileName);
            })
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

{{-- @include('frontend.layouts.footer') --}}

