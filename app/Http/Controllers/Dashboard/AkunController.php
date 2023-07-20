<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        return view('dashboard.akun.index');
    }

    public function edit($id)
    {
        $u = User::find($id);

        return view('dashboard.akun.edit', compact('u'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable'
        ]);

        $akun = User::find($id);
        $passwordOldInDatabase = $akun->password;

        if($request->passwordOld && $request->password) {
            if(Hash::check($request->passwordOld, $passwordOldInDatabase)) {
                $akun = User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()->withErrors([
                    'error' => 'Password Lama Tidak Sesuai'
                ]);
            }
        } 

        $akun = User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('akun.index')->with('success', 'Data Akun Berhasil Di Update');
    }
}
