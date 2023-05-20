
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Club | Members | Edit </title>
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
      <div id="page-content-wrappers">
         <div class="container-fluid main-section-content">
         <label class="page-title-label" >Club | Members | Product </label>
            
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
               <form method="post" action="{{route('UsersCrud.update',$data->id)}}" enctype="multipart/form-data" >
                     {{ csrf_field() }}
                     {{ method_field('PATCH') }}
                     <div class="my-grid-container">
                     

                     <div class="my-grid-item">
                        <label class="input-labels" >Type</label><br>
                        <select  class="form-control"   name="type">
                           <option >{{$data->Contact}} </option>
                           <option></option>
                           <option value="Ridder">Ridder</option>
                           <option value="OC">OC</option>
                           <option value="RPC">RPC</option>
                        </select>
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Name</label><br>
                        <input id="ridder-name-input-id" required type="text"  value="{{$data->UserName}}" class="form-control" name="name" placeholder="User Name"  autocomplete="off">
							</div>


                     <div class="my-grid-item">
								<label class="input-labels" >Password</label><br>
                        <input id="ridder-name-input-id" required type="text" class="form-control"  value="{{$data->Password}}" name="password" placeholder="Password"  autocomplete="off">
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
