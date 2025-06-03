<?php

namespace Database\Factories;

use App\Appliances\Toaster;
use App\Appliances\ToasterDeluxe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ToasterFactory extends Factory
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

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
