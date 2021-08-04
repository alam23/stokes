<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {   
        $patient = auth()->user();
        return view('profile.index', compact('patient'));
    }

    public function edit(User $patient)
    {
        $patient = auth()->user();
        return view('/profile.edit', compact('patient'));
    }

    public function update(Request $request)
    {
        $id= auth()->user()->id;
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'dpi' => 'nullable|digits:13',
            'address' => 'nullable|min:5',
            'phone' => 'nullable|min:8'
        ];
        $this->validate($request, $rules);

        $user = User::Patients()->findorFail($id);

        $data = $request->only('name', 'email', 'dpi', 'address', 'phone');
        $password = $request->input('password');

        if($password)
            $data['password'] = bcrypt($password);
        $user->fill($data);
        $user->save();

        $notification = 'Se ha actualiado la informacion de tu perfil correctamente';
        return redirect('/profile')->with(compact('notification'));
    }
}
