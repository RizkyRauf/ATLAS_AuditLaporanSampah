<?php

namespace App\Http\Controllers;

use App\Models\Waste;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = Waste::all();
    	return view('report.index',['wastes'=>$report]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cetak_pdf()
    {
	    $report = Waste::all();
 
	    $pdf = PDF::loadview('report.create',['wastes'=>$report]);
	    return $pdf->stream('laporan-audit-sampah-pdf');
    }
    public function create()
    {
        $reports = Waste::all();
        
        return view('report.create',compact('reports'));
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
     * @param  \App\Models\Waste  $waste
     * @return \Illuminate\Http\Response
     */
    public function show(Waste $waste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Waste  $waste
     * @return \Illuminate\Http\Response
     */
    public function edit(Waste $waste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Waste  $waste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waste $waste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Waste  $waste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waste $waste)
    {
        //
    }
}
