<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:permissions-list|permissions-create|permissions-edit|permissions-delete', ['only' => ['index','store']]);
        $this->middleware('permission:permissions-create', ['only' => ['create','store']]);
        $this->middleware('permission:permissions-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:permissions-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $permissions = Permission::orderBy('id','DESC')->paginate(5);
        // return view('permissions.index',compact('permissions'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
        $permissions = Permission::orderBy('id','DESC')->get();
        return view('permissions.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'guard_name' => 'required',
        ]);

        $permission = Permission::create([
            'name' => $request->input('name'),
            'guard_name' => $request->input('guard_name')
        ]);

        return redirect()->route('permissions.index')
            ->with('success','Permission created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);

        return view('permissions.edit',compact('permission'));
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
        $this->validate($request, [
            'name' => 'required',
            'guard_name' => 'required',
        ]);

        $permission = Permission::find($id);
        $permission->save();

        return redirect()->route('permissions.index')
            ->with('success','Permission updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("permissions")->where('id',$id)->delete();
        // return redirect()->route('permissions.index')
        //     ->with('success','Permission deleted successfully');
        $notification = array(
            'message' => 'Data has been Deleted!',
            'alert_type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
