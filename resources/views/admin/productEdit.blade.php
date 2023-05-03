@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Products</h4>
                </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Products
                                </li>
                            </ol>
                        </nav>
                          @include("admin.layouts.messages")
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
              
                    <hr>
                        <div class="d-flex">
                            <div class="formbox">
                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                       @csrf
                                       <div class="card">
                                          <input name="product_name" class=" form-control-lg bg-white  productName" value="{{ $product->name }}" type="text" placeholder="Product Name">
                                       </div>
                                       <div class="card">
                                          <textarea class="form-control productDes" maxlength="3000" name="long_description" id="longDescription"   >{{ $product->long_description }}</textarea>
                                          <p>Word count: <span id="wordCountlongDescription">0</span> Max :3000</p>
                                       </div>
                                       <div class="card  d-flex">
                                          <div class="card-header ">
                                             <span class="dataHeader">Product Data</span>
                                          </div>
                                          <div class="card-body col-12 div-ul-data d-flex">
                                             <ul class="ul-data">
                                                <li id="li-general" onclick="showDiv('div1')" class="li-button">General</li>
                                                <!-- <li id="li-shipping" onclick="showDiv('div2')" class="li-button">shipping</li> -->
                                                <li  id="li-inventory" onclick="showDiv('div3')" class="li-button">Inventory</li>
                                                <li id="li-image" onclick="showDiv('div4')" class="li-button">Images</li>
                                             </ul>
                                               <div id="div1" class="data-informantion">
                                                  <div class="d-flex discountbox">
                                                    <p class="singleProduct inputLable">Is Discount Price Available</p>
                                                    <input type="checkbox" id="checkbox6" name="checkbox6">
                                                  </div>

                                                  <div class="general d-flex justify-content-between">
                                                    <p class="singleProduct inputLable">Original Price (Rs)</p>
                                                    <input type="text" class="form-control" placeholder="1000" name="singleProductPrice">
                                                  </div>

                                                  <div id="priceDiv" class="general  justify-content-between" style="display:none;">
                                                    <p class="singleProduct inputLable">Discounted Price (Rs)</p>
                                                    <input type="text" class="form-control" placeholder="1000" name="discountedPrice">
                                                  </div>
                                                </div>     
                                             
                                            
                                             <div id ="div3" class="data-informantion">

                                                       <div class="general d-flex justify-content-between">
                                                         <p  class="singleProduct inputLable ">Is Stock</p>

                                                      <select name="isstock" class ="form-control">
                                                        <option name="instock" value="{{ $product->stock }}" selected> {{ $product->stock }}</option>
                                                       
                                                        <option name="instock" value="instock">in Stock</option>
                                                        <option name="outstock" value="outstock">Out Stock</option>
                                                      </select>
                                                      
                                                    </div>

                                                       <div class="general d-flex justify-content-between">
                                                         <p  class="singleProduct inputLable ">Category</p>

                                                           

                                                            <select name="category" class="form-control">
                    										   
                    										    <option value="{{ $product->category }}" selected>{{ $product->category }}</option>
                                                                  <option value="uncategorized" >Uncategorized</option>
                    										    @foreach($categories as $category)
                    										        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    										    @endforeach
                    										</select>

                                                                                               
                                                    </div>
                                                    <div class="general d-flex justify-content-between">
                                                           <p class="singleProduct inputLable">Stock quantity</p>
                                                           <input type="number" class ="form-control" name="totalstock" value="{{ $product->totalstock }}" placeholder="100,200,300....">
                                                        </div>
                                             </div>
                                             <div id ="div4" class="data-informantion">
                                                    
                                                       <div class="general d-flex justify-content-between">
                                                         <p class="singleProduct inputLable ">Product Image</p>
                                                          <input type="file" value="{{asset('images/'. $product->image)}}" class ="form-control  " name="image" >
                                                      
                                                    </div>
                                                    <div class="general d-flex justify-content-between">
                                                         <p class="singleProduct "> Image</p>
                                                          <img src="{{asset('images/'. $product->image)}}" alt="{{ $product->name }}" width="400px">
                                                    </div>
                                           
                                             </div>
                                          </div>
                                       </div>
                                        <div class="card">

                                          <textarea class="form-control productDes" maxlength="350" name="short_description" id="myTextarea" placeholder="Write Short Product description">{{ $product->description }}</textarea>
                                          
                                          <p>Word count: <span id="wordCount">0</span>Max :350</p>

                                       </div>

                                       <input type="submit" class="submit" >
                                </form>
                            </div> 
                            <div class="productImage">
                                 <img src="{{asset('images/'. $product->image)}}" alt="{{ $product->name }}">
                            </div> 
                        </div>

                            
            </div>
                
        </div>
    </div>
  



       {{--            <div class="footer-wrap pd-20 mb-20 card-box">--}}
    {{--               DS Store--}}
    {{--            </div>--}}

@endsection
