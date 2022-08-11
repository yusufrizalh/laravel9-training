<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function show(Skill $skill)
    {
        $employees = $skill->employees()->latest()->paginate(3);
        return view('employees/index', compact('employees', 'skill'));
    }
}
