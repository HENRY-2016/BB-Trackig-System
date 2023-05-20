
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title> Add </title>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/navabar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/w3.css')}}">

<script>

function Do_Logic ()
{
   OloadInitiApplication ();
}
</script>

</head>

<body onload="Do_Logic ()" class="app-body">
@include ('/MainViews/header')
   
   <div id="wrappers">
   
      <div id="page-content-wrapper">
         <div class="container-fluid main-section-contents">
         <label class="page-title-label" > Add Recovered Boda Boda </label>
            
               <div id="quick-links-div-2">
                  @if ($errors -> any())
                  <div class="alert alert-danger" >
                     <ul>
                        @foreach($errors -> all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
               <form method="post" action="{{route('UsersCrud.store')}}" enctype="multipart/form-data" >
                  {{ csrf_field() }}

						<div class="my-grid-container">
                  

                  <div class="my-grid-item">
                  <b><label class="input-labels">User Type</label></b><br>
                  <select class="form-control" name="type" >
                     <option value="Ridder">Ridder</option>
                     <option value="OC">OC</option>
                     <option value="RPC">RPC</option>
                  </select><br><br>
                  </div>

                  <div class="my-grid-item">
                  <b><label class="input-labels">User Name</label></b>
                     <input required class="form-control" type="text" placeholder="User Name" name="name">
                  </div>
               
                  <div class="my-grid-item">
                  <b><label class="input-labels">Password</label></b>
                     <input required class="form-control" type="password" placeholder="Password" name="password">
                  </div>

                  
                     <div class="my-grid-item">
                        <button type="submit"  class="btn btn-primary submit-btn">Submit</button>
                     </div>
							
						</div>
					</form>
               </div>

            </div>
         </div>
      </div>
      <!-- /#page-content-wrapper -->
   </div>

</body>
</html>
