<?php

namespace App\Http\Controllers\Step;

use App\Enums\VarKeyEnum;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\CheckDataStep1Request;
use App\Http\Requests\CheckDataStep2Request;
use App\Http\Requests\CheckDataStep3Request;
use App\Http\Requests\CheckDataStep4Request;
use App\Models\Certification;
use App\Models\Experience;
use App\Models\Social;
use App\Models\User;
use Illuminate\Support\Facades\Request as FacadesRequest;

class StepController extends Controller
{
    use StepTrait;
    use ResponseTrait;
    private int $user_id;

    public function __construct() {
        if (auth()->check()) {
            $this->user_id = auth()->user()->id;
        }
    }

    public function guide()
    {
        return view('home.step.guide');
    }

    public function step1()
    {
        return view('home.step.layout.index', [
            'title'     => 'Pmaker - Step 1',
            'content'   => 'step-1',
        ]);
    }

    public function step2(CheckDataStep1Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('p_type')) {
            return redirect()->route('step.step_1');
        }

        if (FacadesRequest::isMethod('post')) {
            $p_type = $request->validated();
            session($p_type);
        }

        return view('home.step.layout.index', [
            'title'     => 'Pmaker - Step 2',
            'content'   => 'step-2',
            'data'      => User::getDataStep2($this->user_id, session('p_type')),
        ]);
    }

    public function step3(CheckDataStep2Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('p_type')) {
            return redirect()->route('step.step_1');
        }

        if (FacadesRequest::isMethod('post')) {
            // Update user information
            User::whereId($this->user_id)->update([
                'blog_name'     => $request->p_name,
                'about_me'      => $request->p_about,
                'company_func'  => $request->p_company_func,
                'address'       => $request->p_address,
                'phone_number'  => $request->p_phone,
            ]);
        }

        return view('home.step.layout.index', [
            'title'            => 'Pmaker - Step 3',
            'content'          => 'step-3',
            'data'             => User::getDataStep3($this->user_id, session('p_type')),
            'certification'    => Certification::whereUserId($this->user_id)->get(),
            'experience'       => Experience::whereUserId($this->user_id)->get(),
            'separation'       => VarKeyEnum::SEPARATION,
        ]);
    }

    public function step4(CheckDataStep3Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('p_type')) {
            return redirect()->route('step.step_1');
        }

        if (FacadesRequest::isMethod('post')) {
            $update = $request->validated();
            unset($update['p_type']);
            // Update user information
            User::whereId($this->user_id)->update($update);
        }

        $social = Social::all();

        return view('home.step.layout.index', [
            'title'             => 'Pmaker - Step 4',
            'content'           => 'step-4',
            'social'            => $social,
            'platform'          => $social->pluck('platform')->unique(),
            'platform_default'  => $this->getPlatformDefault(),
            'platform_old'      => $this->getPlatformOld($social, old()),
        ]);
    }

    public function step5(CheckDataStep4Request $request)
    {
        if (FacadesRequest::isMethod('post')) {
            $update = $request->validated();
            unset($update['p_type']);
            // Update user information
            User::whereId($this->user_id)->update($update);
        }
        // dd(FacadesRequest::all());
        return view('home.step.layout.index',[
            'title'             => 'Pmaker - Step 5',
            'content'           => 'step-5',
            'layouts' => $this->getLayout(),
        ]);
    }

    public function getPlatformDefault()
    {
        return [
            [
                'name'          => 'facebook',
                'path'          => 'images/facebook_default.svg',
                'placeholder'   => '/user-name',
                'length'        => '100',
            ],
            [
                'name'          => 'youtube',
                'path'          => 'images/youtube_default.svg',
                'placeholder'   => '/@phonghaw2',
                'length'        => '100',
            ],
            [
                'name'          => 'x',
                'path'          => 'images/twitter_default.svg',
                'placeholder'   => '/HPhong24261595',
                'length'        => '100',
            ],
            [
                'name'          => 'instagram',
                'path'          => 'images/instagram_default.svg',
                'placeholder'   => '/HPhong24261595',
                'length'        => '100',
            ],
        ];
    }

    public function getLayout()
    {
        return [
            [
                'name' => 'Magazine Layout',
                'numb' => '01.',
                'img'  => 'magazine.png'
            ],
            [
                'name' => 'Stacked Layout',
                'numb' => '02.',
                'img'  => 'stacked.png'
            ],
            [
                'name' => 'Grid Layout',
                'numb' => '03.',
                'img'  => 'grid.png'
            ],
        ];
    }

    public function getPlatformOld($social, $old = array())
    {
        if (count($old) == 0) {
            return [];
        }

        $ret = [];
        foreach ($social as $item) {
            if (!in_array($item->platform, $old)) continue;

            $ret[] = [
                'name'          => $item->platform,
                'path'          => $item->file_path,
                'placeholder'   => '/user-name',
                'length'        => '100',
            ];
        }

        return $ret;
    }
}
