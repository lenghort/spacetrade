<x-site-layout>

    <ul class="list-disc list-inside">
    @foreach($foods as $food)
        <li>
            <a href="{{ route('food.show', $food->id) }}">
            {{$food->name}}
            </a>
        </li>
    @endforeach
    </ul>
    
    </x-site-layout>