<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
use App\prueba;
class XMLController extends Controller
{
    //
    public function vistaXML(){

        return view('vistaXML');
    }

    //xml
    public function XML_Array(){
       $xml = XmlParser::load(storage_path('app/src/registro.xml'));
       $datos = $xml->parse([
        'to' => ['uses' => 'to'],
        'from' => ['uses' => 'from'],
        'heading' => ['uses' => 'heading'],
        'body' => ['uses' => 'body'],
    ]);

   // $datoXML = $datos['to'];
       //dd($datos);
       return view('XML.Lista', compact('datos'));
    }



		public function store(Request $request)
		{
            $xml = XmlParser::load(storage_path('app/src/registro.xml'));
            $datos = $xml->parse([
                'to' => ['uses' => 'to'],
                'from' => ['uses' => 'from'],
                'heading' => ['uses' => 'heading'],
                'body' => ['uses' => 'body'],
            ]);

            $XMLTo = $datos['to'];
            $XMLFrom = $datos['from'];
            $XMLHeading = $datos['heading'];
            $XMLBody = $datos['body'];
			
			$registo = new prueba();
			$registo->to = $XMLTo;
			$registo->from = $XMLFrom;
			$registo->heading = $XMLHeading;
			$registo->body = $XMLBody;

		   // dd($registo);
			$registo->save();
			return view('welcome'); 
		}




}
