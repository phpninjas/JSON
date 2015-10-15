<?php

namespace phpninjas\JSON;

class Decoder {

    /**
     * @var int
     */
    private $asType;

    public function __construct($asType = JSON::TYPE_OBJECT){

        $this->asType = $asType;
    }

    public function decode($value){
        $decoded = json_decode($value, $this->asType==JSON::TYPE_ARRAY);
        if($decoded === null){
            throw new JsonDecodingException(json_last_error_msg(), json_last_error());
        }
        return $decoded;
    }
}

