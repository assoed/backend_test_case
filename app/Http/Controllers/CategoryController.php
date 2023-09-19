<?php
namespace App\Http\Controllers;

use App\Models\Category; // Импорт модели Category
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Получение иерархического дерева категорий
    public function getTree()
    {
        $rootCategories = Category::whereNull('parent_id')->get();

        $tree = [];
        foreach ($rootCategories as $rootCategory) {
            $tree[] = $this->buildTree($rootCategory);
        }

    return response()->json($tree);
    }

    // Рекурсивное построение дерева
    private function buildTree(Category $category)
    {
        $children = $category->children;

        $subtree = [
        'id' => $category->id,
        'name' => $category->name,
        'children' => [],
        ];

        foreach ($children as $child) {
            $subtree['children'][] = $this->buildTree($child);
        }

    return $subtree;
    }

    // Получение плоского списка категорий
    public function getFlatList()
    {
        $categories = Category::all();

        return response()->json($categories);
    }
}
