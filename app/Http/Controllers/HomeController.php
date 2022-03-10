<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user()->getPermissionNames());
        // Create Role nd Prmission
        // Role::create(['name' => 'hr']);
        // Permission::create(['name' => 'edit hr']);

        // A permission can be assigned to a role using 1 of these methods:
        // $role = Role::create(['name' => 'admin']);
        // $permission = Permission::create(['name' => 'all']);

        // Multiple permissions can be synced to a role using 1 of these methods:
        // $role->syncPermissions($permissions);
        // $permission->syncRoles($roles);

        // A permission can be removed from a role using 1 of these methods:
        // $role->revokePermissionTo($permission);
        // $permission->removeRole($role);

        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);
        return view('home');
    }
}
