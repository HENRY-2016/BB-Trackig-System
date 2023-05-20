<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BuildingsModel; 

class BuildingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $data = BuildingsModel::latest () -> paginate(10);
        return view('viewReports', compact('data'))
                -> with('i',(request()->input('page',1)-1)*12); // for pagination
    }

    public function indexData( Request $request)
    {
        $from = $request->from;
        $to = $request->to;

        echo $from . $to;
        // $data = BuildingsModel::latest () -> paginate(10);
        // return view('viewReports', compact('data'))
        //         -> with('i',(request()->input('page',1)-1)*12); // for pagination
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
        $status = 'Missing';
        $request -> validate ([
            'plate'=> 'required',
            'name'=> 'required',
            'color'=> 'required',
            'id'=> 'required',
            'contact'=> 'required',
            'area'=> 'required',
            'date'=> 'required',
            'rider'=> 'required',

        ]);
    
        // $date = date_format($request->date,"d-m-Y");
        // insert Data
        $form_data = array(
                'Name' => $request->plate,
                'NoRooms'=> $request->name,
                'Location'=> $request->id,
                'Staff'=> $request->contact,
                'Holder1'=>$request->area,
                'Holder2'=>$request->color,
                'Holder3' => $request->status,
                'Holder4'=> $request->date,
                'Holder5'=>'Pending',
                'Holder6'=>$request->rider,
                'Holder7'=>'','Holder8'=>'',
                'Holder9'=>'','Holder10'=>'',
                'Holder11'=>'','Holder12'=>'',
                'Holder13'=>'','Holder14'=>'',
                'Holder15'=>''
        );
        BuildingsModel::create ($form_data);
        return redirect('BuildingsCrud')
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
        $data = BuildingsModel::findOrFail($id);
        $status = $data->Holder3;
        if ($status == "Recovered"){$statusColor = "blue";}
        if ($status == "Missing"){$statusColor = "red";}
        return view('ani', compact('data','statusColor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BuildingsModel::findOrFail($id);
        return view('editReports', compact('data'));
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

        $status = 'Recovered';
        
        $request -> validate ([
            'plate'=> 'required',
            'name'=> 'required',
            'color'=> 'required',
            'id'=> 'required',
            'contact'=> 'required',
            'area'=> 'required',
            'date'=> 'required',
            'rider'=> 'required',
        ]);

        // Update Data
              // insert Data
            $form_data = array(
                'Name' => $request->plate,
                'NoRooms'=> $request->name,
                'Location'=> $request->id,
                'Staff'=> $request->contact,
                'Holder1'=>$request->area,
                'Holder2'=>$request->color,
                'Holder3' => $request->status,
                'Holder4'=>$request->date,
                'Holder5'=>$request->recoveredFrom,
                'Holder6'=>$request->rider,
        );
        // update
        BuildingsModel::whereId ($id)->update($form_data);
        return redirect('BuildingsCrud')
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
        $data = BuildingsModel::findOrFail($id);
        $data ->delete();
        return redirect('BuildingsCrud')
            ->with('success','Data Is Successfully deleted');
    }
}
