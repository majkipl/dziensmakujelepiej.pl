<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCollectionIdColumnFromLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('links', function (Blueprint $table) {
            $table->dropForeign('links_collection_id_foreign');
            $table->dropColumn('collection_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('links', function (Blueprint $table) {
            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade')->onUpdate('cascade');
        });
    }
}
