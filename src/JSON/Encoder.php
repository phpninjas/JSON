<?php

namespace phpninjas\JSON;

class Encoder {
    /**
     * @var int
     */
    private $options;
    /**
     * @var int
     */
    private $depth;

    public function __construct($options = 0, $depth = 512){

        $this->options = $options;
        $this->depth = $depth;
    }

    public function encode($value)
    {
        if(false === ($encoded = json_encode($value, $this->options, $this->depth))){
            throw new JsonEncodingException(json_last_error_msg(), json_last_error());
        }
        return $encoded;
    }
}

