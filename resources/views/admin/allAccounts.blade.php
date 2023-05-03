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
                <hr>
                <table class="data-table table nowrap">
            <thead>
            <tr>
                <th>Sr #</th>
                <th>User Name</th>
                <th>Email</th>
                <th class="datatable-nosort">Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>

                    <td>{{$user->email}}</td>
                   
                         <td>{{$user->role}}</td>
                               <td class="tdP">
                        {{--                    <div class="btn-group">--}}
                        
                        {{--                        <a class="btn btn-primary btn-sm" href="{{route('account.destroy')}}"><i class="dw dw-delete-3"></i> Delete</a>--}}
                        {{--                    </div>--}}

                        <form action="{{ route('account.destroy',$user->id) }}" method="POST">


                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
                
            </div>
        </div>
    </div>



       {{--            <div class="footer-wrap pd-20 mb-20 card-box">--}}
    {{--               DS Store--}}
    {{--            </div>--}}

@endsection
