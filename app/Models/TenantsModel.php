<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantsModel extends Model
{
    use HasFactory;
    protected $table = 'tenants_table';
    protected $guarded = array();
}
