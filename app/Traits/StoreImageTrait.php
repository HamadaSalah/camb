<?php

namespace App\Traits;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\Storage;

trait StoreImageTrait {

    public function verifyAndStoreImage( Request $request, $fieldname = 'img', $directory = 'uploads' ) {

        if( $request->hasFile( $fieldname ) ) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'imgs'.'_'.time().'.'.$ext;
            $storagePath = Storage::disk('public_uploads')->put('/'.$directory, $file);
            $storageName = basename($storagePath);
            return $directory . '/' . $storageName;




                // $ext = $request->file($fieldname)->getClientOriginalExtension();
                // $filename = $directory.'_'.time().Str::random(8).'.'.$ext;
                // $request->file($fieldname)->storeAs('public/'.$directory, $filename);
                // $mydata = $filename;
        }
    }

}
