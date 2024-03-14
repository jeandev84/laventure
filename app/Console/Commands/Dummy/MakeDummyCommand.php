<?php
declare(strict_types=1);

namespace App\Console\Commands\Dummy;

use App\Generator\Dummy\DummyClassGenerator;
use Laventure\Component\Console\Command\Command;
use Laventure\Component\Console\Input\InputInterface;
use Laventure\Component\Console\Output\OutputInterface;


/**
 * MakeDummyCommand
 *
 * @package App\Console\Commands
 *
 * <Generated By Laventure 14/03/2024 02:08:20>
*/
class MakeDummyCommand extends Command
{

    /**
     * @var string
    */
    protected $name = 'make:dummy';



    /**
     * @var array
    */
    protected array $description = [
       "make:dummy description ..."
    ];



    public function __construct(protected DummyClassGenerator $dummyClassGenerator)
    {
        parent::__construct($this->name);
    }





    /**
     * @inheritDoc
    */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        // put your logic here
        dump(get_class($this->dummyClassGenerator));

        $output->success("You are ready for execution <make:dummy>");

        return Command::SUCCESS;
    }
}