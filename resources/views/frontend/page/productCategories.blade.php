@include('frontend.layouts.head')

<div class="site-section">
    <div class="container">
        <div class="row no-gutters align-items-stretch h-100">
            @foreach($productCategories as $productCategory)
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                    <div class="image">
                        <img src={{ asset($productCategory->image_url) }} alt="Image" class="img-fluid" style="height: 200px">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-main"> <a href="{{ route('products', $productCategory->id) }}">{{$productCategory->name}}</a></h2>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                    <div class="image">
                        <img src={{ asset("images/vehicals.jpg") }} alt="Image" class="img-fluid"
                            style="height: 200px">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-main"> <a href="#">Vehicals</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                    <div class="image">
                        <img src={{ asset("images/properties.jpg") }} alt="Image" class="img-fluid"
                            style="height: 200px">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-main"> <a href="#">Properties</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                    <div class="image">
                        <img src={{ asset("images/garderns.jpg") }} alt="Image" class="img-fluid" style="height: 200px">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-main"> <a href="#">Home and Gardens</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                    <div class="image">
                        <img src={{ asset("images/fashion.jpg") }} alt="Image" class="img-fluid" style="height: 200px">
                    </div>
                        <div class="text p-4">
                            <h2 class="h2 text-main"> <a href="#">Fashions & Beauty</a></h2>
                        </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                    <div class="image">
                        <img src={{ asset("images/education.jpg") }} alt="Image" class="img-fluid" style="height: 200px">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-main"> <a href="#">Educations</a></h2>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
