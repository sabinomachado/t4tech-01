<?php

namespace App\Http\Controllers;


use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\NewsRepository;


class NewsController extends Controller
{
    protected NewsRepository $newsRepository;
    protected CategoryRepository $categoryRepository;

    public function __construct(NewsRepository $newsRepository, CategoryRepository $categoryRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        try {
            $news = $this->newsRepository->getAll();
            return view('noticias.index', compact('news'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }

    }
    public function create()
    {
        try {
        $categories = $this->categoryRepository->getAll();
        return view('noticias.create', compact('categories'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function store(NewsCreateRequest $request)
    {
        try{
            $data = $request->validated();
            $this->newsRepository->create($data);
            $news = $this->newsRepository->getAll();
            return view('noticias.index', compact('news'));
        }  catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function edit($id){
        try {
            $new = $this->newsRepository->getById($id);
            $categories = $this->categoryRepository->getAll();
            return view('noticias.edit', compact('new', 'categories'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function destroy($id)
    {
        try {
            $result = $this->newsRepository->delete($id);
            $news = $this->newsRepository->getAll();
            return view('noticias.index', compact('news'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function update(NewsUpdateRequest $request, $id)
    {
        try {
            $data = $request->validated();
            $this->newsRepository->update($id, $data);
            $news = $this->newsRepository->getAll();
            return view('noticias.index', compact('news'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
