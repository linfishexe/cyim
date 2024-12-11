<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index/index.css">
    <style>
        .parallax_card_wrap, .parallax_card_r_wrap {
            width: 100%;
            transform-style: preserve-3d;
            transform: perspective(50rem);
            cursor: pointer;
            padding: 5rem 2rem !important;
        }
        .parallax_card, .parallax_r_card {
            --rX: 0;
            --rY: 0;
            --bX: 50%;
            --bY: 80%;
            max-width: 367.5px;
            width: 100%;
            aspect-ratio: 367.5 / 237;
            border: 1px solid var(--background-color);
            border-radius: 0.5rem;
            padding: 0;
            left: 50%;
            translate: -50%;
            transform: rotateX(calc(var(--rX) * 1deg)) rotateY(calc(var(--rY) * 1deg));
            background-position: var(--bX) var(--bY);
            background-size: cover;
            box-shadow: 0 0 3rem 0.5rem hsla(0, 0%, 0%, 0.2);
            transition: transform 0.6s 1s;
        }
        .parallax_card {
            background: linear-gradient(hsla(0, 0%, 100%, 0.1), hsla(0, 0%, 100%, 0.1)),
                url("./img/member_card.svg");
        }
        .parallax_r_card {
            background: linear-gradient(hsla(0, 0%, 100%, 0.1), hsla(0, 0%, 100%, 0.1)),
                url("./img/member_card_r.svg");
        }
        .member_card {
            max-width: 960px;
            width: 100%;
            display: flex;
            left: 50%;
            transform: translateX(-50%);
            padding: 0 !important;
        }

        .parallax_card--active {
            transition: none;
        }

        @media screen and ( max-width: 640px ) {
            .member_card{
                flex-wrap: wrap;
            }
        }
    </style>
    <?php

        $title = '';
        $content_file_link = [
            [
                'https://drive.google.com/file/d/1YkgwOulgrRgtVFGK1uVLV_ago90NubkM/preview',
                'https://drive.google.com/drive/folders/1IDMFKKm33cu6JsaweVCqVv5ZMIUy7r1x?usp=share_link'
            ],
            [
                'https://drive.google.com/file/d/19c2jUJNpFLzP74vj8UrlRJ8NenOZHyJu/preview',
                'https://drive.google.com/drive/folders/1X4DlAy2NBwm4CLkl3c3_zNc1AhEBmYnE?usp=share_link'
            ],
            [
                [
                    './memberCheck.html',
                    'https://drive.google.com/file/d/1s2XDmSK45adkO_B66_nMM-3csvz9O2NW/preview',
                ],
                'https://drive.google.com/drive/folders/1pCWUoGEu3yY8Dsp3bHKoQ6on1oxU0vDn?usp=share_link'
            ],
            [
                'https://drive.google.com/file/d/1EW-GkNvLkHgzXB_6Duc6JQOr8I4a2GIE/preview',
                'https://drive.google.com/drive/folders/1g05GkjdaFEf6aUhCMKlw8idkJfy-j6tO?usp=share_link'
            ],
            [
                [
                    'https://drive.google.com/file/d/1EP-y1Y4wxlbOyjXx7ulkRbsi023wNPW2/preview',
                    'https://drive.google.com/file/d/18-iOZjJu5DtOnJ-GaZbq2cDj-5jo3Vtv/preview',

                ],
                'https://drive.google.com/drive/folders/1OfRCFuyDDdgI9xV892xlu5eNZX6YMs34?usp=share_link'
            ],
            [
                'https://drive.google.com/file/d/1VVDXYHrrYMS4ctG9EyARd7PRH3YOGag7/preview',
                'https://drive.google.com/drive/folders/1j8jiEcSp78eygrJdwgwD36rcThSdkgFs?usp=share_link'
            ],
            [
                'https://drive.google.com/file/d/1rN-VSx4QXAZ_kG-V3iBEpt2HqHipKgxW/preview',
                'https://drive.google.com/drive/folders/17OeTvqxbh3Q3KMO-cAqdVaVaR-EqOKGE?usp=share_link'
            ],
            [
                'https://drive.google.com/file/d/16eTVQzRJklKB0BXxoo8rG76OxczdjPnW/preview',
                'https://drive.google.com/drive/folders/1jfYg2NqQIRiyFZ6eD0jsVeYeiNx0nwhn?usp=share_link'
            ]
        ];
        $title_list = [
            '資管卡',
            '資料庫管理',
            '會費生查詢',
            '文件批次轉檔',
            '特約資訊',
            '社群資訊',
            '系隊資訊',
            '系服',
        ];

        if(isset($_GET['content_id']) && $_GET['content_id'] <= count($content_file_link)){

            $content_id = $_GET['content_id'];
            $title = $title_list[$content_id - 1];
            
        } else {
            header('location: Special_contract.html');
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
                if( $content_id === '1' ) {
                    echo '
                    <div class="member_card">
                        <div class="parallax_card_wrap">
                            <div class="parallax_card"></div>
                        </div>
                        <div class="parallax_card_r_wrap">
                            <div class="parallax_r_card"></div>
                        </div>
                    </div>
                    ';
                }
            ?>
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
        <a href="Special_contract.html"><div>資源管理</div></a>
        <a href="Special_contract.php?content_id=<?php echo $_GET['content_id'] ?>" class="current_bread_crumb"><div><?php echo $title; ?></div></a>
    </div>

<script defer src="./js/sideMenu.js"></script>
<script src="./js/bg_animation.js"></script>
<script src="./js/parallax_card.js"></script>
<script>
const parallax_card = new Parallax_card({
    element: document.querySelector('.parallax_card_wrap'),
    tiltEffect: 'reverse',
    container: document.querySelector('.parallax_card')
});

const parallax_card_r = new Parallax_card({
    element: document.querySelector('.parallax_card_r_wrap'),
    tiltEffect: 'reverse',
    container: document.querySelector('.parallax_r_card')
});
</script>
</body>
</html>