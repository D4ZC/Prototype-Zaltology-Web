<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('user_id')->unsigned();
            $table->string('nameItem');
            //$table->int('cantidad');
            $table->string('category');
            $table->text('description');
            $table->timestamps(); // Anota la fecha del registro y otro donde actualiza la fecha del registro
            //Llave foranea que asigna cada producto a su usuario
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
       
            //Llave foranea a la descripcion de cada articulo donde contiene la informacion detallada y una vista del dispositivo
            /* $table->engine = 'InnoDB';
            $table->integer('description_id')->unsigned();            
            $table->foreign('description_id')->references('id')->on('descriptionItem'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
