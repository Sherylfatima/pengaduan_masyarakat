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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 50)->unique();
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['Laki-Laki', 'Perempuan']);
            $table->text('username');
            $table->string('password');
            $table->string('no_telepon', 20);
            $table->string('alamat');
            $table->enum('role', ['Masyarakat', 'Petugas', 'Admin'])->default('Masyarakat');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
