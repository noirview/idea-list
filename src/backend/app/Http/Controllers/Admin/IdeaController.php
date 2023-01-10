<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Idea\StoreRequest;
use App\Http\Requests\Idea\UpdateRequest;
use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ideas = Idea::query()
            ->select(['id', 'author_name', 'title', 'status', 'category_id', 'count_likes', 'created_at'])
            ->with('category:id,title')
            ->simplePaginate();

        return view('admin.ideas.index', [
            'ideas' => $ideas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Idea::query()
            ->create($request->validated());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $categories = Category::query()
            ->select(['id', 'title'])
            ->get();

        $idea = Idea::query()
            ->find($id);

        return view('admin.ideas.edit', [
            'categories' => $categories,
            'idea' => $idea,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        Idea::query()
            ->where('id', $id)
            ->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Idea::query()
            ->where('id', $id)
            ->delete();
    }
}
