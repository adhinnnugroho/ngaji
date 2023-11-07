<?php

namespace App\Livewire\Juz;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Alquranjus extends Component
{
    public $juz;
    public function render()
    {
        return view('livewire.juz.alquranjus');
    }

    public function mount(){
        $response = Http::get('https://al-quran-8d642.firebaseio.com/data.json');
        $this->juz = $response->json();
    }
}
