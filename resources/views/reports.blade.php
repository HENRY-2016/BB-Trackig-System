
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title> Report </title>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">


</head>

<body  class="app-body">
    <div class="container">

            <div class="modal fade" id="newUserModal">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                    <b><h4 class="modal-title">New User Details </h4></b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <form method="post" action="{{route('SystemUsersCrud.store')}}" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="modal-body">
                    
                        <b><label>User Name (Plate Number)</label></b>
                        <div class="input-container-form">
                            <input required class="input-field-form" type="text" placeholder="UBA 174S" name="username">
                        </div>

                        
                        <b><label>Password</label></b>
                        <div class="input-container-form">
                            <input required class="input-field-form" type="password" placeholder="Password" name="password">
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" >Add New User</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>

            <div class="modal fade" id="ocUserModal">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                    <b><h4 class="modal-title">OC User Details</h4></b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <form method="post" action="{{route('SystemUsersCrud.store')}}" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <b><label>User Name</label></b>
                        <div class="input-container-form">
                            <input required class="input-field-form" type="text" placeholder="Eg OC001" name="name">
                        </div>

                        <b><label>Password</label></b>
                        <div class="input-container-form">
                            <input required class="input-field-form" type="text" placeholder="Password" name="password">
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" >Add New OC</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
    </div>



    <div id="report-div"> 
        <br>
        <a href="{{url('/add')}}" >
        <label class="Navigation-labels" data-toggle="modal">
            Recover 
        </label>
        </a><br>
        <label class="Navigation-labels" data-toggle="modal" data-target="#newUserModal">
            Add  New Users
        </label><br>
        <a href="{{url('/addOc')}}" >
            <label class="Navigation-labels" data-toggle="modal">
                OC User
            </label>
        </a>

        
    
        <hr style="border: 1px solid black;" >
        <center><b><h3>Reports</h3></b></center>
        @if ($message = Session::get('success'))
        <div class="alert alert-success" >
            <p>{{$message}}</p>
        </div>
        @endif
        
        &nbsp;&nbsp;&nbsp;
        <label >Name:</label><br>
        &nbsp;&nbsp;&nbsp;
        <label><b>From</b></label>
        <input type="date" >
        <label><b>To</b></label>
        <input type="date" >
        <div id="report-right-float" >
        <label >Status</label><br>
            <select name="cars" id="cars">
                <option value="volvo">Missing</option>
                <option value="saab">Recovered</option>
            </select>
        </div>
        <hr style="border: 1px solid black;" >
        <div id="table-div">
        <table style="width:100%; padding-left:20px" >
            <tr>
                <th style="font-size:20px;" ><b>Date</b></th>
                <th style="font-size:20px;"><b>Asset</b></th>
                <th style="font-size:20px;"><b>Status</b></th>
                <th style="font-size:20px;"><b>Location</b></th>
            </tr>
            
            <tr>
                <td style="font-size:17px;"><b>09/05/2023</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
            </tr>

            <tr>
                <td style="font-size:17px;"><b>UEK 134K</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
            </tr>

            <tr>
                <td style="font-size:17px;"><b>Missing</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
            </tr>

            <tr>
                <td style="font-size:17px;"><b>Kampala</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
                <td style="font-size:17px;"><b>Item</b></td>
            </tr>

        </table>
</div>

    </div>

</body>
</html>
