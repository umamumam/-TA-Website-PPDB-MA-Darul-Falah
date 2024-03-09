@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('abs.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>nama</th>
				<th>nik</th>
				<th>content</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($abs as $ab)

				<tr>
					<td>{{ $ab->id }}</td>
					<td>{{ $ab->title }}</td>
					<td>{{ $ab->nama }}</td>
					<td>{{ $ab->nik }}</td>
					<td>{{ $ab->content }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('abs.show', [$ab->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('abs.edit', [$ab->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['abs.destroy', $ab->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
