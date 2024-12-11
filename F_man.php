<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index/index.css">
    <?php

        $title = '';
        $content_file_link = [
            [ // 1
                'https://drive.google.com/file/d/1ITpbuI6VP8xenWEyMeKKWKzCDxxtJu0A/preview',              // iframe
                'https://drive.google.com/drive/folders/1VudKpWBXyQYAXOnzwoiNnJi2XBOhS5XV?usp=share_link' // button
            ],
            [ // 2
                'https://drive.google.com/file/d/1ypj2ZA-ScEFVpF8tiSBdKIdVsYFSlG68/preview',
                'https://drive.google.com/file/d/1ypj2ZA-ScEFVpF8tiSBdKIdVsYFSlG68/preview'
            ],
            [// 3
                [
                    'https://drive.google.com/file/d/1JX5ApPJgQDkaQxd30KPSTJESSCX6PZjo/preview',
                    'https://drive.google.com/file/d/1Ud5Ih7iuRlYYrot8K2U23agJT0rkSNxa/preview',
                    'https://drive.google.com/file/d/1UQ6DirN7UT55lUbsBteNBgg-4ujGmGsY/preview',
                    'https://drive.google.com/file/d/1QxypdcaB-7gMDC0PXpYLVveJG6p27zhb/preview',
                    'https://drive.google.com/file/d/115swRx02cqYV6uLZQe_WkXYSbpue6YOn/preview',
                    'https://drive.google.com/file/d/1zNvsPkJJD_Ebfx7Ov_w7ExxddsMDR6Z5/preview',
                ],
                'https://drive.google.com/drive/folders/1QfAYz6DOUDKT_Zqc3Zd4stzxAWefyKOt?usp=share_link'
            ],
            [
                'https://drive.google.com/file/d/1F-6Hu3b6Bc-FXIpOMjcKMfLKEPjvDbRL/preview',
                'https://drive.google.com/drive/folders/1FJTO6GNZiY0KfgNR6_-2SNee6IeXigI5?usp=share_link'
            ],
            [
                'https://drive.google.com/file/d/1eb98TiV0JzesPCyb_OuEUC47KMzFzc-N/preview',
                'https://drive.google.com/drive/folders/1ImZvfSrNdZ9dDzoXkX9XSeLn57JmvowF?usp=share_link'
            ],
            [
                [
                    'https://drive.google.com/file/d/1zjNYAWs1HH9hbo28i8C_aqb_4eypn5mF/preview',
                    'https://drive.google.com/file/d/1y97dq7Ouc2_Tj5juufdlVG-teDQoXcxy/preview',
                    'https://drive.google.com/file/d/1pSU-me5CFo2W4Z_U0yIHKvPeCmTqN9-o/preview',
                    'https://drive.google.com/file/d/1z7lD9O3qj32ATfF9dq8vSgkCiQS2DXXg/preview',
                    'https://drive.google.com/file/d/1djfhML_cTwSfS9IrkFZxLylG35o5-oal/preview',
                ],
                'https://drive.google.com/drive/folders/1bF8wxd_5FfEynE4QPqEJpYr8gM-ghNhR?usp=share_link'
            ],
            [
                'https://drive.google.com/file/d/1NdyK7zUUAu4V03La1SpJeQBsPuE51YOX/preview',
                'https://drive.google.com/drive/folders/1YEbYWe8jqnTbF0SyCnzDsNZoPsIeJ01I?usp=share_link'
            ],
        ];
        $title_list = [
            '財務管理辦法',
            '29屆財務報告',
            '月收支表',
            '年度財務預算',
            '收據/發票',
            '活動支出',
            '繳費情況',
        ];

        if(isset($_GET['content_id']) && $_GET['content_id'] <= count($content_file_link)){

            $content_id = $_GET['content_id'];
            $title = $title_list[$content_id - 1];
            
        } else {
            header('location: F.man.html');
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
                if( is_array($content_file_link[$content_link_id][0]) ) {
                    $arr = $content_file_link[$content_link_id][0];
                    for($i = 0; $i < count($arr); $i++) {
                        $content_link_iframe = $content_file_link[$content_link_id][0][$i];
                        echo "
                            <iframe 
                                src='$content_link_iframe' 
                                width='640' 
                                height='480' 
                                allow='autoplay'
                            > </iframe>
                        ";
                    }

                } else {

                    $content_link_iframe = $content_file_link[$content_link_id][0];
                    echo "
                        <iframe 
                            src='$content_link_iframe' 
                            width='640' 
                            height='480' 
                            allow='autoplay'
                        > </iframe>
                    ";

                }

                $content_link_button = $content_file_link[$content_link_id][1];
            ?>
        </section>
        <a class="go_to_driver_a" href='<?php echo $content_link_button ?>' target="_blank">
            <div class="go_to_driver"><div class="bg"></div><img src="./img/google-drive.svg" alt="">
                <span>
                    在雲端硬碟中顯示
                </span>
            </div>
        </a>
    </main>

    <div id="bread_crumbs">
        <a href="index.html"><div>首頁</div></a>
        <a href="Commonality.html"><div>共通性</div></a>
        <a href="re_man.html"><div>組織管理</div></a>
        <a href="F_man.html"><div>財務管理</div></a>
        <a href="F_man.php?content_id=<?php echo $_GET['content_id'] ?>" class="current_bread_crumb"><div><?php echo $title; ?></div></a>
    </div>

    <script defer src="./js/sideMenu.js"></script>
    <script src="./js/bg_animation.js"></script>
    
</body>
</html>