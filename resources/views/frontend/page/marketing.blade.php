@include('frontend.layouts.head')
<div class="content">
    <div class="row">
        <div class="card-body" style="background:#002966;margin-left:40px;margin-right:40px;  border-radius: 40px;">
            @csrf
            <div class="author form-group">
                <div class="text p-4">
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
                    <h2 class="h2 text-main">You have earned Rs dhshhfdj hfdhjkshjkh kfdhkjahkjh fdkjhkjhjk</h2>
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
                    <h4 class="card-title"> User List</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-lg-right" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Add balance
                    </button>

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
                                <form method="post" action="{{ route('account.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        @include('backend.alerts.success')
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

@include('frontend.layouts.footer')
