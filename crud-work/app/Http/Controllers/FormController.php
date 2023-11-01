<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index(){
        $form = Form::all();
        return view('form.index', ['form' => $form]);
    }

    public function create(){
        return view('form.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
        ]);

        $newForm = Form::create($data);

        return redirect(route('form.index'));
    }
    
    public function edit(Form $form) {
        return view('form.edit', ['form' => $form]); 
    }

    public function update(Form $form, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
        ]);
        
        $form->update($data);
        return redirect(route('form.index'))->with('success', 'Kullanıcı bilgileri güncellendi.');
    }

    public function destroy(Form $form) {
        $form->delete();
        return redirect(route('form.index'))->with('success', 'Kullanıcı bilgileri silindi.');
    }
}
