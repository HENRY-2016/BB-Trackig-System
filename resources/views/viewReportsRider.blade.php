
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
                        
                           @endforeach
                        </table>
                        {!! $data->links() !!}

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