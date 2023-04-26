<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::orderBy('id', 'asc')->get();
        return view('backend.pages.certificate.manage', compact('certificates')
        );
    }

    public function create()
    {
        return view('backend.pages.certificate.create');
    }

    public function store(Request $request)
    {
        $certificate           = new Certificate();
        $certificate->about_id = 1;
        $certificate->c_id     = $request->c_id;
        $certificate->degree   = $request->degree;
        $certificate->date     = $request->date;

        $notification = [
            'alert-type' => 'success',
            'message'    => 'Certificate Has Been Added!',
        ];

        $certificate->save();
        return redirect()->route('certificate.manage')->with($notification);
    }

    public function edit($id)
    {
        $certificate = Certificate::find($id);
        if (!is_null($certificate)) {
            return view('backend.pages.certificate.edit', compact('certificate'
            ));
        } else {
            //404
        }
    }

    public function update(Request $request, $id)
    {
        $certificate         = Certificate::find($id);
        $certificate->c_id   = $request->c_id;
        $certificate->degree = $request->degree;
        $certificate->date   = $request->date;

        $notification = [
            'alert-type' => 'success',
            'message'    => 'Certificate Updated Successfully!',
        ];

        $certificate->save();
        return redirect()->route('certificate.manage')->with($notification);
    }

    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        if (!is_null($certificate)) {

            $notification = [
                'alert-type' => 'error',
                'message'    => 'Certificate Removed Successfully!',
            ];

            $certificate->delete();
            return redirect()->route('certificate.manage')->with($notification);
        } else {
            //404
        }
    }
}
