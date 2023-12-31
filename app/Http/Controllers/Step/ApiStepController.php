<?php

namespace App\Http\Controllers\Step;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\CheckDataRenderCertification;
use App\Http\Requests\CheckDataRenderExperience;
use App\Models\Certification;
use App\Models\Experience;
use App\Models\Social;
use Illuminate\Http\Request;

class ApiStepController extends Controller
{
    use ResponseTrait;
    use StepTrait;

    public function renderSocialField(Request $request)
    {
        try {
            // $this->handleUploadedImage($request->file('image'));
            $platform = $request->get('platform');

            $query = Social::query();
            $platform_arr = $query->distinct()
                            ->pluck('platform')->toArray();

            if (in_array($platform, $platform_arr)) {
                $social = $query->where('platform', $platform)->get();
                $path = asset('images/' . $platform . '_default.svg');
                $id =  'choose-image-' . $platform;
                // render innerHTML for new social field
                $innerHTML  = '<div class="choose-icon">';
                $innerHTML .= '<div class="choosen-icon">';
                $innerHTML .= '<img src="' . $path . '" id="' . $id . '" class="p-icon" alt="' . $platform .  '">';
                $innerHTML .= '<i class="dropdown icon"><img src="/images/down-chevron.svg"></i></div>';
                $innerHTML .= '<ul class="select-icon-ul">';

                foreach ($social as $item) {
                    $image_src = asset('images/social-media/' . $item->file_path);
                    $innerHTML .= '<li class="options" data-pick-platform="' . $platform . '" data-image-src="' . $image_src . '">';
                    $innerHTML .= '<img src="' . $image_src . '" alt="' . $item->platform . ' icon">';
                    $innerHTML .= '</li>';
                }
                $innerHTML .= '</ul></div>';
                $innerHTML .= '<input class="field social-field" type="text" name="' . $platform . '" value="" placeholder="/MyNameIsJeff" maxlength="100">';

                return $this->successResponse($innerHTML);
            } else {
                return $this->errorResponse('Platform does not exist!');
            }
        } catch (\Throwable $th) {
            return $this->errorResponse();
        }
    }

    public function insertCertification(CheckDataRenderCertification $request)
    {
        try {
            $data = $request->validated();
            $data_cert = $data['certification'];
            $data_cert['user_id'] = auth()->user()->id;
            if (Certification::checkExists($data_cert)) {
                return $this->errorResponse('This content has already been added');
            }
            Certification::create($data_cert);

            return $this->successResponse();

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }

    }

    public function insertExperience(CheckDataRenderExperience $request)
    {
        try {
            $data = $request->validated();
            $data_exp = $data['experience'];
            $data_exp['user_id'] = 3;

            if (Experience::checkExists($data_exp)) {
                return $this->errorResponse('This content has already been added');
            }
            Experience::create($data);
            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }

    public function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $image->move(public_path('images') . DIRECTORY_SEPARATOR . 'temp');
        }
    }
}
