<?php

namespace App\Services;

use Askoldex\Teletant\Bot;
use Askoldex\Teletant\Context;

use Askoldex\Teletant\Exception\TeletantException;

class TelegramBotService
{
    protected Bot $bot;

    public function __construct(Bot $bot)
    {

        $this->bot = $bot;
    }

    public function bootEvents()
    {
        $this->bot->onCommand('start', function (Context $ctx) {
            $ctx->reply('Hello world');
        });
    }

    /**
     * @return void
     * @throws TeletantException
     */
    public function polling() {
        $this->bot->polling();
    }
}
