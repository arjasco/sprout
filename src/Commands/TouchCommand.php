<?php

namespace Arjasco\Sprout\Commands;

class TouchCommand implements Command
{
    /**
     * Job id.
     *
     * @var int
     */
    protected $id;

    /**
     * Create a new "touch" command.
     *
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @inheritdoc
     */
    public function getLine()
    {
        return 'touch ' . $this->id;
    }

    /**
     * @inheritdoc
     */
    public function hasAdditionalData()
    {
        return false;
    }
}
