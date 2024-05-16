<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comics.index', ['comics' => Comic::orderby('title', 'asc')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$data = $request->all();

        $val_data = $request->validate([
            'title' => 'required|min:3|max:50|',
            'description' => 'required|min:3|max:4096',
            'thumb' => 'required|min:3|max:255',
            'price' => 'required|max:10',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:50',
        ]);


        /*$newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->save(); */
        $comic = Comic::create($request->all());

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($request->all());

        $val_data = $request->validate([
            'title' => 'required|min:3|max:50|',
            'description' => 'required|min:3|max:4096',
            'thumb' => 'required|min:3|max:255',
            'price' => 'required|max:10',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:50',
        ]);

        $comic->update($request->all());

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
