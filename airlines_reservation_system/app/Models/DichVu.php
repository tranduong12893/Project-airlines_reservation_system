<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    use HasFactory;

    protected $table = 'dichvu';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function ve() {
        return $this->belongsTo(Ve::class, 'madichvu', 'id');
    }

    public function hoadon() {
        return $this->belongsTo(HoaDon::class, 'madichvu', 'id');
    }
}
