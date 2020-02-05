<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a align="center href=" index3.html" class="brand-link">
        <img " src=" {{asset('/zee.png')}}" alt="" style="width:220px">
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <!-- <a href="#" class="nav-link active"> -->
                    <a class="nav-link active" id="v-pills-pengguma-tab" data-toggle="pill" href="#v-pills-pengguna" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <img src="{{asset('/user.svg')}}" style="width:20px;">
                        <p style="margin-left: 7px; font-family:bebas">Pengguna
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    </!-->
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/user/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/admin/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Admin</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a class="nav-link" id="v-pills-profil-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profil" aria-selected="false">
                        <img src="{{asset ('/review.svg')}}" style="width: 22px">
                        <p style="margin-left: 7px; font-family:bebas">
                            Ulasan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/diskusi/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Diskusi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/review/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Review</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/page/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/faq/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">FAQ</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a class="nav-link" id="v-pills-profil-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profil" aria-selected="false">
                        <img src="{{asset('/retail.svg')}}" style="width: 22px">
                        <p style="margin-left:7px; font-family:bebas">
                            Toko
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/store/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Toko</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/etalase/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Etalase</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/notes/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Note</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/produk/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/kategori/show" class="nav-link">
                                <img src="{{asset('/dot.svg')}}" style="width:7px; margin-left:9px">
                                <p style="font-family:bebas; margin-left:14px">Kategori</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/admin/admin/logout" class="nav-link">
                        <img src="{{asset('/logout.svg')}}" style="width: 20px">
                        <p style="margin-left: 7px; font-family:bebas">
                            Logout

                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>