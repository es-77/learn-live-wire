<div>
    <p>file upload in live wire</p>
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
        <div class="shrink-0">
            @if ($image)
                <img class="h-16 w-16 object-cover rounded-full" src="{{ $image->temporaryUrl() }}"
                    alt="Current profile photo" />
            @else
                <img class="h-16 w-16 object-cover rounded-full"
                    src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80"
                    alt="Current profile photo" />
            @endif
        </div>
        <label class="block">
            <span class="sr-only">Choose profile photo</span>
            <input type="file" id="image" name="image" wire:model="image"
                class="block w-full text-sm text-slate-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100
    " />
        </label>
        @error('file')
            <span class="text-danger text-red-600/50">{{ $message }}</span>
        @enderror
        <br>
        <button type="submit" class="adu ajp ard arp avz awf bag bbm bir box boy bpa bph">Submit</button>
    </form>
</div>
