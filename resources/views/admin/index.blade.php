@extends('admin.includes.navbar')


@section('content')
<div class="container">
	<div class="col-md-12">

		<table class="table table-responsive"> 

		<th>SL</th>
		<th>Name</th>
		<th>Delete</th>
		
		@if($categories)
			@foreach($categories as $key=>$category)
				<tr> 
				<td>{{++ $key}}</td>
				<td>{{$category->cate_name}}</td>
				<td><a href="{{route('category.destroy',$category->id)}}">DELETE</a></td>
				
				</tr>
			@endforeach
		@endif
		

		</table>
    
    </div>
</div>
@endsection
