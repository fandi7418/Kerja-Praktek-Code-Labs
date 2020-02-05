<div class="panel panel-warning">
    <div class="panel-heading" align="center">
        <h1 class="font-effect-shadow-multiple" style=" color:black; font-family:bebas neue;" class="panel-title">TOKO ANDA</h1>
    </div>

    <div class="panel-body">
        <h2 style=" color:black; font-family:comic sans ms;" align="center"><a href="/store/{{ $lokasi->store->lokasi_id }}">{{ $store->name }}</a></h2>
        <hr />
        <div class="text-muted">
            <span class="fa fa-home"></span> {{ $lokasi->store->address }}<br />
            <a href="/lokasi/{{ $lokasi->store->lokasi->id }}"><span class="fa fa-map-marker"></span> {{ $lokasi->store->lokasi->nama }}</a><br />
            <span class="fa fa-phone"></span> {{ $lokasi->store->phone }} |
            <span class="fa fa-mobile"></span> {{ $lokasi->store->mobile }}<br />
            <span class="fa fa-whatsapp"></span> {{ $lokasi->store->wa }} |
            <span class="fa fa-bb">BBM</span> {{ $lokasi->store->bb }}<br />
            <span class="fa fa-envelope-o"></span> <a href="mailto:{{ $lokasi->store->email }}">{{ $lokasi->store->email }}</a><br />
            <span class="fa fa-facebook"></span> <a href="{{ $lokasi->store->facebook }}" target="_blank">{{ $lokasi->store->facebook }}</a><br />
            <span class="fa fa-twitter"></span> <a href="{{ $lokasi->store->twitter }}" target="_blank">{{ $lokasi->store->twitter }}</a><br />
            <span class="fa fa-instagram"></span> <a href="{{ $lokasi->store->instagram }}" target="_blank">{{ $lokasi->store->instagram }}</a><br />
            <span class="fa fa-globe"></span> <a href="{{ $lokasi->store->web }}" target="_blank">{{ $lokasi->store->web }}</a>

        </div>
    </div>
</div>