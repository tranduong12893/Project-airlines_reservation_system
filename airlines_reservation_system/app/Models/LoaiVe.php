<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiVe extends Model
{
    use HasFactory;

    protected $table = 'loaive';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function ve() {
        return $this->belongsTo(Ve::class, 'maLV', 'id');
    }
}
