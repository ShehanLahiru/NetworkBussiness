@include('frontend.layouts.head')

    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="{{asset('assets')}}/img/bg5.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <form id="profile_update" method="post" action="#"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="author form-group">
                                <a href="#">
                                    <img class="avatar border-gray prev_img" id="prev_img"
                                         {{-- src="{{$user->image!=null?$user->image:asset('uploads/profile/default.jpg')}}" --}}
                                         alt="...">
                                    <input type="file" class="custom-file-input" id="custom-file-input" name="image">
                                    <h5 class="title">Shehan</h5>
                                </a>
                                <button type="submit" class="btn btn-primary btn-round">{{__('Update')}}</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-8" style="background-color: black">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">{{__(" User Profile")}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="site-section">
                            <div class="container">
                                <div class="row no-gutters align-items-stretch h-100">
                                    <div class="col-md-6 col-lg-6 mb-6">
                                        <div class="post-entry">
                                            <div class="image">
                                                <img src="1.jpeg" alt="Image" class="img-fluid" style="height: 250px">
                                            </div>
                                            <div class="text p-4">
                                                <h2 class="h2 text-main">fwkjhfjhjghjhjkhgj</h2>
                                                <h5 class="text-details">kfjwdjjhjgjjjkj
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
                                                <img src="1.jpeg" alt="Image" class="img-fluid" style="height: 250px">
                                            </div>
                                            <div class="text p-4">
                                                <h2 class="h2 text-main">fwkjhfjhjghjhjkhgj</h2>
                                                <h5 class="text-details">kfjwdjjhjgjjjkj
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
                                                <img src="1.jpeg" alt="Image" class="img-fluid" style="height: 250px">
                                            </div>
                                            <div class="text p-4">
                                                <h2 class="h2 text-main">fwkjhfjhjghjhjkhgj</h2>
                                                <h5 class="text-details">kfjwdjjhjgjjjkj
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
                                                <img src="1.jpeg" alt="Image" class="img-fluid" style="height: 250px">
                                            </div>
                                            <div class="text p-4">
                                                <h2 class="h2 text-main">fwkjhfjhjghjhjkhgj</h2>
                                                <h5 class="text-details">kfjwdjjhjgjjjkj
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

@include('frontend.layouts.footer')

