@if(session('message'))
    <div class="p-2 bg-green-400 text-white">
        {{ session('message') }}
    </div>
@endif

<div class="md:flex">
    <div class="md:w-1/2 p-3">
        @foreach($managers as $manager)
        <a href="{{ route('showManagerOnboardings', ['id' => $manager->id]) }}">
            <div class="md:flex md:flex-wrap content-center  p-3 border rounded-lg mb-3 ">
                <div class="my-auto ">
                    ID: {{ $manager->id }}
                </div>
                <div class="text-center m-auto">
                    {{ $manager->name }}
                </div>
                <div class="text-center m-auto">
                    {{ $manager->email }}
                </div>
                <form wire:submit.prevent="deleteManager({{ $manager->id }})" class="text-right ml-auto">
                    <button
                        class="bg-red-400 text-white rounded-lg p-1 focus:outline-none hover:bg-red-500 active:bg-red-600">Delete</button>
                </form>
            </div>
        </a>
        @endforeach
    </div>
    <div class="md:w-1/2 p-3">
        <form wire:submit.prevent="addManager">
            <div class="flex">
                <h3 class="text-4xl m-auto">Add New Manager</h3>
            </div>
            <div class="md:flex p-2">
                <div class="md:w-1/2 md:mr-3">
                    <div>
                        <label for="name">Name</label>
                    </div>
                    <div>
                        <input wire:model="name" class="border rounded-lg w-full" type="text" name="name">
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div>
                        <label for="name">Email</label>
                    </div>
                    <div>
                        <input wire:model="email" class="border rounded-lg w-full" type="email" name="email">
                    </div>
                </div>
            </div>
            <div class="p-2 flex">
                <button
                    class="m-auto p-2 bg-green-400 rounded-lg w-1/2 text-white focus:outline-none hover:bg-green-500 active:bg-green-600">Add</button>
            </div>
        </form>
    </div>
</div>
