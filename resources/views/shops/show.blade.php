<html>
<head>
    <title>Details of {{$shop->name}}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-purple-200">

<div class="bg-purple-900 text-white">
    <ul class="flex space-x-3 p-3">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('shops.index') }}">Shop</a></li>
    </ul>
</div>

<div class="p-5">

    <h1 class="text-2xl font-bold">Details of {{$shop->name}}</h1>
    <p><em>{{$shop->address}}</em></p>
    <p>{{$shop->decription}}</p>

    <div class="mt-3 mb-3">
        <h2 class="inline text-xl font-bold color-black bg-purple-500 mt-3 mb-3">Foods Present</h2>
        <ul class="list-disc list-inside">
            @foreach ($shop->foods as $food)
                <li>
                    {{ $food->name }}
                </li>
                
            @endforeach
        </ul>
    </div>

    <div class="mt-3 mb-3">
        <h2 class="inline text-xl font-bold color-black bg-purple-500 mt-3 mb-3">Reviews</h2>
        <ul class="list-disc list-inside">
            @foreach($shop->reviews as $review)
                <li>
                    <strong>{{ $review->author->name }}:</strong>
                    {{$review->comment}}
                </li>
            @endforeach
        </ul>
    </div>

    <a href="{{ route('shops.index') }}">Back to the list of shop</a>
</div>
</body>
</html>