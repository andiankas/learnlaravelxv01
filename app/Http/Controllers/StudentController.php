<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Student::all();
        
        $content = [
            'pagetitle'     => 'Student',
            'data' => $data
        ];

        return view('student.index',$content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
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
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nip = $request->nip;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        // validate
        $request->validate([
            'nama'      => 'required',
            'nip'       => 'required|size:10',
            'email'     => 'required',
            'jurusan'   => 'required'

        ]);

        Student::create($request->all());
        return redirect('/student')->with('status','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('student.show',compact('student'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('student.edit',compact('student'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // validate
        $request->validate([
            'nama'      => 'required',
            'nip'       => 'required|size:10',
            'email'     => 'required',
            'jurusan'   => 'required'

        ]);

        Student::where('id',$student->id)
                ->update([
                    'nama'      =>  $request->nama,
                    'nip'       =>  $request->nip,
                    'email'     =>  $request->email,
                    'jurusan'   =>  $request->jurusan,
                ]);
        return redirect('/student')->with('status','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        Student::destroy($student->id);
        return redirect('/student')->with('status','Data berhasil dihapus!');
    }
}
