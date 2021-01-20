@include('frontend.layouts.head')
<div class="site-section" style="background-image: url(images/main12.jpg); margin-top:1px;background-size: cover;
    background-repeat: no-repeat;">
    <div class="container">
        <div class="col-md-12 col-lg-12 mb-12">
            <div class="post-entry-main" style="background: rgba(0,0,0,.4)">
                <div class="text p-4">
                    <h2 class="h2 text-main-products" style="color: #fbc834">අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට 5කට විතර
                        දාන්න
                        පුලුවන්නේ අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට
                    </h2><br>
                    <h2 class="h2 text-main-products" style="color: #fbc834">අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට 5කට විතර
                        දාන්න
                        පුලුවන්නේ අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට
                    </h2><br>
                    <h2 class="h2 text-main-products" style="color: #fbc834">අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට 5කට විතර
                        දාන්න
                        පුලුවන්නේ අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට
                    </h2><br>
                    <h2 class="h2 text-main-products" style="color: #fbc834">අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට 5කට විතර
                        දාන්න
                        පුලුවන්නේ අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට
                    </h2><br>
                    <h2 class="h2 text-main-products" style="color: #fbc834">අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට 5කට විතර
                        දාන්න
                        පුලුවන්නේ අපිට 5කට විතර දාන්න පුලුවන්නේ අපිට
                    </h2><br>
                </div>
            </div>
        </div>
    </div>
    <div class="content"
        style="background: rgba(206, 157, 157, 0.4); margin-top:90px;margin-left:50px; margin-right:50px">
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4" style="">
                <button type="button" class=" btn btn-primary btn-lg" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" style="display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: auto;
                margin-bottom: auto">
                    Pay Reload
                </button>
            </div>

            <div class="col-md-4 col-lg-4 mb-4" style="">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1" style="display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: auto;
                margin-bottom: auto">
                    Pay Bills
                </button>
            </div>

            <div class="col-md-4 col-lg-4 mb-4" style="">
                <button type="button" class="btn btn-primary btn-lg " data-bs-toggle="modal"
                    data-bs-target="#exampleModal2" style="display: block;
               margin-left: auto;
                margin-right: auto;
                margin-top: auto;
                margin-bottom: auto">
                    Apply Loan
                </button>
            </div>
        </div>
    </div>
</div>



{{-- <div class="content">
    <div class="row">
        <div class="card-body" style="background:#002966;margin-left:40px;margin-right:40px;  border-radius: 40px;">
            @csrf
            <div class="author form-group">
                <div class="text p-4">
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                </div>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-primary float-lg-left" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Add balance
            </button>
            </div>

            <div class="col-md-6">
                <button type="button" class="btn btn-primary float-lg-right" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Add balance
            </button>
            </div>

        </div>
    </div>
</div> --}}
@auth
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Reloads List</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-lg-right" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Reload
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Reload</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route('reloads') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        @include('backend.alerts.success')
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="number">{{__("Number")}}</label>
                                                    <input type="text" name="number" class="form-control"
                                                        value="{{ old('number') }}" required>
                                                    @include('backend.alerts.feedback', ['field' => 'number'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="amount">{{__("Amount")}}</label>
                                                    <input type="text" name="amount" class="form-control"
                                                        value="{{ old('amount') }}" required>
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Pay</button>
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
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                            @foreach($reloads as $reload)
                            <tr>
                                <td>{{ $reload->id }}</td>
                                <td>{{ $reload->amount }}</td>
                                <td>{{ $reload->status }}</td>
                                <td>{{ $reload->created_at }}</td>
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

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Billings List</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-lg-right" data-bs-toggle="modal"
                        data-bs-target="#exampleModal1">
                        Pay Bills
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pay Bills</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route('payBills') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        @include('backend.alerts.success')
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="name">{{__("Name")}}</label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ old('name') }}" required>
                                                    @include('backend.alerts.feedback', ['field' => 'name'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="acc_no">{{__("Account No")}}</label>
                                                    <input type="text" name="acc_no" class="form-control"
                                                        value="{{ old('acc_no') }}" required>
                                                    @include('backend.alerts.feedback', ['field' => 'acc_no'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="company">{{__("Company")}}</label>
                                                    <select name="company" class="form-control"  style="border:1px solid #E3E3E3" required>
                                                        <option value="Insurance">Insurance</option>
                                                        <option value="DialogTv">DialogTv</option>
                                                        <option value="Sri Lanka Telecom">Sri Lanka Telecom</option>
                                                        <option value="Dialog">Dialog</option>
                                                        <option value="Mobitel">Mobitel</option>
                                                        <option value="Etisalat">Etisalat</option>
                                                        <option value="Hutch">Hutch</option>
                                                    </select>
                                                    @include('backend.alerts.feedback', ['field' => 'company'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="amount">{{__("Amount")}}</label>
                                                    <input type="text" name="amount" class="form-control"
                                                        value="{{ old('amount') }}" required>
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Pay</button>
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
                            <th>Company</th>
                            <th>Account No</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                            @foreach($payBills as $payBill)
                            <tr>
                                <td>{{ $payBill->id }}</td>
                                <td>{{ $payBill->company }}</td>
                                <td>{{ $payBill->acc_no }}</td>
                                <td>{{ $payBill->amount }}</td>
                                <td>{{ $payBill->status }}</td>
                                <td>{{ $payBill->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Loans List</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-lg-right" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">
                        Apply Loan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apply Loans</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route('loans') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        @include('backend.alerts.success')
                                        <div class="row">
                                            <div class="col-md-7 pr-1">
                                                <div class="form-group">
                                                    <label for="amount">{{__("Amount")}}</label>
                                                    <input type="text" name="amount" class="form-control"
                                                        value="{{ old('amount') }}" required>
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Apply</button>
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
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                            @foreach($loans as $loan)
                            <tr>
                                <td>{{ $loan->id }}</td>
                                <td>{{ $loan->amount }}</td>
                                <td>{{ $loan->status }}</td>
                                <td>{{ $loan->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
</div>
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
