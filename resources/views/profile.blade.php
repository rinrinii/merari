@extends('layouts.app')

@section('title', 'My Profile')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-12">

    <h1 class="text-2xl font-bold mb-8">My Account</h1>

    @if(session('success'))
    <div class="mb-6 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
     @endif

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf

        <div class="flex items-center gap-6 mb-10">

            <!-- Profile Image -->
            <img id="avatarPreview" src="{{ $user->profile_photo ? asset('storage/'.$user->profile_photo) : asset('/images/profile-placeholder.jpg') }}"
                class="w-16 h-16 rounded-full object-cover border">

            <!-- Name + Upload -->
            <div>
                <h2 class="text-xl font-semibold">
                    {{ $user->name }}
                </h2>

                <label class="text-sm text-gray-500 cursor-pointer hover:underline">
                    Edit picture
                    <input type="file" name="profile_photo" id="avatarInput" class="hidden">
                </label>
            </div>

        </div>

        <div class="grid md:grid-cols-2 gap-6">

            @if ($errors->any())
            <div class="mb-6 p-3 bg-red-100 text-red-700 rounded">
                <ul class="text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div>
                <label class="text-sm">Name</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="text-sm">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="text-sm">Address</label>
                <input type="text" name="address" value="{{ old('address', $user->address) }}" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="text-sm">Phone Number</label>
                <input type="text" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="text-sm">Date of Birth</label>
                <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $user->date_of_birth) }}" class="w-full border rounded px-3 py-2">
            </div>

        </div>

        <div class="mt-8 flex items-center justify-between">

            <!-- Save form button -->
            <button type="submit"
                class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800">
                Save
            </button>

    </form>

            <!-- Logout form -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    type="submit"
                    class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600 transition">
                    Sign Out
                </button>
            </form>

        </div>

</div>

<script>
const avatarInput = document.getElementById('avatarInput');
const avatarPreview = document.getElementById('avatarPreview');

avatarInput.addEventListener('change', function () {

    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            avatarPreview.src = e.target.result;
        }

        reader.readAsDataURL(file);
    }
});
</script>

@endsection

