<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{

    /// 1 list contact
    public function contact_list(){
        $contactt = Contacts::all();
        return view('Pages.Contacts',['contactt'=>$contactt]);
    }

    /// 2 from contact
    public function contact_form(){
        return view('Pages.FormContact');
    }

    /// 3 add contact
    public function contact_add(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'poste'=>'required',
             'photo' => 'image|mimes:jpeg,png,jpg|max:2048'

        ]);
             $photoPath = null;
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('Contact-photo', 'public');
    }
        Contacts::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'poste'=>$request->poste,
        'photo'=>$photoPath,

        ]);
        return redirect()->route('contact-list')->with('success', 'Contact ajouté avec succès');


    }

    /// edit
    public function contact_edit($id){
        $conntc =  Contacts::findOrFail($id);
        return view('Pages.UpdateContact',['conntc'=>$conntc]);
    }

    /// upddate
    public function contact_update(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'poste'=>'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048'

        ]);

        $cont = Contacts::find($request->id);

    $photoPath = $cont->photo;  ///// here to garder  ancienne photo
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('Contact-photo', 'public');
    }
        $cont->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'poste'=>$request->poste,
            'photo'=>$photoPath,
        ]);
        return redirect()->route('contact-list')->with('success', 'Contact mise a jour avec succès');
    }

    /// delete conntact
    public function contact_delete(Request $request){
        Contacts::destroy($request->id);
         return redirect()->route('contact-list')->with('success', 'Contact supprimé avec succès');

    }


}
