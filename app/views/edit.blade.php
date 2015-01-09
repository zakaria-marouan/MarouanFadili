<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<h1>Editing Comments</h1>

 {{ Form::open(array('url'=>'critiques/update', 'class' => 'inline', 'method' => 'PUT')) }}


	<p>
		{{ Form::label('title', 'Title:') }}<br />
		{{ Form::text('title', $comments->title) }}
	</p>

	<p>
		{{ Form::label('text', 'text') }}<br />
		{{ Form::textarea('text', $comments->text) }}
	</p>
		
	{{ Form::hidden('id', $comments->id) }}

	<p>{{ Form::submit('Updates Comments') }}</p>

	{{ Form::close() }}

</body>
</html>