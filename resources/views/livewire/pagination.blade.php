<div>
    <p>paginations</p>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    {{ $users->links() }}
</div>
