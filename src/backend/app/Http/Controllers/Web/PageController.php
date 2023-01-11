<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Idea;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->select(['id', 'title', 'description'])
            ->active()
            ->get();

        $firstCategory = $categories->first();

        $ideas = Idea::query()
            ->select(['id', 'category_id', 'author_name', 'title', 'description', 'count_likes', 'created_at'])
            ->where('category_id', $firstCategory->id)
            ->get();

        return view('web.index', [
            'categories' => $categories,
            'ideas' => $ideas,
        ]);
    }
}
