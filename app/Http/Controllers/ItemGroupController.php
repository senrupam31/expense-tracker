<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemGroup;

class ItemGroupController extends Controller
{
    public function index()
{
    $itemGroups = ItemGroup::with('items')->get();
    return view('item-groups.index', compact('itemGroups'));
}

}
