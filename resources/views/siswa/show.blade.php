@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Siswa
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="a" class="form-control" value="{{ $siswa->nama_siswa }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="b" class="form-control" value="{{ $siswa->id_kelas }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">NIS</label>	
			  			<input type="text" name="c" class="form-control" value="{{ $siswa->nis }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="d" class="form-control" value="{{ $siswa->alamat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">No HP</label>	
			  			<input type="text" name="e" class="form-control" value="{{ $siswa->no_hp }}"  readonly>
			  		</div>


			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection