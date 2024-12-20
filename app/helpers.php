<?php

use App\Models\head;
use App\Models\about;
use App\Models\skills;
use App\Models\contact;
use App\Models\section;
use App\Models\portofolio;

function get_section_value($key){
    $data = section::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'empty';
    }
}

function get_section(){
    $data = section::all();
    return $data;
}

function get_about(){
    $data = about::all();
    return $data;
}

function get_portofolio(){
    $data = portofolio::all();
    return $data;
}

function get_skills(){
    $data = skills::all();
    return $data;
}

function get_head(){
    $data = head::all();
    return $data;
}