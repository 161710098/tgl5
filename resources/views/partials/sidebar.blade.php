<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/download.png" alt="Absensi" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                 <li>
                            
                                <i class="fas fa-tachometer-alt"></i>Absensi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('jurusan.index') }}">Jurusan</a>
                                </li>
                                <li>
                                    <a href="{{ route('kelas.index') }}">Kelas</a>
                                </li>
                                <li>
                                    <a href="{{ route('siswa.index') }}"> Siswa</a>
                                </li>
                                <li>
                                    <a href="{{ route('absensi.index') }}">Absensi</a>
                                </li>
                                <li>
                                    <a href="{{ route('akumulasi.index') }}">Akumulasi</a>
                                </li>
                            </ul>
                        </li>
                         
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->