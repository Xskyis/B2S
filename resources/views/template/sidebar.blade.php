<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('backend/assets/img/logo.png') }}" width="150px" alt="Telkom School">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-home-circle'></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        @auth <!-- Cek apakah pengguna terautentikasi -->
            @if (Auth::user()->role == 'admin')
                <li class="menu-item">
                    <a href="{{ route('tambahMateri') }}" class="menu-link">
                        <i class='menu-icon tf-icons bx bxs-book'></i>
                        <div data-i18n="Analytics">Tambah Materi</div>
                    </a>
                </li>
            @endif
        @endauth

        @auth <!-- Cek apakah pengguna terautentikasi -->
            @if (Auth::user()->role == 'admin')
                <li class="menu-item">
                    <a href="{{ route('list_request_materi') }}" class="menu-link">
                        <i class='menu-icon tf-icons bx bxs-file'></i>
                        <div data-i18n="Analytics">List Request Materi</div>
                    </a>
                </li>
            @endif
        @endauth

        {{-- <xli class="menu-item">
            <a href="https://forms.gle/uG2B5C47Hb44R728A" class="menu-link" target="_blank">
                <i class='menu-icon tf-icons bx bxs-comment-add'></i>
                <div data-i18n="Analytics">Request Materi</div>
            </a>
        </xli> --}}

        <li class="menu-item">
            <a href="{{ route('request_materi') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-comment-add'></i>
                <div data-i18n="Analytics">Request Materi</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
