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
                    <span>Profie</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection
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

    .form-group {
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

</style>
@section('content')


    <div class="catatan">
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
                <div class="form-group">
                    <label for="comment">Catatan:</label>
                    <textarea class="form-control" rows="5" id="comment">
                   </textarea>
                    <br>
                    <input type="submit" class="btn catatan-bttn" value="OK">
                </div>

            </form>


        </div>
    </div>

@endsection
