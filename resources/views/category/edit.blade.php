@extends('template')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
		<form method="post" action="{{route('category.update',$category->id)}}" >
      	@csrf
        @method('PUT')
        <h3>Category Edit Form</h3>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="
        {{$category->name}}">
			</div>

			<div class="form-group">
				<input type="submit" name="btnsubmit" value="Update" class="btn btn-info">
	      	</div>
	  </form>
  </div>
</div>
</div>

  @endsection