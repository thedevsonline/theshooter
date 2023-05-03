<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
         <meta name="format-detection" content="telephone=no">
            <title>Cart &#8211; Kingler &#8211; weapon store</title>
            <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-layout.css" type="text/css" media="all" />
            <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />
            <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce.css" type="text/css" media="all" />
            <link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce-layout.css') }}" type="text/css" media="all" />
            <link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce-smallscreen.css') }}" type="text/css" media="only screen and (max-width: 768px)" />
            <link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce.css') }}" type="text/css" media="all" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind:300,400,700%7CLato:300,300i,400,400i,700,700i&amp;subset=latin-ext">
               <link rel="stylesheet" href="{{ asset('css/fontello/css/fontello.css') }}" type="text/css" media="all" />
               <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
               <link rel="stylesheet" href="{{ asset('css/animation.css') }}" type="text/css" media="all" />
               <link rel="stylesheet" href="{{ asset('css/shortcodes.css') }}" type="text/css" media="all" />
               <link rel="stylesheet" href="{{ asset('css/plugin.woocommerce.css') }}" type="text/css" media="all" />
               <link rel="stylesheet" href="{{ asset('css/skin.css') }}" type="text/css" media="all" />
               <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" media="all" />
               <link rel="stylesheet" href="{{ asset('css/messages.css') }}" type="text/css" media="all" />
               <link rel="stylesheet" href="{{ asset('js/vendor/magnific/magnific-popup.min.css') }}" type="text/css" media="all" />
               <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="32x32" />
               <link rel="icon" href="{{ asset('images/favicon-192x192.png') }}" sizes="192x192" />
               <link rel="apple-touch-icon-precomposed" href="{{ asset('images/apple-touch-icon-180x180.png') }}" />
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                  <style>
 .woocommerce a.remove:hover {
  color: #f00 !important;
  background: red;
}
</style>
               </head>
               <body class="woocommerce-cart woocommerce-page body_transparent article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
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
                                 <h1 class="page_title">Your cart</h1>
                                 <div class="breadcrumbs">
                                    <a class="breadcrumbs_item home" href="{{route('user.index')}}">Home</a>
                                    <span class="breadcrumbs_delimiter"></span>
                                    <a class="breadcrumbs_item all" href="{{route('user.shop')}}">Shop</a>
                                    <span class="breadcrumbs_delimiter"></span>
                                    <span class="breadcrumbs_item current">Your cart</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /Breadcrumbs -->
                        <!-- Page Content -->
                        <div class="page_content_wrap page_paddings_yes">
                           <div class="content_wrap">
                @if ($errors->any())
    
                              
                              <div class="alert alert-danger">
                                 <ul>
            @foreach ($errors->all() as $error)
                
                                    
                                    <li>{{ $error }}</li>
            @endforeach
        
                                 
                                 </ul>
                              </div>
@endif
@if (session('success'))
    
                              
                              <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                  
                              
                              <!-- Content -->
                              <div class="content">
                                 <article class="post_item post_item_single">
                                    <section class="post_content">
                                       <div class="woocommerce">
                                          <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                             <thead>
                                                <tr>
                                                   <th class="product-remove">&nbsp;</th>
                                                   <th class="product-thumbnail">&nbsp;</th>
                                                   <th class="product-name">Product</th>
                                                   <th class="product-price">Price</th>
                                                   <th class="product-quantity">Quantity</th>
                                                   <th class="product-subtotal">Total</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php $totaprice = 0; ?>
                                               @foreach($cart as $cartItem)
            
                                                
                                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                                   <td class="product-remove">
                                                      <a href="{{ route('cart.destroy', $cartItem->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $cartItem->id }}').submit();"class="remove">&times;</a>
                                                      <form id="delete-form-{{ $cartItem->id }}" action="{{ route('cart.destroy', $cartItem->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                   </td>
                                                   <td class="product-thumbnail">
                                                      <a href="#">
                                                         <img src="{{ asset('images/'.$cartItem->image) }}" width="180px" height="180px" alt="" />
                                                      </a>
                                                   </td>
                                                   <td class="product-name" data-title="Product">
                                                      <a href="{{ route('user.single-product',$cartItem->productid) }}">{{ $cartItem->product_name }}</a>
                                                   </td>
                                                   <td class="product-price" data-title="Price">
                                                      <span class="woocommerce-Price-amount amount">
                                                         <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $cartItem->price }}
                    
                                                      
                                                      </span>
                                                   </td>
                                                   <td class="product-quantity" data-title="Quantity">
                                                      <form class="woocommerce-cart-form" action="{{ route('cart.update', $cartItem->id) }}" method="post">
                                                         @csrf
                                                         @method('PUT')
                        
                                                         
                                                         <div class="quantity">
                                                            <input type="number" class="input-text qty text" step="1" min="0" name="quantity" value="{{ $cartItem->quantity }}" title="Qty" size="4" />
                                                         </div>
                                                         <button type="submit" class="button">Update</button>
                                                      </form>
                                                   </td>
                                                   <td class="product-subtotal" data-title="Total">
                                                      <span class="woocommerce-Price-amount amount">
                                                         <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $cartItem->total_amount }}
                    
                                                      
                                                      </span>
                                                   </td>
                                                </tr>
                                                <?php $totaprice +=
                                                    $cartItem->total_amount; ?>
                                                           @endforeach
    
                                             
                                             </tbody>
                                          </table>
                                          <div class="cart-collaterals">
                                             <div class="cart_totals ">
                                                <h2>Cart totals</h2>
                                                <table class="shop_table shop_table_responsive">
                                                   <tr class="cart-subtotal">
                                                      <th>Subtotal</th>
                                                      <td data-title="Subtotal">
                                                         <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">&#36;</span> {{ $totaprice}}                                             
                                                         
                                                         </span>
                                                      </td>
                                                   </tr>
                                                   <tr class="order-total">
                                                      <th>Total</th>
                                                      <td data-title="Total">
                                                         <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                               <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $totaprice}}
                                             
                                                            
                                                            </span>
                                                         </strong>
                                                      </td>
                                                   </tr>
                                                </table>
                                                <div class="wc-proceed-to-checkout">
                                                   <a href="{{ route('user.checkout') }}" class="checkout-button button alt wc-forward">
                                       Proceed to checkout
                                       </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                 </article>
                              </div>
                              <!-- /Content -->
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
                                    </aside>
                                    <aside class="column-1_3 widget woocommerce widget_top_rated_products">
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
                                    </aside>
                                    <aside class="column-1_3 widget woocommerce widget_recent_reviews">
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
                                             <span class="reviewer">by Jack Black</span>
                                          </li>
                                          <li>
                                             <a href="product-single.html">
                                                <img src="http://placehold.it/180x180.jpg" alt="" />Fiocchi Rifle Shootinh Dynamics 308WIN 150 FMJ
                                 
                                             
                                             </a>
                                             <div class="star-rating" title="Rated 5 out of 5">
                                                <span class="width_100_per">
                                                   <strong class="rating">5</strong> out of 5
                                    
                                                
                                                </span>
                                             </div>
                                             <span class="reviewer">by Jack Black</span>
                                          </li>
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
                           <div class="copyright_wrap copyright_style_text scheme_original">
                              <div class="copyright_wrap_inner">
                                 <div class="content_wrap">
                                    <div class="copyright_text">
                                       <a href="#">Kingler</a> &copy; 2017 All Rights Reserved. 
                                       
                                       <a href="#">Terms of Use</a> and 
                                       
                                       <a href="#">Privacy Policy</a>.
                     
                                    
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
                     <script type="text/javascript" src="{{ asset('js/jquery/jquery.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
                     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                     <script type="text/javascript" src="{{ asset('js/_main.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/trx_utils.min.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/_packed.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/vendor/photostack/modernizr.min.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/vendor/superfish.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/utils.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/core.init.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/init.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/shortcodes.js') }}"></script>
                     <script type="text/javascript" src="{{ asset('js/messages.js') }}"></script>
                     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
                     <script type="text/javascript" src="{{ asset('js/vendor/magnific/jquery.magnific-popup.min.js') }}"></script>
                  </body>
               </html>
