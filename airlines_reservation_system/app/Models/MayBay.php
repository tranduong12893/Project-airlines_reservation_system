<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayBay extends Model
{
    use HasFactory;

    protected $table = 'maybay';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function chuyenbay() {
        return $this->belongsTo(ChuyenBay::class, 'maMB', 'id');
    }
}
