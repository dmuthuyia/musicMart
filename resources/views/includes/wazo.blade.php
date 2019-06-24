<header>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a href="{{ route('home') }}"><img src="{{url('/assets/images/app/kllogo2.png')}}" alt="GOLDEN SPARKLE SERVICES" class="trybsprofcircle3" /></a>

     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
      </ul>

       @if(!Auth::check())

      <ul class="navbar-nav nav navbar-left">
        <li><a href="{{ route('home') }}" class="navlog">GOLDEN SPARKLE SERVICES</a></li>

        <li><a href="{{ route('about us') }}">About Us</a></li>
        <li><a href="#" data-toggle="modal" data-target="#logprompt">Our services</a></li>
        <li><a href="{{ route('magazine') }}">Magazine</a></li>
        <li><a href="{{ route('products') }}">Buy products</a></li>
        <li><a href="{{ route('careers') }}">Careers</a></li>
        <li><a href="{{ route('contact') }}">Contacts</a></li>


      </ul>

      
      <ul class="nav navbar-nav navbar-right">

        <li class="divider-vertical"></li>
        <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Login <strong class="caret"></strong></a>
                   
                    <div class="dropdown-menu" style="padding: 5px;">
                      </a>


                        <form action="{{ route('signin') }}" method="post" accept-charset="UTF-8">

                            <div class="form-group">
                                <label for="email"> E-mail </label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="Password"> Password </label>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <button type="submit" class="btn btn-info" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In">
                                        <i class="fa fa-btn fa-user"></i> Login
                                </button>

                        </form>


                      </div>
        </li>


        <li><a href="{{ route('registration form') }}">Sign up</a></li>
      </ul>

      @else

      <ul class="navbar-nav nav navbar-left">
        <li><a href="{{ route('home') }}">GOLDEN SPARKLE SERVICES</a></li>

        <li><a href="{{ route('about us') }}">About Us</a></li>

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Services<span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
               
                 
                </ul>
                </li>



        <li><a href="{{ route('magazine') }}">Magazine</a></li>
        <li><a href="{{ route('products') }}">Buy products</a></li>
        <li><a href="{{ route('careers') }}">Careers</a></li>
        <li><a href="{{ route('contact') }}">Contacts</a></li>


      </ul>

      
      <ul class="nav navbar-nav navbar-right">

        <li><a href="{{ route('profile') }}">Profile</a></li>
                
        <li><a href="/cart"><i class="icon-shopping-cart icon-white"></i> My shopping Cart</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More, {{Auth::user()->name}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/orders"><i class="icon-envelope"></i> My Orders</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"><i class="icon-off"></i>Just Logout</a></li>
                        </ul>
                  </li>

      </ul>

      @endif

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


</header>

<div class="modal fade" id="logprompt" 
     tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">GOLDEN SPARKLE SERVICES</h4>
      </div>
      <div class="modal-body">
        <p>
        You can only view Singles' profile if you have registered as a single and searching person!!
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>
  
          <a href="{{ route('registration form') }}" class="btn btn-primary">Sign up</a>
          <hr>
          <div>
            <div class="row">
            <div class="logowrap"></div>
              <div class="col-md-6" style="text-align: center;">
               <h3> Or Sign in to<br />continue</h3>
                
              </div>
              <div class="col-md-6" style="text-align: left;">

                        <form action="{{ route('signin') }}" method="post" accept-charset="UTF-8">

                            <div class="form-group">
                                <label for="email"> E-mail </label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="Password"> Password </label>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <button type="submit" class="btn btn-info" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In">
                                        <i class="fa fa-btn fa-user"></i> Login
                                </button>

                        </form>
              </div>
            </div>
          </div>

        </span>
      </div>
    </div>
  </div>
</div>