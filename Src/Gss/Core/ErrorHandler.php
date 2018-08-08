<?php

namespace Gss\Core;

class ErrorHandler
{
    public function register()
    {
        set_error_handler([$this, 'errorHandler']);
        register_shutdown_function([$this, 'errorHandlerFatal']);
        set_exception_handler([$this, 'errorHandlerException']);
    }

    public function errorHandler($errNo, $errStr, $errFile, $errLine)
    {
        $this->showError($errNo, $errStr, $errFile, $errLine);
        return true;
    }

    public function errorHandlerFatal()
    {
        $error = error_get_last();
        if ($error['type'] == (E_ERROR || E_PARSE || E_COMPILE_ERROR || E_CORE_ERROR)) {
            ob_get_clean();
            $this->showError($error['type'], $error['message'], $error['file'], $error['line']);
        }

    }

    public function errorHandlerException(\Exception $e)
    {
        $this->showError($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
        return true;
    }

    protected function showError($errNo, $errStr, $errFile, $errLine, $status = 500)
    {
        header("HTTP/1.1 {$status}");
        echo 'Номер ошибки: '.$errNo.'<br>';
        echo 'Сообщение: '.$errStr.'<br>';
        echo 'Файл: '.$errFile.'<br>';
        echo 'Строка: '.$errLine.'<br>';
    }
}