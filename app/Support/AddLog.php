<?php

namespace App\Support;
use App\LogAdmins;

class AddLog
{   
    public function addLog(string $type , string $message , string $ip , string $id)
    {
        $log = new LogAdmins;
        $log->message = $message;
        $log->type = $type;
        $log->ip = $ip;
        $log->colaborador = $id;
        $log->save();
    }
}