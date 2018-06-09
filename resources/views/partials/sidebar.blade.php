<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <a href="{{ route('kelas.index') }}">
                                <i class="fas fa-chart-bar"></i>Kelas</a>
                        </li>
                        <li>
                        <a href="{{ route('siswa.index') }}">
                                <i class="fas fa-table"></i>siswa</a>
                        </li>
                        <li>
                        <a href="{{ route('absen.index') }}">
                                <i class="fas fa-table"></i>Absensi</a>
                        </li>
                       <li>
                        <a href="{{ route('keterangan.index') }}">
                                <i class="fas fa-table"></i>Keterangan</a>
                        </li>
                      
                     
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->