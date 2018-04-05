<?php

namespace App\Http\Controllers;

use App\Cash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Session;
class CashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $url=URL::previous();
        $id = substr($url, strrpos($url, '/') + 1);

        Session::flash("info","System ready for new cash record");
        return view('cash.create',compact('id'));
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

        Cash::create($request->all());
        Session::flash("info","New cash entry made");
        return redirect(route('cashbook.show',$request->cash_book_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function show(Cash $cash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function edit(Cash $cash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cash $cash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cash $cash)
    {
        //
    }
}
