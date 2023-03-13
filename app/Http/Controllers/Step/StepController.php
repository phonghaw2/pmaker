<?php

namespace App\Http\Controllers\Step;

use App\Enums\TemplateEnum;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Requests\CheckDataStep2Request;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class StepController extends Controller
{
    use StepTrait;

    public function guide()
    {
        return view('home.step.guide');
    }

    public function step1()
    {
        return view('home.step.step_1');
    }

    public function step2(Request $request)
    {
        if (FacadesRequest::isMethod('get') && !session('p_type')) {
            return redirect()->route('step.step_1');
        }
        try {
            $data_step2 = [];
            if (session('step2')) {
                $data_step2 = session('step2');
            }
            if (FacadesRequest::isMethod('post')) {
                $request->validate([
                    'p_type' => 'required',
                ],
                [
                    'p_type.required'  => 'Please choose what you want to create.',
                ]);
                $p_type = $request->get('p_type');
                session()->put('p_type', $p_type);
            }
            // return redirect()->route('step.step_2')->with('success', 'hehe');
            return view('home.step.step_2',[
                'data' => $data_step2,
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('step.step_1')->with('fail', $th->getMessage());
        }
    }

    public function step3(CheckDataStep2Request $request)
    {
        // try {
            if (FacadesRequest::isMethod('post')) {
                $data = $request->validated();
                session()->put('step2', $data);

                $data_step3 = [];
                if (session('step3')) {
                    $data_step3 = session('step3');
                }
                $p_type = session('p_type');
                // return redirect()->route('step.step_3')->with('success', 'ehehe');
            }
            return view('home.step.step_3', [
                'p_type' => $p_type,
                'data' => $data_step3,
            ]);
        // } catch (\Throwable $th) {
            // dd($th->getMessage());
            // return redirect()->route('step.step_2')->with('fail', $th->getMessage());
            // return redirect()->back();
        // }

    }

    public function step4()
    {
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
