<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function indexAction()
  {
  	 return view ('index');
  } 

  public function airzoomAction()
  {
  	 return view ('airzoom' ,['airzoom' => (new ArticleController())->show()]);
  } 

   public function akkauntAction()
  {
  	 return view ('akkaunt');
  } 

public function asicsAction()
  {
  	 return view ('asics');
  } 

public function botinkiAction()
  {
  	 return view ('botinki');
  } 

public function canadaAction()
  {
  	 return view ('canada');
  } 

public function hhkurtkaAction()
  {
  	 return view ('hhkurtka');
  } 

public function korzinaAction()
  {
  	 return view ('korzina');
  } 

public function nbAction()
  {
  	 return view ('nb');
  } 

public function nikekurtkaAction()
  {
  	 return view ('nikekurtka');
  } 

public function obuvAction()
  {
  	 return view ('obuv');
  } 

public function odejdaAction()
  {
  	 return view ('odejda');
  } 

public function onasAction()
  {
  	 return view ('onas');
  } 

public function rasprodajaAction()
  {
  	 return view ('rasprodaja');
  } 

public function rednikeAction()
  {
  	 return view ('rednike');
  } 

public function regAction()
  {
  	 return view ('reg');
  } 

public function shapkaAction()
  {
  	 return view ('shapka');
  } 

public function shapka2Action()
  {
  	 return view ('shapka2');
  } 

public function stussykurtkaAction()
  {
  	 return view ('stussykurtka');
  } 

public function uspeshnoAction()
  {
  	 return view ('uspeshno');
  } 

public function vhodAction()
  {
  	 return view ('vhod');
  } 

}
