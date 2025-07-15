<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DiaryController extends Controller
{
    public function __construct()
    {
        $this-> middleware('auth');
    }

    public function top()
    {
        $now = Carbon::now()->toDateString();;
        $today = Carbon::today();
        $diaries = \Auth::user()->diaries()->whereDate('stream_start', $today)->get();
        return view('diaries.top',[
            'title' => 'TOPPAGE',
            'now' => $now,
            'diaries' => $diaries,
        ]);
    }

    public function index()
    {
        $diaries = \Auth::user()->diaries;
        return view('diaries.index',[
            'title' => '投稿一覧',
            'diaries' => $diaries,
        ]);
    }

    public function create()
    {
        return view('diaries.create',[
            'title' => '新規投稿',
        ]);
    }

    public function store(Request $request)
    {
        $diary = Diary::create([
            'user_id' => \Auth::user()->id,
            'title' => $request->title,
            'stream_title' => $request->stream_title,
            'stream_url' => $request->stream_url,
            'stream_start' => $request->stream_start,
            'before_body' => $request->before_body,
            'after_body' => $request->after_body,
        ]);
        session()->flash('success', '投稿完了！');

        return redirect()->route('diaries.show', $diary->id);
    }

    public function show(string $id)
    {
        $diary = Diary::find($id);
        return view('diaries.show',[
            'title' => '$diary->title',
            'diary' => $diary,
        ]);
    }

    public function edit(string $id)
    {
        $diary = Diary::find($id);
        return view('diaries.edit',[
            'title' => '編集',
            'diary' => $diary,
        ]);
    }

    public function update(Request $request, string $id)
    {
            $diary = Diary::find($id);
            $diary->update($request->only(
                ['title', 'stream_title', 'stream_url','stream_start','before_body', 'after_body']),);
            session()->flash('success', '投稿を編集しました');
            return redirect()->route('diaries.show', $diary->id);
    }

    public function delete(string $id)
    {
        $diary = Diary::find($id);
        return view('diaries.delete',[
            'title' => '削除確認',
            'diary' => $diary,
        ]);
    }

    public function destroy(string $id)
    {
        $diary = Diary::find($id);
        $diary->delete();
        \Session::flash('success', '投稿を削除しました');
        return redirect()->route('diaries.index');
    }
}
