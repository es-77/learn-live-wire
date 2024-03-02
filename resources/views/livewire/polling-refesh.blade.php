<div wire:poll>
    <p>polling-refesh</p>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    {{ $users->links() }}
</div>
