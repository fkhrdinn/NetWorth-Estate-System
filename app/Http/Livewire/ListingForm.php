<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Listing;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ListingForm extends Component
{
    use WithFileUploads;
    
    public $model;

    public $location;
    public $squareFeet;
    public $guarded;
    public $bathroom;
    public $bedroom;
    public $furnishType;
    public $image; //From database
    public $images;
    public $price;
    public $houseType;

    public function mount($model = null)
    {
        $this->model = $model ?? [];
        if(!is_null($model))
        {
            $this->location = $model->location;
            $this->squareFeet = $model->square_feet;
            $this->guarded = $model->guarded;
            $this->bathroom = $model->bathroom;
            $this->bedroom = $model->bedroom;
            $this->furnishType = $model->furnish_type;
            $this->image = $model->getFirstMediaUrl('listing_image');
            $this->price = $model->price;
            $this->houseType = $model->house_type;
        }   
    }

    public function edit()
    {
        $this->model->update([
            'square_feet' => $this->squareFeet,
            'house_type' => $this->houseType,
            'guarded' => $this->guarded,
            'furnish_type' => $this->furnishType,
            'bathroom' => $this->bathroom,
            'bedroom' => $this->bedroom,
        ]);

        toast('Listing Has Been Updated Successfully.','success')->autoClose(5000)->hideCloseButton();
        return redirect()->route('listing.list');
    }

    public function create()
    {
        $model = Listing::create([
            'location' => $this->location,
            'price' => $this->price,
            'square_feet' => $this->squareFeet,
            'house_type' => $this->houseType,
            'guarded' => $this->guarded,
            'furnish_type' => $this->furnishType,
            'bathroom' => $this->bathroom,
            'bedroom' => $this->bedroom,
            'user_id' => Auth::user()->id,
            'origin' => 'Manual',
            'status' => 'Processed',
            'request_date' => Carbon::now()
        ]);

        if($this->images)
        {
            $model
                ->addMedia($this->images->getRealPath())
                ->usingName($this->images->getClientOriginalName())
                ->toMediaCollection('listing_image');
        }
        $this->images = '';

        toast('Listing Created Successfully and In Processed.','success')->autoClose(5000)->hideCloseButton();
        return redirect()->route('listing.list');
    
    }

    public function render()
    {
        return view('livewire.listing-form');
    }
}
