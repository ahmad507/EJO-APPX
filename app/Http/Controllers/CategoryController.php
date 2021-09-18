<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Repositories\CategoryRepository;


class CategoryController extends Controller
{
    protected $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $category = $this->categoryRepository->getDataCategory();
        return view('main.category.index', compact('category'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $category = $this->categoryRepository->findDataCategory($id);
        return $category;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function create()
    {
        return view('main.category.create');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function store(StoreCategoryRequest $category)
    {
        $this->categoryRepository->storeDataCategory($category);
        return redirect()->route('category.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function edit($id)
    {
        $category = $this->categoryRepository->findDataCategoryById($id);
        return view('main.category.edit', compact('category'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function update(StoreCategoryRequest $id, $category)
    {
        $this->categoryRepository->updateDataCategory($id, $category);
        return redirect()->route('category.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function destroy($id)
    {
        $this->categoryRepository->deleteDataCategory($id);
        return redirect()->route('category.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
