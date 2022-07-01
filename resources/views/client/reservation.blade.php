<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
	<link rel="stylesheet" href="{{ asset('css/booking.css') }}">
	<title>@section('title', 'Booking | HirenDrive')</title>
</head>

<body>
	<section class="header">

		<a href=""><img src="{{ asset('images\logo.png') }}"></a>
		<div class="nav">
			<ul>
				<li> <a href="{{ route('home') }}"> HOME </a> </li>
				

			</ul>

		</div>

	</section>
	<div class="sidebar">
		<div class="info">
			<h6>
				Product description :
				<br>
			</h6>

			<img src="{{ $car['image'] }}">
			<br>
			<h4>
				Model : {{ $car['model'] }}
			</h4>
			<br>
			<h4>
				Type : {{ $car['type']}}
			</h4>
			<br>
			<h4>
				Price : Ksh {{ number_format($car['pricing'])}}

			</h4>


		</div>
	</div>

	<div class="bookingform">
		<form method="POST" action="" class="form">
			<div class="text_header">
				<span>
					<h3>Find your car</h3>
					<br>
					<br>
				</span>
			</div>
			<div>
				<div class="form-group">
					<label for="pickup_location">Pickup Location : </label>
					<input type="text" class="form-control" name="pickup_location" placeholder="input location">

				</div>
				<br>
				<br>
				<div class="form-group">
					<label for="return_location">Return Location : </label>
					<input type="text" class="form-control" name="return_location" placeholder="input location">

				</div>
				<br>
				<br>
				<div class="form-group">
					<label for="pickup_date">Pickup Date : </label>
					<input type="date" min="<?php echo date('Y-m-d', strtotime("+1 day")) ?>" name="pickup_date" class="form-control">

				</div>
				<br>
				<br>
				<div class="form-group">
					<label for="return_date">Return Date :</label>
					<input type="date" name="return_date" class="form-control" v-model='return_date'>

				</div>
				<br>
				<br>
				<button type="submit" class="sbmt-bttn" name="reserve_car">
					<h5>Book now</h5>
				</button>
			</div>
		</form>
	</div>
</body>

</html>