// form.js 폼 처리 스크립트

// 검색창 처리
function sendSearch(limit=2) {
  const form = formSearch;
  const search = form.search.value;
  if (search !== '') {
    if (search.length >= limit) {
      form.submit();
    } else {
      alert('검색어는 '+limit+'글자 이상 입력해주세요.');
    }
  } else {
    return false;
  }
}