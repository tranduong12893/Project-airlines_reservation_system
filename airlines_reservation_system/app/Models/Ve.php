<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;

    protected $table = 've';
    protected $primaryKey = 'mave';
    protected $guarded = [];

    public function chuyenbay() {
        return $this->belongsTo(ChuyenBay::class, 'machuyenbay', 'id');
    }

    public function User() {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function dichvu() {
        return $this->hasMany(DichVu::class, 'maDV', 'id');
    }

    public function hoadon() {
        return $this->belongsTo(HoaDon::class, 'maVe', 'id');
    }

    public function loaive() {
        return $this->hasMany(LoaiVe::class, 'maLV', 'id');
    }
}
