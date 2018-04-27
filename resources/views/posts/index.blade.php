@extends('master')
@section('content')		


		<h2>All Post</h2>
		@foreach($parbhez as $karim)
			<div class="card mb-4">
				<div class="card-body">
					<h2>
						<a href="{{route('posts.show',$karim->id)}}">{{$karim->title}}</a>
						<a href="{{route('posts.edit',$karim->id)}}" class="btn btn-primary">Edit</a>
						<form onsubmit="return confirm('Are you sure want to delete this post???')" class="d-inline-block" action="{{route('posts.destroy',$karim->id)}}" method="post">
							@csrf
							@method('delete')
							<button class="btn btn-danger">Delete</button>
						</form>
					</h2>
				</div>
			</div>
		@endforeach
	<div class="mt-2">
		{{$parbhez->links()}}
	</div>
		
@endsection		