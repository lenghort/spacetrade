<x-site-layout title="{{$shop->name}}">

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
    
</x-site-layout>