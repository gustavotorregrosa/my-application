<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarRolesMais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      App\Role::create(['name' => 'Assinante']);
      App\Role::create(['name' => 'Moderador']);
      App\Role::create(['name' => 'Blogger']);
  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
