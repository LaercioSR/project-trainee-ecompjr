<?php

namespace App\Http\Controllers;

use App\Models\Federation;
use Illuminate\Http\Request;

class FederationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Federation::query();
        if(isset(request()->search)) {
            $search = str_replace('+', '%', '%'.request()->search.'%');
            $query->where('name', 'like', $search);
        }
        if(isset(request()->uf)) {
            $query->where('uf', request()->uf);
        }
        $federations = $query->paginate(8);
        return view('federations', compact('federations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('federations_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $federation = new Federation();
        $federation->name = $request->name;
        $federation->uf = $request->uf;
        $federation->save();
        return redirect("/federation/new");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Federation  $federation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Federation  $federation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $federation = Federation::find($id);
        return view('federations_update', compact('federation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Federation  $federation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $federation = Federation::find($id);
        $federation->name = $request->name;
        $federation->uf = $request->uf;
        $federation->save();
        return redirect()->route('federation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Federation  $federation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $federation = Federation::find($id);
        $federation->delete();
        return redirect("/federation");
    }
}
