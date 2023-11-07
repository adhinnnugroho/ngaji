<div class="container mt-10 ">
    <div class="grid grid-cols-1 gap-6">
        <div class="mt-10">
            <audio controls>
                <source src=" {{ $juz['audio'] }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
        @foreach ($ayat as $item)


            <a href="{{ url('list_ayat', ['id' => $item['nomor']]) }}"
                class="w-full  p-6 bg-white border rounded-lg shadow border-gray-700">
                <div>
                    <h5 class="mb-20 text-4xl font-bold tracking-tight text-gray-900">
                        QS. {{ $juz['nama'] }} ({{$code}}) : Ayat {{$item['nomor']}}
                    </h5>
                    <div class="float-right -mt-11 mb-10">
                        <h5 class="mb-1 text-4xl font-bold tracking-tight text-gray-900">
                            {{ $item['ar'] }}
                        </h5>
                    </div>
                    <div class="mt-16">
                        <h5 class=" text-lg font-bold tracking-tight text-gray-900">
                            {!! $item['tr'] !!}
                        </h5>
                        <h5 class="text-lg font-bold tracking-tight text-gray-900">
                            {{ $item['nomor'] }}. {!! $item['id'] !!}
                        </h5>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
