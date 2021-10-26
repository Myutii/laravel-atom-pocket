@extends('layouts.main')

@section('content')
<h1>
	Detail Dompet
</h1>
<div class="container">
	<div class="card col p-3">
		<table>
			<tr>
				<td>
					Nama 
				</td>
				<td>
					: 
				</td>
				<td>
					{{ $data->nama }}
				</td>
			</tr>
			<tr>
				<td>
					Referensi
				</td>
				<td>
					: 
				</td>
				<td>
					{{ $data->referensi }}
				</td>
			</tr>
			<tr>
				<td>
					Deskripsi
				</td>
				<td>
					: 
				</td>
				<td>
					{{ $data->deskripsi }}
				</td>
			</tr>
			<tr>
				<td>
					Status
				</td>
				<td>
					: 
				</td>
				<td>
					{{ $data->dompet_status->nama }}
				</td>
			</tr>
		</table>
	</div>
</div>
@endsection