@include ('sell.head')
<body>
    <!-- Fixed_footer -->
    <!-- Footer -->
            
@include ('home.belownav')
           
     <!-- / Footer -->     <!-- Fixed_footer Ends-->
    

    <!-- Humberger Begin -->
    @include ('sell.hamberger')
   <!-- Humberger End -->

    <!-- Header Section Begin -->
    @include ('home.header')

    <!-- Header Section End -->


    <main wire:snapshot="{&quot;data&quot;:[],&quot;memo&quot;:{&quot;id&quot;:&quot;knp6RniU2iz9UNgVKzmZ&quot;,&quot;name&quot;:&quot;frontend.client-shop&quot;,&quot;path&quot;:&quot;shop&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:{&quot;lw-2803324587-0&quot;:[&quot;section&quot;,&quot;WloccSS1Xqj8OUJlH1uf&quot;]},&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;1446b92fbb90e96d0cf5fb2d94137858733346c65978543712907c9f2afcf9dc&quot;}" wire:effects="[]" wire:id="knp6RniU2iz9UNgVKzmZ">

    <!-- Hero Section Begin -->
    <!-- Hero Section Begin -->
<!-- Hero Section End -->
@include ('sell.allcategories')
    <!-- Product Section Begin -->
    <section style="position: relative;top:130px" class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">                                        
                                        @foreach ($products as $product)
                                        <div class="col-md-4">
                                            <a href="{{ route('sell.shop') }}" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="{{ asset('storage/' . $product->image1) }}" alt="{{ $product->product_name }}" class="img-fluid">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6>{{ $product->product_name }}</h6>
                                                    <span>{{ number_format($product->price, 2) }} TZS</span>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach                                    
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/lp-1.jpg')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Projector</h6>
                                                <span>10,000 TZS</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/lp-2.jpg')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Hp Laptop</h6>
                                                <span>10,000 TZS</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/lp-3.jpg')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Lenovo</h6>
                                                <span>10,000 TZS</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('images/MetaQuest.jpg')}}">
                                            <div class="product__discount__percent">-50%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Virtual Reality</span>
                                            <h5><a href="#">Meta Quest</a></h5>
                                            <div class="product__item__price">10,000 TZS <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('images/jbl-partybox.jpeg')}}">
                                            <div class="product__discount__percent">-25%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Radio</span>
                                            <h5><a href="#">jbl-partybox</a></h5>
                                            <div class="product__item__price">10,000 TZS <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('images/Radio.jpeg')}}">
                                            <div class="product__discount__percent">-25%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Radio</span>
                                            <h5><a href="#">Jbl</a></h5>
                                            <div class="product__item__price">10,000 TZS <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('images/external.jpg')}}">
                                            <div class="product__discount__percent">-25%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Hard Drive</span>
                                            <h5><a href="#">External</a></h5>
                                            <div class="product__item__price">10,000 TZS <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('images/Ps5.jpg')}}">
                                            <div class="product__discount__percent">-25%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Play Station</span>
                                            <h5><a href="#">Play station 5</a></h5>
                                            <div class="product__item__price">10,000 TZS <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('images/Apple_watch-series7.jpg')}}">
                                            <div class="product__discount__percent">-25%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Watch</span>
                                            <h5><a href="#">Apple Watch Series7</a></h5>
                                            <div class="product__item__price">10,000 TZS <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Latest</option>
                                        <option value="0">Old</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        @if ($products->isEmpty())
                            <p>No products available at the moment.</p>
                        @else
                            @foreach ($products as $product)
                                <div class="col-md-4">
                                    <a href="{{ route('cart.cart',$product->id) }}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset('storage/' . $product->image1) }}" 
                                                 alt="{{ $product->product_name }}" 
                                                 class="img-fluid">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->product_name }}</h6>
                                            <span>{{ number_format($product->price, ) }} TZS</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    
                    
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
</main>



    
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Scrollable Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
    
    <!-- Footer Section Begin -->
    <footer style="position: relative;top:200px;" class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="javascript:;"><img src="{{ asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: CityMall, Dar es Salaam - Tanzania</li>
                        <li>Phone: +255659463362</li>
                        <li>Email: help@UrbanMegastore.co.tz</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="https://facebook.com/pages/urban.megastore/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://instagram.com/urban.megastore/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://x.com/urban.megastore/" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://linkedin.com/company/urban.megastore/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p>

                            Copyright &copy;
                            2024 All rights reserved. By <a href="https:// UrbanMegastore.co.tz"
                                target="_blank"> Urban Megastore</a>
                        </p>
                    </div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>