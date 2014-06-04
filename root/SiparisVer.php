<?php
/**
 * Bu sayfa bizim �teden beri kulland���m�z sipari� ver butonunun alt�nda �al��acak kodu (belki ajax requestidir bu) i�eriyor
 * Ama yeni mimari ile yap�yor i�ini
 */
require_once __DIR__ . '/../classes/AppLoad.php';

use \Hys\Core\FirmaSelection as FirmaSec;
use \Controller\Tedarik\Siparis as SiparisVer;



    $firmasip = FirmaSec::sec('Siparis');

    var_dump($firmasip);

    $siparis = new SiparisVer($firmasip);
    $siparis->gonder($firmasip);
