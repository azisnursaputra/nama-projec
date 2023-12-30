<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertItemRequest;
use Illuminate\Http\Request;
use App\Models\Item;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function insertPage()
    {
        return view('insertItem');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insert(InsertItemRequest $request)
    {
        $post = $request->all();
        $insertItem = [
            'item_name'=>$post['item_name'],
            'item_type'=>$post['item_type'],
            'item_price'=>$post['item_price'],
            'item_desc'=>$post['item_desc']
        ];

        $item = Item::create($insertItem);
        $item->save();

        return redirect()->route('item');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
