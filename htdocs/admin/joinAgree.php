<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, assets/img/join01@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="join__inner">
            <h2>이용약관</h2>
            <div class="index">
                <ul>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__agree">
                <div class="join__term">
                    <span>
                        제 1 조 (목적) 본 약관은 서비스 이용자가 회사가 제공하는 인터넷 서비스(이하 "서비스"라 함)를 이용함에 있어 회사와 이용자 간의 권리, 의무 및 책임사항을 규정함을 목적으로 합니다.<br><br>
                        제 2 조 (용어의 정의)<br>
                        1. "서비스"라 함은 회사가 제공하는 모든 인터넷 서비스를 의미합니다.<br>
                        2. "이용자"라 함은 서비스를 이용하는 개인 또는 법인을 말합니다.<br>
                        3. "회원"이라 함은 서비스에 회원가입을 하여 회사가 제공하는 서비스를 이용하는 개인 또는 법인을 말합니다.<br>
                        4. "아이디(ID)"라 함은 회원 식별과 회원의 서비스 이용을 위하여 회원이 정하고 회사가 승인한 문자 또는 숫자의 조합을 의미합니다.<br>
                        5. "비밀번호"라 함은 회원이 부여 받은 아이디와 일치된 회원임을 확인하고 회원의 권익 보호를 위해 회원이 정한 문자 또는 숫자의 조합을 의미합니다.<br><br>
                        제 3 조 (약관의 게시 및 변경)<br>
                        1. 회사는 이 약관의 내용을 서비스 화면에 게시합니다.<br>
                        2. 회사는 필요하면 약관을 변경할 수 있으며, 변경된 약관은 서비스 초기 화면에 게시함으로써 효력이 발생됩니다.<br>
                        3. 회원은 약관의 변경사항에 대해 동의하지 않을 수 있으며, 동의하지 않을 경우 회원 탈퇴를 요청할 수 있습니다.<br><br>
                        제 4 조 (이용계약의 성립)<br>
                        서비스 이용계약은 이용자가 약관의 내용에 대해 동의하고 회원가입 신청을 하면 회사가 승낙함으로써 성립합니다.<br>
                        회사는 이용자의 신청에 대해 회원가입을 승낙함을 원칙으로 하나, 필요한 경우 승낙을 유보할 수 있습니다.<br><br>
                        제 5 조 (서비스 이용 신청)<br>
                        이용자는 회사가 정한 가입 양식에 따라 회원 정보를 기입한 후 회원가입 신청을 합니다.<br>
                        회사는 이용자가 회원가입 신청서의 모든 내용을 성실히 기재하고, 이 약관에 동의한 경우에만 회원가입을 승낙합니다.<br>
                        회사는 회원의 가입 신청에 대해 승낙함
                    </span>
                </div>
                <div class="term__agree">
                    <input type="checkbox" name="term__agree" value="agree" class="agreeCheck"> 이용약관에 동의합니다.
                </div>
                <div class="join__term">
                    <span>
                        [수집하는 개인정보 항목 및 수집 방법]<br><br>
                        수집항목: 성명, 생년월일, 연락처, 이메일 주소, 주소, 로그 데이터 등<br>
                        수집방법: 홈페이지, 모바일 앱, 이메일, 서면양식, 팩스, 전화 등<br>
                        [개인정보 수집 및 이용 목적]<br>
                        회원 가입 및 관리, 서비스 제공 및 이행, 계약 이행 및 위반사항 대응, 요금 정산 및 청구, 민원처리, 고객 상담 및 서비스 개선 등<br><br>
                        [개인정보 보유 및 이용 기간]<br>
                        개인정보는 수집 및 이용 목적이 달성된 후 즉시 파기됩니다. 단, 관련 법령에 따라 보존할 필요가 있는 경우 해당 법령에서 규정한 기간 동안 보관됩니다.<br><br>
                        [개인정보 제공 및 공유]<br>
                        회사는 이용자의 개인정보를 "2. 개인정보 수집 및 이용 목적"에서 명시한 범위 내에서 사용하며, 이용자의 사전 동의 없이는 해당 범위를 초과하여 이용하거나 타인 또는 타기업/기관에 제공하지 않습니다. 단, 이용자의 동의가 있거나 법령에서 정한 경우에는 예외로 합니다.<br><br>
                        [개인정보 취급 위탁]<br>
                        회사는 이용자의 개인정보를 외부 업체에 위탁하여 처리할 수 있습니다. 이 경우 위탁계약 등을 통하여 개인정보보호 관련 법령을 준수하도록 하겠습니다.<br><br>
                        [이용자의 권리와 그 행사방법]<br>
                        이용자는 언제든지 자신의 개인정보를 조회하거나 수정할 수 있습니다. 또한 개인정보의 오류에 대한 정정을 요청할 수 있으며, 개인정보 삭제를 요청할 수 있습니다.<br>
                        이용자는 개인정보 처리에 대한 동의 철회를 할 수 있으며, 동의 철회를 요청하는 경우 즉시 회사에서 처리하겠습니다.<br><br>
                        [개인정보 관리 책임자]<br>
                        회사는 이용자들의 개인정보를 보호하고 개인정보와 관련한 불만 처리 등을 위해 아래와 같이 개인정보 관리책임자를 지정하고 있습니다.<br>
                        이름: ○○○<br>
                        이메일: ○○○
                    </span>
                </div>
                <div class="term__agree">
                    <input type="checkbox" name="term__agree" value="agree" class="agreeCheck"> 이용약관에 동의합니다.
                </div>
                <div class="button">
                    <p style="color:red" class="agreeMsg"></p>
                    <a href="joinSave.php" class="agreeBtn btnStyle">동의합니다</a>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script>
        const agreeBtn = document.querySelector(".agreeBtn");
        const agreeCheck = document.querySelectorAll(".agreeCheck");
        const agreeMsg = document.querySelector(".agreeMsg");

        agreeBtn.addEventListener("click", (e) => {

            agreeCheck.forEach((check) => {
                if(check.checked == false){
                    agreeMsg.innerHTML = "체크박스에 체크해주세요."

                    e.preventDefault();
                }
            });
        });
    </script>
    
</body>
</html>