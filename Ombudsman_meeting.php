<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index/index.css">
    <?php


    
        $meeting_number_chinese = '';
        $meeting_id_name = [
            '1' => "一",
            '2' => "二",
            '3' => "三",
            '4' => "四",
            '5' => "五",
            '6' => "六",
            '7' => "七",
            '8' => "八",
            '9' => "九",
        ];

        $meeting_file_link = [
            [ // 1
                [
                    'https://drive.google.com/file/d/1hBrS8PEfl8sATG0D-lokNRFs6beV-vxW/preview',
                    'https://drive.google.com/file/d/1z3cc2mLRM8zu2OBZX_ZKXRXHjelHn0BQ/preview',
                    'https://drive.google.com/file/d/1olgG1vW2vJW43Kgyhr6C6s5Djgmyp6cH/preview',
                    'https://drive.google.com/file/d/1vRxvdO0rY5BaipI5FO0DX6j9_MpE9WB2/preview',
                ],
                'https://drive.google.com/drive/folders/1h7HkF4TlNrBdDjZRWPd7zhCeXeks4s-9?usp=drive_link'
            ],
            [ // 2
                [
                    'https://drive.google.com/file/d/1Z8udITJ31WsYyraQykDyGzsWf9Ge-TwX/preview',
                    'https://drive.google.com/file/d/1VSCfhYjLHilIWOR0aZj7o6iqo36XmRfm/preview',
                    'https://drive.google.com/file/d/1dki0yqjBTeVra7QF2yNGUxfiiuqPTnrM/preview',
                    'https://drive.google.com/file/d/1NUkCjdna856wkPA4aZNBbE5HB-Q-84H_/preview',
                ],
                'https://drive.google.com/drive/folders/1XoaF9FUMXC4PAuLNA4quECaHBqy1WTme?usp=drive_link'
            ],
            [ // 3
                [
                    'https://drive.google.com/file/d/1Oyat33XBVE1PCVRfkyDka2xZc6Y6jLi2/preview',
                    'https://drive.google.com/file/d/1rKtsO_B-YW6eX2LZedd20pb8G5Naxf3P/preview',
                    'https://drive.google.com/file/d/18uPUmDb6a81z7CXs81_zQ4R8_IG1DX2m/preview',
                    'https://drive.google.com/file/d/1CITITTSZVQF54u4Deq_IE5iSlgPLakqq/preview',
                ],
                'https://drive.google.com/drive/folders/1yqMtaczx98SQxWXNo8MF84p8RSJ-c1oo?usp=drive_link'
            ],
            [ // 4
                [
                    'https://drive.google.com/file/d/1pFEbSVc5aVIwMI3oq7bwnZ8rL-ZNR_UN/preview',
                    'https://drive.google.com/file/d/19o5G58fssGGz2R-RuoP6l8mDDxAHI1k-/preview',
                    'https://drive.google.com/file/d/1fVMMXvluCefTNe26wY0J4RA6kDDV5oKO/preview',
                    'https://drive.google.com/file/d/15qx7Z67mcD6pyg3AvpOu6dcQ8brXdTqz/preview',
                ],
                'https://drive.google.com/drive/folders/18jI2NLLcic7RZsGw7p5q7uoUPOfNdIvH?usp=drive_link'
            ],
            [ // 5
                [
                    'https://drive.google.com/file/d/1oUjPqesjbm0VfALRkbF4HPWYDGvk9Qrq/preview',
                    'https://drive.google.com/file/d/1vjF9fNkKNQzpFdE0sJlCmtjp5H56o06a/preview',
                    'https://drive.google.com/file/d/1ezebWktlsPIUyeURrFQfpYBDW6X_NCP_/preview',
                    'https://drive.google.com/file/d/1QSOjLFyG217LLCHyKC8sAQWTcaAs2gAC/preview',
                ],
                'https://drive.google.com/drive/folders/1htXgR7G1QIXLFPN2bMnXntJVGPDcAwb9?usp=drive_link'
            ],
            [ // 6
                [
                    'https://drive.google.com/file/d/1WlGzb2zBSrTy4T1Q32_ggvVbFUBT7nY4/preview',
                    'https://drive.google.com/file/d/1CJ4zdKuHE8NEcsmTuZwKmwWSFsjQpWRu/preview',
                    'https://drive.google.com/file/d/15O8L4eRtu5khYuoO_J5LrXrmJHmnvQYe/preview',
                    'https://drive.google.com/file/d/1neykJWyBh7zK2DG7VwXYZuZFwszsDPM9/preview',
                ],
                'https://drive.google.com/drive/folders/1anWfeBkcGDUInez1_BjFNiIBqylmYot_?usp=drive_link'
            ],
            [ // 7
                [
                    'https://drive.google.com/file/d/110-qiNmEDloc1zbBAME3r9rgmGw8TonQ/preview',
                    'https://drive.google.com/file/d/1NrrOfRuNPg2QCWxkCeAajv7ktsxO2ahq/preview',
                    'https://drive.google.com/file/d/1YSy5ScLtuU1EjY0tw1ncxCWuM9E1bPRN/preview',
                    'https://drive.google.com/file/d/12Nfh8Gj0TxzXLunf_SzEtoV4PPA15Z-E/preview',
                ],
                'https://drive.google.com/drive/folders/1Mn_sZ8VfpiMZ_qWHlUe9FjckShZBzd3W?usp=drive_link'
            ],
            [ // 8
                [
                    'https://drive.google.com/file/d/1Yj1h_qcC0FrN1Pf3jfBs41kZgcq2yPVK/preview',
                    'https://drive.google.com/file/d/1xHbFXtMuZdOAFQXQ8fgDGMObvxeRNuA2/preview',
                    'https://drive.google.com/file/d/1dxUSInNm8I_QMwtO5xjrIZtrWkdDs0BH/preview',
                    'https://drive.google.com/file/d/1fHu73S0ZEnUcY23HF1DdUJWNMpG2rhdF/preview',
                ],
                'https://drive.google.com/drive/folders/1guDa-yMkT9mV3dthpsPwb2BPjTRVwRKb?usp=drive_link'
            ],
            [ // 9
                [
                    'https://drive.google.com/file/d/1Btn9XAKih4TGwg54j297QZf-FWaIUNSp/preview',
                    'https://drive.google.com/file/d/1aVk9KglUv1afnRIAJh4PwH-iktULAHYj/preview',
                    'https://drive.google.com/file/d/16E_axIPPHLli7ITu6EOqtSYOsQYEOAbT/preview',
                    'https://drive.google.com/file/d/1Pm8YXB8Of5lCR1K2ARJ9-fYg69gWlsuW/preview',
                ],
                'https://drive.google.com/drive/folders/1LSF3kTT0_QG8fomCLtXICu2Wx5hpXi_c?usp=drive_link'
            ],
        ];

        if(isset($_GET['meeting_id']) && $_GET['meeting_id'] <= count($meeting_file_link)){
            $meeting_id = $_GET['meeting_id'];
            
            $meeting_id_arr = str_split($meeting_id);;
            if( strlen($meeting_id) === 2 ) {

                $meeting_number_chinese .= $meeting_id_arr[0] === '1' ? '十' : $meeting_id_name[$meeting_id_arr[0]];
                $meeting_number_chinese .= $meeting_id_arr[1] === '0' ? ''   : $meeting_id_name[$meeting_id_arr[1]];

            } elseif( strlen($meeting_id) === 1 ) {

                $meeting_number_chinese .= $meeting_id_name[$meeting_id_arr[0]];

            }
        } else {
            header('location: Ombudsman_meeting.html');
        }

    ?>
    <title>第<?php echo $meeting_number_chinese ?>次監委會議</title>
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

                $meeting_file_link_id = $meeting_id - 1;
                $meeting_link_button = $meeting_file_link[$meeting_file_link_id][1];

                for($i = 0; $i < count($meeting_file_link[$meeting_file_link_id][0]); $i++){

                    $arr = $meeting_file_link[$meeting_file_link_id][0];
                    $meeting_link_iframe = $arr[$i];

                    echo "
                        <iframe 
                            src='$meeting_link_iframe' 
                            width='640' 
                            height='480' 
                            allow='autoplay'
                        > </iframe>
                    ";

                }
                
            ?>
        </section>
        <a class="go_to_driver_a" href='<?php echo $meeting_link_button ?>' target="_blank">
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
        <a href="re_man.html"><div>資源管理</div></a>
        <a href="F_man.html"><div>財務管理</div></a>
        <a href="Ombudsman_meeting.html"><div>監委會議</div></a>
        <a href="Ombudsman_meeting.php?meeting_id=<?php echo $_GET['meeting_id'] ?>" class="current_bread_crumb"><div>第<?php echo $meeting_number_chinese ?>次監委會議</div></a>
    </div>

    <script defer src="./js/sideMenu.js"></script>
    <script src="./js/bg_animation.js"></script>
    
</body>
</html>