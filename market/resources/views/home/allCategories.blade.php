<section  wire:effects="[]" wire:id="013ml5lqfgmphkrUgv5A" class="hero hero-normal">
    <div style="position: fixed;z-index:5; top:100px;background:white;" class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form wire:submit="searchProducts">
                            <div class="hero__search__categories">
                                All Categories
                               
                            </div>
                            <input type="text" placeholder="What do yo u need?" wire:model.live="search">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>