<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        $infoMenu = [
            [
                'img' => 'buy-comics-digital-comics.png',
                'text' => 'digital comics'
            ],
            [
                'img' => 'buy-comics-merchandise.png',
                'text' => 'dc merchandise'
            ],
            [
                'img' => 'buy-comics-subscriptions.png',
                'text' => 'subscription'
            ],
            [
                'img' => 'buy-comics-shop-locator.png',
                'text' => 'comic shop locator'
            ],
            [
                'img' => 'buy-dc-power-visa.svg',
                'text' => 'dc power visa'
            ],
        ];

        $comics = Comic::all();

        return view('comics.index', compact('comics', 'infoMenu'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $comic = $request->all();

        $newComic = Comic::create($comic);

/*        $newComic = new Comic();

        $newComic->title = $comic['title'];
        $newComic->series = $comic['series'];
        $newComic->type = $comic['type'];
        $newComic->sale_date = $comic['sale_date'];
        $newComic->price = $comic['price'];
        $newComic->thumb = $comic['thumb'];
        $newComic->description = $comic['description'];

        $newComic->save();*/

        return redirect()->route('comics.show', $newComic->id);
    }

    public function show(Comic $comic)
    {
        return view('comics.show',compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        //esegue sia il fill() che il save()
        $comic->update($request->all());

        return redirect()->route('comics.show', compact('comic'));
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
