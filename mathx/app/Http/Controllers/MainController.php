<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function generateExercises(Request $request): View
    {
        // form validation
        $request->validate([
            'check_sum' => 'required_without_all:check_subtraction,check_multiplication,check_division',
            'check_subtraction' => 'required_without_all:check_sum,check_multiplication,check_division',
            'check_multiplication' => 'required_without_all:check_subtraction,check_sum,check_division',
            'check_division' => 'required_without_all:check_subtraction,check_multiplication,check_sum',

            'number_one' => 'required|integer|min:0|max:999|lt:number_two',
            'number_two' => 'required|integer|min:0|max:999',

            'number_exercises' => 'required|integer|min:5|max:50'
        ]);

        // operations
        $operations = [];

        if ($request->check_sum) { $operations[] = 'sum'; }
        if ($request->check_subtraction) { $operations[] = 'subtraction'; }
        if ($request->check_multiplication) { $operations[] = 'multiplication'; }
        if ($request->check_division) { $operations[] = 'division'; }

        // get numbers (min and max)
        $min = $request->number_one;
        $max = $request->number_two;

        // get number of exercises
        $numberExercises = $request->number_exercises;

        // generate exercises
        $exercises  = [];
        for ($i = 1; $i <= $numberExercises; $i++) {
            $operation = $operations[array_rand($operations)];
            $number1 = rand($min, $max);
            $number2 = rand($min, $max);

            $exercise = '';
            $sollution = '';

            switch ($operation) {
                case 'sum':
                    $exercise = "$number1 + $number2 =";
                    $sollution = $number1 + $number2;
                    break;
                case 'subtraction':
                    $exercise = "$number1 - $number2 =";
                    $sollution = $number1 - $number2;
                    break;
                case 'multiplication':
                    $exercise = "$number1 X $number2 =";
                    $sollution = $number1 * $number2;
                    break;
                case 'division':

                    // avoid division by zero
                    if ($number2 == 0) { $number2 = 1; }

                    $exercise = "$number1 : $number2 =";
                    $sollution = $number1 / $number2;
                    break;
            }

            // if sollution is a float number, rounded it to 2 decimal places
            if (is_float($sollution)) { $sollution = round($sollution, 2); }

            $exercises[] = [
                'operation' => $operation,
                'exercises_number' => $i,
                'exercise' => $exercise,
                'sollution' => "$exercise $sollution"
            ];
        }

        return view('operations', ['exercises' => $exercises]);
    }

    public function printExercises(): void
    {
        echo "Imprimir exercícios no navegador";
    }

    public function exportExercises(): void
    {
        echo "Exportar exercícios para um arquivo de texto";
    }
}
