<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="好きなonionドメインを無料で取得するためのサービスです">
    <meta name="keywords" content="onion,tor,onionドメイン取得">
    <link rel="icon" href="images/yuma4869_logo.png">
    <link rel="stylesheet" href="style.css">
    <title>無料独自onionドメイン取得サービス | yuma4869</title>
</head>
<body>
    <div id="service">
    <div id="particles-js"></div>
        <div id="wrapper">
        <h1 class="main">無料独自onionドメイン取得サービス</h1>
        <h1 class="sub">createOnion</h1>

        <div class="form_box">
        <div class="form">
            <div class="cp_ipselect">
            <select class="cp_sl06" required>
            <option value="" hidden disabled selected></option>
            <option value="debian">debian</option>
            </select>
            <span class="cp_sl06_highlight"></span>
            <span class="cp_sl06_selectbar"></span>
            <label class="cp_sl06_selectlabel">OS</label>
            </div>
            <input type="text" id="onion" name="onion" placeholder="ドメイン名（推奨4文字以下）" onkeyup="onionToCommand()">
            <div class="form_button"><button id="submit" type="submit"><span></span></button></div>
        </div>
        </div>

        <div id="using">
            <p class="guide_command">command</p>
            <p class="command"><span class="sudo">sudo</span> <span class="sh">sh</span> <span class="onion">onion.sh</span> <span id="onionname">your_domain</span></p>
        </div>
        <script>
        var button = document.getElementById("submit");
        var onionName = document.getElementById("onionname");
        var using = document.getElementById("using");
        var inputOnion = document.getElementById("onion");

        function checkOnion(onion){ //入力されたonionドメインが英数字かを検証する
            onion = (onion==null)?"":onion;
            if(onion.match(/^[A-Za-z0-9]*$/)){
                return true;
            }else{
                return false;
            }
        }

        function onionToCommand() {
            if(checkOnion(inputOnion.value)){
                if(inputOnion.value == ""){
                    onionName.innerText = "";
                    onionName.innerText += " your_domain";            
                }else{
                    onionName.innerText = "";
                    onionName.innerText += " " + inputOnion.value;
                }
            }else{
                onionName.innerText = "ドメイン名は英数字のみ使用できます";
            }
        }

        function downloadFile(file) {
            var a = document.createElement('a');
            a.href = file;
            a.download = file;
            a.style.display = 'none';
            document.body.appendChild(a);
            a.click();
        }

        button.addEventListener("click", function() {
            downloadFile("onion.sh");
            downloadFile("start.sh");
        });
        </script>

        </div>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="back.js"></script>
    </div>
    <main>
    <div class="explain">
        <div id="pagetitle" class="template">

            <div class="introduce">
            <div class="pagetitle_block">
                <h3 class="title">createOnion</h3>
            </div>
            <section>
                <p>createOnionは無料で好きなonionドメインを取得することができるサービスです</p>
                <img src="images/tor-browser.png" alt="onion" width="1423" height="703">
            </section>
            </div>

            <div class="remote">
                <h2 class="dlb_subtitle2_05 dlb_color_base_bg">vpsなどからの使用</h2>
                <p class="code">git clone https://github.com/yuma4869/createOnionSh</p>
                <p>からonion.shとstart.shを取得できます</p>
                <a href="https://github.com/yuma4869/createOnionSh" target="_blank" class="decoa">https://github.com/yuma4869/createOnionSh</a>
            </div>

            <div class="use">
                <h3 class="dlb_subtitle1 dlb_subtitle">使い方</h3>
            <section>
                <ol>
                    <li>ページトップからOSやドメイン名を入力し、shファイルをダウンロードする</li>
                    <li>shファイルをページトップに記載されているように実行する</li>
                    <li>shファイルの指示に従う</li>
                </ol>
                <img src="images/slide_1.png" alt="slide_1" width="1423" height="703">
                <img src="images/slide_2.png" alt="slide_2" width="1423" height="703">
                <img src="images/slide_3.png" alt="slide_3" width="1423" height="703">
                <img src="images/slide_4.png" alt="slide_4" width="1423" height="703">
                <img src="images/slide_5.png" alt="slide_5" width="1423" height="703">
            </section>
            </div>
        </div>
    </div>
    </main>
    <footer class="footer">
    <div class="md-flex md-justify-between">
        <a href="https://yuma4869.com" class="footer__logo">
        <img src="images/yuma4869_logo.png" alt="yuma4869_logo" />
        </a>
        <div class="grid">
        <div>
            <p class="footer__navi-heading">SERVICE</p>
            <ul class="footer__navi">
            <li><a href="https://yumasblog.net">yumasblog</a></li>
            </ul>
        </div>
        <div>
            <p class="footer__navi-heading">FOLLOW US</p>
            <ul class="footer__navi">
            <li><a href="https://x.com/yuma4869b">X(Twitter)</a></li>
            <li><a href="https://github.com/yuma4869">github</a></li>
            </ul>
        </div>
        <div>
            <p class="footer__navi-heading">ABOUT</p>
            <ul class="footer__navi">
            <li><a href="https://yuma4869.com/me">開発者</a></li>
            <li><a href="https://forms.gle/bBBU7JRkfQpd9h6Y9">お問い合わせ</a></li>
            </ul>
        </div>
        </div>
    </div>
    <hr />
    <p class="copyright">© 2023 <a href="https://yuma4869.com/">yuma4869</a> All Rights Reserved.
    </p>
    </footer>
</body>
</html>
