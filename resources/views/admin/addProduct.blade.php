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
         <div class="formbox">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" >
               @csrf
               <input name="product_name" class=" form-control productName "  type="text" placeholder="Product Name">
               <textarea class=" form-control   productDes" maxlength="3000" name="long_description" id="longDescription" placeholder="Write Product description"></textarea>
               <p>Word count: <span id="wordCountlongDescription">0</span> Max :3000</p>
               <div class="  d-flex">
               </div>
               <div class="card-body col-12 div-ul-data d-flex">
                  <ul class="ul-data">
                     <li id="li-general" onclick="showDiv('div1')" class="li-button">General</li>
                     <!-- <li id="li-shipping" onclick="showDiv('div2')" class="li-button">shipping</li> -->
                     <li  id="li-inventory" onclick="showDiv('div3')" class="li-button">Inventory</li>
                     <li id="li-image" onclick="showDiv('div4')" class="li-button">Images</li>
                  </ul>
                  <div id="div1" class="data-informantion">
                   
                     <div class="general d-flex justify-content-between">
                        <p class="singleProduct inputLable">Original Price (Rs)</p>
                        <input type="text" class="form-control" placeholder="1000" name="singleProductPrice">
                     </div>
                   
                  </div>
                  
                  <div id ="div3" class="data-informantion">
                     <div class="general d-flex justify-content-between">
                        <p   class="singleProduct inputLable ">Is Stock</p>
                        <select name="isstock" class ="form-control">
                           <option name="instock" value="instock">In Stock</option>
                           <option name="outstock" value="outstock">Out Stock</option>
                        </select>
                     </div>
                     <div class="general d-flex mt-2 justify-content-between">
                        <p  class="singleProduct inputLable ">Category</p>
                        <select name="category" class=" form-control">
                           <option value="">Select Category</option>
                           <option value="uncategorized" selected>Uncategorized</option>
                           @foreach($categories as $category)
                           <option value="{{ $category->name }}">{{ $category->name }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="general d-flex mt-2 justify-content-between">
                        <p class="singleProduct inputLable">Stock quantity</p>
                        <input type="number" class =" form-control" name="totalstock" placeholder="100,200,300....">
                     </div>
                  </div>
                  <div id ="div4" class="data-informantion">
                     <div class=" general d-flex justify-content-between">
                        <p class="singleProduct inputLable ">Product Image</p>
                        <input type="file" class ="form-control" name="image" >
                     </div>
                  </div>
               </div>
                 
                 <textarea class=" form-control mt-5 productDes" maxlength="350" name="short_description" id="myTextarea" placeholder="Write Short Product description"></textarea>
                 <p>Word count: <span id="wordCount">0</span>Max :350</p>
                 <button class="btn btn-primary" type="submit">Save Category</button>
             </form>
         </div>
      </div>
   </div>
</div>
</div>
{{--            
<div class="footer-wrap pd-20 mb-20 card-box">--}}
   {{--               DS Store--}}
   {{--            
</div>
--}}
@endsection
