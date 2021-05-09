<?php

namespace App\Http\Controllers;

use App\Models\JuniorEnterprise;
use Illuminate\Http\Request;

class JuniorEnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $junior_enterprises = JuniorEnterprise::all();

        dd($junior_enterprises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $junior_enterprise = new juniorEnterprise();
        $junior_enterprise->name = $request->name;
        $junior_enterprise->federation_id = $request->federation_id;
        $junior_enterprise->save();
        dd($junior_enterprise);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JuniorEnterprise  $juniorEnterprise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JuniorEnterprise  $juniorEnterprise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JuniorEnterprise  $juniorEnterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JuniorEnterprise  $juniorEnterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $junior_enterprise = JuniorEnterprise($id);
        $junior_enterprise->delete();
    }
}
