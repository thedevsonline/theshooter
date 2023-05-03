@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Add new category</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="{{route('admin.dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Categories
                        </li>
                    </ol>
                </nav>
                <hr>
                @include("admin.layouts.messages") 
                <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Category Title</label>
                        <div class="col-sm-12 col-md-5">
                            <input class="form-control" type="text" placeholder="Title" name="name" required>
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <button class="btn btn-primary" type="submit">Save Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-box mb-30 pb-2">
        <h2 class="h4 pd-20">List of categories</h2>
        <table class="data-table table nowrap">
            <thead>
            <tr>
                <th>Sr #</th>
                <th>Category Name</th>
                <!-- <th>Oty</th> -->
                <th class="datatable-nosort">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach(\App\Models\Category::paginate(10) as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>

                <!-- <td> </td> -->
                <td>
                 
                        <form action="{{ route('categories.destroy',$c->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('categories.edit',$c->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                  

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        {{ $c->links}}
 </div>
    {{--            <div class="footer-wrap pd-20 mb-20 card-box">--}}
    {{--               DS Store--}}
    {{--            </div>--}}

@endsection
