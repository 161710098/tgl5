@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Edit Data Siswa
          <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
          </div>
        </div>
        <div class="panel-body">
          <form action="{{ route('siswa.update',$siswa->id) }}" method="post" >
            <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}




              <div class="form-group {{ $errors->has('a') ? ' has-error' : '' }}">
              <label class="control-label">Nama</label>  
              <input type="text" name="a" value="{{ $siswa->nama_siswa }}" class="form-control"  required>
              @if ($errors->has('a'))a
              <span class="help-block">
              <strong>{{ $errors->first('a') }}</strong>
              </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('nama_kelas') ? ' has-error' : '' }}">
              <label class="control-label">Kelas</label>  
              <input type="text" name="b" value="{{ $siswa->kelas->nama_kelas }}" class="form-control"  required>
              @if ($errors->has('nama_kelas'))nama_kelas
              <span class="help-block">
              <strong>{{ $errors->first('nama_kelas') }}</strong>
              </span>
              @endif
            </div>


 
            <div class="form-group {{ $errors->has('c') ? ' has-error' : '' }}">
              <label class="control-label">NIS</label>  
              <input type="text" name="c" value="{{ $siswa->nis }}" class="form-control"  required>
              @if ($errors->has('c'))c
              <span class="help-block">
              <strong>{{ $errors->first('c') }}</strong>
              </span>
              @endif
            </div>

            <div class="form-group {{ $errors->has('d') ? ' has-error' : '' }}">
              <label class="control-label">Alamat</label>  
              <input type="text" name="d" value="{{ $siswa->alamat }}" class="form-control"  required>
              @if ($errors->has('d'))d
              <span class="help-block">
              <strong>{{ $errors->first('d') }}</strong>
              </span>
              @endif
            </div>

            <div class="form-group {{ $errors->has('e') ? ' has-error' : '' }}">
              <label class="control-label">No HP</label>  
              <input type="text" name="e" value="{{ $siswa->no_hp }}" class="form-control"  required>
              @if ($errors->has('e'))e
              <span class="help-block">
              <strong>{{ $errors->first('e') }}</strong>
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