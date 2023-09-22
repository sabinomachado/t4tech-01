<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Policies\CategoryPolicy;
use App\Repositories\CategoryRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    protected CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        try {
            $categories = $this->categoryRepository->getAll();
            return view('categorias.index', compact('categories'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function create()
    {
        try {
            return view('categorias.create');
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function edit($id)
    {
        try {
            $category = $this->categoryRepository->getById($id);
            return view('categorias.edit', compact('category'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        try {
            $data = $request->validated();
            $this->categoryRepository->update($id, $data);
            $categories = $this->categoryRepository->getAll();
            return view('categorias.index', compact('categories'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function destroy($id)
    {
        try {
            $this->categoryRepository->delete($id);
            $categories = $this->categoryRepository->getAll();
            return view('categorias.index', compact('categories'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function store(CategoryCreateRequest $request)
    {
        try {
            $data = $request->validated();
            $this->categoryRepository->create($data);
            $categories = $this->categoryRepository->getAll();
            return view('categorias.index', compact('categories'));
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }


}
