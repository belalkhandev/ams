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

if (!function_exists('styleStatus')) {
    function styleStatus($value)
    {
        $output = '';

        if ($value == 1) {
            $output .= '<span class="badge badge-success">Active</span>';
        } else if ($value == 0) {
            $output .= '<span class="badge badge-danger">Inactive</span>';
        }

        return $output;
    }
}

if (!function_exists('makeDropdownList')) {
    function makeDropdownList($objects, $key='id', $value='name')
    {
        $dropdown_lists = [];

        if ($objects) {
            foreach ($objects as $object) {
                $dropdown_lists[$object->$key] = $object->$value;
            }
        }

        return $dropdown_lists;
    }
}