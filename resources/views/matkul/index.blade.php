@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Data Matkul</h4>                 
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <a href="{{ route('tambah_matkul') }}" class="btn btn-primary btn-md float-right">Tambah Data</a><br><br>
                        <table class="table table-bordered">
                            <tr class="bg-light">
                                <th style="text-align:center;">No</th>
                                <th>Kode Matkul</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($matkul as $mkl)  
                            <tr>
                                <td style="text-align:center;">{{ $mkl->id }}</td>
                                <td>{{ $mkl->kode_matkul }}</td>
                                <td>{{ $mkl->nama_matkul }}</td>
                                <td>{{ $mkl->sks }}</td>
                                <td>
                                    <a href="{{ route('edit_matkul', $mkl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_matkul', $mkl->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
