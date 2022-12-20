<?php

declare(strict_types=1);

namespace Tests\Support\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use CodeIgniter\CodeIgniter;
use RuntimeException;

class AppInfo extends BaseCommand
{
    protected $group       = 'demo';
    protected $name        = 'app:info';
    protected $description = 'Displays basic application information.';

    public function run(array $params): void
    {
        CLI::write('CI Version: ' . CLI::color(CodeIgniter::CI_VERSION, 'red'));
    }

    public function bomb(): void
    {
        try {
            CLI::color('test', 'white', 'Background');
        } catch (RuntimeException $oops) {
            $this->showError($oops);
        }
    }

    public function helpme(): void
    {
        $this->call('help');
    }
}
