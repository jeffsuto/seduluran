<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 145, 'stickySetTop': '-145px', 'stickyChangeLogo': false}">
  <div class="header-body">
    <div class="header-top">
      <div class="container">

        <div class="top-menu-area">
          <ul class="top-menu">
            @empty ($_SESSION['customer'])
              <li><a href="#">DAFTAR</a></li>
              <li><a href="{{base_url('account/login')}}">MASUK</a></li>
            @endempty
            @isset($_SESSION['customer'])
              <li><a href="{{base_url('account')}}">MY ACCOUNT</a></li>
              <li><a href="{{base_url('account/logout')}}">LOGOUT</a></li>
            @endisset
          </ul>
        </div>
        @isset($_SESSION['customer'])
          <p class="welcome-msg">{{$customer->name_ctm}}</p>
        @endisset
      </div>
    </div>
    <div class="header-container container">
      <div class="header-row">
        <div class="header-column">
          <div class="row">
            <div class="header-search">
              <a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
              @isset($_SESSION['customer'])
                <input type="hidden" class="id" value="{{$id_ctm}}">
              @endisset
              <form action="{{ base_url() }}" method="get">
                <div class="header-search-wrapper">
                  <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                  <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>

            <a href="#" class="mmenu-toggle-btn" title="Toggle menu">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>
        <div class="header-column header-column-center">
          <div class="header-logo">
            <a href="demo-shop-9.html">
              <img alt="Porto" width="140" height="65" src="{{base_url()}}assets/img/demos/shop/logo-shop-green-plus.png">
            </a>
          </div>
        </div>
        <div class="header-column">
          <div class="row">
            <div class="cart-area">
              <div class="custom-block">
                <i class="fa fa-phone"></i>
                <span>(+62) 0856 0698 09xx</span>
                <span class="split"></span>
                <a href="{{base_url('id/contact')}}"><span>CONTACT US</span></a>
              </div>

              @isset($_SESSION['customer'])
                <div class="cart-dropdown">
                  <a href="{{base_url('id/cart/?id='.$id_ctm)}}" class="cart-dropdown-icon">
                    <i class="minicart-icon"></i>
                    <span class="cart-info">
                      <span class="cart-qty"> </span>
                      <span class="cart-text">item(s)</span>
                    </span>
                  </a>

                  <div class="cart-dropdownmenu right">
                    <div class="dropdownmenu-wrapper">
                      <div class="cart-products cart-on-header">

                      </div>

                      <div class="cart-totals cart-totals-on-header">
                        
                      </div>

                      <div class="cart-actions">
                        <a href="{{ base_url('id/cart') }}" class="btn btn-primary">View Cart</a>
                        <a href="demo-shop-9-checkout.html" class="btn btn-primary">Checkout</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endisset

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-container header-nav header-nav-center">
      <div class="container">
        <div class="header-nav-main">
          <nav>
            <ul class="nav nav-pills" id="mainNav">
              <li class="active">
                <a href="{{base_url()}}">
                  Home
                </a>
              </li>
              <li class="dropdown dropdown-mega-small">
                <a class="dropdown-toggle">
                  KATEGORI
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="dropdown-mega-content dropdown-mega-content-small">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row cat">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>

              <li>
                <a href="{{base_url('id/contact')}}">
                  Contact Us
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
