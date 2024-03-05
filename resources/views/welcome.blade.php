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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        {{-- @livewire('pass-datato-components-mount', ['name' => 'John Doe', 'age' => 35]) --}}
        {{-- @livewire('computed-properties') --}}
        @livewire('sweet-alerts')

    </div>
    @livewireScripts()
    {{-- <script src="{{ asset('js/model.js') }}"></script> --}}

</body>

{{-- <script src="{{ asset('JS/model.js') }}"></script>
<script src="./resources/js/model.js"></script> --}}


</html>
