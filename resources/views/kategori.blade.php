@extends('layouts.main')

@section('content')
<div class="p-3" style="display: flex; justify-content: space-between;">
  <h1>
    Kategori
  </h1>
  <a href="/kategori/create" style="align-self: center">Tambah</a>
</div>

<div class="row" style="display: flex; justify-content: flex-end;">
  <div class="col-md-4">
    <form action="/kategori">
      <div class="input-group input-group-sm mb-3">
        <select class="form-select" name="kategori_status">
          <option value="" <?php if(request('kategori_status')=='') echo 'selected'; ?> >Semua</option>
          <option value="1" <?php if(request('kategori_status')=='1') echo 'selected'; ?>>Aktif</option>
          <option value="2" <?php if(request('kategori_status')=='2') echo 'selected'; ?>>Tidak Aktif</option>
        </select>
        <input type="text"  class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
     <?php $n=1; ?>
    @foreach ($data as $d)
    <tr>
      <th scope="row">{{ $n; }}</th>
      <td>{{ $d['nama'] }}</td>
      <td>{{ $d['deskripsi'] }}</td>
      <td>{{ $d->kategori_status['nama'] }}</td>
      <td>
        <a href="/kategori/detail/{{ $d['id'] }}">Detail</a>
        <a href="/kategori/{{ $d['id'] }}/edit">Ubah</a>
        <a href="/kategori/gantistatus/">
          {{
            ($d['status_id'] == '1') ? 'Tidak Aktif' : 'Aktif'
          }}
        </a>
      </td>
    </tr>
    <?php $n++; ?>
    @endforeach
  </tbody>
</table>
@endsection