<?php

namespace SimpleMVC\Utils;

interface ErrorHandler
{
    function handler(\Exception $exception);
}