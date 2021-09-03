<!-- Header -->
<header class="header">
  <div class="topNavWrapper">
    <div class="container">
      <div class="topNav">
        <ul>
          <li>
            <a href="mailto:casianicontreras@gmail.com">
              <i class="fas fa-envelope"></i> casianicontreras@gmail.com
            </a>
          </li>
          <li>
            <a href="tel:+6023140841">
              <i class="fas fa-phone-alt"></i> +602-314-0841
            </a>
          </li>
        </ul>
        <ul class="topNav__links">
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('products')}}">Products</a></li>
          <li><a href="{{route('blogs')}}">Blogs</a></li>
          <li><a href="{{route('contactus')}}">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="navWrapper">
    <div class="container">
      <nav class="nav">
        <a href="{{route('home')}}" class="nav__logo">
          The <span>Driver</span> Depot
        </a>
        <ul>
          <li>
            <form action="#">
              <input type="text" placeholder="Search your products..." />
              <button type="submit"><i class="fas fa-search"></i></button>
            </form>
          </li>
          <li class="nav__favourite">
            <a href="#">
              <i class="far fa-heart"></i>
              <div class="badge">0</div>
            </a>
          </li>
          <li class="nav__cart">
            <a href="{{route('cart')}}">
              $0.00
              <i class="fas fa-shopping-basket"></i>
              <div class="badge">0</div>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>