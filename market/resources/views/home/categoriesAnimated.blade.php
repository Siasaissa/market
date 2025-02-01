<div class="container">
    <div class="row">
        <div class="categories__slider owl-carousel">
            @foreach ($products as $product)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('storage/' . $product->image1) }}">
                        <h5 style="background-color:#941c1c"><a style="color:#941c1c"
                                href="https:// UrbanMegastore.co.tz/shop/category/office-and-stationery-MTk=">
                                {{ $product->product_name }}</a>
                        </h5>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
