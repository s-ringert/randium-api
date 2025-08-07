<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class GetCategoriesController extends Controller
{
    public function __invoke()
    {
        return JsonResource::collection(Category::all());
    }
}
