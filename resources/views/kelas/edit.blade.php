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


             <div class="form-group {{ $errors->has('nama_jur') ? ' has-error' : '' }}">
              <label class="control-label">Jurusan</label>  
              <input type="text" name="nama_jur" value="{{ $kelas->jurusan->nama_jur }}" class="form-control"  required>
              @if ($errors->has('nama_jur'))nama_jur
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jur') }}</strong>
                            </span>
                        @endif
            </div>


            <div class="form-group {{ $errors->has('nama_kelas') ? ' has-error' : '' }}">
              <label class="control-label">Nama Kelas</label>  
              <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" class="form-control"  required>
              @if ($errors->has('nama_kelas'))nama_kelas
              <span class="help-block">
               <strong>{{ $errors->first('nama_kelas') }}</strong>
                            </span>
               @endif
            </div>

            <div class="form-group {{ $errors->has('walikelas') ? ' has-error' : '' }}">
              <label class="control-label">Wali Kelas</label>  
              <input type="text" name="walikelas" value="{{ $kelas->walikelas }}" class="form-control"  required>
              @if ($errors->has('walikelas'))walikelas
                            <span class="help-block">
                                <strong>{{ $errors->first('walikelas') }}</strong>
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