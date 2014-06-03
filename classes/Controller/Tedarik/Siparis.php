<?php

namespace Controller\Tedarik;

 use Hys\Tedarik\Siparis as HysSiparis;
use Hys\Core\Logla as HysLogla;

/**
 * Sipariş işlmenin ana yönlendirici classı budur. Controller classı denebilir aslında.
 * Çünkü örneğin sipariş gönder işleminden sonra loglama olacaksa burada tetiklenir.
 */
class Siparis
{
	public function gonder(HysSiparis $s)
    {
		$s->ver();
	}
    
    public function siparisLogla(HysLogla $l)
    {
        $l->logat();
    }
}