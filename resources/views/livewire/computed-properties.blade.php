<div>
    <p>computed-properties</p>
    @foreach ($this->users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</div>
