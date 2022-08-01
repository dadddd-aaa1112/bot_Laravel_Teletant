<?php

namespace App\Utilits\TelegramBot;

use Askoldex\Teletant\Context;
use Askoldex\Teletant\States\Scene;

class Scenes
{
    public static function getHelloScene(): Scene {
        $scene = new Scene('hello');
        $scene->onEnter(function (Context $ctx) {
            $ctx->replyHTML('Hello from scene');
        });

        $scene->onLeave(function (Context $ctx) {
            $ctx->replyHTML('By from scene');
        });

        $scene->onMessage('text', function (Context $ctx) {
            $ctx->leave();
        });

        return $scene;
    }

    public static function getAllScenes(): array {
        return [
            self::getHelloScene()
        ];
    }

}
