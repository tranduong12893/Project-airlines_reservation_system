<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoadon';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function ve() {
        return $this->hasMany(Ve::class, 'mahoadon', 'id');
    }

    public function khuyenmai() {
        return $this->belongsTo(KhuyenMai::class, 'maKM', 'id');
    }

    public function dichvu() {
        return $this->hasMany(DichVu::class, 'madichvu', 'id');
    }
}
