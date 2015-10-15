<?php

namespace phpninjas\JSON;

class JSON {

    const TYPE_ARRAY = 0;
    const TYPE_OBJECT = 1;

    /**
     * @param $value
     * @param int $options
     * @param int $depth
     * @return string
     */
    static public function encode($value, $options = 0, $depth = 512){
        $encoder = new Encoder($options, $depth);
        return $encoder->encode($value);
    }

    /**
     * @param $value
     * @param int $type
     * @return mixed
     * @throws JsonDecodingException
     */
    static public function decode($value, $type = self::TYPE_OBJECT){
        $decoder = new Decoder($type);
        return $decoder->decode($value);
    }
}