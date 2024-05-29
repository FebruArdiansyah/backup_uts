<?php

namespace App\Http\Requests;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFakultasIlmuKomputerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('fakultas_ilmu_komputer_edit');
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
