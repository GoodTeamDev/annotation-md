<?php

namespace nastradamus39\slate\annotations\Action;

/**
 * @Annotation
 * @Target("ALL")
 */
class Sample
{
    /**
     * @Enum({"javascript", "php", "shell", "ruby", "python"})
     * @Required
     */
    public $lang;

    /**
     * @var string
     * @Required
     */
    public $code;
}

