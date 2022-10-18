<?php

    $articleText = "Малоподвижный образ жизни, большое количество гастрономических соблазнов, а также пищевого мусора с каждым годом усугубляет ситуацию с лишним весом. Все чаще возникают новые диеты, которые обещают избавить вас от надоедливых килограммов";
    $articleLink = "https://povar.ru/art/dieta_pp_racion_pitaniya_i_meniu_na_nedeliu_dlya_pohudeniya.html";
    
    $articlePreview = mb_substr($articleText, 0, 200) . ' ...';
    $pattern = '/(\S+ \S+ \S+ ...)$/i';
    $replacement = "<a href='$articleLink'>" . '${1}<a>';
    
    $articlePreview =  preg_replace($pattern, $replacement, $articlePreview);

    // Вроде бы ничего не может пойти не тк
