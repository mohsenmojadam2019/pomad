<?php


namespace App\DataTransferObject;


class SendSmsDTO
{

    private $receptor;
    private $message;

    /**
     * @return mixed
     */
    public function getReceptor()
    {
        return $this->receptor;
    }

    /**
     * @param mixed $receptor
     * @return SendSmsDTO
     */
    public function setReceptor($receptor)
    {
        $this->receptor = $receptor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return SendSmsDTO
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }


}
