<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Resources\Json\JsonResource;

class GetItemsController extends Controller
{
    public function __invoke(string $categoryId)
    {
        return JsonResource::collection(
            Item::where('category_id', $categoryId)->get()
        );
    }
}
