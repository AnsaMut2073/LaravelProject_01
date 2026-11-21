<x-admin.layout>
    <div class="p-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Data Teacher</h1>
        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Guru</th>
                        <th class="px-4 py-3">NIP</th>
                        <th class="px-4 py-3">Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teachers as $index => $item)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                            <td class="px-4 py-3">{{ $item->nip }}</td>
                            <td class="px-4 py-3">{{ $item->subject->name ?? '-' }}</td> {{-- Nampilin nama mapel --}}
                        </tr>
                    @empty
                        <tr><td colspan="4" class="px-4 py-3 text-center">Data kosong.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
