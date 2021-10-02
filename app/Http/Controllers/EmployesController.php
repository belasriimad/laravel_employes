<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employes = Employe::all();
        return view('employes.index')->with([
            'employes' => $employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employes.create');
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
        $this->validate($request, [
            'fullname' => 'required',
            'registration_number' => 'required|unique:employes',
            'depart' => 'required',
            'hire_date' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);
        $data = $request->except(['_token']);
        Employe::create($data);
        return redirect()->route("employes.index")->with([
            "success" => "Employe added successfully"
        ]);
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
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.show")->with([
            "employe" => $employe
        ]);
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
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.edit")->with([
            "employe" => $employe
        ]);
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
        $employe = Employe::where('registration_number', $id)->first();
        $this->validate($request, [
            'fullname' => 'required',
            'registration_number' => 'required|unique:employes,id,' . $employe->id,
            'depart' => 'required',
            'hire_date' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);
        $data = $request->except(['_token', '_method']);
        $employe->update($data);
        return redirect()->route("employes.index")->with([
            "success" => "Employe updated successfully"
        ]);
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
        $employe = Employe::where('registration_number', $id)->first();
        $employe->delete();
        return redirect()->route("employes.index")->with([
            "success" => "Employe deleted successfully"
        ]);
    }

    public function getWorkCertificate($id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.certificate")->with([
            "employe" => $employe
        ]);
    }

    public function vacationRequest($id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.vacation")->with([
            "employe" => $employe
        ]);
    }
}
