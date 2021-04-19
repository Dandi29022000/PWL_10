<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Nim' => '1941720009',
                'Nama' => 'Dandi Agung Setiawan',
                'Foto' => 'images/dandi.png',
                'Jurusan' => 'Teknologi Informasi',
                'No_handphone' => '08846184617',
                'Email'=>'1941720009@student.polinema.ac.id',
                'Tanggal_lahir' => '29-02-2000',
            ],

            [
                'Nim' => '1941720110',
                'Nama' => 'Auzan Ihtifazuddin',
                'Foto' => 'images/auzan.png',
                'Jurusan' => 'Teknologi Informasi',
                'No_handphone' => '081234018065',
                'Email'=>'1941720110@student.polinema.ac.id',
                'Tanggal_lahir' => '05-09-2000',
            ],

            [
                'Nim' => '1941720054',
                'Nama' => 'Pramudya Wibowo',
                'Foto' => 'images/pram.png',
                'Jurusan' => 'Teknologi Informasi',
                'No_handphone' => '082244101304',
                'Email'=>'1941720054@student.polinema.ac.id',
                'Tanggal_lahir' => '24-01-2001',
            ]
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
