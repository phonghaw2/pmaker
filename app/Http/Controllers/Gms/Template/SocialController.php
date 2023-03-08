<?php

namespace App\Http\Controllers\Gms\Template;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\StoreSocialMediaRequest;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SocialController extends Controller
{
    use ResponseTrait;
    private object $model ;

    public function __construct()
    {
        $this->model = Social::query();
    }

    public function rename(request $request)
    {
        try {
            $request->validate([
                'id' => [
                    'required',
                ],
                'file_path' => [
                    'required',
                    'string',
                    'max:25',
                ],
                'file_path_old' => [
                    'required',
                    'max:25',
                ],
            ]);
            Social::where('id', $request->id)
                ->update([
                    'file_path' => $request->file_path,
                ]);

            rename(public_path('/images/social-media/' . $request->file_path_old), public_path('/images/social-media/' . $request->file_path));
            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }

    public function delete(request $request)
    {
        try {
            $id_arr = explode(',', $request->id);
            for ($i = 0; $i < count($id_arr) ; $i++) {
                $social = Social::where('id', $id_arr[$i])->first();
                $icon_path = public_path('images/social-media/'. $social->file_path);
                if (File::exists($icon_path)) {
                    File::delete($icon_path);
                }
                $social = Social::find($id_arr[$i]);
                $social->delete();
            }
            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }

    public function upload(StoreSocialMediaRequest $request)
    {
        try {
            $request->validated();
            $icon_name = $request->file_path . '.' . $request->social_icon->extension();

            $check = $this->model->where('file_path', $icon_name)->exists();

            if ($check) {
                return $this->errorResponse('Icon Name has been exist!');
            } else {
                $request->social_icon->move(public_path('images/social-media'), $icon_name);
                Social::create([
                    'platform' => $request->platform,
                    'file_path' => $icon_name,
                ]);
                return $this->successResponse();
            }
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }
}
