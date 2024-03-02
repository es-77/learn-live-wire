<div>
    <p>live search</p>
    {{-- <input type="text" name="name" id="name" wire:model="name"
        class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" /> --}}
    {{-- <input type="text" name="name" id="name" wire:model.live="name"
        class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" /> --}}
    {{-- <input type="text" name="name" id="name" wire:model.live.blur="name"
        class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" /> --}}
    <input type="text" name="name" id="name" wire:model.live.debounce.500ms="name"
        class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" />
    <br>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</div>
