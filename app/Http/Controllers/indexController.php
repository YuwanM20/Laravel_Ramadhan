<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pesan;
use App\Models\project;
use App\Mail\lihatContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class indexController extends Controller
{
    public function __construct(){
        $this ->pesan = new pesan;
        $this ->project = new project;

    }
    public function index()
    {
        $data = [
            't_pesan' => $this->pesan->tampil(),
            't_project' => $this->project->tampil(),

        ];
        return view('frontend.frontend',$data);
    }

    public function add(){
        return view('frontend.addpesan');
    }
     // BUAT SAVE ADD WARGA
     public function save(){
        Request()->validate([
            'nama' => 'required|max:25',
            'status' => 'required|max:255',
            'pesan' => 'required|max:50',
            'tgl' => 'required|',

        ],[
            
            'nama.required' => 'nama wajib diisi yah',
            'nama.max' => 'nama max 25 kata',
            'status.required' => 'status wajib diisi yah',
            'pesan.required' => 'pesan wajib diisi yah',
            'pesan.max' => 'pesan max 50 kata',
            'tgl.required' => ' wajib diisi yah',
        ]);

        $data = [
            'nama'=> request()->nama,
            'status'=> request()->status,
            'pesan'=>request()->pesan,
            'tgl'=> request()->tgl,
        ];

        $this->pesan->addpesan($data);
        return redirect()->route('frontend');
}

public function submitcontact(Request $request)
{
  $data = [
    'name' => $request->name,
    'email' =>$request->email,
    'subject' =>$request->subject,
    'message' =>$request->message,
  ];

  Mail::to('anyougitr@gmail.com')->send (new lihatContact($data));

  Session::flash('message', 'Terima kasih telah memberi saran');
  return redirect()->route('frontend');
}

}