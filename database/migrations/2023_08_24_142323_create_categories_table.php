<?php
<<<<<<< HEAD

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

=======
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('name')->unique();
            $table->timestamps();
        });
    }

=======
            $table->string('name');
            $table->text('detail');
            $table->timestamps();
        });
    }
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
