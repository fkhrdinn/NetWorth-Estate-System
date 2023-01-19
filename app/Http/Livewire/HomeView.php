<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class HomeView extends Component
{
    public $categories;
    public $search;

    public function resetState()
    {
        $this->categories = null;
        $this->search = null;
    }

    public function render()
    {
        $model = Listing::query()
            ->whereIn('status', ['Accepted'])
            
            ->get();

        if(strlen($this->search) >= 3)
        {
            $model = Listing::query()
                ->whereIn('status', ['Accepted'])
                ->where(function($query){
                    $query  ->orWhere('location', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('house_type', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('furnish_type', 'LIKE', '%'.$this->search.'%');
                })
                
                ->get();
        }

        if($this->categories)
        {
            $model = Listing::query()
                ->whereIn('status', ['Accepted'])
                ->where(function($query){
                    $query  ->orWhere('location', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('house_type', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('furnish_type', 'LIKE', '%'.$this->search.'%');
                })
                ->where('house_type', $this->categories)
                
                ->get();
        }

        return view('livewire.home-view', compact([
            'model',
        ]));
    }
}
