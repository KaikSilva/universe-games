<?php


namespace App\Support;


class Message
{
    private $text;
    private $type;
    private $icon;

    public function getText()
    {
        return $this->text;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function getType()
    {
        return $this->type;
    }

    public function success(string $message): Message
    {
        $this->type = 'success';
        $this->icon = 'check';
        $this->text = $message;
        return $this;
    }

    public function error(string $message): Message
    {
        $this->type = 'danger';
        $this->icon = 'close';
        $this->text = $message;
        return $this;
    }

    public function render()
    {
        return "<div class=\"alert alert-{$this->getType()}\"> <div class=\"d-flex align-items-center justify-content-start\"> <span class=\"alert-icon\"> <i class=\"anticon anticon-{$this->getIcon()}-o\"></i> </span> <span>{$this->getText()}</span> </div> </div>";
    }
}