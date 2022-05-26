<html>
    <head>
        <style>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	text-decoration: none;
	font-family: arial;
}
body{
	background: linear-gradient(112.4deg, #FFEEEE 9.84%, #E7DFFF 73.46%);
}
.wrapper{
	position: relative;
}
.sidebar{
	position: fixed;
	width: 300px;
	height: 100%;
	background: #D0E1D4;
	padding: 20px 0;
}
.text-muted{
	color: #adb5bd!important;
}
ul{
	padding-bottom: 20px;
}
ul li a img{
	background: #66BB6A;
	top: 0;
	border: none;
	width: 20px;
}
 .sidebar ul li{
	padding: 15px;
}
.sidebar ul li a{
	color: #fff;
	display: block;
}
.sidebar ul li a .fas{
	width: 30px;
	color: #bdb8d7!important;
}
i.fas.fa-home:hover,
i.fas.fa-video:hover,
i.fas.fa-id-badge:hover,
i.far.fa-calendar-alt:hover
{
	color: #304FFE!important;
}
.sidebar ul li a .far{
	width: 30px;
	color: #bdb8d7!important;
}
.sidebar ul li:hover{
	background: #536D6C;
    border-radius: 20%;
    padding: 20px;
    width: 300px;
}
.sidebar ul li a:hover{
	text-decoration: none;
}
</style>
</head>
<body>
<div class="wrapper d-flex">
	<div class="sidebar">
		<small class="text-muted px-3">@yield('title')</small>
		<ul>
            <li><a href="#"><i class="fas fa-home"></i>@yield('list0')</a></li>
			<li><a href="#"><i class="far fa-calendar-alt"></i>@yield('list1')</a></li>
			<li><a href="#"><i class="fas fa-video"></i>@yield('list2')</a></li>
			<li><a href="#"><i class="fas fa-id-badge"></i>@yield('list3')</a></li>
		</ul>
	</div>
</div>
</body>
</html>
