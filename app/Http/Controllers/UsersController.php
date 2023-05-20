<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel; 

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UsersModel::latest () -> paginate(10);
        return view('viewUsers', compact('data'))
                -> with('i',(request()->input('page',1)-1)*12); // for pagination
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('UsersCrud')
        ->with('error','Something want wrong!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate ([
            'name'=> 'required',
            'type'=> 'required',
            'password'=> 'required',
        ]);
    
        // insert Data
        $form_data = array(
                'FName' => '',
                'LName' => '',
                'Category'=> '',
                'Contact'=> $request->type,
                'UserName'=> $request->name,
                'Date'=> '',
                'Image'=>'',
                'Password'=> $request->password,

                'Holder1'=>'','Holder2'=>'',
                'Holder3'=>'','Holder4'=>'',
                'Holder5'=>'','Holder6'=>'',
                'Holder7'=>'','Holder8'=>'',
                'Holder9'=>'','Holder10'=>'',
                'Holder11'=>'','Holder12'=>'',
                'Holder13'=>'','Holder14'=>'',
                'Holder15'=>''
        );
        UsersModel::create ($form_data);
        return redirect('UsersCrud')
            ->with('success','Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = UsersModel::findOrFail($id);
        return view('Users/details', compact('data'));
        // echo $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = UsersModel::findOrFail($id);
        return view('editUsers', compact('data'));
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
            $request -> validate ([
                'name'=> 'required',
                'type'=> 'required',
                'password'=> 'required',
            ]);
            
        // Update Data
        $form_data = array(
            'Contact'=> $request->type,
            'UserName'=> $request->name,
            'Password'=> $request->password,
        );
        // update
        UsersModel::whereId ($id)->update($form_data);
        return redirect('UsersCrud')
            ->with('success','Data Is Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // delete
        $data = UsersModel::findOrFail($id);
        $data ->delete();
        return redirect('UsersCrud')
            ->with('success','Data Is Successfully deleted');
    }
}
