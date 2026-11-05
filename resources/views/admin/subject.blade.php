<x-admin.layout>
    <div class="p-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Data Subject</h1>
        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Mapel</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subjects as $index => $item)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="2" class="px-4 py-3 text-center">Data kosong.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
