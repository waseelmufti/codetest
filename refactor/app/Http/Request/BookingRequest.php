<?php

namespace DTApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'from_language_id' => 'required|integer|exists:language,id',
            'duration' => 'required|integer',
            'immediate' => 'required|in:yes,no',
        ];


        if ($this->input('immediate') == 'no') {
            $rules['due_date'] = 'required|date_format:m/d/Y|after:today';
            $rules['due_time'] = 'required|date_format:H:i';
            $rules['customer_phone_type'] = 'required|in:yes,no';
            $rules['customer_physical_type'] = 'required|in:yes,no';
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            
            'from_language_id.required' => trans("app.booking_validations.from_language_id_required"),
            'from_language_id.exists' => trans("app.booking_validations.from_language_id_exists"),
            'duration.required' => trans("app.booking_validations.duration_required"),
            'duration.integer' => trans("app.booking_validations.duration_integer"),
            'customer_phone_type.required' => trans("app.booking_validations.customer_phone_type_required"),
            'customer_physical_type.required' => trans("app.booking_validations.customer_physical_type_required"),
            'due_date.required' => trans("app.booking_validations.due_date_required"),
            'due_date.after' => trans("app.booking_validations.due_date_after"),
            'due_time.required' => trans("app.booking_validations.due_time_required"),
        ];
    }
}
