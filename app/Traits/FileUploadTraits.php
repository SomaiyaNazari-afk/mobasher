<?php

namespace App\Traits;
use Illuminate\Http\Request;

trait FileUploadTraits
{
    public function verifyAndStoreImage(Request $request, $fieldname = 'image', $directory = 'unknown' )
    {

        if ($request->hasFile($fieldname)) {

            if (!$request->file($fieldname)->isValid()) {

                flash('Invalid file!')->error()->important();

                return redirect()->back()->withInput();

            }

            return $request->file($fieldname)->store('image/' . $directory, 'public');

        }

        return null;
    }

    public function file($request){

       $attachment = new Attachment();
       $attachment->mime = $request->mime;
       $attachment->size = $request->size;
       $attachment->name = $request->name;
       $attachment->original_name = $request->original_name;
       $attachment->attachment_type = $request->attachment_type;
       $attachment->attachment_id = $request->attachment_id;
       $attachment->save();
       return $attachment;
   }
}
