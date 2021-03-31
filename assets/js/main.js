var google_tag_params = {
    travel_destid: 'REPLACE_WITH_VALUE',
    travel_originid: 'REPLACE_WITH_VALUE',
    travel_startdate: 'REPLACE_WITH_VALUE',
    travel_enddate: 'REPLACE_WITH_VALUE',
    travel_pagetype: 'REPLACE_WITH_VALUE',
    travel_totalvalue: 'REPLACE_WITH_VALUE',
};

 /* <![CDATA[ */
    var google_conversion_id = 952271359;
    var google_custom_params = google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
       
       
       (function() {
            var h = this,
                l = function(a) {
                    return "string" == typeof a
                },
                aa = Date.now || function() {
                    return +new Date
                };
            var m = function(a) {
                a = parseFloat(a);
                return isNaN(a) || 1 < a || 0 > a ? 0 : a
            };
            var ba = m("0.20"),
                ca = m("1.0"),
                da = m("0.0"),
                ea = m("1.0");
            var fa = Array.prototype.indexOf ? function(a, b, c) {
                    return Array.prototype.indexOf.call(a, b, c)
                } : function(a, b, c) {
                    c = null == c ? 0 : 0 > c ? Math.max(0, a.length + c) : c;
                    if (l(a)) return l(b) && 1 == b.length ? a.indexOf(b, c) : -1;
                    for (; c < a.length; c++)
                        if (c in a && a[c] === b) return c;
                    return -1
                },
                ha = Array.prototype.filter ? function(a, b, c) {
                    return Array.prototype.filter.call(a, b, c)
                } : function(a, b, c) {
                    for (var d = a.length, e = [], f = 0, g = l(a) ? a.split("") : a, k = 0; k < d; k++)
                        if (k in g) {
                            var n = g[k];
                            b.call(c, n, k, a) && (e[f++] = n)
                        } return e
                },
                ia = Array.prototype.map ?
                function(a, b, c) {
                    return Array.prototype.map.call(a, b, c)
                } : function(a, b, c) {
                    for (var d = a.length, e = Array(d), f = l(a) ? a.split("") : a, g = 0; g < d; g++) g in f && (e[g] = b.call(c, f[g], g, a));
                    return e
                },
                ja = function(a) {
                    return Array.prototype.concat.apply([], arguments)
                };
            var p = function(a) {
                var b = [],
                    c = 0,
                    d;
                for (d in a) b[c++] = a[d];
                return b
            };
            var r = function(a) {
                r[" "](a);
                return a
            };
            r[" "] = function() {};
            var v = function(a, b) {
                for (var c in a) Object.prototype.hasOwnProperty.call(a, c) && b.call(void 0, a[c], c, a)
            };
            var ka = /^true$/.test("false");
            var w = null,
                ma = function() {
                    var a = p(la);
                    this.j = {};
                    this.b = {};
                    a = a || [];
                    for (var b = 0, c = a.length; b < c; ++b) this.b[a[b]] = ""
                },
                y = function() {
                    if (null === w) {
                        w = "";
                        try {
                            var a = h.top.location.hash;
                            if (a) {
                                var b = a.match(/\bdeid=([\d,]+)/);
                                w = b ? b[1] : ""
                            }
                        } catch (c) {}
                    }
                    return w
                },
                A = function(a, b, c) {
                    var d = z;
                    if (c ? d.b.hasOwnProperty(c) && "" == d.b[c] : 1) {
                        var e;
                        e = (e = y()) ? (e = e.match(new RegExp("\\b(" + a.join("|") + ")\\b"))) ? e[0] : null : null;
                        if (e) a = e;
                        else a: {
                            if (!(1E-4 > Math.random()) && (e = Math.random(), e < b)) {
                                try {
                                    var f = new Uint32Array(1);
                                    h.crypto.getRandomValues(f);
                                    e = f[0] / 65536 / 65536
                                } catch (g) {
                                    e = Math.random()
                                }
                                a = a[Math.floor(e * a.length)];
                                break a
                            }
                            a = null
                        }
                        a && "" != a && (c ? d.b.hasOwnProperty(c) && (d.b[c] = a) : d.j[a] = !0)
                    }
                },
                B = function(a) {
                    var b = z;
                    return b.b.hasOwnProperty(a) ? b.b[a] : ""
                },
                na = function() {
                    var a = z,
                        b = [];
                    v(a.j, function(a, d) {
                        b.push(d)
                    });
                    v(a.b, function(a) {
                        "" != a && b.push(a)
                    });
                    return b
                };
            var la = {
                    f: 2,
                    g: 3,
                    h: 4,
                    i: 5
                },
                C = {
                    g: {
                        c: "27391101",
                        a: "27391102"
                    },
                    f: {
                        c: "376635470",
                        a: "376635471"
                    },
                    h: {
                        c: "659234980",
                        a: "659234981"
                    },
                    i: {
                        a: "659235991"
                    }
                },
                z = null,
                oa = function() {
                    var a = ja.apply([], ia(p(C), function(a) {
                            return p(a)
                        }, void 0)),
                        b = ha(y().split(","), function(b) {
                            return "" != b && !(0 <= fa(a, b))
                        });
                    return 0 < b.length ? "&debug_experiment_id=" + b.join(",") : ""
                };
            var E = function(a, b, c) {
                    for (; 0 <= (b = a.indexOf("fmt", b)) && b < c;) {
                        var d = a.charCodeAt(b - 1);
                        if (38 == d || 63 == d)
                            if (d = a.charCodeAt(b + 3), !d || 61 == d || 38 == d || 35 == d) return b;
                        b += 4
                    }
                    return -1
                },
                F = /#|$/,
                pa = /[?&]($|#)/;
            var G = "google_conversion_id google_conversion_format google_conversion_type google_conversion_order_id google_conversion_language google_conversion_value google_conversion_evaluemrc google_conversion_currency google_conversion_domain google_conversion_label google_conversion_color google_disable_viewthrough google_enable_display_cookie_match google_read_ga_cookie_opt_in google_remarketing_only google_remarketing_for_search google_conversion_items google_conversion_merchant_id google_user_id google_custom_params google_conversion_date google_conversion_time google_conversion_js_version onload_callback opt_image_generator google_conversion_page_url google_conversion_referrer_url".split(" "),
                H = ["google_conversion_first_time", "google_conversion_snippets"],
                J = function(a) {
                    return null != a ? encodeURIComponent(a.toString()) : ""
                },
                K = function(a) {
                    if (null != a) {
                        a = a.toString().substring(0, 512);
                        var b = a.indexOf("#");
                        return -1 == b ? a : a.substring(0, b)
                    }
                    return ""
                },
                L = function(a, b) {
                    b = J(b);
                    return "" != b && (a = J(a), "" != a) ? "&".concat(a, "=", b) : ""
                },
                M = function(a) {
                    var b = typeof a;
                    return null == a || "object" == b || "function" == b ? null : String(a).replace(/,/g, "\\,").replace(/;/g, "\\;").replace(/=/g, "\\=")
                },
                qa = function(a) {
                    if ((a = a.google_custom_params) &&
                        "object" == typeof a && "function" != typeof a.join) {
                        var b = [];
                        for (g in a)
                            if (Object.prototype.hasOwnProperty.call(a, g)) {
                                var c = a[g];
                                if (c && "function" == typeof c.join) {
                                    for (var d = [], e = 0; e < c.length; ++e) {
                                        var f = M(c[e]);
                                        null != f && d.push(f)
                                    }
                                    c = 0 == d.length ? null : d.join(",")
                                } else c = M(c);
                                (d = M(g)) && null != c && b.push(d + "=" + c)
                            } var g = b.join(";")
                    } else g = "";
                    return "" == g ? "" : "&".concat("data=", encodeURIComponent(g))
                },
                ra = function(a) {
                    if (null != a) {
                        a = a.toString();
                        if (2 == a.length) return L("hl", a);
                        if (5 == a.length) return L("hl", a.substring(0,
                            2)) + L("gl", a.substring(3, 5))
                    }
                    return ""
                };

            function N(a) {
                return "number" != typeof a && "string" != typeof a ? "" : J(a.toString())
            }
            var sa = function(a) {
                    if (!a) return "";
                    a = a.google_conversion_items;
                    if (!a) return "";
                    for (var b = [], c = 0, d = a.length; c < d; c++) {
                        var e = a[c],
                            f = [];
                        e && (f.push(N(e.value)), f.push(N(e.quantity)), f.push(N(e.item_id)), f.push(N(e.adwords_grouping)), f.push(N(e.sku)), b.push("(" + f.join("*") + ")"))
                    }
                    return 0 < b.length ? "&item=" + b.join("") : ""
                },
                ta = function(a, b) {
                    if (!b.google_remarketing_only && !b.google_conversion_domain && b.google_read_ga_cookie_opt_in) {
                        b = "";
                        if (z && B(5) == C.i.a) {
                            var c;
                            b = a.cookie;
                            a = {};
                            if (b) {
                                b = b.split(";");
                                for (var d = /^\s*_gac_(.*)=(\d+\.)(\d+\.)(.*?)\s*$/,
                                        e = 0; e < b.length; e++) {
                                    var f = b[e].match(d);
                                    f && 5 == f.length && f[1] && f[4] && (a[f[1]] || (a[f[1]] = []), a[f[1]].push(f[4]))
                                }
                            }
                            b = [];
                            for (c in a) b.push(c + ":" + a[c].join(","));
                            b = (c = 0 < b.length ? b.join(";") : "") ? L("gac", c) : ""
                        }
                        return b
                    }
                    return ""
                },
                ua = function(a, b, c) {
                    var d = [];
                    if (a) {
                        var e = a.screen;
                        e && (d.push(L("u_h", e.height)), d.push(L("u_w", e.width)), d.push(L("u_ah", e.availHeight)), d.push(L("u_aw", e.availWidth)), d.push(L("u_cd", e.colorDepth)));
                        a.history && d.push(L("u_his", a.history.length))
                    }
                    c && "function" == typeof c.getTimezoneOffset &&
                        d.push(L("u_tz", -c.getTimezoneOffset()));
                    b && ("function" == typeof b.javaEnabled && d.push(L("u_java", b.javaEnabled())), b.plugins && d.push(L("u_nplug", b.plugins.length)), b.mimeTypes && d.push(L("u_nmime", b.mimeTypes.length)));
                    return d.join("")
                };

            function va(a) {
                a = a ? a.title : "";
                if (void 0 == a || "" == a) return "";
                var b = function(a) {
                    try {
                        return decodeURIComponent(a), !0
                    } catch (e) {
                        return !1
                    }
                };
                a = encodeURIComponent(a);
                for (var c = 256; !b(a.substr(0, c));) c--;
                return "&tiba=" + a.substr(0, c)
            }
            var O = function(a, b, c, d) {
                    var e = "";
                    if (b) {
                        if (a.top == a) var f = 0;
                        else {
                            var g = a.location.ancestorOrigins;
                            if (g) f = g[g.length - 1] == a.location.origin ? 1 : 2;
                            else {
                                g = a.top;
                                try {
                                    var k;
                                    if (k = !!g && null != g.location.href) c: {
                                        try {
                                            r(g.foo);
                                            k = !0;
                                            break c
                                        } catch (n) {}
                                        k = !1
                                    }
                                    f = k
                                } catch (n) {
                                    f = !1
                                }
                                f = f ? 1 : 2
                            }
                        }
                        a = c ? c : 1 == f ? a.top.location.href : a.location.href;
                        e += L("frm", f);
                        e += L("url", K(a));
                        e += L("ref", K(d || b.referrer))
                    }
                    return e
                },
                P = function(a, b) {
                    return !(ka || b && wa.test(navigator.userAgent)) || a && a.location && a.location.protocol && "https:" == a.location.protocol.toString().toLowerCase() ?
                        "https:" : "http:"
                },
                Q = function(a, b, c) {
                    c = c.google_remarketing_only ? "googleads.g.doubleclick.net" : c.google_conversion_domain || "www.googleadservices.com";
                    return P(a, /www[.]googleadservices[.]com/i.test(c)) + "//" + c + "/pagead/" + b
                },
                xa = function(a, b, c, d) {
                    var e = "/?";
                    "landing" == d.google_conversion_type && (e = "/extclk?");
                    e = [d.google_remarketing_only ? "viewthroughconversion/" : "conversion/", J(d.google_conversion_id), e, "random=", J(d.google_conversion_time)].join("");
                    e = Q(a, e, d);
                    a = [L("cv", d.google_conversion_js_version),
                        L("fst", d.google_conversion_first_time), L("num", d.google_conversion_snippets), L("fmt", d.google_conversion_format), L("userId", d.google_user_id), L("value", d.google_conversion_value), L("evaluemrc", d.google_conversion_evaluemrc), L("currency_code", d.google_conversion_currency), L("label", d.google_conversion_label), L("oid", d.google_conversion_order_id), L("bg", d.google_conversion_color), ra(d.google_conversion_language), L("guid", "ON"), L("disvt", d.google_disable_viewthrough), L("eid", na().join()), sa(d), ua(a,
                            b, d.google_conversion_date), qa(d), ta(c, d), O(a, c, d.google_conversion_page_url, d.google_conversion_referrer_url), d.google_remarketing_for_search && !d.google_conversion_domain ? "&srr=n" : "", va(c)
                    ].join("") + oa();
                    return e + a
                },
                R = function(a, b, c, d, e, f) {
                    return '<iframe name="' + a + '" title="' + b + '" width="' + d + '" height="' + e + '" src="' + c + '" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true"' + (f ? ' style="display:none"' : "") + ' scrolling="no"></iframe>'
                },
                ya = function(a) {
                    return {
                        ar: 1,
                        bg: 1,
                        cs: 1,
                        da: 1,
                        de: 1,
                        el: 1,
                        en_AU: 1,
                        en_US: 1,
                        en_GB: 1,
                        es: 1,
                        et: 1,
                        fi: 1,
                        fr: 1,
                        hi: 1,
                        hr: 1,
                        hu: 1,
                        id: 1,
                        is: 1,
                        it: 1,
                        iw: 1,
                        ja: 1,
                        ko: 1,
                        lt: 1,
                        nl: 1,
                        no: 1,
                        pl: 1,
                        pt_BR: 1,
                        pt_PT: 1,
                        ro: 1,
                        ru: 1,
                        sk: 1,
                        sl: 1,
                        sr: 1,
                        sv: 1,
                        th: 1,
                        tl: 1,
                        tr: 1,
                        vi: 1,
                        zh_CN: 1,
                        zh_TW: 1
                    } [a] ? a + ".html": "en_US.html"
                },
                wa = /Android ([01]\.|2\.[01])/i,
                za = function(a, b) {
                    if (!b.google_remarketing_only || !b.google_enable_display_cookie_match || !z || B(2) != C.f.a) return "";
                    a = P(a, !1) + "//bid.g.doubleclick.net/xbbe/pixel?d=KAE";
                    return R("google_cookie_match_frame", "Google cookie match frame",
                        a, 1, 1, !0)
                };

            function S(a, b) {
                return '<img height="1" width="1" border="0" alt="" src="' + a.replace("gen204Type", b) + '" style="display:none" />'
            }
            var Aa = function(a) {
                    if (z && B(4) == C.h.a) {
                        var b = Math.floor(1E9 * Math.random()),
                            c = P(a, !1) + "//pagead2.googlesyndication.com/pagead/gen_204?id=beacon-api-web-survey&type=gen204Type";
                        c += L("random", b);
                        c += L("time", aa());
                        if (a.navigator && a.navigator.sendBeacon) {
                            try {
                                var d = c.replace("gen204Type", "send-beacon");
                                a.navigator.sendBeacon(d, "")
                            } catch (e) {}
                            return S(c, "img")
                        }
                        return S(c, "beacon-undefined")
                    }
                    return ""
                },
                T = function(a, b, c, d) {
                    var e = "";
                    d.google_remarketing_only && d.google_enable_display_cookie_match && (z && A([C.f.c,
                        C.f.a
                    ], ba, 2), e = za(a, d));
                    3 != d.google_conversion_format || d.google_remarketing_only || d.google_conversion_domain || z && A([C.g.c, C.g.a], ca, 3);
                    d.google_remarketing_only || d.google_conversion_domain || z && A([C.i.a], ea, 5);
                    z && A([C.h.c, C.h.a], da, 4);
                    b = xa(a, b, c, d);
                    var f = function(a, b, c, d) {
                        return '<img height="' + c + '" width="' + b + '" border="0" alt="" src="' + a + '"' + (d ? ' style="display:none"' : "") + " />"
                    };
                    return 0 == d.google_conversion_format && null == d.google_conversion_domain ? '<a href="' + (P(a, !1) + "//services.google.com/sitestats/" +
                        ya(d.google_conversion_language) + "?cid=" + J(d.google_conversion_id)) + '" target="_blank">' + f(b, 135, 27, !1) + "</a>" + e : 1 < d.google_conversion_snippets || 3 == d.google_conversion_format ? Ba(c, b) ? e : f(b, 1, 1, !0) + e + Aa(a) : R("google_conversion_frame", "Google conversion frame", b, 2 == d.google_conversion_format ? 200 : 300, 2 == d.google_conversion_format ? 26 : 13, !1) + e
                };

            function Ca() {
                return new Image
            }

            function Ba(a, b) {
                if (z && B(3) === C.g.a) try {
                    var c = b.search(F),
                        d = E(b, 0, c);
                    if (0 > d) var e = null;
                    else {
                        var f = b.indexOf("&", d);
                        if (0 > f || f > c) f = c;
                        d += 4;
                        e = decodeURIComponent(b.substr(d, f - d).replace(/\+/g, " "))
                    }
                    if (3 != e) var g = !1;
                    else {
                        var k = b.search(F);
                        e = 0;
                        var n;
                        for (c = []; 0 <= (n = E(b, e, k));) c.push(b.substring(e, n)), e = Math.min(b.indexOf("&", n) + 1 || k, k);
                        c.push(b.substr(e));
                        var q = c.join("").replace(pa, "$1");
                        var D = "fmt=" + encodeURIComponent("4");
                        if (D) {
                            var t = q.indexOf("#");
                            0 > t && (t = q.length);
                            var x = q.indexOf("?");
                            if (0 > x || x > t) {
                                x =
                                    t;
                                var U = ""
                            } else U = q.substring(x + 1, t);
                            var u = [q.substr(0, x), U, q.substr(t)];
                            var I = u[1];
                            u[1] = D ? I ? I + "&" + D : D : I;
                            var V = u[0] + (u[1] ? "?" + u[1] : "") + u[2]
                        } else V = q;
                        var W = a.createElement("script");
                        W.src = V;
                        a.getElementsByTagName("script")[0].parentElement.appendChild(W);
                        g = !0
                    }
                    return g
                } catch (Ma) {}
                return !1
            }
            var Da = function(a, b) {
                    var c = a.opt_image_generator && a.opt_image_generator.call;
                    b += L("async", "1");
                    var d = Ca;
                    c && (d = a.opt_image_generator);
                    a = d();
                    a.src = b;
                    a.onload = function() {}
                },
                X = function(a, b, c) {
                    var d = Math.floor(1E9 * Math.random());
                    d = [J(c.google_conversion_id), "/?random=", d].join("");
                    d = P(a, !1) + "//www.google.com/ads/user-lists/" + d;
                    a = [L("label", c.google_conversion_label), L("fmt", "3"), O(a, b, c.google_conversion_page_url, c.google_conversion_referrer_url)].join("");
                    Da(c, d + a)
                },
                Ea = function(a, b) {
                    for (var c = document.createElement("iframe"),
                            d = [], e = [], f = 0; f < b.google_conversion_items.length; f++) {
                        var g = b.google_conversion_items[f];
                        g && g.quantity && g.sku && (d.push(g.sku), e.push(g.quantity))
                    }
                    f = "";
                    null != b.google_conversion_language && (g = b.google_conversion_language.toString(), 5 == g.length && (f = "&language=" + g.substring(0, 2) + "&country=" + g.substring(3, 5)));
                    a = P(a, !1) + "//www.google.com/ads/mrc";
                    c.src = a + "?sku=" + d.join(",") + "&qty=" + e.join(",") + "&oid=" + b.google_conversion_order_id + "&mcid=" + b.google_conversion_merchant_id + f;
                    c.style.width = "1px";
                    c.style.height =
                        "1px";
                    c.style.display = "none";
                    return c
                },
                Fa = function(a) {
                    if ("landing" == a.google_conversion_type || !a.google_conversion_id || a.google_remarketing_only && a.google_disable_viewthrough) return !1;
                    a.google_conversion_date = new Date;
                    a.google_conversion_time = a.google_conversion_date.getTime();
                    a.google_conversion_snippets = "number" == typeof a.google_conversion_snippets && 0 < a.google_conversion_snippets ? a.google_conversion_snippets + 1 : 1;
                    "number" != typeof a.google_conversion_first_time && (a.google_conversion_first_time = a.google_conversion_time);
                    a.google_conversion_js_version = "8";
                    0 != a.google_conversion_format && 1 != a.google_conversion_format && 2 != a.google_conversion_format && 3 != a.google_conversion_format && (a.google_conversion_format = 1);
                    !1 !== a.google_enable_display_cookie_match && (a.google_enable_display_cookie_match = !0);
                    z = new ma;
                    return !0
                },
                Ga = function(a) {
                    for (var b = 0; b < G.length; b++) a[G[b]] = null
                },
                Ha = function(a) {
                    for (var b = {}, c = 0; c < G.length; c++) b[G[c]] = a[G[c]];
                    for (c = 0; c < H.length; c++) b[H[c]] = a[H[c]];
                    return b
                },
                Ia = function(a) {
                    var b = document.getElementsByTagName("head")[0];
                    b || (b = document.createElement("head"), document.getElementsByTagName("html")[0].insertBefore(b, document.getElementsByTagName("body")[0]));
                    var c = document.createElement("script");
                    c.src = Q(window, "conversion_debug_overlay.js", a);
                    b.appendChild(c)
                };
            var Ja = function(a, b, c) {
                a.addEventListener ? a.addEventListener(b, c, void 0) : a.attachEvent && a.attachEvent("on" + b, c)
            };
            var Y = function(a) {
                    return {
                        visible: 1,
                        hidden: 2,
                        prerender: 3,
                        preview: 4,
                        unloaded: 5
                    } [a.webkitVisibilityState || a.mozVisibilityState || a.visibilityState || ""] || 0
                },
                Ka = function(a) {
                    var b;
                    a.mozVisibilityState ? b = "mozvisibilitychange" : a.webkitVisibilityState ? b = "webkitvisibilitychange" : a.visibilityState && (b = "visibilitychange");
                    return b
                },
                Z = function(a, b) {
                    if (3 == Y(b)) return !1;
                    a();
                    return !0
                },
                La = function(a, b) {
                    if (!Z(a, b)) {
                        var c = !1,
                            d = Ka(b),
                            e = function() {
                                if (!c && Z(a, b)) {
                                    c = !0;
                                    var f = e;
                                    b.removeEventListener ? b.removeEventListener(d,
                                        f, void 0) : b.detachEvent && b.detachEvent("on" + d, f)
                                }
                            };
                        d && Ja(b, d, e)
                    }
                };
            (function(a, b, c) {
                if (a)
                    if (/[\?&;]google_debug/.exec(document.URL)) Ia(a);
                    else {
                        try {
                            if (Fa(a))
                                if (3 == Y(c)) {
                                    var d = Ha(a),
                                        e = "google_conversion_" + Math.floor(1E9 * Math.random());
                                    c.write('<span id="' + e + '"></span>');
                                    La(function() {
                                        try {
                                            var f = c.getElementById(e);
                                            f && (f.innerHTML = T(a, b, c, d), d.google_remarketing_for_search && !d.google_conversion_domain && X(a, c, d))
                                        } catch (g) {}
                                    }, c)
                                } else c.write(T(a, b, c, a)), a.google_remarketing_for_search && !a.google_conversion_domain && X(a, c, a);
                            a.google_conversion_merchant_id && a.google_conversion_order_id &&
                                a.google_conversion_items && c.documentElement.appendChild(Ea(a, a))
                        } catch (f) {}
                        Ga(a)
                    }
            })(window, navigator, document);
        }).call(this);
    
            // logo
        $(function() {
            $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            
                if (scroll >= 100) {
                    $('.logowhite').hide();
                    //logo.removeClass('lrg-logo').addClass("sml-logo").fadeIn( "slow");
                  }
                 if(scroll <= 80 ){
                  $('.logowhite').show();
                 
                  $('.logoblack').hide();
                  }else{
                      $('.logoblack').show();
                      
                  }

                });
            
            });
           
            $(function() {
                $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                
                    if (scroll >= 50) {
                        $('.mobwhitelogo').hide();
                        //logo.removeClass('lrg-logo').addClass("sml-logo").fadeIn( "slow");
                      }
                     if(scroll <= 50 ){
                      $('.mobwhitelogo').show();
                     
                      $('.mobblacklogo').hide();
                      }else{
                          $('.mobblacklogo').show();
                          
                      }
    
                    });
                
                });
               


                // ////////////////////////////////////////
                !function(n,t,e){function r(e,i){if(!t[e]){if(!n[e]){var a="function"==typeof __nr_require&&__nr_require;if(!i&&a)return a(e,!0);if(o)return o(e,!0);throw new Error("Cannot find module '"+e+"'")}var s=t[e]={exports:{}};n[e][0].call(s.exports,function(t){var o=n[e][1][t];return r(o||t)},s,s.exports)}return t[e].exports}for(var o="function"==typeof __nr_require&&__nr_require,i=0;i<e.length;i++)r(e[i]);return r}({1:[function(n,t,e){t.exports=function(n,t){return"addEventListener"in window?window.addEventListener(n,t,!1):"attachEvent"in window?window.attachEvent("on"+n,t):void 0}},{}],2:[function(n,t,e){function r(n,t,e,r,i){var a=c(n,t,e,i);return a.metrics=o(r,a.metrics),a}function o(n,t){return t||(t={count:0}),t.count+=1,m(n,function(n,e){t[n]=i(e,t[n])}),t}function i(n,t){return t?(t.c||(t=u(t.t)),t.c+=1,t.t+=n,t.sos+=n*n,n>t.max&&(t.max=n),n<t.min&&(t.min=n),t):{t:n}}function a(n,t,e,r,o){var a=c(n,t,r,o);if(!a.metrics)return void(a.metrics=e);var u=a.metrics;u.count+=e.count,m(e,function(n,t){if("count"!==n){var r=u[n],o=e[n];o&&!o.c?u[n]=i(o.t,r):u[n]=s(o,u[n])}})}function s(n,t){return t?(t.c||(t=u(t.t)),t.min=Math.min(n.min,t.min),t.max=Math.max(n.max,t.max),t.t+=n.t,t.sos+=n.sos,t.c+=n.c,t):n}function u(n){return{t:n,min:n,max:n,sos:n*n,c:1}}function c(n,t,e,r){h[n]||(h[n]={});var o=h[n][t];return o||(o=h[n][t]={params:e||{}},r&&(o.custom=r)),o}function f(n,t){return t?h[n]&&h[n][t]:h[n]}function l(n){for(var t={},e="",r=!1,o=0;o<n.length;o++)e=n[o],t[e]=d(h[e]),t[e].length&&(r=!0),delete h[e];return r?t:null}function d(n){return"object"!=typeof n?[]:m(n,p)}function p(n,t){return t}var m=n(38),h={};t.exports={store:r,take:l,get:f,merge:a}},{}],3:[function(n,t,e){function r(n,t,e){"string"==typeof t&&("/"!==t.charAt(0)&&(t="/"+t),h.customTransaction=(e||"http://custom.transaction")+t)}function o(n,t){var e=t?t-h.offset:n;l.store("cm","finished",{name:"finished"},{time:e}),i(n,{name:"finished",start:e+h.offset,origin:"nr"}),v("api-addPageAction",[e,"finished"])}function i(n,t){if(t&&"object"==typeof t&&t.name&&t.start){var e={n:t.name,s:t.start-h.offset,e:(t.end||t.start)-h.offset,o:t.origin||"",t:"api"};v("bstApi",[e])}}function a(n,t,e,r,o,i,a){if(t=window.encodeURIComponent(t),g+=1,h.info.beacon){var s="https://"+h.info.beacon+"/1/"+h.info.licenseKey;s+="?a="+h.info.applicationID+"&",s+="t="+t+"&",s+="qt="+~~e+"&",s+="ap="+~~r+"&",s+="be="+~~o+"&",s+="dc="+~~i+"&",s+="fe="+~~a+"&",s+="c="+g,p.img(s)}}function s(n,t){h.onerror=t}function u(n,t,e){++x>10||(h.releaseIds[t.slice(-200)]=(""+e).slice(-200))}var c=n(17),f=n(10),l=n(2),d=n(19),p=n(23),m=n(38),h=n("loader"),v=n("handle"),g=0;f.on("jserrors",function(){return{qs:l.take(["cm"])}});var y={finished:d(o),setPageViewName:r,setErrorHandler:s,addToTrace:i,inlineHit:a,addRelease:u};m(y,function(n,t){c("api-"+n,t,"api")});var x=0},{}],4:[function(n,t,e){function r(n,t,e){return n||0===n||""===n?t(n)+(e?",":""):"!"}function o(n,t){return t?Math.floor(n).toString(36):void 0===n||0===n?"":Math.floor(n).toString(36)}function i(){function n(n){return"undefined"==typeof n||""===n?"":(n=String(n),f.call(t,n)?o(t[n],!0):(t[n]=e++,s(n)))}var t=Object.hasOwnProperty("create")?Object.create(null):{},e=0;return n}function a(n,t){var e=[];return u(n,function(n,r){if(!(e.length>=l)){var o,i=5;switch(n=t(n),typeof r){case"object":r?o=t(c(r)):i=9;break;case"number":i=6,o=r%1?r:r+".";break;case"boolean":i=r?7:8;break;case"undefined":i=9;break;default:o=t(r)}e.push([i,n+(o?","+o:"")])}}),e}function s(n){return"'"+n.replace(d,"\\$1")}var u=n(38),c=n(22),f=Object.prototype.hasOwnProperty,l=64;t.exports={nullable:r,numeric:o,getAddStringContext:i,addCustomAttributes:a};var d=/([,\\;])/g},{}],5:[function(n,t,e){var r=/([^?#]*)[^#]*(#[^?]*|$).*/,o=/([^?#]*)().*/;t.exports=function(n,t){return n.replace(t?r:o,"$1$2")}},{}],6:[function(n,t,e){function r(n,t){var e=n[1];i(t[e],function(t,e){var r=n[0],o=e[0];if(o===r){var i=e[1],a=n[3],s=n[2];i.apply(a,s)}})}var o=n("ee"),i=n(38),a=n(17).handlers;t.exports=function(n){var t=o.backlog[n],e=a[n];if(e){for(var s=0;t&&s<t.length;++s)r(t[s],e);i(e,function(n,t){i(t,function(t,e){e[0].on(n,e[1])})})}delete a[n],o.backlog[n]=null}},{}],7:[function(n,t,e){function r(n){return f[n]}function o(n){return null===n||void 0===n?"null":encodeURIComponent(n).replace(d,r)}function i(n,t){for(var e=0,r=0;r<n.length;r++)if(e+=n[r].length,e>t)return n.slice(0,r).join("");return n.join("")}function a(n,t){var e=0,r="";return u(n,function(n,i){var a,s,u=[];if("string"==typeof i)a="&"+n+"="+o(i),e+=a.length,r+=a;else if(i.length){for(e+=9,s=0;s<i.length&&(a=o(c(i[s])),e+=a.length,!("undefined"!=typeof t&&e>=t));s++)u.push(a);r+="&"+n+"=%5B"+u.join(",")+"%5D"}}),r}function s(n,t){return t&&"string"==typeof t?"&"+n+"="+o(t):""}var u=n(38),c=n(22),f={"%2C":",","%3A":":","%2F":"/","%40":"@","%24":"$","%3B":";"},l=u(f,function(n){return n}),d=new RegExp(l.join("|"),"g");t.exports={obj:a,fromArray:i,qs:o,param:s}},{}],8:[function(n,t,e){var r=n(38),o=n("ee"),i=n(6);t.exports=function(n){n&&"object"==typeof n&&(r(n,function(n,t){t&&!a[n]&&(o.emit("feat-"+n,[]),a[n]=!0)}),i("feature"))};var a=t.exports.active={}},{}],9:[function(n,t,e){function r(n,t,e){this.loader=n,this.endpoint=t,this.opts=e||{},this.started=!1,this.timeoutHandle=null}var o=n(10),i=n(23);t.exports=r,r.prototype.startTimer=function(n,t){this.interval=n,this.started=!0,this.scheduleHarvest(null!=t?t:this.interval)},r.prototype.stopTimer=function(){this.started=!1,this.timeoutHandle&&clearTimeout(this.timeoutHandle)},r.prototype.scheduleHarvest=function(n,t){if(!this.timeoutHandle){var e=this;null==n&&(n=this.interval),this.timeoutHandle=setTimeout(function(){e.timeoutHandle=null,e.runHarvest(t)},1e3*n)}},r.prototype.runHarvest=function(n){function t(t){e.onHarvestFinished(n,t)}var e=this;if(this.opts.getPayload){var r=o.getSubmitMethod(this.endpoint);if(!r)return!1;var a=r.method===i.xhr,s=this.opts.getPayload({retry:a});s&&o.send(this.endpoint,this.loader,s,n,r,t)}else o.sendX(this.endpoint,this.loader,n,t);this.started&&this.scheduleHarvest()},r.prototype.onHarvestFinished=function(n,t){if(this.opts.onFinished&&this.opts.onFinished(t),t.sent&&t.retry){var e=t.delay||this.opts.retryDelay;this.started&&e?(clearTimeout(this.timeoutHandle),this.timeoutHandle=null,this.scheduleHarvest(e,n)):!this.started&&e&&this.scheduleHarvest(e,n)}}},{}],10:[function(n,t,e){function r(n){if(n.info.beacon){n.info.queueTime&&T.store("measures","qt",{value:n.info.queueTime}),n.info.applicationTime&&T.store("measures","ap",{value:n.info.applicationTime}),S.measure("be","starttime","firstbyte"),S.measure("fe","firstbyte","onload"),S.measure("dc","firstbyte","domContent");var t=T.get("measures"),e=y(t,function(n,t){return"&"+n+"="+t.params.value}).join("");if(e){var r="1",o=[h(n)];if(o.push(e),o.push(b.param("tt",n.info.ttGuid)),o.push(b.param("us",n.info.user)),o.push(b.param("ac",n.info.account)),o.push(b.param("pr",n.info.product)),o.push(b.param("af",y(n.features,function(n){return n}).join(","))),window.performance&&"undefined"!=typeof window.performance.timing){var i={timing:x.addPT(window.performance.timing,{}),navigation:x.addPN(window.performance.navigation,{})};o.push(b.param("perf",w(i)))}if(window.performance&&window.performance.getEntriesByType){var a=window.performance.getEntriesByType("paint");a&&a.length>0&&a.forEach(function(n){!n.startTime||n.startTime<=0||("first-paint"===n.name?o.push(b.param("fp",String(Math.floor(n.startTime)))):"first-contentful-paint"===n.name&&o.push(b.param("fcp",String(Math.floor(n.startTime)))),U(n.name,Math.floor(n.startTime)))})}o.push(b.param("xx",n.info.extra)),o.push(b.param("ua",n.info.userAttributes)),o.push(b.param("at",n.info.atts));var s=w(n.info.jsAttributes);o.push(b.param("ja","{}"===s?null:s));var u=b.fromArray(o,n.maxBytes);k.jsonp("https://"+n.info.beacon+"/"+r+"/"+n.info.licenseKey+u,N)}}}function o(n){var t=y(q,function(t){return s(t,n,{unload:!0})});return j(t,i)}function i(n,t){return n||t}function a(n,t){for(var e=v(),r=v(),o=q[n]&&q[n]||[],i=0;i<o.length;i++){var a=o[i](t);a&&(a.body&&y(a.body,e),a.qs&&y(a.qs,r))}return{body:e(),qs:r()}}function s(n,t,e,r){var o=f(n,e);if(!o)return!1;var i={retry:o.method===k.xhr};return c(n,t,a(n,i),e,o,r)}function u(n,t,e,r,o,i){var a=v(),s=v();e.body&&y(e.body,a),e.qs&&y(e.qs,s);var u={body:a(),qs:s()};return c(n,t,u,r,o,i)}function c(n,t,e,r,o,i){if(!t.info.errorBeacon)return!1;if(!(e.body||"jserrors"===n&&e.qs&&e.qs.cm))return i&&i({sent:!1}),!1;r||(r={});var a="https://"+t.info.errorBeacon+"/"+n+"/1/"+t.info.licenseKey+h(t);e.qs&&(a+=b.obj(e.qs,t.maxBytes)),o||(o=f(n,r));var s,u=o.method,c=o.useBody,l=a;c&&"events"===n?s=e.body.e:c?s=w(e.body):l=a+b.obj(e.body,t.maxBytes);var d=u(l,s);if(i&&u===k.xhr){var p=d;p.addEventListener("load",function(){var n={sent:!0};429===this.status?(n.retry=!0,n.delay=R):408!==this.status&&500!==this.status&&503!==this.status||(n.retry=!0),r.needResponse&&(n.responseText=this.responseText),i(n)},!1)}return d||u!==k.beacon||(u=k.img,d=u(a+b.obj(e.body,t.maxBytes))),d}function f(n,t){t=t||{};var e,r;if(t.needResponse){if(!I)return!1;r=!0,e=k.xhr}else if(t.unload)r=C,e=C?k.beacon:k.img;else if(I)r=!0,e=k.xhr;else{if("events"!==n&&"jserrors"!==n)return!1;e=k.img}return{method:e,useBody:r}}function l(n){if(n&&n.info&&n.info.errorBeacon&&n.ieVersion){var t="https://"+n.info.errorBeacon+"/jserrors/ping/"+n.info.licenseKey+h(n);k.img(t)}}function d(n){return n.info.transactionName?b.param("to",n.info.transactionName):b.param("t",n.info.tNamePlain||"Unnamed Transaction")}function p(n,t){var e=q[n]||(q[n]=[]);e.push(t)}function m(){y(q,function(n){q[n]=[]})}function h(n){var t=!0;return"init"in NREUM&&"privacy"in NREUM.init&&(t=NREUM.init.privacy.cookies_enabled),["?a="+n.info.applicationID,b.param("sa",n.info.sa?""+n.info.sa:""),b.param("v",M),d(n),b.param("ct",n.customTransaction),"&rst="+n.now(),"&ck="+(t?"1":"0"),b.param("ref",H(E.getLocation()))].join("")}function v(){var n={},t=!1;return function(e,r){if(r&&r.length&&(n[e]=r,t=!0),t)return n}}var g=n(19),y=n(38),x=n(15),b=n(7),w=n(22),k=n(23),j=n(41),T=n(2),S=n(21),E=n(13),A=n(35),H=n(5),M="1208.49599aa",N="NREUM.setToken",q={},C=!!navigator.sendBeacon,R=A.getConfiguration("harvest.tooManyRequestsDelay")||60,_=n(11),I=_>9||0===_,U=n(16).addMetric;t.exports={sendRUM:g(r),sendFinal:o,pingErrors:l,sendX:s,send:u,on:p,xhrUsable:I,resetListeners:m,getSubmitMethod:f}},{}],11:[function(n,t,e){var r=document.createElement("div");r.innerHTML="<!--[if lte IE 6]><div></div><![endif]--><!--[if lte IE 7]><div></div><![endif]--><!--[if lte IE 8]><div></div><![endif]--><!--[if lte IE 9]><div></div><![endif]-->";var o,i=r.getElementsByTagName("div").length;o=4===i?6:3===i?7:2===i?8:1===i?9:0,t.exports=o},{}],12:[function(n,t,e){function r(n){a.sendFinal(c,!1),l.conditionallySet()}var o=n(21),i=n(25),a=n(10),s=n(17),u=n(8),c=n("loader"),f=n(6),l=n(14),d=n(35);n(3),n(24).init(c,d.getConfiguration("page_view_timing"));var p="undefined"==typeof window.NREUM.autorun||window.NREUM.autorun;window.NREUM.setToken=u,6===n(11)?c.maxBytes=2e3:c.maxBytes=3e4,c.releaseIds={},i(r),s("mark",o.mark,"api"),o.mark("done"),f("api"),p&&a.sendRUM(c)},{}],13:[function(n,t,e){function r(){return""+location}t.exports={getLocation:r}},{}],14:[function(n,t,e){function r(){var n=!0;"init"in NREUM&&"privacy"in NREUM.init&&(n=NREUM.init.privacy.cookies_enabled),a.navCookie&&n&&s.setCookie()}function o(){document.cookie="NREUM=s="+Number(new Date)+"&r="+i(document.location.href)+"&p="+i(document.referrer)+"; path=/"}var i=n(18),a=n(20),s={conditionallySet:r,setCookie:o};t.exports=s},{}],15:[function(n,t,e){function r(n,t){var e=n["navigation"+a];return t.of=e,i(e,e,t,"n"),i(n[u+a],e,t,"u"),i(n[c+a],e,t,"r"),i(n[u+s],e,t,"ue"),i(n[c+s],e,t,"re"),i(n["fetch"+a],e,t,"f"),i(n[f+a],e,t,"dn"),i(n[f+s],e,t,"dne"),i(n["c"+l+a],e,t,"c"),i(n["secureC"+l+"ion"+a],e,t,"s"),i(n["c"+l+s],e,t,"ce"),i(n[d+a],e,t,"rq"),i(n[p+a],e,t,"rp"),i(n[p+s],e,t,"rpe"),i(n.domLoading,e,t,"dl"),i(n.domInteractive,e,t,"di"),i(n[h+a],e,t,"ds"),i(n[h+s],e,t,"de"),i(n.domComplete,e,t,"dc"),i(n[m+a],e,t,"l"),i(n[m+s],e,t,"le"),t}function o(n,t){return i(n.type,0,t,"ty"),i(n.redirectCount,0,t,"rc"),t}function i(n,t,e,r){var o;"number"==typeof n&&n>0&&(o=Math.round(n-t),e[r]=o),v.push(o)}var a="Start",s="End",u="unloadEvent",c="redirect",f="domainLookup",l="onnect",d="request",p="response",m="loadEvent",h="domContentLoadedEvent",v=[];t.exports={addPT:r,addPN:o,nt:v}},{}],16:[function(n,t,e){function r(n,t){o[n]=t}var o={};t.exports={addMetric:r,metrics:o}},{}],17:[function(n,t,e){function r(n,t,e,r){o(r||i,n,t,e)}function o(n,t,e,r){r||(r="feature"),n||(n=i);var o=a[r]=a[r]||{},s=o[t]=o[t]||[];s.push([n,e])}var i=n("handle").ee;t.exports=r,r.on=o;var a=r.handlers={}},{}],18:[function(n,t,e){function r(n){var t,e=0;for(t=0;t<n.length;t++)e+=(t+1)*n.charCodeAt(t);return Math.abs(e)}t.exports=r},{}],19:[function(n,t,e){function r(n){var t,e=!1;return function(){return e?t:(e=!0,t=n.apply(this,o(arguments)))}}var o=n(39);t.exports=r},{}],20:[function(n,t,e){function r(){var n=o()||i();n&&(s.mark("starttime",n),u.offset=n)}function o(){if(!(c&&c<9)){var e=n(40);return e.exists?(t.exports.navCookie=!1,window.performance.timing.navigationStart):void 0}}function i(){for(var n=document.cookie.split(" "),t=0;t<n.length;t++)if(0===n[t].indexOf("NREUM=")){for(var e,r,o,i,s=n[t].substring("NREUM=".length).split("&"),u=0;u<s.length;u++)0===s[u].indexOf("s=")?o=s[u].substring(2):0===s[u].indexOf("p=")?(r=s[u].substring(2),";"===r.charAt(r.length-1)&&(r=r.substr(0,r.length-1))):0===s[u].indexOf("r=")&&(e=s[u].substring(2),";"===e.charAt(e.length-1)&&(e=e.substr(0,e.length-1)));if(e){var c=a(document.referrer);i=c==e,i||(i=a(document.location.href)==e&&c==r)}if(i&&o){var f=(new Date).getTime();if(f-o>6e4)return;return o}}}var a=n(18),s=n(21),u=n("loader"),c=n(36);t.exports={navCookie:!0},r()},{}],21:[function(n,t,e){function r(n,t){"undefined"==typeof t&&(t=a()+a.offset),s[n]=t}function o(n,t,e){var r=s[t],o=s[e];"undefined"!=typeof r&&"undefined"!=typeof o&&i.store("measures",n,{value:o-r})}var i=n(2),a=n(37),s={};t.exports={mark:r,measure:o}},{}],22:[function(n,t,e){function r(n){try{return i("",{"":n})}catch(t){try{s.emit("internal-error",[t])}catch(e){}}}function o(n){return u.lastIndex=0,u.test(n)?'"'+n.replace(u,function(n){var t=c[n];return"string"==typeof t?t:"\\u"+("0000"+n.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+n+'"'}function i(n,t){var e=t[n];switch(typeof e){case"string":return o(e);case"number":return isFinite(e)?String(e):"null";case"boolean":return String(e);case"object":if(!e)return"null";var r=[];if(e instanceof window.Array||"[object Array]"===Object.prototype.toString.apply(e)){for(var s=e.length,u=0;u<s;u+=1)r[u]=i(u,e)||"null";return 0===r.length?"[]":"["+r.join(",")+"]"}return a(e,function(n){var t=i(n,e);t&&r.push(o(n)+":"+t)}),0===r.length?"{}":"{"+r.join(",")+"}"}}var a=n(38),s=n("ee"),u=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,c={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};t.exports=r},{}],23:[function(n,t,e){var r=t.exports={};r.jsonp=function o(n,o){var t=document.createElement("script");t.type="text/javascript",t.src=n+"&jsonp="+o;var e=document.getElementsByTagName("script")[0];return e.parentNode.insertBefore(t,e),t},r.xhr=function(n,t,e){var r=new XMLHttpRequest;r.open("POST",n,!e);try{"withCredentials"in r&&(r.withCredentials=!0)}catch(o){}return r.setRequestHeader("content-type","text/plain"),r.send(t),r},r.xhrSync=function(n,t){return r.xhr(n,t,!0)},r.img=function(n){var t=new Image;return t.src=n,t},r.beacon=function(n,t){return navigator.sendBeacon(n,t)}},{}],24:[function(n,t,e){function r(n,t){if(v(t)){j=n,t||(t={});var e=t.maxLCPTimeSeconds||60,r=t.initialHarvestSeconds||10;_=t.harvestTimeSeconds||30;var u=new S(j,"events",{onFinished:l,getPayload:m});E("timing",f),E("lcp",i),E("cls",a),E("pageHide",s),A(d),setTimeout(function(){o(),N=!0},1e3*e),u.startTimer(_,r)}}function o(){if(!N&&null!==q){var n=q[0],t=q[1],e={size:n.size,eid:n.id};t&&(e.cls=t),c("lcp",Math.floor(n.startTime),e,!1),N=!0}}function i(n){if(q){var t=q[0];if(t.size>=n.size)return}q=[n,C]}function a(n){null===C&&(C=0),C+=n.value}function s(n,t){R||"hidden"!==t||(c("pageHide",n,null,!0),R=!0)}function u(){c("unload",w(),null,!0)}function c(n,t,e,r){e=e||{},r&&null!==C&&(e.cls=C),H.push({name:n,value:t,attrs:e})}function f(n,t,e){"fi"===n&&setTimeout(o,0),c(n,t,e,!0)}function l(n){if(n.retry&&M.length>0){for(var t=0;t<M.length;t++)H.push(M[t]);M=[]}}function d(){o(),u();var n=m({retry:!1});T.send("events",j,n,{unload:!0})}function p(n){var t=n.attrs||{},e=j.info.jsAttributes||{};k(e,function(n,e){"size"!==n&&"eid"!==n&&"cls"!==n&&"type"!==n&&"fid"!==n&&(t[n]=e)})}function m(n){if(0!==H.length){var t=h(H);if(n.retry)for(var e=0;e<H.length;e++)M.push(H[e]);return H=[],{body:{e:t}}}}function h(n){for(var t=x(),e="bel.6;",r=0;r<n.length;r++){var o=n[r];e+="e,",e+=t(o.name)+",",e+=g(o.value,y,!1)+",",p(o);var i=b(o.attrs,t);i&&i.length>0&&(e+=y(i.length)+";"+i.join(";")),r+1<n.length&&(e+=";")}return e}function v(n){return!n||n.enabled!==!1}var g=n(4).nullable,y=n(4).numeric,x=n(4).getAddStringContext,b=n(4).addCustomAttributes,w=n(37),k=n(38),j=null,T=n(10),S=n(9),E=n(17),A=n(25),H=[],M=[],N=!1,q=null,C=null,R=!1;t.exports={getPayload:h,timings:H,init:r,finalHarvest:d};var _=30},{}],25:[function(n,t,e){function r(n){var t=i(n);!o||navigator.sendBeacon?a("pagehide",t):a("beforeunload",t),a("unload",t)}var o=n(36),i=n(19),a=n(1);t.exports=r},{}],26:[function(n,t,e){function r(n){if(n){var t=n.match(o);return t?t[1]:void 0}}var o=/([a-z0-9]+)$/i;t.exports=r},{}],27:[function(n,t,e){function r(n){var t=null;try{if(t=l(n))return t}catch(e){if(v)throw e}try{if(t=o(n))return t}catch(e){if(v)throw e}try{if(t=d(n))return t}catch(e){if(v)throw e}try{if(t=s(n))return t}catch(e){if(v)throw e}try{if(t=u(n))return t}catch(e){if(v)throw e}return{mode:"failed",stackString:"",frames:[]}}function o(n){if(!n.stack)return null;var t=p(n.stack.split("\n"),i,{frames:[],stackLines:[],wrapperSeen:!1});return t.frames.length?{mode:"stack",name:n.name||c(n),message:n.message,stackString:m(t.stackLines),frames:t.frames}:null}function i(n,t){var e=a(t);return e?(f(e.func)?n.wrapperSeen=!0:n.stackLines.push(t),n.wrapperSeen||n.frames.push(e),n):(n.stackLines.push(t),n)}function a(n){var t=n.match(x);return t||(t=n.match(y)),t?{url:t[2],func:"Anonymous function"!==t[1]&&"global code"!==t[1]&&t[1]||null,line:+t[3],column:t[4]?+t[4]:null}:n.match(b)||n.match(w)||"anonymous"===n?{func:"evaluated code"}:void 0}function s(n){if(!("line"in n))return null;var t=n.name||c(n);if(!n.sourceURL)return{mode:"sourceline",name:t,message:n.message,stackString:c(n)+": "+n.message+"\n    in evaluated code",frames:[{func:"evaluated code"}]};var e=t+": "+n.message+"\n    at "+n.sourceURL;return n.line&&(e+=":"+n.line,n.column&&(e+=":"+n.column)),{mode:"sourceline",name:t,message:n.message,stackString:e,frames:[{url:n.sourceURL,line:n.line,column:n.column}]}}function u(n){var t=n.name||c(n);return t?{mode:"nameonly",name:t,message:n.message,stackString:t+": "+n.message,frames:[]}:null}function c(n){var t=g.exec(String(n.constructor));return t&&t.length>1?t[1]:"unknown"}function f(n){return n&&n.indexOf("nrWrapper")>=0}function l(n){if(!n.stacktrace)return null;for(var t,e=n.stacktrace,r=/ line (\d+), column (\d+) in (?:<anonymous function: ([^>]+)>|([^\)]+))\(.*\) in (.*):\s*$/i,o=e.split("\n"),i=[],a=[],s=!1,u=0,l=o.length;u<l;u+=2)if(t=r.exec(o[u])){var d={line:+t[1],column:+t[2],func:t[3]||t[4],url:t[5]};f(d.func)?s=!0:a.push(o[u]),s||i.push(d)}else a.push(o[u]);return i.length?{mode:"stacktrace",name:n.name||c(n),message:n.message,stackString:m(a),frames:i}:null}function d(n){var t=n.message.split("\n");if(t.length<4)return null;var e,r,o,i=/^\s*Line (\d+) of linked script ((?:file|http|https)\S+)(?:: in function (\S+))?\s*$/i,a=/^\s*Line (\d+) of inline#(\d+) script in ((?:file|http|https)\S+)(?:: in function (\S+))?\s*$/i,s=/^\s*Line (\d+) of function script\s*$/i,u=[],l=[],d=document.getElementsByTagName("script"),p=[],v=!1;for(r in d)h.call(d,r)&&!d[r].src&&p.push(d[r]);for(r=2,o=t.length;r<o;r+=2){var g=null;if(e=i.exec(t[r]))g={url:e[2],func:e[3],line:+e[1]};else if(e=a.exec(t[r]))g={url:e[3],func:e[4]};else if(e=s.exec(t[r])){var y=window.location.href.replace(/#.*$/,""),x=e[1];g={url:y,line:x,func:""}}g&&(f(g.func)?v=!0:l.push(t[r]),v||u.push(g))}return u.length?{mode:"multiline",name:n.name||c(n),message:t[0],stackString:m(l),frames:u}:null}var p=n(41),m=n(28),h=Object.prototype.hasOwnProperty,v=!1,g=/function (.+?)\s*\(/,y=/^\s*at (?:((?:\[object object\])?(?:[^(]*\([^)]*\))*[^()]*(?: \[as \S+\])?) )?\(?((?:file|http|https|chrome-extension):.*?)?:(\d+)(?::(\d+))?\)?\s*$/i,x=/^\s*(?:(\S*|global code)(?:\(.*?\))?@)?((?:file|http|https|chrome|safari-extension).*?):(\d+)(?::(\d+))?\s*$/i,b=/^\s*at .+ \(eval at \S+ \((?:(?:file|http|https):[^)]+)?\)(?:, [^:]*:\d+:\d+)?\)$/i,w=/^\s*at Function code \(Function code:\d+:\d+\)\s*/i;t.exports=r},{}],28:[function(n,t,e){function r(n){var t;if(n.length>100){var e=n.length-100;t=n.slice(0,50).join("\n"),t+="\n< ...truncated "+e+" lines... >\n",t+=n.slice(-50).join("\n")}else t=n.join("\n");return t}function o(n){return n.length>a?n.substr(0,a):n}var i=/^\n+|\n+$/g,a=65530;t.exports=function(n){return r(n).replace(i,"")},t.exports.truncateSize=o},{}],29:[function(n,t,e){function r(n){var t=d.take(["err","ierr"]);n.retry&&(l=t);var e={body:t,qs:{}},r=T(g.releaseIds);return"{}"!==r&&(e.qs.ri=r),t&&t.err&&t.err.length&&!q&&(e.qs.pve="1",q=!0),e}function o(n){n.sent||k.pingErrors(g),n.retry&&l&&(A(l,function(n,t){for(var e=0;e<t.length;e++){var r=t[e],o=a(r.params,r.custom);d.merge(n,o,r.metrics,r.params,r.custom)}}),l=null)}function i(n){return v(n.exceptionClass)^n.stackHash}function a(n,t){return i(n)+":"+v(T(t))}function s(n,t){if("string"!=typeof n)return"";var e=m(n);return e===t?"<inline>":e}function u(n,t){for(var e="",r=0;r<n.frames.length;r++){var o=n.frames[r],i=p(o.func);e&&(e+="\n"),i&&(e+=i+"@"),"string"==typeof o.url&&(e+=o.url),o.line&&(e+=":"+o.line)}return e}function c(n){for(var t=m(g.origin),e=0;e<n.frames.length;e++){var r=n.frames[e],o=r.url,i=s(o,t);i&&i!==r.url&&(r.url=i,n.stackString=n.stackString.split(o).join(i))}return n}function f(n,t,e,r){function o(n,t){y[n]=t&&"object"==typeof t?T(t):t}if(t=t||g.now(),e||!g.onerror||!g.onerror(n)){var a=c(h(n)),s=u(a),f={stackHash:v(s),exceptionClass:a.name,request_uri:window.location.pathname};a.message&&(f.message=""+a.message),x[f.stackHash]?f.browser_stack_hash=v(a.stackString):(x[f.stackHash]=!0,f.stack_trace=M(a.stackString)),f.releaseIds=T(g.releaseIds);var l=i(f);b[l]||(f.pageview=1,b[l]=!0);var p=e?"ierr":"err",m={time:t};if(S("errorAgg",[p,l,f,m]),null!=f._interactionId)N[f._interactionId]=N[f._interactionId]||[],N[f._interactionId].push([p,l,f,m,w,r]);else{var y={},w=g.info.jsAttributes;A(w,o),r&&A(r,o);var k=v(T(y)),j=l+":"+k;d.store(p,j,f,m,y)}}}var l,d=n(2),p=n(26),m=n(5),h=n(27),v=n(30),g=n("loader"),y=n("ee"),x={},b={},w=n(17),k=n(10),j=n(9),T=n(22),S=n("handle"),E=n("ee"),A=n(38),H=n(35),M=n(28).truncateSize,N={};if(n(20),g.features.err){var q=!1,C=H.getConfiguration("jserrors.harvestTimeSeconds")||60;y.on("feat-err",function(){w("err",f),w("ierr",f),k.on("jserrors",r);var n=new j(g,"jserrors",{onFinished:o});n.startTimer(C)}),k.pingErrors(g),E.on("interactionSaved",function(n){N[n.id]&&(N[n.id].forEach(function(t){function e(n,t){r[n]=t&&"object"==typeof t?T(t):t}var r={},o=t[4],i=t[5];A(o,e),A(n.root.attrs.custom,e),A(i,e);var a=t[2];a.browserInteractionId=n.root.attrs.id,delete a._interactionId,a._interactionNodeId&&(a.parentNodeId=a._interactionNodeId.toString(),delete a._interactionNodeId);var s=t[1]+n.root.attrs.id,u=v(T(r)),c=s+":"+u;d.store(t[0],c,a,t[3],r)}),delete N[n.id])}),E.on("interactionDiscarded",function(n){N[n.id]&&(N[n.id].forEach(function(t){function e(n,t){r[n]=t&&"object"==typeof t?T(t):t}var r={},o=t[4],i=t[5];A(o,e),A(n.root.attrs.custom,e),A(i,e);var a=t[2];delete a._interactionId,delete a._interactionNodeId;var s=t[1],u=v(T(r)),c=s+":"+u;d.store(t[0],c,t[2],t[3],r)}),delete N[n.id])})}},{}],30:[function(n,t,e){function r(n){var t,e=0;if(!n||!n.length)return e;for(var r=0;r<n.length;r++)t=n.charCodeAt(r),e=(e<<5)-e+t,e=0|e;return e}t.exports=r},{}],31:[function(n,t,e){function r(n){var t={qs:{ua:f.info.userAttributes,at:f.info.atts},body:{ins:w}};return n.retry&&(u=w),w=[],t}function o(n){n&&n.sent&&n.retry&&u&&(w=w.concat(u),u=null)}function i(n,t,e){function r(n,t){a[n]=t&&"object"==typeof t?d(t):t}if(!(w.length>=b)){var o,i,a={};"undefined"!=typeof window&&window.document&&window.document.documentElement&&(o=window.document.documentElement.clientWidth,i=window.document.documentElement.clientHeight);var u={timestamp:n+f.offset,timeSinceLoad:n/1e3,browserWidth:o,browserHeight:i,referrerUrl:s,currentUrl:v(""+location),pageUrl:v(f.origin),eventType:"PageAction"};l(u,r),l(k,r),e&&"object"==typeof e&&l(e,r),a.actionName=t||"",w.push(a)}}function a(n,t,e){k[t]=e}var s,u,c=n("ee"),f=n("loader"),l=n(38),d=n(22),p=n(17),m=n(10),h=n(9),v=n(5),g=n(35),y=120,x=g.getConfiguration("ins.harvestTimeSeconds")||30,b=y*x/60,w=[],k=f.info.jsAttributes={};document.referrer&&(s=v(document.referrer)),p("api-setCustomAttribute",a,"api"),c.on("feat-ins",function(){p("api-addPageAction",i),m.on("ins",r);var n=new h(f,"ins",{onFinished:o});n.startTimer(x,0)})},{}],32:[function(n,t,e){function r(n){var t,e,r,o=Date.now();for(t in n)e=n[t],"number"==typeof e&&e>0&&e<o&&(r=n[t]-b.offset,d({n:t,s:r,e:r,o:"document",t:"timing"}))}function o(n,t,e,r){var o="timer";"requestAnimationFrame"===r&&(o=r);var i={n:r,s:t,e:e,o:"window",t:o};d(i)}function i(n,t,e,r){if(n.type in q)return!1;var o={n:a(n.type),s:e,e:r,t:"event"};try{o.o=s(n.target,t)}catch(i){o.o=s(null,t)}d(o)}function a(n){var t=n;return T(R,function(e,r){n in r&&(t=e)}),t}function s(n,t){var e="unknown";if(n&&n instanceof XMLHttpRequest){var r=P.context(n).params;e=r.status+" "+r.method+": "+r.host+r.pathname}else n&&"string"==typeof n.tagName&&(e=n.tagName.toLowerCase(),n.id&&(e+="#"+n.id),n.className&&(e+="."+A(n.classList).join(".")));return"unknown"===e&&(t===document?e="document":t===window?e="window":t instanceof FileReader&&(e="FileReader")),e}function u(n,t,e){var r={n:"history.pushState",s:e,e:e,o:n,t:t};d(r)}function c(n){n.forEach(function(n){var t=H(n.name),e={n:n.initiatorType,s:0|n.fetchStart,e:0|n.responseEnd,o:t.protocol+"://"+t.hostname+":"+t.port+t.pathname,t:n.entryType};e.s<F||(F=e.s,d(e))})}function f(n,t,e,r){if("err"===n){var o={n:"error",s:r.time,e:r.time,o:e.message,t:e.stackHash};d(o)}}function l(n,t,e,r){if("xhr"===n){var o={n:"Ajax",s:r.time,e:r.time+r.duration,o:e.status+" "+e.method+": "+e.host+e.pathname,t:"ajax"};d(o)}}function d(n){if(!(I>=B)){var t=_[n.n];t||(t=_[n.n]=[]),t.push(n),I++}}function p(n,t){if(!(I>=B)){var e=_[n];e||(e=_[n]=[]),_[n]=t.concat(e),I+=t.length}}function m(n){c(window.performance.getEntriesByType("resource"));var t=S(T(_,function(n,t){return n in C?S(T(S(t.sort(h),v(n),{}),g),y,[]):t}),y,[]);if(0===t.length)return{};n&&(U=_),_={},I=0;var e={qs:{st:""+b.offset,ptid:N},body:{res:t}};if(!N){e.qs.ua=b.info.userAttributes,e.qs.at=b.info.atts;var r=E(b.info.jsAttributes);e.qs.ja="{}"===r?null:r}return e}function h(n,t){return n.s-t.s}function v(n){var t=C[n][0],e=C[n][1],r={};return function(o,i){var a=o[i.o];a||(a=o[i.o]=[]);var s=r[i.o];return"scrolling"!==n||x(i)?s&&i.s-s.s<e&&s.e>i.s-t?s.e=i.e:(r[i.o]=i,a.push(i)):(r[i.o]=null,i.n="scroll",a.push(i)),o}}function g(n,t){return t}function y(n,t){return n.concat(t)}function x(n){var t=4;return!!(n&&"number"==typeof n.e&&"number"==typeof n.s&&n.e-n.s<t)}var b=n("loader"),w=n(17),k=n(10),j=n(9),T=n(38),S=n(41),E=n(22),A=n(39),H=n(34),M=n(35);if(k.xhrUsable&&b.xhrWrappable){var N="",q={mouseup:!0,mousedown:!0},C={typing:[1e3,2e3],scrolling:[100,1e3],mousing:[1e3,2e3],touching:[1e3,2e3]},R={typing:{keydown:!0,keyup:!0,keypress:!0},mousing:{mousemove:!0,mouseenter:!0,mouseleave:!0,mouseover:!0,mouseout:!0},scrolling:{scroll:!0},touching:{touchstart:!0,touchmove:!0,touchend:!0,touchcancel:!0,touchenter:!0,touchleave:!0}},_={},I=0,U=null,L=M.getConfiguration("stn.harvestTimeSeconds")||10,B=M.getConfiguration("stn.maxNodesPerHarvest")||1e3,P=n("ee");if(t.exports={_takeSTNs:m},n(20),b.features.stn){P.on("feat-stn",function(){function n(n){n.sent&&n.responseText&&!N&&(N=n.responseText,e.startTimer(L)),n.sent&&n.retry&&U&&(T(U,function(n,t){p(n,t)}),U=null)}function t(n){if(b.now()>9e5)return e.stopTimer(),void(_={});if(!(N&&I<=30))return m(n.retry)}r(window.performance.timing),k.on("resources",t);var e=new j(b,"resources",{onFinished:n,retryDelay:L});e.runHarvest({needResponse:!0}),w("bst",i),w("bstTimer",o),w("bstResource",c),w("bstHist",u),w("bstXhrAgg",l),w("bstApi",d),w("errorAgg",f)});var F=0}}},{}],33:[function(n,t,e){function r(n,t,e){t.time=e;var r,i="xhr";r=s(n.cat?[n.status,n.cat]:[n.status,n.host,n.pathname]),f("bstXhrAgg",[i,r,n,t]),o.store(i,r,n,t)}var o=n(2),i=n(17),a=n(10),s=n(22),u=n("loader"),c=n("ee"),f=n("handle");u.features.xhr&&(a.on("jserrors",function(){return{body:o.take(["xhr"])}}),c.on("feat-err",function(){i("xhr",r)}),t.exports=r)},{}],34:[function(n,t,e){var r={};t.exports=function(n){if(n in r)return r[n];var t=document.createElement("a"),e=window.location,o={};t.href=n,o.port=t.port;var i=t.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=t.hostname||e.hostname,o.pathname=t.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!t.protocol||":"===t.protocol||t.protocol===e.protocol,s=t.hostname===document.domain&&t.port===e.port;return o.sameOrigin=a&&(!t.hostname||s),"/"===o.pathname&&(r[n]=o),o}},{}],35:[function(n,t,e){function r(n){if(NREUM.init){for(var t=NREUM.init,e=n.split("."),r=0;r<e.length-1;r++)if(t=t[e[r]],"object"!=typeof t)return;return t=t[e[e.length-1]]}}t.exports={getConfiguration:r}},{}],36:[function(n,t,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),t.exports=r},{}],37:[function(n,t,e){function r(){return s.exists&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-a}function o(){return i}var i=(new Date).getTime(),a=i,s=n(40);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=o},{}],38:[function(n,t,e){function r(n,t){var e=[],r="",i=0;for(r in n)o.call(n,r)&&(e[i]=t(r,n[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],39:[function(n,t,e){function r(n,t,e){t||(t=0),"undefined"==typeof e&&(e=n?n.length:0);for(var r=-1,o=e-t||0,i=Array(o<0?0:o);++r<o;)i[r]=n[t+r];return i}t.exports=r},{}],40:[function(n,t,e){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],41:[function(n,t,e){function r(n,t,e){var r=0;for("undefined"==typeof e&&(e=n[0],r=1),r;r<n.length;r++)e=t(e,n[r]);return e}t.exports=r},{}]},{},[29,33,32,31,12]);