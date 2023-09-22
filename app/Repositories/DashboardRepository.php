<?php

//criar um repository
namespace App\Repositories;

use App\Models\Category;
use App\Models\News;

class DashboardRepository implements DashboardRepositoryInterface
{
    // public function __construct()
    // {
    //  //
    // }

    public function getCategorys()
    {
        $categorys = Category::all()->count();
        return $categorys;
    }

    public function getNews()
       {
        $news = News::all()->count();
        return $news;
    }
}
