@extends('layout.main-patient-layout')

@section('mainTitle', 'Penilaian')
@section('navbar-actived')
<nav id="navbar" class="nav-menu navbar">
    <ul>
        <li><a href="/patient/doctor" class="btn nav-link" role="button"><i class="bi bi-bag-plus"></i>
                <span>Psikolog</span></a></li>
        <li><a href="/patient/chats" class="btn nav-link active" role="button"><i class="bi bi-chat-dots"></i>
                <span>Chat</span></a></li>
        <li><a href="/patient/profile" class="btn nav-link" role="button"><i class="bx bx-user"></i>
                <span>ProfiLe</span></a></li>
    </ul>
</nav><!-- .nav-menu -->

@endsection
<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1'
    type='text/css' media='all' />

    <script type="text/javascript">
    function validate(){
        var wordCount = [document.forms[0].reviewtext.value].join(' ').split(' ').length;
        if (wordCount < 5 ){
            alert("Review minimal 5 kata!");
         return (false);
        }
        if (wordCount > 25 ){
            alert("Review maksimal 25 kata!");
         return (false);
        }
        let x = document.forms[0].["rating"].value;
        if (x == "") {
            alert("Rating must be filled out");
            return false;
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

    .penilaian {
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


    <div class="penilaian">
        <div class="container">

            <div class="row profile">
                <center>
                    <div class="col-md-3">
                        <div class="img-container">
                            <img alt="docpic" style="vertical-align:middle" src="/images/doctorprofile3.png">
                        </div>
                        {{-- <br>

                        <div class="col docname">
                            <p style="vertical-align:middle">Dr. Nike Ardilla, M.Psi.</p>
                        </div> --}}
                </center>

            </div>

        </div>
        <div class="container mt-3 mb-4">
            <form action="/submitpenilaian" onsubmit="return (validate());" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- value="{{ $s->sipp }} --}}
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 control-label">Nama Psikolog:</label>
                    <div class='col-sm-8 input-group date' id='sipp'>
                        <select class="form-control" name="sipp" placeholder="Pilih Nama Psikolog" required>
                        <option selected disabled value="">Pilih Nama Psikolog</option>
                            @foreach ($listakunpsikolog as $p)
                                <option value="{{ $p->sipp }}"> {{ $p->namapsikolog }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="rating">Rating:</label>
                    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
                    {{-- <form>
  <input type="radio" class="star-input" name="rating" id="star-1" value="1">
  <label for="star-1" class="star"><i class="fas fa-star"></i></label>
  <input type="radio" class="star-input" name="rating" id="star-2" value="2">
  <label for="star-2" class="star"><i class="fas fa-star"></i></label>
  <input type="radio" class="star-input" name="rating" id="star-3" value="3">
  <label for="star-3" class="star"><i class="fas fa-star"></i></label>
  <input type="radio" class="star-input" name="rating" id="star-4" value="4">
  <label for="star-4" class="star"><i class="fas fa-star"></i></label>
  <input type="radio" class="star-input" name="rating" id="star-5" value="5" checked>
  <label for="star-5" class="star"><i class="fas fa-star"></i></label>
  <button type="submit">Send</button>
</form> --}}
<div class='col-sm-8' id='rating'>
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" required /><label class="full" for="star5"
                            title="Outstanding - 5 stars" if></label>

                        <input type="radio" id="star4" name="rating" value="4" required /><label class="full" for="star4"
                            title="Very Satisfied - 4 stars"></label>

                        <input type="radio" id="star3" name="rating" value="3" required /><label class="full" for="star3"
                            title="Satisfied - 3 stars"></label>

                        <input type="radio" id="star2" name="rating" value="2" required /><label class="full" for="star2"
                            title="Unsatisfied - 2 stars"></label>

                        <input type="radio" id="star1" name="rating" value="1" required/><label class="full" for="star1"
                            title="Poor - 1 star"></label>

                            <input type="radio" class="reset-option" name="rating" value="reset" />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="comment">Review:</label>
                    <div class='col-sm-14' id='reviewtext'>
                    <textarea class="form-control" for="reviewtext" name="reviewtext" rows="5" id="comment" placeholder="How was your session?" required></textarea>
                    <br>
                    <input type="submit" class="btn catatan-bttn" value="Submit">
                    {{-- <input type="submit" class="btn catatan-bttn" value="OK"><a href="/patient/doctor" style="color: white"> Submit </a> --}}

            </div>
            </div>

                {{-- @endforeach --}}
            </form>
            {{-- <script>
            $(document).ready(function(){

                $("input[type='radio']").click(function(){
                      var sim =  $("input[type='radio']:checked").val();
                      //alert(sim);
                      if (sim<3) {
                      $('.myratings').css('color','red');
                      $(".myratings").text(sim);
                   }else{
                      $('.myratings').css('color','green');
                      $(".myratings").text(sim);
                   }
                   });


                });
</script> --}}
        </div>
    </div>

@endsection
