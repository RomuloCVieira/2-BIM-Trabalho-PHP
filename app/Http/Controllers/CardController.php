<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;


class CardController extends Controller
{
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create('pt_BR');
    }

    public function generateVisaCard() {
        return [
            'tipo' => 'visa',
            'numero' => $this->faker->creditCardNumber('Visa')
        ];
    }

    public function generateDinersCard() {
        return [
            'tipo' => 'diners',
            'numero' => $this->faker->creditCardNumber('Diners')
        ];
    }

    public function generateMasterCard() {
        return [
            'tipo' => 'master',
            'numero' => $this->faker->creditCardNumber('MasterCard')
        ];
    }

    public function generateAmexCard() {
        return [
            'tipo' => 'amex',
            'numero' => $this->faker->creditCardNumber('American Express')
        ];
    }
}
