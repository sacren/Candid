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
     * Define Toaster's default state.
     *
     * @return Toaster
     */
    public function makeToast(): Toaster
    {
        $toaster = new Toaster();
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
        $toaster = new ToasterDeluxe();
        $toaster->addSlice('Cinnamon');
        $toaster->addSlice('Blueberry');
        $toaster->addSlice('Plain');
        return $toaster;
    }
}
