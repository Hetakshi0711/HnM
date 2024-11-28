<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Form</title>
    @vite('resources/css/app.css') <!-- Include Tailwind CSS if using -->
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Create Company</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('add_company') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block font-medium">Company Name</label>
                <input type="text" id="name" name="name" class="border rounded px-3 py-2 w-full" value="{{ old('name') }}">
                @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="address" class="block font-medium">Address</label>
                <input type="text" id="address" name="address" class="border rounded px-3 py-2 w-full" value="{{ old('address') }}">
                @error('address') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="open_time" class="block font-medium">Company Open Time</label>
                <input type="time" id="open_time" name="open_time" class="border rounded px-3 py-2 w-full" value="{{ old('open_time') }}">
                @error('open_time') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="close_time" class="block font-medium">Company Close Time</label>
                <input type="time" id="close_time" name="close_time" class="border rounded px-3 py-2 w-full" value="{{ old('close_time') }}">
                @error('close_time') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
