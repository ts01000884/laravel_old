<?php

namespace App\Http\Controllers;

class testController extends Controller {

    public function index()
    {
        return view('test')
            ->with('title','貓王網')
            ->with('text1','測試表格1');
    }

    public function show($id)
    {
        return View('test')
                ->with('title', '首頁')
                ->with('text1', '未發現這段內容喔!請在確認網址!'.$id);
    }



}