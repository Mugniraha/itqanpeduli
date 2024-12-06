$(document).ready(function () {
    $('#myTable').DataTable({
        destroy: true, // Mengizinkan tabel diinisialisasi ulang
        responsive: true, // Mengaktifkan fitur responsif
        autoWidth: false, // Nonaktifkan autoWidth untuk memungkinkan penggunaan lebar penuh
        stripeClasses: ['odd:bg-white even:bg-gray-200'], // Untuk pengaturan warna baris
    });
});
