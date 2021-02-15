<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\http\request;

class PagesControllers extends Controller
{
    public function index(){
$projects=Project::where('owner_id',auth()->id())->get();

    return view('index',compact('projects'));

}
public function about(){
	return view('about');
	}
	public function contact(){
	return view('contact');
	}

public function show(Project $project)
{




	return view('show', compact('project'));
}
public function check(Project $project)
{




    return view('check', compact('project'));
}

public function edit(Project $project)
{

	
return view('edit',compact('project'));


}

public function update(Project $project, Request $request)
{

 $this->validate($request,[
            'name' => ['required','min:3'],
            'description' =>['required','min:3'],
            'venue'=>['required','min:3'],
            'seats'=>['required'],
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
     
       

     if($request->hasfile('image')){
        $image=$request->file('image');
         $names=rand().'.'.$image->getClientOriginalExtension();
         $destinationPath=public_path('/images');
         $imagePath=$destinationPath."/".$names;
         $image->move($destinationPath,$names);
         $project->image=$names;

               
     }
     $project->name=$request->name;
     $project->description=$request->description;
     $project->venue=$request->venue;
     $project->seats=$request->seats;
    
     $project->update();


return redirect('/projects');

}


public function destroy($id)
{

project::findOrFail($id)->delete();

return redirect('/projects');
}

public function create(){
	return view('create');
	}

	

    public function store(Request $request)
    {
       
     $this->validate($request,[
            'name' => ['required','min:3'],
            'description' =>['required','min:3'],
            'venue'=>['required','min:3'],
            'seats'=>['required'],
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
     
       $project = new Project();

     if($request->hasfile('image')){
        $image=$request->file('image');
         $names=rand().'.'.$image->getClientOriginalExtension();
         $destinationPath=public_path('/images');
         $imagePath=$destinationPath."/".$names;
         $image->move($destinationPath,$names);
         $project->image=$names;

               
     }
     $project->name=$request->get('name');
     $project->description=$request->get('description');
     $project->venue=$request->get('venue');
     $project->seats=$request->get('seats');
    
     $project['owner_id'] =auth()->id();
     $project->save();
     



/*\Mail::to($project->owner->email)->queue(
       new ProductAdded($project));*/


    
       
    return redirect('/projects');
    }


   
   public function shows(Project $project)
{


$projects=Project::all();


    return view('all', compact('projects'));
}

}
