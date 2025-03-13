<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('prds', function (Blueprint $table) {
            // Tambahkan kolom user_id sebagai foreign key
            $table->foreignId('user_id') // Membuat kolom user_id dengan tipe foreign key
                  ->nullable()           // Opsi: Izinkan nilai NULL (boleh kosong jika perlu)
                  ->constrained()        // Opsi: Membuat foreign key constraint ke tabel 'users' (kolom 'id')
                  ->cascadeOnDelete();  // Opsi: Cascade delete jika user dihapus (opsional, jika data PRD ikut terhapus jika user dihapus)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prds', function (Blueprint $table) {
            // Hapus foreign key constraint dan kolom user_id saat migrasi di-rollback
            $table->dropForeign(['user_id']); // Hapus foreign key constraint
            $table->dropColumn('user_id');    // Hapus kolom user_id
        });
    }
};