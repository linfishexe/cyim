<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index/index.css">
    <?php

        $title = '';
        $content_file_link = [
            'https://drive.google.com/file/d/1osURJyJdzQij6pfNsarxioaefDFVSdSm/preview', // 1
            'https://drive.google.com/file/d/1loMmAItZZxUU7nukftBfh4TqiLVAbZ1f/preview', // 2
            'https://drive.google.com/file/d/1JHp2WQCXA_D5i3LcWDILfvhdgwh8928I/preview', // 3
        ];
        $title_list = [
            '器材管理辦法',
            '器材清單',
            '器材圖冊',
        ];

        if(isset($_GET['content_id']) && $_GET['content_id'] <= count($content_file_link)){

            $content_id = $_GET['content_id'];
            $title = $title_list[$content_id - 1];
            
        } else {
            header('location: E.man.html');
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
        <section>
            <?php

                $content_link_id = $content_id - 1;
                $content_link = $content_file_link[$content_link_id];
                echo "
                    <iframe 
                        src='$content_link' 
                        width='640' 
                        height='480' 
                        allow='autoplay'
                    > </iframe>
                ";
            ?>
            
            <a class="go_to_driver_a" href='<?php echo $content_link ?>' target="_blank">
                <div class="go_to_driver"><div class="bg"></div><img src="./img/google-drive.svg" alt="">
                    <span>
                        在雲端硬碟中顯示
                    </span>
                </div>
            </a>
        </section>
    </main>

    <div id="bread_crumbs">
        <a href="index.html"><div>首頁</div></a>
        <a href="Commonality.html"><div>共通性</div></a>
        <a href="re_man.html"><div>組織管理</div></a>
        <a href="E.man.html"><div>器材管理</div></a>
        <a href="E.man.php?content_id=<?php echo $_GET['content_id'] ?>" class="current_bread_crumb"><div><?php echo $title; ?></div></a>
    </div>

    <script defer src="./js/sideMenu.js"></script>
    <script src="./js/bg_animation.js"></script>
    
</body>
</html>