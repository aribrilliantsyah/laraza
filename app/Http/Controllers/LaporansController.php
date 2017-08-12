<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Ketetapan;
use Alert;
use App\User;
use Illuminate\Support\Str;


class LaporansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {


        //
    if ($request->ajax()) {
            $laporans = Laporan::where('user_id', Auth::user()->id);
            return Datatables::of($laporans)->addColumn('action', function($laporan){
            return view('datatable._action2',[
                'model'     => $laporan,
                'form_url'  => route('laporan.destroy', $laporan->id),
                'edit_url'  => route('laporan.edit', $laporan->id),
                'confirm_message'=>'Yakin mau menghapus  ?'
            
                ]);
        })->make(true);
    }

    $html = $htmlBuilder
            ->addColumn(['data' => 'title', 'name'=>'title', 'title'=>'Title'])
            ->addColumn(['data' => 'content', 'name'=>'content','title'=>'Content'])
            ->addColumn(['data' =>'action', 'name'=>'action', 'title'=>'opsi', 'orderable'=>false, 'searchable'=>false]);
            
        return view('laporan.index')->with(compact('html'));
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
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
            ]);
        $laporan = new Laporan;
        $laporan->title = $request->title;
        $laporan->slug = Str::slug($request->get('title'));
        $laporan->user_id = Auth::user()->id;
        $laporan->content = $request->content;
        $laporan->save();
        Alert::success('Tambah Data Berhasil', 'Selamat !')->persistent("Close");
        return redirect()->route('laporan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $laporan =Laporan::find($id);
        return view('laporan.edit')->with(compact('laporan'));
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
         $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
            ]);
        $laporan = Laporan::find($id);
        $laporan->title = $request->title;
        $laporan->slug = Str::slug($request->get('title'));
        $laporan->user_id = Auth::user()->id;
        $laporan->content = $request->content;
        $laporan->save();
        Alert::success('Mengubah Data Berhasil', 'Selamat !')->persistent("Close");
        return redirect()->route('laporan.index');
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

        Laporan::destroy($id);
        Alert::success('Hapus Data Berhasil', 'Terhapus !')->persistent("Close");

        return redirect()->route('laporan.index');
    }
}
