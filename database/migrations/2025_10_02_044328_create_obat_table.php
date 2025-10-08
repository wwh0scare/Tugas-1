public function up(): void
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->string('kemasan', 35)->nullable();
            $table->integer('harga');
            $table->timestamps();
        });
    }