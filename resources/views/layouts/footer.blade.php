<div class="container wow fadeInUp">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-6">
			<div class="newsletter">
				<h2>Sign Up Now &amp; Get 15% Off</h2>
				<p>
					Be the first to know about our new arrivals and exclusive offers.
				</p>
				<form action="#">
					<input type="email" name="email" id="email" placeholder="Type your Email" />
					<button type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
<footer class="footer wow fadeInUp">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6">
				<div class="footer__socialLinks textCenter">
					<h4>Follow Us</h4>
					<ul>
						<li>
							<a href="{{$config['FACEBOOK']}}" target="_blank"><i class="bx bxl-facebook bx-sm"></i></a>
						</li>
						<li>
							<a href="{{$config['TWITTER']}}" target="_blank"><i class="bx bxl-twitter bx-sm"></i></a>
						</li>
						<li>
							<a href="{{$config['INSTAGRAM']}}" target="_blank"><i class="bx bxl-instagram bx-sm"></i></a>
						</li>
						<li>
							<a href="{{$config['LINKEDIN']}}" target="_blank"><i class="bx bxl-linkedin bx-sm"></i></a>
						</li>
					</ul>
				</div>
				<ul class="footer__quickLinks">
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('about')}}">About Us</a></li>
					<li><a href="{{route('products')}}">Products</a></li>
					<li><a href="{{route('blogs')}}">Blogs</a></li>
					<li><a href="{{route('contactus')}}">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer__copyright">
		<p>
			©Copyright {{date('Y')}} <a href="#">{{$config['COMPANY']}}</a>. All Rights Reserved
		</p>
		<ul>
			<li><a href="{{route('termsandconditions')}}">Terms &amp; Conditions</a>&nbsp;|&nbsp;</li>
			<li><a href="{{route('privacypolicy')}}">Privacy Policy</a></li>
		</ul>
	</div>
</footer>