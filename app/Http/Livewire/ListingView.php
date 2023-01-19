<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Listing;
use Livewire\Component;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;

class ListingView extends Component
{
    public $categories;
    public $search;

    public function edit(Listing $model)
    {
        return redirect()->route('listing.edit', $model);
    }

    public function delete(Listing $model)
    {
        $model->update([
            'status' => NULL,
            'deleted_at' => Carbon::now()
        ]);

        toast('Listing Has Been Deleted.','success')->autoClose(5000)->hideCloseButton();
        return redirect()->route('listing.list');
    }

    public function resetState()
    {
        $this->categories = null;
        $this->search = null;
    }
    
    public function render()
    {
        $model = Listing::query()->where('user_id', Auth::user()->id)
            ->whereNotIn('status', ['Rejected'])
            ->get();

        if(strlen($this->search) >= 3)
        {
            $model = Listing::query()->where('user_id', Auth::user()->id)
                ->whereNotIn('status', ['Rejected'])
                ->where(function($query){
                    $query  ->orWhere('location', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('house_type', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('furnish_type', 'LIKE', '%'.$this->search.'%');
                })
                ->get();
        }

        if($this->categories)
        {
            $model = Listing::query()->where('user_id', Auth::user()->id)
                ->whereNotIn('status', ['Rejected'])
                ->where(function($query){
                    $query  ->orWhere('location', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('house_type', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('furnish_type', 'LIKE', '%'.$this->search.'%');
                })
                ->where('house_type', $this->categories)
                ->get();
        }

        return view('livewire.listing-view', compact([
            'model',
        ]));
    }
}
