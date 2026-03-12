<html>

<head>
    <title>List of shops</title>
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

    {{ $slot }}

</div>
</body>
</html>