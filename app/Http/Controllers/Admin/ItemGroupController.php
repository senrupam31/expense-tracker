<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemGroup;

class ItemGroupController extends Controller
{
    public function index()
    {
        $itemGroups = ItemGroup::all();
        return view('admin.item-groups.index', compact('itemGroups'));
    }
}
