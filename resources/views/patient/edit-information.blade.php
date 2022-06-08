@extends('layout.main-patient-layout')
@section('mainTitle', 'Edit My Schedule')
@section('navbar-actived')
  <nav id="navbar" class="nav-menu navbar">
      <style>
    input[type='radio'] {
        box-sizing: border-box;
        appearance: none;
        background: #17A2B8;
        outline: 2px solid #17A2B8;
        border: 3px solid #17A2B8;
        width: 16px;
        height: 16px;
      }

      input[type='radio']:checked {
        background: white;
      }
    </style>
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
	<h2><b>Select My Schedule</h2>
	<br/>


	<form action="/patient/doctor-info/update" method="POST">
		{{ csrf_field() }}
        {{-- @foreach($konsultasi as $p) --}}
		{{-- <input type="hidden" name="id" value="{{ $p->sipp }}"> <br> --}}
        <div class="form-group">
           <h5> Consultation Type:</h5><br>
            <input type="radio" id="media1" name="mediakonsultasi" value="Chat"  checked="checked">
                <label for="media1">Chat</label><br>
                <input type="radio" id="media2" name="mediakonsultasi" value="VideoCall"   checked="checked" >
                <label for="media1">Video Call</label><br>
                <input type="radio" id="media3" name="mediakonsultasi" value="VoiceCall"  checked="checked" >
                <label for="media3">VoiceCall</label><br>

          </div>
          <div class="form-group">
            <h5> Date and Time:</h5><br>
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
          </div>
       </div>
       <script type="text/javascript">
          $(function () {
              $('#datetimepicker1').datetimepicker();
          });
       </script>
          {{-- <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
            <input style="width: 13cm" type='text' class="form-control" name="waktukonsultasi" required="required" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#dtpickerdemo').datetimepicker({
                format: 'YYYY-MM-DD hh:mm:ss',
                showTodayButton: false,
                locale : 'id',
                "defaultDate": new Date(),
            });
        });
    </script> --}}
		<br>
        <div class="d-flex" style="padding-top: 40px">
            <a href="/patient/doctor-info" class="btn payment-bttn"> Back
            </a>
            <div style="padding-left: 40px">
                <input type="submit" class="btn payment-bttn" value="Save Data"> </div>
    </form>
    {{-- @endforeach --}}
    @endsection


