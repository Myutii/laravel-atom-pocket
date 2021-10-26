@extends('layouts.main')

@section('content')
<h1>
  Ubah Dompet
</h1>
<div class="container">
  <div class="card col p-3">
    <form class="row g-3" action="/dompet/posts/{{ $dompet->id }}" method="post">
    @method('put')
    	@csrf
	  <div class="col-md-6">
	    <label for="input" class="form-label">Nama</label>
	    <input type="hidden" name="id" value="{{ $dompet->id }}">
	    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="input" name="nama" value="{{ $dompet->nama }}">
	    @error('nama')
	    <div class="invalid-feedback">
	    	{{ $message }}
	    </div>
	    @enderror
	  </div>
	  <div class="col-md-6">
	    <label for="inputref" class="form-label">Referensi</label>
	    <input type="text" class="form-control" id="inputref" name="referensi" value="{{ $dompet->referensi }}">
	  </div>
	  <div class="col-md-6">
	    <label for="inputdes" class="form-label">Deskripsi</label>
	    <input type="text" class="form-control" id="inputdes" name="deskripsi" value="{{ $dompet->deskripsi }}">
	  </div>
	  <div class="col-md-6">
	    <label for="inputstatus" class="form-label">Status</label>
	    <select id="inputstatus" class="form-select" name="status_id">
	      @foreach($status as $s)
	       @if($dompet->status_id == $s->id)
	      <option value="{{ $s->id }}" selected>{{ $s->nama }}</option>
	       @else
	      <option value="{{ $s->id }}">{{ $s->nama }}</option>
	       @endif
	      @endforeach
	    </select>
	  </div>
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Ubah</button>
	  </div>
	</form>
  </div>
</div>
@endsection