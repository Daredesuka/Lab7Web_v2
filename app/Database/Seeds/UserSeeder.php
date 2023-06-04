<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
		'username' => 'Ogie',
		'useremail' => 'Ogiekukuh88@gmail.com',
		'userpassword' => password_hash('ogieajah', PASSWORD_DEFAULT),
		]);
	}
}