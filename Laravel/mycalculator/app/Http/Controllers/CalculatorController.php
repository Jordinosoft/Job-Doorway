<?php

namespace App\Http\Controllers\CalculatorController;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('firstnumber');
        $num2 = $request->input('secondnumber');
        $operator = $request->input('operator');

        $result = 0;

        switch ($operator) {
            case '+':
                $result = $firstnumber + $secondnumber;
                break;
            case '-':
                $result = $firstnumber - $secondnumber;
                break;
            case '*':
                $result = $firstnumber * $secondnumber;
                break;
            case '/':
                $result = $firstnumber / $secondnumber;
                break;
        }

        return view('calculator', ['result' => $result]);
    }
}
