@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>

            <div class="float-right my-2">
                <a class="btn btnsuccess" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
            </div>

            <div>
            <div class="mx-auto pull-right">
                <div class="float-left">
                    <form action="{{ route('mahasiswas.index') }}" method="GET" role="search">
                        <div class="input-group">
                            <span class="input-group-btn mr-5 mt-1">
                                <button class="btn btn-info" type="submit" title="Search Mahasiswa">
                                    <span class="fas fa-search">Search</span>
                                </button>
                            </span>

                            <input type="text" class="form-control mr-2" name="term" placeholder="Search Nama Mahasiswa" id="term">
                            <a href="{{ route('mahasiswas.index') }}" class=" mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                        <span class="fas fa-sync-alt">Refresh</span>
                                    </button>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th scope="col">Nim</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">No_Handphone</th>
            <th scope="col">Email</th>
            <th scope="col">Tanggal Lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswas as $Mahasiswa)
        <tr>
            <td>{{ $Mahasiswa->Nim }}</td>
            <td>{{ $Mahasiswa->Nama }}</td>
            <td><img width="100px" src="{{asset('storage/'.$Mahasiswa->Foto)}}" alt=""></td>
            <td>{{ $Mahasiswa->Kelas->nama_kelas }}</td>
            <td>{{ $Mahasiswa->Jurusan }}</td>
            <td>{{ $Mahasiswa->No_Handphone }}</td>
            <td>{{ $Mahasiswa->Email }}</td>
            <td>{{ $Mahasiswa->Tanggal_lahir }}</td>
            <td>
                <form action="{{ route('mahasiswas.destroy',$Mahasiswa->Nim) }}" method="POST">
                    <a class="btn btninfo" href="{{ route('mahasiswas.show',$Mahasiswa->Nim) }}">Show</a>
                    <a class="btn btnprimary" href="{{ route('mahasiswas.edit',$Mahasiswa->Nim) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-warning" href="{{ route('mahasiswas.showNilai', $Mahasiswa->Nim) }}">Nilai</a>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $mahasiswas->links() }}
@endsection