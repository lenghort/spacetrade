<nav class="bg-purple-900 text-white">

    <div class="max-7xl mx-auto flex justify-between item-center">
        <ul class="flex space-x-3 p-3">
            @foreach($menu_items as $item)
                <li><a href="{{$item['url']}}">{{$item['name']}}</a></li>
            @endforeach
        </ul>

    
        @if (Route::has('login'))
                    <div class="flex items-center justify-end gap-4">
                        @auth
                            <a
                                href="{{ route('dashboard') }}"
                                class="">
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>





</nav>