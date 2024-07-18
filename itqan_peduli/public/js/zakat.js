document.addEventListener('DOMContentLoaded', function() {
    // Ketika halaman dimuat, secara otomatis tampilkan bagian 'penghasilan'
    const penghasilanElement = document.getElementById('penghasilan');
    penghasilanElement.classList.remove('hidden');

    // Mengatur latar belakang dan teks untuk bagian 'penghasilan'
    const penghasilanButton = document.querySelector('[onclick="showDiv(\'penghasilan\', this)"]');
    penghasilanButton.classList.add('bg-green-700', 'text-white', 'selected');
    penghasilanButton.classList.remove('bg-white', 'text-gray-500');

    const textElement = penghasilanButton.querySelector('p');
    textElement.classList.add('font-semibold');
    textElement.classList.remove('text-gray-500', 'font-normal');

    // Jika perlu menampilkan periode default seperti 'perbulan', Anda bisa menyesuaikan di sini
    const btnPerbulan = document.getElementById('btnPerbulan');
    showPeriod('perbulan', btnPerbulan); // Misalnya memanggil fungsi showPeriod untuk menampilkan 'perbulan'
});

function showDiv(id, element) {
    const sections = ['penghasilan', 'tabungan', 'perdagangan', 'emas'];
    sections.forEach(section => {
        document.getElementById(section).classList.add('hidden');
    });
    document.getElementById(id).classList.remove('hidden');

    const elements = document.querySelectorAll('.selected');
    elements.forEach(el => {
        el.classList.remove('bg-green-700', 'text-white', 'selected');
        el.classList.add('bg-white', 'text-gray-500');

        const textElements = el.querySelectorAll('p');
        textElements.forEach(textEL => {
            textEL.classList.remove('text-white', 'font-semibold');
            textEL.classList.add('text-gray-500', 'font-normal');
        });
    });

    element.classList.add('bg-green-700', 'text-white', 'selected');
    element.classList.remove('bg-white', 'text-gray-500');

    const textElements = element.querySelectorAll('p');
    textElements.forEach(textEL => {
        textEL.classList.add('text-white', 'font-semibold');
        textEL.classList.remove('text-gray-500', 'font-normal');
    });

    if (id === 'penghasilan') {
        showPeriod('perbulan', document.getElementById('btnPerbulan'));
    }
}

function showPeriod(period, element) {
    document.getElementById('perbulan').classList.add('hidden');
    document.getElementById('pertahun').classList.add('hidden');
    document.getElementById(period).classList.remove('hidden');

    const buttons = ['btnPerbulan', 'btnPertahun'];
    buttons.forEach(btn => {
        document.getElementById(btn).classList.remove('bg-green-600', 'text-white');
        document.getElementById(btn).classList.add('bg-gray-200', 'text-black');
    });

    element.classList.add('bg-green-600', 'text-white');
    element.classList.remove('bg-gray-200', 'text-black');

    periode = period; // Set periode berdasarkan ID (perbulan atau pertahun)
}

function setLanjutkan(id, nilaiZakat){
    document.getElementById(id).href =`/rincian-pembayaran?nilaiZakat=${nilaiZakat}`;
}

let periode = 'bulanan';

async function hitungZakat(){
    const penghasilan = parseFloat(document.getElementById('inputPenghasilan').value) || 0;
    const bonus = parseFloat(document.getElementById('bonus').value) || 0;
    const kebutuhan = parseFloat(document.getElementById('kebutuhan').value) || 0;

    const totalPenghasilan = penghasilan + bonus;
    const penghasilanBersih = totalPenghasilan - kebutuhan;

    try {
        let cachedData = localStorage.getItem('hargaEmasData');
        if (!cachedData) {
            throw new Error('Data harga emas tidak tersedia');
        }
        const data = JSON.parse(cachedData);
        const hargaEmas = parseFloat(data.harga_emas);

        console.log('Harga Emas:', hargaEmas);

        const nisab = 85 * hargaEmas / (periode === 'perbulan' ? 12 : 1);

        const zakat = penghasilanBersih >= nisab ? 0.025 * penghasilanBersih : 0;

        document.getElementById('statusZakat').classList.remove('hidden');
        document.getElementById('jumlahZakat').classList.remove('hidden');

        if (zakat > 0) {
            document.getElementById('statusBayarZakat').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
            document.getElementById('statusBayarZakat').classList.remove('bg-red-100', 'border', 'border-red-700');
            document.getElementById('statusBayarZakat').classList.add('bg-green-100', 'border', 'border-green-700');
            document.getElementById('nilaiZakat').innerHTML = `Rp ${zakat.toLocaleString('id-ID')}`;
        } else {
            document.getElementById('statusBayarZakat').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
            document.getElementById('statusBayarZakat').classList.remove('bg-green-100', 'border', 'border-green-700');
            document.getElementById('statusBayarZakat').classList.add('bg-red-100', 'border', 'border-red-700');
            const zakatKurang = 0.025 * penghasilanBersih;
            const zakatBulat = zakatKurang.toFixed(0);
            document.getElementById('nilaiZakat').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
        }
        setLanjutkan('btnPenghasilanBulan', zakat);
    } catch (error) {
        console.error('Error dalam menghitung zakat:', error);
        // Handle error sesuai kebutuhan aplikasi
    }
}


async function hitungZakatTahunan(){
    const penghasilanPertahun = parseFloat(document.getElementById('inputPenghasilanPertahun').value) || 0;
    const bonusPertahun = parseFloat(document.getElementById('bonusPertahun').value) || 0;
    const kebutuhanPertahun = parseFloat(document.getElementById('kebutuhanPertahun').value) || 0;

    const totalPenghasilanPertahun = penghasilanPertahun + bonusPertahun;
    const penghasilanBersihPertahun = totalPenghasilanPertahun- kebutuhanPertahun;

    try {
        let cachedData = localStorage.getItem('hargaEmasData');
        if (!cachedData) {
            throw new Error('Data harga emas tidak tersedia');
        }
        const data = JSON.parse(cachedData);
        const hargaEmas = parseFloat(data.harga_emas);

        console.log('Harga:', hargaEmas);

        const nisabPertahun = 85 * hargaEmas;
        const zakatPertahun = penghasilanBersihPertahun >= nisabPertahun ? 0.025 * penghasilanBersihPertahun : 0;

        document.getElementById('statusZakatPertahun').classList.remove('hidden');
        document.getElementById('jumlahZakatPertahun').classList.remove('hidden');

        if (zakatPertahun > 0) {
            document.getElementById('statusBayarZakatPertahun').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
            document.getElementById('statusBayarZakatPertahun').classList.remove('bg-red-100', 'border', 'border-red-700');
            document.getElementById('statusBayarZakatPertahun').classList.add('bg-green-100', 'border', 'border-green-700');
            document.getElementById('nilaiZakatPertahun').innerHTML = `Rp ${zakatPertahun.toLocaleString('id-ID')}`;
        } else {
            document.getElementById('statusBayarZakatPertahun').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
            document.getElementById('statusBayarZakatPertahun').classList.remove('bg-green-100', 'border', 'border-green-700');
            document.getElementById('statusBayarZakatPertahun').classList.add('bg-red-100', 'border', 'border-red-700');
            const zakatKurang = 0.025 * penghasilanBersihPertahun;
            const zakatBulat = zakatKurang.toFixed(0);
            document.getElementById('nilaiZakatPertahun').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
        }
        setLanjutkan('btnPenghasilanTahun',zakatPertahun);
    } catch (error) {
        console.error('Error dalam mengambil data:', error);
        // Handle error secara sesuai dengan kebutuhan aplikasi Anda
    }
}

async function hitungZakatTabungan(){
    const tabungan = parseFloat(document.getElementById('inputSaldoTabungan').value)||0;
    const bunga = parseFloat(document.getElementById('inputBungaTabungan').value)||0;

    const totalTabungan = tabungan + bunga;

    try {
        let cachedData = localStorage.getItem('hargaEmasData');
        if (!cachedData) {
            throw new Error('Data harga emas tidak tersedia');
        }
        const data = JSON.parse(cachedData);
        const hargaEmas = parseFloat(data.harga_emas);
        console.log('Harga:', hargaEmas);

        const nisabTabungan = 85 * hargaEmas / (periode === 'bulanan' ? 12 : 1);
        const zakatTabungan = totalTabungan >= nisabTabungan ? 0.025 * totalTabungan : 0;

        document.getElementById('statusZakatTabungan').classList.remove('hidden');
        document.getElementById('jumlahZakatTabungan').classList.remove('hidden');

        if (zakatTabungan > 0) {
            document.getElementById('statusBayarZakatTabungan').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
            document.getElementById('statusBayarZakatTabungan').classList.remove('bg-red-100', 'border', 'border-red-700');
            document.getElementById('statusBayarZakatTabungan').classList.add('bg-green-100', 'border', 'border-green-700');
            document.getElementById('nilaiZakatTabungan').innerHTML = `Rp ${zakatTabungan.toLocaleString('id-ID')}`;
        } else {
            document.getElementById('statusBayarZakatTabungan').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
            document.getElementById('statusBayarZakatTabungan').classList.remove('bg-green-100', 'border', 'border-green-700');
            document.getElementById('statusBayarZakatTabungan').classList.add('bg-red-100', 'border', 'border-red-700');
            const zakatKurang = 0.025 * totalTabungan;
            const zakatBulat = zakatKurang;
            document.getElementById('nilaiZakatTabungan').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
        }
        setLanjutkan('btnTabungan', zakatTabungan);
    } catch (error) {
        console.error('Error dalam mengambil data:', error);
        // Handle error secara sesuai dengan kebutuhan aplikasi Anda
    }
}

async function hitungZakatPerdagangan(){
    const modal = parseFloat(document.getElementById('inputModal').value)||0;
    const keuntungan = parseFloat(document.getElementById('inputKeuntungan').value)||0;
    const piutangDagang  = parseFloat(document.getElementById('inputPiutangDagang').value)||0;
    const utangTempo = parseFloat(document.getElementById('inputUtangTempo').value)||0;
    const kerugian = parseFloat(document.getElementById('inputKerugian').value)||0;

    const totalPerdagangan = (modal + keuntungan + piutangDagang)-(utangTempo + kerugian);

    try {
        let cachedData = localStorage.getItem('hargaEmasData');
        if (!cachedData) {
            throw new Error('Data harga emas tidak tersedia');
        }
        const data = JSON.parse(cachedData);
        const hargaEmas = parseFloat(data.harga_emas);
        console.log('Harga:', hargaEmas);

        const nisabPerdagangan = 85 * hargaEmas;
        const zakatPerdagangan = totalPerdagangan >= nisabPerdagangan ? 0.025 * totalPerdagangan : 0;

        document.getElementById('statusZakatPerdagangan').classList.remove('hidden');
        document.getElementById('jumlahZakatPerdagangan').classList.remove('hidden');
        document.getElementById('bungkusStatusPerdagangan').classList.remove('hidden');

        if (zakatPerdagangan > 0) {
            document.getElementById('statusBayarZakatPerdagangan').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
            document.getElementById('statusBayarZakatPerdagangan').classList.remove('bg-white', 'border', 'border-red-700');
            document.getElementById('statusBayarZakatPerdagangan').classList.add('bg-white', 'border', 'border-green-700');
            document.getElementById('bungkusStatusPerdagangan').classList.remove('bg-red-50','rounded-xl');
            document.getElementById('bungkusStatusPerdagangan').classList.add('bg-green-50', 'rounded-xl');
            document.getElementById('nilaiZakatPerdagangan').innerHTML = `Rp ${zakatPerdagangan.toLocaleString('id-ID')}`;
        } else {
            document.getElementById('statusBayarZakatPerdagangan').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
            document.getElementById('statusBayarZakatPerdagangan').classList.remove('bg-white', 'border', 'border-green-700');
            document.getElementById('statusBayarZakatPerdagangan').classList.add('bg-white', 'border', 'border-red-700');
            document.getElementById('bungkusStatusPerdagangan').classList.remove('bg-green-50', 'border','rounded-xl');
            document.getElementById('bungkusStatusPerdagangan').classList.add('bg-red-50','rounded-xl');
            const zakatKurang = 0.025 * totalPerdagangan;
            const zakatBulat = zakatKurang;
            document.getElementById('nilaiZakatPerdagangan').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
        }
        setLanjutkan('btnPerdagangan', zakatPerdagangan);
    } catch (error) {
        console.error('Error dalam mengambil data:', error);
        // Handle error secara sesuai dengan kebutuhan aplikasi Anda
    }
}

async function hitungZakatEmas(){
    const emas = parseFloat(document.getElementById('inputJumlahEmas').value)||0;

    try {
        let cachedData = localStorage.getItem('hargaEmasData');
        if (!cachedData) {
            throw new Error('Data harga emas tidak tersedia');
        }
        const data = JSON.parse(cachedData);
        const hargaEmas = parseFloat(data.harga_emas);
        const nisabEmas = 85 * hargaEmas;
        const zakatEmas = emas >= 85 ? 0.025 * emas * hargaEmas : 0;

        document.getElementById('statusZakatEmas').classList.remove('hidden');
        document.getElementById('jumlahZakatEmas').classList.remove('hidden');
        document.getElementById('bungkusStatusEmas').classList.remove('hidden');

        if (zakatEmas > 0) {
            document.getElementById('statusBayarZakatEmas').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
            document.getElementById('statusBayarZakatEmas').classList.remove('bg-white', 'border', 'border-red-700');
            document.getElementById('statusBayarZakatEmas').classList.add('bg-white', 'border', 'border-green-700');
            document.getElementById('bungkusStatusEmas').classList.remove('bg-red-50','rounded-xl');
            document.getElementById('bungkusStatusEmas').classList.add('bg-green-50', 'rounded-xl');
            document.getElementById('nilaiZakatEmas').innerHTML = `Rp ${zakatEmas.toLocaleString('id-ID')}`;
        } else {
            document.getElementById('statusBayarZakatEmas').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
            document.getElementById('statusBayarZakatEmas').classList.remove('bg-white', 'border', 'border-green-700');
            document.getElementById('statusBayarZakatEmas').classList.add('bg-white', 'border', 'border-red-700');
            document.getElementById('bungkusStatusEmas').classList.remove('bg-green-50', 'border','rounded-xl');
            document.getElementById('bungkusStatusEmas').classList.add('bg-red-50','rounded-xl');
            const zakatKurang = 0.025 * emas *hargaEmas;
            const zakatBulat = zakatKurang;
            document.getElementById('nilaiZakatEmas').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
        }
        setLanjutkan('btnEmas', zakatEmas);
    } catch (error) {
        console.error('Error dalam mengambil data:', error);
        // Handle error secara sesuai dengan kebutuhan aplikasi Anda
    }
}

async function fetchHargaEmas() {
    // Coba ambil data dari localStorage terlebih dahulu
    let cachedData = localStorage.getItem('hargaEmasData');
    if (cachedData) {
        cachedData = JSON.parse(cachedData);
        updateUI(cachedData); // Update UI dari data yang disimpan
    }

    // Panggil API hanya jika data belum ada di localStorage atau sudah kadaluarsa
    const response = await fetch('/harga-emas');
    if (response.ok) {
        const data = await response.json();
        localStorage.setItem('hargaEmasData', JSON.stringify(data)); // Simpan data di localStorage
        updateUI(data); // Update UI dari data yang baru diambil dari API
    } else {
        console.error('Gagal mengambil harga emas:', response.statusText);
    }
}

function updateUI(data) {
    document.getElementById('hargaEmas').textContent = `Rp ${data.harga_emas.toLocaleString('id-ID')}`;
    document.getElementById('hargaEmas2').textContent = `Rp ${data.harga_emas.toLocaleString('id-ID')}`;
    const hargaEmas = parseFloat(data.harga_emas);
    const nisabEmasBulanan = (85 * hargaEmas) / 12;
    const formattedNishab = nisabEmasBulanan.toLocaleString('id-ID');
    document.getElementById('nisabEmasBulan').textContent = formattedNishab;
    document.getElementById('nisabEmasBulan2').textContent = formattedNishab;
}

// Panggil fetchHargaEmas saat DOM telah dimuat
document.addEventListener('DOMContentLoaded', async () => {
    await fetchHargaEmas();
});




setLanjutkan('btnPenghasilanBulan', zakat);
setLanjutkan('btnPenghasilanTahun',zakatPertahun);


