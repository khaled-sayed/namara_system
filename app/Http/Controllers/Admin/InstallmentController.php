<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstallmentRequest;
use App\Models\Installment;

class InstallmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $installments = Installment::get()->all();
        return view('installments.installment-index', compact('installments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('installments.installment-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstallmentRequest $request)
    {
        $installment = new Installment();
        $installment->months = $request->months;
        $installment->status = $request->status == 'on' ? 1 : 0;
        $installment->save();

        return redirect(route('installment.index'))->with('success','Installment created successfully!');
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
        $installment = Installment::where('id',$id)->get()->first();
        // dd($installment);
        return view('installments.installment-edit', compact('installment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstallmentRequest $request, $id)
    {
        $installment = Installment::where('id', $id)->get()->first();
        $installment->months = $request->months;
        $installment->status = $request->status == 'on' ? 1 : 0;
        $installment->save();

        return redirect(route('installment.index'))->with('success','Installment Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
