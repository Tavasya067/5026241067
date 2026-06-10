@extends('template2')
@section('judul_halaman', 'Data Kaos')
@section('konten')

    <br>
    <a href="/kaos" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Kaos
        </div>

        <div class="card-body">
            <form action="/kaos/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkkaos" class="col-sm-2 col-form-label">Merk kaos</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkkaos" id="merkkaos" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockkaos" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockkaos" id="stockkaos" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Status Ketersediaan</label>
                    <div class="col-sm-10">
                        <div class="form-check form-switch mt-2">
                            <input class="form-check-input" type="checkbox" role="switch" id="tersedia" name="tersedia"
                                value="Y" checked>
                            <label class="form-check-label" for="tersedia">Tersedia untuk Dijual</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
