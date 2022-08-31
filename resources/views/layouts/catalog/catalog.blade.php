@include('layouts.catalog.catalog-header')

<!-- Content -->
<section>
    <div class="shop-page">
        <div class="container">
            <div class="row shop">
                <div class="col-md-8 col-sm-6 col-xs-12 shoppage1">
                    <div class="we-found">
                        <h4>We found <strong>25</strong> products available for you</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 shoppage1">
                    <div class="shows shows-shoppage-6">
                        <ul class="pagination shows shows-shoppage1">
                            <li><a href="#">Shows:</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                    <div class="wrappage">
                        <!-- Filters -->
                        <div class="dropdown drop-filter">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                <span class="caret"></span><img class="img-filter" src="{{asset('')}}images/icon7.png" alt="">Filters</button>
                            <div class=" dropdown-menu filter-shoppage filter-shoppage-v6">
                                <div class="container container-filter">
                                    <div class="row">
                                        <div class="col-md-2 widget-filter filter-cate no-pd-top">
                                            <h4>Sort by</h4>
                                            <ul>
                                                <li><a href="">Default</a></li>
                                                <li><a href="">Popularity</a></li>
                                                <li><a href="">Newnest</a></li>
                                                <li><a href="">Price: low to high</a></li>
                                                <li><a href="">Price: high to low</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 widget-filter filter-cate filter-color">
                                            <h4>Price</h4>
                                            <ul>
                                                <li><a href="">$0.00 - $300.00</a></li>
                                                <li><a href="">$300.00 - $600.00</a></li>
                                                <li><a href="">$600.00 - $900.00</a></li>
                                                <li><a href="">$900.00 - $120.00</a></li>
                                                <li><a href="">$120.00+</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 widget-filter filter-cate  filter-style-size">
                                            <h4>Size</h4>
                                            <ul>
                                                <li><a class="st-xs" href="#">XS</a></li>
                                                <li><a href="">S</a></li>
                                                <li><a href="">M</a></li>
                                                <li><a href="">L</a></li>
                                                <li><a class="st-xl" href="">XL</a></li>
                                                <li><a class="xxl" href="">XXL</a></li>
                                                <li><a class="xxl" href="">Free size</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 widget-filter filter-cate filter-style">
                                            <h4>Color</h4>
                                            <ul class="color2">
                                                <li><a href=""><img src="{{asset('')}}images/elip1.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip2.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip3.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip4.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip5.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip6.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip7.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip8.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip9.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip10.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip11.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip12.png" alt=""></a></li>
                                                <li><a href=""><img src="{{asset('')}}images/elip13.png" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 widget-filter filter-cate  filter-style-brand">
                                            <h4>Brand</h4>
                                            <div class="ul-1 shop3">
                                                <ul>
                                                    <li><a href="#">Miukid</a></li>
                                                    <li><a href="#">KidStar</a></li>
                                                    <li><a href="#">Momy</a></li>
                                                    <li><a href="#">Huggies</a></li>
                                                    <li><a href="#">Mshop</a></li>
                                                    <li><a href="#">iBaby</a></li>
                                                    <li><a href="#">Me & Be</a></li>
                                                    <li><a href="#">CocoShop</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrappage">
                                <div class="filter-collection-left hidden-lg hidden-md">
                                    <a class="btn"><i class="zoa-icon-filter"><img src="{{asset('')}}images/icon7.png" alt=""></i> Filter</a>
                                </div>
                                <div class="col-xs-12 hidden-md hidden-lg col-left collection-sidebar" id="filter-sidebar">
                                    <div class="close-sidebar-collection hidden-lg hidden-md">
                                        <span>Filter</span><i class="icon_close ion-close"></i>
                                    </div>
                                    <div class="widget-filter filter-cate no-pd-top">
                                        <h4>Sort by</h4>
                                        <ul>
                                            <li><a href="">Default</a></li>
                                            <li><a href="">Popularity</a></li>
                                            <li><a href="">Newnest</a></li>
                                            <li><a href="">Price: low to high</a></li>
                                            <li><a href="">Price: high to low</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-filter filter-cate filter-color">
                                        <h4>Price</h4>
                                        <ul>
                                            <li><a href="">$0.00 - $300.00</a></li>
                                            <li><a href="">$300.00 - $600.00</a></li>
                                            <li><a href="">$600.00 - $900.00</a></li>
                                            <li><a href="">$900.00 - $120.00</a></li>
                                            <li><a href="">$120.00+</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-filter filter-cate filter-size">
                                        <h4>Size</h4>
                                        <ul>
                                            <li><a href="#">XS</a></li>
                                            <li><a href="">S</a></li>
                                            <li><a href="">M</a></li>
                                            <li><a href="">L</a></li>
                                            <li><a href="">XL</a></li>
                                            <li><a class="xxl" href="">XXL</a></li>
                                            <li><a class="xxl" href="">Free size</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-filter filter-cate filter-size">
                                        <h4>Color</h4>
                                        <ul class="color2">
                                            <li><a href=""><img src="{{asset('')}}images/elip1.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip2.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip3.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip4.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip5.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip6.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip7.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip8.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip9.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip10.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip11.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip12.png" alt=""></a></li>
                                            <li><a href=""><img src="{{asset('')}}images/elip13.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-filter filter-cate filter-size">
                                        <h4>Brand</h4>
                                        <div class="ul-1 shop3">
                                            <ul>
                                                <li><a href="#">Miukid</a></li>
                                                <li><a href="#">KidStar</a></li>
                                                <li><a href="#">Momy</a></li>
                                                <li><a href="#">Huggies</a></li>
                                                <li><a href="#">Mshop</a></li>
                                                <li><a href="#">iBaby</a></li>
                                                <li><a href="#">Me & Be</a></li>
                                                <li><a href="#">CocoShop</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="zoa-btn btn-filter">
                                        Filter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border shopv1"></div>
        </div>
    </div>
    <!-- Products -->
    <div class="list shop6">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 shop5">
                    <div class="widget-filter filter-cate no-pd-top shop5">
                        <h4>Категории продуктов</h4>
                        <ul>

                            @foreach ($categories as $category)
                                <li><a href="{{ route('catalog') }}/{{$category->id}}">{{$category->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="size shop5 size-shoppage-6">
                        <h4>Size</h4>
                        <ul>
                            <li><a class="st-xs" href="#">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a class="st-xs" href="">XL</a></li>
                            <li><a class="xxl" href="">XXL</a></li>
                            <li><a class="xxl" href="">Free size</a></li>
                        </ul>
                    </div>
                    <div class="sortby shop5">
                        <h4>Price</h4>
                        <ul>
                            <li><a href="">$0.00 - $300.00</a></li>
                            <li><a href="">$300.00 - $600.00</a></li>
                            <li><a href="">$600.00 - $900.00</a></li>
                            <li><a href="">$900.00 - $120.00</a></li>
                            <li><a href="">$120.00+</a></li>
                        </ul>
                    </div>
                    <div class="widget-filter filter-cate filter-size shop5">
                        <h4>Color</h4>
                        <ul class="color2 shop5 color-shoppage-6">
                            <li><a href=""><img src="{{asset('')}}images/elip1.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip2.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip3.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip4.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip5.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip6.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip7.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip8.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip9.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip10.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip11.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip12.png" alt=""></a></li>
                            <li><a href=""><img src="{{asset('')}}images/elip13.png" alt=""></a></li>
                        </ul>
                    </div>
                    <!-- blog tags -->
                    <div class="blogtags shop5">
                        <h4>Blog Tags</h4>
                        <div class="ul-1 shop5">
                            <ul>
                                <li><a href="#">watch</a></li>
                                <li><a href="#">bottom</a></li>
                                <li><a href="#">jeans</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">clothes</a></li>
                                <li><a href="#">shoes</a></li>
                                <li><a href="#">iBaby</a></li>
                                <li><a href="#">Momy</a></li>
                                <li><a href="#">shoes</a></li>
                                <li><a href="#">iBaby</a></li>
                                <li><a href="#">Momy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 shop5 ">
                    <div class="image-left ">
                        <div class="product-img product-item shop5 ">
                            <a href=""><img src="{{asset('')}}images/img44.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2">
                                <div class="before shop1 v2"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1"><span>New</span></div>
                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="image-left">
                        <div class="product-img product-item shop5">
                            <a href=""><img src="{{asset('')}}images/img39.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 st-v2"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2"><span>-25%</span></div>

                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="image-left">
                        <div class="product-img product-item shop5">
                            <a href=""><img src="{{asset('')}}images/img40.jpg" alt="" class="img-responsive"></a>
                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="image-left">
                        <div class="product-img product-item shop5">
                            <a href=""><img src="{{asset('')}}images/img46.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2">
                                <div class="before shop1 v2"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1"><span>New</span></div>
                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a  class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="image-left">
                        <div class="product-img product-item shop5">
                            <a href=""><img src="{{asset('')}}images/img53.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 st-v2"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2"><span>-25%</span></div>

                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="image-left">
                        <div class="product-img product-item shop5">
                            <a href=""><img src="{{asset('')}}images/img55.jpg" alt="" class="img-responsive"></a>
                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="image-left">
                        <div class="product-img product-item shop5">
                            <a href=""><img src="{{asset('')}}images/img45.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2">
                                <div class="before shop1 v2"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1"><span>New</span></div>
                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="image-left">
                        <div class="product-img product-item shop5">
                            <a href=""><img src="{{asset('')}}images/img49.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 st-v2"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2"><span>-25%</span></div>

                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="image-left">
                        <div class="product-img product-item shop5">
                            <a href=""><img src="{{asset('')}}images/img59.jpg" alt="" class="img-responsive"></a>
                            <div class="product-button-group product-details">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 shop-5 shop-6">
                            <p><a href="#">Vladimir the Fox</a></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                <li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>

                                <li><a class="sales-36" href="#">$36.00</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="loadmore">
                        <a href="#">load more</a>
                    </div>
                </div>
            </div>
            <div class="border"></div>
        </div>
    </div>
</section>
<!-- footer -->

@include('layouts.catalog.catalog-footer')
