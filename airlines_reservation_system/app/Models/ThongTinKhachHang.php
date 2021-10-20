<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ThongTinKhachHang extends Model
{
    protected $table = 'thongtinkhachhang';
    protected $primaryKey = 'maKH';
    protected $guarded = [];
}
