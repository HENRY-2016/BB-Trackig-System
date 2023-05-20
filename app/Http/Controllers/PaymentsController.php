<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentsModel; 

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PaymentsModel::latest () -> paginate(10);
        return view('Payments/list', compact('data'))
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
            'Tenant'=> 'required',
            'Building'=> 'required',
            'Date'=> 'required',
            'Room'=> 'required',
            'Amount'=> 'required',
            'Month'=> 'required',
            'Image'=>'required|mimes:jpeg,png,jpg,|max:2048'
        ]);

        $image = $request->file('Image');
        $new_name = rand().'.'.$image->getClientOriginalExtension ();
        $image ->move(public_path('images'),$new_name);

        // insert Data
        $form_data = array(
                'Tenant' => $request->Tenant,
                'RoomNo'=> $request->Room,
                'Building'=> $request->Building,
                'Month'=> $request->Month,
                'Amount'=> $request->Amount,
                'Date'=> $request->Date,
                'Image'=>$new_name,

                'Holder1'=>'','Holder2'=>'',
                'Holder3'=>'','Holder4'=>'',
                'Holder5'=>'','Holder6'=>'',
                'Holder7'=>'','Holder8'=>'',
                'Holder9'=>'','Holder10'=>'',
                'Holder11'=>'','Holder12'=>'',
                'Holder13'=>'','Holder14'=>'',
                'Holder15'=>''
        );
        PaymentsModel::create ($form_data);
        return redirect('PaymentsCrud')
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
        $data = PaymentsModel::findOrFail($id);
        // echo $data;
        return view('Payments/details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PaymentsModel::findOrFail($id);
        return view('Payments/edit', compact('data'));
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
                'Tenant'=> 'required',
                'Building'=> 'required',
                'Date'=> 'required',
                'Room'=> 'required',
                'Amount'=> 'required',
                'Month'=> 'required',
            ]);

        $image = $request->file('Image');
        $new_name = rand().'.'.$image->getClientOriginalExtension ();
        $image ->move(public_path('images'),$new_name);

        // Update Data
        $form_data = array(
            'Tenant' => $request->Tenant,
            'RoomNo'=> $request->Room,
            'Building'=> $request->Building,
            'Month'=> $request->Month,
            'Amount'=> $request->Amount,
            'Date'=> $request->Date,
            'Image'=>$new_name,
        );
        // update
        PaymentsModel::whereId ($id)->update($form_data);
        return redirect('PaymentsCrud')
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
        $data = PaymentsModel::findOrFail($id);
        $data ->delete();
        return redirect('PaymentsCrud')
            ->with('success','Data Is Successfully deleted');
    }
}
