<?php
namespace Firma\Ak\Tedarik;

use Hys\Tedarik\Siparis as HysSiparis;

/**
 * Ak firmasının özelleştirilmiş Siparis classı
 */
class Siparis extends HysSiparis
{
    public function ver()
    {
        echo "ak firmasından siparis geçiliyor...";
    }
}
