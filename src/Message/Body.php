<?php

namespace Jiemo\LeanChat\Message;

use Jiemo\LeanChat\Message\Attachment;

class Body
{
    public $title = '';
    public $channel = '';
    public $photoUrl = '';

    public $displayUserName;
    public $displayUserAvatarUrl;

    public $attachments = [];

    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
    }

    public function toArray()
    {
        $body = [
            'text' => $this->title,
            'channel' => $this->channel,
            'photoUrl' => $this->photoUrl,
            'displayUser' => [
                'name' => $this->displayUserName,
                'avatarUrl' => $this->displayUserAvatarUrl,
            ],
        ];

        foreach ($this->attachments as $a) {
            $body['attachments'][] = $a->toArray();
        }
        return $body;
    }

    public function toJson()
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
