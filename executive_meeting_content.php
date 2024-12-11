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
                    'https://drive.google.com/file/d/1f8zVb8AbXGnknXMfFIHNJb1JNDBpSPzf/preview',
                    'https://drive.google.com/file/d/1LUgC8IcjpK_oj8qO2MxE_UAM9gBWtz4F/preview',
                    'https://drive.google.com/file/d/1k1FMAmM12LLRDcATzM6Z6OeU8br1vRiU/preview',
                    'https://drive.google.com/file/d/1QdMi3-EMqDHuMTDfWCPU3xV0_AkDN9n_/preview',
                ],
                'https://drive.google.com/drive/folders/1MrUNfsoox5ci5J6buxeEaF6O9mnv8CX7?usp=drive_link'
            ],
            [ // 2
                [
                    'https://drive.google.com/file/d/1Ro2WEBVWaBVYiLqCsZO4fMno4JmiG4jK/preview',
                    'https://drive.google.com/file/d/1rYYZjOe4qrNV7tDOd_Ab6rWFDldNsf-w/preview',
                    'https://drive.google.com/file/d/1yz3u5xQJiUmm5mzHNJGS_r6xwp8yDHbQ/preview',
                    'https://drive.google.com/file/d/1LLirRsqrUKozOvi5-Lt3EbmRoY03tvIH/preview',
                ],
                'https://drive.google.com/drive/folders/1tR4vu9lElWC3sW-XT5i0D8X7tsU2qq1b?usp=drive_link'
            ],
            [ // 3
                [
                    'https://drive.google.com/file/d/1Gg661qbi4Z3LGBIdXmi9yO2RYdMFXwXm/preview',
                    'https://drive.google.com/file/d/1Qjf9eTyhsWwlOqDpf0LJnCDWG1anqKXZ/preview',
                    'https://drive.google.com/file/d/1xt1PJuKC1H9aMxhyneiWtNX1KV8ecbyy/preview',
                    'https://drive.google.com/file/d/1tYKpMGDrZjUDPjx_3WzhQFTv2t1F1aj9/preview',
                ],
                'https://drive.google.com/drive/folders/1G1Qj4iPXm_hFGPyLQqa3Ql0TgSknp6uC?usp=drive_link'
            ],
            [ // 4
                [
                    'https://drive.google.com/file/d/1ccWViN0tLID9ZN5tJ8xL5Dvul9zlduNy/preview',
                    'https://drive.google.com/file/d/1aKp9ubp7W-KduBYl-QpdZd4JI_yW2mTQ/preview',
                    'https://drive.google.com/file/d/14NJgWYKQz65VWWgSShF-soLUnovOlY-n/preview',
                    'https://drive.google.com/file/d/1RW0hnUy6FKpQVNqjJuvLH-od_5p4WJad/preview',
                ],
                'https://drive.google.com/drive/folders/1GBctb1Wz3kY8SgbXl21TinviTmUDN76y?usp=drive_link'
            ],
            [ // 5
                [
                    'https://drive.google.com/file/d/1ty8FFMAEYhcKgIENkE5rZak8e42ymZ6f/preview',
                    'https://drive.google.com/file/d/1sjYaiwQNRds0udlHL1GHOUM_IPLp51hr/preview',
                    'https://drive.google.com/file/d/1KF7cHdCE2cuDF_YAHg9jEm_obtKuKAmA/preview',
                    'https://drive.google.com/file/d/1TMX0w-jfKzy6XBOdLbQrmnHiAlNsW5Hi/preview',
                ],
                'https://drive.google.com/drive/folders/11s6omSAw1N8Cm-yZzsHbHfLQ4UUbT2Uq?usp=drive_link'
            ],
            [ // 6
                [
                    'https://drive.google.com/file/d/11ZKt2eVJg33CPY5ZTfQ7-tejAkgYhlzV/preview',
                    'https://drive.google.com/file/d/1_MXvEluuQWdQr66Fp-ZTW262aGDWg6s8/preview',
                    'https://drive.google.com/file/d/1ejT6KXUCKOoZaqD-iKCICmgmQj5sGunE/preview',
                    'https://drive.google.com/file/d/1Uw6-gry5AyT1HLtJMwhC5GCRWxexDR0Y/preview',
                ],
                'https://drive.google.com/drive/folders/1Wh6vD4muVfdkdSj7KRhFdpf_XcQcT7oU?usp=drive_link'
            ],
            [ // 7
                [
                    'https://drive.google.com/file/d/1rb4cEuPZMBqjlGJjFJ5WRXu4G1UJCmPC/preview',
                    'https://drive.google.com/file/d/1BohmR1wJ2T2lC0llaOt0l80dwZrO35sN/preview',
                    'https://drive.google.com/file/d/1WHBxxbedbNFUV3x7rYdtaHgDmiA53c72/preview',
                    'https://drive.google.com/file/d/1sFV4LPhCG-PxeTntsir3ZWQpOg1nRqyq/preview',
                ],
                'https://drive.google.com/drive/folders/1EkAydA4quMfCykkWvA0eKz37MEHadvly?usp=drive_link'
            ],
            [ // 8
                [
                    'https://drive.google.com/file/d/1rmnS7sT2joxZ89_g06Iris4ZL_LQhiOe/preview',
                    'https://drive.google.com/file/d/1sQYSozIRezEAh73hy5WyHB3CFVthGyTl/preview',
                    'https://drive.google.com/file/d/18jCJ0EBCUlNRIKzMdUNCYebNqalhOpIA/preview',
                    'https://drive.google.com/file/d/1r7PnlU3UWyvaQCQa3YkV_59-rt-C5yrE/preview',
                ],
                'https://drive.google.com/drive/folders/1yZrUe8KlUlr2SsShkPZPPJ2KElz_La2J?usp=drive_link'
            ],
            [ // 9
                [
                    'https://drive.google.com/file/d/1h4hb0OKSnd9uR505V-bq40-mann-l3D4/preview',
                    'https://drive.google.com/file/d/1BewboUe3XmWuhW28BYyHuVC_rN9kEhAa/preview',
                    'https://drive.google.com/file/d/1Sp8kT6XvMGvhENtPwd3wGuBvryRkdRh2/preview',
                    'https://drive.google.com/file/d/13PyN116YBUM2hnGFP74B35FiFuSuzEef/preview',
                ],
                'https://drive.google.com/drive/folders/1N6QZZ1WLoj1d7G-LLVs373NkYDdYu0Ri?usp=drive_link'
            ],
            [ // 10
                [
                    'https://drive.google.com/file/d/1NZQPEMGdSgxgKAJzZv8XoWwVQiIwAg4V/preview',
                    'https://drive.google.com/file/d/1KwPqip8oY2-p-MBY3aHui9xs3DA9s7AB/preview',
                    'https://drive.google.com/file/d/1i6YFbRvZSxvdkoSr-4F1zivuI5wiEpHF/preview',
                    'https://drive.google.com/file/d/1GKBo5SGidJbcwliMTw3UGdTMpv1ogvSC/preview',
                ],
                'https://drive.google.com/drive/folders/10O6mU4p_RFWbwkyxpqq4QrhtAyhQhK4U?usp=drive_link'
            ],
            [ // 11
                [
                    'https://drive.google.com/file/d/1G2cCXd3PRq7huPH7zSZOaiyjgFJ3Dy6Y/preview',
                    'https://drive.google.com/file/d/1StFH-eYiR92OXKGcHQazc2Cxk76zi8Rf/preview',
                    'https://drive.google.com/file/d/1iiyx8sHncmH8hzt0-ue_bxV6wwHd1xTi/preview',
                    'https://drive.google.com/file/d/1WAgdjongK_wojrEaG2kyBUwyUerEmJGI/preview',
                ],
                'https://drive.google.com/drive/folders/1Ha88M0aglUZOIfeRTHQsb7XEwRWIl2TU?usp=drive_link'
            ],
            [ // 12
                [
                    'https://drive.google.com/file/d/1ZtLRWgvM4rFoiq6C6-RvOw7BNFXl8r6E/preview',
                    'https://drive.google.com/file/d/1FDa2mQdr97xP83-n760z2EVIO4NhSpVr/preview',
                    'https://drive.google.com/file/d/1W7I4mdEunwwWAa0Z-8ANq3PurgIrcBnd/preview',
                    'https://drive.google.com/file/d/1Z-KRhZUe11frSJsiTRgunGCKaxpMhv6v/preview',
                ],
                'https://drive.google.com/drive/folders/1PNCMk_oVZ1R57_I5xXYuE8uHocKjJfpq?usp=drive_link'
            ],
            [ // 13
                [
                    'https://drive.google.com/file/d/1v8MHbqo8HlkKVjxzLrDJ4L5h9VHD-qTz/preview',
                    'https://drive.google.com/file/d/1ASlPS-7XmBpWu9zBIA2nER_Kah2jgkR5/preview',
                    'https://drive.google.com/file/d/1kueV6D5fBNMjPcTCXpZK42BGSTHCi_bx/preview',
                    'https://drive.google.com/file/d/1NSSv7kMM5MGeSc20VUD6dJVde9jWJ-n4/preview',
                ],
                'https://drive.google.com/drive/folders/1rKAxoMSoJUPvOtNkuTtSJdK19USTS9zR?usp=drive_link'
            ],
            [ // 14
                [
                    'https://drive.google.com/file/d/1F-G_NuyciJBsQ-__WqTmSkfiYQBP2RGm/preview',
                    'https://drive.google.com/file/d/1DLBtbPFSgks7be4IhnkKHqCX2NCYQ6f5/preview',
                    'https://drive.google.com/file/d/1Y39jah2v0iEzuzsNl2ClFyCPuwWY01G4/preview',
                    'https://drive.google.com/file/d/1hjtqWdTXi9OHJ7DpoQk11OaO3SwPqwHi/preview',
                ],
                'https://drive.google.com/drive/folders/1evSOKSX_JxcoA3oLwmqBjErSFAS9I3KN?usp=drive_link'
            ],
            [ // 15
                [
                    'https://drive.google.com/file/d/1d3_rvAU-hB-3VfSykMcpJB5aXw3QW19m/preview',
                    'https://drive.google.com/file/d/1gIKMmb2Yc1l6P4vkdb5ZFhC3rtoAw9pI/preview',
                    'https://drive.google.com/file/d/1Tpj-f77hqIVXH941PGIkYmeGolxwCeBH/preview',
                    'https://drive.google.com/file/d/1qbt1brdtaO2TLskoF6AAvWq95fYvdfvz/preview',  
                ],
                'https://drive.google.com/drive/folders/1cSnQSMYgfv037Vxq6nYWSAlqiN6jrKDg?usp=drive_link'
            ],
            [ // 16
                [
                    'https://drive.google.com/file/d/1AWcrAkUw55C4ogsQyKCzpL3vsO5Tbtgh/preview',
                    'https://drive.google.com/file/d/1cmQIBj8KLqkrlqjd18-M9oPIV0paL-sM/preview',
                    'https://drive.google.com/file/d/1OkhjFyQFv2M7msKhEYTNeGUtHWRgAClh/preview',
                    'https://drive.google.com/file/d/1SYKwAI4VZn7PTWTO_6QCzA-8ZM-3C8ls/preview',
                ],
                'https://drive.google.com/drive/folders/1wEtNHxBzxANIn6omEuEMUf8FvVCeI4Jl?usp=drive_link'
            ],
            [ // 17
                [
                    'https://drive.google.com/file/d/1zmpBVKXN_B6ylBShnxnz_m8gbhoEkghH/preview',
                    'https://drive.google.com/file/d/1GyXLFFCmt8zTpexgXSbcPDw6IaA7iRPU/preview',
                    'https://drive.google.com/file/d/1XLkXlqe0zbSkGRsm_z-XkxP8hTF3u6sn/preview',
                    'https://drive.google.com/file/d/1eTP6d3Q2JL9XkzLB-Y7hbZ5zbmmpZHCC/preview',
                ],
                'https://drive.google.com/drive/folders/1vUT78fRXdcP_1IwNTQqduBnSN72K7tbi?usp=drive_link'
            ],
            [ // 18
                [
                    'https://drive.google.com/file/d/1CfgefDXBY7ec6pcSBNScDwZmVI4UX0sN/preview',
                    'https://drive.google.com/file/d/1CfyjXwPQIO-SthcMUewhYYgdXVbO83iD/preview',
                    'https://drive.google.com/file/d/1PgT1zSMr4tXOaZQNfZwNKOwn6ZcDnFUk/preview',
                    'https://drive.google.com/file/d/1LVpf4XYVWYSffqwoq0Lkd2lcmJKGwV2E/preview',
                ],
                'https://drive.google.com/drive/folders/134rvtPECZtOxrkpz5bC3Vholxo8zKUsu?usp=drive_link'
            ],
            [ // 19
                [
                    'https://drive.google.com/file/d/1xlHVFDG9brFx-vY-gsS37QlECXzhHAmY/preview',
                    'https://drive.google.com/file/d/16TeTV8CVU4-Hx2MQMZqFpQUUlsp06h67/preview',
                    'https://drive.google.com/file/d/1lg8uKEd99CIsDbTNFa3tzOPkin7DgQ4f/preview',
                    'https://drive.google.com/file/d/1nL6Gz8J-TfjjGJdaCUaYZ2d8GXjKqI2E/preview',
                ],
                'https://drive.google.com/drive/folders/12gQwjEA0ZL04BqfdzFtWO8xY0W4I5CPH?usp=drive_link'
            ],
            [ // 20
                [
                    'https://drive.google.com/file/d/1gmrxubfz29hm3NXWLbJNIFAtMJu_fNYe/preview',
                    'https://drive.google.com/file/d/1NQOCpzIVpMziAUWD5a9JOjIjmch1hojO/preview',
                    'https://drive.google.com/file/d/1pyNap9CV0o7ilN-vdvQMkz8MCEd2ln0K/preview',
                    'https://drive.google.com/file/d/1Rbo8U4-UNpzH0Pn827QY39ouakoI3ufr/preview',
                ],
                'https://drive.google.com/drive/folders/1rmxoD-spArdhNxKBbJKMotIRRDUn_guU?usp=drive_link'
            ],
            [ // 21
                [
                    'https://drive.google.com/file/d/1Fdl-F3nNrU9PHGivMOo9rC3N058XGN0v/preview',
                    'https://drive.google.com/file/d/1qzVGPb0dLW8z2zoidZ7F9nsDCvCV_LBK/preview',
                    'https://drive.google.com/file/d/1Km8SEogFPzXYIUAy0Ewv-VNmUeCMfpmV/preview',
                    'https://drive.google.com/file/d/1JnANBbHpLvDR-xUsQA5z58Ic_BvRdPUh/preview',
                ],
                'https://drive.google.com/drive/folders/1lFRvUSt2PRi5B2neUP474yhfokBlsbwd?usp=drive_link'
            ],
            [ // 22
                [
                    'https://drive.google.com/file/d/1z0PPBpSVMvrcUEP8GWjaw84CxQ2Jz104/preview',
                    'https://drive.google.com/file/d/1Ft5W7HxbpAt4hYatL34GG78_8_atzp_E/preview',
                    'https://drive.google.com/file/d/1nL8wHUIZvW23OVXn9KbX1zAz8s-_-IPB/preview',
                    'https://drive.google.com/file/d/1pRROvfRHJc1ry8yYtTi1k6dKjiXbdZ5h/preview',
                ],
                'https://drive.google.com/drive/folders/1zYP0aeRlNKiBhXFbOTVySFnS9D4NPXbv?usp=drive_link'
            ],
            [ // 23
                [
                    'https://drive.google.com/file/d/1qbt5VdOSZ1UBeO1nD7Ap9i2AcMqepny_/preview',
                    'https://drive.google.com/file/d/1IXiU59c2F_pjpVHWH2uQJ27TtJr130_0/preview',
                    'https://drive.google.com/file/d/1iSMEj8NBxYPewGWp84THYo9XSdqH-6zu/preview',
                    'https://drive.google.com/file/d/1NKjx_aqTASgjDPU1mbyBOw-yah46gfhS/preview',
                ],
                'https://drive.google.com/drive/folders/1NsKvHrEXleZAttchd0oozHRu_fn95uCr?usp=drive_link'
            ],
            [ // 24
                [
                    'https://drive.google.com/file/d/1YPH6rpzQwIPU5wiM8JE_R0PshyO4ZiLU/preview',
                    'https://drive.google.com/file/d/1em_N8e9lBzEfhXdsAQu7BHUV4PCrSfUF/preview',
                    'https://drive.google.com/file/d/1wygsdV9nsBHjN3ZKxWI7Td0ovGmXU-u7/preview',
                    'https://drive.google.com/file/d/1UGh_KnYt-1XnGQk4JqAfwQzynpFjiAVP/preview',
                ],
                'https://drive.google.com/drive/folders/1bN0bP1tkJB5rAIdhHoJPckJXneWNtWey?usp=drive_link'
            ],
            [ // 25
                [
                    'https://drive.google.com/file/d/18NBs-GV2Q7yZNySgreFwabxOqQr6mgl_/preview',
                    'https://drive.google.com/file/d/1g-3i0roy7rYhMUAfMFqXRjmy5NQoDBXl/preview',
                    'https://drive.google.com/file/d/1nJcMWvoC1nwcLQEIk4Ikg_ochmcav5F5/preview',
                    'https://drive.google.com/file/d/1PYhgL8NQ63l23ZS4cgpb1wratpgL8XzL/preview',
                ],
                'https://drive.google.com/drive/folders/1uXxZJVpAw0jcRktj6VROC8NftSMhPb1c?usp=drive_link'
            ],
            [ // 26
                [
                    'https://drive.google.com/file/d/1gXg2wHMpwEkf65t2nLxI37zv4ZEzOGz_/preview',
                    'https://drive.google.com/file/d/1nMJJXqeTEwiqOpzxwn4fo1udevaAEHBw/preview',
                    'https://drive.google.com/file/d/1yYpbZEedZF6b4q2M2Hz5XFHDBbn9yZLo/preview',
                    'https://drive.google.com/file/d/1PAiLrrdwgnTiBzi8_WT6rX4qFJ8-O6jk/preview',
                ],
                'https://drive.google.com/drive/folders/10qDpvdrRdmDGxkyz0fKvaDGdOnOuzffj?usp=drive_link'
            ],
            [ // 27
                [
                    'https://drive.google.com/file/d/1ZdwWiP5Xn6HtD5HkS9aDEAbXqRttcPEb/preview',
                    'https://drive.google.com/file/d/1vffUpNeFNszWId4ZUSuwGIZwTzYKOE1W/preview',
                    'https://drive.google.com/file/d/1SH2n_7J1Lf9UhvwCK49_9ybbQhxtl3NS/preview',
                    'https://drive.google.com/file/d/1QVLJIzWA7droMpf0riVq8OGZnDdYZNZz/preview',
                ],
                'https://drive.google.com/drive/folders/16b8ym9WMsgPrRyVDwR7XDKmMf38txN7h?usp=drive_link'
            ],
            [ // 28
                [
                    'https://drive.google.com/file/d/1-tI8ChzJ48sGGV6zFY_NWGeCYhfcWyUf/preview',
                    'https://drive.google.com/file/d/16It-fcSWb80cUoBd-wumfPzSQfGfWD7h/preview',
                    'https://drive.google.com/file/d/1FD-qn7bhJ4Dtfu-FES-kQd76nw15Ghhk/preview',
                    'https://drive.google.com/file/d/1m0xfKqBDMPK6MlkTtP5JwjDVjjvOxgqh/preview',
                ],
                'https://drive.google.com/drive/folders/1M9Od-lSIfbrE452rjuopwJW1ZNT_gYHd?usp=drive_link'
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

            header('location: executive_meeting.html');
            die();

        }

    ?>
    <title>第<?php echo $meeting_number_chinese ?>次常務會議</title>
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

                for($i = 0; $i < count($meeting_file_link[$meeting_file_link_id][0]); $i++) {
                    $meeting_link_iframe = $meeting_file_link[$meeting_file_link_id][0][$i];
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
        <a href="Commonality_content.html"><div>組織運作</div></a>
        <a href="executive_meeting.html"><div>常務會議</div></a>
        <a href="executive_meeting_content.php?meeting_id=<?php echo $_GET['meeting_id'] ?>" class="current_bread_crumb"><div>第<?php echo $meeting_number_chinese ?>次常務會議</div></a>
    </div>

    <script defer src="./js/sideMenu.js"></script>
    <script src="./js/bg_animation.js"></script>
    
</body>
</html>