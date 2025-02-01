<div style="position: fixed;z-index:10;" class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="{{ asset('assets/img/logo.png')}}" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>10,000 tZS</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="assets/img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Kiswahili</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="{{asset('login')}}" ><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
            <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class=""><a href="{{ route('home') }}">Home</a></li>
            <li class="active"><a href="{{asset('shop')}}">Shop</a></li>
            <li><a href="{{asset('contacts')}}">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@UrbanMegastoreMegastore.com</li>
            <li>Free Shipping for all Order of 100K TZS</li>
        </ul>
    </div>
</div> 