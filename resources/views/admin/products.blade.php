@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-header">

        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>List of Products</h4>
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

            <table class="data-table table nowrap">
                <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Product</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Oty</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="table-plus">
                            <img
                                src="{{asset('images/'. $product->image)}}"
                                width="70"
                                height="70"
                                alt=""
                            />
                        </td>
                        <td>
                            <h5 class="font-16">{{$product->name}}</h5>
                        </td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->totalstock}}</td>
                        <td>

                           <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        <a class="btn btn-primary"
                                           href="{{ route('products.edit',$product->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                     <a class="btn btn-outline-dark" href="{{ route('products.show',$product->id) }}"
                                    ><i class="dw dw-eye"></i> View</a>
                        

                         
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>
    {{--
    <div class="footer-wrap pd-20 mb-20 card-box">--}}
    {{--               DS Store--}}
    {{--
 </div>
 --}}
@endsection
