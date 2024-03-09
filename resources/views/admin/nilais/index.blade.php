@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Data Nilai Raport Siswa Baru</h1>
<br>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('nilais.create') }}" class="btn btn-info">Create</a></div>
	<div style="text-align: right; margin-bottom: 20px">
		<a class="btn btn-success" href="/nilais-export">Export Excel</a>
		
	</div>
	<div class="table-responsive" style="overflow-x: auto;">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nisn</th>
				<th>nama_peserta</th>
				<th>akidah</th>
				<th>hadis</th>
				<th>fikih</th>
				<th>bhs_arab</th>
				<th>bhs_inggris</th>
				<th>bhs_indonesia</th>
				<th>matematika</th>
				<th>ipa</th>
				<th>ips</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($nilais as $nilai)

				<tr>
					<td>{{ $nilai->id }}</td>
					<td>{{ $nilai->nisn }}</td>
					<td>{{ $nilai->nama_peserta }}</td>
					<td>{{ $nilai->akidah }}</td>
					<td>{{ $nilai->hadis }}</td>
					<td>{{ $nilai->fikih }}</td>
					<td>{{ $nilai->bhs_arab }}</td>
					<td>{{ $nilai->bhs_inggris }}</td>
					<td>{{ $nilai->bhs_indonesia }}</td>
					<td>{{ $nilai->matematika }}</td>
					<td>{{ $nilai->ipa }}</td>
					<td>{{ $nilai->ips }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('nilais.show', [$nilai->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('nilais.edit', [$nilai->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['nilais.destroy', $nilai->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
</div>
@endsection
