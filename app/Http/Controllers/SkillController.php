<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() {
        $skill = Skill::orderBy('created_at', 'desc')->get();

        return view('skills.index', ['skills' => $skill]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('skills', 'public');
        }

        Skill::create($formFields);

        return redirect()->back();
    }

    public function edit(Skill $skill) {
        return view('skills.edit', ['skills' => $skill]);
    }

    public function update(Skill $skill, Request $request) {
        $formFields = $request->validate([
            'name' => 'string',
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('skills', 'public');
        }

        $skill->update($formFields);

        return redirect('/skills')->with('message', 'Skill update successfully');
    }

    public function destroy(Skill $skill) {
        $skill->delete();

        return back()->with('message', 'Skill deleted successfully');
    }
}
