<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- login css -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Sign in</title>
</head>

<body>
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <div class="form1">
            @csrf
            <input class="un" type="email" name="email" align="center" placeholder="Email">
            <input class="pass" type="password" name="password" align="center" placeholder="Password">
            <button class="submit" align="center" onclick="submit()">Sign in</button>
        </div>
    </div>
    
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Logic -->
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>