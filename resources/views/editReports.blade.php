
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Buildings | Edit </title>
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
         <label class="page-title-label" >Buildings | Edit </label>
            
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
               <form method="post" action="{{route('BuildingsCrud.update',$data->id)}}" enctype="multipart/form-data" >
                     {{ csrf_field() }}
                     {{ method_field('PATCH') }}
                     <div class="my-grid-container">
                     
                     <div class="my-grid-item">
								<label class="input-labels" >Licence Plate</label><br>
                        @if (session('userType') === 'RPC')
                        <input  required type="text" class="form-control"  value="{{$data->Name}}" name="plate" placeholder="Name"  autocomplete="off">
                        @endif
                        @if (session('userType') === 'OC')
                        <input  required type="text" class="form-control"  value="{{$data->Name}}" name="plate" readonly >
                        @endif
							</div>

                     <div  class="my-grid-item">
                        <b><label class="input-labels">Boda Color</label></b><br>
                        @if (session('userType') === 'RPC')
                        <select class="form-control" name="color" >
                           <option value="{{$data->Holder2}}">{{$data->Holder2}}</option>
                           <option value="Blue">Blue</option>
                           <option value="Black">Black</option>
                           <option value="Red">Red</option>
                        </select><br><br>
                        @endif
                        @if (session('userType') === 'OC')
                        <input  required type="text" class="form-control"  value="{{$data->Holder2}}"  name="color" readonly>

                        @endif
                     </div>
								
                     <div class="my-grid-item">
                        <b><label class="input-labels">Owner Full Name</label></b>
                        @if (session('userType') === 'RPC')
                        <input  required type="text"  value="{{$data->NoRooms}}" class="form-control" name="name" placeholder="Location / Area"  autocomplete="off">
                        @endif
                        @if (session('userType') === 'OC')
                        <input  required type="text"  value="{{$data->NoRooms}}" class="form-control" name="name" readonly>
                        @endif
							</div>


                     <div class="my-grid-item">
								<label class="input-labels" >National ID (NIN)</label><br>
                        @if (session('userType') === 'RPC')
                        <input  required type="text"  value="{{$data->Location}}" class="form-control" name="id" placeholder="NIN"  autocomplete="off">
                        @endif
                        @if (session('userType') === 'OC')
                        <input  required type="text"  value="{{$data->Location}}" class="form-control" name="id" readonly>
                        @endif
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Contact</label><br>
                        @if (session('userType') === 'RPC')
                        <input  required type="text"  value="{{$data->Staff}}" class="form-control" name="contact" placeholder="Contact"  autocomplete="off">
                        @endif
                        @if (session('userType') === 'OC')
                        <input  required type="text"  value="{{$data->Staff}}" class="form-control" name="contact" readonly>
                        @endif
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Area</label><br>
                        @if (session('userType') === 'RPC')
                        <input  required type="text" class="form-control"  value="{{$data->Holder1}}" name="area" placeholder="Area"  autocomplete="off">
                        @endif
                        @if (session('userType') === 'OC')
                        <input  required type="text" class="form-control"  value="{{$data->Holder1}}" name="area" readonly>
                        @endif
							</div>

                     <div class="my-grid-item">
								<label class="input-labels" >Date</label><br>
                        @if (session('userType') === 'RPC')
                        <input  required type="date" class="form-control"  value="{{$data->Holder4}}" name="date" placeholder="Area"  autocomplete="off">
                        @endif
                        @if (session('userType') === 'OC')
                        <input  required type="date" class="form-control"  value="{{$data->Holder4}}" name="date" readonly>
                        @endif
							</div>

                     <div  class="my-grid-item">
                     <b><label class="input-labels">Status </label></b><br>
                     <select class="form-control" name="status" >
                        <option value="{{$data->Holder3}}">{{$data->Holder3}}</option>
                        <option value="Missing">Missing</option>
                        <option value="Recovered">Recovered</option>
                     </select><br><br>
                  </div>
                  <div class="my-grid-item">
                     <label class="input-labels" >Area Recovered From</label><br>
                     <input  required type="text"  value="{{$data->Holder5}}" class="form-control" name="recoveredFrom" placeholder="Area Of Recovery"  autocomplete="off">
                  </div>
                  <div class="my-grid-item">
								<label class="input-labels" >UserName ( ID )</label><br>
                        @if (session('userType') === 'RPC')
                        <input  required type="text" class="form-control"  value="{{$data->Holder6}}" name="rider" placeholder="Area"  autocomplete="off">
                        @endif
                        @if (session('userType') === 'OC')
                        <input  required type="text" class="form-control"  value="{{$data->Holder6}}" name="rider" readonly>
                        @endif
							</div>
                  @if (session('userType') === 'OC')
                  <div class="my-grid-item">
                        <button type="submit"  class="btn btn-primary submit-btn">Add Recovered BodaBoda</button>
                     </div>
                     @endif
                     @if (session('userType') === 'RPC')
                     <div class="my-grid-item">
                        <button type="submit"  class="btn btn-primary submit-btn">Submit</button>
                     </div>
                     @endif
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
