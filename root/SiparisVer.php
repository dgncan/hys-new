<?php
/**
 * Bu sayfa bizim öteden beri kullandýðýmýz sipariþ ver butonunun altýnda çalýþacak kodu (belki ajax requestidir bu) içeriyor
 * Ama yeni mimari ile yapýyor iþini
 */
require_once __DIR__ . '/../classes/AppLoad.php';

use \Hys\Core\FirmaSelection as FirmaSec;
use \Controller\Tedarik\Siparis as SiparisVer;



    $firmasip = FirmaSec::sec('Siparis');

    var_dump($firmasip);

    $siparis = new SiparisVer($firmasip);
    $siparis->gonder($firmasip);
