<div class="header-top">
    <div class="container">
        <div class="header-left">
            <a href="tel:{{$Settings->mobile_one}}"><i class="icon-phone"></i>Call: {{$Settings->mobile_one_display}}</a> &nbsp; | &nbsp;
            <a href="tel:{{$Settings->mobile_two}}"><i class="icon-phone"></i>Call: {{$Settings->mobile_two_display}}</a>
        </div><!-- End .header-left -->

        <div class="header-right">

            <ul class="top-menu">
                <li>
                    <a href="#">Links</a>
                    <ul>
                        <li>
                            <div class="header-dropdown">
                                <a href="#">USD</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">Eur</a></li>
                                        <li><a href="#">Usd</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->
                        </li>
                        <li>   
                            <div class="header-dropdown">
                                <a href="#">Engligh</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->
                        </li>
                        <li class="login">
                            @if(Auth::check())
                            <a href="{{url('/')}}/dashboard"><i class="icon-user"></i> {{Auth::user()->name}}</a>
                            @else
                            <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                            @endif
                        </li>
                    </ul>
                </li>
            </ul><!-- End .top-menu -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div><!-- End .header-top -->