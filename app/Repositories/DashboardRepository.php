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
        $teste = 5;
        return $teste;
    }

    public function getNews()
       {
        $teste2 = 9;
        return $teste2;
    }
}