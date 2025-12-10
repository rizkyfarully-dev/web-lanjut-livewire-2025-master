@props([
  'role_id' => 1,
  'name' => '',
  'email' => '',
])


<div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-200 p-4 flex flex-col items-center">
    @if ($role_id == 1)    
        <img
            class="h-16 w-16 rounded-full object-cover mb-2"
            src="{{ URL::asset('images/user.png') }}"
            alt="{{ $name }}"
        >
    @elseif ($role_id == 2)
        <img
            class="h-16 w-16 rounded-full object-cover mb-2"
            src="{{ URL::asset('images/admin.png') }}"
            alt="{{ $name }}"
        >
    @else
        <img
            class="h-16 w-16 rounded-full object-cover mb-2"
            src="{{ URL::asset('images/manager.png') }}"
            alt="{{ $name }}"
        >
    @endif
    <div class="text-center">
        <p class="text-sm font-semibold text-gray-900">{{ $name }}</p>
        @if (!empty($email))
            <p class="text-sm text-gray-500">{{ $email }}</p>
        @endif
    </div>
</div>