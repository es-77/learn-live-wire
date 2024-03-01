<div>
    here is data passs into commponent
    {{-- @forelse ($employeeInfo as $employee)
        <p>{{ $employee['emp_name'] }}</p>
    @empty
        <p>no data found</p>
    @endforelse --}}
    @forelse ($userDetails as $user)
        <p>{{ $user->name }}</p>
    @empty
        <p>no data found</p>
    @endforelse
    <button wire:click="createUser">create User</button>
</div>
