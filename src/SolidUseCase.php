<?php

namespace KHasinski;

trait SolidUseCase
{
    public function run($params):Either {
        $nextSteps = isset(self::$steps) ? clone self::$steps : [];
        $result = new Success($params);
        while(count($nextSteps) > 0) {
            $step = array_shift($nextSteps);
            if(!method_exists($this, $step)) {
                throw new UnimplementedStep("Unimplemented step '$step()'");
            }
            $result = $this->$step($result->value);
            if(!$result instanceof Either) {
                throw new InvalidStepReturnType("Invalid return type for '$step()'");
            }
            if($result instanceof Fail) {
                return $result;
            }
        }
        return $result;
    }

}