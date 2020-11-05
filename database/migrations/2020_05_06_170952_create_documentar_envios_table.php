<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentarEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentar_envios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('REFERENCIA', 100);
            $table->string('NUMERO_ENVIO', 100);
            $table->string('CODIGO_ADMISION', 100);
            $table->string('NUMERO_BULTOS', 100);
            $table->string('CLIENTE_REMITENTE', 100);
            $table->string('CENTRO_REMITENTE', 10);
            $table->string('NIF_REMITENTE', 100);
            $table->string('NOMBRE_REMITENTE', 100);
            $table->string('DIRECCION_REMITENTE', 200);
            $table->string('PAIS_REMITENTE', 50);
            $table->string('CODIGO_POSTAL_REMITENTE', 50);
            $table->string('POBLACION_REMITENTE', 100);
            $table->string('PERSONA_CONTACTO_REMITENTE', 150);
            $table->string('TELEFONO_CONTACTO_REMITENTE', 50);
            $table->string('EMAIL_REMITENTE', 100);
            $table->string('NIF_DESTINATARIO', 100);
            $table->string('NOMBRE_DESTINATARIO', 100);
            $table->string('DIRECCION_DESTINATARIO', 150);
            $table->string('PAIS_DESTINATARIO', 100);
            $table->string('CODIGO_POSTAL_DESTINATARIO', 100);
            $table->string('POBLACION_DESTINATARIO', 100);
            $table->string('PERSONA_CONTACTO_DESTINATARIO', 100);
            $table->string('TELEFONO_CONTACTO_DESTINATARIO', 100);
            $table->string('EMAIL_DESTINATARIO', 100);
            $table->string('CODIGO_PRODUCTO_SERVICIO', 100);
            $table->string('KILOS', 10);
            $table->string('VOLUMEN', 10);
            $table->string('CLIENTE_REFERENCIA', 50);
            $table->string('IMPORTE_REEMBOLSO', 10);
            $table->string('IMPORTE_VALOR_DECLARADO', 50);
            $table->string('TIPO_PORTES', 50);
            $table->string('OBSERVACIONES1', 150);
            $table->string('OBSERVACIONES2', 150);
            $table->string('TIPO_MERCANCIA', 10);
            $table->string('VALOR_MERCANCIA', 50);
            $table->string('MERCANCIA_ESPECIAL', 10);
            $table->string('GRANDES_SUPERFICIES', 10);
            $table->string('PLAZO_GARANTIZADO', 10);
            $table->string('LOCALIZADOR', 100);
            $table->string('NUM_PALETS', 50);
            $table->string('FECHA_ENTREGA_APLAZADA', 50);
            $table->string('ENTREGA_APLAZADA', 10);
            $table->string('TIPOS_DOCUMENTO', 50);
            $table->string('TIPOS_DOCUMENTO_REFERENCIA', 100);
            $table->string('GESTION_DEVOLUCION_CONFORME', 10);
            $table->string('ENVIO_CON_RECOGIDA', 10);
            $table->string('IMPRIMIR_ETIQUETA', 10);
            $table->string('ENVIO_DEFINITIVO', 10);
            $table->string('TIPO_FORMATO', 50);
            $table->rememberToken();
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
        Schema::dropIfExists('documentar_envios');
    }
}
