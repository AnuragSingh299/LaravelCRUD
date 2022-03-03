<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Validation\Rules\Unique;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Person::all();
        return view('person.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $person = new Person;
        // $person->name = $request->name;
        // $person->phone_no = $request->phone;
        // $person->date_of_birth = $request->dob;
        // $person->email = $request->email;
        // $person->gender = $request->gender;
        // $person->age = $request->age;
        // $person->description = $request->description;
        //$person->hobby = $request->hobby;
        
        $input = $request->validate([
             'name' => 'required',
             'phone_no' => 'required',
             'date_of_birth' => 'required',
             'email' => 'required',
             'gender' => 'required',
             'age' => 'required',
             'description' => 'required',
        ]);
        //dd($input);
        Person::create($input);

        //$person->save();
        
        return redirect()->route('person.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($person_id)
    {
        $person = Person::find($person_id);
        //dd($person);
        return view('person.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::find($id);
        return view('person.edit', compact('person'));
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
        $input = $request->validate([
            'name' => 'required',
            'phone_no' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'age' => 'required',
            'description' => 'required',
            'hobby' => 'required',
            'gender' => 'required',
        ]);

        Person::where('person_id', $id)
                ->update($input);

        return redirect()->route('person.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($person_id)
    {
        Person::find($person_id)
                ->delete();

        return redirect()->route('person.index');
    }
}
