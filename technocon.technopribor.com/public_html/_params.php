<?php

$site = 'http://technocon.technopribor.com/';

$from_name = 'Лендинг Консалтинг';
$from = 'technocon-landing@technopribor.com';
$to = array(
	'conveyor@xn--90ahjtfceidl8a.xn--p1ai',
    'pv.danilov.dev@yandex.ru',
   // 'vn.gerasimov@citrus-plus.ru'
);

$metrika_id = '35773765';
$metrika_code = '<script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter' . $metrika_id . ' = new Ya.Metrika({id:' . $metrika_id . ', webvisor:true, clickmap:true, trackLinks:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/' . $metrika_id . '" style="position:absolute; left:-9999px;" alt="" /></div></noscript>';
// $metrika_form_submit_target = "yaCounter" . $metrika_id . ".reachGoal('FORM_SUBMIT'); return true;";


$google_analitic_key = 'UA-82284056-1';

$google_analitic = "<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', '$google_analitic_key', 'auto');
ga('send', 'pageview');
</script>";
?>