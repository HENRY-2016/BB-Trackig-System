

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>LogIn </title>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body  class="app-body">
        <div id="center-div" >
                <br><br>
                <div id="login-logo-div">
                    <center>
                        <img style="margin-left:200px" class="up-img" src="{{asset('imgs/up.jpeg')}}" />
                    </center>
				</div>
                @if ($message = Session::get('error'))
                    <div class="alert alert-success" >
                    <label class="login-title-label" > {{$message}}</label>
                    </div>
                @endif
                <br><br>
                <form method="post" action="users/user/login" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="my-grid-item">
                    <label class="input-labels" >Select Type</label><br>
                    <select  class="form-control"   name="type">
                        <option></option>
                        <option value="Ridder">Ridder</option>
                        <option value="OC">OC</option>
                        <option value="RPC">RPC</option>
                    </select>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Username" name="name">
                    </div>

                    
                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="password">
                    </div>

                    <div class="my-grid-item">
                        <button type="submit"  class=" submit-btn">Log In</button>
                    </div>
				</form>
            </div>
            </div>
        </div>
</div>

</body>
</html>

<!-- 
    RPC = Creates OC / 
    OC = Adds Missing Assets Missing / Recovery
    OWner = Only map 
-->