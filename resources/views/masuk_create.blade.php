@extends('layouts.main')

@section('content')
<h1>
  Tambah Dompet
</h1>
<div class="container">
  <div class="card col p-3">
    <form class="row g-3" action="/dompet/posts" method="post">
    	@csrf
	  <div class="col-md-3">
	    <label for="input" class="form-label">Kode</label>
	    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="input" name="nama" value="{{ old('nama') }}">
	    @error('nama')
	    <div class="invalid-feedback">
	    	{{ $message }}
	    </div>
	    @enderror
	  </div>
	  <div class="col-md-3">
	    <label for="inputref" class="form-label">Tanggal</label>
	    <input type="text" class="form-control" id="inputref" name="referensi" value="{{ old('referensi') }}"> ?>
	  </div>
	  <div class="col-md-3">
	    <label for="inputstatus" class="form-label">Status</label>
	    <select id="inputstatus" class="form-select" name="status_id">
	      @foreach($status as $s)
	       @if(old('status_id') == $s->d)
	      <option value="{{ $s->id }}" >{{ $s->nama }}</option>
	       @else
	      <option value="{{ $s->id }}" selected>{{ $s->nama }}</option>
	       @endif
	      @endforeach
	    </select>
	  </div>
	  <div class="col-md-3">
	    <label for="inputstatus" class="form-label">Status</label>
	    <select id="inputstatus" class="form-select" name="status_id">
	      @foreach($status as $s)
	       @if(old('status_id') == $s->d)
	      <option value="{{ $s->id }}" >{{ $s->nama }}</option>
	       @else
	      <option value="{{ $s->id }}" selected>{{ $s->nama }}</option>
	       @endif
	      @endforeach
	    </select>
	  </div>
	  <div class="col-md-6">
	    <label for="inputdes" class="form-label">Deskripsi</label>
	    <input type="text" class="form-control" id="inputdes" name="deskripsi" value="{{ old('deskripsi') }}">
	  </div>
	  <div class="col-md-6">
	    <label for="inputdes" class="form-label">Deskripsi</label>
	    <input type="text" class="form-control" id="inputdes" name="deskripsi" value="{{ old('deskripsi') }}">
	  </div>
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Tambah</button>
	  </div>
	</form>
  </div>
</div>
@endsection