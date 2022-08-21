<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            //$table->string('slug')->unique();
            $table->string('details')->nullable();
            $table->integer('price');
            $table->text('description');
            $table -> enum('status', [0,1,2,3,4]) -> default(0);



            //Estados del producto
            // estado 0: Publicado - vendedor
            // IF(COMPRADOR->RESERVA)
            //      COMPRADOR.ADD(IDPRODUCT::ESTADO_1) PUEDE ELIMINAR DE SU CARRITO  
           //       VENDEDOR->NOTIFICACION::IDPRODUCT(ESTADO2) NO DISPONIBLE -- panel de notificaciones
            //            (con la opcion de volver a publicarlo)
                              

                // IF(COMPRADOR.IDPRODUCTO -> TRAMITAR PAGO:: VERDADERO)
                //       COMPRADOR-> cambia el estado 3 - lista compras - Puede omitir(califica al vendedor)
                //       VENDEDOR -> cambio al estado 4 (oculto) - lista de ventas
                //                              



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};