<?php

namespace App\Http\Controllers;

use App\Models\ContactBooks;
use Illuminate\Http\Request;

class ContactBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        return view('index');
    }
    public function indexContacts()
    {
        $contacts = ContactBooks::all();
        return view('contact', compact('contacts'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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

        $contact->save();

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        ContactBooks::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contacts = ContactBooks::all();
        return view('',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = ContactBooks::find($id);
        return view('contacts.edit')->with('contacts', $student);
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
        $student = ContactBooks::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContactBooks::destroy($id);
        return redirect('contacts')->with('flash_message', 'Student deleted!');
    }
}
