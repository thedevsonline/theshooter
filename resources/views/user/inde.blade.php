The User Inde Page
@if(Auth::user())
<h1>You are Logged In</h1>
<h3>MY Name</h3>
<h4>{{Auth::user()->name}}</h4>
<h3>MY Role In company</h3>
<h4>{{Auth::user()->role}}</h4>

<a class="dropdown-item" href="{{route("logout")}}"
                    ><i class="dw dw-logout"></i> Log Out</a
                    >

@else
You are logouted
<a class="dropdown-item" href="{{route("login")}}"
                    ><i class="dw dw-logout"></i> LogIn</a
                    >
@endif
