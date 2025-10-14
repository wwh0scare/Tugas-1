<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">PoliKlinik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://www.gravatar.com/avatar/2cb7d6f281ecd3bd65ab915bca6dd57s=100"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Halo! {{ Auth::user()->nama }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <!-- ROLE ADMIN -->
                @if (request()->is('admin*'))
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard Admin
                            </p>
                        </a>
                    </li>
                <li class="nav-item">
                    <a href="{{ route('dokter.index') }}" 
                       class="nav-link {{ request()->routeIs('dokter.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Manajemen Dokter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('polis.index') }}" 
                       class="nav-link {{ request()->routeIs('polis.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hospital"></i>
                        <p>
                            Manajemen Poli
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pasien.index') }}"
                       class="nav-link {{ request()->routeIs('pasien.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-injured"></i>
                        <p>
                            Manajemen Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('obat.index') }}"
                       class="nav-link {{ request()->routeIs('obat.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-pills"></i>
                        <p>
                            Manajemen Obat
                        </p>
                    </a>
                </li>
            @endif

            <!-- ROLE PASIEN -->
            @if (request()->is('pasien*'))
                <li class="nav-item">
                    <a href="{{ route('pasien.dashboard') }}" class="nav-link {{ request()->routeIs('pasien.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Dashboard Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pasien.daftar') }}"
                       class="nav-link {{ request()->routeIs('pasien.daftar') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hospital-user"></i>
                        <p>
                            Poli
                        </p>
                    </a>
                </li>
            @endif

            <!-- ROLE DOKTER -->
            @if (request()->is('dokter*'))
                <li class="nav-item">
                    <a href="{{ route('dokter.dashboard') }}" class="nav-link {{ request()->routeIs('dokter.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Dashboard Dokter
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('jadwal-periksa.index') }}"
                   class="nav-link {{ request()->routeIs('jadwal-periksa.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-calendar-check"></i>
                    <p>
                        Jadwal Periksa
                    </p>
                </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('periksa-pasien.index') }}"
                    class="nav-link {{ request()->routeIs('periksa-pasien.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Periksa Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('riwayat-pasien.index') }}"
                    class="nav-link {{ request()->routeIs('riwayat-pasien.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            Riwayat Pasien
                        </p>
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="nav-link btn btn-danger text-left w-100">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Keluar</p>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
    {{-- <form method="POST" action="/logout" class="btn btn-danger ml-4">
                @csrf
                <button>Keluar</button>
            </form> --}}
    </div>
</aside>