<div>
    <p>event-communication-components-user-list</p>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    {{ $users->links() }}
</div>
