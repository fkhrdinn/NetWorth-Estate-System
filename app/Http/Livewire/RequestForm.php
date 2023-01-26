<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;

class RequestForm extends Component
{
    public $status = 'Processed';

    public function update($id)
    {
        $find = Listing::find($id);
        $find->update([
            'status' => $this->status
        ]);

        toast('Status Updated Succesfully.','success')->autoClose(5000)->hideCloseButton();
        return redirect()->route('admin.request');
    }

    public function render()
    {
        $lists = Listing::query()->where('status', 'Processed')->with('user')->get();
        $num = 1;

        return view('livewire.request-form', compact([
            'lists',
            'num'
        ]));
    }
}
