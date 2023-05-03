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
                        <th>Color</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Oty</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="table-plus">
                            <img
                                src="vendors/imagesd/product-1.jpg"
                                width="70"
                                height="70"
                                alt=""
                            />
                        </td>
                        <td>
                            <h5 class="font-16">Gun</h5>
                            by John Doe
                        </td>
                        <td>Black</td>
                        <td>M</td>
                        <td>$1000</td>
                        <td>1</td>
                        <td>
                            <div class="dropdown">
                                <a
                                    class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                >
                                    <i class="dw dw-more"></i>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                >
                                    <a class="dropdown-item" href="#"
                                    ><i class="dw dw-eye"></i> View</a
                                    >
                                    <a class="dropdown-item" href="#"
                                    ><i class="dw dw-edit2"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="#"
                                    ><i class="dw dw-delete-3"></i> Delete</a
                                    >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <img
                                src="vendors/imagesd/product-1.jpg"
                                width="70"
                                height="70"
                                alt=""
                            />
                        </td>
                        <td>
                            <h5 class="font-16">Gun</h5>
                            by John Doe
                        </td>
                        <td>Black</td>
                        <td>M</td>
                        <td>$1000</td>
                        <td>1</td>
                        <td>
                            <div class="dropdown">
                                <a
                                    class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                >
                                    <i class="dw dw-more"></i>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                >
                                    <a class="dropdown-item" href="#"
                                    ><i class="dw dw-eye"></i> View</a
                                    >
                                    <a class="dropdown-item" href="#"
                                    ><i class="dw dw-edit2"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="#"
                                    ><i class="dw dw-delete-3"></i> Delete</a
                                    >
                                </div>
                            </div>
                        </td>
                    </tr>

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
