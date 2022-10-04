<?php


namespace App\Http\Controllers;


use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TenantController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
       return view('web.tenants.index',[
           'tenants' => Tenant::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Tenant $tenant
     * @return void
     */
    public function show(Tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tenant $tenant
     * @return void
     */
    public function edit(Tenant $tenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tenant $tenant
     * @return void
     */
    public function update(Request $request, Tenant $tenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tenant $tenant
     * @return void
     */
    public function destroy(Tenant $tenant)
    {
        //
    }
}
