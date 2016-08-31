<?php

$site = 'consulting.technopribor.com';

$from_name = 'Лендинг Консалтинг';
$from_email = 'consulting-landing@technopribor.com';
$to = array(
    'pv.danilov.dev@yandex.ru',
    'market@technopribor.com'
);

$metrika_id = '35768150';
$metrika_code = '<script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter' . $metrika_id . ' = new Ya.Metrika({id:' . $metrika_id . ', webvisor:false, clickmap:false, trackLinks:false}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/' . $metrika_id . '" style="position:absolute; left:-9999px;" alt="" /></div></noscript>';
// $metrika_form_submit_target = "yaCounter" . $metrika_id . ".reachGoal('FORM_SUBMIT'); return true;";

?>