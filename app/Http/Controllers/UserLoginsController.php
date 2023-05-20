<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLoginsModel; // our model

class UserLoginsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserLoginsModel::latest () -> paginate(10);
        $Names = UserLoginsModel::get(['Name']);
        $CardNo = UserLoginsModel::get(['Number']);
    
        return view('UserLogins/view', compact('data','CardNo','Names'))
                -> with('i',(request()->input('page',1)-1)*12); // for pagination
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'Country' => 'required',
            'Date'  => 'required',
            'PartOne'  => 'required',
            'PartTwo'  => 'required',
            'Holder1'  => 'required',
            'Holder2'  => 'required',
            'Holder3'  => 'required',

        ]);

        // insert Data
        $form_data = array(
            'Country' => $request->Country,
            'Date'  => $request->Date,
            'PartOne'  => $request->PartOne,
            'PartTwo'  => $request->PartTwo,
            'Holder1'  => $request->Holder1,
            'Holder2'  => $request->Holder2,
            'Holder3'  => $request->Holder3,
            'Holder4'  => "",
            'Holder5'  => "",
            'Holder6'  => "",
            'Holder7'  => "",
            'Holder8'  => "",
            'Holder9'  => "",
            'Holder10'  => "",
        );
        UserLoginsModel::create ($form_data);
        return redirect('UserLoginsCrud')
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
        $data = UserLoginsModel::findOrFail($id);
        return view('UserLogins/details', compact('data'));
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
        $data = UserLoginsModel::findOrFail($id);
        return view('UserLogins/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // delete
        $data = UserLoginsModel::findOrFail($id);
        $data ->delete();
        return redirect('UserLoginsCrud')
            ->with('success','Data Is Successfully deleted');
    }
}
