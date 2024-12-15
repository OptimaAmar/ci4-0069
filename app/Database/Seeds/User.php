<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'Optimum Pride',
            'password'    => password_hash('admin',PASSWORD_DEFAULT),
            'nama_lengkap' => 'Optima Amar',
            'email' => 'optimumpride@gmail.com',
        ];
        $this->db->table('user')->insert($data);
      
    }
}
