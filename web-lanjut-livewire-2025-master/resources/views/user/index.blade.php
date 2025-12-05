<x-layouts.app :title="__('Data Users')">
    <div class="grid grid-cols-6 gap-3">
        @foreach ($users->items() as $item)
            <x-user-card
                :role_id="$item->role_id"
                :name="$item->name"
                :email="$item->email"
            />
        @endforeach
        <div class="col-span-6 w-full">
            <div class="w-full flex justify-center">
                {{ $users->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
</x-layouts.app>