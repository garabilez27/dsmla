<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function successMessage($message = 'Record has been added successfully.')
    {
        return [
            'class' => 'alert-success',
            'icon' => 'fa-ban',
            'content' => $message,
            'status' => 'Success'
        ];
    }

    protected function warningMessage($message = 'Something went wrong. Please try again.')
    {
        return [
            'class' => 'alert-warning',
            'icon' => 'fa-exclamation-triangle',
            'content' => $message,
            'status' => 'Invalid'
        ];
    }

    protected function infoMessage($message = 'Please fill all the required fields.')
    {
        return [
            'class' => 'alert-info',
            'icon' => 'fa-circle-info',
            'content' => $message,
            'status' => 'Infomation'
        ];
    }

    protected function dangerMessage($message = 'Illegal activity detected.')
    {
        return [
            'class' => 'alert-danger',
            'icon' => 'fa-ban',
            'content' => $message,
            'status' => 'Unauthorize'
        ];
    }
}
