<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class ProfileController extends Controller
{
    public function edit_profile()
    {
        $id = Auth::id();
        // $progress = DB::table('users')->where(['id'=>$id,'grade'=>isEmpty()])->count();
        $progress=20;
        $val=User::where('id', '=', auth()->id())->first();
        if($val->school!=null){
            $progress=$progress+20;
        }
        if($val->grade!=null){
            $progress=$progress+20;
        }
        if($val->dob!=null){
            $progress=$progress+20;
        }
        if($val->profile!='upload/users/default.png'){
            $progress=$progress+20;
        }
        $user = Auth::user();
        return view('edit_profile', ['user' => $user,'progress' => $progress]);
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
    
        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
    
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
    
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
    
        return redirect()->back()->with("status","Password changed successfully !");
    }



    public function updateProfile(Request $request){
        $this->validate($request, [
          'id' => ['required'],
          'name' => ['required', 'string', 'max:255'],       
          'email'=>['required'],
          'phone' => ['string'],
         ]);
    
         $users = new user();
         $id=$request->input('id');
         $users->name = $request->input('name');
         $users->phone = $request->input('phone');
         $users->dob = $request->input('dob');
         $users->grade = $request->input('grade');
         $users->school = $request->input('school');
    
         $data=array(
          'name' => $users->name,
          'phone'=>$users->phone,
          'dob'=>$users->dob,
          'grade'=> $users->grade,
          'school'=> $users->school,
        );
        user::where('id',$id)->update($data);
            
         $users->update();
         return redirect()->back()->with('status', 'Profile Update Sucessfully');
      }



      public function updateprofilepicture(Request $request){
        $this->validate($request, [
          'profile' => ['required'],
         ]);
    
    
         $users = new user();
         $id=$request->input('id');
         if ($request->hasFile('profile')) {
            $image = $request->file('profile') ;
            $destinationPath = 'upload/users/'; // upload path
            $profile = 'upload/users/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profile);
            $users->profile = "$profile";
            
        }else{
            return redirect()->back()->with('error', 'If You want to Update Profile Picture, Please Select Image');
        }

        $data=array(
            'profile' => $users->profile,
          );
          user::where('id',$id)->update($data);
              
           $users->update();
           return redirect()->back()->with('status', 'Profile Picture Update Sucessfully');


    }




}
