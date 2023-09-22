<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DashboardRepositoryInterface;


class DashboardController extends Controller
{
   
    private $dashboardRepository;

    public function __construct(DashboardRepositoryInterface $dashboardRepository)
    {
        //$this->middleware(['auth', 'verified']);
        $this->dashboardRepository = $dashboardRepository;
    }

    public function index()
    {
        $categorys = $this->dashboardRepository->getCategorys();
        $news = $this->dashboardRepository->getNews();

        return view('dashboard', compact('categorys', 'news'));
    }
}
