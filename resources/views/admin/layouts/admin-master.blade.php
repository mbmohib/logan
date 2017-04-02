<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <!-- Latest compiled and minified CSS -->
        @section('stylesheet')

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui-calendar/0.0.7/calendar.min.css">
    		<link rel="stylesheet" href="/css/animate.css" charset="utf-8">
    		<link rel="stylesheet" href="/css/hover.css" charset="utf-8">
            <link rel="stylesheet" href="/css/admin.css">

        @show



    </head>
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <body>
        {{-- <div class="ui bottom attached segment pushable"> --}}
            @yield('content')
        {{-- </div> --}}




	{{-- Javascript Files --}}
    @section('javascript')
    	<script src="/js/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui-calendar/0.0.7/calendar.min.js"></script>
    	<script src="/js/admin.js"></script>
    @show
	</body>

</html>
