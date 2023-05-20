
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Reports | View </title>
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
   Get_Over_Roll_Total(APIBuildingsTotal,'total-span');
}
</script>

</head>

<body onload="Do_Logic ()" class="app-body">
   @include ('/MainViews/header')
   <div id="wrappers">
      
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid main-section-contents">
         @if ( (session('userType') === 'OC') || (session('userType') === 'RPC'))

         <label class="page-title-label" >Records | List</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label id="detail-label" class="page-title-label" >{{count($data)}} Listed Out Of &nbsp;&nbsp;<span id="total-span"></span> &nbsp;&nbsp;Records </label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         @endif
         <!-- <form style="float:right" action="{{url('/api/reports/with/filter')}}" method="post"  enctype="multipart/form-data">
         {{ csrf_field() }}
         {{ method_field('PUT') }}
               <b><label class="input-labels">From :</label></b>
               <input required  type="date" name="from">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <b><label class="input-labels">To: </label></b>
               <input required  type="date" name="to">
               <input required  type="submit" value="Search" >
         </from> -->
         </div>
            <div id="Tab-1">
               <div id="quick-links-div-2">
                  @if ($message = Session::get('success'))
                  <div class="alert alert-success" >
                     <p>{{$message}}</p>
                  </div>
                  @endif
                  <div style="text-align:justify; overflow: auto; height: 650px;" class="user-view-area">
                     
                     <div id="delete-Modal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                        <div id="delete-success-div" class="alert alert-success">
                           <p id="delete-success"></p>
                        </div>
                           <center>
                              <button id="cancel-btn" onclick="closeDeleteModalWindow()" class="btn btn-primary" >Close This </button><br><br>
                           </center>

                        </div>
                     </div>
                     
                     @if ( (session('userType') === 'OC') || (session('userType') === 'RPC'))
                     
                        <table class="w3-card-4">
                        <tr class="table-thead">
                        <th width="1%" class="table-thead-th">Date</th>
                        <th width="1%" class="table-thead-th">Name</th>
                        <th width="1%" class="table-thead-th">Asset</th>
                        <th width="1%" class="table-thead-th">NIN</th>
                        <th width="1%" class="table-thead-th">Contact</th>
                        <th width="1%" class="table-thead-th">Status</th>
                        <th width="1%" class="table-thead-th">Lost In </th>
                        <th width="1%" class="table-thead-th">Recovered In</th>
                        <th width="1%" class="table-thead-th">Color</th>
                        <th width="1%" class="table-thead-th">Action 1</th>
                        @if ( (session('userType') === 'OC') || (session('userType') === 'RPC'))
                        <th width="1%" class="table-thead-th">Action 3</th>
                        @endif
                        @if ((session('userType') === 'RPC'))
                        <th width="1%" class="table-thead-th">Action 3</th>
                        @endif

                        </tr>

                           
                           @foreach ($data as $row)
                           <tr class="table-row">
                           <td class="table-row-td">{{$row -> Holder4}}</td>
                           <td class="table-row-td">{{$row -> NoRooms}}</td>
                           <td class="table-row-td">{{$row -> Name}}</td>
                           <td class="table-row-td">{{$row -> Location}}</td>
                           <td class="table-row-td">{{$row -> Staff}}</td>
                           
                           @if ($row -> Holder3 =='Missing')
                           <td class="table-row-td"><label style="color:red"> {{$row -> Holder3}}</label></td>
                           @elseif ($row -> Holder3 =='Recovered')
                           <td class="table-row-td"><label style="color:blue"> {{$row -> Holder3}}</label></td>
                           @endif
                           <td class="table-row-td">{{$row -> Holder1}}</td>
                           <td class="table-row-td">{{$row -> Holder5}}</td>
                           <td class="table-row-td">{{$row -> Holder2}}</td>
                           <td class="table-row-td"><a href="{{route('BuildingsCrud.show',$row->id)}}" class="btn btn-primary" >Graphical Data</a></td>
                           @if (session('userType') === 'OC')
                           <td class="table-row-td"><a href="{{route('BuildingsCrud.edit',$row->id)}}" class="btn btn-success" >Add Recovered Boda</a></td>
                           @endif
                           @if (session('userType') === 'RPC')
                           <td class="table-row-td"><a href="{{route('BuildingsCrud.edit',$row->id)}}" class="btn btn-success" >Edit Record</a></td>
                           
                           <td class="table-row-td">
                              <form action="{{route('BuildingsCrud.destroy',$row->id)}}" method="post">
                                 {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                 <button type="submit" class="btn btn-danger" >Trash Record</button>
                              </form>   
                           </tr>
                           @endif
                           @endforeach
                        </table>
                        {!! $data->links() !!}
                        @endif




                        @if ( (session('userType') === 'Ridder'))
                           <form method="post" action="{{route('TenantsCrud.store')}}" enctype="multipart/form-data" >
                           {{ csrf_field() }}
                           <div class="my-grid-container">

                              <div class="my-grid-item">
                                 <b><label class="input-labels">UserName ( ID ) </label></b>
                                 <input required class="form-control" type="text" placeholder="Eg R001" name="rider">
                              </div> 
                                 <div class="my-grid-item">
                                 <button type="submit"  class="btn btn-primary submit-btn">Show My Data</button>
                              </div>
                           </div>
                           </form>
                        @endif

                     </div>
                  </div>
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
<!-- 
  Name: BB Tracking System


-->