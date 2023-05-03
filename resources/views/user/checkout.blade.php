<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>Checkout &#8211; Kingler &#8211; weapon store</title>

       <link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce-layout.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce-smallscreen.css') }}" type="text/css" media="only screen and (max-width: 768px)" />
<link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/woocommerce.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('js/vendor/woocommerce/css/select2.css') }}" type="text/css" media="all" />

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

<link rel="icon" href="{{ asset('src/images/favicon-32x32.png') }}" sizes="32x32" />
<link rel="icon" href="{{ asset('src/images/favicon-192x192.png') }}" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="{{ asset('src/images/apple-touch-icon-precomposed.png') }}" />
<style type="text/css">

</style>
    </head>
    <body class="woocommerce-checkout woocommerce-page body_transparent article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <div id="page_preloader"></div>
        <!-- Body wrap -->
        <div class="body_wrap bg_image">
            <!-- Page wrap -->
            <div class="page_wrap">
                <!-- Header -->
   
                <!-- /Header Mobile -->
                <!-- Breadcrumbs -->
                <div class="top_panel_title top_panel_style_1 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_1">
                        <div class="content_wrap">
                            <h1 class="page_title">Checkout</h1>
                            <div class="breadcrumbs">
                               <a class="breadcrumbs_item home" href="{{route('user.index')}}">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <a class="breadcrumbs_item all" href="{{route('user.shop')}}">Shop</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content -->
                <div class="page_content_wrap page_paddings_yes">
                    <div class="content_wrap">
                        <!-- Content -->
                        <div class="content">
                            <article class="post_item post_item_single">
                                <section class="post_content">
                                    <div class="woocommerce">
                                        <div class="woocommerce-info">Have a coupon?
                                            <a href="#" class="showcoupon">Click here to enter your code</a>
                                        </div>
                                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{ route('order.index') }}" enctype="multipart/form-data">
                                            <div class="col2-set" id="customer_details">
                                                @csrf
                                                <!-- Billing Details -->
                                                <div class="col-1">
                                                    <div class="woocommerce-billing-fields">
                                                        <h3>Billing details</h3>
                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p class="form-row form-row-first validate-required" id="billing_first_name_field">
                                                                <label for="billing_first_name" class="">First name
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autofocus="autofocus" />
                                                            </p>
                                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field">
                                                                <label for="billing_last_name" class="">Last name
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" />
                                                            </p>
                                                            <p class="form-row form-row-wide" id="billing_company_field">
                                                                <label for="billing_company" class="">Company name</label>
                                                                <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" />
                                                            </p>
                                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
                                                                <label for="billing_country" class="">Country
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <select name="billing_country" id="billing_country" class="country_to_state country_select ">
                                                                    <option value="">Select a country&hellip;</option>
                                                                    <option value="AX">&#197;land Islands</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="PW">Belau</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory</option>
                                                                    <option value="VG">British Virgin Islands</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo (Brazzaville)</option>
                                                                    <option value="CD">Congo (Kinshasa)</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Cura&ccedil;ao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands</option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="CI">Ivory Coast</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Laos</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao S.A.R., China</option>
                                                                    <option value="MK">Macedonia</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PS">Palestinian Territory</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                                                                    <option value="BL">Saint Barth&eacute;lemy</option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="SX">Saint Martin (Dutch part)</option>
                                                                    <option value="MF">Saint Martin (French part)</option>
                                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syria</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB" selected='selected'>United Kingdom (UK)</option>
                                                                    <option value="US">United States (US)</option>
                                                                    <option value="UM">United States (US) Minor Outlying Islands</option>
                                                                    <option value="VI">United States (US) Virgin Islands</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VA">Vatican</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Vietnam</option>
                                                                    <option value="WF">Wallis and Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </p>
                                                            <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                                                <label for="billing_address_1" class="">Address
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="" />
                                                            </p>
                                                            <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
                                                                <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" />
                                                            </p>
                                                            <p class="form-row form-row-wide address-field validate-required" id="billing_city_field">
                                                                <label for="billing_city" class="">Town / City
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" />
                                                            </p>
                                                            <p class="form-row form-row-wide address-field validate-required validate-state" id="billing_state_field">
                                                                <label for="billing_state" class="">State / County
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <input type="text" class="input-text " value="" placeholder="" name="billing_state" id="billing_state"  />
                                                            </p>
                                                            <p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field">
                                                                <label for="billing_postcode" class="">Postcode / ZIP
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" />
                                                            </p>
                                                            <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field">
                                                                <label for="billing_phone" class="">Phone
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <input type="text" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" />
                                                            </p>
                                                            <p class="form-row form-row-last validate-required validate-email" id="billing_email_field" >
                                                                <label for="billing_email" class="">Email address
                                                                    <abbr class="required" title="required">*</abbr>
                                                                </label>
                                                                <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="" />
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Billing Details -->
                                                <!-- Additional Information -->
                                                <div class="col-2">
                                                    <div class="woocommerce-shipping-fields">
                                                    </div>
                                                    <div class="woocommerce-additional-fields">
                                                        <h3>Additional information</h3>
                                                        <div class="woocommerce-additional-fields__field-wrapper">
                                                            <p class="form-row notes" id="order_comments_field" data-priority="">
                                                                <label for="order_comments" class="">Order notes</label>
                                                                <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Additional Information -->
                                            </div>
                                            <!-- Your Order -->
                                            <h3 id="order_review_heading">Your order</h3>
                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="cart_item">
                                                            <?php 
                        $totaprice =0
                         ?>
                                                            @foreach($cart as $cartItem)
                                                            <td class="product-name">
                                                                {{$cartItem->product_name}}&nbsp;
                                                                <strong class="product-quantity">&times;  {{$cartItem->quantity}}</strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">&#36;</span>{{$cartItem->total_amount}}
                                                                </span>
                                                            </td>

                             <?php
       $totaprice +=  $cartItem->total_amount; ?>

                                                            @endforeach
                                                        </tr>
                                                      
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $totaprice}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td>
                                                                <strong>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">&#36;</span>9{{ $totaprice}}
                                                                    </span>
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div id="payment" class="woocommerce-checkout-payment">
                                             <!--        <ul class="wc_payment_methods payment_methods methods">
                                                        <li class="woocommerce-notice woocommerce-notice--info woocommerce-info">Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.</li>
                                                    </ul> -->
                                                    <div class="form-row place-order">
                                                        <input type="submit"  name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                <div class="copyright_wrap copyright_style_text scheme_original">
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
<script type="text/javascript" src="{{ asset('js/vendor/magnific/jquery.magnific-popup






    </body>

</html>