<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ["first_name" => "User 1", "last_name" => "Last 1", "email" => "User1@gmail.com", "age" => 1],
            ["first_name" => "User 2", "last_name" => "Last 2", "email" => "User2@gmail.com", "age" => 2],
            ["first_name" => "User 3", "last_name" => "Last 3", "email" => "User3@gmail.com", "age" => 3],
            ["first_name" => "User 4", "last_name" => "Last 4", "email" => "User4@gmail.com", "age" => 4],
            ["first_name" => "User 5", "last_name" => "Last 5", "email" => "User5@gmail.com", "age" => 5],
            ["first_name" => "User 6", "last_name" => "Last 6", "email" => "User6@gmail.com", "age" => 6],
            ["first_name" => "User 7", "last_name" => "Last 7", "email" => "User7@gmail.com", "age" => 7],
            ["first_name" => "User 8", "last_name" => "Last 8", "email" => "User8@gmail.com", "age" => 8],
            ["first_name" => "User 9", "last_name" => "Last 9", "email" => "User9@gmail.com", "age" => 9],
            ["first_name" => "User 10", "last_name" => "Last 10", "email" => "User10@gmail.com", "age" => 10]
        ];
        foreach($users as $row){
            if(!User::where('email', $row['email'])->exists()){
                $user             = New User();
                $user->first_name = $row['first_name'];
                $user->last_name  = $row['last_name'];
                $user->email      = $row['email'];
                $user->age        = $row['age'];
                $user->save();
            }
        }
    }
}
