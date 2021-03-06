<?php

namespace PragmaRX\TestsWatcher\Package\Events;

use Illuminate\Contracts\Queue\ShouldQueue;

class UserNotifiedOfFailure implements ShouldQueue
{
    /**
     * @var
     */
    public $tests;

    /**
     * Create a new event instance.
     */
    public function __construct($tests)
    {
        $this->tests = $tests;
    }
}
