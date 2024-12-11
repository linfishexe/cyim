<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index/index.css">
    <link rel="stylesheet" href="./style/infor_member/infor_member.css">
    <style>
        .encryption_loging{
            width: 350px;
            position: absolute;
            left: 50%;
            top: 50vh;
            transform: translate(-50%, -50%);
            background-color: #33333f;
            padding: 2rem;
            border-radius: 1rem;
            /* box-shadow: 0 0 30px #a6e7ff; */
        }
        .encryption_loging h3 {
            font-size: 1.4rem;
            margin: 2rem 0;
        }
        .encryption_loging button {
            left: 50%;
            transform: translateX(-50%);
        }
        .encryption_loging input {
            background-color: #22222f;
            color: #fff;
            padding-left: .5rem;
        }
    </style>
    <?php if( !isset($_SESSION) ) session_start(); ?>
    <?php 

        $title = '';
        if( isset($_POST['password']) ){

            if ( $_POST['password'] === '@cyim2022' ) {

                $_SESSION['is_login'] = true;
                header('location: encryption.php');
                die();

            } 

            else {

                header('location: encryption.php');
                die();

            }
            
        }

        if( isset( $_SESSION['is_login'] ) ) {

            $title = '朝陽資管 - 會員資料';

        } else {

            $title = '登入';
            
        }
    
    ?>
    <title><?php echo $title; ?></title>
</head>
<body>
    
    <canvas id="animation_bg" width="1920" height="1080"></canvas>
    
    <nav>
        <div class="logo"><img src="./img/Logo1.svg" alt="Logo"></div>
        <div class="logo"><img src="./img/Logo1.svg" alt="Logo" title="資管系學會"></div>
        <ul>
            <a href="index.html"><li>首頁</li></a>
            <a href="Commonality.html"><li>共通性</li>
            <a href="activity.html"><li>社團活動</li></a>
        </ul>
        <div id="side_menu_btn">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>
    <aside id="side_contents">
        <div id="side_contents_arrow">></div>
        <ul>
            <li><a href="#member"><span>幹部資料</span></a></li>
            <li><a href="#teacher"><span>指導老師資料</span></a></li>
            </span></a></li>
        </ul>
    </aside>
    <aside id="side_menu" style="left: 100vw;">
        <h2>選單</h2>
        <ul>
            <a href="Commonality.html"><li>共通性</li></a>
                <a class="sub_item" href="Commonality_content.html"><li>組織運作</li></a>
                <a class="sub_item" href="re_man.html"><li>組織管理</li></a>
            <hr>
            <a href="activity.html"><li>社團活動</li></a>
                <a class="sub_item" href="plan.html"><li>規劃與執行</li></a>
                <a class="sub_item" href="feature.html"><li>特色與績效</li></a>
        </ul>
    </aside>
    <main>
        <?php


            if( !isset( $_SESSION['is_login'] ) ) {
                
                echo '
                    <form class="encryption_loging" action="encryption.php" method="post">

                        <h3>資料已加密，請登入</h3>

                        <div>
                            <input type="password" id="password" name="password" required placeholder="密碼確認">
                        </div>

                        <div>
                            <button type="submit"> 送出 </button>
                        </div>

                    </form>
                ';

            } else {

                unset( $_SESSION['is_login'] );
                echo '
                    <h2>人事資料</h2>
                    <section id="member">
                        <h3>幹部資料</h3>
                        <table>
                            <tr><th>職稱</th><th>姓名</th><th>學號</th><th>系級</th><th>身分證末四碼</th><th>聯絡方式</th></tr>
                            <tr><td>會長</td><td>鍾柏霖</td><td>11014121</td><td>資管2A</td><td>0679</td><td>E-mail：bolingwall1124@gmail.com<br>
                                手機：0981186925
                                </td></tr>
                            <tr><td>副會長</td><td>陳永傑</td><td>11014139</td><td>資管2A</td><td>4453</td><td>E-mail：
                                jaychen1109@gmail.com<br>
                                手機：0905331792
                                </td></tr>
                            <tr><td>活動執秘</td><td>林渝暄</td><td>11014175</td><td>資管2A</td><td>4922</td><td>E-mail：
                                promise04230320@gmail.com<br>
                                手機：0903734976
                                </td></tr>
                            <tr><td>行政執秘</td><td>黃沐卿</td><td>11014097</td><td>資管2A</td><td>4478</td><td>E-mail：
                                s11014097@gm.cyut.edu.tw<br>
                                手機：0973345333
                                </td></tr>
                            <tr><td>財務長</td><td>詹浣妤</td><td>11014172</td><td>資管2A</td><td>6416</td><td>E-mail：
                                huanyu3043072@gmail.com<br>
                                手機：0931635465
                                </td></tr>
                            <tr><td>公關長</td><td>曾重元</td><td>11014114</td><td>資管2C</td><td>1525</td><td>E-mail：
                                yuannn0509@gmail.com<br>
                                手機：0902107311
                                </td></tr>
                            <tr><td>器材長</td><td>黃立辰</td><td>11014017</td><td>資管2B</td><td>2120</td><td>E-mail：
                                richard0607xd@gmail.com<br>
                                手機：0936644718
                                </td></tr>
                            <tr><td>資訊長</td><td>董柏均</td><td>11014085</td><td>資管2A</td><td>2505</td><td>E-mail：
                                cspss9803@gmail.com<br>
                                手機：0921857537
                                </td></tr>
                            <tr><td>美宣長</td><td>鍾宇昕</td><td>11014067</td><td>資管2A</td><td>5159</td><td>E-mail：
                                thomaschung710@gmail.com<br>
                                手機：0958567218
                                </td></tr>
                            <tr><td>副美宣</td><td>劉正凱</td><td>11014136</td><td>資管2A</td><td>8946</td><td>E-mail：
                                qazw112332@gmail.com<br>
                                手機：0955970023
                                </td></tr>
                            <tr><td>攝影長</td><td>廖利華</td><td>11014001</td><td>資管2A</td><td>9697</td><td>E-mail：
                                cx832495@gmail.com<br>
                                手機：0975382495
                                </td></tr>
                            <tr><td>活動長</td><td>吳依靜</td><td>11014077</td><td>資管2B</td><td>9325</td><td>E-mail：
                                40229maggie@gmail.com<br>
                                手機：0903980933
                                </td></tr>
                            <tr><td>副活動長</td><td>周浩榆</td><td>11014131</td><td>資管2B</td><td>9410</td><td>E-mail：
                                sty6743@gmail.com<br>
                                手機：0981767513
                                </td></tr>
                            <tr><td>文書長</td><td>周子皓</td><td>11014143</td><td>資管2B</td><td>9410</td><td>E-mail：
                                james92629@gmail.com<br>
                                手機：0901252535
                                </td></tr>
                            <tr><td>體育長</td><td>劉俊彬</td><td>11014014</td><td>資管2B</td><td>2269</td><td>E-mail：foryou36124217@gmail.com<br>
                                手機：0924709898
                                </td></tr>
                        </table>
                    </section>
                    <section id="teacher">
                        <h3>朝陽科技大學111學年度學生社團校內指導老師資料表</h3>
                        <table>
                            <tr><td colspan="2"> 社團名稱：資訊管理系學會</td></tr>
                            <tr><td>姓名：呂慈純</td><td>性別：女 </td></tr>
                            <tr><td> 聯絡電話：校內分機－4558<br>行動電話－0918065533</td><td>聯絡住址：台中市南屯區新富一街 46 號 </td></tr>
                            <tr><td>E-mail：tclu@cyut.edu.tw</td><td>現職：教授</td></tr>
                            <tr><td colspan="2"> 學歷：中正大學資訊工程博士 </td></tr>	
                            <tr><td colspan="2">經歷：	
                                1.	朝陽科技大學資訊管理系專任助理教授 (95)朝陽人聘字第 0168 號，2006。  
                
                                (2006/02/01-2006/07/31)<br>
                                
                                2.	朝陽科技大學資訊管理系專任助理教授 (95)朝陽人聘字第 0185 號，2006。  
                                
                                (2006/08/01-2007/01/31)<br>
                                
                                3.	台中技術學院資訊管理系兼任助理教授 (95)中技人聘兼資字第 012 號，2006。<br>  
                                
                                4.	朝陽科技大學資訊管理系專任助理教授 (96)朝陽人聘字第 0189 號，2007。 <br> 
                                
                                5.	朝陽科技大學資訊科技研究所暨資訊管理系專任助理教授，2008。(97)朝陽人聘字第 
                                
                                0203 號，2008。  <br>
                                
                                6.	朝陽科技大學資訊科技研究所暨資訊管理系專任副教授，2009。(97)朝陽人聘字第  
                                
                                0279 號，(2009/2/1-2010/7/31)。(副字第０三八三四九號)<br>
                                
                                7.	台中技術學院資訊管理學系兼任副教授 (98)中技人聘兼資字第 021 號，2009。  
                                
                                (2009/08/01-2010/01/31)<br>
                                
                                8.	台中科技大學資訊工程系兼任副教授 (101)中科大人聘兼字第資工 008 號，2012。  
                                
                                (2012/08/01-2013/01/31)<br>
                                
                                9.	朝陽科技大學資訊管理系專任副教授，(2010/8-2018/7/31)。(99)朝陽人聘字第 0241 號，2010/8。(副字第０三八三四九號)<br>
                                10.	朝陽科技大學資訊管理系主任（兼研究所所長）(2017/8- ) ( 107) 朝陽人行聘字第
                                
                                0056 號  <br>
                                
                                11. 朝陽科技大學資訊管理系專任教授，(2018/8-)。(教字第 143276 號)(107/8/10)</td></tr>
                            <tr><td colspan="2">備註：<br>
                            朝陽科技大學為社團外聘指導老師申請之目的，須蒐集外聘指導老師的姓名、電話、 地址、身分證字號、電子郵件等個人資料(辨識類：C001 辨識個<br>
                            人者、C011 個人描述、C052    資格與技術)，以在本學期期間於校務地區內進行必要之社團輔導相關業務 聯繫及指導老師經費申請。本校於蒐集您<br>
                            的個人資料時，如不同意填寫或項目遺漏， 可能會無法通過社團指導(輔導)老師資格任用審查及指導老師經費申請。如欲更改資料或行使其他個人資<br>
                            料保護法第 3 條的當事人權利，請洽本校學務處課外活動組(電話：04-23323000#5026)。 </td></tr>
                        </table>
                        <table>
                            <tr><td colspan="2"> 社團名稱：資訊管理系學會</td></tr>
                            <tr><td>姓名：戴紹國</td><td>性別：男 </td></tr>
                            <tr><td> 聯絡電話：校內分機－4748<br>行動電話－0978177743</td><td>聯絡住址：台中市霧峰區吉峰東路168號  </td></tr>
                            <tr><td>E-mail：sgdai@cyut.edu.tw </td><td>現職：資管系專任教師 </td></tr>
                            <tr><td colspan="2"> 學歷：中興大學應用數學研究所 </td></tr>	
                            <tr><td colspan="2">經歷：<br>	
                                1. 中華電信有限公司	中區分公司   助理工程師   79/8 至 94/7 <br>
                                2. 朝陽科技大學 資訊管理系/所 助理教授	94/8 至 今 <br></td></tr>
                            <tr><td colspan="2">備註：<br>
                            朝陽科技大學為社團外聘指導老師申請之目的，須蒐集外聘指導老師的姓名、電話、 地址、身分證字號、電子郵件等個人資料(辨識類：C001 辨識個<br>
                            人者、C011 個人描述、C052    資格與技術)，以在本學期期間於校務地區內進行必要之社團輔導相關業務 聯繫及指導老師經費申請。本校於蒐集您<br>
                            的個人資料時，如不同意填寫或項目遺漏， 可能會無法通過社團指導(輔導)老師資格任用審查及指導老師經費申請。如欲更改資料或行使其他個人資<br>
                            料保護法第 3 條的當事人權利，請洽本校學務處課外活動組(電話：04-23323000#5026)。 </td></tr>
                        </table>
                    </section>
                    
                    <a class="go_to_driver_a" href="https://drive.google.com/drive/folders/1RHvM7e0alK0FLAoncGbp0Fq1pND9M7_S?usp=drive_link" target="_blank">
                        <div class="go_to_driver"><div class="bg"></div><img src="./img/google-drive.svg" alt="">
                            <span>
                                在雲端硬碟中顯示
                            </span>
                        </div>
                    </a>
                ';
            }
        
        ?>
    </main>
    <div id="bread_crumbs">
        <a href="index.html"><div>首頁</div></a>
        <a href="Commonality.html"><div>共通性</div></a>
        <a href="Commonality_content.html"><div>組織運作</div></a>
        <a href="encryption.php" class="current_bread_crumb"><div>人事資料</div></a>
    </div>
</body>
<script defer src="./js/sideContents.js"></script>
<script defer src="./js/sideMenu.js"></script>
<script src="./js/bg_animation.js"></script>
</html>