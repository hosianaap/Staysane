@extends('layout.main-patient-layout')

@section('mainTitle', 'Pembayaran Konsultasi')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/patient/doctor" class="btn nav-link active" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Psikolog</span></a></li>
            <li><a href="/patient/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/patient/profile" class="btn nav-link " role="button"><i class="bx bx-user"></i>
                    <span>Profile</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection

@section('content')
    <div class="container">
        <form action="/patient/payment/store" method="post">
            {{ csrf_field() }}
            <div class="row m-0">
                <div class="col-lg-7 pb-5 pe-lg-5">
                    <div class="row" id="paient-pay">
                        @foreach ($listakunpsikolog as $ip)
                            <div class="row m-0">
                                <div class="d-flex justify-content-start align-content-center">
                                    <img alt="docpic" src="{{ $ip->fotopsikolog }}" id="docpic">
                                    <div class="col docname">
                                        <h3><strong>{{ $ip->namapsikolog }}</strong></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0 detail-order">
                                <strong>
                                    <h4>Detail Order</h4>
                                </strong>
                                <p>Order ID</p>
                                <b>
                                    <p>{{ $ip->idkonsultasi }}</p>
                                </b>
                                <p>Consultation Type</p>
                                <b>
                                    <p>{{ $ip->mediakonsultasi }}</p>
                                </b>
                                <p>Fee</p>
                                <b>
                                    <p><label class="form-label" name="jumlah"> 200.000 </label>/Pertemuan</p>
                                </b>
                            </div>
                            <div class="row m-0">
                                <div class="col-12 px-4">
                                    <br><br>
                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="textmuted">Price</p>
                                        <p class="fs-14 fw-bold">Rp 200.000,00</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between mb-3">
                                        <p class="textmuted fw-bold">Total</p>
                                        <div class="d-flex align-text-top ">
                                            <span class="h5">Rp 200.000,00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-5 p-0 ps-lg-4">
                    <div class="row m-0">
                        <div class="col-12 px-0">
                            <div class="row m-0">
                                <div class="col-12 px-4 my-4">
                                    <h1 class="fw-bold">Payment detail</h1>
                                </div>
                                <div class="col-12 px-4">
                                    <div class="d-flexs">
                                        <p class="text-muted">Your Virtual Account</p>
                                        <input type="text" class="form-control pay-input" name="norek"
                                            placeholder="1234 5678 9012 3456" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row m-0">
                                <div class="d-flex flex-row-reverse" style="padding-right: 20px">
                                    <input type="submit" class="btn payment-bttn" value="Proceed">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
