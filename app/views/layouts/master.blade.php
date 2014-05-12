<!DOCTYPE html>
<html>
<head>
	<title>My To Do App</title>
	<link rel="stylesheet"  href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style type="text/css">

	#taskList{
		float: left;
		width: 45%;
	}

	#taskForm{

		float: right;
		width: 45%;

	}

	.completed{
		background: #333;
	}

	#taskUpdateForm{
		position: absolute;
		top: 1em;
		right: 1em;
	}

	</style>
</head>
<body>
	<div class="container">

		@yield('content')

	</div>
</body>
</html>