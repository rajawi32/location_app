<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $users = User::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->paginate(5);
        $count = User::count();
        return view('users.index', compact('users', 'count'));
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
