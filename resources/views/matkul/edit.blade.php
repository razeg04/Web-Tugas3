@extends('layouts.app')

@section('content')
@if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Matkul</div>

                <div class="card-body">
                    <form action="{{ route('update_matkul', $matkul->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                <label for="kode_matkul">Kode Matkul</label>
                                <input type="text" name="kode_matkul" class="form-control" value="{{ is_null ($matkul) ? '' : $matkul->kode_matkul }}" placeholder="Tambahkan Kode Matkul">
                            </div>
                            <div class="col">
                                <label for="nama_matkul">Nama Matkul</label>
                                <input type="text" name="nama_matkul" class="form-control" value="{{ is_null ($matkul) ? '' : $matkul->nama_matkul }}" placeholder="Tambahkan Nama Matkul">
                            </div>
                            <div class="col">
                                <label for="sks">SKS</label>
                                <input type="number" min="0" name="sks" class="form-control" value="{{ is_null ($matkul) ? '' : $matkul->sks }}" placeholder="Tambahkan SKS">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <a href="{{ route('matkul') }}" class="btn btn-md btn-danger">Batal</a>
                                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
