<?php

namespace App\Http\Controllers;

use App\PersonalDetail;
use App\Education;
use App\Experience;
use App\Hobby;
use App\Project;
use App\Skills;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
	public function index()
	{
		$PersonalDetail = PersonalDetail::find(1);
		$Education = Education::find(1);
		$Experience = Experience::find(1);
		$Hobby = Hobby::find(1);
		$Project = Project::find(1);
		$Skill = Skills::find(1);
		
		return view('portfolio.index',['personalDetail' => $PersonalDetail, 'education' => $Education,
				'experience' => $Experience, 'hobby' => $Hobby, 'project' => $Project, 'skill' => $Skill
		]);
	}
	public function editPersonalDetails(Request $request, $id)
	{
		$PersonalDetail = PersonalDetail::find($id);
		
		$PersonalDetail->firstname = $request->firstname;
		$PersonalDetail->lastname = $request->lastname;
		$PersonalDetail->email = $request->email;
		$PersonalDetail->phone = $request->phone;
		
		$PersonalDetail->save();
		
		return redirect()->back();
	}
	public function editEducationContent(Request $request, $id)
	{
		$Education = Education::find($id);
		
		$Education->content = $request->content;
		
		$Education->save();
		
		return redirect()->back();
	}
	public function editExperienceContent(Request $request, $id)
	{
		$Experience = Experience::find($id);
	
		$Experience->content = $request->content;
	
		$Experience->save();
	
		return redirect()->back();
	}
	public function editHobbyContent(Request $request, $id)
	{
		$Hobby = Hobby::find($id);
	
		$Hobby->content = $request->content;
	
		$Hobby->save();
	
		return redirect()->back();
	}
	public function editProjectContent(Request $request, $id)
	{
		$Project = Project::find($id);
	
		$Project->content = $request->content;
	
		$Project->save();
	
		return redirect()->back();
	}
	public function editSkillContent(Request $request, $id)
	{
		$Skill = Skills::find($id);
	
		$Skill->content = $request->content;
	
		$Skill->save();
	
		return redirect()->back();
	}
	
}