<x-layout title="Hasil Prediksi">
    <section class="flex flex-col items-center justify-center min-h-[70vh] px-4 py-20 space-y-10">

        <div class="bg-white/5 border border-white/10 rounded-2xl p-8 max-w-xl w-full text-center backdrop-blur-md shadow-lg">
            <h2 class="text-3xl font-bold text-cyan-400 mb-6">📊 Hasil Prediksi Beban Kerja</h2>

            <p class="text-lg text-gray-300 mb-4">
                Perkiraan beban kerja Anda adalah:
            </p>

            <p class="text-4xl font-bold text-white mb-6">
                {{ $prediction }} <span class="text-base text-gray-400">jam/minggu</span>
            </p>

            @if ($prediction < 40)
                <p class="text-green-400 text-md font-medium">✅ Dapat Ditambah Tugas</p>
            @elseif ($prediction <= 45)
                <p class="text-yellow-400 text-md font-medium">⚖️ Beban Kerja Seimbang</p>
            @else
                <p class="text-red-400 text-md font-medium">⚠️ Kurangi Beban Kerja</p>
            @endif

            <a href="{{ route('prediksi.form') }}"
               class="inline-block mt-8 px-6 py-3 bg-cyan-500 text-white rounded-xl hover:bg-cyan-600 transition font-medium shadow-md">
                🔁 Kembali ke Form
            </a>
        </div>

        {{-- Grafik Visualisasi --}}
        <div class="w-full max-w-2xl bg-white/5 border border-white/10 p-6 rounded-2xl shadow-lg">
            <h3 class="text-xl font-semibold text-cyan-300 mb-4 text-center">📈 Visualisasi Faktor dan Hasil</h3>
            <canvas id="prediksiChart" height="150"></canvas>
        </div>

    </section>

    {{-- Chart.js CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('prediksiChart').getContext('2d');

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Pengalaman (tahun)', 'Jumlah Proyek', 'Rating Kinerja', 'Prediksi (jam/minggu)'],
                datasets: [{
                    label: 'Nilai Faktor',
                    data: [{{ $experience }}, {{ $projects }}, {{ $rating }}, {{ $prediction }}],
                    backgroundColor: [
                        'rgba(34,211,238,0.6)',
                        'rgba(59,130,246,0.6)',
                        'rgba(99,102,241,0.6)',
                        'rgba(16,185,129,0.6)'
                    ],
                    borderColor: [
                        'rgba(34,211,238,1)',
                        'rgba(59,130,246,1)',
                        'rgba(99,102,241,1)',
                        'rgba(16,185,129,1)'
                    ],
                    borderWidth: 1,
                    borderRadius: 10
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { color: '#ccc' },
                        grid: { color: 'rgba(255,255,255,0.05)' }
                    },
                    x: {
                        ticks: { color: '#ccc' },
                        grid: { color: 'rgba(255,255,255,0.05)' }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#fff'
                        }
                    }
                }
            }
        });
    </script>
</x-layout>
