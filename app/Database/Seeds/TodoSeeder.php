<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'kurcaci',
            'description'    => 'buku dongeng',
            'finished_at'    => "2022-04-04-03:00",
        ];

        // Simple Queries
        $this->db->table('todo')->insert($data);
        
        $data = [
            'title' => 'buku makanan',
            'description'    => 'buku makanan',
            'finished_at'    => "2022-04-04-03:00",
        ];
        // Using Query Builder
        $this->db->table('todo')->insert($data);
    }
}