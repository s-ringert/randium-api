<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;

class GetCategoriesController extends Controller
{
    public function __invoke(): JsonResource
    {
        return JsonResource::collection(Category::all());
    }
}
