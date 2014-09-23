<?php

/**
 * This file is part of the Morocron project.
 *
 * (c) Benoit Maziere <benoit.maziere@gmail.com>
 * (c) Abdoul N'Diaye <abdoul.nd@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Morocron\Application;

use Symfony\Component\Console\Application as AbstractApplication;
use Morocron\Command\SortCronCommand;
use Morocron\Command\ValidateCommand;

/**
 * Class Morocron Application
 * @package Morocron\Application
 * @author Abdoul N'Diaye <abdoul.nd@gmail.com>
 */
class MorocronApplication extends AbstractApplication
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('morocron');

        $this->add(new SortCronCommand());
        $this->add(new ValidateCommand());
    }
}