<?php
return [
    "fill_all_fields" => "You must fill in all fields",
    "make_a_choice" => "You must make a choice",
    "cant_make_past_booking" => "Can't create booking in past",
    "transalator_not_created" => "Translator can not create booking",
    "information_completed_for_booking" => "Information on completed interpretation for booking number # :jobId",
    "new_booking_for_language_interpreter" => "New booking for :language interpreter :duaration min :due",
    "new_emergency_booking_for_language_interpreter" => "New emergency booking for :language interpreter :duration min",    

    "gender" => [
        "male" => "Man",
        "female" => "Woman",
    ],
    "job_for" => [
        "approved_interpreter" => "Approved interpreter",
        "authorized" => "Authorized",
        "healthcare_interpreter" => "Healthcare interpreter",
        "court_interpreter" => "Court interpreter",
    ],
    "booking_validations" => [
        'from_language_id_required' => 'Please select a source language.',
        'from_language_id_exists' => 'The selected source language is invalid.',
        'duration_required' => 'Please enter the duration of the booking.',
        'duration_integer' => 'The duration must be a whole number.',
        'customer_phone_type_required' => 'Please specify if it\'s a phone booking.',
        'customer_physical_type_required' => 'Please specify if it\'s an on-site booking.',
        'due_date_required' => 'Please select a due date.',
        'due_date_after' => 'The due date must be a future date.',
        'due_time_required' => 'Please select a due time.',
    ],
];