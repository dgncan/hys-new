<?php

namespace Hys\Core;


use Firma\Allianz\Tedarik\Siparis as AllianzSiparis;
use Firma\Ak\Tedarik\Siparis as AkSiparis;
use Firma\Anadolu\Tedarik\Siparis as AnadoluSiparis;


// TODO: Her firmanın istenen classının instanceı alınacak şekilde güncellenmeli

/**
 * Her firmanın istenen classının instanceı alınacak şekilde güncellenmeli
 * Basit örnek olsun diye AllianzSiparis(), AkSiparis() şeklinde yaptım.
 */
class FirmaSelection
{
    private static $aktif ;
    private static $secili;

	public static function sec()
    {
		
		self::$aktif = FindCompanyId::get();

		switch (self::$aktif){
			case 18:
				self::$secili = new AllianzSiparis();
				break;
			case 27:
                self::$secili = new AkSiparis();
				break;
			case 30:
                self::$secili = new AnadoluSiparis();
				break;
        }
		return self::$secili;

	}
}