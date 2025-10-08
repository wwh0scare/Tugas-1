public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->foreignId('id_poli')->nullable()->constrained('poli')->cascadeOnDeleter();
            $table->string('no_ktp')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('no_rm', 25)->nullable();
            $table->enum('role', ['pasien', 'dokter', 'admin']);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }