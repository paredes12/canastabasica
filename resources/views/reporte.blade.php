<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach($categoria as $datos)
		<br/>
		{{$datos->nombreCat}}
	@endforeach
</body>
</html>