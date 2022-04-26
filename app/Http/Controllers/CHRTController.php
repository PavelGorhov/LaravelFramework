<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CHRTController extends Controller
{
    public function OutText() {
        return 'Я ЛЮБЛЮ УЧИТЬСЯ В ЧРТ!!!!!!!!!!!!!!!';
    }
    public function GetText(Request $req) {
        if($req->has('name')){
            $name = $req->input('name');
            return "Меня зовут $name";
        }
    }
    public function GetMoreText(Request $req) {
        if($req->has('name')&&$req->has('eat')){

            $name = $req->input('name');
            $eat = $req->input('eat');
            return "Меня зовут $name и я люблю есть $eat";
        }
    }
    public function SumNum() {
        $num1 = 100;
        $num2 = 300;
        $sum = $num1 + $num2;
        return "Сумма чисел = $sum";
    }
    public function GetSumNum(Request $req) {
        $num = [];
        if($req->has('num1')&&$req->has('num2')){

            $num['num1'] = $req->input('num1');
            $num['num2'] = $req->input('num2');
            $num['sum'] = $num['num1'] + $num['num2'];
            return "Сумма введенных чисел {$num['sum']}";
        }
    }
    public function Hack(Request $req) {

        if($req->has('cipher')){
            $cipher = $req->input('cipher');
            if($cipher == 'keyOneTest'){
                return 'Шифр взломан';
            }else return 'Нет доступа';
        }else return 'Нет доступа';
    }
}
