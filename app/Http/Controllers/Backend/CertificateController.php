<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::orderBy('id', 'asc')->get();
        return view('backend.pages.certificate.manage', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certificate = new Certificate();
        $certificate->about_id      = 1;
        $certificate->c_id          = $request->c_id;
        $certificate->degree        = $request->degree;
        $certificate->date          = $request->date;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Certificate Has Been Added!'
        );

        $certificate->save();
        return redirect()->route('certificate.manage')->with($notification);
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
        $certificate = Certificate::find($id);
        if(!is_null($certificate)){
            return view('backend.pages.certificate.edit', compact('certificate'));
        }else{
            //404
        }
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
        $certificate = Certificate::find($id);
        $certificate->c_id          = $request->c_id;
        $certificate->degree        = $request->degree;
        $certificate->date          = $request->date;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Certificate Updated Successfully!'
        );

        $certificate->save();
        return redirect()->route('certificate.manage')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        if(!is_null($certificate)){
            
            $notification = array(
                'alert-type'    => 'error',
                'message'       => 'Certificate Removed Successfully!'
            );
    
            $certificate->delete();
            return redirect()->route('certificate.manage')->with($notification);
        }else{
            //404
        }
    }
}
