<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Listing;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class HistoryView extends Component
{
    public $categories = "System";
    public $search;

    public function create(Listing $model)
    {
        $model->update([
            'status' => 'Processed',
            'request_date' => Carbon::now(),
            'deleted_at' => NULL
        ]);

        toast('Listing Has Been Created and In Processed.','success')->autoClose(5000)->hideCloseButton();
        return redirect()->route('listing.list');
    }

    public function render()
    {
        $model = Listing::query()->where('user_id', Auth::user()->id)
            ->where(function($query){
            $query  ->where('origin' , $this->categories)
                    ->orWhere('status', $this->categories);
            })
            ->where(function($query){
                $query  ->orWhereNull('deleted_at')
                        ->orWhereNotNull('deleted_at');
            })
            ->get();

        if(strlen($this->search) >= 3)
        {
            $model = Listing::query()->where('user_id', Auth::user()->id)
                ->where(function($query){
                $query  ->where('origin' , $this->categories)
                        ->orWhere('status', $this->categories);
                })
                ->where(function($query){
                    $query  ->orWhereNull('deleted_at')
                            ->orWhereNotNull('deleted_at');
                })
                ->where(function($query){
                    $query  ->orWhere('location', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('house_type', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('furnish_type', 'LIKE', '%'.$this->search.'%');
                })
                ->get();
        } 

        return view('livewire.history-view', compact([
            'model',
        ]));
    }
}
