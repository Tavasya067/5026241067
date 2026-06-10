@extends('template2')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')
    <p>
        <br />
        <a href="/nilaikuliah/tambah" class="btn btn-primary">Tambah Nilai Kuliah Baru</a>
    </p>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>NilaiAngka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka >= 81)
                    A
                    @elseif ($n->NilaiAngka >= 61)
                    B
                    @elseif ($n->NilaiAngka >= 41)
                    C
                    @else
                    D
                    @endif
                </td>
                <td>
                    {{$n->NilaiAngka * $n->SKS}}
                </td>
            </tr>
        @endforeach
    </table>
    {{ $nilaikuliah->links() }}
@endsection
