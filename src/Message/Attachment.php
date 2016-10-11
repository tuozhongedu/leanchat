<?php

namespace Jiemo\LeanChat\Message;

class Attachment
{

    const COLOR_WARNING = 'warning';
    const COLOR_INFO = 'info';
    const COLOR_PRIMARY = 'primary';
    const COLOR_ERROR = 'error';
    const COLOR_MUTED = 'muted';
    const COLOR_SUCCESS = 'success';

    public $title;

    public $description;

    public $url;

    public $color;

    public function toArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'color' => $this->color,
        ];
    }
}
