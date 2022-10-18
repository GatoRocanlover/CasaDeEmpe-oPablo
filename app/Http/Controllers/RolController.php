<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolController extends Controller
{

    public function __contruct()
    {
        $this->middleware('permission:ver-rol | crear-rol | editar-rol | borrar-rol', ['only' => ['index']]);
        $this->middleware('permission:ver-rol', ['only' => ['create, store']]);
        $this->middleware('permission:editar-rol', ['only' => ['edit, update']]);
        $this->middleware('permission:borrar-rol', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $roles = Role::paginate(5);
     return view('roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
     return view('roles.crear',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required','permission'=>'required']);
        $role = Role::create(['name'=>$request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        return redirect()->route('roles.index');
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
        $permission = permission::get();
        $rolePermission = DB::table('role_has_permission')->where('role_has_permission.role_id', $id)
        ->pluck('role_has_permission.permission_id','role_has_permission.permission_id')
        ->all();
        return view('roles.editar', compact('role','permission','rolePermission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['name'=>'required','permission'=>'required']);
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermisssion($request->input('permission'));
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('roles')->where('id',$id)->delete();
        return redirect('roles.index');
    }
}
