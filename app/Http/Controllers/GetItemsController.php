<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;

class GetItemsController extends Controller
{
    public function __invoke(string $categoryId): JsonResource
    {
        /** @var Collection<Item> $items */
        $items = Item::where('category_id', $categoryId)->get();

        return JsonResource::collection(
            $items
        );
    }
}
