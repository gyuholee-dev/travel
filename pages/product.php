<?php

// 리퀘스트
$itemCode = $_REQUEST['itemcode'] ?? '';



// 랜더링 --------------------------------------------------
$content_data = [];
$content .= renderElement(HTML.'product.html', $content_data);