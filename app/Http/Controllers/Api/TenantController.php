<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\StoreRequest;
use App\Http\Requests\Tenant\UpdateRequest;
use App\Models\Tenant;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TenantController extends Controller
{
    use ApiResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tenant = Tenant::get();
        return $this->apiResponse($tenant,'',200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return ResponseFactory|Response
     */
    public function store(StoreRequest $request)
    {
        $tenant = Tenant::create($request->validated());
        return $this->apiResponse($tenant,'Store has success',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $tenant = Tenant::findorfail($id);
            if ($tenant) {
                return $this->apiResponse($tenant,'Response has success',200);
            }
        return $this->apiResponse(null,'Not exist Tenant',204);
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Tenant $tenant
     * @return ResponseFactory|Response
     */
    public function update(UpdateRequest $request, Tenant $tenant)
    {
        $tenant->update($request->validated());
        return $this->apiResponse($tenant,'Update has success',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tenant $tenant
     * @return ResponseFactory|Response
     */
    public function destroy(Tenant $tenant)
    {
       $tenant->delete();
        return $this->apiResponse(null,'delete has success',200);
    }
}
