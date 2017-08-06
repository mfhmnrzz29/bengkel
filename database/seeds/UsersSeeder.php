<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //RolePemilik
        $pemilikRole = new Role();
     	$pemilikRole->name = "owner";
     	$pemilikRole->display_name = "Owner";
     	$pemilikRole->save();   

     	//RoleKaryawan
        $karyawanRole = new Role();
     	$karyawanRole->name = "karyawan";
     	$karyawanRole->display_name = "Karyawan";
     	$karyawanRole->save(); 

     	//SamplePemilik
		$pemilik = new User();
		$pemilik->name = 'Pemilik Bengkel';
		$pemilik->email = 'admin@gmail.com';
		$pemilik->password = bcrypt('rahasia');
		$pemilik->save();
		$pemilik->attachRole($pemilikRole);

		//SampleKaryawan
		$karyawan = new User();
		$karyawan->name = 'Karyawan Satu';
		$karyawan->email = 'karyawan@gmail.com';
		$karyawan->password = bcrypt('rahasia');
		$karyawan->save();
		$karyawan->attachRole($karyawanRole);


    }
}
