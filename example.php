<?php

use wza\FineException\ExceptionArguments;
use wza\FineException\FineException;


/** 1 example */

class Example1Exception extends FineException
{
}

// use
$exampleException = Example1Exception::create();
// or
$exampleException = new Example1Exception();


/** 2 example */

class Example2Exception extends FineException
{
    public const MESSAGE = 'Second Example Exception';
}
// or
class Example2_1Exception extends FineException
{
    public const MESSAGE = 'Second Example Exception';
    public const CODE = 10;
}

// use
$exampleException = new Example2Exception();


/** 3 example */
class Example3Exception extends FineException
{
    public const MESSAGE = 'Third Example Exception';
    public const CODE = 1;

}

// use
try {
    throw new Exception( 'Code execution error' );
} catch ( Exception $exception ) {

    $args = ExceptionArguments::create()->setPrevious( $exception );

    $newException = Example3Exception::create( $args );

    throw new $newException;
}