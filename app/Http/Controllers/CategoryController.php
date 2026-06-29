<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Get the uploads directory path (inside public_html, web accessible)
     */
    private function getUploadsPath()
    {
        // document_root = /home/u752131499/domains/madeliastorybyreshma.com/public_html
        $documentRoot = $_SERVER['DOCUMENT_ROOT'];
        $uploadsDir = $documentRoot . '/uploads/categories';
        if (!is_dir($uploadsDir)) {
            @mkdir($uploadsDir, 0755, true);
        }
        return $uploadsDir;
    }

    public function index()
    {
        return response()->json(Category::with('children')->whereNull('parent_id')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
            'slug' => 'nullable|string|unique:categories',
            'image_url' => 'nullable|string',
            'image' => 'nullable|image|max:15360',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'cat_' . uniqid() . '.' . $extension;
            $file->move($this->getUploadsPath(), $filename);
            $validated['image_url'] = '/uploads/categories/' . $filename;
        } elseif (isset($validated['image_url']) && preg_match('/^data:image\/(\w+);base64,/', $validated['image_url'], $type)) {
            $data = substr($validated['image_url'], strpos($validated['image_url'], ',') + 1);
            $type = strtolower($type[1]);
            if (in_array($type, ['jpg', 'jpeg', 'gif', 'png', 'webp'])) {
                $data = base64_decode($data);
                if ($data !== false) {
                    $filename = 'cat_' . uniqid() . '.' . $type;
                    file_put_contents($this->getUploadsPath() . '/' . $filename, $data);
                    $validated['image_url'] = '/uploads/categories/' . $filename;
                }
            }
        }

        $category = Category::create($validated);
        return response()->json($category, 201);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
            'slug' => 'nullable|string|unique:categories,slug,' . $category->id,
            'image_url' => 'nullable|string',
            'image' => 'nullable|image|max:15360',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'cat_' . uniqid() . '.' . $extension;
            $file->move($this->getUploadsPath(), $filename);
            $validated['image_url'] = '/uploads/categories/' . $filename;
        } elseif (isset($validated['image_url']) && preg_match('/^data:image\/(\w+);base64,/', $validated['image_url'], $type)) {
            $data = substr($validated['image_url'], strpos($validated['image_url'], ',') + 1);
            $type = strtolower($type[1]);
            if (in_array($type, ['jpg', 'jpeg', 'gif', 'png', 'webp'])) {
                $data = base64_decode($data);
                if ($data !== false) {
                    $filename = 'cat_' . uniqid() . '.' . $type;
                    file_put_contents($this->getUploadsPath() . '/' . $filename, $data);
                    $validated['image_url'] = '/uploads/categories/' . $filename;
                }
            }
        }

        $category->update($validated);
        return response()->json($category);
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
}
