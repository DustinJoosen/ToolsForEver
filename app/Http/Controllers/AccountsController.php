<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:admin");
    }


    public function index(){
        $employees = Role::all()->where('name', '==', 'employee')->first()->users;
        $outside_sellers = Role::all()->where('name', '==', 'outside_seller')->first()->users;

        $accounts = $employees->merge($outside_sellers);
        return view('accounts.index',[
            'accounts' => $accounts->sortby("role_id")
        ]);
    }

    public function create(){
        return view('accounts.create',[
            'roles' => Role::all()
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required'
        ]);

        $data = array_merge(
            $data,
            ['password' => Hash::make('Welkom123!')]
        );

        User::create($data);
        return redirect('/accounts');
    }

    public function edit(Request $request, User $account){
        return view('accounts.edit', [
            'account' => $account,
            'roles' => Role::all()
        ]);
    }


    public function details(Request $request, User $account){
        return view('accounts.details', [
            'account' => $account
        ]);
    }

    public function update(Request $request, User $account){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required'
        ]);

        $account->name = $data["name"];
        $account->email = $data["email"];
        $account->role_id = $data["role_id"];

        $account->push();
        return redirect('/accounts');
    }

    public function delete(Request $request, User $account){
        $account->delete();
        return redirect('/accounts');
    }
}
