@extends('template2')
@section('judul_halaman', 'Data Kaos')
@section('konten')
    <p>
        <br />
        <a href="/kaos/tambah" class="btn btn-primary">Tambah kaos Baru</a>
    </p>

    <p>Cari Data Kaos:</p>
    <form action="/kaos/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari kaos .." class="form-control">
        <br>
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk kaos</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($kaos as $k)
            <tr>
                <td>{{ $k->merkkaos }}</td>
                <td>{{ $k->stockkaos }}</td>
                <td>
                    @if ($k -> tersedia == 'Y')
                        Tersedia
                    @else
                        Tidak Tersedia
                    @endif
                </td>
                <td>
                    <a href="/kaos/edit/{{ $k->kodekaos }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/kaos/hapus/{{ $k->kodekaos }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $kaos->links() }}
@endsection
