<?php
namespace Firma\Ak\Tedarik;

use Hys\Tedarik\Siparis as HysSiparis;

/**
 * Ak firmasýnýn özelleþtirilmiþ Siparis classý
 */
class Siparis extends HysSiparis
{
    public function ver()
    {
        echo "ak firmasýndan siparis geçiliyor...";
    }
}
