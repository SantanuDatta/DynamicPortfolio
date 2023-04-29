<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::asc('id')->get();
        return view('backend.pages.certificate.manage', compact('certificates'));
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

        $certificate->save();
        flash('success', 'Certificate Has Been Added!');
        return redirect()->route('certificate.manage');
    }

    public function edit($id)
    {
        $certificate = Certificate::find($id);
        if (!is_null($certificate)) {
            return view('backend.pages.certificate.edit', compact('certificate'));
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

        $certificate->save();
        flash('success', 'Certificate Updated Successfully!');
        return redirect()->route('certificate.manage');
    }

    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        if (!is_null($certificate)) {

            $certificate->delete();
            flash('error', 'Certificate Removed Successfully!');
            return redirect()->route('certificate.manage');
        } else {
            //404
        }
    }
}
