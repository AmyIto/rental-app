@section('footer')

<footer id="footer"><!--Footer-->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="companyinfo">
						<h2><span>pay</span>rental</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
					</div>
				</div>
				<div class="col-sm-7">

				</div>
				<div class="col-sm-3">

				</div>
			</div>
		</div>
	</div>

	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>Service</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="{{ url('contacts-us') }}">Contact Us</a></li>
							<li><a href="{{ url('orders') }}">Order Status</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>Quick Rent</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="{{ url('/') }}/products?category=bags">Bags</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>Policies</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="{{ url('terms-conditions') }}">Terms of Use</a></li>
							<li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>About <span>PAY</span>RENTAL</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Company Information</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-sm-offset-1">
					<div class="single-widget">
						<h2>About <span>PAY</span>RENTAL</h2>
						<form action="#" class="searchform">
							<input type="text" placeholder="Your email address" />
							<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
							<p>Get the most recent updates from <br />our site and be updated your self...</p>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="pull-left">Copyright © 2019 <span>PAY</span>RENTAL Inc. All rights reserved.</p>
			</div>
		</div>
	</div>

</footer><!--/Footer-->
@stop
