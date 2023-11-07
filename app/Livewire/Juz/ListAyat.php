<?php

namespace App\Livewire\Juz;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ListAyat extends Component
{

    public $ayat, $juz, $code;
    public function render()
    {
        return view('livewire.juz.list-ayat');
    }

    public function mount(){
        $code = $this->code . '.json';
        $response = Http::get('https://al-quran-8d642.firebaseio.com/surat/' . $code);
        $this->ayat = $response->json();

        $response_juz = Http::get('https://al-quran-8d642.firebaseio.com/data.json');
        $data = $response_juz->json();

        foreach ($data as $item) {
            if (isset($item['nomor']) && $item['nomor'] === $this->code) {
                $this->juz = $item;
                break;
            }
        }
    }
}
