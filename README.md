# Kang sunghun portfolio<br>
https://toxin16.github.io/HTML/ <br>
![2022-07-24 (3)](https://user-images.githubusercontent.com/109052012/180644888-6a0207a0-31c2-42d3-97a4-3b460d6f9454.png)

**Element:**
- (script) google_translate
  - includedLanguages : 'en,ja,es'
- (css) mouse_hover
  - profile_scale
  - button_color

## source code
~~~
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="강성훈 프로필 링크">
    <meta property="og:description" content="간단한 링크 트리 연습">
    <meta property="og:image content" src="judo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kang sunghun portfolio</title>
    <style>
        body {
            background-color: #9894E4;
            background-image: url('https://s3.ap-northeast-2.amazonaws.com/materials.spartacodingclub.kr/free_myprofile/%EB%B6%84%ED%99%8D+%EB%A5%B4%ED%83%84%EC%9D%B4/%EB%B6%84%ED%99%8D%EB%B0%98%EC%A7%9D%EC%9D%B4.png');
        }
        .profile {
            width: 100px;
            height: 100px;
            border-radius: 100%;
            border: 2px solid white;
            background-image: url('judo.jpg');
            background-position: center;
            background-size: cover;
        }
        .profile:hover {
            transform: scale(1.5);
        }
        .main{
            margin-top: 20px;
            color:white;
            font-size: 20px;
        }
        .sub{
            color: white;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .wrap{
            width: 300px;
            margin: 30px auto 0px auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .wrap > a{
            width:300px;
            height: 50px;
            background-color: white;
            border-radius: 8px;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;

            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color:#44398a;
            text-decoration: none;
            box-shadow: 4px 3px 5px 0px black;
        }
        .wrap > a:hover {
            background-color: #f2f2f2;
        }
        .button > a:hover {
            background-color: #f2f2f2;
        }
        .purple {
            width: 100%;
            height: 95px;
            background-color: #EBEAFA;
            position : absolute;
            bottom : 0;
        }
    </style>

<div id="google_translate_element"></div>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
    /*includedLanguages : 'en,ja,es' 추가 == 콤보박스에 세개만 지정*/
    function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'ko',includedLanguages : 'ko,en,ja,es', autoDisplay: false}, 'google_translate_element');}
</script>
</head>
<body>
    <div class="wrap">
        <div class="profile"></div>
        <h1 class="main">Kang sunghun</h1>
        <h1 class="main">カン ソンフン</h1>
        
        <p class="sub">立派な開発者</p>
        <a class="button" href="https://www.instagram.com/kang99373/">インスタ·プロフィール</a>
        <a class="button" href="https://github.com/Toxin16">ギッホブ(github)</a>
        <a class="button" href="https://kscms.ks.ac.kr/kor/Main.do">慶星大學校</a>
    </div>
    <div class="purple"></div>
</body>
</html>
~~~

## Reference
스파르타 코딩클럽<br>
https://spartacodingclub.kr/?utm_source=google&utm_medium=sa_paid&utm_campaign=%EC%98%A8%EB%9D%BC%EC%9D%B8_low_%EA%B5%AC%EB%A7%A4_brand&utm_content=%EB%B8%8C%EB%9E%9C%EB%93%9C-%ED%86%B5%ED%95%A9&utm_term=%EC%8A%A4%ED%8C%8C%EB%A5%B4%ED%83%80%20%EC%BD%94%EB%94%A9%ED%81%B4%EB%9F%BD&gclid=EAIaIQobChMI07rs1bSR-QIVIsEWBR2sOQvDEAAYASAAEgJn4fD_BwE
<br>
