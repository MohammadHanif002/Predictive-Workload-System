<x-layout title="Prediksi Beban Kerja">
    <section class="max-w-xl mx-auto py-20 px-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-cyan-400">Form Prediksi Beban Kerja</h2>

        <form action="{{ route('prediksi.hasil') }}" method="POST"
            class="space-y-6 bg-white/5 p-6 rounded-2xl border border-white/10 backdrop-blur-md shadow-md">
            @csrf
            <div>
                <label for="experience" class="block mb-1 text-gray-300">Pengalaman (Tahun Bekerja)</label>
                <input type="number" name="experience" id="experience"
                    class="w-full p-3 bg-gray-800 border border-gray-700 rounded text-white" min="0" required>
            </div>
            <div>
                <label for="projects" class="block mb-1 text-gray-300">Jumlah Proyek Yang Ditangani</label>
                <input type="number" name="projects" id="projects"
                    class="w-full p-3 bg-gray-800 border border-gray-700 rounded text-white" min="0" required>
            </div>
            <div>
                <label for="rating" class="block mb-2 text-gray-300">Rating Kinerja: <span id="rating-value"
                        class="text-cyan-400 font-semibold">2.5</span></label>
                <input type="range" name="rating" id="rating" min="0" max="5" step="0.1"
                    value="2.5" class="w-full accent-cyan-500"
                    oninput="document.getElementById('rating-value').textContent = this.value">
            </div>
            <button type="submit"
                class="w-full bg-cyan-500 text-white py-3 rounded hover:bg-cyan-600 font-semibold">Prediksi</button>
        </form>
    </section>
</x-layout>
