<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuildingsModel; 


class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BuildingsModelModel::latest () -> paginate(10);
        return view('Tenants/view', compact('data'))
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
            'rider'=> 'required',
        ]);


        $rider = $request->rider;

        $data = BuildingsModel::where('Holder6',$rider) -> paginate(10);
        return view('viewReportsRider', compact('data'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = TenantsModel::findOrFail($id);
        // echo $data;
        return view('Tenants/details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = TenantsModel::findOrFail($id);
        return view('Tenants/edit', compact('data'));
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
            $new_name = $request->hidden_image;
            $request -> validate ([
                'FName'=> 'required',
                'Building'=> 'required',
                'Date'=> 'required',
                'Contact'=> 'required',
                'RoomNo'=> 'required',
                'Amount'=> 'required',
                'StaffName'=> 'required',
                'Image'=>'required|mimes:jpeg,png,jpg,|max:2048'
            ]);

        $image = $request->file('Image');
        $new_name = rand().'.'.$image->getClientOriginalExtension ();
        $image ->move(public_path('images'),$new_name);

        // Update Data
        $form_data = array(
            'FName' => $request->FName,
            'RoomNo'=> $request->RoomNo,
            'Contact'=> $request->Contact,
            'Building'=> $request->Building,
            'StaffName'=> $request->StaffName,
            'Date'=> $request->Date,
            'Image'=>$new_name,
        );
        // update
        TenantsModel::whereId ($id)->update($form_data);
        return redirect('TenantsCrud')
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
        $data = TenantsModel::findOrFail($id);
        $data ->delete();
        return redirect('TenantsCrud')
            ->with('success','Data Is Successfully deleted');
    }
}
