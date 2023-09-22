<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Http\Resources\NewsResource;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Repositories\NewsRepository;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NewsController extends Controller
{
    protected NewsRepository $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        try {
            $news = $this->newsRepository->getAll();
            //dd($news);
            return view('noticias.index', compact('news'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
       
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('noticias.show');
    }
}
