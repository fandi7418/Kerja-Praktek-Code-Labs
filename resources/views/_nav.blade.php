<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ asset('/zee.png') }}" style="width:88px;"></a>

        </div>
        <form action="{{ route('search') }}" method="GET" class="navbar-form navbar-left">
            <div class="form-group">

                <input name="keyword" action="{{ route('search') }}" method="GET" type="text" placeholder="Search" class="form-control" style="width:500px;">
            </div>
            <button style="font-family: bebas;  letter-spacing:1px;" type="submit" class="btn btn-warning">Cari</button>
        </form>

        <ul class="nav navbar-nav navbar-right">

            @if (Auth::check())

            <li><a style=" color:white; font-family:bebas; font-size:15px;" href="/user/{{ Auth::user()->id }}">Profile ({{ Auth::user()->name }})</a></li>

            <li><a style=" color:white; font-family:bebas; font-size:15px;" href="/auth/logout">Logout</a></li>

            @else

            <li><a style=" color:white; font-family:bebas; font-size:15px;" href="/auth/login">Login</a></li>

            <li><a style=" color:white; font-family:bebas; font-size:15px;" href="/auth/register">Register</a></li>

            @endif

        </ul>
    </div>
    <!--/.navbar-collapse -->
    </div>
</nav>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: white">
    <ul class="nav navbar-nav">
        <li class="dropdown"> <a style="color: black; font-size:20px; font-family:bebas" href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Semua Kategori</b> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <?php
                $kategori = DB::table('kategori')->get();
                ?>
                <div class="container">
                    @foreach (App\kategori::with('kat')->where('parent_id',0)->get() as $k)
                    @if($k->kat->count()>0)
                    <div class="container, col-md-2">
                        <div class="w3-container">
                            <a style="color: black; font-size:18px; font-family:bebas" href="/kategori/product/{{ $k->id }}"><b>{{$k->nama}}</b></a>
                            @foreach ($k->kat as $subMenu)
                            <p>
                                <div class="w3-container">
                                    <a style="color: black; font-family:bebas; font-size:15px" href="/kategori/product/{{ $subMenu->id }}">{{$subMenu->nama}}</a>
                                </div>
                            </p>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="container, col-md-2">
                        <div class="w3-container">
                            <a href="/kategori/product/{{ $k->id }}">{{$k->nama}}</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </ul>
        </li>
        <li><a style="color: black; font-size:18px; font-family:bebas" href="/kategori/product/{{ $k->id='4'}}"> Pekerjaan</a>

        </li>
        <li><a style="color: black; font-size:18px; font-family:bebas" href="/kategori/product/{{ $k->id='7'}}"> Properti</a>

        </li>
        <li><a style="color: black; font-size:18px; font-family:bebas" href="/kategori/product/{{ $k->id='6'}}"> Elektronik</a>

        </li>
        <li><a style="color: black; font-size:18px; font-family:bebas" href="/kategori/product/{{ $k->id='1'}}">Motor</a>

        </li>
        <li><a style="color: black; font-size:18px; font-family:bebas" href="/kategori/product/{{ $k->id='3'}}"> Pakaian</a>

        </li>
    </ul>
</div>