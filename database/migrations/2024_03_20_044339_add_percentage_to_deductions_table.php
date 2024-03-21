<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPercentageToDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
{
    Schema::table('deductions', function (Blueprint $table) {
        $table->decimal('percentage', 8, 2)->nullable()->after('active');
    });
}

public function down()
{
    Schema::table('deductions', function (Blueprint $table) {
        $table->dropColumn('percentage');
    });
}

}
