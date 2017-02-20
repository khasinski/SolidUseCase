<?php

namespace KHasinski;

interface Either
{
    public function match($success, $failures = []);
}