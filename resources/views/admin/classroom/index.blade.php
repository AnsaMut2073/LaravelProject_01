<x-admin.layout>
    <div class="p-4">
        {{-- 1. HEADER & TOMBOL PLACEHOLDER --}}
        <div class="flex items-center justify-between mb-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Data Classroom</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">Kelola data kelas</p>
            </div>
            <button type="button" data-modal-target="createClassroomModal" data-modal-toggle="createClassroomModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                + Tambah Kelas
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
                                <td colspan="4" class="px-4 py-6 text-center">Data kosong.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.classroom.create')
</x-admin.layout>
