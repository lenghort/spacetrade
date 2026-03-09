<html>
<head>
    <title>Details of {{$shop->name}}</title>
</head>

<body>
<h1>Details of {{$shop->name}}</h1>
<p><em>{{$shop->address}}</em></p>
<p>{{$shop->decription}}</p>

<hr/>
<h2>Reviews</h2>
<ul>
    @foreach($shop->reviews as $review)
        <li>
            <p>
            <strong>{{ $review->author->name }}:</strong>
            {{$review->comment}}
            </p>
        </li>
    @endforeach
</ul>

<a href="{{ route('shops.index') }}">Back to the list of shop</a>

</body>
</html>