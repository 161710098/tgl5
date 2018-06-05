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
			  			<label class="control-label">NIS</label>	
			  			<input type="text" name="nis" class="form-control" value="{{ $k->nis }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $k->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis Kelamin</label>	
			  			<input type="text" name="jenis_kelamin" class="form-control" value="{{ $k->jenis_kelamin }}"  readonly>
			  		</div>jenis_kelamin

			  		<div class="form-group">
			  			<label class="control-label">Id Kelas</label>	
			  			<input type="text" name="id_kelas" class="form-control" value="{{ $k->id_kelas }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection