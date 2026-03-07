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
            <li> <a href="{{ route('shops.show', $shop->id) }}">{{ $shop->name }}</a></li>
        @endforeach

    </ul>
</body>

</html>