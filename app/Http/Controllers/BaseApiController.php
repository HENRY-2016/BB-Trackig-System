<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomsModel; 
use App\Models\TenantsModel;
use App\Models\UsersModel;
use App\Models\BuildingsModel;
use App\Models\PaymentsModel;

class BaseApiController extends Controller
{

    function TotalUsers (){$data = UsersModel::all(); $total = count($data); return $total;}
    function TotalRooms (){$data = RoomsModel::all(); $total = count($data); return $total;}
    function TotalTenants (){$data = TenantsModel::all(); $total = count($data); return $total;}
    function TotalPayments (){$data = PaymentsModel::all(); $total = count($data); return $total;}
    function TotalBuildings (){$data = BuildingsModel::all(); $total = count($data); return $total;}

    
}
