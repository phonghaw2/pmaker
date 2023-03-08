<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Models\Social;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class StepController extends Controller
{
    use ResponseTrait;

    public function render_social_field(Request $request)
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
                $innerHTML .= "<img src='/images/" . $platform . "_default.svg' class='p-icon' alt='instagram' title='instagram'>";
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
}
