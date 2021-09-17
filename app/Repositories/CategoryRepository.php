<?php

namespace App\Repositories;

use App\Models\Main\Category;

class CategoryRepository
{
    /**Data Formatting*/
    public function formatData($category)
    {
        return [
            'id' => $category->id,
            'category' => $category->category_name
        ];
    }
    /**++++++++++++++++++++++++++++++++ */

    public function getDataCategory()
    {
        $category = Category::orderBy('id', 'asc')
            ->get()
            ->map(function ($category) {
                return $this->formatData($category);
            });
        return $category;
    }

    /**++++++++++++++++++++++++++++++++ */
    public function findDataCategory($id)
    {
        $category = Category::where('id', $id)
            ->firstOrFail();
        return $this->formatData($category);
    }
}
