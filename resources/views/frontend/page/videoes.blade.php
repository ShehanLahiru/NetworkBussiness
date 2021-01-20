@include('frontend.layouts.head')
<div class="site-section">
    <div class="container">
        <div class="row no-gutters align-items-stretch h-100">
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                   <iframe src="https://www.youtube.com/embed/VA23BcWW1FY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="text p-4">
                        <h2 class="h2 text-main">Title</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                   <iframe src="https://www.youtube.com/embed/VA23BcWW1FY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="text p-4">
                        <h2 class="h2 text-main">Title</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                   <iframe src="https://www.youtube.com/embed/VA23BcWW1FY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="text p-4">
                        <h2 class="h2 text-main">Title</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                   <iframe src="https://www.youtube.com/embed/VA23BcWW1FY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="text p-4">
                        <h2 class="h2 text-main">Title</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                   <iframe src="https://www.youtube.com/embed/VA23BcWW1FY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="text p-4">
                        <h2 class="h2 text-main">Title</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-6">
                <div class="post-entry-products">
                   <iframe src="https://www.youtube.com/embed/VA23BcWW1FY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="text p-4">
                        <h2 class="h2 text-main">Title</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')



{{-- <div class="container" style="background-color: rgba(255,255,255);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-left:40px;margin-right:40px;">
 <div class="video" id="player">

    <iframe  id="player" src=https://www.youtube.com/embed/OBF4kZS9baw ></iframe>
</div>


<style>
.video {
  position: relative;
  width: 100%;
  overflow: hidden;
  height:70%;
}
.video iframe, .video object, .video embed {
	position:absolute;
	top:0;
	left:0;
    padding-top: 56.25%;
}
}
</style>

<script src="http://www.youtube.com/iframe_api"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>

    // create youtube player
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
        //   height: '450',
        //   width: '800',
          videoId: 'OBF4kZS9baw',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
    }

    // autoplay video
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // when video ends
    function onPlayerStateChange(event) {
        if(event.data === 0) {
            alert('done');
        }
    }

 </script> --}}
