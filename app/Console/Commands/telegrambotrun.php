<?php

namespace App\Console\Commands;

use App\Services\TelegramBotService;
use Illuminate\Console\Command;

class telegrambotrun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:bot:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Telegram bot runner';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected TelegramBotService $telegramBotService;

    public function __construct(TelegramBotService $telegramBotService)
    {
        $this->telegramBotService = app(TelegramBotService::class);
         parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->telegramBotService->boot();
        $this->comment('telegram bot startedd');
        $this->telegramBotService->polling();
        return  0;
    }
}
