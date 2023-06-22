<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Certificate\CertificateRequest;
use App\Models\Certificate;

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

    public function store(CertificateRequest $request)
    {
        $certificate = Certificate::create($request->validated());
        flash('success', 'Certificate Has Been Added!');

        return redirect()->route('certificate.manage');
    }

    public function edit(Certificate $certificate)
    {
        return view('backend.pages.certificate.edit', compact('certificate'));
    }

    public function update(CertificateRequest $request, Certificate $certificate)
    {
        $certificate->update($request->validated());
        flash('success', 'Certificate Updated Successfully!');

        return redirect()->route('certificate.manage');
    }

    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
        flash('error', 'Certificate Removed Successfully!');

        return redirect()->route('certificate.manage');
    }
}
