<?php

namespace App\Http\Controllers\Step;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class StepController extends Controller
{
    // public array $data_step;
    protected $data_step;
    private $shared = [];

    public function __construct()
    {
        $this->data_step['p_next_step'] = '';
        $this->data_step['p_type'] = '';
    }
    public function guide()
    {
        return view('home.step.guide');
    }

    public function step_1()
    {
        return view('home.step.step_1');
    }

    public function step_2(Request $request)
    {
        dd($this->shared);
        return view('home.step.step_2');
    }

    public function step_3(Request $request)
    {
        // $data_step['p_type'] = $request->get('p_type');
        return view('home.step.step_3');
    }

    public function step_4()
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

    public function step_5()
    {
        return view('home.step.step_5');
    }

    public function step_save(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            $this->data_step[$key] = $value;
            $this->shared[$key] = $value;
        }
        // $this->$data_step[] =
        return redirect()->route('step.step_' . $this->data_step['p_next_step'])->with('success', 'Password not match');
    }
}
