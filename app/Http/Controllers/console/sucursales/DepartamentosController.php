<?php

namespace App\Http\Controllers\console\sucursales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{

    public function index()
    {
        return view(
            'console/sucursales/departamentos/list',
            ['departamentos' => Departamento::all()]
        );
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }
}
