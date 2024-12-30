<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset='utf-8'/>
<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
<title>{{ $title }} - controle de séries</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }} ">
</head>
<body>

<div class="container">

<h1>{{ $title }}</h1>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


	{{ $slot }}
	
</div>
</body>
</html>