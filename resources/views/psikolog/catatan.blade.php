@extends('layout.main-psikolog-layout')

@section('mainTitle', 'Catatan')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/psikolog/patient" class="btn nav-link" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Patient</span></a></li>
            <li><a href="/psikolog/chats" class="btn nav-link active" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/psikolog/profile" class="btn nav-link " role="button"><i class="bx bx-user"></i>
                    <span>Profile</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

@endsection
<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1'
    type='text/css' media='all' />
     <script type="text/javascript">
    function validate(){
        var wordCount = [document.forms[0].catatantext.value].join(' ').split(' ').length;
        if (wordCount < 5 ){
            alert("Catatan minimal 5 kata!");
         return (false);
        }
        if (wordCount > 25 ){
            alert("Catatan maksimal 25 kata!");
         return (false);
        }

    }
    </script>
<style>
    .container p-3 my-3 {
        position: absolute;
        background-color: white;
        height: 544px;
        width: 676px;
        left: 444px;
        top: 271px;
        align-content: center;
    }

    .catatan {
        align-content: center;
        align-items: center;
    }

    .form-group row {
        position: absolute;
        left: 49.58%;
        right: 16.92%;
        top: 55.38%;
        bottom: 16.5%;
    }

    .card {
        position: absolute;
        width: 202px;
        height: 232px;
        left: 664px;
        top: 46px;
    }

    p {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 27px;
        text-align: center;
        letter-spacing: -0.165px;
        /* white-space: nowrap; */
    }

    .catatan-bttn {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 10px;
        gap: 10px;
        width: 100%;
        height: 49px;
        left: 123px;
        top: 566px;
        background-color: #536D6C;
        color: #ffffff;
        border-radius: 36px;
        border: #536D6C;
    }

    .profile {
        align-content: center;
    }

    .w3-container {
        height: 232px;
        width: 202px;
        left: 664px;
        top: 46px;
        align-content: center;
    }

    .img-container {
        align-content: center;
    }

    #piccatatan {
        align: center;
    }

    fieldset,
    label {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 20px;
    }

    h1 {
        font-size: 1.5em;
        margin: 10px;
    }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        margin-right: 49px;
    }

    .myratings {

        font-size: 85px;
        color: green;
    }

    .rating>[id^="star"] {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 2.25em;
        font-weight display: inline-block;
        content: "\f005";
        font-family: "Font Awesome 5 Free Solid", "Font Awesome 5 Free" !important;
        font-weight: 400;
    }


    .rating>label {
        color: rgb(128, 116, 116);
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>[id^="star"]:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #ffd900ee;
    }

    /* hover previous stars in list */
    .rating>[id^="star"]:checked+label:hover,
    /* hover current star when changing rating */
    .rating>[id^="star"]:checked~label:hover,
    .rating>label:hover~[id^="star"]:checked~label,
    /* lighten current selection */
    .rating>[id^="star"]:checked~label:hover~label {
        color: #FFED85;
    }

    .reset-option {
        display: none;
    }

    .reset-button {
        margin: 6px 12px;
        background-color: rgb(255, 255, 255);
        text-transform: uppercase;
    }
</style>
@section('content')


    <div class="catatan">
        <div class="container">

            <div class="row profile">
                <center>
                    <div class="col-md-3">
                        <div class="img-container">
                            <img alt="docpic" style="vertical-align:middle" src="/images/doctorprofile3.png">
                        </div>
                        <br>
                    </div>
                </center>

            </div>

        </div>
        <div class="container mt-3 mb-4">
            <form action="/submitcatatan" onsubmit="return (validate());" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 control-label">Nama Pasien:</label>
                    <div class='col-sm-8 input-group date' id='id'>
                        <select class="form-control" name="id" required>
                            @foreach ($users as $u)
                                    <option value="{{ $u->id }}"> {{ $u->name }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="comment">Catatan:</label>
                    <div class='col-sm-14' id='reviewtext'>
                    <textarea class="form-control" for="catatantext" name="catatantext" rows="5" id="comment" placeholder="Any note for the patient?" required></textarea>
                    <br>
                    <br>
                    <input type="submit" class="btn catatan-bttn" value="Submit">

                </div>
            </div>
            </form>




        </div>
    </div>

@endsection
