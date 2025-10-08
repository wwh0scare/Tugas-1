public function up(): void
    {
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_daftar_poli')->constrained('dafter_poli')->cascadeOnDelete();
            $table->text('catatan')->nullable();
            $table->integer('biaya_periksa');
            $table->timestamos();
        });
    }