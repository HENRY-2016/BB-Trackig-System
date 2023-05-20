
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Riders | View </title>
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
   Get_Over_Roll_Total(APITenantsTotal,'total-span');
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
         <label class="page-title-label" >Riders | List</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label id="detail-label" class="page-title-label" >{{count($data)}} Listed Out Of &nbsp;&nbsp;<span id="total-span"></span> &nbsp;&nbsp;Tenants </label>

            <div id="Tab-1">
               <div id="quick-links-div-2">
                  @if ($message = Session::get('success'))
                  <div class="alert alert-success" >
                     <p>{{$message}}</p>
                  </div>
                  @endif
                  <div style="text-align:justify; overflow: auto; height: 650px;" class="user-view-area">
                     <!-- The Modal -->
                     <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                           <span class="close" onclick="closeConfirmModalWindow()">&times;</span>
                           <p class="model-delete-p-title"><i>Warning</i> </p><br>
                           <p class="model-delete-p-text">Are You Sure You What To Delete This Record ??</p><br>
                           <p class="model-delete-p-text">Once Deleted, It will Never Appear Again</p><br>
                           <input style="display:none" id="id-value-input">
                           <center>
                              <button id="cancel-btn" onclick="closeConfirmModalWindow()" class="btn btn-primary" >Cancel This Action</button><br><br>
                              <button onclick="deleteSelectedRecord (APIDeleteClubMembers)" class="btn btn-danger" >Yes Delete This Record</button>
                           </center>

                        </div>
                     </div>
                     
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
                        <th width="1%" class="table-thead-th">Name</th>
                        <th width="1%" class="table-thead-th">Contact</th>
                        <th width="1%" class="table-thead-th">Building</th>
                        <th width="1%" class="table-thead-th">RoomNo</th>
                        <th width="1%" class="table-thead-th">Action 1</th>
                        <th width="1%" class="table-thead-th">Action 2</th>
                        <th width="1%" class="table-thead-th">Action 3</th>
                        </tr>

                        @foreach ($data as $row)
                        <tr class="table-row">
                        <td class="table-row-td">{{$row -> FName}}</td>
                        <td class="table-row-td">{{$row -> Contact}}</td>
                        <td class="table-row-td">{{$row -> Building}}</td>
                        <td class="table-row-td">{{$row -> RoomNo}}</td>
                        <td class="table-row-td"><a href="{{route('TenantsCrud.show',$row->id)}}" class="btn btn-warning" >Details</a></td>
                        <td class="table-row-td"><a href="{{route('TenantsCrud.edit',$row->id)}}" class="btn btn-success" >Edit Record</a></td>
                        <!-- <td class="table-row-td"><a  onclick="showConfirmModalWindow('{{$row->id}}')"  class="btn btn-danger" >Trash Record</a></td> -->
                        <td class="table-row-td"><a    class="btn btn-danger" >Trash Record</a></td>
                        </tr>
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
