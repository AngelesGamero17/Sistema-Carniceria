<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreUserRequest;
use App\Models\Usertwo;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $users = Usertwo::where('status','=','1')->where('name','LIKE','%'.$buscarpor.'%')->get();
        return view('Users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Usertwo::all();
        return view('Users.create',compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(StoreUserRequest $request){
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();

         Usertwo::create($validated);
         return redirect()->route('Users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $users2 = Usertwo::where('id', $id)->first();
          Log::info($users2);
         return view('Users.edit', compact('users2'));
    
    }
    public function update(StoreUserRequest $request,$users2)
    {
        Log::info($request->all());
        //Validando datos
        $validated = $request->validated();
        $user=Usertwo::find($users2);
        $user->name = $request->name;
        $user->surname=$request->surname;
        $user->cell=$request->cell;
        $user->address=$request->address;
        $user->id_marital=$request->id_marital;
        $user->status=$request->status;
        $user->save();
        return redirect()->route('Users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user=Usertwo::find($user);
        $user->delete();
        return redirect()->route('Users.index');
    }
}
