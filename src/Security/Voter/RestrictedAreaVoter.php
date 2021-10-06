<?php

namespace App\Security\Voter;

use App\Entity\SubEntity;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class RestrictedAreaVoter extends Voter
{
    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, ['SUB_ENTITY_VIEW', 'SUB_ENTITY_EDIT', 'SUB_ENTITY_DELETE'])
            && $subject instanceof SubEntity;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (!$user instanceof UserInterface) {
            return false;
        }
        /** @var SubEntity $SubEntityInstance */
        $SubEntityInstance = $subject;
        $id = $SubEntityInstance->getId();
        switch ($attribute) {
            case 'SUB_ENTITY_EDIT':
                $allowedIDs = [1,2,3,4,5]; //usually it comes from checking that the user is owner of the entity instance
                return in_array($id,$allowedIDs);
            case 'SUB_ENTITY_DELETE':
                $allowedIDs = [1,2]; //usually it comes from checking that the user has rights to delete the entity instance
                return in_array($id,$allowedIDs);
            case 'SUB_ENTITY_VIEW':
                $text1 = $SubEntityInstance->getDoctrineStringPhpStringFormText1();
                return str_contains($text1,'you can see it :)');
        }
        return false;
    }
}
