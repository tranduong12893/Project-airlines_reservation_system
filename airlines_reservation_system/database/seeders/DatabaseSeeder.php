<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'DOB' => '2000-01-01 00:00:00',
                'phone' => '0941077550',
                'address' => 'Ha Noi',
                'gender' => 'Nam',
                'role' => '1',
            ],
//            [
//                'name' => 'Trần Tuấn Anh',
//                'email' => 'Tuananh123@gmail.com',
//                'password' => bcrypt('tuan1234'),
//                'DOB' => '1993-06-11 00:00:00',
//                'phone' => '0987865434',
//                'address' => 'Ha Noi',
//                'gender' => 'Nam',
//                'role' => '2',
//            ],
//            [
//                'name' => 'Huỳnh Huyền Trang',
//                'email' => 'Trangkute128@gmail.com',
//                'password' => bcrypt('12345678'),
//                'DOB' => '1997-03-23 00:00:00',
//                'phone' => '0978654334',
//                'address' => 'Ha Noi',
//                'gender' => 'nu',
//                'role' => '2',
//            ],
//            [
//                'name' => 'Bùi Hữu Thành',
//                'email' => 'Thanh1234@gmail.com',
//                'password' => bcrypt('thanh1234'),
//                'DOB' => '2001-08-11 00:00:00',
//                'phone' => '0985643213',
//                'address' => 'Hải Dương',
//                'gender' => 'Nam',
//                'role' => '2',
//            ],
            ]);
//        DB::table('chuyenbay')->insert([
//        [
//            'machuyenbay' => 'BNA211',
//            'diemxuatphat' => 'HAN',
//            'diemden' => 'DAD',
//            'ngaybay' => '2021-10-14',
//            'ngayHC' => '2000-10-14',
//            'di' => '2000-10-14 07:00:00',
//            'hc' => '2000-10-14 09:00:00',
//            'giobay' => '07:00:00',
//            'giohacanh' => '09:00:00',
//            'mamaybay' => 'HN069',
//            'giave' => '560000',
//        ],
//        [
//            'machuyenbay' => 'XDA123',
//            'diemxuatphat' => 'DAD',
//            'diemden' => 'HAN',
//            'ngaybay' => '2021-10-15',
//            'ngayHC' => '2000-10-15',
//            'di' => '2000-10-15 12:00:00',
//            'hc' => '2000-10-15 14:00:00',
//            'giobay' => '12:00:00',
//            'giohacanh' => '14:00:00',
//            'mamaybay' => 'HN773',
//            'giave' => '650000',
//        ],
//        [
//            'machuyenbay' => 'SGH001',
//            'diemxuatphat' => 'HAN',
//            'diemden' => 'SGN',
//            'ngaybay' => '2021-10-20',
//            'ngayHC' => '2000-10-20',
//            'di' => '2000-10-20 07:00:00',
//            'hc' => '2000-10-20 10:30:00',
//            'giobay' => '07:00:00',
//            'giohacanh' => '10:30:00',
//            'mamaybay' => 'HN699',
//            'giave' => '1150000',
//        ],
//        [
//            'machuyenbay' => 'SGH001',
//            'diemxuatphat' => 'HAN',
//            'diemden' => 'SGN',
//            'ngaybay' => '2021-10-22',
//            'ngayHC' => '2000-10-22',
//            'di' => '2000-10-22 14:00:00',
//            'hc' => '2000-10-22 16:30:00',
//            'giobay' => '14:00:00',
//            'giohacanh' => '16:30:00',
//            'mamaybay' => 'SG345',
//            'giave' => '1150000',
//        ],
//    ]);
//        DB::table('maybay')->insert([
//            [
//                'mamaybay' => 'HN069',
//                'hangmaybay' => 'VietJet',
//                'firstclass' => '10',
//                'business' => '10',
//                'promo' => '20',
//                'economy' => '40',
//                'tongsoghe' => '90',
//            ],
//            [
//                'mamaybay' => 'HN773',
//                'hangmaybay' => 'Vietnam Airlines',
//                'firstclass' => '10',
//                'business' => '10',
//                'promo' => '20',
//                'economy' => '40',
//                'tongsoghe' => '90',
//            ],
//            [
//                'mamaybay' => 'HN699',
//                'hangmaybay' => 'bamboo airways',
//                'firstclass' => '10',
//                'business' => '10',
//                'promo' => '20',
//                'economy' => '40',
//                'tongsoghe' => '90',
//            ],
//            [
//                'mamaybay' => 'SG345',
//                'hangmaybay' => 'VietJet',
//                'firstclass' => '10',
//                'business' => '10',
//                'promo' => '20',
//                'economy' => '40',
//                'tongsoghe' => '90',
//            ],
//        ]);
    }
}
