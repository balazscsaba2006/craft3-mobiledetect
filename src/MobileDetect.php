<?php

namespace humandirect\mobiledetect;

use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;

use humandirect\mobiledetect\variables\MobileDetectVariable;

use yii\base\Event;

/**
 * MobileDetect class
 *
 * @author    Balazs Csaba <csaba.balazs@humandirect.eu>
 * @copyright 2018 Human Direct
 */
class MobileDetect extends Plugin
{
    /**
     * @var Cookiebot
     */
    public static $plugin;

    /**
     * Initialize plugin.
     */
    public function init(): void
    {
        parent::init();
        self::$plugin = $this;

        Event::on(CraftVariable::class, CraftVariable::EVENT_INIT, function(Event $event) {
            /** @var CraftVariable $variable */
            $variable = $event->sender;
            $variable->set('cookiebot', MobileDetectVariable::class);
        });

        \Craft::info(
            \Craft::t('mobiledetect', '{name} plugin loaded', [
                'name' => $this->name
            ]),
            __METHOD__
        );
    }
}
