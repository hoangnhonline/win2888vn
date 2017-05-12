<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/owl.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/sli.css">  
<style>
html {
	font-family: arial, sans-serif;
	line-height: 1.45;
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}
.hotline i{
	padding:0 5px
}
/*!
*  Font Awesome 4.5.0 by @davegandy - http://fontawesome.io - @fontawesome
*  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
	*/@font-face{font-family:'FontAwesome';src:url(//bizweb.dktcdn.net/100/126/593/themes/162650/assets/fontawesome-webfont.eot?1475046671880);src:url(//bizweb.dktcdn.net/100/126/593/themes/162650/assets/fontawesome-webfont.eot?1475046671880) format('embedded-opentype'),url(//bizweb.dktcdn.net/100/126/593/themes/162650/assets/fontawesome-webfont.ttf?1475046671880) format('truetype'),url(//bizweb.dktcdn.net/100/126/593/themes/162650/assets/fontawesome-webfont.svg?1475046671880) format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1);-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}
h1{font-size:22px}h2{font-size:20px} h3{font-size:14px}
	.content ul, .content ol{
	margin-left:25px;
	margin-bottom:15px;
	margin-top:15px;
}
.content p{
	text-align:justify
}
.content em, .content i{font-style:italic}
.content{padding:10px 0px;line-height:1.75}
.content a{color:#ff0000}
.alignnone {
margin: 5px 20px 20px 0;
}
.aligncenter, div.aligncenter {
display:block;
margin: 5px auto 5px auto;
}
.alignright {
float:right;
margin: 5px 0 20px 20px;
}
.alignleft {
float:left;
margin: 5px 20px 20px 0;
}
.aligncenter {
display: block;
margin: 5px auto 5px auto;
}
a img.alignright {
float:right;
margin: 5px 0 20px 20px;
}
a img.alignnone {
margin: 5px 20px 20px 0;
}
a img.alignleft {
float:left;
margin: 5px 20px 20px 0;
}
a img.aligncenter {
display: block;
margin-left: auto;
margin-right: auto
}
.wp-caption {
background: #fff;
border: 1px solid #f0f0f0;
max-width: 96%; /* Image does not overflow the content area */
padding: 5px 3px 10px;
text-align: center;
}
.wp-caption.alignnone {
margin: 5px 20px 20px 0;
}
.wp-caption.alignleft {
margin: 5px 20px 20px 0;
}
.wp-caption.alignright {
margin: 5px 0 20px 20px;
}
.wp-caption img {
border: 0 none;
height: auto;
margin:0;
max-width: 98.5%;
padding:0;
width: auto;
}
.wp-caption p.wp-caption-text {
font-size:11px;
line-height:17px;
margin:0;
padding:0 4px 5px;
}
/* pagination */
.navigation{display:inline-block;width:100%;margin: 10px 0;
    text-align: center;}
.navigation ul{    margin: 0;
    list-style: none;
    display: inline-block;}
	.woocommerce nav.woocommerce-pagination ul{   margin: 0;
    list-style: none;
    display: inline-block;}
	.woocommerce nav.woocommerce-pagination ul li span.current{background: #36b3d6;
    color: #FFF;}
	.woocommerce-pagination ul li a, .woocommerce-pagination ul li .current{ position: relative;
    float: left;
    padding: 5px 12px !important;
    line-height: 1.42857 !important;
    color: #555;
    text-decoration: none;
    background-color: #fafafa;}
	.woocommerce-pagination ul li:hover a{background: #36b3d6;
    color: #FFF}
	.navigation ul li{display:inline-block}
	.navigation ul li a{    position: relative;
    float: left;
    padding: 5px 12px;
    margin-left: -5px;
    line-height: 1.42857;
    color: #555;
    text-decoration: none;
    background-color: #fafafa;
    border: 1px solid #ccc;}
	.navigation ul li.next a, .navigation ul li.prev a{
		color: rgba(0,0,0,0);
    font-size: 0px;
	}
	.woocommerce-pagination ul li:hover .next-1, .woocommerce-pagination ul li:hover .prev-1{color:#fff!important}
	a.next, a.prev{
		color: rgba(0,0,0,0)!important;
    font-size: 0px!important;
	}
	a.next span.next-1, a.prev span.prev-1 {
		    color: #343434!important;
    font-size: 14px !important;
	}
	
	.navigation ul li.next a span.next-1, .navigation ul li.prev a span.prev-1{
		    color: #343434;
    font-size: 14px;
	}
		.navigation ul li:hover a{  background: #36b3d6;
    color: #FFF;transition:.5s}
	 .navigation ul li:hover a span{color:#fff!important}
	.navigation ul li.active a{    background: #36b3d6;
    color: #FFF;}
div.wpcf7-validation-errors{
	color:#36b3d6!important;
	border:0px!important
}
	/* end pagination */
.content h1{
margin-bottom:30px
}
.content h2{
margin-bottom:20px
}
.content h3, .content h4, .content h5, .content h6{
margin-bottom:12px
}
.content h3{
font-size:18px
}
.content h4{
font-size:16px
}
.content img{    max-width: 100%;height:auto}
.content{ 
    margin-bottom: 20px;}
.content a{color:#0000ff}
.content b, .content strong{font-weight:700}
.content p{margin-bottom:12px}
.content i, .content em, .content dfn, .content cite{font-style:italic}
.content table>thead>tr, table>tbody>tr, table>tbody>tr {
border-top:1px solid #343434;
}
.content table>thead>tr>td, table>tbody>tr>td, table>tbody>tr>td{
	padding:5px 10px
}
.content table thead tr:first-child {background: #f9f9f9}
.content table tbody tr:nth-child(even) {background: #f9f9f9}
.content table{border-collapse: collapse;}
blockquote {
	border-left: 4px solid #707070;
	color: #707070;
	font-size: 20px;
	font-style: italic;
	line-height: 1.8182;
	margin: 0 0 35px -21px;
	padding-left: 17px;
}

blockquote > blockquote {
	margin-left: 0;
}

blockquote p {
	margin-bottom: 35px;
}

blockquote > p:last-child {
	margin-bottom: 0;
}

blockquote cite,
blockquote small {
	color: #333;
	font-family: "Noto Sans", sans-serif;
	font-size: 17px;
	line-height: 1.6471;
}

blockquote em,
blockquote i,
blockquote cite {
	font-style: normal;
}

blockquote strong,
blockquote b {
	font-weight: 400;
}
.content strong{font-weight:700}

*{
	    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
nav div form input:focus{
	outline:0;
	border: 1px solid #dbdbdb;
}
img {
	max-width:100%;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none;
}

a{
	text-decoration:none;
}
body{font-family:arial;font-size:14px;margin:0}
header{
	display:inline-block;
	width:100%;
	padding: 15px;
	background:url(<?php echo get_template_directory_uri();?>/assets/images/header-pic.png)no-repeat right;
	    background-size: cover;
}
.container{
	max-width:1180px;
	margin:auto;
	padding:0 15px
}
.logo{
	display:inline-block;
	width:100%
}
.metaslider-22{
	margin:auto
}
nav.menu{
	    background: #36b3d6;
    display: inline-block;
    width: 100%;
	    margin-bottom: -5px;
		z-index:20;
		position:relative;
}
.menu-menu-container{
	float:left
}
#menu-menu, #menu-menu .sub-menu, #menu-menu .sub-menu .sub-menu{
	    padding: 0;
    margin: 0;
    list-style: none;
}
#menu-menu li{
	    display: inline-block;
    padding: 12px 18px;
	position:relative;
}
#menu-menu li a{
	    color: #fff;
    text-transform: uppercase;
}
.sub-menu{
	display:none;
	position:absolute;
	background:rgba(255, 255, 255, 0.73);
	left:0;
	    top: 100%;
    width: 290px;
	border-left:1px solid #36b3d6;
	margin:-2px!important;
}
.sub-menu a{
	color:#333!important;
	text-transform:none!important;
	    padding: 5px 10px;
    display: inline-block;
}
.sub-menu li{
	display:block!important;
	position:relative;
	    padding: 6px 17px!important;
}
.sub-menu .sub-menu{
    right: -100%;
    left: inherit!important;
    top: 0;
}
.show{
	display:block!important
}
nav form{
	    float: right;
    position: relative;
    padding: 6px 0;
}
nav form input{
	border: 1px solid #dbdbdb;
    background: none;
    border-radius: 30px;
    padding: 7px 15px;
    width: 290px;
	color:#fff
}
nav form input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #fff;
}
nav form input::-moz-placeholder { /* Firefox 19+ */
  color: #fff;
}
nav form input:-ms-input-placeholder { /* IE 10+ */
  color: #fff;
}
nav form input:-moz-placeholder { /* Firefox 18- */
  color: #fff;
}
nav form input:focus{
	border: 1px solid #dbdbdb;
}
nav form button{
	    border: 0px;
    background: none;
    position: absolute;
    right: 5px;
    top: 27%;
    color: #dbdbdb;
}
.metaslider-53{
	margin:auto;
	overflow:hidden;
	max-width:100%!important
}
/*------------------
[9. Owl carousel]
*/
.owl-controls{
    
}
.owl-controls .owl-prev{
    position: absolute;

    top: 50%;
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.owl-controls .owl-next{
    position: absolute;

    top: 50%;
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.owl-controls .owl-prev,
.owl-controls .owl-next{
     width: 20px;
    height: 20px;
    text-align: center;
    background: rgba(0, 0, 0, 0.4);
    color: #fff;
}
.owl-controls .owl-prev i,
.owl-controls .owl-next i{
	font-size:16px
}
.owl-controls .owl-prev .fa,
.owl-controls .owl-next .fa{
    padding-top: 3px;
}
.owl-stage{margin:auto}
.dt-slider .owl-controls{
	position: relative;
    display: inline-block;
    width: 100%;
    top: -55px!important;
}
.dt-slider{list-style:none;padding: 0 20px;}
.dt-slider li img{
	width:205px!important;
	height:75px;
    margin: auto;
}
.dt-slider li img:hover{
	filter:grayscale(100%);
}

.da-slider .owl-controls{
	position: relative;
    display: inline-block;
    width: 100%;
    top: -170px!important;
}
.da-slider{list-style:none;padding: 0 20px;}
.da-slider li{
	padding:1px
}

.da-slider li img{
	width:300px!important;
	height:205px;
    margin: auto;
	border: 5px solid #fff;
}
.owl-prev{
	    left: -2%;
}
.owl-next{
	 right: -2%;
}
.cat-house{
	    list-style: none;
    padding: 0;
    margin: 0;
	display:inline-block;
	width:100%
}
.cat-house li{
	    float: left;
    padding: 10px;
    text-align: center;
	width:25%;
}
.cat-house li .img{
	    overflow: hidden;
    height: 200px;
	position:relative;
}
.cat-house li .img img{
	    height: 100%;
    width: auto;
    border-radius: 50%;
	    padding: 7px;
    border: 1px solid #2bb6d7;
}
.cat-house li .img .hover{
    top: 8px;
    position: absolute;
    background: rgba(88, 150, 201, 0.58);
    border-radius: 50%;
    width: 183px;
    margin: auto;
    height: 183px;
    left: 16%;
	display:none
}
.cat-house li .img .hover i{
	    top: 39%;
    position: absolute;
    left: 25%;
    font-size: 41px;
    right: 25%;
	color:#fff
}
.cat-house li h3{
	    text-align: center;
    text-transform: uppercase;
    color: #333;
}
.cat-house li:hover .hover{
	display:block
}
.h1{
	    text-align: center;
    color: #038cad;
    padding: 25px 0;
}
.hide{
	display:none!important
}
footer{
	    background: url(<?php echo get_template_directory_uri();?>/assets/images/hinh-footer.png)no-repeat;
    display: inline-block;
    width: 100%;
	color: #fff;
	    margin-bottom: -5px;
		background-size:cover
}
.info{
    width: 50%;
    float: left;
    padding: 40px 10px;
    overflow: hidden;
    line-height: 1.8;
    color: #dbeaf0;
}
.info span{
	display:block
}
.info strong{
	    font-size: 16px;
    padding: 15px 0 22px 0;
    display: inline-block;
    color: #fff;
	text-transform:uppercase
}
.info:last-child{
	padding-top:50px
}
.text{
	    background: #000;
    color: #fff;
    font-style: italic;
    text-align: center;
    padding: 7px;
}
.breadcrumb{
	padding: 20px 10px;
    font-weight: bold;
}
.breadcrumb .current{
	color: #36b3d6;
}
.breadcrumb a{
	color:#333
}
.page-title{

	    margin-top: 0px;
		font-size:20px;
	
}
.page-title i{
	color:#c8c8c8;
	border:1px solid #c8c8c8;
	border-bottom:0;
	padding:7px
}
.page-title span{
	    text-transform: uppercase;
    color: #139ca7;
    font-size:20px;
    padding-left: 15px;
}

.page-title:after{
	content:'';
	display:block;
	width:100%;
	background:#c8c8c8;
	    height: 1px;
}
section:first-child{
	width:75%;
	float:left;
	padding-right:15px
}
section:nth-child(2){
	width:25%;
	float:left;
}
.more-link{
	display:none;
}
.cat-rel{
	padding-left:12px
}
.cat-rel li{
	padding-bottom:12px
}
.cat-rel li:hover a{
	color:#0c6f87
}
.cat{
	display:inline-block;
	width:100%;
	padding-left:12px
}
.cat{
	display:inline-block;
	width:100%;
	list-style:none;
	margin:0;
	padding:0
}
.cat li{
	display:inline-block;
	width:100%;
	padding:10px 0
}
.cat li .thumb{
	float:left;
	width:40%;
	height:190px
}
.cat li .thumb img{
	    width: 100%;
    height: 100%;
}
.cat li .tomtat{
	width:60%;
	float:left;
	padding-left:15px
}

a{
	color:#333
}
.products{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
	list-style:none
}
.products li{
	width:33.333%;
	float:left;
	text-align:center;
	padding:15px;
}
.products li h3{
	height:42px;
	overflow:hidden;
	color:#343434;
	text-transform:uppercase;
	font-weight:500
}
.productss{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
}
.productss li{
	float:left;
	text-align:center;
	padding:15px;
}
.productss li h3{
	height:42px;
	overflow:hidden;
	color:#343434;
	text-transform:uppercase;
	font-weight:500
}




.news{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
	list-style:none
}
.news li{
	width:33.333%;
	float:left;
	text-align:center;
	padding:15px;
}
.news li h3{
	height:auto!important;
	overflow:hidden;
	color:#343434;
	text-transform:none!important;
	font-weight:600!important;
	    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
	font-size:16px!important;
}
.news li:hover h3{
	color:#139ca7
}
.news li p {
	text-align:justify
}
.productss{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
}
.news li{
	float:left;
	text-align:center;
	padding:15px;
}
.news li h3{
	height:42px;
	overflow:hidden;
	color:#343434;
	text-transform:uppercase;
	font-weight:500
}



.img-cat{
	    height: 180px;
    overflow: hidden;
}
.img-cat img{
	height:100%!important;
	width:auto;
}
.click {
	    background: #333;
    color: #fff;
    padding: 5px 12px;
    display: inline-block;
    margin: 5px 20px;
}
.products li .fig:hover{
	box-shadow: 0px 0px 5px -1px;
}
.productss li .fig:hover{
	box-shadow: 0px 0px 5px -1px;
}
.fig h3{
	font-weight:600
}
.products li div:hover h3{
	color: #36b3d6
}
#slider3-pager{
	list-style:none;
	margin:0;
	padding:0
}
.gallery{
	float:left;
	width:33.333%
}
.nd{
	float:left;
	width:66.666%;
	padding-left:25px
}
.tabs{
	    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 24px;
    text-transform: uppercase;
}
.title-box{
	    background: #36b3d6;
    color: #fff;
    text-align: center;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 3px 3px 0 0;
	margin:0
}
.box{
	    display: inline-block;
    width: 100%;
    margin: 20px 0;
}
#menu-menu-phai{
	padding: 0 20px;
    margin: 0;
	list-style:none
}
#menu-menu-phai li{
	margin-bottom:12px
}
#menu-menu-phai a{
	color:#333
}
#menu-menu-phai li:hover a{
	color:#36b3d6;
	padding-left:16px
}
#menu-menu-phai li:hover i{
	display:none
}
aside{
	    border: 1px solid #36b3d6;
    border-radius: 5px 5px 0 0;
	margin-bottom:25px
}
.wpcf7-form{
	width:100%
}
.wpcf7-form input[type="text"], .wpcf7-form input[type="tel"], .wpcf7-form input[type="email"], textarea {
	width:100%;
	background:#f7f7f7;
	border : 1px solid #ebebeb;
	color:#9d9d9d;
	border-radius:4px;
	    margin-bottom: 10px;
		padding:10px;
}
.wpcf7-form input[type="submit"] {
	background: #36b3d6;
    border: 0px;
    color: #fff;
    padding: 10px 20px;
    border-radius: 4px;
    text-transform: uppercase;
}
.wpcf7-form input[type="text"]:focus, .wpcf7-form input[type="tel"]:focus, .wpcf7-form input[type="email"]:focus, textarea:focus {
	border:1px solid #36b3d6;
	background:#e6f9fe
}

.fa-align-justify{
	display:none
}

	.hotline a:nth-child(2){
		display:none
	}
@media all and (max-width:1024px){
	.hotline a:nth-child(2){
		display:inline-block;
		border-left:1px solid #fff
	}
		.hotline a:first-child{
		display:inline-block;
		border-right:1px solid #fff
	}
	.hotline a{
		width:50%;
		float:left;
	}
		#closefbchat{
		display:none
	}
	.description{
		width:100%;
		max-width:100%!important;
	}
.hotline {
    float: none;
    width: 100%;
    margin: auto;
    position: fixed;
    bottom: 0;
    background: #36b3d6;
    left: 0;
    width: 100%;
    z-index: 100;
    text-align: center;
    border-top: 1px solid #fff;
}
.logo{
	width:100%
}
.metaslider-44{
	margin:auto
}
#menu-menu li {
    display: block;
    padding: 12px;
    position: relative;
    border-top: 1px solid #fff;
}
.fa-align-justify{
	color: #fff;
    font-size: 24px;
    margin: 10px;
	display:block;
	float:left
}
.menu-menu-container{
	display:none;
	width:100%
}


.sub-menu{
	position:relative;

}
.sub-menu .sub-menu{
	right:0;
	width:100%
}
.sub-menu{
	margin-top:10px!important;
	width: 100%;
}
.info{
	width:100%;
	padding:10px
}
footer{
	padding:20px 0
}
section{
	width:100%!important;
	padding:0!important;
	margin-bottom:40px
}
.text{
	padding-bottom:50px
}
}
@media all and (max-width:360px){
	nav form input{
		width:auto
	}
}
@media all and (max-width:900px) and (min-width:490px) {
	.cat-house li{
		width: 50%;
	}
}
@media all and (max-width:489px){
		.cat-house li{
		width: 100%;
	}

	.text{
		padding-bottom:55px!important
	}
}
@media all and (max-width:600px){
	.cat li {
    border-bottom: 1px solid #d8d8d8;
    margin-bottom: 15px;
}
	.cat li .thumb{
		width:100%
	}
	.cat li .tomtat{
		padding-left:0;
		width:100%
	}
}
@media all and (max-width:1024px) and (min-width:690px){
	.products li{
		width:33.333%!important
	}
	.products li h3{
		height:58px
	}
}
@media all and (max-width:689px) and (min-width:420px){
	.products li{
		width:50%!important
	}
	
}
@media all and (max-width:419px){
		.products li{
		width:100%!important
	}
	.products li h3{
		height:auto
	}
}
@media all and (max-width:700px){
		.nd {
    float: left;
    width: 100%;
    padding-left: 0;
		}
		.gallery{
			float: left;
    width: 100%;
	margin-bottom:20px
		}
		#slider3{
			margin:auto
		}
}
.float {
	float:left
}
.description{
	    text-align: center;
    display: inline-block;
 width:100%;
}
.description form{
    position: relative;
}
.description form input:focus{
	outline:0
}
.description form button:focus{
	outline:0
}
.description form input{
	    padding: 6px 20px;
    border-radius: 10px;
    border: 1px solid #42b0b9;
    width: 100%;
    max-width: 500px;
}
.description form input::placeholder{
	    color: #42b0b9;
}
.description form button{
	    position: absolute;
    background: none;
    border: 0;
    color: #42b0b9;
    margin-left: -30px;
    top: 5px;
}
.hotline{
	    display: inline-block;
    float: right;
    font-size: 17px;
}
.hotline a{
	    padding: 10px;
    display: inline-block;
	color:#fff
}
.sub-menu a i{
	color:#333!important
}
.sub-menu .hver{
	display:none;
	float:left;
	padding:8px
}
.sub-menu li:hover .hver{
	display:block
}
.sub-menu li .sub-menu li .hver{
	display:none;
}
.sub-menu li .sub-menu li:hover .hver{
	display: block;
}
nav.menu ul li.current-menu-item{
	background:#d0972a
}
.paragraph{
	    margin: 30px 0;
}
.clear{
	    height: 10px
}
.title-cat-home{
	font-weight:600;
	text-align:center;
	margin:0;
	font-size:18PX;
	display:inline-block;
	width:100%;
}
.title-cat-home:after{
	content:"";
	background:url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;
	display:inline-block;
	width:100%;
	height:12px;
}
.des-cat-home{
	text-align: center;
    margin: 0 0 20px 0;
    color: #515252;
}
@media(max-width:420px){
	header{
		background:none
	}
}
.page-title-home{
	text-align:center;
	color:#139ca7;
}
.page-title-home:after{
	content:'';
	background:url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;
	display:inline-block;
	width:100%;
	height:32px;
}
.xemthem{
	    background: #139ca7;
    color: #fff;
    padding: 7px 15px;
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-oz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
}
.products li:hover .xemthem{
	  background: #000;
}
@media(max-width:563px){
	.description form button{
		right:10px
	}
}
@media all and (max-width:890px) and (min-width:520px){
	.news li{
		width:50%;
		margin-bottom:12px
	}
}
@media all and (max-width:519px){
	.news li{
		width:100%;
		margin-bottom:12px
	}
}
</style>
<?php wp_head();?>
</head>
<body <?php body_class();?>>
<header>
<div class="container">
<div class="logo">
<a href="<?php echo site_url();?>" title="<?php echo get_bloginfo('name');?>">
<?php echo do_shortcode('[metaslider id=22]');?>
</a>
</div>
<div class="description">
<form action="<?php echo site_url();?>" method="get">
<input name="s" type="text" placeholder="Nhập để tìm kiếm..."/>
<button type="submit"><span class="fa fa-search"></span></button>
</form>
</div>
</header>
<nav class="menu">
<div class="container">
<i class="fa fa-align-justify"></i>
<?php wp_nav_menu(array('theme_location' => 'menu'));?>
<?php dynamic_sidebar('header');?>
</div>
</nav>
