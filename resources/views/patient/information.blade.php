@extends('layout.main-patient-layout')
@section('mainTitle', 'Information')
@section('navbar-actived')
    <style>
        .border {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 3px 4px;
            width: 76px;
            height: 30px;
            /* Global/06. Info */
            background: #17A2B8;
            border-radius: 40px;
            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;
        }
        .border1 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 3px 4px;
            width: 110px;
            height: 30px;
            /* Global/06. Info */
            background: #17A2B8;
            border-radius: 40px;
            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;
        }
        input[type='radio'] {
  box-sizing: border-box;
  appearance: none;
  background: white;
  outline: 2px solid #17A2B8;
  border: 3px solid #17A2B8;
  width: 16px;
  height: 16px;
}

input[type='radio']:checked {
  background: #333;
}

    </style>
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/patient/doctor" class="btn nav-link active" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Doctor</span></a></li>
            <li><a href="/patient/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/patient/profile" class="btn nav-link" role="button"><i class="bx bx-user"></i>
                    <span>Profie</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection
@section('content')
    <div class="container">
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
                <div class="row" id="patient-pay">
                    <div class="row m-0">
                        <div class="d-flex justify-content- align-content-center">
                            @foreach ($listakunpsikolog as $s)
                            <img alt="docpic" src="{{$s->fotopsikolog}}" id="docpic">
                        </div>
                    </div>

                    <div class="row m-0 detail-order">
                                <h3><strong>{{ $s->namapsikolog }}</strong></h3>
                                <br>
                                <br>
                                <br>
                        <h5>Alumnus</h5>
                        <b>
                            <p>{{ $s->alumnus }}</p>
                        </b><br><br>
                        <h5>Work Place</h5>
                        <b>
                            <p>{{ $s->workplace }}</p>
                        </b><br><br>
                        <h5>Experience</h5>
                        <b>
                            <p class="border">{{ $s->experience }} years</p>
                        </b><br><br>
                        <h5>SIPP</h5>
                        <b>
                            <p class="border1">{{ $s->sipp }}</p>
                        </b><br><br>
                    </div>
                    @endforeach
                    <div class="row m-0">
                        <div class="col-12 px-4">
                            <br><br>
                            <div class="d-flex justify-content-between mb-2">
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <p class="textmuted fw-bold"></p>
                                <div class="d-flex align-text-top ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 ps-lg-4">
                <div class="row m-0">
                    <div class="col-12 px-0">
                        </div>
                    </div>
                        <div class="row m-0">
                            <div class="col-12 px-4">
                                <div class="d-flexs">
                                    {{-- @foreach($konsultasi as $k) --}}
                                       <h5>Date and Time</h5><br>
                                       {{-- <p>{{ $k->waktukonsultasi }}</p> --}}
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row m-0">
                            <div class="col-12 px-4">
                            <div class="d-flexs">
                                    <h5>Consultation Type</h5><br>
                            </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                        <div class="row m-0">
                            <div class="d-flex flex-row-reverse" style="padding-top: 100px">
                                <div class="btn payment-bttn"><a href="/patient/payment" style="color: white"> Book </a>
                                </div>
                            </div>
                            {{-- @foreach ($listakunpsikolog as $s)
                            <div style="padding-left: 40px">
                                <a href="/patient/doctor-info/schedule{{$s->sipp}}"><div class="btn payment-bttn"> Edit Schedule
                                </div></a>
                                 @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
