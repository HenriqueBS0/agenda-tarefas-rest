<?php

namespace App\Controllers;

use Leaf\Controller;

class ControllerChecklist extends Controller
{
    public function getAll()
    {
        response()->json(['message' => 'Pega Todos']);
    }
    public function get($id)
    {
        response()->json(['message' => "Pega {$id}"]);
    }
    public function create()
    {
        response()->json(['message' => "Cria"]);
    }
    public function update($id)
    {
        response()->json(['message' => "Atualiza {$id}"]);
    }
    public function remove($id)
    {
        response()->json(['message' => "Remove {$id}"]);
    }
}
