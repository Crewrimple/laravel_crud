<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interests;
use App\Models\Languages;
use App\Models\PersonalInformation;
use App\Models\Projects;
use App\Models\Skills;
use Illuminate\Http\Request;

class Userprofile extends Controller
{
    public function index()
    {
        $personal_information   = PersonalInformation::get()->toArray();

        if (!empty($personal_information)) {

            $user_data = array();
            foreach ($personal_information as $personal_info) {

                $user_id = $personal_info['id'];

                if (!empty($user_id)) {
                    $user_info['personal_info']         = $personal_info;


                    $contact_info                       = ContactInformation::find($user_id);
                    if (!empty($contact_info)) {

                        $user_info['contact_info']      = $contact_info->toArray();
                    }

              }

                array_push($user_data, $user_info);
            }
        } else {
            $user_data = array();
        }

        return view('index', ['users_data' => $user_data]); 
    }

    public function view($id)
    {
        if (!empty($id)) {
            $personal_information       = PersonalInformation::find($id)->toArray();
            $contact_information        = ContactInformation::where('user_id', $id)->get()->first()->toArray();
         
            $info['personal_info']      = $personal_information;
            $info['contact_info']       = $contact_information;
          
        }

        return view('view', ['information' => $info]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $personal_info = new PersonalInformation();
        $personal_info->first_name        = $request->first_name;
        $personal_info->last_name         = $request->last_name;
        $personal_info->profile_title     = $request->profile_title;
        $personal_info->about_me          = $request->about_me;
        if ($request->file('image_path')) {
            $picture       = !empty($request->file('image_path')) ? $request->file('image_path')->getClientOriginalName() : '';
            $request->file('image_path')->move(public_path('assets/images/'), $picture);
        }
        $personal_info->image_path        = isset($picture) && !empty($picture) ? $picture : '';
        $personal_info->save();

        $personal_information = PersonalInformation::latest()->first();

        $contact_info = new ContactInformation();
        $contact_info->user_id          = $personal_information->id;
        $contact_info->email            = $request->email;
        $contact_info->phone_number     = $request->phone_number;
      
        $contact_info->save();


               return redirect()->route('index')->withSuccess("User Profile created successfully");
    }

    public function edit($id)
    {
        if (!empty($id)) {
            $personal_information       = PersonalInformation::find($id)->toArray();
            $contact_information        = ContactInformation::where('user_id', $id)->get()->toArray();
        
            $info['personal_info']      = $personal_information;
            $info['contact_info']       = $contact_information;
 

            return view('edit', ['information' => $info]);
        } else {
            return redirect()->back()->withErrors('Somthing went wrong');
        }
    }

    public function update(Request $request)
    {

        if ($request->verify == 1) {
            $id = $request->user_id;

            $personal_info = PersonalInformation::find($id);
            $personal_info->first_name        = $request->first_name;
            $personal_info->last_name         = $request->last_name;
            $personal_info->profile_title     = $request->profile_title;
            $personal_info->about_me          = $request->about_me;
            if ($request->file('image_path')) {
                $picture       = !empty($request->file('image_path')) ? $request->file('image_path')->getClientOriginalName() : '';
                $request->file('image_path')->move(public_path('assets/images/'), $picture);
            }
            if (!empty($request->file('image_path'))) {
                $personal_info->image_path        = isset($picture) && !empty($picture) ? $picture : '';
            }
            $personal_info->save();

            $contact_info = ContactInformation::where('user_id', $id)->get()->first();
            $contact_info->user_id          = $id;
            $contact_info->email            = $request->email;
            $contact_info->phone_number     = $request->phone_number;
           }

        return redirect()->back()->withSuccess("User Profile updated successfully");
    }

    public function destroy($id)
    {

        if (!empty($id)) {

            PersonalInformation::find($id)->delete();
            ContactInformation::where('user_id', $id)->delete();
            
            return redirect()->back()->withSuccess("User Profile deleted successfully");
        } else {

            return redirect()->back()->withSuccess("Something went wrong");
        }
    }
}
