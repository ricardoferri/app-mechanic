<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;


class UsuariosController extends Controller
{
    public function index()
{
    $usuarios = Usuarios::all();
    return response()->json($usuarios);
}

public function show($id)
{
    $usuarios = Usuarios::find($id);
    return response()->json($usuarios);
}

public function store(Request $request)
{
    $usuarios = new Usuarios;
    $usuarios->name = $request->name;
    $usuarios->email = $request->email;
    $usuarios->password = bcrypt($request->password);
    $usuarios->save();
    return response()->json($usuarios);
}

public function update(Request $request, $id)
{
    $usuarios = Usuarios::find($id);
    $usuarios->name = $request->name;
    $usuarios->email = $request->email;
    if ($request->password) {
        $usuarios->password = bcrypt($request->password);
    }
    $usuarios->save();
    return response()->json($usuarios);
}

public function destroy($id)
{
    $usuarios = Usuarios::find($id);
    $usuarios->delete();
    return response()->json(['message' => 'Usuarios deleted']);
}
}
