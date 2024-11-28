<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
    @vite('resources/css/app.css') <!-- Include Tailwind CSS if using -->
    <style>
        .action-buttons button {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Company Details</h1>

        <!-- Add Company Button -->
        <a href="{{ route('add_company') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-4 inline-block">
            Add Company
        </a>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Address</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Open Time</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Close Time</th>
                </tr>
            </thead>
            <tbody>
                @forelse($company as $company)
                    <tr class="odd:bg-white even:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $company->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $company->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $company->address }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $company->open_time }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $company->close_time }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center border border-gray-300 px-4 py-2">No company found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
