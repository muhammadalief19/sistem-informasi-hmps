<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // make validation
        Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email:dns',
                'subject' => 'required',
                'message' => 'required|min:8',
            ],
            [
                'name.required' => 'nama wajib diisi !',
                'email.required' => 'email wajib diisi !',
                'email.email' => 'format email tidak valid !',
                'subject.required' => 'subject wajib diisi !',
                'message.required' => 'message wajib diisi !',
                'message.min' => 'message harus berisi minimal 8 karakter !',
            ],
        );

        // data request
        $data = [
            'uuid' => uniqid(), 
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // store data
        Message::create($data);

        // redirect
        return redirect('/')->with(['success' => 'terima kasih, pesan anda telah kami terima']);
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
