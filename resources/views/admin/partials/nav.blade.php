<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><strong>JacKos Dashboard</strong></a>

        <div id="sideNav" href="">
            <i class="fa fa-bars icon"></i>
        </div>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</nav>
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> Kecamatan<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('admin/kecamatan')}}">Daftar Kecamatan</a>
                    </li>
                    <li>
                        <a href="{{url('admin/kecamatan/create')}}">Tambah Kecamatan</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> Kos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('admin/kos')}}">Daftar Kos</a>
                    </li>
                    <li>
                        <a href="{{url('admin/kos/create')}}">Tambah Kos</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
            </li>

            <li>
                <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
            </li>
            <li>
                <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>
            <li>
                <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->