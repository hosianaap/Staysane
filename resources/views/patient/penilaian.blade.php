@extends('layout.main-patient-layout')

@section('mainTitle', 'Penilaian')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/" class="btn nav-link" role="button"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="/psikolog/patient" class="btn nav-link" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Patient</span></a></li>
            <li><a href="/psikolog/chats" class="btn nav-link active" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/psikolog/profile" class="btn nav-link " role="button"><i class="bx bx-user"></i>
                    <span>Profie</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

@endsection
<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1' type='text/css' media='all' />
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

    .w3-container {
        height: 232px;
        width: 202px;
        left: 664px;
        top: 46px;
        align-content: center;
    }

    #piccatatan {
        align: center;
    }
    fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating {
      border: none;
      margin-right: 49px;
}
.myratings{

  font-size: 85px;
  color: green;
}

.rating > [id^="star"] { display: none; }
.rating > label:before {
  margin: 5px;
  font-size: 2.25em;
  font-weight
  display: inline-block;
  content: "\f005";
  font-family: "Font Awesome 5 Free Solid", "Font Awesome 5 Free" !important;
font-weight: 400;
}


.rating > label {
  color: rgb(128, 116, 116);
 float: right;
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > [id^="star"]:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #ffd900ee;  } /* hover previous stars in list */
.rating > [id^="star"]:checked + label:hover, /* hover current star when changing rating */
.rating > [id^="star"]:checked ~ label:hover,
.rating > label:hover ~ [id^="star"]:checked ~ label, /* lighten current selection */
.rating > [id^="star"]:checked ~ label:hover ~ label { color: #FFED85;  }

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
                        <div class="pic">
                            <img alt="docpic" src="/images/doctorprofile3.png">
                        </div>
                        <br>
                        <div class="col patientname">
                            <p>Alex Nikiforov</p>
                        </div>
                </center>
            </div>
        </div>
        <div class="container mt-3 mb-4">

            <form>
                <div class="form-group row">
                    <label for="comment">Rating:</label>
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Outstanding - 5 stars"></label>

                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Very Satisfied - 4 stars"></label>

                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Satisfied - 3 stars"></label>

                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Unsatisfied - 2 stars"></label>

                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Poor - 1 star"></label>

                    <input type="radio" class="reset-option" name="rating" value="reset" />
                </fieldset>
                </div>

                <div class="form-group row">
                    <label for="comment">Penilaian:</label>
                    <textarea class="form-control" rows="5" id="comment">
                   </textarea>
                    <br>
                    <input type="submit" class="btn catatan-bttn" value="OK">
                </div>

            </form>
            <script>
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
</script>
        </div>
    </div>

@endsection
