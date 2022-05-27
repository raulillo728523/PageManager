<?php

function checkAuth(){
    if (Auth::check()) {
        return true;
    }else{
        return false;
    }
}

function rol($rol){

    if(Auth::user()->rol == $rol){
        return true;
    }

    return false;
}