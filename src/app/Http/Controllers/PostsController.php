<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
// use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;


class PostsController extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // ページの表示
    public function create() {
        return view('infoform');
    }

    // post送信
    public function add(Request $request) {
        
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
        
        $param = [
            'title' => $request->title,
            'content' => $request->body
        ];

        DB::insert('insert into info (title, content) values (:title, :content)', $param);

        return redirect('/info');
    }
}
