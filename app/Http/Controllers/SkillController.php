<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function show(Skill $skill)
    {
        $employees = $skill->employees()->latest()->get();
        return view('employees/index', compact('employees', 'skill'));
    }
}
