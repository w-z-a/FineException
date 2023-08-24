<?php

namespace wza\FineException;

use Throwable;

class ExceptionArguments
{
    /** @var ?string  */
    private $_message;

    /** @var ?int  */
    private $_code;

    /** @var ?Throwable  */
    private $_previous;


    /**
     * @param ?string    $message
     * @param ?int       $code
     * @param ?Throwable $previous
     */
    public function __construct(
        ?string    $message = null,
        ?int       $code = null,
        ?Throwable $previous = null
    )
    {
        $this->_message = $message;
        $this->_code = $code;
        $this->_previous = $previous;
    }


    /**
     * @param string $text
     *
     * @return $this
     */
    public function setMessage( string $text ): self
    {
        $this->_message = $text;
        return $this;
    }


    /**
     * @param int $code
     *
     * @return $this
     */
    public function setCode( int $code ): self
    {
        $this->_code = $code;
        return $this;
    }


    /**
     * @param Throwable $previous
     *
     * @return $this
     */
    public function setPrevious( Throwable $previous ): self
    {
        $this->_previous = $previous;
        return $this;
    }


    /**
     * @return ?string
     */
    public function getMessage(): ?string
    {
        return $this->_message;
    }


    /**
     * @return ?int
     */
    public function getCode(): ?int
    {
        return $this->_code;
    }


    /**
     * @return ?Throwable
     */
    public function getPrevious(): ?Throwable
    {
        return $this->_previous;
    }


    /**
     * Factory method
     *
     * @param ?string    $message
     * @param ?int       $code
     * @param ?Throwable $previous
     *
     * @return ExceptionArguments
     */
    public static function create(
        ?string    $message = null,
        ?int       $code = null,
        ?Throwable $previous = null
    ): self
    {
        return new self( $message, $code, $previous );
    }
}