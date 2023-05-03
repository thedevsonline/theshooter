<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no">
      <title>Glock Double 9mm 3.4&#8243; 6+1 FS Integral &#8211; Kingler &#8211; weapon store</title>
      <link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce-layout.css') }}" type="text/css" media="all" />
      <link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce-smallscreen.css') }}" type="text/css" media="only screen and (max-width: 768px)" />
      <link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce.css') }}" type="text/css" media="all" />
      <link rel="stylesheet" href="{{ asset('js/vendor/photoswipe/css/photoswipe.css') }}" type="text/css" media="all" />
      <link rel="stylesheet" href="{{ asset('js/vendor/photoswipe/css/default-skin/default-skin.css') }}" type="text/css" media="all" />
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
      <link rel="icon" href="{{ asset('http://placehold.it/32x32.jpg') }}" sizes="32x32" />
      <link rel="icon" href="{{ asset('http://placehold.it/192x192.jpg') }}" sizes="192x192" />
      <link rel="apple-touch-icon-precomposed" href="{{ asset('http://placehold.it/180x180.jpg') }}" />
      <style type="text/css"> 
         .woocommerce div.product div.images img {
         display: block;
         width: 600px;
         height: 600px;
         box-shadow: none;
         }
      </style>
   </head>
   <body class="single-product woocommerce woocommerce-page body_transparent article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
      <div id="page_preloader"></div>
      <!-- Body wrap -->
      <div class="body_wrap bg_image">
         <!-- Page wrap -->
         <div class="page_wrap">
            <!-- Header -->
            @include('user.layouts.partials.header')
            <!-- /Header Mobile -->
            <!-- /Header Mobile -->
            <!-- Breadcrumbs -->
            <div class="top_panel_title top_panel_style_1  title_present navi_present breadcrumbs_present scheme_original">
               <div class="top_panel_title_inner top_panel_inner_style_1">
                  <div class="content_wrap">
                     <div class="breadcrumbs">
                           <a class="breadcrumbs_item home" href="{{route('user.index')}}">Home</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <a class="breadcrumbs_item all" href="{{route('user.shop')}}">Shop</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <span class="breadcrumbs_item current">{{$product->name}}</span>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /Breadcrumbs -->
            <!-- Page Content -->
            <div class="page_content_wrap page_paddings_yes">
               <div class="content_wrap">
                  <!-- Content -->
                  <div class="content">
                     <article class="post_item post_item_single post_item_product">
                        <div class="product">
                           <!-- Product Image -->
                           <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                              <figure class="woocommerce-product-gallery__wrapper" >
                                 <div data-thumb="{{asset('images/'. $product->image)}}" class="woocommerce-product-gallery__image">
                                    <a href="{{asset('images/'. $product->image)}}" class="woocommerce-main-image zoom" title="{{ $product->name }}">
                                    <img src="{{asset('images/'. $product->image)}}" alt="{{ $product->name }}" style="object-fit: cover; width: 450px; height: 450px; " data-src="{{asset('images/'. $product->image)}}" data-large_image="{{asset('images/'. $product->image)}}" data-large_image_width="640" data-large_image_height="640" />
                                    </a>
                                 </div>
                              </figure>
                           </div>
                           <!-- /Product Image -->
                           <!-- Product Summary -->
                           <div class="summary entry-summary">
                              <h1 class="product_title">{{$product->name}}</h1>
                              <p class="price">
                                 <span class="woocommerce-Price-amount amount">
                                 <span class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price}}
                                 </span>
                              </p>
                              <div class="woocommerce-product-details__short-description">
                                 <p>{{$product->description}}</p>
                              </div>
                            <form class="cart" action="{{ route('cart.store', $product->id) }}"  method="post" enctype="multipart/form-data">
   <div class="quantity">
      <input type="number" class="input-text qty text" step="1" min="1" name="quantity" value="1" title="Qty" size="4" />
   </div>
   <button type="submit" name="add-to-cart" class="button alt">Add to cart</button>
</form>

                              <div class="product_meta">
                                 <span class="posted_in">Categories:
                                 <a href="#">{{$product->category}}</a>,
                                 </span>
                                 <!--  <span class="tagged_as">Tags:
                                    <a href="#">Beretta</a>,
                                    <a href="#">guns</a>,
                                    <a href="#">steel</a>
                                    </span> -->
                                 <span class="product_id">Product ID:
                                 <span>{{$product->id}}</span>
                                 </span>
                              </div>
                           </div>
                           <!-- /Product Summary -->
                           <!-- Tabs -->
                           <div class="woocommerce-tabs wc-tabs-wrapper">
                              <ul class="tabs wc-tabs" role="tablist">
                                 <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                    <a href="#tab-description">Description</a>
                                 </li>
                                 <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                    <a href="#tab-reviews">Reviews (0)</a>
                                 </li>
                              </ul>
                              <!-- Tab: Description -->
                              <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel wc-tab" id="tab-description">
                                 <h2>Description</h2>
                                 <p>{{$product->long_description}}</p>
                              </div>
                              <!-- /Tab: Description -->
                              <!-- Tab: Reviews -->
                              <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel wc-tab" id="tab-reviews">
                                 <div id="reviews" class="woocommerce-Reviews">
                                    <div id="comments">
                                       <h2 class="woocommerce-Reviews-title">Reviews</h2>
                                       <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                    </div>
                                    <div id="review_form_wrapper">
                                       <div id="review_form">
                                          <div id="respond" class="comment-respond">
                                             <span id="reply-title" class="comment-reply-title">Be the first to review &ldquo;Glock Double 9mm 3.4&#8243; 6+1 FS Integral&rdquo; </span>
                                             <div class="social-login-widget">
                                                <div class="social-login-connect-with">Connect with:</div>
                                                <div class="social-login-provider-list">
                                                   <a href="#" title="Connect with Facebook">
                                                   <img alt="Facebook" title="Connect with Facebook" src="images/facebook.png" />
                                                   </a>
                                                   <a href="#" title="Connect with Google">
                                                   <img alt="Google" title="Connect with Google" src="images/google.png" />
                                                   </a>
                                                   <a href="#" title="Connect with Twitter">
                                                   <img alt="Twitter" title="Connect with Twitter" src="images/twitter.png" />
                                                   </a>
                                                </div>
                                             </div>
                                             <p class="comment-notes">
                                                <span id="email-notes">Your email address will not be published.</span>
                                                Required fields are marked <span class="required">*</span>
                                             </p>
                                             <div class="comment-form-rating">
                                                <label for="rating">Your rating</label>
                                                <select name="rating" id="rating" required>
                                                   <option value="">Rate&hellip;</option>
                                                   <option value="5">Perfect</option>
                                                   <option value="4">Good</option>
                                                   <option value="3">Average</option>
                                                   <option value="2">Not that bad</option>
                                                   <option value="1">Very poor</option>
                                                </select>
                                             </div>
                                             <p class="comment-form-comment">
                                                <label for="comment">Your review
                                                <span class="required">*</span>
                                                </label>
                                                <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                                             </p>
                                             <p class="comment-form-author">
                                                <label for="author">Name
                                                <span class="required">*</span>
                                                </label>
                                                <input id="author" name="author" type="text" value="" size="30" aria-required="true" required />
                                             </p>
                                             <p class="comment-form-email">
                                                <label for="email">Email
                                                <span class="required">*</span>
                                                </label>
                                                <input id="email" name="email" type="email" value="" size="30" aria-required="true" required />
                                             </p>
                                             <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit" value="Submit" />
                                             </p>
                                          </div>
                                          <!-- #respond -->
                                       </div>
                                    </div>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <!-- /Tab: Reviews -->
                           </div>
                           <!-- /Tabs -->
                           <!-- /Related Products -->
                        </div>
                     </article>
                  </div>
                  <!-- /Content -->
               </div>
            </div>
            <!-- /Page Content -->
            <!-- Footer 1 -->
            <!-- /Footer 1 -->
            <!-- Footer 2-->
            <!-- /Footer 2-->
            <!-- Copyright -->
            <!-- /Copyright -->
         </div>
         <!-- /Page wrap -->
      </div>
      <!-- /Body wrap -->
      <!-- Root element of PhotoSwipe -->
      <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="pswp__bg"></div>
         <div class="pswp__scroll-wrap">
            <div class="pswp__container">
               <div class="pswp__item"></div>
               <div class="pswp__item"></div>
               <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
               <div class="pswp__top-bar">
                  <div class="pswp__counter"></div>
                  <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                  <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                  <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                  <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                  <div class="pswp__preloader">
                     <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                           <div class="pswp__preloader__donut"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                  <div class="pswp__share-tooltip"></div>
               </div>
               <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
               <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
               <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- /Root element of PhotoSwipe -->
      <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
      <script type="text/javascript" src="{{ asset('js/jquery/jquery.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
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
      <script type="text/javascript" src="{{ asset('js/vendor/magnific/jquery.magnific-popup.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/vendor/woocommerce/js/zoom/jquery.zoom.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/vendor/woocommerce/js/tpl-woocommerce.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/vendor/flexslider/jquery.flexslider.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/vendor/photoswipe/js/photoswipe.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/vendor/photoswipe/js/photoswipe-ui-default.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/vendor/woocommerce/js/single-product.min.js') }}"></script>
   </body>
</html>
