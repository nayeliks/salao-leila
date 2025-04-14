<?php

namespace App\Api\Modules\AppConfig\Translation\Translation;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class TranslationConfig implements EventSubscriberInterface
{
    public function onKernelRequest(RequestEvent $event): void
    {
        $locale = 'pt_BR';
        $request = $event->getRequest();

        foreach ($request->getLanguages() as $language){
            if (str_contains($language, "en")) {
                $locale = "en";
                break;
            }
            if (str_contains($language, "es")) {
                $locale = "es";
                break;
            }
        }

        $request->setLocale($locale);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 20]],
        ];
    }
}