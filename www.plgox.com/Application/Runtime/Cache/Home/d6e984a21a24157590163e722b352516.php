<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html lang="en"><head><title>真专优便，魄力共享</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="renderer" content="webkit"><meta name="viewport" content="width=device-width,initial-scale=1"><meta charset="utf-8"><!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />--><meta name="format-detection" content="telephone=no"><meta content="email=no" name="format-detection"><!-- 手淘flexible布局方案 --><script>!function (a, b) {
        function c() {
            var b = f.getBoundingClientRect().width;
            b / i > 540 && (b = 540 * i);
            var c = b / 10;
            f.style.fontSize = c + "px", k.rem = a.rem = c
        }

        var d, e = a.document, f = e.documentElement, g = e.querySelector('meta[name="viewport"]'),
            h = e.querySelector('meta[name="flexible"]'), i = 0, j = 0, k = b.flexible || (b.flexible = {});
        if (g) {
            console.warn("将根据已有的meta标签来设置缩放比例");
            var l = g.getAttribute("content").match(/initial\-scale=([\d\.]+)/);
            l && (j = parseFloat(l[1]), i = parseInt(1 / j))
        } else if (h) {
            var m = h.getAttribute("content");
            if (m) {
                var n = m.match(/initial\-dpr=([\d\.]+)/), o = m.match(/maximum\-dpr=([\d\.]+)/);
                n && (i = parseFloat(n[1]), j = parseFloat((1 / i).toFixed(2))), o && (i = parseFloat(o[1]), j = parseFloat((1 / i).toFixed(2)))
            }
        }
        if (!i && !j) {
            var p = (a.navigator.appVersion.match(/android/gi), a.navigator.appVersion.match(/iphone/gi)),
                q = a.devicePixelRatio;
            i = p ? q >= 3 && (!i || i >= 3) ? 3 : q >= 2 && (!i || i >= 2) ? 2 : 1 : 1, j = 1 / i
        }
        if (f.setAttribute("data-dpr", i), !g)if (g = e.createElement("meta"), g.setAttribute("name", "viewport"), g.setAttribute("content", "initial-scale=" + j + ", maximum-scale=" + j + ", minimum-scale=" + j + ", user-scalable=no"), f.firstElementChild) f.firstElementChild.appendChild(g); else {
            var r = e.createElement("div");
            r.appendChild(g), e.write(r.innerHTML)
        }
        a.addEventListener("resize", function () {
            clearTimeout(d), d = setTimeout(c, 300)
        }, !1), a.addEventListener("pageshow", function (a) {
            a.persisted && (clearTimeout(d), d = setTimeout(c, 300))
        }, !1), "complete" === e.readyState ? e.body.style.fontSize = 12 * i + "px" : e.addEventListener("DOMContentLoaded", function () {
            e.body.style.fontSize = 12 * i + "px"
        }, !1), c(), k.dpr = a.dpr = i, k.refreshRem = c, k.rem2px = function (a) {
            var b = parseFloat(a) * this.rem;
            return "string" == typeof a && a.match(/rem$/) && (b += "px"), b
        }, k.px2rem = function (a) {
            var b = parseFloat(a) / this.rem;
            return "string" == typeof a && a.match(/px$/) && (b += "rem"), b
        }
    }(window, window.lib || (window.lib = {}));</script></head><body><div id="root"></div><div id="test"></div><input type="hidden" id="token" value="<?php echo ($token); ?>" /><input type="hidden" id="status_keys" value="<?php echo ($status_keys); ?>"><script type="text/javascript" src="/Public/React/js/vendor_b9917a8ad88fe51fb3e4.js"></script><script type="text/javascript" src="/Public/React/js/app_b9917a8ad88fe51fb3e4.js"></script><script type="text/javascript" src="/Public/Common/bootstrap/js/jquery.min.js"></script></body>
    <script type="text/javascript">
    // 判断是否微信扫码
/*    var ua = navigator.userAgent.toLowerCase(),flag = false;
      if(ua.indexOf("micromessenger") > -1){
        flag = true;
        $(".zby-uploader").css("display","none");
      }else {
        $("h1").text("真专优便，就在魄力!");
      }*/
    </script>
    </html>