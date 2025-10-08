public function up(): void
    {
        Schema::create('poli', function (Blueprint $table) {
            $table->id();
            $table->string('nama_poli', 25);
            $table->text('keterangan')->nullable();
            $table->timestamp();
        });
    }