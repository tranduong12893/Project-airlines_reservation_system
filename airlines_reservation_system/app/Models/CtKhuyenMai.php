<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtKhuyenMai extends Model
{
    use HasFactory;

    protected $table = 'ctkhuyenmai';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
