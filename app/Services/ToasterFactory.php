<?php

namespace App\Services;

use App\Appliances\Toaster;
use App\Appliances\ToasterDeluxe;

/**
 * Class ToasterFactory.
 *
 * @package App\Services
 */
class ToasterFactory
{
    /**
     * ToasterFactory constructor.
     *
     * @param Toaster $toaster
     * @param ToasterDeluxe $toasterDeluxe
     */
    public function __construct(
        private Toaster $toaster,
        private ToasterDeluxe $toasterDeluxe
    ) { }

    /**
     * Define Toaster's default state.
     *
     * @return Toaster
     */
    public function makeToast(): Toaster
    {
        $toaster = $this->toaster;
        $toaster->addSlice('Single');
        $toaster->addSlice('Double');
        $toaster->addSlice('Triple');
        return $toaster;
    }

    /**
     * Define ToasterDeluxe's default state.
     *
     * @return ToasterDeluxe
     */
    public function makeDeluxe(): ToasterDeluxe
    {
        $toaster = $this->toasterDeluxe;
        $toaster->addSlice('Cinnamon');
        $toaster->addSlice('Blueberry');
        $toaster->addSlice('Plain');
        return $toaster;
    }
}
