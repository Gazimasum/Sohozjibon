<header class="res-header-sm">
    <div class="header-top-wrapper theme-bg-2">
        <div class="container">
            <div class="header-top">
                <div class="header-info">
                    <span>Contact us - 00 0000-0000  or  <a href="#">info@domain.com</a></span>
                </div>
                <div class="book-login-register">
                    <ul>
                      @guest
                        <li><a href="{{ route('login') }}"><i class="ti-user"></i>Login</a></li>
                        <li><a  href="{{ route('register') }}"><i class="ti-settings"></i>Register</a></li>
                      @else
                        <li>
                          <a id=""  href="#" >
                            <img src="{!! asset('assets/img/dealer-logo.png') !!}" class="img rounded-circle" style="width:40px">
                            {{ Auth::user()->name }}
                          </a>
                        </li>
                      <li>
                        <a class="dropdown-item" href="{!! route('issuedbook') !!}">
                          ISSUED BOOKS
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                      </li>


                    @endguest
                        {{-- <li><a href="login.html"><i class="ti-user"></i>login</a></li>
                        <li><a href="register.html"><i class="ti-settings"></i>register</a></li>
                        <li><a href="wishlist.html"><i class="ti-heart"></i>wishlist</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom clearfix">
        <div class="container">
            <div class="header-bottom-wrapper">
                <div class="logo-2 ptb-40">
                    <a href="index.html">
                        <img src="assets/img/logo/2.png" alt="">
                    </a>
                </div>
                <div class="menu-style-2 book-menu menu-hover">
                    <nav>
                        <ul>
                            <li><a href="{!! route('home') !!}">Home</a>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="single-dropdown">
                                    <li><a href="{!! route('about_us') !!}">About us</a></li>

                                </ul>
                            </li>

                            <li><a href="blog.html">Category</a>
                                <ul class="single-dropdown">

                                      @foreach (App\Model\Category::orderBy('name', 'asc')->where('status', 1)->get() as $c)
                                        <li>  <a class="list-group-item list-group-item-action" href="{!! route('show',$c->id) !!}">
                                            {{ $c->name }}
                                          </a></li>  @endforeach

                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="row">
                <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{!! route('home') !!}">HOME</a>

                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="{!! route('about_us') !!}">about us</a></li>

                                    </ul>
                                </li>
                                <li><a href="blog.html">Category</a>
                                    <ul class="single-dropdown">

                                          @foreach (App\Model\Category::orderBy('name', 'asc')->where('status', 1)->get() as $c)
                                            <li>  <a class="list-group-item list-group-item-action" href="{!! route('show',$c->id) !!}">
                                                {{ $c->name }}
                                              </a></li>  @endforeach

                                    </ul>
                                </li>

                                <li><a href="contact.html"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
