<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->get('search');

        if($request->get('search')) {
            $contacts = Contact::where('name', 'like', "%$search%")
                        ->orWhere('email', 'like', "%$search%")->get();
        } 
        else if($request->get('sort') == "desc") {
                $contacts = Contact::orderBy('name', 'desc')->get();
        }
        else if($request->get('sort') == "asc") {
                $contacts = Contact::orderBy('name', 'asc')->get();
        } else if($request->get('sort_date') == "desc") {
            $contacts = Contact::orderBy('created_at', 'desc')->get();
        }
        else if($request->get('sort_date') == "asc") {
                $contacts = Contact::orderBy('created_at', 'asc')->get();
        }
        else {
            $contacts = Contact::all();
        }

        return view('index',compact('contacts','search'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'nullable|numeric',
            'address' => 'nullable',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect('/contacts')->with('success', 'Contact created successfully.');
    }

    public function show($id)
    {
        $contacts = Contact::find($id);
        return view('show',compact('contacts'));
    }

    public function edit($id)
    {
        $contacts = Contact::find($id);
        return view('edit',compact('contacts'));
    }

    public function update(Request $request, $id)
    {
        $contacts = Contact::find($id);
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'nullable|numeric',
            'address' => 'nullable',
        ]);

        $contacts->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect('/contacts')->with('success', 'Contact updated successfully.');
    }

    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect('/contacts')->with('success', 'Contact deleted successfully.');
    }
}
