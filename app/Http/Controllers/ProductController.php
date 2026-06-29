<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Get the uploads directory path (inside public_html, web accessible)
     */
    private function getUploadsPath()
    {
        $documentRoot = $_SERVER['DOCUMENT_ROOT'];
        $uploadsDir = $documentRoot . '/uploads/products';
        if (!is_dir($uploadsDir)) {
            @mkdir($uploadsDir, 0755, true);
        }
        return $uploadsDir;
    }

    public function index(Request $request)
    {
        $query = Product::with(['category', 'offer']);

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $products = $query->get();
        $products->each(function($p) {
            if ($p->variants && isset($p->variants['_subcategory'])) {
                $p->subcategory = $p->variants['_subcategory'];
            }
        });

        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::with(['category', 'offer'])->findOrFail($id);
        if ($product->variants && isset($product->variants['_subcategory'])) {
            $product->subcategory = $product->variants['_subcategory'];
        }
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable', // can be file or base64 string
            'category_id' => 'nullable|exists:categories,id',
            'offer_id' => 'nullable|exists:offers,id',
            'sizes' => 'nullable', // array or JSON string
            'variants' => 'nullable', // array or JSON string
            'subcategory' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'main_' . uniqid() . '.' . $extension;
            $file->move($this->getUploadsPath(), $filename);
            $validated['image_path'] = '/uploads/products/' . $filename;
        } elseif (isset($validated['image']) && is_string($validated['image']) && preg_match('/^data:image\/(\w+);base64,/', $validated['image'], $type)) {
            $data = substr($validated['image'], strpos($validated['image'], ',') + 1);
            $type = strtolower($type[1]);
            if (in_array($type, ['jpg', 'jpeg', 'gif', 'png', 'webp'])) {
                $data = base64_decode($data);
                if ($data !== false) {
                    $filename = 'main_' . uniqid() . '.' . $type;
                    file_put_contents($this->getUploadsPath() . '/' . $filename, $data);
                    $validated['image_path'] = '/uploads/products/' . $filename;
                }
            }
        }

        if (isset($validated['variants'])) {
            $variants = is_string($validated['variants']) ? json_decode($validated['variants'], true) : $validated['variants'];
            if (is_array($variants)) {
                foreach ($variants as &$v) {
                    if (isset($v['image']) && preg_match('/^data:image\/(\w+);base64,/', $v['image'], $type)) {
                        $data = substr($v['image'], strpos($v['image'], ',') + 1);
                        $type = strtolower($type[1]);
                        if (in_array($type, ['jpg', 'jpeg', 'gif', 'png', 'webp'])) {
                            $data = base64_decode($data);
                            if ($data !== false) {
                                $filename = 'var_' . uniqid() . '.' . $type;
                                file_put_contents($this->getUploadsPath() . '/' . $filename, $data);
                                $v['image'] = '/uploads/products/' . $filename;
                            }
                        }
                    }
                }
                $validated['variants'] = $variants;
                if (!isset($validated['image_path']) && count($variants) > 0 && isset($variants[0]['image'])) {
                    $validated['image_path'] = $variants[0]['image'];
                }
            }
        }
        
        if (isset($validated['sizes'])) {
            $sizes = is_string($validated['sizes']) ? json_decode($validated['sizes'], true) : $validated['sizes'];
            if (is_array($sizes)) {
                if (!isset($validated['variants']) || !is_array($validated['variants'])) {
                    $validated['variants'] = [];
                }
                $validated['variants']['_sizes'] = $sizes;
            }
        }
        
        if (!empty($validated['subcategory'])) {
            $subcat = \App\Models\Category::find($validated['subcategory']);
            if ($subcat) {
                if (!isset($validated['variants']) || !is_array($validated['variants'])) {
                    $validated['variants'] = [];
                }
                $validated['variants']['_subcategory'] = $subcat->name;
            }
        }

        unset($validated['image']);
        unset($validated['sizes']);
        unset($validated['subcategory']);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
            'image' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            'offer_id' => 'nullable|exists:offers,id',
            'sizes' => 'nullable',
            'variants' => 'nullable',
            'subcategory' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'main_' . uniqid() . '.' . $extension;
            $file->move($this->getUploadsPath(), $filename);
            $validated['image_path'] = '/uploads/products/' . $filename;
        } elseif (isset($validated['image']) && is_string($validated['image']) && preg_match('/^data:image\/(\w+);base64,/', $validated['image'], $type)) {
            $data = substr($validated['image'], strpos($validated['image'], ',') + 1);
            $type = strtolower($type[1]);
            if (in_array($type, ['jpg', 'jpeg', 'gif', 'png', 'webp'])) {
                $data = base64_decode($data);
                if ($data !== false) {
                    $filename = 'main_' . uniqid() . '.' . $type;
                    file_put_contents($this->getUploadsPath() . '/' . $filename, $data);
                    $validated['image_path'] = '/uploads/products/' . $filename;
                }
            }
        }

        if (isset($validated['variants'])) {
            $variants = is_string($validated['variants']) ? json_decode($validated['variants'], true) : $validated['variants'];
            if (is_array($variants)) {
                foreach ($variants as &$v) {
                    if (isset($v['image']) && preg_match('/^data:image\/(\w+);base64,/', $v['image'], $type)) {
                        $data = substr($v['image'], strpos($v['image'], ',') + 1);
                        $type = strtolower($type[1]);
                        if (in_array($type, ['jpg', 'jpeg', 'gif', 'png', 'webp'])) {
                            $data = base64_decode($data);
                            if ($data !== false) {
                                $filename = 'var_' . uniqid() . '.' . $type;
                                file_put_contents($this->getUploadsPath() . '/' . $filename, $data);
                                $v['image'] = '/uploads/products/' . $filename;
                            }
                        }
                    }
                }
                $validated['variants'] = $variants;
                if (!isset($validated['image_path']) && count($variants) > 0 && isset($variants[0]['image'])) {
                    $validated['image_path'] = $variants[0]['image'];
                }
            }
        }
        
        if (isset($validated['sizes'])) {
            $sizes = is_string($validated['sizes']) ? json_decode($validated['sizes'], true) : $validated['sizes'];
            if (is_array($sizes)) {
                if (!isset($validated['variants']) || !is_array($validated['variants'])) {
                    $validated['variants'] = $product->variants ?: [];
                }
                $validated['variants']['_sizes'] = $sizes;
            }
        }
        
        if (array_key_exists('subcategory', $validated)) {
            if (!isset($validated['variants']) || !is_array($validated['variants'])) {
                $validated['variants'] = $product->variants ?: [];
            }
            if (!empty($validated['subcategory'])) {
                $subcat = \App\Models\Category::find($validated['subcategory']);
                if ($subcat) {
                    $validated['variants']['_subcategory'] = $subcat->name;
                } else {
                    unset($validated['variants']['_subcategory']);
                }
            } else {
                unset($validated['variants']['_subcategory']);
            }
        }

        unset($validated['image']);
        unset($validated['sizes']);
        unset($validated['subcategory']);

        $product->update($validated);
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
