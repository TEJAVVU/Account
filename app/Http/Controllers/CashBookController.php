<?php

namespace App\Http\Controllers;

use App\CashBook;
use Illuminate\Http\Request;
use Session;
class CashBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $cashbooks =CashBook::latest()->get();
        $number = count($cashbooks);

        if($number <1){
            Session::flash("info","No cashbook found. Please create one");
            return view('cashbook.create');
        }
        Session::flash("info","You currently have ".$number." cashbook(s)");
        return view('cashbook.index',compact('cashbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        Session::flash("info","System ready for new cashbook");
        return view('cashbook.create');
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
        CashBook::create($request->all());
        Session::flash("info","New cashbook added");
        return redirect(route('cashbook.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $cashBook=CashBook::where('id',$id)->with('cash','bank')->paginate(5)->first();
        Session::flash("info","There you go");


        return view('cashbook.show',compact('cashBook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cashBook= CashBook::where('id',$id)->first();

        Session::flash("warning","Update necessary fields");

        return view('cashbook.edit',compact('cashBook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashBook $cashBook,$id)
    {
        //
        $cashBook= CashBook::where('id',$id)->first();
        $cashBook->update($request->all());
        Session::flash("info","Cashbook updated successfully");
        return redirect(route('cashbook.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashBook $cashBook,$id)
    {
        //
        Cashbook::destroy($id);
        Session::flash("danger","Cashbook deleted");
        return redirect(route('cashbook.index'));

    }
}
