@include('frontend.layouts.head')

    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user"style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                    <div class="image">
                        <img src="images/pro.png" alt="...">
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
                                <button type="submit" class="btn btn-primary btn-round float-left">{{__('Edit Profile')}}</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-8" style="background-color: black">
                <div class="card">
                    <div class="card-header" style="background:rgba(165, 194, 223); border-radius: 3px; height:70px;border: 3px  white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                        <h5 class="title">{{$user->name}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="site-section" style="background-color: rgba(255,255,255);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="container">
                                <div class="row no-gutters align-items-stretch h-100">
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <img src={{ asset("images/youtube.jpg") }} alt="Image" class="img-fluid" style="height: 200px">
                                            </div>
                                            <div class="text p-4">
                                                <h2 class="h2 text-main">Watch videos</h2>
                                                <h5 class="text-details">
                                                    <p class="mb-0"><a href="#" class=""><small
                                                                class="text-uppercase font-weight-bold ">Read
                                                                More</small></a></p>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <img src={{ asset("images/marketing1.jpg") }} alt="Image" class="img-fluid" style="height: 200px">
                                            </div>
                                            <div class="text p-4">
                                                <h2 class="h2 text-main">Marketing</h2>
                                                <h5 class="text-details">
                                                    <p class="mb-0"><a href="#" class=""><small
                                                                class="text-uppercase font-weight-bold ">Read
                                                                More</small></a></p>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <img src={{ asset("images/products3.jpg") }} alt="Image" class="img-fluid" style="height: 200px">
                                            </div>
                                            <div class="text p-4">
                                                <h2 class="h2 text-main">Products</h2>
                                                <h5 class="text-details">
                                                    <p class="mb-0"><a href="#" class=""><small
                                                                class="text-uppercase font-weight-bold ">Read
                                                                More</small></a></p>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <img src={{ asset("images/billing1.jpg") }} alt="Image" class="img-fluid" style="height: 200px">
                                            </div>
                                            <div class="text p-4">
                                                <h2 class="h2 text-main">Bill Payments and Loans</h2>
                                                <h5 class="text-details">
                                                    <p class="mb-0"><a href="#" class=""><small
                                                                class="text-uppercase font-weight-bold ">Read
                                                                More</small></a></p>
                                                </h5>
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

{{-- @include('frontend.layouts.footer') --}}

