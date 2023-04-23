<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Articles::all();

        return view('pages.backend.articles.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $resource = $request->file('thumbnail');
            $name = $resource->getClientOriginalName();
            $finalName = date('His')  . $name;
            $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
            $slug = strtolower(str_replace(" ", "-", strip_tags($request->judul)));
            $slug = strlen($slug) > 100 ? substr($slug, 0, 100) : $slug;
            Articles::create([
                'slug' => $slug,
                'judul' => $request->judul,
                'thumbnail' => $finalName,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'content' => $request->content,

            ]);
        } else {
            $slug = strtolower(str_replace(" ", "-", strip_tags($request->judul)));
            $slug = strlen($slug) > 100 ? substr($slug, 0, 100) : $slug;
            Articles::create([
                'slug' => $slug,
                'judul' => $request->judul,
                'thumbnail' => 'thumbnail-default.jpg',
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'content' => $request->content,


            ]);
        }

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Articles::findOrFail($id);

        return view('pages.backend.articles.detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Articles::findOrFail($id);

        return view('pages.backend.articles.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $this->validate($request, [
            'thumbnail' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $resource = $request->file('thumbnail');
            $name = $resource->getClientOriginalName();
            $finalName = date('His')  . $name;
            $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
            $slug = strtolower(str_replace(" ", "-", strip_tags($request->judul)));
            $slug = strlen($slug) > 100 ? substr($slug, 0, 100) : $slug;
            $item = Articles::findOrFail($id);
            $item->update([
                'slug' => $slug,
                'judul' => $request->judul,
                'thumbnail' => $finalName,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'kategori' => $request->kategori,
                'content' => $request->content,
            ]);
        } else {
            $slug = strtolower(str_replace(" ", "-", strip_tags($request->judul)));
            $slug = strlen($slug) > 100 ? substr($slug, 0, 100) : $slug;
            $item = Articles::findOrFail($id);
            $item->update([
                'slug' => $slug,
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'kategori' => $request->kategori,
                'content' => $request->content,
            ]);
        }

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Articles::findOrFail($id);
        $item->delete();

        return redirect()->route('articles.index');
    }
}
