<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @livewireStyles
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div>
        {{-- @livewire('clicker') --}}
        {{-- @livewire('pass-data-into-view') --}}
        {{-- @livewire('databinding') --}}
        {{-- @livewire('validation-apply') --}}
        {{-- @livewire('runtimevalidation-apply') --}}
        {{-- @livewire('flash-message') --}}
        {{-- @livewire('pagination') --}}
        @livewire('file-upload')
    </div>
    @livewireScripts()
</body>

</html>
