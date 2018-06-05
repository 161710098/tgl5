@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Kelas
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kelas.update',$kelas->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" value="{{ $kelas->kelas }}" class="form-control"  required>
			  			@if ($errors->has('kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kelas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jurusan</label>	
			  			<input type="text" name="jurusan" value="{{ $kelas->jurusan }}" class="form-control"  required>
			  			@if ($errors->has('jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jurusan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('wali_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Wali Kelas</label>	
			  			<input type="text" name="wali_kelas" value="{{ $kelas->wali_kelas }}" class="form-control"  required>
			  			@if ($errors->has('wali_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('wali_kelas') }}</strong>
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