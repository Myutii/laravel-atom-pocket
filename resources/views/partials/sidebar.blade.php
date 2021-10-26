<div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 10%; min-width: 200px;">
    <ul class="nav nav-pills flex-column mb-auto">
      <ul class="btn-toggle-nav list-unstyled p-3">
        <li>
	      <a href="" class="link-dark rounded nav-link" data-bs-toggle="collapse" data-bs-target="#master-collapse" aria-expanded="false">
	        Master
	      </a>
	      <div class="collapse" id="master-collapse">
	        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
	          <li><a href="/dompet" class="nav-link {{ ($title === 'Dompet') ? 'active' : ''}} link-dark rounded">Dompet</a></li>
	          <li><a href="/kategori" class="nav-link {{ ($title === 'Kategori') ? 'active' : ''}} link-dark rounded">Kategori</a></li>
	        </ul>
	      </div>
	    </li>
	    <li>
	      <a href="" class="nav-link link-dark rounded" data-bs-toggle="collapse" data-bs-target="#kategori-collapse" aria-expanded="false">
	        Transaksi
	      </a>
	      <div class="collapse" id="kategori-collapse">
	        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
	          <li><a href="/in" class="nav-link {{ ($title === 'Dompet Masuk') ? 'active' : ''}} link-dark rounded">Dompet Masuk</a></li>
	          <li><a href="/out" class="nav-link {{ ($title === 'Dompet Keluar') ? 'active' : ''}} link-dark rounded">Dompet Keluar</a></li>
	        </ul>
	      </div>
	    </li>
	    <li><a href="/laporan" class="nav-link {{ ($title === 'Laporan') ? 'active' : ''}} link-dark rounded">Laporan</a></li>
      </ul>
    <hr>
  </div>