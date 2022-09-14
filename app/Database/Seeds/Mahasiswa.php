<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2057051010',
                'nama' => 'Kurniawan Dwi',
                'alamat' => 'Waykanan',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2057051011',
                'nama' => 'Putri Santika',
                'alamat' => 'Tanggerang',
                'created_at' => Time::now()
            ],
        ];

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
