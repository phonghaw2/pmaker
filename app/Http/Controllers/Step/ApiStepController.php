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

    public function renderCertification(CheckDataRenderCertification $request)
    {
        try {
            $data = $request->validated()['data'];
            $data['user_id'] = 3;
            Certification::create($data);

            if ($data['credential_id'] != '') {
                $data['credential_id'] = "Credintial ID " . $data['credential_id'];
            }
            $innerHTML  = "<div><img src='' alt='". $data['organization'] ."' width='48'></div>";
            $innerHTML .= "<div class='certification-card'>";
            $innerHTML .= "<div class='certification-name'><span>" . $data['name'] . "</span></div>";
            $innerHTML .= "<span class='certification-organization'>" . $data['organization'] . "</span>";
            $innerHTML .= "<span class='certification-info'>Issued " . $data['issue_date'] . "</span>";
            $innerHTML .= "<span class='certification-info'>" . $data['credential_id'] . "</span></div>";
            $innerHTML .= "<div class='button-wrapper'>";
            $innerHTML .= "<div class='swiper-button swiper-next-button edit-card-cert' role='button' data-test=" . $data['name'] . ">";
            $innerHTML .= "<svg viewBox='0 0 15 15' fill='none' stroke='currentColor'> <path fill-rule='evenodd' clip-rule='evenodd' d='M11.8536 1.14645C11.6583 0.951184 11.3417 0.951184 11.1465 1.14645L3.71455 8.57836C3.62459 8.66832 3.55263 8.77461 3.50251 8.89155L2.04044 12.303C1.9599 12.491 2.00189 12.709 2.14646 12.8536C2.29103 12.9981 2.50905 13.0401 2.69697 12.9596L6.10847 11.4975C6.2254 11.4474 6.3317 11.3754 6.42166 11.2855L13.8536 3.85355C14.0488 3.65829 14.0488 3.34171 13.8536 3.14645L11.8536 1.14645ZM4.42166 9.28547L11.5 2.20711L12.7929 3.5L5.71455 10.5784L4.21924 11.2192L3.78081 10.7808L4.42166 9.28547Z' fill='currentColor' /> </svg>";
            $innerHTML .= "</div></div>";

            return $this->successResponse($innerHTML);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }

    }

    public function renderExperience(CheckDataRenderExperience $request)
    {
        try {
            $data = $request->validated()['data'];
            $data['user_id'] = 3;
            if (Experience::where('user_id', $data['user_id'])->where('company_name', $data['company_name'])->where('title', $data['title'])->exists()) {
                return $this->errorResponse();
            }
            Experience::create($data);

            $diff_month = $this->diffMonth($data['start_date'], $data['end_date']);

            $innerHTML  = "<div><img src='' alt='". $data['company_name'] ."' width='48'></div>";
            $innerHTML .= "<div class='experience-card'>";
            $innerHTML .= "<div class='experience-job-title'><span>" . $data['title'] . "</span></div>";
            $innerHTML .= "<span class='experience-company'>" . $data['company_name'] . " · " . $data['employment_type'] ."</span>";
            $innerHTML .= "<span class='experience-info'>" . $data['start_date'] . " - " . $data['end_date'] . " · " . $diff_month . " mos</span>";
            $innerHTML .= "<span class='experience-info'>" . $data['location'] . "</span></div>";
            $innerHTML .= "<div class='button-wrapper'>";
            $innerHTML .= "<div class='swiper-button swiper-next-button edit-card-cert' role='button' data-test=" . $data['company_name'] . ">";
            $innerHTML .= "<svg viewBox='0 0 15 15' fill='none' stroke='currentColor'> <path fill-rule='evenodd' clip-rule='evenodd' d='M11.8536 1.14645C11.6583 0.951184 11.3417 0.951184 11.1465 1.14645L3.71455 8.57836C3.62459 8.66832 3.55263 8.77461 3.50251 8.89155L2.04044 12.303C1.9599 12.491 2.00189 12.709 2.14646 12.8536C2.29103 12.9981 2.50905 13.0401 2.69697 12.9596L6.10847 11.4975C6.2254 11.4474 6.3317 11.3754 6.42166 11.2855L13.8536 3.85355C14.0488 3.65829 14.0488 3.34171 13.8536 3.14645L11.8536 1.14645ZM4.42166 9.28547L11.5 2.20711L12.7929 3.5L5.71455 10.5784L4.21924 11.2192L3.78081 10.7808L4.42166 9.28547Z' fill='currentColor' /> </svg>";
            $innerHTML .= "</div></div>";

            return $this->successResponse($innerHTML);
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }

    }
}
