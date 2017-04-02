<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		@section('stylesheet')
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
    		<link rel="stylesheet" href="/css/animate.css" charset="utf-8">
    		<link rel="stylesheet" href="/css/hover.css" charset="utf-8">
    		<link rel="stylesheet" href="/css/main.css" charset="utf-8">
		@show
	</head>


	<body>
		@yield('content')


		{{-- Javascript Files --}}
		@section('javascript')
			<script src="/js/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
			<script src="/js/wow.min.js"></script>
			<script src="/js/main.js"></script>
			<script>
				new WOW().init();

			</script>
		@show
	</body>
</html>
