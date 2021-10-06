<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\Translation\TranslatorInterface;

class EnablingService {

    private RelatingService $relatingService;
    private TranslatorInterface $translator;
    private RequestStack $requestStack;

    public function __construct(RelatingService $relatingService, TranslatorInterface $translator, RequestStack $requestStack) {
        $this->relatingService = $relatingService;
        $this->translator = $translator;
        $this->requestStack = $requestStack;
    }

    public function isEnabled(): bool {
        $request = $this->requestStack->getCurrentRequest();
        $session = $this->requestStack->getSession();
        $phrase = $this->relatingService->getMeSomething();
        $translatedPhrase = $this->translator->trans($phrase);
        return $request->getLocale() === 'en' && $phrase === $translatedPhrase && $session->get('somethingIsSomething') === $phrase;
    }
    public function getMePhrase(){
        return $this->relatingService->getMeSomething();
    }
}
