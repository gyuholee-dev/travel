<?php // board.php

// category: notice(공지사항), faq(자주묻는질문), qna(질문과답변), free(자유게시판)
$category = $_REQUEST['category'] ?? 'free';
if ($category != 'notice' && $category != 'faq' && $category != 'qna' && $category != 'free') {
  $category = 'free';
}
switch ($category) {
  case 'notice':
    $boardTitle = '공지사항';
    break;
  case 'faq':
    $boardTitle = '자주묻는질문';
    break;
  case 'qna':
    $boardTitle = '질문과답변';
    break;
  case 'free':
    $boardTitle = '자유게시판';
    break;
}
$INFO['subtitle'] = $boardTitle;

// 랜더링 --------------------------------------------------
$content_data = [
  'boardTitle' => $boardTitle,
  'category' => $category,
];
$content .= renderElement(HTML.'board.html', $content_data);