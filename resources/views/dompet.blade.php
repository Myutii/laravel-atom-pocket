@extends('layouts.main')

@section('content')
<div class="p-3" style="display: flex; justify-content: space-between;">
  <h1>
    Dompet
  </h1>
  <a href="/dompet/create" style="align-self: center">Tambah</a>
</div>

<div class="row" style="display: flex; justify-content: flex-end;">
  <div class="col-md-4">
    <form action="/dompet">
      <div class="input-group input-group-sm mb-3">
        <select class="form-select" name="dompet_status">
          <option value="" <?php if(request('dompet_status')=='') echo 'selected'; ?> >Semua</option>
          <option value="1" <?php if(request('dompet_status')=='1') echo 'selected'; ?>>Aktif</option>
          <option value="2" <?php if(request('dompet_status')=='2') echo 'selected'; ?>>Tidak Aktif</option>
        </select>
        <input type="text"  class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>
@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    A simple success alert—check it out!
  </div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Referensi</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php $n=1; ?>
    @foreach ($data as $d)
        <tr>
      <th scope="row"><?= $n; ?></th>
      <td>{{ $d['nama'] }}</td>
      <td>{{ $d['referensi'] }}</td>
      <td>{{ $d['deskripsi'] }}</td>
      <td>{{ $d->dompet_status['nama'] }}</td>
      <td>
        <a href="/dompet/detail/{{ $d['id'] }}">Detail</a>
        <a href="/dompet/{{ $d['id'] }}/edit">Ubah</a>
        <a href="">
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
<div class="d-flex justify-content-end">
  {{ $data->links() }}
</div>

@endsection