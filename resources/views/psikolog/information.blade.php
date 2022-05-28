@extends('layout.main-patient-layout')

@section('mainTitle', 'Information')
@section('content')
<div class="container">
    <div class="row m-0">
        <div class="col-lg-7 pb-5 pe-lg-5">
            <div class="row" id="paient-pay">
                <div class="row m-0">
                    <div class="d-flex justify-content- align-content-center">
                        <img alt="docpic" src="/images/doctorprofile3.png" id="docpic">
                        <br>
                        <h3><strong>Dr. Nike Ardilla, M.Psi.</strong></h3>
                    </div>
                </div>
                @foreach($psikolog as $p)
                <div class="row m-0 detail-order">
                    <h4>Alumnus</h4>
                    <b><p>{{ $p->alumnus }}</p></b>
                    <h4>Work Place</h4>
                    <b><p>{{ $p->workplace }}</p></b>
                    <h4>Experience</h4>
                    <b><p>{{ $p->experience }}</p></b>
                    <h4>SIPP</h4>
                    <b><p>{{ $p->sipp }}</p></b>
                </div>
                <div class="row m-0">
                    <div class="col-12 px-4">
                        <br><br>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Price</p>
                            <p class="fs-14 fw-bold">Rp 15.000,00</p>
                        </div><hr>
                        <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="h4">Rp 15.000,00</span>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <span class="">
                                    <p class="text-muted">Your Virtual Account</p>
                                    <input class="form-control pay-input" type="text" placeholder="1234 5678 9012 3456" >
                                </span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row m-0">
                        <div class="d-flex flex-row-reverse" style="padding-right: 20px">
                            <div class="btn payment-bttn">Proceed
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
