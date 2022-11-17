<?php

namespace App\Http\Controllers;

use App\Models\outdoor;
use Illuminate\Http\Request;

class OutdoorController extends Controller
{
    //
    public function index()
    {
        return view('welcome', ['list'=> outdoor::all()]);
    }

    public function saveTodo(Request $req)
    {
        // print_r($req->all());
        $data = new outdoor();
        $data->batch_no = $req->batch;
        $data->quantity = $req->qty;
        $data->remarks = $req->comment;
        $data->status = $req->option_value;

        $data->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $data = outdoor::find($id);
        $data->delete();

        return redirect('/');
    }

    public function edit($id)
    {
        $data = outdoor::findorfail($id);
        
        return view('edit', ['data' =>$data]);
    }

    public function update(Request $req)
    {
        $data = outdoor::find($req->id);
        $data->batch_no = $req->batch;
        $data->quantity = $req->qty;
        $data->remarks = $req->comment;
        $data->status = $req->option_value;

        $data->save();

        return redirect('/');
    }
}
