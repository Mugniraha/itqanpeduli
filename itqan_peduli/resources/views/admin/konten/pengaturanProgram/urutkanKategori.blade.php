@extends('admin.layout.main')

@section('konten')

<div class="py-3 bg-green-700 rounded-xl mb-10">
    <div class=" p-5 flex justify-between">
        <div>
            <p  class="text-2xl text-white font-semibold mb-2">Urutkan Kategori</p>
            <p class="text-sm text-gray-300 font-semibold">custom urutan kategori untuk ditampilkan</p>
        </div>
    </div>
</div>

<div class="p-4 bg-white border border-gray-200 rounded-lg shadow">
    <ul id="items" class="space-y-2">
        @foreach ($categories as $kategori)
        <li data-id="{{ $kategori->id }}">
            <div class="md:flex items-center w-full p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <img src="{{ asset('storage/' . $kategori->icon) }}" alt="{{ $kategori->name }}" class="size-20 rounded-lg mr-3 object-cover">
                <div class="">
                    <p class="mb-1 text-xl font-bold tracking-tight text-gray-900">{{ $kategori->name }}</p>
                    <p class="font-normal text-gray-700">Drag untuk memindahkan Kategori.</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="flex justify-end">
        <button type="button" id="saveOrder" class="mt-3 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">SIMPAN</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var el = document.getElementById('items');
        var sortable = new Sortable(el, {
            animation: 150,
            ghostClass: 'blue-background-class'
        });

        document.getElementById('saveOrder').addEventListener('click', function () {
            var order = [];
            el.querySelectorAll('li').forEach(function (li, index) {
                order.push({
                    id: li.getAttribute('data-id'),
                    urutan: index + 1 // Mengatur urutan berdasarkan posisi
                });
            });

            // Mengirim data urutan ke server dengan AJAX
            fetch('{{ route("categories.updateOrder") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(order)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Urutan berhasil diperbarui!');
                } else {
                    alert('Terjadi kesalahan, coba lagi.');
                }
            });
        });
    });
</script>

@endsection

