<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private const FOLDER_PATH_LOCAL = 'img/reservas/categoria';
    public function index(Request $request)
    {
        $search = $request->search;
        $categories = Category::where('title','LIKE','%'.$request->search.'%')
            ->latest('id')
            ->paginate(8);
        return view('categories.index', compact('categories', 'search'));
    }

    // Mostrar el formulario para crear una nueva categoría
    public function create()
    {
        return view('categories.create');
    }

    // Almacenar una nueva categoría en la base de datos
    public function store(CategoryRequest $request)
    {
        $category = Category::create([
            'title' => $request->title,
            'color' => $request->color
        ]);
        $iconPhoto  = $request->file('icon');
        if ($iconPhoto) {
            $imageName = FileStorage::upload($iconPhoto, $iconPhoto->getClientOriginalName(), $this::FOLDER_PATH_LOCAL);
            $category->icon = $imageName;
            $category->save();
        }
        return redirect()->route('categories.index')->with('success', 'Categoría creada con éxito.');
    }

    // Mostrar los detalles de una categoría específica
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    // Mostrar el formulario para editar una categoría
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Actualizar una categoría en la base de datos
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        $iconPhoto  = $request->file('icon');
        if ($iconPhoto) {
            FileStorage::delete($category->icon, $this::FOLDER_PATH_LOCAL);
            $imageName = FileStorage::upload($iconPhoto, $iconPhoto->getClientOriginalName(), $this::FOLDER_PATH_LOCAL);
            $category->icon = $imageName;
        }
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Categoría actualizada con éxito.');
    }

    // Eliminar una categoría de la base de datos
    public function destroy(Category $category)
    {
        FileStorage::delete($category->icon, $this::FOLDER_PATH_LOCAL);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Categoría eliminada con éxito.');
    }
}
