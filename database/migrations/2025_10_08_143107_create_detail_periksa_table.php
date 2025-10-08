public function up(): void
    {
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_periksa')->constrained('periksa')->cascadeOnDelete();
            $table->foreignId('id_obat')->constrained('obat')->cascadeOnDelete();
            $table->timestamos();
        });
    }