
<div class="topnav">
    <a class="active" href="#home"><span style="font-size:20px">BB Tracking System</span></a>

    @if ( (session('userType') === 'OC') || (session('userType') === 'RPC'))
        <a href="/add/missing">Add Ass </a>
        <a href="/BuildingsCrud">View Ass</a>
        <!-- <a href="/add/Rider"> Add Rid </a>
        <a href="/TenantsCrud"> View Rid </a> -->

    @endif

    @if ((session('userType') === 'RPC'))
        <a href="/add/Users"> Add Users </a>
        <a href="/UsersCrud"> View Users </a>
    @endif


    <div style="float:right" >
        <button class="header-semi-navi-btn"><b><span class="date-span-class" id="date-span" ></span></b></button>
        <label class="date-span-class">  UserName :: {{session('user')}} <img class="user-top-header-img" src="{{asset('imgs/male.png')}}" /> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="float:right " href="/users/user/logout" class="btn btn-danger" >Log Out</a>
    </div>
</div>