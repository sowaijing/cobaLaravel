@extends('layout/main')	
@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h3 class="mt-4">Daftar Mahasiswa</h3>

			<table class="table mt-2"  cellpadding="10" >
				<thead class="table-primary">
					<tr>
						<th >#</th>
						<th scope="col">Nama</th>
						<th scope="col">Nrp</th>
						<th scope="col">Email</th>
						<th scope="col">Jurusan</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($mahasiswa as $mhs)
					<tr class="table-light">
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$mhs -> name}}</td>
						<td>{{$mhs -> nrp}}</td>
						<td>{{$mhs -> email}}</td>
						<td>{{$mhs -> course}}</td>
						<td>
							<a href="" class="btn btn-outline-success btn-sm">edit</a>
							<a href="" class="btn btn-outline-danger btn-sm">delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
