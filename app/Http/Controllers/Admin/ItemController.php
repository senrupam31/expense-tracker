<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemGroup;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('itemGroup')->get();
        return view('admin.items.index', compact('items'));
    }
}
