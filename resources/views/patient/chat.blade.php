@extends('layout.main-patient-layout')

@section('mainTitle', 'Chat with Psikolog')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/patient/doctor" class="btn nav-link" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Psikolog</span></a></li>
            <li><a href="/patient/chats" class="btn nav-link active" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/patient/profile" class="btn nav-link" role="button"><i class="bx bx-user"></i>
                    <span>Profie</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection

@section('content')

    <div class="chat">
        <div class="card">
            <div class="card-header msg_head">
                <div class="d-flex bd-highlight">
                    <div class="img_cont">
                        <img src="/images/doctorprofile3.png" class="rounded-circle user_img">
                        <span class="online_icon"></span>
                    </div>
                    <div class="user_info">
                        <span>Dr. Nike Ardilla, M.Psi.</span>
                        <p>2 Messages</p>
                    </div>
                </div>
            </div>
            <div class="card-body msg_card_body">
                <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                        <img src="/images/doctorprofile3.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                        Hi, how are you samim?
                        <span class="msg_time">8:40 AM, Today</span>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                        Hi Doc, i am feeling stress
                        <span class="msg_time_send">8:55 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                        <img src="/images/doctorprofile3.png" class="rounded-circle user_img_msg">
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                        <img src="/images/doctorprofile3.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                        How do you feel now?
                        <span class="msg_time">9:00 AM, Today</span>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                        Thank u doc for your time
                        <span class="msg_time_send">9:05 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                        <img src="/images/doctorprofile3.png" class="rounded-circle user_img_msg">
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                        <img src="/images/doctorprofile3.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                        You're welcome
                        <span class="msg_time">9:07 AM, Today</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text attach_btn"><i class="bi bi-paperclip"></i></span>
                        <span class="input-group-text attach_btn"><i class="bi bi-emoji-smile"></i></i></span>
                    </div>
                    <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                    <div class="input-group-append">
                        <span class="input-group-text send_btn"><i class="bi bi-send"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
