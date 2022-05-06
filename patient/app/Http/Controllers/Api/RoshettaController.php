<?php

namespace App\Http\Controllers\Api;
use App\Helper\General;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\User;
use App\Traits\ResponseJson;
use Illuminate\Http\Request;
use Validator;
class RoshettaController extends Controller
{
    use ResponseJson;


    public function updatePhoto(Request $request)
    {
        try{
           $validator = Validator::make($request->all(), [
               'imgBase' => ['required', 'string'],
               'userId' => ['required', 'integer'],
           ]);
            if ($validator->fails()) {
                return $this->jsonResponseError(true, $validator->errors(), 400);
            }
            $authUser = $request->userId;
           // $photo = General::base64();
            $photo = $request->imgBase;
            $imgPath = General::base64_to_jpeg($photo);
            if($imgPath=='notValid'){
                return $this->jsonResponseError(true,'Not valid base64',200);
            }
            $user = Patient::create([
                'medicine'=>'some here',
                'notes'=>'details',
                'patient_id'=>$authUser,
                'img'=>$imgPath
            ]);
            return $this->jsonResponse('', false, 'photo created successfully', 200);
        }catch (\Exception $ex){
          //  return $ex;
            return $this->jsonResponseError(true,'Something wrong please try again later',200);
        }
    }

    public function search(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'keyword' => ['required', 'string'],
            ]);
            if ($validator->fails()) {
                return $this->jsonResponseError(true, $validator->errors(), 400);
            }
            $medicine = Medicine::where('name','like', '%'.$request->keyword.'%')->get();
            return $this->jsonResponse($medicine, false, '', 200);

        } catch (\Exception $ex) {
            // return $ex;
            return $this->jsonResponseError(true,'something went wrong',200);
        }
    }

    public function getPrescriptions(Request $request)
    {
        try {
             $medicine = user::whereId($request->userId)->with('roshetta')->get();
            return $this->jsonResponse(UserResource::collection($medicine), false, '', 200);
        } catch (\Exception $ex) {
             //return $ex;
            return $this->jsonResponseError(true,'something went wrong',200);
        }
    }
}
