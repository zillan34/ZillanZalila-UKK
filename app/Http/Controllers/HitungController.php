<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kalkulator.kalkulator1');
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
        $a1=$request->a1;
        $a2=$request->a2;
        $op=$request->op;

        if($op=='Tambah'){
            $hasil=$a1+$a2;
        }elseif($op=='Kurang'){
            $hasil=$a1-$a2;
        }elseif($op=='Kali'){
            $hasil=$a1*$a2;
        }elseif($op=='Reset'){
            $a1=0;
            $a2=0;
            $hasil=0;
        }elseif($op=='Bagi'){
            if($a2!=0){
                $hasil=$a1/$a2;
            }else{
                $hasil="Tidak Bisa Dibagi Dengan 0!!";
            }
        }
        return view('kalkulator.hasil', compact('hasil'));
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
