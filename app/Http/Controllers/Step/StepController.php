<?php

namespace App\Http\Controllers\Step;

use App\Enums\TemplateEnum;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\CheckDataStep1Request;
use App\Http\Requests\CheckDataStep2Request;
use App\Http\Requests\CheckDataStep3Request;
use App\Models\Certification;
use App\Models\Experience;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class StepController extends Controller
{
    use StepTrait;
    use ResponseTrait;
    private int $user_id;

    public function __construct() {
        $this->user_id = auth()->user()->id;
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
            $data = $request->validated();
            session($data);
        }

        $data = User::where('id', $this->user_id)->first();
        $data->p_type   = session('p_type');
        $data->p_name   = ($data->p_type == TemplateEnum::BLOG) ? $data->blog_name : $data->portfolio_name;
        $data->p_about  = ($data->p_type == TemplateEnum::BLOG) ? $data->about_me : $data->about_me_p;

        return view('home.step.layout.index', [
            'title'     => 'Pmaker - Step 2',
            'content'   => 'step-2',
            'data'      => $data,
        ]);
    }

    public function step3(CheckDataStep2Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('p_type')) {
            return redirect()->route('step.step_1');
        }

        if (FacadesRequest::isMethod('post')) {
            // Update user information
            User::where('id', $this->user_id)->update([
                'blog_name'     => $request->p_name,
                'about_me'      => $request->p_about,
                'company_func'  => $request->p_company_func,
                'address'       => $request->p_address,
                'phone_number'  => $request->p_phone,
            ]);
        }

        // Return view with data saved
        $data = User::where('id', $this->user_id)->first(['tech_stack','skill_stack','education']);
        $data->p_type           = session('p_type');
        $data->tech_stack       = $data->tech_stack ? explode(',', $data->tech_stack) : '';
        $data->skill_stack      = $data->skill_stack ? explode(',', $data->skill_stack) : '';

        $certification = Certification::where('user_id', $this->user_id)->get();
        $experience = Experience::where('user_id', $this->user_id)->get();

        return view('home.step.layout.index', [
            'title'             => 'Pmaker - Step 3',
            'content'           => 'step-3',
            'data'              => $data,
            'certification'     => $certification,
            'experience'        => $experience,
        ]);
    }

    public function step4(CheckDataStep3Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('p_type')) {
            return redirect()->route('step.step_1');
        }

        dd($request->validated());

        if (FacadesRequest::isMethod('post')) {
            // Update user information
            User::where('id', $this->user_id)->update([
                'blog_name' => $request->p_name,
                'about_me' => $request->p_about,
                'company_func' => $request->p_company_func,
                'address' => $request->p_address,
                'phone_number' => $request->p_phone,
            ]);
        }

        // if (FacadesRequest::isMethod('get')) {
            $query = Social::query();
            $platform = $query->distinct()
                        ->pluck('platform');
            $data = $query->get();
                // ->appends($request->all());

        // }
        return view('home.step.step-4', [
            'social' => $data,
            'platform' => $platform,
        ]);

        // dd($request->all());

    }

    public function step5()
    {
        return view('home.step.step_5');
    }

    public function stepSave(Request $request)
    {
        $data = $this->checkDataStep($request->all());
        foreach ($data as $key => $value) {
            session()->put('data.'. $key, $value);
        }
        dd(session()->all());
        if (session('data')['p_next_step'] != '') {
            return redirect()->route('step.step_' . session('data')['p_next_step']);
        } else {
            return redirect()->back();
        }
    }

    public function certSave(Request $request)
    {
        dd($request->all());
        $data = $this->checkDataStep($request->all());
        foreach ($data as $key => $value) {
            session()->put('data.'. $key, $value);
        }
        if (session('data')['p_next_step'] != '') {
            return redirect()->route('step.step_' . session('data')['p_next_step']);
        } else {
            return redirect()->back();
        }
    }
}
