<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>Products &#8211; Kingler &#8211; weapon store</title>



        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-layout.css" type="text/css" media="all" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce.css" type="text/css" media="all" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind:300,400,700%7CLato:300,300i,400,400i,700,700i&amp;subset=latin-ext">
        <link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all" />

        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/animation.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all" />

        <link rel="stylesheet" href="css/plugin.woocommerce.css" type="text/css" media="all" />

        <link rel="stylesheet" href="css/skin.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all" />

        <link rel="stylesheet" href="css/messages.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/magnific/magnific-popup.min.css" type="text/css" media="all" />

        <link rel="icon" href="http://placehold.it/32x32.jpg" sizes="32x32" />
        <link rel="icon" href="http://placehold.it/192x192.jpg" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://placehold.it/180x180.jpg" />

    </head>


    <body class="woocommerce woocommerce-page body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_left">
        <div id="page_preloader"></div>
        <!-- Body wrap -->
        <div class="body_wrap bg_image">
            <!-- Page wrap -->
            <div class="page_wrap">
                <!-- Header -->
          @include('user.layouts.partials.header')
                <!-- /Header Mobile -->
                <!-- Breadcrumbs -->
                <div class="top_panel_title top_panel_style_1 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_1">
                        <div class="content_wrap">
                            <h1 class="page_title">Shop</h1>
                            <div class="breadcrumbs">
                              <a class="breadcrumbs_item home" href="{{route('user.index')}}">Home</a>    
                                <span class="breadcrumbs_delimiter"></span>
                       
                                <span class="breadcrumbs_item current">Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
                 @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <!-- /Breadcrumbs -->
                <!-- Page Content -->
                <div class="page_content_wrap page_paddings_yes">
                    <div class="content_wrap" style="width:93%" >
                        <!-- Content -->
                        <div class="content" style="width:70%">
                            <div class="list_products shop_mode_thumbs">
                                <div class="mode_buttons">
                                    <a href="#" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                                    <a href="shop-list.html" class="woocommerce_list icon-th-list" title="Show products as list"></a>
                                </div>
                                <p class="woocommerce-result-count">
                                    Showing 1&ndash;12 of 16 results</p>
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby">
                                        <option value="menu_order" selected='selected'>Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                                <!-- Products List -->
                                <ul class="products">
                                    <!-- Product Item -->
                                      @foreach($products as $product)
                                    <li class="product column-1_3 ">
                                        <div class="post_item_wrap ">
                                             
                                            <div class="post_featured ">
                                                <div class="post_thumb">
                                                    <a href="product-single.html">
                                                         @if($product->discountedPrice!=null)
                                                        <span class="onsale"> {{  $product->dispercentage}}Sale!</span>
                                                          @endif
                                                        <img src="{{asset('images/'. $product->image)}}" alt="" style="width:250px; height: 250px;"  title="Product" />
                                                    </a>
                                                </div>
                                            </div>
                                          
                                            <div class="post_content">
                                                <h2 class="woocommerce-loop-product__title">
                                                    <a href="{{ route('user.single-product',$product->id) }}">{{ $product->name}}</a>
                                                </h2>
                                               <!--  <div class="star-rating" title="Rated 4.00 out of 5">
                                                    <span class="width_80_per">
                                                        <strong class="rating">4.00</strong> out of 5
                                                    </span>
                                                </div> -->

                                                  @if($product->discountedPrice!=null)
                     
                                                <span class="price">
                                                    <del>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">&#36;</span>
                                                            {{ $product->price }}
                                                        </span>
                                                    </del>
                                                    
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            
                                                            {{ $product->discountedPrice }}&#36;
                                                        </span>
                                                    </ins>
                                                </span>
                                                  @else
                                                    <span class="price">
                                                  
                                                    
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">&#36;</span>
                                                            {{ $product->price }}
                                                        </span>
                                                    </ins>
                                                </span>
                                                @endif
                                                 <form action="{{ route('cart.store', $product->id) }}" method="POST" >
                                                  @csrf                                                   
                                                   

                                                    <input type="submit" class="" value="Add To Cart">
                                                </form>

                                                
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <!-- /Product Item -->

                                </ul>
                                <!-- /Products List -->
                                <!-- Pagination -->
                                <!-- <nav class="pagination_wrap pagination_pages">
                                    <span class="pager_current active">1</span>
                                    <a href="#" class="">2</a>
                                    <a href="#" class="pager_next ">&#8250;</a>
                                    <a href="#" class="pager_last ">&raquo;</a>
                                    
                                    <p style="text-decoration:none" class="pager_last "> {{ $products->links() }}</p>
                                </nav> -->

                                <!-- /Pagination -->
                            </div>
                        </div>
                        <!-- /Content -->

                                    <p style="text-decoration:none" class="pager_last "> {{ $products->links() }} </p> 
                        <!-- Sidebar -->
                        <div class="sidebar widget_area scheme_original">
                            <div class="sidebar_inner widget_area_inner">
                                <!-- Widget: Cart -->
                                <aside class="widget_number_1 widget woocommerce widget_shopping_cart">
                                    <h5 class="widget_title">Cart</h5>
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget ">
                                            <li class="mini_cart_item">
                                                <a class="remove" href="#" aria-label="Remove this item">×</a>
                                                <a href="product-single.html">
                                                    <img src="http://placehold.it/180x180.jpg" alt="">
                                                    Glock Double 9mm 3.4" 6+1 FS Integral
                                                </a>
                                                <span class="quantity">
                                                    1 ×
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        821.00
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="mini_cart_item">
                                                <a class="remove" href="#">×</a>
                                                <a href="product-single.html">
                                                    <img src="http://placehold.it/180x180.jpg" alt="">
                                                    Beretta JMN9S15CTC BU9 Nano 6+1 9mm 3.07"
                                                </a>
                                                <span class="quantity">
                                                    1 ×
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        120.00
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                        <p class="total">
                                            <strong>Subtotal:</strong>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                941.00
                                            </span>
                                        </p>
                                        <p class="buttons">
                                            <a class="button wc-forward" href="cart.html">View cart</a>
                                            <a class="button checkout wc-forward" href="checkout.html">Checkout</a>
                                        </p>
                                    </div>
                                </aside>
                                <!-- /Widget: Cart -->
                                <!-- Widget: Product Categories -->
                                <aside class="widget woocommerce widget_product_categories">
                                    <h5 class="widget_title">Categories</h5>
                                    <ul class="product-categories">
                                        <li>
                                            <a href="#">Ammunition</a>
                                        </li>
                                        <li><a href="#">Firearms</a>
                                            <ul class="children">
                                                <li>
                                                    <a href="#">Remington 1911 R1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Revolvers</a>
                                                </li>
                                                <li>
                                                    <a href="#">Semi-Auto Handguns</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Handguns</a>
                                        </li>
                                        <li>
                                            <a href="#">Knives</a>
                                        </li>
                                        <li>
                                            <a href="#">Recent Products</a>
                                        </li>
                                        <li>
                                            <a href="#">Rifles</a>
                                        </li>
                                        <li>
                                            <a href="#">Shotguns</a>
                                        </li>
                                    </ul>
                                </aside>
                                <!-- /Widget: Product Categories -->
                                <!-- Widget: Price Filter -->
                                <aside class="widget woocommerce widget_price_filter">
                                    <h5 class="widget_title">Filter by price</h5>
                                    <form method="get" action="#">
                                        <div class="price_slider_wrapper">
                                            <div class="price_slider" style="display:none;"></div>
                                            <div class="price_slider_amount">
                                                <input type="text" id="min_price" name="min_price" value="" data-min="120" placeholder="Min price" />
                                                <input type="text" id="max_price" name="max_price" value="" data-max="821" placeholder="Max price" />
                                                <button type="submit" class="button">Filter</button>
                                                <div class="price_label" style="display:none;">
                                                    Price: <span class="from">$120</span> &mdash; <span class="to">$821</span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </form>
                                </aside>
                                <!-- /Widget: Price Filter -->
                                <!-- Widget: Product Tag -->
                                <aside class="widget woocommerce widget_product_tag_cloud">
                                    <h5 class="widget_title">Product Tags</h5>
                                    <div class="tagcloud">
                                        <a href="#" title="16 products">Beretta</a>
                                        <a href="#" title="1 product">gear</a>
                                        <a href="#" title="16 products">guns</a>
                                        <a href="#" title="1 product">hunting</a>
                                        <a href="#" title="1 product">Magazines</a>
                                        <a href="#" title="1 product">rifle</a>
                                        <a href="#" title="16 products">steel</a>
                                        <a href="#" title="1 product">tactical</a>
                                    </div>
                                </aside>
                                <!-- /Widget: Product Tag -->
                            </div>
                        </div>
                        <!-- /Sidebar -->
                    </div>
                </div>
                <!-- /Page Content -->
                <!-- Footer 1 -->
                <footer class="footer_wrap widget_area scheme_original">
                    <div class="footer_wrap_inner widget_area_inner">
                        <div class="content_wrap">
                            <!-- Widgets -->
                            <div class="columns_wrap">
                                <aside class="column-1_3 widget woocommerce widget_products">
                                    <h5 class="widget_title">Latest products</h5>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="product-single.html">
                                                <img src="http://placehold.it/180x180.jpg" alt="" />
                                                <span class="product-title">Glock PI4350201 G43 Double 9mm 3.4" 6+1 FS Integral Grip Black</span>
                                            </a>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>423.00
                                            </span>
                                        </li>
                                        <li>
                                            <a href="product-single.html">
                                                <img src="http://placehold.it/180x180.jpg" alt="" />
                                                <span class="product-title">All Hazards 1911-22-OD Nitro Sanndstone Bag</span>
                                            </a>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>385.00
                                            </span>
                                        </li>
                                    </ul>
                                </aside><aside class="column-1_3 widget woocommerce widget_top_rated_products">
                                <h5 class="widget_title">Top Rated Products</h5>
                                <ul class="product_list_widget">
                                    <li>
                                        <a href="product-single.html">
                                            <img src="http://placehold.it/180x180.jpg" alt="" />
                                            <span class="product-title">Hi-Point Compact 9mm 3.5" Black Poly Grip/Frame Black</span>
                                        </a>
                                        <div class="star-rating" title="Rated 5.00 out of 5">
                                                <span class="width_100_per">
                                                    <strong class="rating">5.00</strong> out of 5
                                                </span>
                                        </div>
                                        <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">&#36;</span>270.00
                                                </span>
                                        </del>
                                        <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">&#36;</span>251.00
                                                </span>
                                        </ins>
                                    </li>
                                    <li>
                                        <a href="product-single.html">
                                            <img src="http://placehold.it/180x180.jpg" alt="" />
                                            <span class="product-title">Glock PI4350201 G43 Double 9mm 3.4" 6+1 FS Integral Grip Black</span>
                                        </a>
                                        <div class="star-rating" title="Rated 5.00 out of 5">
                                                <span class="width_100_per">
                                                    <strong class="rating">5.00</strong> out of 5
                                                </span>
                                        </div>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>423.00
                                            </span>
                                    </li>
                                </ul>
                            </aside><aside class="column-1_3 widget woocommerce widget_recent_reviews">
                                <h5 class="widget_title">Recent Reviews</h5>
                                <ul class="product_list_widget">
                                    <li>
                                        <a href="product-single.html">
                                            <img src="http://placehold.it/180x180.jpg" alt="" />
                                            Beretta JMN9S15CTC BU9 Nano 6+1 9mm 3.07" w/ Crimson Trace
                                        </a>
                                        <div class="star-rating" title="Rated 4 out of 5">
                                                <span class="width_80_per">
                                                    <strong class="rating">4</strong> out of 5
                                                </span>
                                        </div>
                                        <span class="reviewer">by Jack Black</span></li>
                                    <li>
                                        <a href="product-single.html">
                                            <img src="http://placehold.it/180x180.jpg" alt="" />Fiocchi Rifle Shootinh Dynamics 308WIN 150 FMJ
                                        </a>
                                        <div class="star-rating" title="Rated 5 out of 5">
                                                <span class="width_100_per">
                                                    <strong class="rating">5</strong> out of 5
                                                </span>
                                        </div>
                                        <span class="reviewer">by Jack Black</span></li>
                                </ul>
                            </aside>
                            </div>
                            <!-- /Widgets -->
                        </div>
                    </div>
                </footer>
                <!-- /Footer 1 -->
                <!-- Footer 2-->
                <footer class="contacts_wrap scheme_original">
                    <div class="contacts_wrap_inner">
                        <div class="content_wrap">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="http://placehold.it/164x100.jpg" class="logo_footer" alt="">
                                </a>
                            </div>
                            <!-- /Logo -->
                            <!-- Contact Adress -->
                            <div class="contacts_address">
                                <address class="address_right">
                                    <p>Phone: 23-456-789</p>
                                    <p>Fax: 098-765-432</p>
                                </address>
                                <address class="address_left">
                                    <p>123, New Lenox</p>
                                    <p>Chicago, IL 60606</p>
                                </address>
                            </div>
                            <!-- /Contact Adress -->
                            <!-- Socials -->
                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_medium">
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                        <span class="icon-facebook"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_gplus">
                                        <span class="icon-gplus"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                        <span class="icon-twitter"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_linkedin">
                                        <span class="icon-linkedin"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Socials -->
                        </div>
                    </div>
                </footer>
                <!-- /Footer 2-->
                <!-- Copyright -->
                <div class="copyright_wrap copyright_style_text  scheme_original">
                    <div class="copyright_wrap_inner">
                        <div class="content_wrap">
                            <div class="copyright_text">
                                <a href="#">Kingler</a> &copy; 2017 All Rights Reserved. <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
   
        <script type="text/javascript" src="js/jquery/jquery.js"></script>
        <script type="text/javascript" src="js/jquery/jquery-migrate.min.js"></script>

        <script type="text/javascript" src="js/_main.js"></script>
        <script type="text/javascript" src="js/trx_utils.min.js"></script>
        <script type="text/javascript" src="js/_packed.js"></script>

        <script type="text/javascript" src="js/vendor/photostack/modernizr.min.js"></script>
        <script type="text/javascript" src="js/vendor/superfish.js"></script>

        <script type="text/javascript" src="js/utils.js"></script>
        <script type="text/javascript" src="js/core.init.js"></script>
        <script type="text/javascript" src="js/init.js"></script>

        <script type="text/javascript" src="js/shortcodes.js"></script>
        <script type="text/javascript" src="js/messages.js"></script>
        <script type="text/javascript" src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>

        <script type='text/javascript' src='js/vendor/woocommerce/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js'></script>
        <script type='text/javascript' src='js/vendor/woocommerce/js/accounting/accounting.min.js'></script>
        <script type='text/javascript' src='js/vendor/woocommerce/js/price-slider/price-slider.min.js'></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>



    </body>

</html>