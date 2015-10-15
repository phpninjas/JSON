<?php

use phpninjas\JSON\JSON;

class JSONTest extends PHPUnit_Framework_TestCase {

    public function testBadJsonDecoding(){

        $this->setExpectedException("phpninjas\\JSON\\JsonDecodingException");

        $notJson = "{notkey, key:1}";

        JSON::decode($notJson);

    }

    public function testBadJsonEncoding(){

        $this->setExpectedException("phpninjas\\JSON\\JsonEncodingException");

        // json_encode doesn't like resources (understandably)
        $badJson = fopen("/tmp/somefile","w+");

        JSON::encode($badJson);

    }


    public function testSimpleGoodJsonEncoding(){

        $str = JSON::encode(["key"=>"value"]);

        $this->assertThat($str, $this->equalTo('{"key":"value"}'));
    }

    public function testSimpleGoodDecoding(){

        $str = '{"key":"value"}';
        $expected = new stdClass();
        $expected->key = "value";

        $decoded = JSON::decode($str);

        $this->assertThat($decoded, $this->equalTo($expected));

    }


}