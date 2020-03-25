<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ImagePath;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; 

class BlogController extends Controller
{
    public function __construct()
    {
        $name = "Bài Viết";
        view()->share('name', $name);
    }

    public function getList(Request $request)
    {   
        $query = Blog::select('blogs.*', 'users.user_id', 'users.name')->join('users','users.user_id', '=', 'blogs.user_id');
        $filters = [
            'blogs.title' => [
                'where' => 'like',
                'value' => null,
            ],
            'blogs.blog_id' => [
                'where' => '=',
                'value' => null,
            ],
            'users.user_id' => [
                'where' => '=',
                'value' => null
            ]
        ];
        $filters['blogs.title']['value'] = $request->name ?? '';
        $filters['blogs.blog_id']['value'] = $request->id ?? '';
        $filters['users.user_id']['value'] = $request->user ?? '';

        foreach ($filters as $key => $where) {
            if (!$where['value']) {
                continue;
            }
            if ($where['where'] == 'like') {
                $query = $query->where($key, 'like', '%' . $where['value'] . '%');
            } elseif ($where['where'] == '=') {
                $query = $query->where($key, '=', $where['value']);
            }
        }

        $blogs = $query->paginate(5);
        $users = User::select('users.*')->get();

        return view('admin.pages.blog.list', compact('blogs', 'users'));
    }

    public function getAdd()
    {
        return view('admin.pages.blog.add');
    }

    public function getEdit($id)
    {   
        $blog = Blog::findOrFail($id);

        return view('admin.pages.blog.edit', compact('blog'));
    }

    public function postAdd(Request $request) 
    {   
        $image = $request->file('file');
        $formData = $request->all();
        $user_id = Auth::user()->user_id;
        $imagePath = Storage::disk('uploads')->put('blogs' . '/' . $user_id, $image);
        $arr = [
            'user_id' => $user_id,
            'image' => '/uploads' . '/' . $imagePath
        ];
        $data = array_merge($formData, $arr);
        Blog::create($data);


        return redirect(route('listBlog'))->with('message', 'Tạo mới thành công!');
    }

    public function postEdit(Request $request, $id)
    {   
        $item = Blog::findOrFail($id);
        $image = $request->file('file');
        $formData = $request->all();

        if (isset($image))
        {
            unlink(substr($item->image, 1));
            $imagePath = Storage::disk('uploads')->put('blogs' . '/' . $item->user_id, $image);
            $arr = [
                'image' => '/uploads' . '/' . $imagePath
            ];
            $data = array_merge($formData, $arr);
            $item->update($data);
        } else {
            $item->update($formData);
        }
        
        return redirect(route('editBlog', $id))->with('message', 'Cập nhật thành công!');
    }

    public function getDelete($id)
    {
        $item = Blog::findOrFail($id);
        $item->delete();

        return redirect(route('listBlog'))->with('message', 'Xóa thành công!');
    }
}
