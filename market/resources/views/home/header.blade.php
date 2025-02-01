<header style="position: fixed;z-index:5;background:white;" class="header col-12">
<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="header__top__left">
                    <ul>
                        <li><i class="fa fa-envelope"></i>UrbanMegastore@gmail.com</li>
                        <li>  Delivery for all Orders above 100K</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__top__right">
                    <div class="header__top__right__language">
                        <img src="images/language.png" alt="">
                        <div>English</div>
                        <span class="arrow_carrot-down"></span>
                        <ul>
                            <li><a href="javascript:;">Swahili</a></li>
                        </ul>
                    </div>
                        <div class="header__top__right__auth">
                        <a href="{{url('/register')}}"  >Register</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="header__logo row">
                <div class="pt-2">
                    <a href="javascript::void(0)">
                        <h4 style="font-weight: bold;">Urban <span style="color:#941c1c">Megastore</span> </h4>
                    </a>
                </div>

                <div>
                    
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <nav class="header__menu">
                <ul>
                    <li class="active"><a href="{{asset('/')}}" >Home</a></li>
                    <li class=""><a href="{{ route('sell.shop') }}">Shop</a></li>

                    <li class=""><a href="{{asset('contacts')}}" >Contacts</a></li>
                </ul>
            </nav>
        </div>

        <div class="col-lg-3">
            <div class="header__cart">
                <ul>
                    <li><a href="https://wa.me/2RTO65TX6AUTK1 "><i style="color:green" class="fa fa-whatsapp"></i></a></li>
                    
                </ul>
                
            </div>
        </div>
    </div>
    <div class="humberger__open">
        <i class="fa fa-bars"></i>
    </div>
</div>
</header>