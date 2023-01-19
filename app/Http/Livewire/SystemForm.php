<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;
use App\Models\Location;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class SystemForm extends Component
{
    use WithFileUploads;
    
    public $location;
    public $squareFeet;
    public $guarded;
    public $bathroom;
    public $bedroom;
    public $furnishType;
    public $image;
    public $price;
    public $houseType;

    public function create()
    {
        $query = Location::where('name', $this->location)->where('house_type', $this->houseType)->first();

        $price = $query->land_price;
        $traffic = $query->traffic;
        $pricePerSquare = $query->price_per_square_feet;
        $finalPrice = 0;

        $fileName = $this->image->getClientOriginalName();

        if(Str::contains($fileName, 'Good'))
        {
            $min = $pricePerSquare * $this->squareFeet;
            if($min > $price)
            {
                $estimate = rand($price, $min);
            }
            else
            {
                $estimate = rand($min, $price);
            }
            
            if($traffic == "high")
            {
                $estimate = $estimate * 1.05;
            }
            else
            {
                $estimate = $estimate * 0.95;
            }

            if($this->guarded == "Yes")
            {
                $estimate = $estimate * 1.02;
            }
            else
            {
                $estimate = $estimate * 0.98;
            }

            if($this->furnishType == "Fully Furnished")
            {
                $estimate = $estimate * 1.03;
            }
            else if($this->furnishType == "Semi-Furnished")
            {
                $estimate = $estimate * 1.15;
            }

            $finalPrice = $estimate * 1.10;

        }
        else if(Str::contains($fileName, 'Bad'))
        {
            $min = $pricePerSquare * $this->squareFeet;
            if($min > $price)
            {
                $estimate = rand($price, $min);
            }
            else
            {
                $estimate = rand($min, $price);
            }

            if($traffic == "high")
            {
                $estimate = $estimate * 1.05;
            }
            else
            {
                $estimate = $estimate * 0.95;
            }

            if($this->guarded == "Yes")
            {
                $estimate = $estimate * 1.02;
            }
            else
            {
                $estimate = $estimate * 0.98;
            }

            if($this->furnishType == "Fully Furnished")
            {
                $estimate = $estimate * 1.03;
            }
            else if($this->furnishType == "Semi-Furnished")
            {
                $estimate = $estimate * 1.15;
            }

            $finalPrice = $estimate * 0.9;

        }

        $model = Listing::create([
            'location' => $this->location,
            'price' => $finalPrice,
            'square_feet' => $this->squareFeet,
            'house_type' => $this->houseType,
            'guarded' => $this->guarded,
            'furnish_type' => $this->furnishType,
            'bathroom' => $this->bathroom,
            'bedroom' => $this->bedroom,
            'user_id' => Auth::user()->id,
            'origin' => 'System',
        ]);

        if($this->image)
        {
            $model
                ->addMedia($this->image->getRealPath())
                ->usingName($this->image->getClientOriginalName())
                ->toMediaCollection('listing_image');
        }
        $this->image = '';

        toast('Price Predicted Successfully.','success')->autoClose(5000)->hideCloseButton();
        return redirect()->route('history.index');
    }

    public function render()
    {
        return view('livewire.system-form');
    }
}
