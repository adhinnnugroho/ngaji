<div class="container mt-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:ml-0 lg:mr-0 ml-5 mr-5">
        @foreach ($juz as $item)
            <a href="{{ url('list_ayat', ['id' => $item['nomor']]) }}" class="w-full  p-6 bg-white border rounded-lg shadow border-gray-700">
                <div >
                    <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">
                        {{ $item['nomor'] }}. {{ $item['nama'] }}
                    </h5>
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">
                        {{ $item['arti'] }}
                    </h5>

                    <div class="float-right">
                        <p class="mb-3 font-semibold text-2xl text-gray-700">
                            {{ $item['asma'] }}
                        </p>
                        <p class="mb-3 font-semibold text-2xl text-gray-700">
                            {{ $item['type'] }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
