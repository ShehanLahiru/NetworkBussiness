@include('frontend.layouts.head')
<div class="site-blocks-cover inner-page overlay" style="background-image: url(images/img_4_colored.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
                <h1 class="mb-5">Projects</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            @foreach ($projects as $project )
            <div class="col-md-12 col-lg-12 mb-12">
                <div class="post-entry bg-white">
                    <div class="image">
                        <img src={{ asset($project->image_url) }} alt="Image" class="img-fluid">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-black">{{ $project->title }}</h2>
                        <h5 class="text-details">{{ $project->description }}
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-md-12 col-lg-12 mb-12">
                <div class="post-entry bg-white">
                    <div class="image">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-black">Lorem ipsum dolor sit amet</h2>
                        <h5 class="text-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error
                            perspiciatis odit ullam officia.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias fugiat facilis quasi ratione
                            ducimus ipsam!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit
                            ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Alias fugiat facilis quasi ratione ducimus ipsam!
                        </h5>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row">
        <div class="col-md-12 text-center">
          <div class="site-block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div> --}}
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
