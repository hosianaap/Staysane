<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Francois+One&display=swap" rel="stylesheet">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'Francois One', sans-serif;
    }

    body {
        background: linear-gradient(112.4deg, #FFEEEE 9.84%, #E7DFFF 73.46%);
    }

    .wrapper {
        position: relative;
    }

    .sidebar {
        position: fixed;
        width: 350px;
        height: 100%;
        background: #D0E1D4;
        padding: 20px 0;
    }

    .textmuted {
        color: rgb(255, 255, 255);
        font-family: 'Fjalla One', sans-serif;
        font-family: 'Francois One', sans-serif;
        font-weight: 700;
        font-size: 23px;
        position: absolute;
        width: 112px;
        height: 35px;
        left: 140px;
        top: 41px;

    }

    ul {
        padding-bottom: 20px;
        position: absolute;
        width: 327px;
        height: 228px;
        left: 11px;
        top: 204px;
    }
    .sidebar ul li {
        padding: 15px;
        font-size: 18px
    }

    .sidebar ul li a {
        color: rgb(0, 0, 0);
        display: block;
    }

    .sidebar ul li:hover {
        background: #536D6C;
        padding: 20px;
        box-shadow: 0px 5px 10px 2px rgba(0, 0, 0, 0.25);
	border-radius: 65px;
    }

    .sidebar ul li a:hover {
        text-decoration: none;
        color: rgb(255, 255, 255);
    }
    .content {
        margin-left: 25%
    }
</style>

<body>
    <div class="wrapper d-flex">
        <div class="sidebar">
            <div class="textmuted">Staysane</div>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="#doctor">Doctor</a></li>
                <li><a href="#chat">Chat</a></li>
                <li><a href="/profile">Profile</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
    <div class="content">
  @section('konten')

  @show
</div>
</div>
</body>

</html>
