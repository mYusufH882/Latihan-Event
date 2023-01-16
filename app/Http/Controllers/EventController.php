<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();

        return view('pages.events.index', compact('event'));
    }

    public function create()
    {
        return view('pages.events.create');
    }

    //Contoh validasi dengan file request
    public function store(EventRequest $request)
    {
        $data = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai
        ];

        Event::create($data);

        return redirect()->route('event')->with('success', 'Data Berhasil Diinput !!!');
    }

    //Contoh validasi langsung
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'nama' => 'required',
    //         'lokasi' => 'required',
    //         'deskripsi' => 'required',
    //         'tgl_mulai' => 'required',
    //         'tgl_selesai' => 'required'
    //     ], [
    //         'required' => 'Input :attribute tidak boleh kosong!!!'
    //     ]);

    //     Event::create($data);

    //     return redirect()->route('event')->with('success', 'Data Berhasil Diinput !!!');
    // }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('pages.events.edit', compact('event'));
    }

    public function update(EventRequest $request, $id)
    {
        $data = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai
        ];

        Event::where('id', $id)->update($data);

        return redirect()->route('event')->with('success', 'Data Berhasil Diupdate !!!');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('event')->with('success', 'Data Berhasil Dihapus !!!');
    }

    public function trash()
    {
        $event = Event::onlyTrashed()->paginate(6);

        return view('pages.events.trash', compact('event'));
    }

    public function restore($id)
    {
        $event = Event::withTrashed()->find($id);

        if ($event->trashed()) {

            $event->restore();

            return redirect()->route('trash.index')->with('success', 'Data Telah Berhasil Di-Restore !!!');
        } else {
            return redirect()->route('trash.index')->with('success', 'Data Gagal Di-Restore !!!');
        }
    }

    public function deletePermanent($id)
    {
        $event = Event::withTrashed()->find($id);

        if (!$event->trashed()) {
            return redirect()->route('trash.index')->with('success', 'Data Tidak Ada Dalam Trash !!!');
        } else {
            $event->forceDelete();

            return redirect()->route('trash.index')->with('success', 'Data Berhasil Dihapus Permanen !!!');
        }
    }
}
