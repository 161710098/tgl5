@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Absen
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absen.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tgl_absen') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Absen</label>	
			  			<input type="date" name="tgl_absen" class="form-control"  required>
			  			@if ($errors->has('tgl_absen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_absen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		<div class="form-group {{ $errors->has('siswa_id') ? ' has-error' : '' }}">
			  			<label class="control-label"> Nama Siswa</label>	
			  			<select name = "siswa_id" class="form-control">
			  				@foreach ($p as $data)
			  				<option value="{{ $data->id}}">{{$data->nama }}</option>
			  				@endforeach
			  			</select>
			  			
			  			@if ($errors->has('siswa_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('siswa_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="radio" name="keterangan" class="form"  value="Sakit">Sakit
			  			<input type="radio" name="keterangan" class="form"  value="Izin">Izin
			  			<input type="radio" name="keterangan" class="form"  value="Alfa">Alfa
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection