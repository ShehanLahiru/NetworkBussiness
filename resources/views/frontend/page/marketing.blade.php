@include('frontend.layouts.head')
<div class="site-section" style="background-image: url(images/main12.jpg); margin-top:1px;background-size: cover;
    background-repeat: no-repeat">
    <div class="row">
        <div class="col-md-12 col-lg-9 mb-12">
            <div class="post-entry-main" style="background: rgba(0,0,0,.4)">
                <div class="text p-4">
                    <h2 class="h2 text-main-products" style="color: #fbc834">
                        <h2 class="h2 text-main-products" style="color: #fbc834">ඉතා පහසුවෙන් අන්තර්ජාලයෙන් මුදල්
                            ඉපැයීමට අප හා එකතුවෙන්න..
                        </h2>
                        <h2 class="h2 text-main-products" style="color: #fbc834">
                            <h2 class="h2 text-main-products" style="color: #fbc834">ඉතා පහසුවෙන් අන්තර්ජාලයෙන් මුදල්
                                ඉපැයීමට අප හා එකතුවෙන්න..
                            </h2>
                            <h2 class="h2 text-main-products" style="color: #fbc834">
                                <h2 class="h2 text-main-products" style="color: #fbc834">ඉතා පහසුවෙන් අන්තර්ජාලයෙන්
                                    මුදල් ඉපැයීමට අප හා එකතුවෙන්න..
                                </h2>
                                <h2 class="h2 text-main-products" style="color: #fbc834">
                                    <h2 class="h2 text-main-products" style="color: #fbc834">ඉතා පහසුවෙන් අන්තර්ජාලයෙන්
                                        මුදල් ඉපැයීමට අප හා එකතුවෙන්න..
                                    </h2>
                                    <h2 class="h2 text-main-products" style="color: #fbc834">
                                        <h2 class="h2 text-main-products" style="color: #fbc834">ඉතා පහසුවෙන්
                                            අන්තර්ජාලයෙන් මුදල් ඉපැයීමට අප හා එකතුවෙන්න..
                                        </h2>
                </div>
            </div>
        </div>
        @auth
        <div class="col-md-12 col-lg-3 mb-12">
            <div class="col-md-12 col-lg-12 mb-4" style="">
                <button type="button" class="btn btn-lg" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2" style="display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: auto;
                margin-bottom: auto;
                background-image: linear-gradient(-180deg, #2184AB 0%, #143868 100%);border-radius: 10px; font-weight: 1000;">
                    Copy Invite Link
                </button>
            </div>
            <div class="col-md-12 col-lg-12 mb-4" style="">
                <button type="button" class="btn btn-lg" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" style="display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: auto;
                margin-bottom: auto;
                background-image: linear-gradient(-179deg, #5CF854 0%, #3EBA1F 100%);border-radius: 10px; font-weight: 1000;">
                    Add balance
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Invite Friend Link</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="copy">
                            <textarea cols="50"
                                id="url">{{ config('app.url') }}/registerWithUs&&234/{{ auth::id() }}</textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button onclick="copyToClipboard('url')" class="btn btn-primary">Copy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endauth
    </div>
</div>
@auth
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- <h4 class="card-title">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-lg-right" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Add balance
                    </button> --}}
                    </h4>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add balance</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route('account.add') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        @include('backend.alerts.success')
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="amount">{{__("Amount")}}</label>
                                                    <select name="amount" class="form-control"
                                                        style="border:1px solid #E3E3E3" required>
                                                        <option value=1500.00>1500</option>
                                                    </select>
                                                    @include('backend.alerts.feedback', ['field' => 'amount'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label class="d-block" for="title">{{__(" Voucher")}}</label>
                                                    <img class="gal-img prev_img" id="prev_img"
                                                        src="{{asset('assets/img/dummy.jpg')}}"
                                                        style="width:250px;height:250px">
                                                    <input type="file" class="custom-file-input" name="image"
                                                        id="custom-file-input">
                                                    @include('backend.alerts.feedback', ['field' => 'image'])
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="card-footer ">
                                        <button type="submit"
                                            class="btn btn-primary float-right btn-round">{{__('Create')}}</button>
                            </div> --}}
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                            @foreach($accounts as $account)
                            <tr>
                                <td>{{ $account->id }}</td>
                                <td>{{ $account->name }}</td>
                                <td>{{ $account->amount }}</td>
                                <td>{{ $account->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endauth
<script>
    function copyToClipboard(id) {
        var dummy = document.getElementById(id);
        dummy.select();
        document.execCommand('copy');
    }
</script>
<script>
    $("#ofBar").hide();

$(document).ready(function () {
    //load upload image preview
    $(document).on("click", "#prev_img", function () {
        $("#custom-file-input").click();
    });

    $(document).on("change", "input[type=file]", function () {
        var currentEle = $(this);
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                currentEle
                    .closest(".form-group")
                    .find("#prev_img")
                    .attr("src", e.target.result);
            };

            reader.readAsDataURL(this.files[0]);
        }
    });
    //load upload image preview
    $(document).on("click", "#prev_img2", function () {
        $("#custom-file-input2").click();
    });

    $(document).on("change", "input[type=file]", function () {
        var currentEle = $(this);
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                currentEle
                    .closest(".form-group")
                    .find("#prev_img2")
                    .attr("src", e.target.result);
            };

            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>

@include('frontend.layouts.footer')
