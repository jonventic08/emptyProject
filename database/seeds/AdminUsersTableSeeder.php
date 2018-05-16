<?php

use Illuminate\Database\Seeder;
use App\AdminUser;
class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new AdminUser();
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt("123456");
        $user->save();
    }
}
