<x-admin.layout>
    <div class="p-4">
        {{-- 1. HEADER & TOMBOL TAMBAH --}}
        <div class="flex items-center justify-between mb-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Data Subject</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">Kelola data mata pelajaran</p>
            </div>
            <button type="button" data-modal-target="createSubjectModal" data-modal-toggle="createSubjectModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                + Tambah Mapel
            </button>
        </div>

        {{-- 2. CARD WRAPPER --}}
        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            {{-- 3. TABEL --}}
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">No</th>
                            <th scope="col" class="px-4 py-3">Nama Mapel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subjects as $index => $item)
                            <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-4 py-3">{{ $index + 1 }}</td>
                                <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="px-4 py-6 text-center">Data kosong.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.subject.create')
</x-admin.layout>
