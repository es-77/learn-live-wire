<div>
    <div wire:loading>
        @include('placeholder')
    </div>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</div>
