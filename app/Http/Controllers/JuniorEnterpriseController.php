<?php

namespace App\Http\Controllers;

use App\Models\Federation;
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
        $federations = Federation::all();
        $query = JuniorEnterprise::query();
        if(isset(request()->search)) {
            $search = str_replace('+', '%', '%'.request()->search.'%');
            $query->where('name', 'like', $search);
        }
        if(isset(request()->federation)) {
            $query->where('federation_id', request()->federation);
        }
        $junior_enterprises = $query->paginate();
        return view('junior_enterprises', [ 'junior_enterprises' => $junior_enterprises, 'federations' => $federations ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $federations = Federation::all();
        return view('junior_enterprises_create', compact('federations'));
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
        $junior_enterprise->federation_id = $request->federation;
        $junior_enterprise->save();
        return redirect("/junior-enterprise/new");
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
        $federations = Federation::all();
        $junior_enterprise = JuniorEnterprise::find($id);
        return view('junior_enterprises_update', [ 'junior_enterprise' => $junior_enterprise, 'federations' => $federations ]);
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
        $junior_enterprise = JuniorEnterprise::find($id);
        $junior_enterprise->name = $request->name;
        $junior_enterprise->federation_id = $request->federation;
        $junior_enterprise->save();
        return redirect()->route('junior_enterprise.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JuniorEnterprise  $juniorEnterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $junior_enterprise = JuniorEnterprise::find($id);
        $junior_enterprise->delete();
        return redirect("/junior-enterprise");
    }
}
