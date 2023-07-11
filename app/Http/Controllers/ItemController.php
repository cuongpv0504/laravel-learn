<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ItemController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(): View
    {
        $item = new Item;
        $result = $item->getByName('cuong');
        foreach ($result as $key => $value) {
            dump($value->id);
        }

        return view('item', [
            'name' => 'Cuong Pham Van'
        ]);
    }
}
