<?php
if (!function_exists('getGenderType')) {
    function getGenderType()
    {
        $genders = [
            'male' => 'Male',
            'female' => 'Female',
        ];

        return $genders;
    }
}


if (!function_exists('getMaritalStatus')) {
    function getMaritalStatus()
    {

        $status = [
            'Married' => 'Married',
            'Unmarried' => 'Unmarried',
        ];

        return $status;
    }
}

if (!function_exists('getJobType')) {
    function getJobType()
    {

        $types = [
            'permanent' => 'Permanent',
            'temporary' => 'Temporary',
        ];

        return $types;
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

if (!function_exists('getRelations')) {
    function getRelations()
    {

        $relations = [
            'son' => 'Son',
            'daughter' => 'Daughter',
            'niece' => 'Niece',
            'nephew' => 'Nephew',
            'brother' => 'Brother',
            'sister' => 'Sister',
            'grandson' => 'Grandson',
            'Granddaughter' => 'granddaughter',
        ];

        return $relations;
    }
}

if (!function_exists('getReligionType')) {
    function getReligionType()
    {

        $religions = [
            'islam' => 'Islam',
            'christianity' => 'Christianity ',
            'buddhism' => 'Buddhism ',
            'hinduism ' => 'Hinduism ',
        ];

        return $religions;
    }
}

if (!function_exists('getStudentCategory')) {
    function getStudentCategory()
    {

        $castes = [
            'general' => 'General',
            'obc' => 'OBC',
            'special' => 'Special',
            'physical challenged' => 'Physical challenged',
        ];

        return $castes;
    }
}


if (!function_exists('getBloodGroups')) {
    function getBloodGroups()
    {

        $bloods = [
            'o+' => 'O+ve',
            'o-' => 'O+ve',
            'a+' => 'A+ve',
            'b+' => 'B+ve',
            'ab+' => 'AB+ve',
            'ab-' => 'AB-ve',
        ];

        return $bloods;
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

if (!function_exists('database_formatted_date')) {
    function database_formatted_date($value = null) {
        
        $date = date('Y-m-d', strtotime($value));

        return $date;
    }
}

if (!function_exists('user_formatted_date')) {
    function user_formatted_date($value = null) {
        
        $date = date('d-M, Y', strtotime($value));

        return $date;
    }
}

if (!function_exists('datepicker_formatted_date')) {
    function datepicker_formatted_date($value = null) {
        
        $date = date('d-m-Y', strtotime($value));

        return $date;
    }
}