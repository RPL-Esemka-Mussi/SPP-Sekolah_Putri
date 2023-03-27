@extends('main.bootstrap')
@section('content')
<div class="text-center py-5 h-100 bg-dark text-white">
    <h3>Kelola Pembayaran</h3>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Edit Pembayaran</h4>
        </div>
        <div>
            <a href="{{ url('pembayaran')}}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
    <hr>
    <form action="{{ url('pembayaran/update')}}" method="post">
        @csrf
         <input type="hidden" name="id" value="{{ $pembayaran->id }}">
        <div class="form-group">
            <label for="pembayaran">Tahun</label>
            <input type="number" name="pemabayaran" id="spembayaran" class="form-control" value="{{ $pembayaran->tahun }}" required>
        </div>

        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="number" name="nominal" id="nominal" class="form-control" value="{{ $pembayaran->nominal }}" required>
        </div>

        <div class="mt-3 text-end">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection
