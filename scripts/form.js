// form.js 폼 처리 스크립트

// Promise XMLHttpRequest
async function requestData(file, param = null) {
  let requestUrl = file;
  if (param !== null) {
    let i = 0;
    for (let key in param) {
      if (i === 0) {
        requestUrl += '?' + key + '=' + param[key];
      } else {
        requestUrl += '&' + key + '=' + param[key];
      }
      i++;
    }
  }

  try {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', requestUrl);
    xhr.send();
    const request = await new Promise((resolve, reject) => {
      xhr.onload = function () {
        if (xhr.status == 200) {
          resolve(xhr.response);
        } else {
          reject(Error(xhr.statusText));
        }
      };
    });
    return request;
  }
  catch (error) {
    throw Error(error);
  }
}

// 회원가입 ------------------------------------------------

// 아이디 체크
async function checkId() {
  if (register.userid.value=='') {
    alert('아이디를 입력하세요');
    register.userid.focus();
    return false;
  }

  let check = await requestData(
    'xhr.php', {
      call: 'checkId', 
      userid: register.userid.value
    }
  );
  
  if (check == 0) {
    alert('사용가능한 아이디입니다.');
    register.password.focus();
    register.idcheked.value=true;
  } else {
    alert('이미 사용중인 아이디입니다.');
    register.userid.value = '';
    register.userid.focus();
    return false;
  }
}

// 아이디 체크 리셋
function resetCheck() {
  register.idcheked.value=false;
}

// 회원가입 폼 체크
function sendRegister() {
  if (register.idcheked.value !== 'true') {
    alert('아이디 중복체크를 해주세요.');
    register.userid.focus();
    return false;
  }
  if (register.password.value !== register.password_check.value) {
    alert('비밀번호를 다시 확인해 주세요.');
    register.password.value = '';
    register.password_check.value = '';
    register.password.focus();
    return false;
  }
  if (register.agree.checked !== true) {
    alert('이용약관에 동의해 주세요.');
    return false;
  }
  
  // document.register.submit();
  register.confirm.click();
}


// 검색창 ------------------------------------------------

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