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

        // DB（MySQL）からinfoテーブルの全件取得結果
        $infos = DB::select('select * from info');
        $data = ['infos' => $infos];

        return view('infoform',$data);
    }

    // post送信
    public function add(Request $request) {
                
        $param = [
            'title' => $request->title,
            'content' => $request->body
        ];

        // formの入力情報をDB登録
        DB::insert('insert into info (title, content) values (:title, :content)', $param);

        return redirect('/info');
    }

    // infoの削除
    public function delete($title) {

        // 対象のinfo削除
        $deleted = DB::delete('delete from info where title = ?',[$title]);

        return redirect('/info');
    }
    
}
