<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
    public function GetAllNews()
    {
        print_r('all news');
    }

    public function Create(Request $data)
    {
         $validate = $data->validate(
                [
                        'name' => 'required'
                ]
        );

        print_r($validate);
        exit();

        $news = new News;
        $news->name = "Новость из ларавель";
        $news->preview_text = "Новость из ларавель preview";
        $news->detail_text = "Новость из ларавель detail";
        $result = $news->save();
        print_r($result);

    }
}
