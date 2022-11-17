<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?= base_url('/rn/home/img/'.cari('favicon')) ?>"> 
    <meta name="google-site-verification" content="CJ5bLgb6iKq21semH_XgDC2CzXsTQCxBNXiCxssiL1g" />


    <title><?= $judul ?></title> 
    <link rel="stylesheet" href="https://unespadang.ac.id//rn/home/vendor/font-awesome/css/font-awesome.min.css">

    <link href="<?= base_url()?>gaya/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>gaya/css/superfish.css" rel="stylesheet">
    <link href="<?= base_url()?>gaya/css/event_template.css" rel="stylesheet">
    <link href="<?= base_url()?>gaya/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url()?>gaya/css/modstyle.css" rel="stylesheet">
    
    






    <script src="<?=base_url()?>gaya/js/jquery.min.js"></script>
    <script data-dapp-detection="">
        ! function() {
            let e = !1;

            function n() {
                if (!e) {
                    const n = document.createElement("meta");
                    n.name = "dapp-detected", document.head.appendChild(n), e = !0
                }
            }
            if (window.hasOwnProperty("ethereum")) {
                if (window.__disableDappDetectionInsertion = !0, void 0 === window.ethereum) return;
                n()
            } else {
                var t = window.ethereum;
                Object.defineProperty(window, "ethereum", {
                    configurable: !0,
                    enumerable: !1,
                    set: function(e) {
                        window.__disableDappDetectionInsertion || n(), t = e
                    },
                    get: function() {
                        if (!window.__disableDappDetectionInsertion) {
                            const e = arguments.callee;
                            e && e.caller && e.caller.toString && -1 !== e.caller.toString().indexOf("getOwnPropertyNames") || n()
                        }
                        return t
                    }
                })
            }
        }();
    </script>
    <script src="<?=base_url()?>gaya/js/jquery-noconflict.js"></script>
    <script src="<?=base_url()?>gaya/js/jquery-migrate.min.js"></script>
    <script src="<?=base_url()?>gaya/js/k2.frontend.js"></script>
    <script src="<?=base_url()?>gaya/js/jquery.ui.core.min.js"></script>
    <script src="<?=base_url()?>gaya/js/jquery.ba-bbq.min.js"></script>
    <script src="<?=base_url()?>gaya/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="<?=base_url()?>gaya/js/jquery.ui.tabs.js"></script>
    <script src="<?=base_url()?>gaya/js/timetable.js"></script>
    <script src="<?=base_url()?>gaya/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>gaya/js/calnav.js"></script>
    <script src="<?=base_url()?>gaya/js/core.js"></script>
    <script src="<?=base_url()?>gaya/js/keepalive.js"></script>
    <script>
        var j2storeURL = '.html';
    </script>


    <link rel="stylesheet" href="<?= base_url()?>gaya/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url()?>gaya/css/ss.css">
    <link rel="stylesheet" href="<?= base_url()?>gaya/css/custom.css">
    <script src="<?=base_url()?>gaya/js/uikit.js"></script>
    <script src="<?=base_url()?>gaya/js/uikit-core-components.js"></script>
    <script src="<?=base_url()?>gaya/js/social.js"></script>
    <script src="<?=base_url()?>gaya/js/theme.js"></script>

  <style type="text/css">
    #goog-gt-tt {display:none !important;}
    .goog-te-banner-frame {display:none !important;}
    .goog-te-menu-value:hover {text-decoration:none !important;}
    .goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
    body {top:0 !important;}
    #google_translate_element2 {display:none!important;}
  </style>

  <div id="google_translate_element2"></div>
  <script type="text/javascript">
    function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'id',autoDisplay: false}, 'google_translate_element2');}
  </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


  <script type="text/javascript">
    function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
    function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
    function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
  </script>


</head>

<body id="tm-container" class="tm-sidebar-a-left tm-sidebars-1 tm-isblog ">
    <div class="tm-header-bg" style="background-size: cover;background-position-y: bottom; background-image: url(gaya/img/bg-h1.png);"></div>
    <div class="tm-inner-container uk-container uk-container-center">
        <div class="uk-sticky-placeholder uk-hidden-small uk-hidden-touch">
            <div class="uk-sticky-placeholder" style="height: 0px; margin: 0px;">
                <div data-uk-smooth-scroll="" data-uk-sticky="{top:-500}" style="margin: 0px;"><a class="tm-totop-scroller uk-animation-slide-bottom" href=""></a></div>
            </div>
        </div>

        <div id="tm-toolbar" class="tm-toolbar">
            <div class="uk-container uk-container-center uk-clearfix">

                <div class="uk-float-left">
                    <div class="uk-panel">
                     <small  style="color: #fbc7c7;"> 
                        <i class="fa fa-map-marker" aria-hidden="true"></i> 
                            Jl. Veteran No.26B, Purus, Kec. Padang    Barat. | 
                         <i class="fa fa-envelope" aria-hidden="true"></i> 
                            pustikom@unespadang.ac.id  
                     </small>
                        
                    </div>
                </div>

            

                <div class="uk-float-right">
                    <div class="uk-panel">
                        <ul class="uk-subnav uk-subnav-line">

                            <li style="font-family: math;color: #fda4a4;"><a href="#" onclick="doGTranslate('id|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="<?= base_url('rn/home/img/en.png') ?>" height="25" width="32" alt="English"></a> | <a href="#" onclick="doGTranslate('id|id');return false;" title="Indonesian" class="gflag nturl" style="background-position:-300px -300px;"><img src="<?= base_url('rn/home/img/id.png') ?>" height="25" width="32" alt="Indonesian"></a>

                            </li>
                            <!-- <li><a href="#modal-a" class="tm-modal-link" data-uk-modal="{center:true}">Login</a></li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="uk-sticky-placeholder" style="height: 133px; margin: 0px;">
            <div class="tm-header-container" data-uk-sticky="" style="margin: 0px;">
                <div class="tm-header-call">
                    <div class="tm-header uk-flex uk-flex-middle uk-flex-space-between">

                        <a class="tm-logo uk-hidden-small" href="">
                            <img class="" src="<?=base_url()?>gaya/img/logo.png" alt="school and education" width="270" height="40">
                        </a>
                        <a class="tm-logo-small uk-visible-small" href="#">
                            <img class="" src="<?=base_url()?>gaya/img/logo.png" alt="school and education" width="270" height="40">
                        </a>
                        <div class="uk-flex uk-flex-middle uk-flex-space-between ">
                            <div class="uk-hidden-small">
                                <nav class="tm-navbar uk-navbar">
                                   <?= main_menu('Bottom'); ?> 
                                </nav>
                            </div>


                            <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>

                            <div class="tm-call-action uk-hidden-small uk-flex uk-flex-middle">
                                <div class="">

                                    <img src="<?= base_url()?>gaya/img/kd.png" width="90">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tm-minibar">
                    <div class="">


                        
                            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>