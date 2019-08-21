<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Item;
use App\Category;
use Carbon\Carbon;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Item::class);
    }

    /**
     * Display a listing of the items
     *
     * @param \App\Item  $model
     * @return \Illuminate\View\View
     */
    public function index(Item $model)
    {
        return view('items.index', ['items' => $model->with(['tags', 'category'])->get()]);
    }

    /**
     * Show the form for creating a new item
     *
     * @param  \App\Tag $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function create(Tag $tagModel, Category $categoryModel)
    {
        return view('items.create', [
            'tags' => $tagModel->get(['id', 'name']),
            'categories' => $categoryModel->get(['id', 'name'])
        ]);
    }

    /**
     * Store a newly created item in storage
     *
     * @param  \App\Http\Requests\ItemRequest  $request
     * @param  \App\Item  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ItemRequest $request, Item $model)
    {
        $item = $model->create($request->merge([
            'picture' => $request->photo->store('pictures', 'public'),
            'show_on_homepage' => $request->show_on_homepage ? 1 : 0,
            'options' => $request->options ? $request->options : null,
            'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
        ])->all());

        $item->tags()->sync($request->get('tags'));

        return redirect()->route('item.index')->withStatus(__('Item successfully created.'));
    }

    /**
     * Show the form for editing the specified item
     *
     * @param  \App\Item  $item
     * @param  \App\Tag   $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function edit(Item $item, Tag $tagModel, Category $categoryModel)
    {
        return view('items.edit', [
            'item' => $item->load('tags'),
            'tags' => $tagModel->get(['id', 'name']),
            'categories' => $categoryModel->get(['id', 'name'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Itemuest  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ItemRequest $request, Item $item)
    {
        if ($item->id<= 3) {
            return redirect()->route('item.index')->withStatus(__('Item update is not allowed in demo version for default data.'));
        }
        $item->update(
            $request->merge([
                'picture' => $request->photo ? $request->photo->store('pictures', 'public') : null,
                'show_on_homepage' => $request->show_on_homepage ? 1 : 0,
                'options' => $request->options ? $request->options : null,
                'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
            ])->except([$request->hasFile('photo') ? '' : 'picture'])
        );

        $item->tags()->sync($request->get('tags'));

        return redirect()->route('item.index')->withStatus(__('Item successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('item.index')->withStatus(__('Item successfully deleted.'));
    }
}
