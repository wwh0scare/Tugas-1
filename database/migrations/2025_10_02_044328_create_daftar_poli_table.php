public function up(): void
    {
        Schema::create('daftar_poli', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('users')->cascadeOnDelete();
            $table->foreignId('id_jadwal')->constrained('jadwal_periksa')->cascadeOnDelete();
            $table->text('keluhan');
            $table->integer('no_antrian');
            $table->timestamps();
        });
    }