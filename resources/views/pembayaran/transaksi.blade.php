@extends('main.bootstrap')
@section('content')
<div class="text-center py-5 h-100 bg-dark text-white">
    <h3>Transaksi SPP</h3>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Transaksi SPP</h4>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="me-3"><b>NIS : {{ $siswa->nis }}</b></div>
            <div class="me-3"><b>Nama : {{ $siswa->user->name }}</b></div>
            <div><b>Kelas : {{ $siswa->kelas->kelas }}</b></div>
        </div>
        <div>
            <a href="{{ url('pembayaran')}}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
    <div class="d-flex justify-content-center text-center">
    <hr>
    <div class="card text-bg-success ms-5 me-5 w-100">
        <div class="card-header">
            <b>Total Dibayar</b>
        </div>
        <div class="card-body">
          <h3>Rp. {{ $total['total_dibayar'] }}</h3>
        </div>
    </div>

    <div class="card text-bg-danger me-5 ms-5 w-100">
        <div class="card-header">
        <b>Total Belum Dibayar</b>
        </div>
        <div class="card-body">
            <h3>Rp. {{ $total['total_belumdibayar'] }}</h3>
        </div>
    </div>
    </div>

</div>
@endsection
