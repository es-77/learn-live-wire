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
        {{-- @livewire('file-upload') --}}
        {{-- @livewire('loading-state') --}}
        {{-- @livewire('event-communication-components') --}}
        {{-- <div class="flex">
            <div class="w-2/4">
                @livewire('event-communication-components-user-list')
            </div>
            <div class="w-2/4">
                @livewire('event-communication-components-user-create')
            </div>
        </div> --}}
        {{-- @livewire('polling-refesh') --}}
        {{-- @livewire('lazy-loading-skeletonloader', ['lazy' => true]) --}}
        {{-- @livewire('lazy-loading-skeletonloader', ['lazy' => true]) --}} {{-- not workking --}}
        {{-- @livewire('livepropertyupdate') --}}
        @livewire('pass-datato-components-mount', ['name' => 'John Doe', 'age' => 35])
    </div>
    @livewireScripts()
</body>

</html>
