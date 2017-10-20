<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests\RoleRequest;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class RoleController extends Controller
{
    /**
     * Display a role listing.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listRoles = DB::table('roles')->where('is_active', '>', 0)->get();

        return view('roles.index', compact('listRoles'));
    }

    /**
     * Display all deleted roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleted()
    {
        $listRoles = DB::table('roles')->where('is_active', '<', 1)->get();

        return view('roles.deleted', compact('listRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = new role;
        $data = $request->all();
        $data['is_active']=1;
        $role->fill($data)->save();

        return redirect()->route('roles.index')->with('message', 'Rôle "'.$role->name.'" créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);

        return view('roles.edit', compact('role'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        $role = Role::find($id);
        $data = $request->all();
        $role->fill($data)->save();

        return redirect()->route('roles.index')->with('message', 'Modifications enregistrées avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Update the specified resource in storage and set its is_active to 0.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $role = Role::find($id);
        DB::table('roles')
            ->where('id', $id)
            ->update(['is_active' => 0]);
        return redirect()->route('roles.index')->with('message', 'Suppression du rôle "'.$role->name.'" effectuée avec succès.');
    }

    /**
     * Update the specified resource in storage and set its is_active to 1.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function revert($id)
    {
        $role = Role::find($id);
        DB::table('roles')
            ->where('id', $id)
            ->update(['is_active' => 1]);
        return redirect()->route('roles.deleted')->with('message', 'Rôle "'.$role->name.'" à nouveau disponible.');
    }
}
