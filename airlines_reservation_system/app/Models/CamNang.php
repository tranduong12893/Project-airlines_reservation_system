<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamNang extends Model
{
    use HasFactory;

    protected $table = 'camnang';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
