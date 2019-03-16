<?php
$from = $_POST['from'];
$to = $_POST['to'];
$amount = $_POST['amount'];
switch ($from) {
    case 'Meter':
        if($to == 'Meter'){
            $result = $amount;
        } elseif ($to == 'Kilometer') {
            $result = $amount * 0.001;
        } elseif ($to == 'Centimeter') {
            $result = $amount * 100;
        } elseif ($to == 'Millimeter') {
            $result = $amount * 1000;
        }
        break;
    case 'Kilometer':
        if($to == 'Kilometer'){
            $result = $amount;
        } elseif ($to == 'Meter') {
            $result = $amount * 1000;
        } elseif ($to == 'Centimeter') {
            $result = $amount * 100000;
        } elseif ($to == 'Millimeter') {
            $result = $amount * 1000000;
        }
        break;

    case 'Centimeter':
        if($to == 'Centimeter'){
            $result = $amount;
        } elseif ($to == 'Meter') {
            $result = $amount * 0.01;
        } elseif ($to == 'Kilometer') {
            $result = $amount * 0.00001;
        } elseif ($to == 'Millimeter') {
            $result = $amount * 10;
        }
        break;

    case 'Millimeter':
        if($to == 'Millimeter'){
            $result = $amount;
        } elseif ($to == 'Meter') {
            $result = $amount * 0.001;
        } elseif ($to == 'Kilometer') {
            $result = $amount * 0.000001;
        } elseif ($to == 'Centimeter') {
            $result = $amount * 0.1;
        }
        break;

    case 'Celsius':
        if($to == 'Celsius'){
            $result = $amount;
        } elseif ($to == 'Kelvin') {
            $result = $amount + 273;
        } elseif ($to == 'Fahrenheit') {
            $result = $amount * (9/5) + 32;
        }
        break;
    case 'Kelvin':
        if($to == 'Kelvin'){
            $result = $amount;
        } elseif ($to == 'Celsius') {
            $result = $amount - 273;
        } elseif ($to == 'Fahrenheit') {
            $result = ($amount * 1.8) - 459.67;
        }
        break;

    case 'Fahrenheit':
        if($to == 'Fahrenheit'){
            $result = $amount;
        } elseif ($to == 'Celsius') {
            $result = ($amount - 32) * (5/9);
        } elseif ($to == 'Kelvin') {
            $result = ($amount + 459.67)/1.8;
        }
        break;

    case 'Cubic Meter':
        if($to == 'Cubic Meter'){
            $result = $amount;
        } elseif ($to == 'Cubic Kilometer') {
            $result = $amount * 0.000000001;
        } elseif ($to == 'Cubic Centimeter') {
            $result = $amount * 1000000;
        } elseif ($to == 'Cubic Millimeter') {
            $result = $amount * 1000000000;
        }
        break;
    case 'Cubic Kilometer':
        if($to == 'Cubic Kilometer'){
            $result = $amount;
        } elseif ($to == 'Cubic Meter') {
            $result = $amount * 1000000000;
        } elseif ($to == 'Cubic Centimeter') {
            $result = $amount * 1000000000000000;
        } elseif ($to == 'Cubic Millimeter') {
            $result = $amount * 1000000000000000000;
        }
        break;

    case 'Cubic Centimeter':
        if($to == 'Cubic Centimeter'){
            $result = $amount;
        } elseif ($to == 'Cubic Meter') {
            $result = $amount * 0.000001;
        } elseif ($to == 'Cubic Kilometer') {
            $result = $amount * pow(10,-15);
        } elseif ($to == 'Cubic Millimeter') {
            $result = $amount * 1000;
        }
        break;

    case 'Cubic Millimeter':
        if($to == 'Cubic Millimeter'){
            $result = $amount;
        } elseif ($to == 'Cubic Meter') {
            $result = $amount * pow(10,-9);
        } elseif ($to == 'Cubic Kilometer') {
            $result = $amount * pow(10,-18);
        } elseif ($to == 'Cubic Centimeter') {
            $result = $amount * 0.001;
        }
        break;

    case 'Kilogram':
        if($to == 'Kilogram'){
            $result = $amount;
        } elseif ($to == 'Gram') {
            $result = $amount * 1000;
        } elseif ($to == 'Milligram') {
            $result = $amount * 1000000;
        } elseif ($to == 'Pound') {
            $result = $amount * 2.2046244202;
        }
        break;
    case 'Gram':
        if($to == 'Gram'){
            $result = $amount;
        } elseif ($to == 'Kilogram') {
            $result = $amount * 0.001;
        } elseif ($to == 'Milligram') {
            $result = $amount * 1000;
        } elseif ($to == 'Millimeter') {
            $result = $amount * 0.0022046244;
        }
        break;

    case 'Milligram':
        if($to == 'Milligram'){
            $result = $amount;
        } elseif ($to == 'Kilogram') {
            $result = $amount * 0.000001;
        } elseif ($to == 'Gram') {
            $result = $amount * 0.001;
        } elseif ($to == 'Pound') {
            $result = $amount * 0.0000022046;
        }
        break;

    case 'Pound':
        if($to == 'Pound'){
            $result = $amount;
        } elseif ($to == 'Kilogram') {
            $result = $amount * 0.453592;
        } elseif ($to == 'Gram') {
            $result = $amount * 453.592;
        } elseif ($to == 'Milligram') {
            $result = $amount * 453592;
        }
        break;

    case 'Second':
        if($to == 'Second'){
            $result = $amount;
        } elseif ($to == 'Millisecond') {
            $result = $amount * 1000;
        } elseif ($to == 'Hour') {
            $result = $amount * 0.0002777778;
        } elseif ($to == 'Minute') {
            $result = $amount * 0.0166666667;

        } elseif ($to == 'Day') {
            $result = $amount * 0.0000115741;

        } elseif ($to == 'Week') {
            $result = $amount * 0.0000016534;

        } elseif ($to == 'Month') {
            $result = $amount * 3.802570537E-7;

        } elseif ($to == 'Year') {
            $result = $amount * 3.168808781E-8;
        }

        break;
    case 'Millisecond':
        if($to == 'Millisecond'){
            $result = $amount;
        } elseif ($to == 'Second') {
            $result = $amount * 0.001;
        } elseif ($to == 'Hour') {
            $result = $amount * 2.777777777E-7;
        } elseif ($to == 'Minute') {
            $result = $amount * 0.0000166667;

        } elseif ($to == 'Day') {
            $result = $amount * 1.157407407E-8;

        } elseif ($to == 'Week') {
            $result = $amount * 1.653439153E-9;

        } elseif ($to == 'Month') {
            $result = $amount * 3.802570537E-10;

        } elseif ($to == 'Year') {
            $result = $amount * 3.168808781E-11;
        }
        break;

    case 'Hour':
        if($to == 'Hour'){
            $result = $amount;
        } elseif ($to == 'Second') {
            $result = $amount * 3600;
        } elseif ($to == 'Millisecond') {
            $result = $amount * 3600000;
        } elseif ($to == 'Minute') {
            $result = $amount * 60;

        } elseif ($to == 'Day') {
            $result = $amount * 0.0416666667;

        } elseif ($to == 'Week') {
            $result = $amount * 0.005952381;

        } elseif ($to == 'Month') {
            $result = $amount * 0.0013689254;

        } elseif ($to == 'Year') {
            $result = $amount * 0.0001140771;
        }
        break;

    case 'Minute':
        if($to == 'Minute'){
            $result = $amount;
        } elseif ($to == 'Second') {
            $result = $amount * 60;
        } elseif ($to == 'Hour') {
            $result = $amount * 0.0166666667;
        } elseif ($to == 'Millisecond') {
            $result = $amount * 60000;

        } elseif ($to == 'Day') {
            $result = $amount * 0.0006944444;

        } elseif ($to == 'Week') {
            $result = $amount * 0.0000992063;

        } elseif ($to == 'Month') {
            $result = $amount * 0.0000228154;

        } elseif ($to == 'Year') {
            $result = $amount * 0.0000019013;
        }

    case 'Day':
        if($to == 'Day'){
            $result = $amount;
        } elseif ($to == 'Second') {
            $result = $amount * 86400;
        } elseif ($to == 'Hour') {
            $result = $amount * 24;
        } elseif ($to == 'Millisecond') {
            $result = $amount * 86400000;

        } elseif ($to == 'Minute') {
            $result = $amount * 1440;

        } elseif ($to == 'Week') {
            $result = $amount * 0.1428571429;

        } elseif ($to == 'Month') {
            $result = $amount * 0.0328542094;

        } elseif ($to == 'Year') {
            $result = $amount * 0.0027378508;
        }

    case 'Week':
        if($to == 'Week'){
            $result = $amount;
        } elseif ($to == 'Second') {
            $result = $amount * 604800;
        } elseif ($to == 'Hour') {
            $result = $amount * 168;
        } elseif ($to == 'Millisecond') {
            $result = $amount * 604800000;

        } elseif ($to == 'Minute') {
            $result = $amount * 10080;

        } elseif ($to == 'Day') {
            $result = $amount * 7;

        } elseif ($to == 'Month') {
            $result = $amount * 0.2299794661;

        } elseif ($to == 'Year') {
            $result = $amount * 0.0191649555;
        }

    case 'Month':
        if($to == 'Month'){
            $result = $amount;
        } elseif ($to == 'Second') {
            $result = $amount * 2629800;
        } elseif ($to == 'Hour') {
            $result = $amount * 730.5;
        } elseif ($to == 'Millisecond') {
            $result = $amount * 2629800000;

        } elseif ($to == 'Minute') {
            $result = $amount * 43830;

        } elseif ($to == 'Day') {
            $result = $amount * 30.4375;

        } elseif ($to == 'Week') {
            $result = $amount * 4.3482142857;

        } elseif ($to == 'Year') {
            $result = $amount * 0.0833333333;
        }

    case 'Year':
        if($to == 'Year'){
            $result = $amount;
        } elseif ($to == 'Second') {
            $result = $amount * 31557600;
        } elseif ($to == 'Hour') {
            $result = $amount * 8766;
        } elseif ($to == 'Millisecond') {
            $result = $amount * 31557600000;

        } elseif ($to == 'Minute') {
            $result = $amount * 525960;

        } elseif ($to == 'Day') {
            $result = $amount * 365.25;

        } elseif ($to == 'Week') {
            $result = $amount * 52.178571429;

        } elseif ($to == 'Month') {
            $result = $amount * 12;
        }
        break;

    default:

        break;

}
echo $result;
?>