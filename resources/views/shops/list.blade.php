<html>

<head>
    <title>List of shops</title>
</head>

<body>
    <h1>
        List Of Shops
    </h1>
    <ul>
        
        @foreach($shops as $shop)
            <li> <a href="/shops/{{$shop}}">{{ $shop }}</a></li>
        @endforeach

    </ul>
</body>

</html>