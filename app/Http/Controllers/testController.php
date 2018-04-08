<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

    
    public function bitoex()
    {

        

        $results = DB::table('BTC_BTIOEX')
                                ->orderBy('id','desc')
                                ->limit(1)
                                ->get();
        
        
        

        return View('bitoex')
                ->with('title', 'BTC_BTIOEX')
                ->with('text1', 'BTC美金價格:'.$results[0]->btc_price_usd)
                ->with('text2', '幣託買價:'.$results[0]->btc_buyprice_twd)
                ->with('text3', '幣託賣價:'.$results[0]->btc_sellprice_twd)
                ->with('text4', '依照台幣牌價賣價計算價格:'.$results[0]->usd_twd*$results[0]->btc_price_usd)
                ->with('text5', '最後更新時間(UTC+0):'.$results[0]->login_time);
    }





}