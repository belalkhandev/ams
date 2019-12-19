<?php
if (!function_exists('getGenderType')) {
    function getGenderType()
    {

        $genders = [
            '' => 'Select',
            'male' => 'Male',
            'female' => 'Female',
        ];

        return $genders;
    }
}

if (!function_exists('getStatus')) {
    function getStatus()
    {

        $status = [
            '1' => 'Active',
            '0' => 'Inactive',
        ];

        return $status;
    }
}