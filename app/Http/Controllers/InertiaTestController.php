<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/Index',[
            'blogs' => InertiaTest::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    public function show($id)
    {
        return Inertia::render('Inertia/Show',[
            'id' => $id,
            'blog' => InertiaTest::findOrFail($id)
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:20'],
            'content' => ['required'],
        ]);

        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        return to_route('inertia.index')->with([
            'message' => '登録しました。'
        ]);
    }
    //追記

    public function delete($id)
    {

        //$idを変数bookに格納します。
        $book = InertiaTest::findOrFail($id);
        //$bookを削除する処理
        $book->delete();

        return to_route('inertia.index')->with([
            'message' => '削除しました。'
        ]);
    }
}
