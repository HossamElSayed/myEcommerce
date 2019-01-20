
@section('style')
    <link rel="stylesheet" href="{{url('/mylib/style-head.css')}}">
@endsection

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" style="font-size: 30px;" href="{{url('/')}}"><i class="fa fa-product-hunt"></i>roduct Shopping</a>

        </div>



            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Products</a></li>
                <li><a href="{{route('shoppingcart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Shopping Cart
                        <span class="badge" style="background-color: #be1900; color: #ffffff">{{Session::has('cart')? Session::get('cart')->totalQty:''}}</span>
                        </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                       @if(auth()->check())
                            <i class="fa fa-user"></i> {{ Auth::user()->name }}
                           @else
                           <i class="fa fa-lock"></i> Guest
                        @endif
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @guest
                        <li><a href="{{route('login')}}"> <i class="fa fa-sign-in"></i> Login</a></li>
                        <li><a href="{{route('register')}}"><i class="fa fa-sign-up"></i> Register</a></li>
                        @else
                        <li><a href="#"> <i class="fa fa-user-circle" aria-hidden="true"></i> User Profile</a></li>
                        <li>  <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>