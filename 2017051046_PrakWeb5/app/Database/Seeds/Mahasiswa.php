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
                'npm' => '2017051040',
                'nama'    => 'M Hanif Pratama',
                'alamat'    => 'Bandar Lampung',
                'created_at'    => time::now(),
                // 'update_at'    => time::now(),
            ],
            [
                'npm' => '2017051002',
                'nama'    => 'Dita Faradila',
                'alamat'    => 'Lampung Tengah',
                'created_at'    => time::now(),
                // 'update_at'    => time::now(),
            ],
            [
                'npm' => '2017051008',
                'nama'    => 'Kayla Atsila Ivanka',
                'alamat'    => 'Palembang',
                'created_at'    => time::now(),
                // 'update_at'    => time::now(),
            ]
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data_mahasiswa);

        // Using Query Builder
        foreach ($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
        
    }
}