<?php
namespace Firma\Ak\Tedarik;

use Hys\Tedarik\Siparis as HysSiparis;

/**
 * Ak firmas�n�n �zelle�tirilmi� Siparis class�
 */
class Siparis extends HysSiparis
{
    public function ver()
    {
        echo "ak firmas�ndan siparis ge�iliyor...";
    }
}
