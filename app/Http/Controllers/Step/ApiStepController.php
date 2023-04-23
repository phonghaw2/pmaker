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
    use ArticleService;

    public function renderSocialField(Request $request, ArticleService $articleService)
    {
        try {
            $articleService->handleUploadedImage($request->file('image'));
            $platform = $request->get('platform');

            $query = Social::query();
            $platform_arr = $query->distinct()
                            ->pluck('platform')->toArray();

            if (in_array($platform, $platform_arr)) {
                $social = $query->where('platform', $platform)->get();
                // render innerHTML for new social field
                $innerHTML  = "<div class='choose-icon'>";
                $innerHTML .= "<div class='choosen-icon'>";
                $innerHTML .= "<img src='/images/" . $platform . "_default.svg' class='p-icon' alt='" . $platform . "' title='" . $platform . "'>";
                $innerHTML .= "<i class='dropdown icon'><img src='/images/down-chevron.svg'></i></div>";
                $innerHTML .= "<ul class='select-icon-ul'>";

                foreach ($social as $item) {
                    $innerHTML .= "<li class='options'>";
                    $innerHTML .= "<img src='/images/social-media/" . $item->file_path . "' alt=' $item->platform icon'>";
                    $innerHTML .= "</li>";
                }
                $innerHTML .= "</ul></div>";
                $innerHTML .= "<input class='field social-field' type='text' name='instagram' value='' required placeholder='/MyNameIsJeff' maxlength='100'>";

                return $this->successResponse($innerHTML);
            } else {
                return $this->errorResponse('platform does not exist!');
            }
        } catch (\Throwable $th) {
            return $this->errorResponse();
        }
    }

    public function insertCertification(CheckDataRenderCertification $request)
    {
        try {
            $data = $request->validated()['certification'];
            $data['user_id'] = 3;
            if (Certification::where('user_id', $data['user_id'])->where('name', $data['name'])->where('organization', $data['organization'])->exists()) {
                return $this->errorResponse("This content has already been added");
            }
            Certification::create($data);

            return $this->successResponse();

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }

    }

    public function insertExperience(CheckDataRenderExperience $request, Experience $experience)
    {
        try {
            $data = $request->validated();
            $data = $data['experience'];
            $data['user_id'] = 3;
            $experience = new Experience;

            if ($experience->checkExists($data)) {
                return $this->errorResponse("This content has already been added");
            }
            Experience::create($experience);
            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }
}
