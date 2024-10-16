<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with(['taiKhoan', 'taiKhoan.phanQuyen'])->get();
        return view('admin.players.index', compact('players'));
    }

    public function create()
    {
        return view('admin.players.create');
    }

    public function store(Request $request)
    {
    
        return redirect()->route('players.index');
    }

    public function show($id)
    {
        $player = Player::findOrFail($id);
        return view('admin.players.show', compact('player'));
    }
}
