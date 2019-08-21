<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Category::class);
    }

    /**
     * Display a listing of the categories
     *
     * @param \App\Category  $model
     * @return \Illuminate\View\View
     */
    public function index(Category $model)
    {
        $this->authorize('manage-items', User::class);

        return view('categories.index', ['categories' => $model->all()]);
    }

    /**
     * Show the form for creating a new category
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created category in storage
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  \App\Category  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request, Category $model)
    {
        $model->create($request->all());

        return redirect()->route('category.index')->withStatus(__('Category successfully created.'));
    }

    /**
     * Show the form for editing the specified category
     *
     * @param  \App\Category  $category
     * @return \Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified category in storage
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category)
    {
        if ($category->id<= 5) {
            return redirect()->route('category.index')->withStatus(__('Category update is not allowed in demo version for default data.'));
        }
        $category->update($request->all());

        return redirect()->route('category.index')->withStatus(__('Category successfully updated.'));
    }

    /**
     * Remove the specified category from storage
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        if (!$category->items->isEmpty()) {
            return redirect()->route('category.index')->withErrors(__('This category has items attached and can\'t be deleted.'));
        }

        $category->delete();

        return redirect()->route('category.index')->withStatus(__('Category successfully deleted.'));
    }
}
