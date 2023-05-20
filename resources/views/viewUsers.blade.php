
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title> View Users </title>
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
   Get_Over_Roll_Total(APIClubMembersTotal,'total-span');
}
</script>

</head>

<body onload="Do_Logic ()" class="app-body">
@include ('/MainViews/header')
   
   <div id="wrappers">
    
      <div id="page-content-wrapper">
         <div class="container-fluid main-section-contents">
         <label class="page-title-label" >Users | List</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label id="detail-label" class="page-title-label" >{{count($data)}} Listed Out Of &nbsp;&nbsp;<span id="total-span"></span> &nbsp;&nbsp;Members </label>
   

            <div id="Tab-1">
               <div id="quick-links-div-2">
                  @if ($message = Session::get('success'))
                  <div class="alert alert-success" >
                     <p>{{$message}}</p>
                  </div>
                  @endif
                  <div style="text-align:justify; overflow: auto; height: 650px;" class="user-view-area">
                  
                        <table class="w3-card-4">
                        <tr class="table-thead">
                        <th width="2%" class="table-thead-th">User Name</th>
                        <th width="2%" class="table-thead-th">Type</th>
                        <th width="2%" class="table-thead-th">Password</th>

                        @if ((session('userType') === 'OC')||(session('userType') === 'RPC'))
                           <th width="5%" class="table-thead-th">Action 1</th>
                        @endif
                        @if (session('userType') === 'RPC')
                           <th width="5%" class="table-thead-th">Action 2</th>
                        @endif
                        </tr>

                        @foreach ($data as $row)
                        <tr class="table-row">
                        <td class="table-row-td">{{$row -> UserName}}</td>
                        <td class="table-row-td">{{$row -> Contact}}</td>
                        <td class="table-row-td">{{$row -> Password}}</td>
                        <td class="table-row-td"><a href="{{route('UsersCrud.edit',$row->id)}}" class="btn btn-success" >Edit Record</a></td>
                           <td class="table-row-td">
                           <form action="{{route('UsersCrud.destroy',$row->id)}}" method="post">
                              {{ csrf_field() }}
                                 {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger" >Trash Record</button>
                           </form>   
                        </tr>
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
