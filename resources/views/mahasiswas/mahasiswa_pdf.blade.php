<!DOCTYPE html>
<html lang="">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous">
    </script>
    <title>Data Nilai</title>
</head>

<body>
    <div class="text-center card-header">
        <h3>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h3>
        <h4>Kartu Hasil Studi</h4>
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
</body>

</html>
