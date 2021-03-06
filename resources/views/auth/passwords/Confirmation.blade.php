<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Shopii</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
<style>
.form-inline {
	display: inline-block;
}
.navbar-header.col {
	padding: 0 !important;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #d6d6d6;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #555;
	padding-left: 0;
	padding-right: 50px;
	font-family: 'Merienda One', sans-serif;
}
.navbar .navbar-brand i {
	font-size: 20px;
	margin-right: 5px;
}
.search-box {
	position: relative;
}
.search-box input {
	box-shadow: none;
	padding-right: 100px;
	border-radius: 6px !important;
}
.search-box .input-group-addon {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 4;
	padding: 6px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .nav-item i {
	font-size: 18px;
}
.navbar .dropdown-item i {
	font-size: 16px;
	min-width: 22px;
}
.navbar .nav-item.open > a {
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 5px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	color: rgb(161, 159, 159);
	padding: 8px 20px;
	line-height: normal;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:active {
	color: #333;
}
.navbar .dropdown-item .material-icons {
	font-size: 21px;
	line-height: 16px;
	vertical-align: middle;
	margin-top: -2px;
}
.navbar .badge {
	color: #fff;
	background: #ec2213;
	font-size: 11px;
	border-radius: 20px;
	position: absolute;
	min-width: 10px;
	padding: 4px 6px 0;
	min-height: 18px;
	top: 5px;
}
.navbar a.notifications, .navbar a.messages {
	position: relative;
	margin-right: 10px;
}
.navbar a.messages {
	margin-right: 20px;
}
.navbar a.notifications .badge {
	margin-left: -8px;
}
.navbar a.messages .badge {
	margin-left: -4px;
}
.navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
	background: transparent !important;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 1199px){
	.form-inline {
		display: block;
		margin-bottom: 10px;
	}
	.input-group {
		width: 100%;
	}


}
@media screen and (min-width: 600px) {
  div.btn-group {
    display: none;
  }
}
</style>
</head>
<body>
        @if(session()->has('cart'))
            <div class="alert alert-success">
                {{ session()->get('cart') }}
            </div>
         @endif
<nav class="navbar navbar-expand-xl sticky-top navbar-light bg-warning">
	<a href="/" class="navbar-brand "> <img src="/images/i.png"  width="60px;" height="60px" alt="">Mest<b>alla</b></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">

        <form class="navbar-form form-inline">
            <div class=" search-box " >
                <input type="text" id="search" class="form-control" style="width:260%" placeholder="Search Product by Name">
            </div>
        </form>
             <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"><i class="fa fa-apple fa-lg"></i>Supermarket</a>
              <a class="dropdown-item" href="#"><i class="fa fa-android fa-lg"></i>Phone & Tablet</a>
              <a class="dropdown-item" href="#"><i class="fa fa-eye fa-lg"></i>Fashion</a>
              <a class="dropdown-item" href="#"><i class="fa fa-plug fa-lg"></i>Electronics</a>
              <a class="dropdown-item" href="#"><i class="fa fa-home fa-lg"></i>Home & Office</a>
              <a class="dropdown-item" href="#"><i class="fa fa-gamepad fa-lg"></i>Gaming</a>
              <a class="dropdown-item" href="#"><i class="fa fa-child fa-lg"></i>Baby Products</a>
              <a class="dropdown-item" href="#"><i class="fa fa-desktop fa-lg"></i>Computing</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('shops.login')}}" ><i class="fa fa-money fa-lg"></i>sell</a>
            </div>
          </div>
		 <div class="navbar-nav ml-auto">
			{{-- <a href="{{route('pay.create')}}" class="nav-item nav-link notifications"><i class="fa fa-cart-arrow-down" style="font-size: 2em;"></i><span class="badge">{{\Cart::getContent()->count()}}</span></a> --}}
			<div class="nav-item dropdown">
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))

                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                                @endif

                               @if (Route::has('register'))

                                   <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                                @endif
                            @else
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="https://www.shareicon.net/data/512x512/2016/07/26/802043_man_512x512.png" class="avatar" alt="Avatar"> {{ Auth::user()->name }} <b class="caret"></b></a>
				<div class="dropdown-menu">
					   <span>
                        <?php
                        $orders=App\Models\Order::where('user_id',auth()->id())->get();
                        $order=count($orders);
                        ?>
                        <a href="#" class="dropdown-item"><i class="fa fa-user-o"><p>Order:{{$order}}</p></i>
                        </a></a></span>
					{{-- <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></a>
					<a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></a> --}}
					<div class="dropdown-divider"></div>
					<a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    class="dropdown-item"> <i class="material-icons">&#xE8AC;</i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
				</div>
                @endguest
			</div>
		</div>
	</div>
</nav>
</body>
<main class="py-4">
    @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
    @yield('content')
</main>
</html>
