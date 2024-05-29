<?php

namespace App\Http\Requests;
use App\Models\FakultasIlmuKomputer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFakultasIlmuKomputerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('fakultas_ilmu_komputer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:fakultas_ilmu_komputer,id',
        ];
    }
}
