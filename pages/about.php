<?php // about.php
$INFO['subtitle'] = '회사소개';

$siteTitle = $INFO['title'];
$siteDesc = $INFO['description'];

// 랜더링 --------------------------------------------------
$content_data = [
  'siteTitle' => $siteTitle,
  'siteDesc' => $siteDesc,
];
$content .= renderElement(HTML.'about.html', $content_data);