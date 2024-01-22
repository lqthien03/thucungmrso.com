<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Create a new contact record
        $contact = Contact::create($validatedData);

        // You can do additional logic here if needed

        // Redirect or return a response as needed
        return redirect('/')->with('success', 'Tin nhắn của bạn đã được gửi thành công!');
    }
}
