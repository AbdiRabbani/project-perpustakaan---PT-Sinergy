<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "Admin";
        $user->email = "admin123@gmail.com";
        $user->level = "admin";
        $user->password = \Hash::make("adminadmin");
        $user->save();
        $this->command->info("Admin telah tiba");
    }
}
