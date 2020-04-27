<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
    <title>姜山文明贴吧</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->
    <!--&lt;!&ndash; HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 &ndash;&gt;-->
    <!--&lt;!&ndash; 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 &ndash;&gt;-->
    <!--&lt;!&ndash;[if lt IE 9]>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->

    <!-- 新 Bootstrap4 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    .col-title{
        padding-right: 0; !important;
        padding-left: 0; !important;
    }
    .col-property {
        font-size: 0.6rem;
        padding-right: 0; !important;
        padding-left: 0; !important;
    }
    .push{
        position: fixed;
        bottom: 0;
        border-radius: 50%;
        /*background-color: #fff;*/
        text-align:center;
    }
    .btn-danger.focus, .btn-danger:focus {
        box-shadow: 0 0 0 0.2rem rgba(220,53,69,.0);!important;
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #495057;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff;
    }
    .nav-link {
        color: #ff8600;
    }
</style>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://tiango.oss-cn-hangzhou.aliyuncs.com/pbar/%E6%96%B0%E5%BB%BA%E9%A1%B9%E7%9B%AE.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://tiango.oss-cn-hangzhou.aliyuncs.com/pbar/WechatIMG11.jpeg" alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">

    <ul class="nav nav-tabs" style="margin-top: 1rem;">
        <li class="nav-item">
            <a class="nav-link active" typeId="1" href="javascript:void(0)" >招聘</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" typeId="2" href="javascript:void(0)" >出租</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" typeId="3" href="javascript:void(0)" >其他</a>
        </li>
    </ul>

    <div id="accordion" class="pushList">

    </div>
    <div class="row" style="height: 5rem;"></div>
    <div class="row"><div class="col push">
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalCenter" style="background-color: #f8f9fa03;border-color: #fffefe00;padding:0;">
        <svg t="1585300181862" class="icon" viewBox="0 0 1193 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="13254" width="64" height="64"><path d="M181.12119 1024H1011.151393a596.05811 596.05811 0 1 0-829.821718 0z" fill="#FFA616" p-id="13255"></path><path d="M332.116324 836.050932c-10.736968 3.544242-21.526058 6.723636-32.263027 9.590302v38.778177q0 16.522422-16.313937 16.470301h-19.649695l-2.658181-12.196362c6.827878 0.573333 12.873938 0.88606 18.086058 0.88606s7.453332-2.814545 7.453332-8.339393v-32.627875c-12.769695 2.866666-24.444846 5.212121-34.921207 6.775757l-1.667879-12.97818q22.829088-3.700606 36.484844-6.723636v-34.921208h-36.484844v-12.196362h36.484844v-23.76727q-12.821817 2.658181-29.239996 4.951515l-2.658182-12.196362a265.244816 265.244816 0 0 0 66.97575-15.636362l4.221817 12.039999q-11.623029 4.065454-26.060603 7.974544v26.581815h42.530904c-1.042424-14.437574-1.563636-30.230299-1.563636-47.482418h12.717574c0 18.659392 0.833939 34.452117 1.772121 47.482418h54.727266v12.196362h-53.684842a238.402395 238.402395 0 0 0 5.212121 32.106663c0.833939 3.544242 2.032727 7.713938 3.544242 12.561211a178.254524 178.254524 0 0 0 22.516361-35.077572l10.997574 5.837575a173.667858 173.667858 0 0 1-28.927269 42.739389 82.090899 82.090899 0 0 0 7.818181 15.219392c5.785454 8.65212 10.424241 12.926059 13.655756 12.926059s6.567272-10.111514 9.381817-29.917572l11.153938 5.889696q-6.358787 37.735753-18.60727 37.735753-10.78909 0-23.037573-15.949089a87.198777 87.198777 0 0 1-9.746666-16.835149 143.593922 143.593922 0 0 1-43.416964 26.581815l-6.88-10.997575a130.772105 130.772105 0 0 0 45.34545-27.989087 198.894521 198.894521 0 0 1-6.202424-19.493331 264.51512 264.51512 0 0 1-5.837575-35.286057h-43.521207v31.898178q17.72121-4.638787 32.263027-9.53818z m40.915146-93.036353a241.998759 241.998759 0 0 1 32.471511 25.330906L396.121164 777.727302a203.950278 203.950278 0 0 0-31.741814-26.425451zM429.061766 747.80973h156.624224v11.518787h-52.121206v15.636362h41.332116v44.667873H500.98903l-4.586666 8.183029c-2.501818 4.32606-3.961212 6.879999-4.430302 7.609696h95.850897v11.67515h-38.100601a59.157569 59.157569 0 0 1-19.493331 27.311512q27.989088 8.495757 55.300599 19.284846l-7.974544 10.424242q-28.145451-12.039999-58.844842-21.995149-25.174542 13.499392-82.768474 21.265452l-4.74303-10.997575q47.430297-5.681211 71.406052-14.906665-21.995149-6.723636-44.146662-11.67515 2.345454-3.231515 12.039999-18.450907h-43.729692v-11.67515h50.818176l9.06909-15.636361h-46.596358v-44.667874h41.279995v-15.636362h-52.121206z m52.121206 60.92969v-22.46424h-28.927269V809.000026z m55.665448 38.46545h-51.808479c-3.544242 5.576969-6.358787 9.95515-8.495756 13.134544q19.284846 4.221818 40.029086 10.111514a46.909085 46.909085 0 0 0 20.275149-23.246058z m-15.636362-72.135749v-15.636362h-27.67636v15.636362z m0 33.670299v-22.46424h-27.67636V809.000026z m41.279995 0v-22.46424h-29.083633V809.000026zM616.541744 795.135785l14.020604-49.306661 12.561211 2.13697-10.111514 34.921208h31.272723a397.476316 397.476316 0 0 0 8.495757-43.416965l12.97818 1.615758c-2.136969 13.916362-4.899393 27.884845-8.339393 41.696964h82.924839v12.248484h-86.573323q-3.700606 12.561211-6.723636 20.170906h72.500597v10.997575a90.221807 90.221807 0 0 1-28.927269 41.696965 283.591481 283.591481 0 0 0 52.486055 23.3503l-6.567272 11.570907a284.686026 284.686026 0 0 1-56.343024-27.103027 257.374514 257.374514 0 0 1-53.893327 28.041209l-6.723635-11.883635a243.510274 243.510274 0 0 0 49.619388-23.923633 96.528473 96.528473 0 0 1-29.448482-34.55636 182.42422 182.42422 0 0 1-49.932115 66.610901l-6.567272-11.67515q38.621814-33.878784 57.333327-93.192716z m52.642418 31.898178a94.495746 94.495746 0 0 0 30.28242 33.461814 83.758778 83.758778 0 0 0 27.103027-33.461814z m46.075146-86.156353a211.664217 211.664217 0 0 1 31.689693 29.239996l-9.016969 9.06909a197.695734 197.695734 0 0 0-31.272723-29.969693zM866.932017 787.317604h12.248483V809.000026h49.984236v59.522417q0 16.626665-16.678786 16.678786h-16.678785l-3.179394-11.883635 15.636362 0.364848c5.681211 0 8.495757-2.60606 8.495756-7.81818v-44.980601h-37.735753v82.403626h-12.248483v-82.455747h-37.892117v65.568477h-12.248483v-67.757568a258.677545 258.677545 0 0 1-28.875148 25.539391l-8.183029-10.424241a196.288461 196.288461 0 0 0 53.16363-57.333327h-47.273934v-12.404847h54.206054a164.963616 164.963616 0 0 0 9.746665-23.76727l12.926059 1.615758a207.338157 207.338157 0 0 1-8.495756 22.151512h85.947868v12.404847h-92.150292a208.849672 208.849672 0 0 1-22.359997 32.784239h41.696965z" fill="#FFFFFF" p-id="13256"></path><path d="M398.153891 603.694596a11.25818 11.25818 0 0 1-10.84121-14.124847l42.583025-158.969677a10.945453 10.945453 0 0 1 3.02303-5.524848l268.684816-268.736937a52.798782 52.798782 0 0 1 74.533324 0l58.115144 58.115144a52.74666 52.74666 0 0 1 0 74.533324l-268.372088 268.372089a11.831514 11.831514 0 0 1-5.212121 3.231515L401.333285 603.329748a10.945453 10.945453 0 0 1-3.179394 0.364848zM450.952673 438.939465l-36.901814 137.599983 137.704226-36.901814L818.302932 273.089788a30.178178 30.178178 0 0 0 0-42.739389l-58.063024-58.115145a30.282421 30.282421 0 0 0-42.739389 0z" fill="#FFFFFF" p-id="13257"></path><path d="M781.818087 336.990386a11.206059 11.206059 0 0 1-7.974544-3.283636L656.727193 216.955249a11.25818 11.25818 0 1 1 15.636362-15.636362l116.69938 116.751501a11.25818 11.25818 0 0 1-7.244848 18.919998z" fill="#FFFFFF" p-id="13258"></path><path d="M650.993861 647.841258H353.642382a11.25818 11.25818 0 1 1 0-22.46424h297.351479a11.25818 11.25818 0 0 1 0 22.46424z" fill="#FFFFFF" p-id="13259"></path></svg>
    </button>
    </div></div>
</div>

<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">我要发布</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <font color="#dc143c">注意您发布的信息只保留四天</font>
                <form>
                    <div class="form-group">
                        <label for="title">标题<font color="#dc143c">*</font></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="请输入标题，最多40字">
                    </div>
                    <div class="form-group">
                        <label for="type">发布类型<font color="#dc143c">*</font></label>
                        <select class="form-control" id="type" name="type">
                            <option value="0">请选择发布类型</option>
                            <option value="1">招聘</option>
                            <option value="2">出租</option>
                            <option value="3">其他</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">联系人<font color="#dc143c">*</font></label>
                        <input type="text" class="form-control" id="name" name="linkName" placeholder="请输入联系人，最多10字">
                    </div>
                    <div class="form-row">

                        <div class="form-group col-3">
                            <label for="linkType">联系方式<font color="#dc143c">*</font></label>
                            <select class="form-control" id="linkType" name="linkType">
                                <option value="1">手机</option>
                                <option value="2">微信</option>
                                <option value="3">QQ</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label for="linkType">请输入正确的号码<font color="#dc143c">*</font></label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="请输入联系方式">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">发布内容<font color="#dc143c">*</font></label>
                        <textarea class="form-control" id="content" rows="7" name="content" placeholder="请输入发布内容，最多300字"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary send">发布</button>
            </div>
        </div>
    </div>
</div>



<!--<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
<script>
    var page = 1;
    var type = 1;
    var num = 0;
    var LoadData = {
        loading : function () {
            var str = '';
            str += '<div class="loading">';
            str += '<img src="'+oSrc+'" alt="" class="img"/>';
            str += '<div class="text">'+oText+'</div>';
            str += '</div>';
        },

        loadingEnd : function(){
            $('.loading').remove();
        },

        request : function () {
            // this.loading();
            $.ajax({
                url : 'https://api.tiangotech.com/?c=pbar&a=getPushListByPage&type='+type+'&page='+page,
                type : 'get',
                dataType: 'json'
            }).done(function (e) {
                if (e.err_code != 0) {
                    alert(e.msg);
                    return;
                }else {

                    var pushList = e.data;

                    var pushListHtml = "";
                    if (pushList.length > 0) {
                        page++;
                        for (i = 0; i < pushList.length; i++) {
                            num++;
                        pushListHtml = '<div class="card">\n' +
                            '            <div class="card-header" dateId='+num+' id="heading' + (num) + '">\n' +
                            '                <h5 class="mb-0">\n' +
                            '                    <div class="row" data-toggle="collapse" data-target="#collapse' + (num) + '" aria-expanded="true" aria-controls="collapse' + (num) + '">\n' +
                            '                        <div class="col col-title">\n' +
                            '                            <h6>' + pushList[i].title + '</h6>\n' +
                            '                        </div>\n' +
                            '                        <div class="w-100"></div>\n' +
                            '                        <div class="col col-property">\n' +
                            '                            <span>联系人：</span>\n' +
                            '                            <span>' + pushList[i].linkName + '</span>\n' +
                            '                        </div>\n' +
                            '                        <div class="col col-property">\n' +
                            '                            <span>' + pushList[i].linkType + '：</span>\n' +
                            '                            <span>' + pushList[i].link + '</span>\n' +
                            '                        </div>\n' +
                            '                        <div class="col col-property">\n' +
                            '                            <span>发布时间：</span>\n' +
                            '                            <span>' + pushList[i].pushdate + '</span>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </h5>\n' +
                            '            </div>\n' +
                            '\n' +
                            '            <div style="background-color: cornsilk;" id="collapse' + (num) + '" class="collapse" aria-labelledby="heading' + (num) + '" data-parent="#accordion">\n' +
                            '                <div class="card-body" style="padding-bottom: 0;"><pre style="font-size: 100%;background-color: cornsilk;white-space: pre-wrap;word-wrap: break-word;">\n' + pushList[i].content + '</pre>' +

                            '                </div>\n' +
                            '            </div>\n' +
                            '        </div>';
                        $('.pushList').append(pushListHtml);
                    }
                    }else{
                        return;
                    }
                }
            })
        }
    };



    $(function () {
        var openid = GetUrlParam('openid'); //|| localStorage.getItem("PBar_openid");
        if (GetUrlParam('openid')) {
            var from = GetUrlParam('from') || "";
            if (from == 'singlemessage') {
                openid = "";
            } else {
                localStorage.setItem("PBar_openid",openid);
            }
        }

        if (!openid) {
            var redirect_uri = encodeURIComponent("https://ld.tiangotech.com/PBar/index.html");//回调地址
            var return_params = "openid";//回调微信参数
            var app = "TG_PUB";//应用
            var url = encodeURIComponent("https://api.tiangotech.com/?c=WechatLogin&a=getUserinfoByCode&app="+app+"&return_params="+return_params+"&redirect_uri="+redirect_uri);
            window.location.href = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx237638e0e122c49f&redirect_uri="+url+"&response_type=code&scope=snsapi_userinfo&state=redirect_uri#wechat_redirect";
        }else {
            url = location.href.split('#')[0];
            url = encodeURIComponent(url);
            wxInit(encodeURIComponent(url));

            window.onscroll = function(){
                var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
                var windowHeight = document.documentElement.clientHeight || document.body.clientHeight;
                var scrollHeight = document.documentElement.scrollHeight||document.body.scrollHeight;
                if(scrollTop+windowHeight == scrollHeight){
                    LoadData.request(type,page);
                }
            };

            $.ajax({
                url: 'https://api.tiangotech.com/?c=pbar&a=init&openid='+openid+"&type=1",
                type: "GET",
                async: false,
                success: function (e) {
                    e = JSON.parse(e);
                    if (e.err_code != 0) {
                        alert(e.msg);
                        return;
                    }else{
                        var pushList = e.data;
                        var pushListHtml = "";
                        for (i=0;i<pushList.length;i++){
                            num++;
                            pushListHtml += '<div class="card">\n' +
                                '            <div class="card-header" dateId='+num+'  id="heading'+(num)+'">\n' +
                                '                <h5 class="mb-0">\n' +
                                '                    <div class="row">\n' +
                                '                        <div class="col col-title">\n' +
                                '                            <h6>'+pushList[i].title+'</h6>\n' +
                                '                        </div>\n' +
                                '                        <div class="w-100"></div>\n' +
                                '                        <div class="col col-property">\n' +
                                '                            <span>联系人：</span>\n' +
                                '                            <span>'+pushList[i].linkName+'</span>\n' +
                                '                        </div>\n' +
                                '                        <div class="col col-property">\n' +
                                '                            <span>'+pushList[i].linkType+'：</span>\n' +
                                '                            <span>'+pushList[i].link+'</span>\n' +
                                '                        </div>\n' +
                                '                        <div class="col col-property">\n' +
                                '                            <span>发布时间：</span>\n' +
                                '                            <span>'+pushList[i].pushdate+'</span>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </h5>\n' +
                                '            </div>\n' +
                                '\n' +
                                '            <div style="background-color: cornsilk;" id="collapse'+(num)+'" class="collapse">\n' +
                                '                <div class="card-body" style="padding-bottom: 0;"><pre style="font-size: 100%;background-color: cornsilk;white-space: pre-wrap;word-wrap: break-word;">\n' +pushList[i].content+'</pre>'+

                                '                </div>\n' +
                                '            </div>\n' +
                                '        </div>';
                        }
                        $('.pushList').html(pushListHtml);
                    }
                }
            });

            $('.nav-link').click(function () {
                num = 0;
                type = $(this).attr('typeId');
                console.log(type);
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
                $.ajax({
                    url: 'https://api.tiangotech.com/?c=pbar&a=init&type='+type+'&openid='+openid,
                    type: "GET",
                    async: false,
                    success: function (e) {
                        e = JSON.parse(e);
                        if (e.err_code != 0) {
                            alert(e.msg);
                            return;
                        }else{
                            var pushList = e.data;
                            var pushListHtml = "";
                            for (i=0;i<pushList.length;i++){
                                num++;
                                pushListHtml += '<div class="card">\n' +
                                    '            <div class="card-header" dateId='+num+' id="heading'+(num)+'">\n' +
                                    '                <h5 class="mb-0">\n' +
                                    '                    <div class="row" data-toggle="collapse" data-target="#collapse'+(num)+'" aria-expanded="true" aria-controls="collapse'+(num)+'">\n' +
                                    '                        <div class="col col-title">\n' +
                                    '                            <h6>'+pushList[i].title+'</h6>\n' +
                                    '                        </div>\n' +
                                    '                        <div class="w-100"></div>\n' +
                                    '                        <div class="col col-property">\n' +
                                    '                            <span>联系人：</span>\n' +
                                    '                            <span>'+pushList[i].linkName+'</span>\n' +
                                    '                        </div>\n' +
                                    '                        <div class="col col-property">\n' +
                                    '                            <span>'+pushList[i].linkType+'：</span>\n' +
                                    '                            <span>'+pushList[i].link+'</span>\n' +
                                    '                        </div>\n' +
                                    '                        <div class="col col-property">\n' +
                                    '                            <span>发布时间：</span>\n' +
                                    '                            <span>'+pushList[i].pushdate+'</span>\n' +
                                    '                        </div>\n' +
                                    '                    </div>\n' +
                                    '                </h5>\n' +
                                    '            </div>\n' +
                                    '\n' +
                                    '            <div style="background-color: #fffbed;" id="collapse'+(num)+'" class="collapse" aria-labelledby="heading'+(num)+'" data-parent="#accordion">\n' +
                                    '                <div class="card-body" style="padding-bottom: 0;"><pre style="font-size: 100%;white-space: pre-wrap;word-wrap: break-word;">' +pushList[i].content+'</pre>'+

                                    '                </div>\n' +
                                    '            </div>\n' +
                                    '        </div>';
                            }
                            $('.pushList').html(pushListHtml);
                        }
                    }
                });
            });

            $('.send').click(function () {
                var data = $('form').serializeObject();
                if (data.title.length<=0) {
                    alert("必须要输入标题！");
                    return;
                }
                if (data.type == 0) {
                    alert("请先选择发布类型！");
                    return;
                }
                if (data.linkName.length<=0) {
                    alert("必须要输入联系人！");
                    return;
                }
                if (data.link.length<=0) {
                    alert("必须要输入联系方式！");
                    return;
                }
                if (data.content.length<=0) {
                    alert("必须要输入发布内容！");
                    return;
                }
                data.openid = openid;
                $.ajax({
                        url: 'https://api.tiangotech.com/?c=pbar&a=push',
                        type: "POST",
                        data: data,
                        async: false,
                        success: function (e) {
                            e = JSON.parse(e);
                            if (e.err_code != 0) {
                                alert(e.msg);
                                return;
                            }else{
                                alert("发布成功！");
                                location.reload();
                            }
                        }
                });

            });

            $('.pushList').on('click','.card-header',function () {
                ID = $(this).attr('dateId');
                $('.collapse').slideUp(1200);
                $('#collapse'+ID).slideDown(1200);
            });
        }

        $.fn.serializeObject = function() {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function () {
                if (o[this.name]) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };

        function  wxInit(url="") {
            $.ajax({
                url:'https://api.tiangotech.com/?c=WechatApi&a=getSignPackage&app=TG_PUB&url='+url,
                type:"GET",
                data:true,
                async:false,
                success:function(e){
                    e = JSON.parse(e);
                    if (e.err_code == 0){
                        console.log(e.data)
                        wx.config({
                            debug: false,
                            appId: e.data.appId, // 必填，公众号的唯一标识
                            timestamp: e.data.timestamp, // 必填，生成签名的时间戳
                            nonceStr: e.data.nonceStr, // 必填，生成签名的随机串
                            signature: e.data.signature,// 必填，签名
                            jsApiList: ['checkJsApi','onMenuShareTimeline','onMenuShareAppMessage','showMenuItems','hideAllNonBaseMenuItem'] // 必填，需要使用的JS接口列表
                        });
                        wx.checkJsApi({
                            jsApiList: ['checkJsApi','onMenuShareTimeline','onMenuShareAppMessage','showMenuItems','hideAllNonBaseMenuItem'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
                            success: function(res) {
                            }
                        });
                        wx.ready(function () {   //需在用户可能点击分享按钮前就先调用
                            wx.hideAllNonBaseMenuItem();
                            wx.ready(function () {   //需在用户可能点击分享按钮前就先调用

                                    wx.hideAllNonBaseMenuItem();
                                    wx.showMenuItems({
                                        menuList: ["menuItem:share:appMessage", "menuItem:share:timeline", "menuItem:favorite"] // 要显示的菜单项，所有menu项见附录3
                                    });

                                        wx.onMenuShareTimeline({
                                            title: "姜山文明贴吧", // 分享标题
                                            link: document.location.toString(), // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                                            imgUrl: 'https://tiango.oss-cn-hangzhou.aliyuncs.com/pbar/WechatIMG9.jpeg', // 分享图标
                                            success: function () {
                                                // 用户点击了分享后执行的回调函数
                                                alert('分享成功')
                                            },
                                        });

                                        wx.onMenuShareAppMessage({
                                            title: '姜山文明贴吧', // 分享标题
                                            desc: '姜山居民免费的供求信息发布平台', // 分享描述
                                            link: document.location.toString(), // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                                            imgUrl: 'https://tiango.oss-cn-hangzhou.aliyuncs.com/pbar/WechatIMG9.jpeg', // 分享图标
                                            type: '', // 分享类型,music、video或link，不填默认为link
                                            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                                            success: function () {
                                                alert('分享成功')
                                            }
                                        });

                            });
                        });
                    }
                }
            });
        }

        function GetUrlParam(paraName) {
            var url = document.location.toString();
            var arrObj = url.split("?");
            if (arrObj.length > 1) {
                var arrPara = arrObj[1].split("&");
                var arr;
                for (var i = 0; i < arrPara.length; i++) {
                    arr = arrPara[i].split("=");
                    if (arr != null && arr[0] == paraName) {
                        return arr[1];
                    }
                }
                return ""
            }else {
                return ""
            }
        }
        function loadJS(url, success) {
            var domScript = document.createElement('script');
            domScript.src = url;
            success = success || function () {};
            domScript.onload = domScript.onreadystatechange = function () {
                if (!this.readyState || 'loaded' === this.readyState || 'complete' === this.readyState) {
                    success();
                    this.onload = this.onreadystatechange = null;
                    this.parentNode.removeChild(this);
                }
            }
            document.getElementsByTagName('head')[0].appendChild(domScript);
        }
    });
</script>
</body>
</html>