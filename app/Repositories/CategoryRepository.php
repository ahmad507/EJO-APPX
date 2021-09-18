<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Main\Category;


class CategoryRepository
{
    /**Data Formatting ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
    public function formatData($category)
    {
        return [
            'id' => $category->id,
            'category' => $category->category_name,
        ];
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function getDataCategory()
    {
        $category = Category::orderBy('id', 'asc')
            ->get()
            ->map(function ($category) {
                return $this->formatData($category);
            });
        $newcategory = json_decode($category);
        return $newcategory;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataCategory($id)
    {
        $category = Category::where('id', $id)
            ->firstOrFail();
        $newcategory = json_decode($category);
        return $this->formatData($newcategory);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function storeDataCategory(Request $request)
    {
        $category = Category::create(
            [
                'category_name' => $request->input('category_name')
            ]
        );
        $category->save();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataCategoryById($id)
    {
        $category = Category::findOrFail($id);
        $newcategory = json_decode($category);
        return $newcategory;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function updateDataCategory(Request $request, $id)
    {
        $input = $request->all();
        $category = Category::findOrFail($id);
        $category->update($input);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function deleteDataCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
