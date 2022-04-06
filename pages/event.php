<?php // about.php
$INFO['subtitle'] = '이벤트';

$siteTitle = $INFO['title'];
$siteDesc = $INFO['description'];

// 랜더링 --------------------------------------------------
$content_data = [
  'siteTitle' => $siteTitle,
  'siteDesc' => $siteDesc,
];
$content .= renderElement(HTML.'event.html', $content_data);