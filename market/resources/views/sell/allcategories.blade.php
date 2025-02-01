<section wire:snapshot="{&quot;data&quot;:{&quot;search&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;WloccSS1Xqj8OUJlH1uf&quot;,&quot;name&quot;:&quot;includes.top-categories-live-search&quot;,&quot;path&quot;:&quot;shop&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;278d208e25b5a0617d2b2934dc23a36b9f7382a70cffef515ef0304a1bc77f47&quot;}" wire:effects="[]" wire:id="WloccSS1Xqj8OUJlH1uf" class="hero hero-normal">
    <div style="position: fixed;z-index:5; top:100px;background:white;" class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Categories</span>
                    </div>
                    <ul>
                        <li><a href="#"  >Accessories</a></li>
                        <li><a href="#"  >Computers</a></li>
                        <li><a href="#"  >Home Appliances</a></li>
                        <li><a href="#"  >Home Entertainment </a></li>
                        <li><a href="#"  >Office And Stationery</a></li>
                        <li><a href="#"  >Photography And Videography</a></li>
                        <li><a href="#"  >Smart Phones</a></li>
                        <li><a href="#"  >Wearable Technology</a></li>         
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form wire:submit='searchProducts'>
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?" wire:model.live='search'>
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
