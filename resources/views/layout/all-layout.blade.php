<!DOCTYPE html>
<html>

<head>

    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Francois+One&display=swap" rel="stylesheet">

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

<style>
    img {
            border-radius: 100%;
            border-style: solid;
            border-color: rgb(100, 19, 46);
            box-shadow: 8px 2px #000000;
        }
    .sidenav {
  height: 100%;
  width: 195px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background: #D0E1D4;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  font-family: 'Francois One', sans-serif;
  color: white;
  display: block;
}

.sidenav a:hover {
    background: #536D6C;
        padding: 20px;
        box-shadow: 0px 5px 10px 2px rgba(0, 0, 0, 0.25);
    border-radius: 65px;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  background: linear-gradient(112.4deg, #FFEEEE 9.84%, #E7DFFF 73.46%);
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
h3 {
    text-align: center;
    font-family: 'Francois One', sans-serif;
}
.content{
    text-align: center;
    font-family: 'Francois One', sans-serif;
}
table{
    margin-left: 2cm;
  margin-right: 2cm;
  font-family: 'Francois One', sans-serif;
  text-align: center

}
p{
    text-align: center
}
body {
        background: linear-gradient(112.4deg, #FFEEEE 9.84%, #E7DFFF 73.46%);
    }
</style>
</head>

<body>
    <div class="container">
    <div class="sidenav">
        <a href="/home">Home</a><hr>
        <a href="/doctor">Doctor</a><hr>
        <a href="/chat">Chat</a><hr>
        <a href="/profile">Profile</a>
      </div>


        <h3><b> @yield('judulhalaman')</b></h3>

    <div class="content">
          <table>
    @section('konten')

    @show
</table>
</div>

</body>
</div>
</html>
