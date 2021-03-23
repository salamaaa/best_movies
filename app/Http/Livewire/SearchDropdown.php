<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search;

    public function mount()
    {
        $this->search = '';
    }

    public function render()
    {
        $search_results = [];
        if (Str::length($this->search) >= 2) {
            $search_results = Http::get('https://api.themoviedb.org/3/search/movie?api_key=e840bff6b3778e58d129bc9384f1c9f5&query=' . $this->search)
                ->json()['results'];
        }
        return view('livewire.search-dropdown',['search_results'=>collect($search_results)->take(7)]);
    }
}
