<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Posts;

class HomeController extends Controller
{
    public function index(){
        $arrayOfArticle = Posts::select("posts.*")->where('tags','LIKE','%artikel%')->orWhere('tags','LIKE','%berita%')->paginate(2);
        $announcements = Posts::select("posts.*")->where('tags','LIKE','%pengumuman%')->paginate(10);
        return view('home',
        [
            'arrayOfArticle' => $arrayOfArticle,
            'announcements' => $announcements
        ]
    );
    }
}
