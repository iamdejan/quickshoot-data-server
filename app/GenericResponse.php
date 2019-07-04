<?php

namespace App;

use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Database\Eloquent\JsonEncodingException;

class GenericResponse implements \JsonSerializable, Jsonable
{
    private $success;
    private $result;
    private $message;

    /**
     * GenericResponse constructor.
     */
    public function __construct()
    {
        $this->message = "";
    }
    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result): void
    {
        $this->result = $result;
    }

    public function jsonSerialize()
    {
        return [
            "success" => $this->success,
            "result" => $this->result,
            "message" => $this->message
        ];
    }

    public function toJson($options = 0)
    {
        $json = json_encode($this->jsonSerialize(), $options);

        if (JSON_ERROR_NONE !== json_last_error()) {
            throw JsonEncodingException::forModel($this, json_last_error_msg());
        }

        return $json;
    }
}
