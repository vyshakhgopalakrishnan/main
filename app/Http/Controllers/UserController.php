<?php
  
namespace App\Http\Controllers;
   
use App\Models\User;
use Illuminate\Http\Request;
  
class UserController extends Controller
{
    public function index()
    {
        $users= user::orderBy('id','desc')->paginate();
      return view ('users.index')->with('users', $users);
    }

    
    public function create()
    {
        return view('users.create');
    }

   
   
    




    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_MRP' => 'required',
            'product_selling_price' => 'required',
           
            
        ]);


$requestData = $request->all();

user::create($requestData);
return redirect('usersview')->with('message', ' Addedd!');  
}






    
    public function show($id)
    {
        $user = user::find($id);
        return view('users.show')->with('users', $user);
    }

    
    public function edit($id)
    {
        $user = user::find($id);
        return view('users.edit')->with('users', $user);
    }

  
    public function update(Request $request)
    {
        $user = user::find($request->id);



      





            $input = $request->all();
           
           
            $user->update($input);
            return redirect('usersview')->with('message', ' Updated!');  
       
    
    }










  





    public function destroy($id)
    {
       
        user::destroy($id);
    
                
            
    
        

        return redirect('usersview')->with('message', ' deleted!');  
    }
}