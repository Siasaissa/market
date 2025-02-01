<!DOCTYPE html><html lang="en">
<head>
    
    @include('home.css')

</head>

<body>
    <!-- Fixed_footer -->
    <!-- Footer -->
 <div >     
    @include ('home.belownav')
</div>               

    <!-- Humberger Begin -->
    @include ('home.content')
        <!-- Humberger End -->

    <!-- Header Section Begin -->

   

@include('home.header')
    <!-- Header Section End -->


    <main wire:effects="[]" wire:id="Sfmr2fHXFZppRzYQ4sSL">
    <!-- Hero Section Begin -->
    <!-- Hero Section Begin -->
@include ('home.allCategories')
<!-- Hero Section End -->
    <!-- Hero Section End -->

    <div style="position: relative;top:200px;">
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg mb-2" data-setbg="images/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2 style="font-size:40px">UrbanMegastore</h2>
                            <a href="{{asset('shop')}}" class="primary-btn mt-2" style="color:white;background:#941c1c;border-radius:12px;" onmouseover="this.style.color='#941c1c';this.style.backgroundColor='white';" onmouseout="this.style.color='white';this.style.backgroundColor='#941c1c';" >SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->


        <!-- Categories Section Begin -->
        <section style="position: relative;top:-30px;" class="categories">
         @include ('home.categoriesAnimated')
        </section>


        <!--modals starts-->
        @include ('home.displayingModal')
        <!--modals ends-->
        <!-- Featured Section End -->

        <!-- Banner Begin -->
        @include('home.banners')
</main>  
    <!-- Footer Section Begin -->
 @include ('home.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
@include ('home.links')

</body>
</html>