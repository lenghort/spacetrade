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
            <li>{{ $shop }}</li>
        @endforeach

        <li>shop 1</li>
        <li>shop 2</li>
        <li>shop 3</li>
    </ul>
</body>

</html>