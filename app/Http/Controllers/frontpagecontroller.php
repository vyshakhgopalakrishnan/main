<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_category;
class frontpagecontroller extends Controller
{
    
    
        public function index()
        {
            $frontpages= product_category::orderBy('id','desc')->paginate();
          return view ('frontpages.index')->with('frontpages', $frontpages);
        }
    
        
        public function create()
        {
            return view('frontpages.create');
        }
    
       
       
        
    
    
    
    
        public function store(Request $request)
        {
            $request->validate([
                'product_category' => 'required',
              
               
                
            ]);
    
    
    $requestData = $request->all();
    
    product_category::create($requestData);
    return redirect('frontpages')->with('message', ' Addedd!');  
    }
    
    
    
    
    
    
        
        public function show($id)
        {
            $product_category = product_category::find($id);
            return view('frontpages.show')->with('frontpages', $product_category);
        }
    
        
        public function edit($id)
        {
            $product_category = user::find($id);
            return view('frontpages.edit')->with('frontpages', $product_category);
        }
    
      
        public function update(Request $request)
        {
            $product_category = product_category::find($request->id);
    
    
    
          
    
    
    
    
    
                $input = $request->all();
               
               
                $user->update($input);
                return redirect('frontpages')->with('message', ' Updated!');  
           
        
        }
    
    
    
    
    
    
    
    
    
    
      
    
    
    
    
    
        public function destroy($id)
        {
           
            user::destroy($id);
        
                    
                
        
            
    
            return redirect('frontpages')->with('message', ' deleted!');  
        }
    }

