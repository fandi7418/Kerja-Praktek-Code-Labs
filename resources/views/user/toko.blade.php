<div class="panel panel-warning">
    <div class="panel-heading" align="center">
        <h1 class="font-effect-shadow-multiple" style=" color:black; font-family:bebas neue;" class="panel-title">TOKO ANDA</h1>
    </div>

    <div class="panel-body">
        <h2 style=" color:black; font-family:bebas;" align="center"><a href="/store/{{ $user->store_id }}">{{ $user->store->name }}</a></h2>
        <hr />
        <div class="text-muted">
            <span class="fa fa-home"></span> {{ $user->store->address }}<br />
            <a href="/lokasi/{{ $user->store->lokasi->id }}"><span class="fa fa-map-marker"></span> {{ $user->store->lokasi->nama }}</a><br />
            <span class="fa fa-phone"></span> {{ $user->store->phone }} |
            <span class="fa fa-mobile"></span> {{ $user->store->mobile }}<br />
            <span class="fa fa-whatsapp"></span> {{ $user->store->wa }} |
            <span class="fa fa-bb">BBM</span> {{ $user->store->bb }}<br />
            <span class="fa fa-envelope-o"></span> <a href="mailto:{{ $user->store->email }}">{{ $user->store->email }}</a><br />
            <span class="fa fa-facebook"></span> <a href="{{ $user->store->facebook }}" target="_blank">{{ $user->store->facebook }}</a><br />
            <span class="fa fa-twitter"></span> <a href="{{ $user->store->twitter }}" target="_blank">{{ $user->store->twitter }}</a><br />
            <span class="fa fa-instagram"></span> <a href="{{ $user->store->instagram }}" target="_blank">{{ $user->store->instagram }}</a><br />
            <span class="fa fa-globe"></span> <a href="{{ $user->store->web }}" target="_blank">{{ $user->store->web }}</a>

        </div>
    </div>
</div>