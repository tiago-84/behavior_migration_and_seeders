<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {

        $email = env('ADMIN_EMAIL' , 'admin@laraveldeveloper.com.br');
        $password = bcrypt(env('ADMIN_PASSWORD' , 'admin'));

        DB::table('users')->insert([

            'name' => 'Administrador',
            'email' => $email,
            'password' => $password
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $email = env('ADMIN_EMAIL', 'admin@laraveldeveloper.com.br');
        DB::select('DELETE FROM users WHERE email = ?', [$email]);
    }
};
