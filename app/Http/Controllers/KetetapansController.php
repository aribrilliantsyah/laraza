<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ketetapan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use DB;
use Alert;
use Session;

class KetetapansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {
        //
    $ketetapan = DB::table('ketetapans')->get();

    return view('fitrah.index',compact('ketetapan'));

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
        //
        $ketetapan=Ketetapan::find($id);
        return view('plugin.edit')->with(compact('ketetapan'));
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
        //
        $this->validate($request, 
        ['ketetapan' => 'required|min:2.5']);
        
        $panel= Ketetapan::find($id);
        $k= $panel->jenis;
        $panel->jenis = $k;
        $panel->ketetapan = $request['ketetapan'];
        $panel->save();
        Alert::success('Mengubah Ketetapan Zakat Fitrah Berhasil', 'Selamat !')->persistent("Close");
        return redirect()->route('fitrah.index');
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
