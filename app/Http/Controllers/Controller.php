<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Request\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\AppServiceProovider;
use App\Models\personnes;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Create(Request $request){
        $request->password = Hash::make($request->password);
        $data['nom'] = $request->nom ;
        $data['prenom'] = $request->prenom ;
        $data['contact'] = $request->contact ;
        $data['adresse'] = $request->adresse ;
        $data['email'] = $request->email ;
        $data['password'] = $request->password ;

        $save = personnes::create($data);
        session()->flash('Succes','Un nouvel utilisateur ajouté');

    }

    public function Login(LoginRequest $request){
        $request->authenticate();
        $request->session()->regenerate();
        return redirect('/welcome');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/LoginPage');

    }

    public function UpdateProfil(Request $request, User $user){
        $data = $request->request->validate([
            'firstname' => 'required|max:250',
            'lastname' =>  'required|max:250',
            'gendar' => 'required',
            'contact' => 'required | min:8|max:10',
            'email' => 'required | email',
            'password' => 'required',

        ]);

        $user->update($request->all());
        $user->save();

        alert()->succes('Infos utilisateur mise à jour avec succes !')->persistent('Ok');

        return redirect('/welcome')->with('message',"Infos mises à jours !");

    }
}