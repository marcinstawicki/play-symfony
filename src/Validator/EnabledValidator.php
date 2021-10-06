<?php

namespace App\Validator;

use App\Service\EnablingService;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class EnabledValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /* @var $constraint \App\Validator\Enabled */

        if (null === $value || '' === $value) {
            return;
        }
        if (!($value instanceof EnablingService)) {
            throw new UnexpectedValueException($value, 'EnablingService');
        }

        if (!$value->isEnabled()) {
            $phrase = $value->getMePhrase();
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $phrase)
                ->addViolation();
        }
    }
}
