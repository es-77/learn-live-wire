<div>
    <p>event-communication-components-user-create</p>
    @if (session('message'))
        <span class="text-sucess text-green-600/50">{{ session('message') }}</span>
    @endif
    <form wire:submit.prevent='createUser'>
        <input
            class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
            placeholder="Search for anything..." type="text" wire:model="name" id="name" name="name"
            placeholder="Enter your name" />
        @error('name')
            <span class="text-danger text-red-600/50">{{ $message }}</span>
        @enderror
        <br>
        <input
            class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
            placeholder="Search for anything..." type="email" wire:model="email" id="email" name="email"
            placeholder="Enter your email" />
        @error('email')
            <span class="text-danger text-red-600/50">{{ $message }}</span>
        @enderror
        <br>
        <input
            class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
            placeholder="Search for anything..." type="password" wire:model="password" id="password" name="password"
            placeholder="Enter your password" />
        @error('password')
            <span class="text-danger text-red-600/50">{{ $message }}</span>
        @enderror
        <br>
        <button type="submit" class="adu ajp ard arp avz awf bag bbm bir box boy bpa bph">Submit</button>
    </form>
</div>
