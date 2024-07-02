<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        return redirect()->back()->with('success', 'Category added successfully');
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'The category has been deleted successfully');
    }

    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();

        return redirect('/view_category')->with('success', 'The category has been updated successfully');
    }

    public function add_item()
    {
        $categories = Category::all();
        return view('admin.add_item', compact('categories'));
    }

    public function upload_item(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'category' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new Item;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('items'), $imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back()->with('success', 'Item added successfully');
    }

    public function view_item()
    {
        $items = Item::all();
        return view('admin.view_item', compact('items'));
    }

    public function delete_item($id)
    {
        $data = Item::find($id);
    
        if (!$data) {
            return redirect()->back()->with('error', 'Item not found');
        }
    
        $image_path = public_path('items/' . $data->image);
    
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    
        $data->delete();
    
        return redirect()->back()->with('success', 'Item deleted successfully');
    }

    public function update_item($id)
    {
        $data = Item::find($id);
        $categories = Category::all(); // Mengambil semua kategori
        return view('admin.update_page', compact('data', 'categories')); // Mengirimkan data dan categories ke view
    }
}
