<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class TestController extends BaseController
{
    public function GoToMainPage()
    {
        $news = News::all();
        
        return view('main', ['news'=>$news]);
    }

    public function GoToNewsPage()
    {
        $news = News::all();

        return view('news', ['news'=>$news]);
    }

    public function GoToDetailNewsPage($newsID)
    {
        $news = News::where('id', $newsID)->first();
        return view('detailNews', ['news' => $news]);
    }
    
    public function GoToContactsPage()
    {
        return view('contacts');
    }

    public function CreateUser(Request $data)
    {
        $validate = $data->validate(
            [
                'name' => 'required',
                'phone_number' => 'required'
            ]
        );
        $user = new User;
        $user->name = $validate['name'];
        $user->phone_number = $validate['phone_number'];
        $result = $user->save();
        return $result;
    }
}
