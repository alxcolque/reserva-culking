<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::latest()->paginate(10);
        return view('plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanRequest $request)
    {
        $plan = Plan::create($request->all());

        // Redirigir a la vista de detalles del plan recién creado
        return redirect()->route('plans.show', $plan->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        return view('plans.show', [
            'plan' => $plan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('plans.edit', [
            'plan' => $plan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlanRequest $request, Plan $plan)
    {
        $plan->update($request->all());

        return redirect()->route('plans.show', $plan->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')
            ->withSuccess(__('plan deleted successfully.'));
    }
}
