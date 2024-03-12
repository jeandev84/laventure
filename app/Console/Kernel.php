<?php
declare(strict_types=1);

namespace App\Console;

use App\Console\Commands\TestCommand;
use Laventure\Foundation\Console\ConsoleKernel;

/**
 * ConsoleKernel
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Console
 */
class Kernel extends ConsoleKernel
{
     /**
      * @var array
     */
     protected array $commands = [
         TestCommand::class
     ];
}