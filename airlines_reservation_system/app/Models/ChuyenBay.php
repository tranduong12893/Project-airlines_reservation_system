<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenBay extends Model
{
    use HasFactory;

    protected $table = 'chuyenbay';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function sanbay() {
        return $this->hasMany(SanBay::class, 'machuyenbay', 'id');
    }

    public function ve() {
        return $this->belongsTo(Ve::class, 'machuyenbay', 'id');
    }

    public function maybay() {
        return $this->belongsTo(MayBay::class, 'maMB', 'id');
    }
}
