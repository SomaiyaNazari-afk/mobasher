<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Traits\FileUploadTraits;
use Dotenv\Validator;
use http\Env\Response;
use Illuminate\Http\Request;


class UploadFileController extends Controller
{
    use FileUploadTraits;

    public function save(Request $request)
    {

        $formInput = $request->all();

        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', 'public');

        $pharmacy = Pharmacy::create($formInput);

        flash('Pharmacy created successfully.')->success();

        return redirect(route('pharmacies.list'));

    }


//first insert file into attachment table then insert it into public

//    public function action(Request $request)
//    {
//        dd($request->all());
//
//        $validation = Validator::make($request->all(),[
//
//            'image' => 'required|image|mimes:jpeg, png, jpg, gif|max:2048'
//        ]);
//        if($validation->passes())
//
//      {  //upload file
//           $image = $request->file('image');
//           dd($image);
//           $new_name = rand() . '.' . $image->getClientOriginalExtension();
//           $image->move(public_path('/files'), $new_name );
//           return response()->json([
//               'message'        => 'File Uploaded Successfully',
//               'uploaded_image' => '/files/' . $new_name,
//               'class_name'   => 'alert-success'
//           ]);
//        }
//        else
//        {
//            return response()->json([
//                'message'        => $validation->errors()->all(),
//                'uploaded_image'   => '',
//                'class_name'     => 'alert_danger'
//            ]);
//        }
//    }

}
