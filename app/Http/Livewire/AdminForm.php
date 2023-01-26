<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;
use Livewire\WithFileUploads;

class AdminForm extends Component
{
    use WithFileUploads;

    public $image;
    public $price;
    public $location;
    public $median;
    public $houseType;
    public $pricePerSquareFeet;
    public $traffic;

    public function create()
    {
        $model = Location::create([
            'name' => $this->location,
            'median_income' => $this->median,
            'land_price' => $this->price,
            'price_per_square_feet' => $this->pricePerSquareFeet,
            'traffic' => $this->traffic,
            'house_type' => $this->houseType
        ]);

        toast('Data Added To Training Model Successfully.','success')->autoClose(5000)->hideCloseButton();
        return redirect()->route('admin.train');
    }

    public function render()
    {
        return view('livewire.admin-form');
    }
}
