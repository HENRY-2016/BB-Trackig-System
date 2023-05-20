
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Buildings | Add </title>
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
         <label class="page-title-label" > Add Missing BodaBoda </label>
            
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
               <form method="post" action="{{route('BuildingsCrud.store')}}" enctype="multipart/form-data" >
                  {{ csrf_field() }}

						<div class="my-grid-container">
                  
                  <div class="my-grid-item">
                     <b><label class="input-labels">Licence Plate</label></b>
                     <input required class="form-control" type="text" placeholder="Plate" name="plate">
                  </div>

                  <div class="my-grid-item">
                  <b><label class="input-labels">Boda Color</label></b><br>
                  <select class="form-control" name="color" >
                     <option value="Blue">Blue</option>
                     <option value="Black">Black</option>
                     <option value="Red">Red</option>
                  </select><br><br>
                  </div>

                  <div class="my-grid-item">
                  <b><label class="input-labels">Owner Full Name</label></b>
                     <input required class="form-control" type="text" placeholder="Full Name" name="name">
                  </div>
               
                  <div class="my-grid-item">
                     <b><label class="input-labels">National ID (NIN)</label></b>
                     <input required class="form-control" type="text" placeholder="ID" name="id">
                  </div>

                  <div class="my-grid-item">
                     <b><label class="input-labels">Contact</label></b>
                     <input required class="form-control" type="text" placeholder="Contact" name="contact">
                  </div>

                  <div class="my-grid-item">
                  <b><label class="input-labels">Area</label></b>
                     <input required class="form-control" type="text" placeholder="Area" name="area">
                  </div> 

                  <div class="my-grid-item">
                  <b><label class="input-labels">Date</label></b>
                     <input required class="form-control" type="date" name="date">
                  </div> 

                  <!-- <div  class="my-grid-item">
                     <b><label class="input-labels">Status</label></b><br>
                     <select class="form-control" name="status" >
                        <option value="Missing">Missing</option>
                        <option value="Recovered">Recovered</option>
                     </select><br><br>
                  </div> -->

                  <div class="my-grid-item">
                  <b><label class="input-labels">UserName ( ID ) </label></b>
                     <input required class="form-control" type="text" placeholder="Eg R001" name="rider">
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
