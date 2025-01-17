@extends('charity.charity_master')
@section('title', 'Order Star Tokens')
@section('charity')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="p-2">
                    <h1 class="mb-0" style="color: #62896d"><strong>STAR TOKENS</strong></h1>
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('star.tokens.balance') }}">Star Tokens</a>
                        </li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>

                    @include('charity.modals.star-tokens')
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-5">

                        <div id="basic-pills-wizard" class="twitter-bs-wizard">
                            <ul class="twitter-bs-wizard-nav">
                                <li class="nav-item">
                                    <a href="#pricing-details" class="nav-link" data-toggle="tab">
                                        <span class="step-number">01</span>
                                        <span class="step-title">View Pricing & Plans</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#order-form" class="nav-link" data-toggle="tab">
                                        <span class="step-number">02</span>
                                        <span class="step-title">Submit Order Form</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#payment-instructions" class="nav-link" data-toggle="tab">
                                        <span class="step-number">03</span>
                                        <span class="step-title">Read Payment Instructions</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#payment-proof" class="nav-link" data-toggle="tab">
                                        <span class="step-number">04</span>
                                        <span class="step-title">Upload Proof of Payment</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content twitter-bs-wizard-tab-content">
                                <div class="tab-pane" id="pricing-details">
                                    <h4>Step 1:</h4>
                                    <p>Read through the offers of CAVIOM and decide what to purchase.</p>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-md-4">
                                                    <img class="card-img img-fluid" src="{{ asset('backend/assets/images/star-tokens/pro.svg') }}" alt="Caviom Pro">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h4>CAVIOM PRO</h4>
                                                        <div class="card-text">
                                                            <ul>
                                                                <li>1 Month</li>
                                                                <li>5 Featured Project Credits</li>
                                                                <li>Unli Projects</li>
                                                                <li>Unli Gift Givings</li>
                                                            </ul>
                                                            <h4 class="card-title">Php 249.00</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-md-4">
                                                    <img class="card-img img-fluid" src="{{ asset('backend/assets/images/star-tokens/premium.svg') }}" alt="Caviom Premium">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h4>CAVIOM PREMIUM</h4>
                                                        <div class="card-text">
                                                            <ul>
                                                                <li>12 Months</li>
                                                                <li>50 Featured Project Credits</li>
                                                                <li>Unli Projects</li>
                                                                <li>Unli Gift Givings</li>
                                                            </ul>
                                                            <h4 class="card-title">Php 2399.00</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-md-4">
                                                    <img class="card-img img-fluid" src="{{ asset('backend/assets/images/star-tokens/tokens.svg') }}" alt="Prepaid Star Tokens">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h4>PREPAID STAR TOKENS</h4>
                                                        <div class="card-text">
                                                            <ul class="list-unstyled mb-0">
                                                                <li>600 Star Tokens <h4 class="card-title">Php 29.00</h4></li>
                                                                <li>1500 Star Tokens <h4 class="card-title">Php 59.00</h4></li>
                                                                <li>3000 Star Tokens <h4 class="card-title">Php 109.00</h4></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="order-form">
                                    <h4>Step 2:</h4>
                                    <p>Kindly fill-out the order form.</p>

                                    <form method="POST" action="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Items</label>
                                                    <select name="subscription_type" class="form-select select2-search-disable" aria-label="Default select example">
                                                        <option value="" selected>Select a Subscription...</option>
                                                        <option value="PRO">Caviom PRO</option>
                                                        <option value="PREMIUM">Caviom PREMIUM</option>
                                                    </select>
                                                    @error('subscription_type')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-1 text-center">
                                                <div class="mb-3">
                                                    <label class="form-label">Quantity</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-1 text-center">
                                                <div class="mb-3">
                                                    <label class="form-label">Subtotal</label>
                                                    <span class="form-control" style="border: none">PHP 0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-control" style="border: none">PHP 29.00 ————————————————— <span class="float-end">600 STAR TOKENS</span></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <input name="plan_a_qty" type="number" class="form-control text-center" value="0" min="0">
                                                </div>
                                            </div>

                                            <div class="col-lg-1 text-center">
                                                <div class="mb-3">
                                                    <span class="form-control" style="border: none">PHP 0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-control" style="border: none">PHP 59.00 ————————————————— <span class="float-end">1,500 STAR TOKENS</span></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <input name="plan_b_qty" type="number" class="form-control text-center" value="0" min="0">
                                                </div>
                                            </div>

                                            <div class="col-lg-1 text-center">
                                                <div class="mb-3">
                                                    <span class="form-control" style="border: none">PHP 0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-control" style="border: none">PHP 109.00 ————————————————— <span class="float-end">3,000 STAR TOKENS</span></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <input name="plan_c_qty" type="number" class="form-control text-center" value="0" min="0">
                                                </div>
                                            </div>

                                            <div class="col-lg-1 text-center">
                                                <div class="mb-3">
                                                    <span class="form-control" style="border: none">PHP 0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-7 mt-3">

                                            </div>
                                            <div class="col-lg-1 text-center mt-4">
                                                <label class="form-label">TOTAL</label>
                                                <span class="form-control text-center" style="border: none">PHP 0</span>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane" id="payment-instructions">
                                    <h4>Step 3:</h4>
                                    <p>Pay the <strong>EXACT AMOUNT</strong> with your chosen payment method.</p>

                                    <div class="row mt-4">
                                        <div class="col-md-3">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link mb-2 active" id="v-pills-gcash-tab" data-bs-toggle="pill" href="#v-pills-gcash" role="tab" aria-controls="v-pills-gcash" aria-selected="true">GCash</a>
                                                <a class="nav-link mb-2" id="v-pills-bpi-tab" data-bs-toggle="pill" href="#v-pills-bpi" role="tab" aria-controls="v-pills-bpi" aria-selected="false">BPI</a>
                                                <a class="nav-link mb-2" id="v-pills-metrobank-tab" data-bs-toggle="pill" href="#v-pills-metrobank" role="tab" aria-controls="v-pills-metrobank" aria-selected="false">Metrobank</a>
                                                <a class="nav-link mb-2" id="v-pills-other-tab" data-bs-toggle="pill" href="#v-pills-other" role="tab" aria-controls="v-pills-other" aria-selected="false">Other Banks</a>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-gcash" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="row my-3">
                                                        <div class="col-sm-3">
                                                            <a class="image-popup-no-margins" title="Gcash QR of CAVIOM" href="{{ asset('backend/assets/images/payment/gcash.PNG') }}">
                                                                <img class="img-fluid rounded" alt="Donation Proof" src="{{ asset('backend/assets/images/payment/gcash.PNG') }}" style="max-height: 60vh">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-9 p-4">
                                                            <h4>How to send money to CAVIOM via GCash QR?</h4>
                                                            <ul class="list-unstyled my-4">
                                                                <li class="mb-2"><strong>Step 1.</strong> Log in to your GCash App and tap "Send Money" on your dashboard.</li>
                                                                <li class="mb-2"><strong>Step 2.</strong> Tap "Send via QR".</li>
                                                                <li class="mb-2"><strong>Step 3.</strong> Scan the QR code shown on the screen (Click the QR code to zoom).</li>
                                                                <li class="mb-2"><strong>Step 4.</strong> Enter the EXACT AMOUNT and tap on NEXT.</li>
                                                                <li class="mb-2"><strong>Step 5.</strong> Review the amount and hit on SEND.</li>
                                                                <li class="mb-2"><strong>Step 6.</strong> SAVE the successful GCash transaction's receipt, and keep in mind the Reference no.</li>
                                                            </ul>

                                                            <p class="font-size-12 mt-4">
                                                                <strong>*</strong>The verification of payment processing usually takes 1-2 working days. We will send you an update via notifications. Thank you!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade p-5" id="v-pills-bpi" role="tabpanel" aria-labelledby="v-pills-bpi-tab">
                                                    <h4>
                                                        BPI Payment method will be available soon. Thank you for understanding.
                                                    </h4>
                                                    <p class="text-muted"> In the meantime, please use other available payment methods for your convenience.</p>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-metrobank" role="tabpanel" aria-labelledby="v-pills-metrobank-tab">
                                                    <div class="row my-3">
                                                        <div class="col-sm-3">
                                                            <a class="image-popup-no-margins" title="Metrobank QR of CAVIOM" href="{{ asset('backend/assets/images/payment/metrobank.jpg') }}">
                                                                <img class="img-fluid rounded" alt="Donation Proof" src="{{ asset('backend/assets/images/payment/metrobank.jpg') }}" style="max-height: 60vh">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-9 p-4">
                                                            <h4>How to transfer money to CAVIOM via Metrobank Web (QR)?</h4>
                                                            <ul class="list-unstyled my-4">
                                                                <li class="mb-2"><strong>Step 1.</strong> Log in to your Metrobank Web.</li>
                                                                <li class="mb-2"><strong>Step 2.</strong> Select QR Code  under your Dashboard's shortcuts.</li>
                                                                <li class="mb-2"><strong>Step 3.</strong> Click on Scan or Upload QR Code and hit NEXT.</li>
                                                                <li class="mb-2"><strong>Step 4.</strong> Scan or Upload the QR code shown on this screen.</li>
                                                                <li class="mb-2"><strong>Step 5.</strong> Select the account you wish to transact with and enter the EXACT AMOUNT.</li>
                                                                <li class="mb-2"><strong>Step 6.</strong> Review the transaction summary before hitting on CONTINUE to confirm.</li>
                                                                <li class="mb-2"><strong>Step 7.</strong> Enter your 6-digit passcode and the OTP sent to your mobile number, then click SUBMIT.</li>
                                                                <li><strong>Step 8.</strong> SAVE the successful transaction's receipt, and keep in mind the Reference no.</li>
                                                            </ul>
                                                            <p class="font-size-12 mt-4 my-1">
                                                                <strong>*</strong>You may refer to this <a class="btn-link" href="https://www.youtube.com/watch?v=gV2c8Zx6juY" target="_blank">video guide link by Metrobank</a> on how to transact via QR code.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <h4>How to transfer money to CAVIOM via Metrobank Mobile App?</h4>
                                                        <ul class="list-unstyled my-4">
                                                            <li class="mb-2"><strong>Step 1.</strong> Log in to your Metrobank App.</li>
                                                            <li class="mb-2"><strong>Step 2.</strong> Under your Current & Savings account, tap on the three dots <i class="ri-more-2-fill"></i>.</li>
                                                            <li class="mb-2"><strong>Step 3.</strong> Tap on TRANSACT <i class="mdi mdi-send"></i> and select TRANSFER TO MOBILE/ACCOUNT.</li>
                                                            <li class="mb-2"><strong>Step 4.</strong> Enter the account number <code>364-3364-556773</code> and the EXACT AMOUNT. Then tap on NEXT.</li>
                                                            <li class="mb-2"><strong>Step 5.</strong> Review the transaction summary before hitting on SUBMIT to confirm.</li>
                                                            <li class="mb-2"><strong>Step 6.</strong> Enter the OTP sent to your mobile number, then click SUBMIT.</li>
                                                            <li><strong>Step 7.</strong> SAVE the successful transaction's receipt, and keep in mind the Reference no.</li>
                                                        </ul>
                                                        <p class="font-size-12 mt-4 my-1">
                                                            <strong>*</strong>The verification of payment processing usually takes 1-2 working days. We will send you an update via notifications. Thank you!
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade p-4" id="v-pills-other" role="tabpanel" aria-labelledby="v-pills-other-tab">
                                                    <h4>How to send money to CAVIOM via Bank Transfer?</h4>
                                                    <ul class="list-unstyled my-4">
                                                        <li class="mb-2"><strong>Step 1.</strong> Log in to your Banking App or Web Banking.</li>
                                                        <li class="mb-2"><strong>Step 2.</strong> Select TRANSFER or SEND to another bank.</li>
                                                        <li class="mb-2"><strong>Step 3.</strong> Choose the account you wish to transact with.</li>
                                                        <li class="mb-2"><strong>Step 4.</strong> Select Metropolitan Bank and Trust Co.</li>
                                                        <li class="mb-2"><strong>Step 5.</strong> Enter the account name <code>Joseph Miguel L Chan</code> and account number <code>364-3364-556773</code>.</li>
                                                        <li class="mb-2"><strong>Step 6.</strong> Enter the EXACT AMOUNT and confirm your details to complete the transfer.</li>
                                                        <li class="mb-2"><strong>Step 7.</strong> SAVE the successful transaction's receipt, and keep in mind the Reference no.</li>
                                                    </ul>

                                                    <p class="font-size-12 mt-4 my-1">
                                                        <strong>*</strong>The verification of payment processing usually takes 1-2 working days. We will send you an update via notifications. Thank you!
                                                    </p>
                                                    <p class="font-size-12 ">
                                                        <strong>**</strong>Additional bank transfer fees may apply.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="payment-proof">
                                    <h4>Step 4:</h4>
                                    <p>Upload the <strong>proof of payment (receipt)</strong> of your chosen payment method.</p>

                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="mb-3">
                                                    <label class="form-label" for="payment_method">*Payment Method</label>
                                                    <select name="payment_method" class="form-select select2-search-disable" id="payment_method" required>
                                                        <option value="" hidden disabled selected>Select Payment Method...</option>
                                                        <option value="GCash">GCash</option>
                                                        <option value="Metrobank">Metrobank</option>
                                                        <option value="Other">Bank Transfer</option>
                                                    </select>
                                                    @error('payment_method')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label" for="proof_of_payment">*Attach Proof of Payment</label>
                                                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Must not exceed 2mb." data-bs-original-title="yes">
                                                        <i class="mdi mdi-information-outline"></i>
                                                    </span>
                                                    <input type="file" class="form-control" id="proof_of_payment" required>
                                                    @error('proof_of_payment')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="mb-3">
                                                    <label class="form-label" for="reference_no">*Reference No.</label>
                                                    <input type="text" class="form-control" name="reference_no" id="reference_no"
                                                        placeholder="Enter reference no." required>
                                                    @error('reference_no')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="paid_at">*Datetime of Payment</label>
                                                    <input type="datetime-local" class="form-control" name="paid_at" id="paid_at" required>
                                                    @error('paid_at')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <a class="image-popup-no-margins" title="Proof of Payment Photo Preview" href="{{ asset('backend/assets/images/placeholder-image.jpg') }}">
                                                    <img class="img-fluid rounded" alt="Proof of Payment Photo Preview" src="{{ asset('backend/assets/images/placeholder-image.jpg') }}">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark btn-rounded w-50 waves-effect waves-light" style="background-color: #62896d">FINISH</button>
                                        </div>
                                    </form>
                            </div>
                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                <li class="previous"><a href="javascript: void(0);" class="w-xl text-center bg-dark waves-effect waves-light">Previous</a></li>
                                <li class="next"><a href="javascript: void(0);" class="w-xl text-center bg-dark waves-effect waves-light">Next</a></li>
                            </ul>
                        </div>


                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div>
</div>
@endsection