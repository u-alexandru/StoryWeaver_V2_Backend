<?php

namespace App\Http\Requests;

use App\Contracts\Reportable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class ReportRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('report', $this->reportable());
    }

    public function rules()
    {
        return [
            // the class of the liked object
            'reportable_type' => [
                "bail",
                "required",
                "string",
                function ($attribute, $value, $fail) {
                    if (! class_exists($value, true)) {
                        $fail($value . " is not an existing class");
                    }

                    if (! in_array(Model::class, class_parents($value))) {
                        $fail($value . " is not Illuminate\Database\Eloquent\Model");
                    }

                    if (! in_array(Reportable::class, class_implements($value))) {
                        $fail($value . " is not App\Contracts\Reportable");
                    }
                },
            ],

            // the id of the liked object
            'id' => [
                "required",
                function ($attribute, $value, $fail) {
                    $class = $this->input('reportable_type');

                    if (! $class::where('id', $value)->exists()) {
                        $fail($value . " does not exists in database");
                    }
                },
            ],

            // the reason for reporting
            'reason' => [
                'required',
                'string',
                'max:255',
            ],

            // the description of the report
            'description' => [
                'required',
                'string',
            ],
        ];
    }

    public function reportable(): Reportable
    {
        $class = $this->input('reportable_type');
        return $class::findOrFail($this->input('id'));
    }
}
