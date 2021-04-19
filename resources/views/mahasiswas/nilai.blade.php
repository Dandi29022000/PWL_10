@extends('mahasiswas.layout')
@section('content')
<div class="row justify-content-center">
    <div class="pull-left mt-2">
        <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
    </div>
    <div class="pull-left mt-2">
        <h2>KARTU HASIL STUDI (KHS)</h2>
    </div>
</div>
@if($mahasiswa)
<p><strong>Nim&nbsp;: </strong>{{ $mahasiswa->mahasiswa->Nim }}</p>
<p><strong>Nama&nbsp;: </strong>{{ $mahasiswa->mahasiswa->Nama }}</p>
<p><strong>Kelas&nbsp;: </strong>{{ $mahasiswa->mahasiswa->Kelas->nama_kelas }}</p>
@else
<h2>Belum ada data!</h2>
@endif
<table class="table table-bordered">
    <tr>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Nilai</th>
    </tr>
    @if($nilai)
    @foreach($nilai as $Nilai)
    <tr>
        <td>{{ $Nilai->matakuliah->nama_matkul }}</td>
        <td>{{ $Nilai->matakuliah->sks }}</td>
        <td>{{ $Nilai->matakuliah->semester }}</td>
        <td>{{ $Nilai->nilai }}</td>
    </tr>
    @endforeach
    @endif
</table>
<div class="row justify-content-end">
    <a href="{{ route('mahasiswas.cetak_pdf', $mahasiswa->mahasiswa->Nim) }}" class="btn btn-warning">Cetak Nilai</a>
    <a href="{{ route('mahasiswas.index') }}" class="btn btn-danger">Kembali</a>
</div>
@endsection
