<?php

namespace App\Http\Controllers\Step;

use App\Enums\TemplateEnum;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\CheckDataStep1Request;
use App\Http\Requests\CheckDataStep2Request;
use App\Models\Certification;
use App\Models\Experience;
use App\Models\Social;
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
        return view('home.step.step_1');
    }

    public function step2(CheckDataStep1Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('p_type')) {
            return redirect()->route('step.step_1');
        }
        $data = $request->validated();
        session($data);
        return view('home.step.step_2');

    }

    public function step3(CheckDataStep2Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('step2')) {
            return redirect()->route('step.step_2');
        }
        // Storing data to session
        $data = $request->validated();
        session()->put('step2', $data);

        // Return view with data saved
        $p_type = session('p_type');

        $user_id = 3;

        $certification = Certification::where('user_id', $user_id)->get();
        $experience = Experience::where('user_id', $user_id)->get();
        dd($certification);
        return view('home.step.step_3', [
            'p_type' => $p_type,
        ]);
    }

    public function step4(Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('step3')) {
            return redirect()->route('step.step_3');
        }

        if (FacadesRequest::isMethod('get') && session('step3')) {
            $query = Social::query();
            $platform = $query->distinct()
                        ->pluck('platform');
            $data = $query->get();
                // ->appends($request->all());

            return view('home.step.step_4', [
                'social' => $data,
                'platform' => $platform,
            ]);
        }

        dd($request->all());

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
