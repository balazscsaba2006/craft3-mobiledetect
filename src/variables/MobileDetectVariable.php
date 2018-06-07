<?php

namespace humandirect\mobiledetect\variables;

/**
 * MobileDetectVariable class
 *
 * @author    Balazs Csaba <csaba.balazs@humandirect.eu>
 * @copyright 2018 Human Direct
 */
class MobileDetectVariable
{
    /**
     * @var \Mobile_Detect|null
     */
    private $mobileDetect;

    /**
     * @return string
     */
    public function type(): string
    {
        $detect = $this->getInstance();

        if (!$detect->isMobile()) {
            return 'none';
        }

        return $detect->isTablet() ? 'tablet' : 'phone';
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function is(string $key): bool
    {
        $detect = $this->getInstance();

        return (bool)$detect->is($key);

    }

    /**
     * @return bool
     */
    public function isTablet(): bool
    {
        $detect = $this->getInstance();

        return (bool)$detect->isTablet();

    }

    /**
     * @return bool
     */
    public function isMobile(): bool
    {
        $detect = $this->getInstance();

        return (bool)$detect->isMobile();

    }

    /**
     * @return bool
     */
    public function isiOS(): bool
    {
        $detect = $this->getInstance();

        return (bool)$detect->is('iOS');

    }

    /**
     * @return bool
     */
    public function isAndroidOS(): bool
    {
        $detect = $this->getInstance();

        return (bool)$detect->is('AndroidOS');
    }

    /**
     * @return string
     */
    public function version(): string
    {
        $detect = $this->getInstance();

        return $detect::getScriptVersion();
    }

    /**
     * @return \Mobile_Detect
     */
    private function getInstance(): \Mobile_Detect
    {
        if (null === $this->mobileDetect) {
            $this->mobileDetect = new \Mobile_Detect;
        }

        return $this->mobileDetect;
    }
}
