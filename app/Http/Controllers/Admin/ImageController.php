<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagePath;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class ImageController extends Controller
{   
    public function __construct()
    {
        $name = "Hình Ảnh";
        view()->share('name', $name);
    }

    public function getAll($id)
    {
        $images = ImagePath::where('product_id', $id)->select('image_paths.*')->paginate(5);

        return view('admin.pages.image', compact('images', 'id'));
    }

    public function postAdd(Request $request, $id)
    {
        $images = $request->file('images');
        $product = Product::where('product_id', $id)->select('products.*')->first();

        foreach($images as $image) {
            $imagePath = Storage::disk('uploads')->put('products' . '/' . $product->product_id, $image);
            ImagePath::create([
                'product_id' => $product->product_id,
                'image_type' => 1,
                'file_name' => $product->product_name,
                'image_url' => '/uploads' . '/' . $imagePath,
            ]);
        }

        return redirect(route('listImage', $id))->with('message', 'Thêm ảnh thành công!');
    }

    public function getDelete($id)
    {   
        $image = ImagePath::findOrFail($id);
        $product_id = $image->product_id;
        unlink(substr($image->image_url, 1));
        $image->delete();

        return redirect(route('listImage', $product_id))->with('message', 'Xóa ảnh thành công!');
    }
}
