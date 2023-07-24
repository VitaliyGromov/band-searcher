<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skill\SkillFilterRequest;
use App\Http\Requests\Skill\SkillFormRequest;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SkillFilterRequest $request): View
    {
        $skills = Skill::filter($request->validated())->orderBy('id')->get();

        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillFormRequest $request): RedirectResponse
    {
        Skill::create([...$request->validated()]);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillFormRequest $request, Skill $skill): RedirectResponse
    {
        $skill->update([...$request->validated()]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->back();
    }
}
