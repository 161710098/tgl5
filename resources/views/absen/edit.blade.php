@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Absensi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-bodyabsen			  	<form action="{{ route('absen.update',$absen->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tgl_absen') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Absen</label>	
			  			<input type="text" name="tgl_absen" value="{{ $absen->tgl_absen }}" class="form-control"  required>
			  			@if ($errors->has('tgl_absen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_absen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" value="{{ $absen->kelas }}" class="form-control"  required>
			  			@if ($errors->has('kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kelas') }}absen</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('siswa_id')absen ? ' has-error' : '' }}">
			  			<label class="control-label">Siswa</label>	
			  			<input type="text" name="siswa_id" value="{{ $absen->siswa_id }}" class="form-control"  required>
			  			@if ($errors->has('siswa_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('siswa_id') }}</strong>
                            </span>
                        @endif
			  		</div>

<div class="form-group {{ $errors->has('id_keterangan')absen ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="id_keterangan" value="{{ $absen->id_keterangan }}" class="form-control"  required>
			  			@if ($errors->has('id_keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_keterangan') }}</strong>
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