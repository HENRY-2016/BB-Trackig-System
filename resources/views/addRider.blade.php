
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Tenants | Add </title>
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
   <nav class="navbar navbar-default no-margin">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="side-header-navbar navbar-header fixed-brand">
      <div id="log-name-div" >
         @include ('/MainViews/name')
      </div>
      </div>
      <!-- navbar-header-->
      <div class="header-navbar collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li >
               <button class="menu-btn-link navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
                  <img src="{{asset('imgs/menu.png')}}" class="menu-fas-img">
               </button>
            </li>
         </ul>

         <div id="header-navbar-inner-div">
            @include ('/MainViews/header')
         </div>
      </div>
      <!-- bs-example-navbar-collapse-1 -->
   </nav>
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         @include ('/MainViews/navigation')
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid main-section-content">
         <label class="page-title-label" >Tenants | Add </label>
            
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
               <form method="post" action="{{route('TenantsCrud.store')}}" enctype="multipart/form-data" >
                  {{ csrf_field() }}

						<div class="my-grid-container">
                     
                     <div class="my-grid-item">
								<label class="input-labels" >Full Name</label><br>
                        <input  required type="text" class="form-control" name="FName" placeholder="First Name"  autocomplete="off">
							</div>
								

                     <div class="my-grid-item">
								<label class="input-labels" >Contact</label><br>
                        <input  required type="text" class="form-control" name="Contact" placeholder="Mobile Number"  autocomplete="off">
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Building</label><br>
                        <select  class="form-control"  name="Building">
                           <option >Building</option>
                           <option value="Building 1">Building 1</option>
                           <option value="Building 2">Building 2</option>
                           <option value="Building 3">Building 3</option>
                        </select>
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Room No</label><br>
                        <select  class="form-control"  name="RoomNo">
                           <option >Room No</option>
                           <option value="Room 1">Room 1</option>
                           <option value="Room 2">Room 2</option>
                           <option value="Room 3">Room 3</option>
                        </select>
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Amount</label><br>
                        <input  required type="text" class="form-control" name="Amount" placeholder="Amount"  autocomplete="off">
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Date</label><br>
                        <input required type="date" class="form-control" name="Date" required  autocomplete="off">
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Staff</label><br>
                        <input required type="text" class="form-control" name="StaffName" required  autocomplete="off">
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Photo</label><br>
                        <input  required type="file"  name="Image" onchange="DisplayUploadedImage(event,'back-side-display-pra-id')" >
                        <p><img id="back-side-display-pra-id" class="img-to-be-displayed" /></p>
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


  <script>
  $("#menu-toggle").click(function(e) {
     e.preventDefault();
     $("#wrapper").toggleClass("toggled");
  });
  $("#menu-toggle-2").click(function(e) {
     e.preventDefault();
     $("#wrapper").toggleClass("toggled-2");
     $('#menu ul').hide();
  });

  function initMenu() {
     $('#menu ul').hide();
     $('#menu ul').children('.current').parent().show();
     //$('#menu ul:first').show();
     $('#menu li a').click(
        function() {
           var checkElement = $(this).next();
           if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
              return false;
           }
           if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
              $('#menu ul:visible').slideUp('normal');
              checkElement.slideDown('normal');
              return false;
           }
        }
     );
  }
  $(document).ready(function() {
     initMenu();
  });
  </script>
</body>
</html>
