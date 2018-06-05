<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole ->name='admin';
        $adminRole ->display_name='admin';
        $adminRole ->save();

        //membuat role member

        $memberRole = new Role();
        $memberRole ->name='member';
        $memberRole ->display_name='member';
        $memberRole ->save();

        //membuat sample admin
        $adminRole = new user();
        $adminRole ->name='admin';
        $adminRole ->email='admin@gmail.com';
        $adminRole ->password=bcrypt('rahasia');
        $adminRole ->save();
        $adminRole ->attachRole($memberRole);

        //membuat sample member

        $adminRole = new user();
        $adminRole ->name='sample member';
        $adminRole ->email='member@gmail.com';
        $adminRole ->password=bcrypt('rahasia');
        $adminRole ->save();
        $adminRole ->attachRole($memberRole);


    }
}
