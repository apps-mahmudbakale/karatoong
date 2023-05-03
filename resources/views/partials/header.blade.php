<header> 
  <!-- Main Menu Start -->
  <div class="site-navigation main_menu menu-style-2" id="mainmenu-area">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="{{asset('karatoo.png')}}" alt="Rima Institute" class="img-fluid">
      </a>

      <!-- Toggler -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">
                  Home
             </a>
         </li>
         <li class="nav-item ">
            <a href="" class="nav-link js-scroll-trigger">
                About us
           </a>
       </li>
      <li class="nav-item">
          <a class="nav-link" href="">
              How to Enroll
         </a>
     </li>
     <li class="nav-item ">
        <a href="" class="nav-link">
           Contact
      </a>
  </li>
</ul>

<div class="header-login">
  <a href="{{ route('login') }}" class="btn btn-solid-border btn-sm ">Log In</a>
  <a href="{{ route('register') }}" class="btn btn-main btn-sm">Enroll Now</a>
</div>
</div> <!-- / .navbar-collapse -->
</div> <!-- / .container -->
</nav>
</div>
</header>