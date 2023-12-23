<?php

namespace App\Http\Controllers\Step;

use App\Enums\TemplateEnum;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\CheckDataStep1Request;
use App\Http\Requests\CheckDataStep2Request;
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

        $data = User::where('id', auth()->user()->id)->first();
        $data->p_type = session('p_type');
        $data->p_name = ($data->p_type == TemplateEnum::BLOG) ? $data->blog_name : $data->portfolio_name;
        $data->p_about = ($data->p_type == TemplateEnum::BLOG) ? $data->about_me : $data->about_me_p;

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
            User::where('id', auth()->user()->id)->update([
                'blog_name'     => $request->p_name,
                'about_me'      => $request->p_about,
                'company_func'  => $request->p_company_func,
                'address'       => $request->p_address,
                'phone_number'  => $request->p_phone,
            ]);
        }

        // Return view with data saved
        $p_type = session('p_type');

        $user_id = 3;

        $certification = Certification::where('user_id', $user_id)->get();
        $experience = Experience::where('user_id', $user_id)->get();
        // dd($certification);
        return view('home.step.layout.index', [
            'title'             => 'Pmaker - Step 3',
            'content'           => 'step-3',
            'p_type'            => $p_type,
            'certification'     => $certification,
            'experience'        => $experience,
        ]);
    }

    public function step4(CheckDataStep3Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('p_type')) {
            return redirect()->route('step.step_1');
        }

        if (FacadesRequest::isMethod('post')) {
            // Update user information
            User::where('id', auth()->user()->id)->update([
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
