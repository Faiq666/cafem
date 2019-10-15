<?php
if ($_SESSION['test']!=true){
    redirect(base_url('Login'));
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CafePage</title>
</head>
<body>

<body>
<div class="background"></div>
<div class="body-wrapper">
    <div class="panel">
        <div class="aside">
            <div class="avatar"><img src="https://i.pinimg.com/originals/5c/16/d2/5c16d253a7852b2a5074e0a44348786a.png"/></div>
            <div class="seperator"></div>
            <div class="list">
                <div class="item selected">Umumi</div>
                <div class="item">Xidmetler</div>
                <div class="item">Menyu</div>
                <div class="item">Statistika</div>
                <div class="item">Bildirisler</div>

            </div>
            <div class="log-out"><a href="<?php echo base_url('Login')?>">Cixis</a></div>
        </div>
        <div class="view">
            <div class="sub-title">ADMIN PANEL</div>
            <div class="main-title">GENERAL</div>
            <div class="seperator"></div>
            <div class="health-charts">
                <div class="chart system">
                    <div class="title">Ayliq Baxis</div>
                    <div class="info">
                        <div class="circle"></div>
                        <div class="percentage">75%</div>
                    </div>
                </div>
                <div class="chart network">
                    <div class="title">Heftelik Baxis</div>
                    <div class="info">
                        <div class="circle"></div>
                        <div class="percentage">60%</div>
                    </div>
                </div>
                <div class="chart storage">
                    <div class="title">Gunluk Baxis</div>
                    <div class="info">
                        <div class="circle"></div>
                        <div class="percentage">25%</div>
                    </div>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="min-seperator"></div>
            <div class="general-settings">
                <div class="set language">
                    <div class="title">Dil:</div>
                    <div class="value">
                        <select name="">
                            <option>Azerbaijan</option>
                            <option>English</option>
                            <option>Russian</option>
                        </select>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="set date">
                    <div class="title">Gun:</div>
                    <div class="value">
                        <div class="current">9 / 7 / 2016</div>
                        <div class="change">Deyismek</div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="set time">
                    <div class="title">Saat:</div>
                    <div class="value">
                        <div class="current">
                            <div class="numbers">02 : 39</div>
                            <div class="extra">AM</div>
                            <div class="clear-fix"></div>
                        </div>
                        <div class="change">deyismek</div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
</body>

<style>
    body {
        background: linear-gradient(white, rgba(249, 239, 107, 0.5));
        font-smoothing: antialiased;
        background-repeat: repeat;
        background-size: cover;
    }
    body::after {
        display: none;
        content: "";
        position: absolute;
        width: 100vw;
        height: 100vh;
        background: black;
        opacity: 0.15;
    }

    .body-wrapper {
        width: 1000px;
        height: 600px;
        margin: 25px auto;
    }
    .body-wrapper .panel {
        width: 1000px;
        height: 600px;
        background: white;
        border-radius: 10px;
        box-shadow: 0px 10px 50px 5px rgba(0, 0, 0, 0.1);
        z-index: 8;
        overflow: hidden;
    }
    .body-wrapper .panel .aside {
        width: 83px;
        height: 600px;
        float: left;
        margin-left: 5px;
        position: relative;
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
    }
    .body-wrapper .panel .aside .avatar {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background-color: white;
        margin: auto;
        margin-top: 20px;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.38, -0.9, 0.5, 2.5);
    }
    .body-wrapper .panel .aside .avatar:hover {
        transform: scale(1.1);
    }
    .body-wrapper .panel .aside .avatar img {
        position: relative;
        width: 55px;
        height: 55px;
    }
    .body-wrapper .panel .aside .seperator {
        width: 50px;
        height: 1px;
        background: #7f8818;
        opacity: 0.25;
        margin: 18px auto 36px auto;
    }
    .body-wrapper .panel .aside .list {
        width: 100%;
        height: auto;
        text-align: right;
        padding-right: 14px;
        box-sizing: border-box;
        font-size: 11px;
        font-family: "Lato";
        color: #7f8818;
    }
    .body-wrapper .panel .aside .list .item {
        height: 23px;
        line-height: 23px;
        width: 100%;
        margin-bottom: 17px;
        position: relative;
        cursor: pointer;
        transition: all 0.1s ease-in-out;
    }
    .body-wrapper .panel .aside .list .item:hover {
        color: #a7b320;
    }
    .body-wrapper .panel .aside .list .item.selected {
        font-weight: bold;
    }
    .body-wrapper .panel .aside .list .item.selected::after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        right: -14px;
        width: 3px;
        height: 23px;
        background: #e2d307;
    }
    .body-wrapper .panel .aside .list .item.selected:hover {
        color: #7f8818;
    }
    .body-wrapper .panel .aside .log-out {
        position: relative;
        margin-top: 163px;
        font-size: 11px;
        color: #e53935;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
    }
    .body-wrapper .panel .aside .log-out:hover {
        color: #eb6562;
        text-decoration: underline;
    }
    .body-wrapper .panel .aside::before {
        content: "";
        display: block;
        width: 5px;
        height: 600px;
        background: #e2d307;
        border-radius: 10px 0px 0px 10px;
        position: absolute;
        top: 0;
        left: -5px;
    }
    .body-wrapper .panel .view {
        width: 912px;
        height: 600px;
        background: white;
        float: left;
        padding: 65px 77px;
        box-sizing: border-box;
        position: relative;
    }
    .body-wrapper .panel .view .sub-title {
        position: absolute;
        font-size: 9px;
        letter-spacing: 5px;
        opacity: 0.4;
        color: #7f8818;
        font-weight: bold;
        top: 22px;
        right: 32px;
    }
    .body-wrapper .panel .view .main-title {
        font-size: 32px;
        letter-spacing: 10px;
        color: #e2d307;
        font-weight: light;
    }
    .body-wrapper .panel .view .seperator,
    .body-wrapper .panel .view .min-seperator {
        width: 600px;
        height: 1px;
        background: #7f8818;
        opacity: 0.25;
        margin-top: 10px;
        margin-bottom: 45px;
    }
    .body-wrapper .panel .view .min-seperator {
        width: 380px;
        margin-left: 78px;
        margin-top: 80px;
        margin-bottom: 45px;
    }
    .body-wrapper .panel .view .health-charts {
        max-width: 600px;
        height: auto;
    }
    .body-wrapper .panel .view .health-charts .chart {
        position: relative;
        width: 33.33%;
        height: auto;
        float: left;
        text-align: center;
    }
    .body-wrapper .panel .view .health-charts .chart .title {
        font-size: 14px;
        line-height: 10px;
        color: #7f8818;
    }
    .body-wrapper .panel .view .health-charts .chart .info {
        position: relative;
        width: 100%;
    }
    .body-wrapper .panel .view .health-charts .chart .info .percentage {
        line-height: 96px;
        color: #7f8818;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        margin-top: 33px;
    }
    .body-wrapper .panel .view .health-charts .chart.system .info .percentage {
        background-image: url(https://raw.githubusercontent.com/mhmoodlan/Designs-to-Code/master/Admin-Panel/assets/img/chart-1.png);
    }
    .body-wrapper .panel .view .health-charts .chart.network .info .percentage {
        background-image: url(https://raw.githubusercontent.com/mhmoodlan/Designs-to-Code/master/Admin-Panel/assets/img/chart-2.png);
    }
    .body-wrapper .panel .view .health-charts .chart.storage .info .percentage {
        background-image: url(https://raw.githubusercontent.com/mhmoodlan/Designs-to-Code/master/Admin-Panel/assets/img/chart-3.png);
    }
    .body-wrapper .panel .general-settings .set {
        margin-bottom: 25px;
    }
    .body-wrapper .panel .general-settings .set .title {
        font-size: 13px;
        color: #7f8818;
        float: left;
        line-height: 20px;
    }
    .body-wrapper .panel .general-settings .set .value {
        font-size: 13px;
        color: #7f8818;
        line-height: 20px;
        margin-left: 40px;
        float: left;
    }
    .body-wrapper .panel .general-settings .set .value .current {
        float: left;
    }
    .body-wrapper .panel .general-settings .set .value .current .numbers,
    .body-wrapper .panel .general-settings .set .value .current .extra {
        float: left;
    }
    .body-wrapper .panel .general-settings .set .value .current .extra {
        font-size: 8px;
        line-height: 20px;
        margin-left: 5px;
    }
    .body-wrapper .panel .general-settings .set .value .change {
        float: left;
        font-size: 8px;
        color: #a7b320;
        text-decoration: underline;
        line-height: 20px;
        margin-left: 12px;
        cursor: pointer;
    }
    .body-wrapper .panel .general-settings .set .value .change:hover {
        color: #7f8818;
    }
    .body-wrapper .panel .general-settings .set .value select {
        border: none;
        color: #7f8818;
        border-bottom: 1px solid #7f8818;
        font-size: 12px;
    }
    .body-wrapper .panel .general-settings .set .value select:focus {
        outline: none;
    }

    .clear-fix {
        clear: both;
    }

    ::selection {
        background: #FFF498;
    }

    ::-moz-selection {
        background: #FFF498;
    }

    img::selection {
        background: transparent;
    }

    img::-moz-selection {
        background: transparent;
    }

    body {
        -webkit-tap-highlight-color: #FFF498;
    }

</style>


</body>
</html>


