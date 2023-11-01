<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scripture_songs_i;
use App\Models\Album;


class AlbumSongController extends Controller
{
    //Songs Add Page

    public function ssIAdd()
    {
        $album = Album::get();
        return view ('admin.SSI.add',  compact('album'));
    }

    public function ssIshow()
    {
        $data = Scripture_songs_i::orderBy('id', 'asc')->get();
        
        return view ('admin.SSI.list', compact('data'));
    }

    public function album()
    {      

        return view ('admin.SSI.list', compact('data'));
    }

    public function ssIstore(Request $request)
    {
       // dd($request->all());
        $validatedData = $request->validate([
            'songs_name' => 'required',
        ]);

        $inserdata = [];

        foreach ($request->songs_name as $songs_name) {
            $inserdata[] = [
                "songs_name" => $songs_name,
            ];
        }

        Scripture_songs_i::insert($inserdata);

        return redirect()->route('ssIshow')-> with('successmsg',"Data Added Successfully!!!"); 
    }

    public function ssIedit($id)
    {
        $data = Scripture_songs_i::find($id);
        return view ('admin.SSI.update', compact('data'));
    }

    public function ssIUpdate(Request $request, $id)
    {
        $data = Scripture_songs_i::find($id);

        $data->update([
            "songs_name" => $request->songs_name,
        ]);
        return redirect()->route('ssIshow')-> with('successmsg',"Data Updated Successfully!!!");
    }
}
