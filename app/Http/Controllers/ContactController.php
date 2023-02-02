<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  
    public function index()
    {
        $contacts = Contact::orderBy('id','desc')->paginate();
      return view ('contacts.index')->with('contacts', $contacts);
    }

    
    public function create()
    {
        return view('contacts.create');
    }

   
   
    




    public function store(Request $request)
    {

        $request->validate([
            'size' => 'required',
            'color' => 'required',
            'price'=>'required',
            'image'=>'required',
        ]);


        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        contact::create($requestData);
        return redirect('contact')->with('message', 'service Addedd!');  
    }







    
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }

    
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

  
    public function update(Request $request)
    {
        $contact = Contact::find($request->id);



        




            $input = $request->all();
           
            if($request->hasFile('image')){
                
             unlink(public_path().$contact->image);
           
                $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $input["image"] = '/storage/'.$path;
            }
            $contact->update($input);
            return redirect('contact')->with('message', 'Updated!');  
       
    
    }












   



    public function destroy($id)
    {
        $contacts = Contact::find($id);
        

        unlink(public_path().$contacts->image);
    
        Contact::destroy($id);
    
                
            
    
        

        return redirect('contact')->with('message', 'service deleted!');  
    }
} 