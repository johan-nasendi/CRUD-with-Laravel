<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Students;

class Studentscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students = DB::table('students')->get();
        $students = Students::all();
        return view('users.students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       return view('users.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'nim'=>'required| size:7'
            
        ]);

       
        $students = new Students;
         $students->nama = $request->nama;
         $students->nim = $request->nim;
         $students->prodi = $request->prodi;
         $students->jurusan = $request->jurusan;
         $students->kelas = $request->kelas;
         $students->email = $request->email;
         $students->alamat = $request->alamat;
        
         $students->save();
        return redirect('/users/students')->with('status','Data Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        
        return view('users.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        return view('users.edit', compact('students'));
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
        $siswa = Students::find($id);
        $siswa->update($request->all());
            return redirect('/users/students')->with('status','Data Successfully update');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students) 
    {
       Students::destroy($students->id);
        return redirect('/users/students')->with('status','Data Successfully delete');
    }
    
        
}

