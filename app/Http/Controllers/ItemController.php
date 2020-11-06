<?php

namespace App\Http\Controllers;
use App\Models\Item;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Dislplay a list of all of the items
     *
     * @param  Request  $request
     * @return Response
     */
    public function index () {
        $items = Item::all();
        return view('items.index', compact ('items'));
    }

  /*   *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameItem' => 'required|min:1|max:255',
            'category' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:255',
           
        ]);

        Item::create($request->all());

        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.itemShow', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'nameItem' => 'required|min:5|max:255',
            'category' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:255',
           
        ]);

        Item::where('id', $item->id)
            ->update($request->except('_method', '_token'));

        return redirect()->route('item.show', [$item]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('item.index');
    }
}
