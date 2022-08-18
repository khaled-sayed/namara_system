<?php

namespace App\Http\Controllers\Admin;

use App\Models\Amount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AmountRequest;

class AmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amount = Amount::get()->first();
        return view('amount.amount-index', compact('amount'));
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
        //
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
        $amount = Amount::where('id', $id)->get()->first();
        return view('amount.amount-edit', compact('amount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AmountRequest $request, $id)
    {
        $amount = Amount::where('id', $id)->get()->first();
        $amount->min = $request->min;
        $amount->max = $request->max;
        $amount->processing_fee = $request->processing_fee;
        $amount->annual_rate = $request->annual_rate;
        $amount->save();

        return redirect(route('amount.index'))->with('success','amount Updated successfully!');
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
