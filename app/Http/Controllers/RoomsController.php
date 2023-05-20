<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomsModel; 

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RoomsModel::latest () -> paginate(10);
        return view('Rooms/view', compact('data'))
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
            'Building'=> 'required',
            'Room'=> 'required',
            'Amount'=> 'required',
            'Date'=> 'required',
            'Status'=> 'required',
            'StaffName'=> 'required',
        ]);
    
        // insert Data
        $form_data = array(
                'Room'=> $request->Room,
                'Status'=> $request->Status,
                'Building'=> $request->Building,
                'StaffName'=> $request->StaffName,
                'Amount'=> $request->Amount,
                'Date'=> $request->Date,

                'Holder1'=>'','Holder2'=>'',
                'Holder3'=>'','Holder4'=>'',
                'Holder5'=>'','Holder6'=>'',
                'Holder7'=>'','Holder8'=>'',
                'Holder9'=>'','Holder10'=>'',
                'Holder11'=>'','Holder12'=>'',
                'Holder13'=>'','Holder14'=>'',
                'Holder15'=>''
        );
        RoomsModel::create ($form_data);
        return redirect('RoomsCrud')
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
        $data = RoomsModel::findOrFail($id);
        return view('Rooms/details', compact('data'));
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
        $data = RoomsModel::findOrFail($id);
        return view('Rooms/edit', compact('data'));
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
                'Building'=> 'required',
                'Date'=> 'required',
                'Status'=> 'required',
                'Room'=> 'required',
                'Amount'=> 'required',
                'StaffName'=> 'required',
            ]);


        // Update Data
        $form_data = array(
            'Room'=> $request->Room,
            'Status'=> $request->Status,
            'Building'=> $request->Building,
            'Amount'=> $request->Amount,
            'StaffName'=> $request->StaffName,
            'Date'=> $request->Date,
        );
        // update
        RoomsModel::whereId ($id)->update($form_data);
        return redirect('RoomsCrud')
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
        $data = RoomsModel::findOrFail($id);
        $data ->delete();
        return redirect('RoomsCrud')
            ->with('success','Data Is Successfully deleted');
    }
}
