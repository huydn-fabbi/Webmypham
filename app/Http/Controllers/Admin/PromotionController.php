<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromotionController extends BaseController
{   
    public function __construct()
    {
        $name = "Khuyến Mãi";
        view()->share('name', $name);
    }

    public function getList()
    {   
        $promotions = Promotion::paginate(5);

        return view('admin.pages.promotion.list', compact('promotions'));
    }

    public function getAdd()
    {
        return view('admin.pages.Promotion.add');
    }

    public function getEdit($id)
    {   
        $promotion = Promotion::findOrFail($id);

        return view('admin.pages.promotion.edit', compact('promotion'));
    }
}
