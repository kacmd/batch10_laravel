@extends('template')

@section('content')

<div class="container">
<table cellpadding="10" cellspacing="0">
	<thead>
		<tr>
			<th>No</th>
			<th>Category Name</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	@foreach($categories as $row)
	<tbody>
		<tr>
			<td>{{$row->id}}</td>
			<td>{{$row->name}}</td>
			<td><a href="{{route('category.edit',$row->id)}}" class="btn badge-warning">Edit</a></td>
			<td>
				<form method="post" action="{{route('category.destroy',$row->id)}}">
					
					@csrf
          			@method('DELETE')
          		<input type="submit" class="btn btn-secondary" value="Delete" >
				</form>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
</div>
@endsection