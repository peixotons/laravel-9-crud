<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactBooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.index');
    }

    public function indexContacts()
    {
        $contacts = ContactBooks::all();
        return view('contacts.contact', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Another way to save data in database
        // $input = $request->all();
        // ContactBooks::create($input);

        $request->validate([
            'name_contact' => 'required',
            'email_contact' => 'required|email',
            'phone_contact' => 'required',
            'number' => 'required|numeric',
            'address' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required'
        ]);

        $contact = new ContactBooks();

        $contact->name_contact = $request->name_contact;
        $contact->email_contact = $request->email_contact;
        $contact->phone_contact = $request->phone_contact;
        $contact->number = $request->number;
        $contact->address = $request->address;
        $contact->neighborhood = $request->neighborhood;
        $contact->city = $request->city;
        $contact->state = $request->state;
        $contact->postcode = $request->postcode;

        Mail::to('peixoto@hotmail.com')->send(new ContactMail($contact));

        $contact->save();

        return redirect()->route('contacts')->with('message', 'Contact Successfully Added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = ContactBooks::find($id);
        return view('contacts.edit')->with('contacts', $contacts);
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
        $request->validate([
            'name_contact' => 'required',
            'email_contact' => 'required|email',
            'phone_contact' => 'required',
            'number' => 'required|numeric',
            'address' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required'
        ]);

        $contacts = ContactBooks::find($id);
        $input = $request->all();
        $contacts->update($input);
        return redirect('contacts')->with('updated', 'Contact Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Another way to delete -> ContactBooks::destroy($id);

        $user = ContactBooks::findOrFail($id);
        $user->delete();

        return redirect('contacts')->with('deleted', 'Contact Deleted!');
    }
}
