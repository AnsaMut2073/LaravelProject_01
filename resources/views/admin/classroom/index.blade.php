<x-admin.layout>
    <div class="p-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Data Classroom</h1>

        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Name</th>
                        <th scope="col" class="px-4 py-3">Major</th>
                        <th scope="col" class="px-4 py-3">Students</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($classrooms as $index => $item)
                        <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                            <td class="px-4 py-3">{{ $item->major }}</td>
                            <td class="px-4 py-3">
                                @foreach ($item->students as $student)
                                    {{ $student->name }} <br>
                                @endforeach
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-3 text-center">Data kosong.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
