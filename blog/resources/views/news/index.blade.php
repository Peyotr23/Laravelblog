@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	@foreach($data as $post)
		<a style="color: black;" href="news/{{$post->id}}">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-headling">{{$post->name}}</div>
				<div class="panel-body">
					{{$post->content}}
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection