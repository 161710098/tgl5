@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Absen Siswa 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Tanggal Absen</label>	
			  			<input type="text" name="tgl_absen" class="form-control" value="{{ $absen->tgl_absen }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $absen->kelas }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Siswa</label>	
			  			<input type="text" name="siswa" class="form-control" value="{{ $absen->siswa }}"  readonly>
			  		</div>jenis_kelamin

			  		<div class="form-group">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="id_keterangan" class="form-control" value="{{ $absen->id_keterangan }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection