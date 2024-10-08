! function (e, t) { "use strict"; "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function (e) { if (!e.document) throw new Error("jQuery requires a window with a document"); return t(e) } : t(e) }("undefined" != typeof window ? window : this, function (e, t) {
  "use strict";
  var n = [],
    r = e.document,
    i = Object.getPrototypeOf,
    o = n.slice,
    a = n.concat,
    s = n.push,
    u = n.indexOf,
    l = {},
    c = l.toString,
    f = l.hasOwnProperty,
    p = f.toString,
    d = p.call(Object),
    h = {},
    g = function e(t) { return "function" == typeof t && "number" != typeof t.nodeType },
    y = function e(t) { return null != t && t === t.window },
    v = { type: !0, src: !0, noModule: !0 };

  function m(e, t, n) {
    var i, o = (t = t || r).createElement("script");
    if (o.text = e, n)
      for (i in v) n[i] && (o[i] = n[i]);
    t.head.appendChild(o).parentNode.removeChild(o)
  }

  function x(e) { return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[c.call(e)] || "object" : typeof e }
  var b = "3.3.1",
    w = function (e, t) { return new w.fn.init(e, t) },
    T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
  w.fn = w.prototype = {
    jquery: "3.3.1",
    constructor: w,
    length: 0,
    toArray: function () { return o.call(this) },
    get: function (e) { return null == e ? o.call(this) : e < 0 ? this[e + this.length] : this[e] },
    pushStack: function (e) { var t = w.merge(this.constructor(), e); return t.prevObject = this, t },
    each: function (e) { return w.each(this, e) },
    map: function (e) { return this.pushStack(w.map(this, function (t, n) { return e.call(t, n, t) })) },
    slice: function () { return this.pushStack(o.apply(this, arguments)) },
    first: function () { return this.eq(0) },
    last: function () { return this.eq(-1) },
    eq: function (e) {
      var t = this.length,
        n = +e + (e < 0 ? t : 0);
      return this.pushStack(n >= 0 && n < t ? [this[n]] : [])
    },
    end: function () { return this.prevObject || this.constructor() },
    push: s,
    sort: n.sort,
    splice: n.splice
  }, w.extend = w.fn.extend = function () {
    var e, t, n, r, i, o, a = arguments[0] || {},
      s = 1,
      u = arguments.length,
      l = !1;
    for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || g(a) || (a = {}), s === u && (a = this, s--); s < u; s++)
      if (null != (e = arguments[s]))
        for (t in e) n = a[t], a !== (r = e[t]) && (l && r && (w.isPlainObject(r) || (i = Array.isArray(r))) ? (i ? (i = !1, o = n && Array.isArray(n) ? n : []) : o = n && w.isPlainObject(n) ? n : {}, a[t] = w.extend(l, o, r)) : void 0 !== r && (a[t] = r));
    return a
  }, w.extend({
    expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""),
    isReady: !0,
    error: function (e) { throw new Error(e) },
    noop: function () { },
    isPlainObject: function (e) { var t, n; return !(!e || "[object Object]" !== c.call(e)) && (!(t = i(e)) || "function" == typeof (n = f.call(t, "constructor") && t.constructor) && p.call(n) === d) },
    isEmptyObject: function (e) { var t; for (t in e) return !1; return !0 },
    globalEval: function (e) { m(e) },
    each: function (e, t) {
      var n, r = 0;
      if (C(e)) {
        for (n = e.length; r < n; r++)
          if (!1 === t.call(e[r], r, e[r])) break
      } else
        for (r in e)
          if (!1 === t.call(e[r], r, e[r])) break; return e
    },
    trim: function (e) { return null == e ? "" : (e + "").replace(T, "") },
    makeArray: function (e, t) { var n = t || []; return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : s.call(n, e)), n },
    inArray: function (e, t, n) { return null == t ? -1 : u.call(t, e, n) },
    merge: function (e, t) { for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r]; return e.length = i, e },
    grep: function (e, t, n) { for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++)(r = !t(e[o], o)) !== s && i.push(e[o]); return i },
    map: function (e, t, n) {
      var r, i, o = 0,
        s = [];
      if (C(e))
        for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && s.push(i);
      else
        for (o in e) null != (i = t(e[o], o, n)) && s.push(i);
      return a.apply([], s)
    },
    guid: 1,
    support: h
  }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) { l["[object " + t + "]"] = t.toLowerCase() });

  function C(e) {
    var t = !!e && "length" in e && e.length,
      n = x(e);
    return !g(e) && !y(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
  }
  var E = function (e) {
    var t, n, r, i, o, a, s, u, l, c, f, p, d, h, g, y, v, m, x, b = "sizzle" + 1 * new Date,
      w = e.document,
      T = 0,
      C = 0,
      E = ae(),
      k = ae(),
      S = ae(),
      D = function (e, t) { return e === t && (f = !0), 0 },
      N = {}.hasOwnProperty,
      A = [],
      j = A.pop,
      q = A.push,
      L = A.push,
      H = A.slice,
      O = function (e, t) {
        for (var n = 0, r = e.length; n < r; n++)
          if (e[n] === t) return n;
        return -1
      },
      P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
      M = "[\\x20\\t\\r\\n\\f]",
      R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
      I = "\\[" + M + "*(" + R + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + M + "*\\]",
      W = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + I + ")*)|.*)\\)|)",
      $ = new RegExp(M + "+", "g"),
      B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
      F = new RegExp("^" + M + "*," + M + "*"),
      _ = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
      z = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"),
      X = new RegExp(W),
      U = new RegExp("^" + R + "$"),
      V = { ID: new RegExp("^#(" + R + ")"), CLASS: new RegExp("^\\.(" + R + ")"), TAG: new RegExp("^(" + R + "|[*])"), ATTR: new RegExp("^" + I), PSEUDO: new RegExp("^" + W), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"), bool: new RegExp("^(?:" + P + ")$", "i"), needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i") },
      G = /^(?:input|select|textarea|button)$/i,
      Y = /^h\d$/i,
      Q = /^[^{]+\{\s*\[native \w/,
      J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
      K = /[+~]/,
      Z = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"),
      ee = function (e, t, n) { var r = "0x" + t - 65536; return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320) },
      te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
      ne = function (e, t) { return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e },
      re = function () { p() },
      ie = me(function (e) { return !0 === e.disabled && ("form" in e || "label" in e) }, { dir: "parentNode", next: "legend" });
    try { L.apply(A = H.call(w.childNodes), w.childNodes), A[w.childNodes.length].nodeType } catch (e) {
      L = {
        apply: A.length ? function (e, t) { q.apply(e, H.call(t)) } : function (e, t) {
          var n = e.length,
            r = 0;
          while (e[n++] = t[r++]);
          e.length = n - 1
        }
      }
    }

    function oe(e, t, r, i) {
      var o, s, l, c, f, h, v, m = t && t.ownerDocument,
        T = t ? t.nodeType : 9;
      if (r = r || [], "string" != typeof e || !e || 1 !== T && 9 !== T && 11 !== T) return r;
      if (!i && ((t ? t.ownerDocument || t : w) !== d && p(t), t = t || d, g)) {
        if (11 !== T && (f = J.exec(e)))
          if (o = f[1]) { if (9 === T) { if (!(l = t.getElementById(o))) return r; if (l.id === o) return r.push(l), r } else if (m && (l = m.getElementById(o)) && x(t, l) && l.id === o) return r.push(l), r } else { if (f[2]) return L.apply(r, t.getElementsByTagName(e)), r; if ((o = f[3]) && n.getElementsByClassName && t.getElementsByClassName) return L.apply(r, t.getElementsByClassName(o)), r }
        if (n.qsa && !S[e + " "] && (!y || !y.test(e))) {
          if (1 !== T) m = t, v = e;
          else if ("object" !== t.nodeName.toLowerCase()) {
            (c = t.getAttribute("id")) ? c = c.replace(te, ne) : t.setAttribute("id", c = b), s = (h = a(e)).length;
            while (s--) h[s] = "#" + c + " " + ve(h[s]);
            v = h.join(","), m = K.test(e) && ge(t.parentNode) || t
          }
          if (v) try { return L.apply(r, m.querySelectorAll(v)), r } catch (e) { } finally { c === b && t.removeAttribute("id") }
        }
      }
      return u(e.replace(B, "$1"), t, r, i)
    }

    function ae() {
      var e = [];

      function t(n, i) { return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = i }
      return t
    }

    function se(e) { return e[b] = !0, e }

    function ue(e) { var t = d.createElement("fieldset"); try { return !!e(t) } catch (e) { return !1 } finally { t.parentNode && t.parentNode.removeChild(t), t = null } }

    function le(e, t) {
      var n = e.split("|"),
        i = n.length;
      while (i--) r.attrHandle[n[i]] = t
    }

    function ce(e, t) {
      var n = t && e,
        r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
      if (r) return r;
      if (n)
        while (n = n.nextSibling)
          if (n === t) return -1;
      return e ? 1 : -1
    }

    function fe(e) { return function (t) { return "input" === t.nodeName.toLowerCase() && t.type === e } }

    function pe(e) { return function (t) { var n = t.nodeName.toLowerCase(); return ("input" === n || "button" === n) && t.type === e } }

    function de(e) { return function (t) { return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ie(t) === e : t.disabled === e : "label" in t && t.disabled === e } }

    function he(e) {
      return se(function (t) {
        return t = +t, se(function (n, r) {
          var i, o = e([], n.length, t),
            a = o.length;
          while (a--) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
        })
      })
    }

    function ge(e) { return e && "undefined" != typeof e.getElementsByTagName && e }
    n = oe.support = {}, o = oe.isXML = function (e) { var t = e && (e.ownerDocument || e).documentElement; return !!t && "HTML" !== t.nodeName }, p = oe.setDocument = function (e) {
      var t, i, a = e ? e.ownerDocument || e : w;
      return a !== d && 9 === a.nodeType && a.documentElement ? (d = a, h = d.documentElement, g = !o(d), w !== d && (i = d.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", re, !1) : i.attachEvent && i.attachEvent("onunload", re)), n.attributes = ue(function (e) { return e.className = "i", !e.getAttribute("className") }), n.getElementsByTagName = ue(function (e) { return e.appendChild(d.createComment("")), !e.getElementsByTagName("*").length }), n.getElementsByClassName = Q.test(d.getElementsByClassName), n.getById = ue(function (e) { return h.appendChild(e).id = b, !d.getElementsByName || !d.getElementsByName(b).length }), n.getById ? (r.filter.ID = function (e) { var t = e.replace(Z, ee); return function (e) { return e.getAttribute("id") === t } }, r.find.ID = function (e, t) { if ("undefined" != typeof t.getElementById && g) { var n = t.getElementById(e); return n ? [n] : [] } }) : (r.filter.ID = function (e) { var t = e.replace(Z, ee); return function (e) { var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id"); return n && n.value === t } }, r.find.ID = function (e, t) {
        if ("undefined" != typeof t.getElementById && g) {
          var n, r, i, o = t.getElementById(e);
          if (o) {
            if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
            i = t.getElementsByName(e), r = 0;
            while (o = i[r++])
              if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
          }
          return []
        }
      }), r.find.TAG = n.getElementsByTagName ? function (e, t) { return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0 } : function (e, t) {
        var n, r = [],
          i = 0,
          o = t.getElementsByTagName(e);
        if ("*" === e) { while (n = o[i++]) 1 === n.nodeType && r.push(n); return r }
        return o
      }, r.find.CLASS = n.getElementsByClassName && function (e, t) { if ("undefined" != typeof t.getElementsByClassName && g) return t.getElementsByClassName(e) }, v = [], y = [], (n.qsa = Q.test(d.querySelectorAll)) && (ue(function (e) { h.appendChild(e).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && y.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || y.push("\\[" + M + "*(?:value|" + P + ")"), e.querySelectorAll("[id~=" + b + "-]").length || y.push("~="), e.querySelectorAll(":checked").length || y.push(":checked"), e.querySelectorAll("a#" + b + "+*").length || y.push(".#.+[+~]") }), ue(function (e) {
        e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
        var t = d.createElement("input");
        t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && y.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && y.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && y.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), y.push(",.*:")
      })), (n.matchesSelector = Q.test(m = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ue(function (e) { n.disconnectedMatch = m.call(e, "*"), m.call(e, "[s!='']:x"), v.push("!=", W) }), y = y.length && new RegExp(y.join("|")), v = v.length && new RegExp(v.join("|")), t = Q.test(h.compareDocumentPosition), x = t || Q.test(h.contains) ? function (e, t) {
        var n = 9 === e.nodeType ? e.documentElement : e,
          r = t && t.parentNode;
        return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
      } : function (e, t) {
        if (t)
          while (t = t.parentNode)
            if (t === e) return !0;
        return !1
      }, D = t ? function (e, t) { if (e === t) return f = !0, 0; var r = !e.compareDocumentPosition - !t.compareDocumentPosition; return r || (1 & (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e === d || e.ownerDocument === w && x(w, e) ? -1 : t === d || t.ownerDocument === w && x(w, t) ? 1 : c ? O(c, e) - O(c, t) : 0 : 4 & r ? -1 : 1) } : function (e, t) {
        if (e === t) return f = !0, 0;
        var n, r = 0,
          i = e.parentNode,
          o = t.parentNode,
          a = [e],
          s = [t];
        if (!i || !o) return e === d ? -1 : t === d ? 1 : i ? -1 : o ? 1 : c ? O(c, e) - O(c, t) : 0;
        if (i === o) return ce(e, t);
        n = e;
        while (n = n.parentNode) a.unshift(n);
        n = t;
        while (n = n.parentNode) s.unshift(n);
        while (a[r] === s[r]) r++;
        return r ? ce(a[r], s[r]) : a[r] === w ? -1 : s[r] === w ? 1 : 0
      }, d) : d
    }, oe.matches = function (e, t) { return oe(e, null, null, t) }, oe.matchesSelector = function (e, t) {
      if ((e.ownerDocument || e) !== d && p(e), t = t.replace(z, "='$1']"), n.matchesSelector && g && !S[t + " "] && (!v || !v.test(t)) && (!y || !y.test(t))) try { var r = m.call(e, t); if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r } catch (e) { }
      return oe(t, d, null, [e]).length > 0
    }, oe.contains = function (e, t) { return (e.ownerDocument || e) !== d && p(e), x(e, t) }, oe.attr = function (e, t) {
      (e.ownerDocument || e) !== d && p(e);
      var i = r.attrHandle[t.toLowerCase()],
        o = i && N.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !g) : void 0;
      return void 0 !== o ? o : n.attributes || !g ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null
    }, oe.escape = function (e) { return (e + "").replace(te, ne) }, oe.error = function (e) { throw new Error("Syntax error, unrecognized expression: " + e) }, oe.uniqueSort = function (e) {
      var t, r = [],
        i = 0,
        o = 0;
      if (f = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(D), f) { while (t = e[o++]) t === e[o] && (i = r.push(o)); while (i--) e.splice(r[i], 1) }
      return c = null, e
    }, i = oe.getText = function (e) {
      var t, n = "",
        r = 0,
        o = e.nodeType;
      if (o) { if (1 === o || 9 === o || 11 === o) { if ("string" == typeof e.textContent) return e.textContent; for (e = e.firstChild; e; e = e.nextSibling) n += i(e) } else if (3 === o || 4 === o) return e.nodeValue } else
        while (t = e[r++]) n += i(t);
      return n
    }, (r = oe.selectors = {
      cacheLength: 50,
      createPseudo: se,
      match: V,
      attrHandle: {},
      find: {},
      relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } },
      preFilter: { ATTR: function (e) { return e[1] = e[1].replace(Z, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4) }, CHILD: function (e) { return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || oe.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && oe.error(e[0]), e }, PSEUDO: function (e) { var t, n = !e[6] && e[2]; return V.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3)) } },
      filter: {
        TAG: function (e) { var t = e.replace(Z, ee).toLowerCase(); return "*" === e ? function () { return !0 } : function (e) { return e.nodeName && e.nodeName.toLowerCase() === t } },
        CLASS: function (e) { var t = E[e + " "]; return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && E(e, function (e) { return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "") }) },
        ATTR: function (e, t, n) { return function (r) { var i = oe.attr(r, e); return null == i ? "!=" === t : !t || (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && i.indexOf(n) > -1 : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? (" " + i.replace($, " ") + " ").indexOf(n) > -1 : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-")) } },
        CHILD: function (e, t, n, r, i) {
          var o = "nth" !== e.slice(0, 3),
            a = "last" !== e.slice(-4),
            s = "of-type" === t;
          return 1 === r && 0 === i ? function (e) { return !!e.parentNode } : function (t, n, u) {
            var l, c, f, p, d, h, g = o !== a ? "nextSibling" : "previousSibling",
              y = t.parentNode,
              v = s && t.nodeName.toLowerCase(),
              m = !u && !s,
              x = !1;
            if (y) {
              if (o) {
                while (g) {
                  p = t;
                  while (p = p[g])
                    if (s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) return !1;
                  h = g = "only" === e && !h && "nextSibling"
                }
                return !0
              }
              if (h = [a ? y.firstChild : y.lastChild], a && m) {
                x = (d = (l = (c = (f = (p = y)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]) && l[2], p = d && y.childNodes[d];
                while (p = ++d && p && p[g] || (x = d = 0) || h.pop())
                  if (1 === p.nodeType && ++x && p === t) { c[e] = [T, d, x]; break }
              } else if (m && (x = d = (l = (c = (f = (p = t)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]), !1 === x)
                while (p = ++d && p && p[g] || (x = d = 0) || h.pop())
                  if ((s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) && ++x && (m && ((c = (f = p[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] = [T, x]), p === t)) break;
              return (x -= i) === r || x % r == 0 && x / r >= 0
            }
          }
        },
        PSEUDO: function (e, t) {
          var n, i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || oe.error("unsupported pseudo: " + e);
          return i[b] ? i(t) : i.length > 1 ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? se(function (e, n) {
            var r, o = i(e, t),
              a = o.length;
            while (a--) e[r = O(e, o[a])] = !(n[r] = o[a])
          }) : function (e) { return i(e, 0, n) }) : i
        }
      },
      pseudos: {
        not: se(function (e) {
          var t = [],
            n = [],
            r = s(e.replace(B, "$1"));
          return r[b] ? se(function (e, t, n, i) {
            var o, a = r(e, null, i, []),
              s = e.length;
            while (s--) (o = a[s]) && (e[s] = !(t[s] = o))
          }) : function (e, i, o) { return t[0] = e, r(t, null, o, n), t[0] = null, !n.pop() }
        }),
        has: se(function (e) { return function (t) { return oe(e, t).length > 0 } }),
        contains: se(function (e) {
          return e = e.replace(Z, ee),
            function (t) { return (t.textContent || t.innerText || i(t)).indexOf(e) > -1 }
        }),
        lang: se(function (e) {
          return U.test(e || "") || oe.error("unsupported lang: " + e), e = e.replace(Z, ee).toLowerCase(),
            function (t) {
              var n;
              do { if (n = g ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-") } while ((t = t.parentNode) && 1 === t.nodeType);
              return !1
            }
        }),
        target: function (t) { var n = e.location && e.location.hash; return n && n.slice(1) === t.id },
        root: function (e) { return e === h },
        focus: function (e) { return e === d.activeElement && (!d.hasFocus || d.hasFocus()) && !!(e.type || e.href || ~e.tabIndex) },
        enabled: de(!1),
        disabled: de(!0),
        checked: function (e) { var t = e.nodeName.toLowerCase(); return "input" === t && !!e.checked || "option" === t && !!e.selected },
        selected: function (e) { return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected },
        empty: function (e) {
          for (e = e.firstChild; e; e = e.nextSibling)
            if (e.nodeType < 6) return !1;
          return !0
        },
        parent: function (e) { return !r.pseudos.empty(e) },
        header: function (e) { return Y.test(e.nodeName) },
        input: function (e) { return G.test(e.nodeName) },
        button: function (e) { var t = e.nodeName.toLowerCase(); return "input" === t && "button" === e.type || "button" === t },
        text: function (e) { var t; return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase()) },
        first: he(function () { return [0] }),
        last: he(function (e, t) { return [t - 1] }),
        eq: he(function (e, t, n) { return [n < 0 ? n + t : n] }),
        even: he(function (e, t) { for (var n = 0; n < t; n += 2) e.push(n); return e }),
        odd: he(function (e, t) { for (var n = 1; n < t; n += 2) e.push(n); return e }),
        lt: he(function (e, t, n) { for (var r = n < 0 ? n + t : n; --r >= 0;) e.push(r); return e }),
        gt: he(function (e, t, n) { for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r); return e })
      }
    }).pseudos.nth = r.pseudos.eq;
    for (t in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) r.pseudos[t] = fe(t);
    for (t in { submit: !0, reset: !0 }) r.pseudos[t] = pe(t);

    function ye() { }
    ye.prototype = r.filters = r.pseudos, r.setFilters = new ye, a = oe.tokenize = function (e, t) {
      var n, i, o, a, s, u, l, c = k[e + " "];
      if (c) return t ? 0 : c.slice(0);
      s = e, u = [], l = r.preFilter;
      while (s) { n && !(i = F.exec(s)) || (i && (s = s.slice(i[0].length) || s), u.push(o = [])), n = !1, (i = _.exec(s)) && (n = i.shift(), o.push({ value: n, type: i[0].replace(B, " ") }), s = s.slice(n.length)); for (a in r.filter) !(i = V[a].exec(s)) || l[a] && !(i = l[a](i)) || (n = i.shift(), o.push({ value: n, type: a, matches: i }), s = s.slice(n.length)); if (!n) break }
      return t ? s.length : s ? oe.error(e) : k(e, u).slice(0)
    };

    function ve(e) { for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value; return r }

    function me(e, t, n) {
      var r = t.dir,
        i = t.next,
        o = i || r,
        a = n && "parentNode" === o,
        s = C++;
      return t.first ? function (t, n, i) {
        while (t = t[r])
          if (1 === t.nodeType || a) return e(t, n, i);
        return !1
      } : function (t, n, u) {
        var l, c, f, p = [T, s];
        if (u) {
          while (t = t[r])
            if ((1 === t.nodeType || a) && e(t, n, u)) return !0
        } else
          while (t = t[r])
            if (1 === t.nodeType || a)
              if (f = t[b] || (t[b] = {}), c = f[t.uniqueID] || (f[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t;
              else { if ((l = c[o]) && l[0] === T && l[1] === s) return p[2] = l[2]; if (c[o] = p, p[2] = e(t, n, u)) return !0 } return !1
      }
    }

    function xe(e) {
      return e.length > 1 ? function (t, n, r) {
        var i = e.length;
        while (i--)
          if (!e[i](t, n, r)) return !1;
        return !0
      } : e[0]
    }

    function be(e, t, n) { for (var r = 0, i = t.length; r < i; r++) oe(e, t[r], n); return n }

    function we(e, t, n, r, i) { for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s))); return a }

    function Te(e, t, n, r, i, o) {
      return r && !r[b] && (r = Te(r)), i && !i[b] && (i = Te(i, o)), se(function (o, a, s, u) {
        var l, c, f, p = [],
          d = [],
          h = a.length,
          g = o || be(t || "*", s.nodeType ? [s] : s, []),
          y = !e || !o && t ? g : we(g, p, e, s, u),
          v = n ? i || (o ? e : h || r) ? [] : a : y;
        if (n && n(y, v, s, u), r) { l = we(v, d), r(l, [], s, u), c = l.length; while (c--) (f = l[c]) && (v[d[c]] = !(y[d[c]] = f)) }
        if (o) {
          if (i || e) {
            if (i) {
              l = [], c = v.length;
              while (c--) (f = v[c]) && l.push(y[c] = f);
              i(null, v = [], l, u)
            }
            c = v.length;
            while (c--) (f = v[c]) && (l = i ? O(o, f) : p[c]) > -1 && (o[l] = !(a[l] = f))
          }
        } else v = we(v === a ? v.splice(h, v.length) : v), i ? i(null, a, v, u) : L.apply(a, v)
      })
    }

    function Ce(e) {
      for (var t, n, i, o = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], u = a ? 1 : 0, c = me(function (e) { return e === t }, s, !0), f = me(function (e) { return O(t, e) > -1 }, s, !0), p = [function (e, n, r) { var i = !a && (r || n !== l) || ((t = n).nodeType ? c(e, n, r) : f(e, n, r)); return t = null, i }]; u < o; u++)
        if (n = r.relative[e[u].type]) p = [me(xe(p), n)];
        else {
          if ((n = r.filter[e[u].type].apply(null, e[u].matches))[b]) {
            for (i = ++u; i < o; i++)
              if (r.relative[e[i].type]) break;
            return Te(u > 1 && xe(p), u > 1 && ve(e.slice(0, u - 1).concat({ value: " " === e[u - 2].type ? "*" : "" })).replace(B, "$1"), n, u < i && Ce(e.slice(u, i)), i < o && Ce(e = e.slice(i)), i < o && ve(e))
          }
          p.push(n)
        }
      return xe(p)
    }

    function Ee(e, t) {
      var n = t.length > 0,
        i = e.length > 0,
        o = function (o, a, s, u, c) {
          var f, h, y, v = 0,
            m = "0",
            x = o && [],
            b = [],
            w = l,
            C = o || i && r.find.TAG("*", c),
            E = T += null == w ? 1 : Math.random() || .1,
            k = C.length;
          for (c && (l = a === d || a || c); m !== k && null != (f = C[m]); m++) {
            if (i && f) {
              h = 0, a || f.ownerDocument === d || (p(f), s = !g);
              while (y = e[h++])
                if (y(f, a || d, s)) { u.push(f); break }
              c && (T = E)
            }
            n && ((f = !y && f) && v--, o && x.push(f))
          }
          if (v += m, n && m !== v) {
            h = 0;
            while (y = t[h++]) y(x, b, a, s);
            if (o) {
              if (v > 0)
                while (m--) x[m] || b[m] || (b[m] = j.call(u));
              b = we(b)
            }
            L.apply(u, b), c && !o && b.length > 0 && v + t.length > 1 && oe.uniqueSort(u)
          }
          return c && (T = E, l = w), x
        };
      return n ? se(o) : o
    }
    return s = oe.compile = function (e, t) {
      var n, r = [],
        i = [],
        o = S[e + " "];
      if (!o) {
        t || (t = a(e)), n = t.length;
        while (n--) (o = Ce(t[n]))[b] ? r.push(o) : i.push(o);
        (o = S(e, Ee(i, r))).selector = e
      }
      return o
    }, u = oe.select = function (e, t, n, i) {
      var o, u, l, c, f, p = "function" == typeof e && e,
        d = !i && a(e = p.selector || e);
      if (n = n || [], 1 === d.length) {
        if ((u = d[0] = d[0].slice(0)).length > 2 && "ID" === (l = u[0]).type && 9 === t.nodeType && g && r.relative[u[1].type]) {
          if (!(t = (r.find.ID(l.matches[0].replace(Z, ee), t) || [])[0])) return n;
          p && (t = t.parentNode), e = e.slice(u.shift().value.length)
        }
        o = V.needsContext.test(e) ? 0 : u.length;
        while (o--) { if (l = u[o], r.relative[c = l.type]) break; if ((f = r.find[c]) && (i = f(l.matches[0].replace(Z, ee), K.test(u[0].type) && ge(t.parentNode) || t))) { if (u.splice(o, 1), !(e = i.length && ve(u))) return L.apply(n, i), n; break } }
      }
      return (p || s(e, d))(i, t, !g, n, !t || K.test(e) && ge(t.parentNode) || t), n
    }, n.sortStable = b.split("").sort(D).join("") === b, n.detectDuplicates = !!f, p(), n.sortDetached = ue(function (e) { return 1 & e.compareDocumentPosition(d.createElement("fieldset")) }), ue(function (e) { return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href") }) || le("type|href|height|width", function (e, t, n) { if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2) }), n.attributes && ue(function (e) { return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value") }) || le("value", function (e, t, n) { if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue }), ue(function (e) { return null == e.getAttribute("disabled") }) || le(P, function (e, t, n) { var r; if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null }), oe
  }(e);
  w.find = E, w.expr = E.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = E.uniqueSort, w.text = E.getText, w.isXMLDoc = E.isXML, w.contains = E.contains, w.escapeSelector = E.escape;
  var k = function (e, t, n) {
    var r = [],
      i = void 0 !== n;
    while ((e = e[t]) && 9 !== e.nodeType)
      if (1 === e.nodeType) {
        if (i && w(e).is(n)) break;
        r.push(e)
      }
    return r
  },
    S = function (e, t) { for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e); return n },
    D = w.expr.match.needsContext;

  function N(e, t) { return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase() }
  var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

  function j(e, t, n) { return g(t) ? w.grep(e, function (e, r) { return !!t.call(e, r, e) !== n }) : t.nodeType ? w.grep(e, function (e) { return e === t !== n }) : "string" != typeof t ? w.grep(e, function (e) { return u.call(t, e) > -1 !== n }) : w.filter(t, e, n) }
  w.filter = function (e, t, n) { var r = t[0]; return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, function (e) { return 1 === e.nodeType })) }, w.fn.extend({
    find: function (e) {
      var t, n, r = this.length,
        i = this;
      if ("string" != typeof e) return this.pushStack(w(e).filter(function () {
        for (t = 0; t < r; t++)
          if (w.contains(i[t], this)) return !0
      }));
      for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, i[t], n);
      return r > 1 ? w.uniqueSort(n) : n
    },
    filter: function (e) { return this.pushStack(j(this, e || [], !1)) },
    not: function (e) { return this.pushStack(j(this, e || [], !0)) },
    is: function (e) { return !!j(this, "string" == typeof e && D.test(e) ? w(e) : e || [], !1).length }
  });
  var q, L = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
  (w.fn.init = function (e, t, n) {
    var i, o;
    if (!e) return this;
    if (n = n || q, "string" == typeof e) {
      if (!(i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : L.exec(e)) || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
      if (i[1]) {
        if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : r, !0)), A.test(i[1]) && w.isPlainObject(t))
          for (i in t) g(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
        return this
      }
      return (o = r.getElementById(i[2])) && (this[0] = o, this.length = 1), this
    }
    return e.nodeType ? (this[0] = e, this.length = 1, this) : g(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this)
  }).prototype = w.fn, q = w(r);
  var H = /^(?:parents|prev(?:Until|All))/,
    O = { children: !0, contents: !0, next: !0, prev: !0 };
  w.fn.extend({
    has: function (e) {
      var t = w(e, this),
        n = t.length;
      return this.filter(function () {
        for (var e = 0; e < n; e++)
          if (w.contains(this, t[e])) return !0
      })
    },
    closest: function (e, t) {
      var n, r = 0,
        i = this.length,
        o = [],
        a = "string" != typeof e && w(e);
      if (!D.test(e))
        for (; r < i; r++)
          for (n = this[r]; n && n !== t; n = n.parentNode)
            if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && w.find.matchesSelector(n, e))) { o.push(n); break }
      return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o)
    },
    index: function (e) { return e ? "string" == typeof e ? u.call(w(e), this[0]) : u.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1 },
    add: function (e, t) { return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t)))) },
    addBack: function (e) { return this.add(null == e ? this.prevObject : this.prevObject.filter(e)) }
  });

  function P(e, t) { while ((e = e[t]) && 1 !== e.nodeType); return e }
  w.each({ parent: function (e) { var t = e.parentNode; return t && 11 !== t.nodeType ? t : null }, parents: function (e) { return k(e, "parentNode") }, parentsUntil: function (e, t, n) { return k(e, "parentNode", n) }, next: function (e) { return P(e, "nextSibling") }, prev: function (e) { return P(e, "previousSibling") }, nextAll: function (e) { return k(e, "nextSibling") }, prevAll: function (e) { return k(e, "previousSibling") }, nextUntil: function (e, t, n) { return k(e, "nextSibling", n) }, prevUntil: function (e, t, n) { return k(e, "previousSibling", n) }, siblings: function (e) { return S((e.parentNode || {}).firstChild, e) }, children: function (e) { return S(e.firstChild) }, contents: function (e) { return N(e, "iframe") ? e.contentDocument : (N(e, "template") && (e = e.content || e), w.merge([], e.childNodes)) } }, function (e, t) { w.fn[e] = function (n, r) { var i = w.map(this, t, n); return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), this.length > 1 && (O[e] || w.uniqueSort(i), H.test(e) && i.reverse()), this.pushStack(i) } });
  var M = /[^\x20\t\r\n\f]+/g;

  function R(e) { var t = {}; return w.each(e.match(M) || [], function (e, n) { t[n] = !0 }), t }
  w.Callbacks = function (e) {
    e = "string" == typeof e ? R(e) : w.extend({}, e);
    var t, n, r, i, o = [],
      a = [],
      s = -1,
      u = function () {
        for (i = i || e.once, r = t = !0; a.length; s = -1) { n = a.shift(); while (++s < o.length) !1 === o[s].apply(n[0], n[1]) && e.stopOnFalse && (s = o.length, n = !1) }
        e.memory || (n = !1), t = !1, i && (o = n ? [] : "")
      },
      l = { add: function () { return o && (n && !t && (s = o.length - 1, a.push(n)), function t(n) { w.each(n, function (n, r) { g(r) ? e.unique && l.has(r) || o.push(r) : r && r.length && "string" !== x(r) && t(r) }) }(arguments), n && !t && u()), this }, remove: function () { return w.each(arguments, function (e, t) { var n; while ((n = w.inArray(t, o, n)) > -1) o.splice(n, 1), n <= s && s-- }), this }, has: function (e) { return e ? w.inArray(e, o) > -1 : o.length > 0 }, empty: function () { return o && (o = []), this }, disable: function () { return i = a = [], o = n = "", this }, disabled: function () { return !o }, lock: function () { return i = a = [], n || t || (o = n = ""), this }, locked: function () { return !!i }, fireWith: function (e, n) { return i || (n = [e, (n = n || []).slice ? n.slice() : n], a.push(n), t || u()), this }, fire: function () { return l.fireWith(this, arguments), this }, fired: function () { return !!r } };
    return l
  };

  function I(e) { return e }

  function W(e) { throw e }

  function $(e, t, n, r) { var i; try { e && g(i = e.promise) ? i.call(e).done(t).fail(n) : e && g(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r)) } catch (e) { n.apply(void 0, [e]) } }
  w.extend({
    Deferred: function (t) {
      var n = [
        ["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2],
        ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"],
        ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]
      ],
        r = "pending",
        i = {
          state: function () { return r },
          always: function () { return o.done(arguments).fail(arguments), this },
          "catch": function (e) { return i.then(null, e) },
          pipe: function () {
            var e = arguments;
            return w.Deferred(function (t) {
              w.each(n, function (n, r) {
                var i = g(e[r[4]]) && e[r[4]];
                o[r[1]](function () {
                  var e = i && i.apply(this, arguments);
                  e && g(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments)
                })
              }), e = null
            }).promise()
          },
          then: function (t, r, i) {
            var o = 0;

            function a(t, n, r, i) {
              return function () {
                var s = this,
                  u = arguments,
                  l = function () {
                    var e, l;
                    if (!(t < o)) {
                      if ((e = r.apply(s, u)) === n.promise()) throw new TypeError("Thenable self-resolution");
                      l = e && ("object" == typeof e || "function" == typeof e) && e.then, g(l) ? i ? l.call(e, a(o, n, I, i), a(o, n, W, i)) : (o++, l.call(e, a(o, n, I, i), a(o, n, W, i), a(o, n, I, n.notifyWith))) : (r !== I && (s = void 0, u = [e]), (i || n.resolveWith)(s, u))
                    }
                  },
                  c = i ? l : function () { try { l() } catch (e) { w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), t + 1 >= o && (r !== W && (s = void 0, u = [e]), n.rejectWith(s, u)) } };
                t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c))
              }
            }
            return w.Deferred(function (e) { n[0][3].add(a(0, e, g(i) ? i : I, e.notifyWith)), n[1][3].add(a(0, e, g(t) ? t : I)), n[2][3].add(a(0, e, g(r) ? r : W)) }).promise()
          },
          promise: function (e) { return null != e ? w.extend(e, i) : i }
        },
        o = {};
      return w.each(n, function (e, t) {
        var a = t[2],
          s = t[5];
        i[t[1]] = a.add, s && a.add(function () { r = s }, n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), o[t[0]] = function () { return o[t[0] + "With"](this === o ? void 0 : this, arguments), this }, o[t[0] + "With"] = a.fireWith
      }), i.promise(o), t && t.call(o, o), o
    },
    when: function (e) {
      var t = arguments.length,
        n = t,
        r = Array(n),
        i = o.call(arguments),
        a = w.Deferred(),
        s = function (e) { return function (n) { r[e] = this, i[e] = arguments.length > 1 ? o.call(arguments) : n, --t || a.resolveWith(r, i) } };
      if (t <= 1 && ($(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || g(i[n] && i[n].then))) return a.then();
      while (n--) $(i[n], s(n), a.reject);
      return a.promise()
    }
  });
  var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
  w.Deferred.exceptionHook = function (t, n) { e.console && e.console.warn && t && B.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n) }, w.readyException = function (t) { e.setTimeout(function () { throw t }) };
  var F = w.Deferred();
  w.fn.ready = function (e) { return F.then(e)["catch"](function (e) { w.readyException(e) }), this }, w.extend({
    isReady: !1,
    readyWait: 1,
    ready: function (e) {
      (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0, !0 !== e && --w.readyWait > 0 || F.resolveWith(r, [w]))
    }
  }), w.ready.then = F.then;

  function _() { r.removeEventListener("DOMContentLoaded", _), e.removeEventListener("load", _), w.ready() }
  "complete" === r.readyState || "loading" !== r.readyState && !r.documentElement.doScroll ? e.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", _), e.addEventListener("load", _));
  var z = function (e, t, n, r, i, o, a) {
    var s = 0,
      u = e.length,
      l = null == n;
    if ("object" === x(n)) { i = !0; for (s in n) z(e, t, s, n[s], !0, o, a) } else if (void 0 !== r && (i = !0, g(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function (e, t, n) { return l.call(w(e), n) })), t))
      for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
    return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
  },
    X = /^-ms-/,
    U = /-([a-z])/g;

  function V(e, t) { return t.toUpperCase() }

  function G(e) { return e.replace(X, "ms-").replace(U, V) }
  var Y = function (e) { return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType };

  function Q() { this.expando = w.expando + Q.uid++ }
  Q.uid = 1, Q.prototype = {
    cache: function (e) { var t = e[this.expando]; return t || (t = {}, Y(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, { value: t, configurable: !0 }))), t },
    set: function (e, t, n) {
      var r, i = this.cache(e);
      if ("string" == typeof t) i[G(t)] = n;
      else
        for (r in t) i[G(r)] = t[r];
      return i
    },
    get: function (e, t) { return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][G(t)] },
    access: function (e, t, n) { return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t) },
    remove: function (e, t) { var n, r = e[this.expando]; if (void 0 !== r) { if (void 0 !== t) { n = (t = Array.isArray(t) ? t.map(G) : (t = G(t)) in r ? [t] : t.match(M) || []).length; while (n--) delete r[t[n]] } (void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando]) } },
    hasData: function (e) { var t = e[this.expando]; return void 0 !== t && !w.isEmptyObject(t) }
  };
  var J = new Q,
    K = new Q,
    Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
    ee = /[A-Z]/g;

  function te(e) { return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Z.test(e) ? JSON.parse(e) : e) }

  function ne(e, t, n) {
    var r;
    if (void 0 === n && 1 === e.nodeType)
      if (r = "data-" + t.replace(ee, "-$&").toLowerCase(), "string" == typeof (n = e.getAttribute(r))) {
        try { n = te(n) } catch (e) { }
        K.set(e, t, n)
      } else n = void 0;
    return n
  }
  w.extend({ hasData: function (e) { return K.hasData(e) || J.hasData(e) }, data: function (e, t, n) { return K.access(e, t, n) }, removeData: function (e, t) { K.remove(e, t) }, _data: function (e, t, n) { return J.access(e, t, n) }, _removeData: function (e, t) { J.remove(e, t) } }), w.fn.extend({
    data: function (e, t) {
      var n, r, i, o = this[0],
        a = o && o.attributes;
      if (void 0 === e) {
        if (this.length && (i = K.get(o), 1 === o.nodeType && !J.get(o, "hasDataAttrs"))) {
          n = a.length;
          while (n--) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = G(r.slice(5)), ne(o, r, i[r]));
          J.set(o, "hasDataAttrs", !0)
        }
        return i
      }
      return "object" == typeof e ? this.each(function () { K.set(this, e) }) : z(this, function (t) { var n; if (o && void 0 === t) { if (void 0 !== (n = K.get(o, e))) return n; if (void 0 !== (n = ne(o, e))) return n } else this.each(function () { K.set(this, e, t) }) }, null, t, arguments.length > 1, null, !0)
    },
    removeData: function (e) { return this.each(function () { K.remove(this, e) }) }
  }), w.extend({
    queue: function (e, t, n) { var r; if (e) return t = (t || "fx") + "queue", r = J.get(e, t), n && (!r || Array.isArray(n) ? r = J.access(e, t, w.makeArray(n)) : r.push(n)), r || [] },
    dequeue: function (e, t) {
      t = t || "fx";
      var n = w.queue(e, t),
        r = n.length,
        i = n.shift(),
        o = w._queueHooks(e, t),
        a = function () { w.dequeue(e, t) };
      "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire()
    },
    _queueHooks: function (e, t) { var n = t + "queueHooks"; return J.get(e, n) || J.access(e, n, { empty: w.Callbacks("once memory").add(function () { J.remove(e, [t + "queue", n]) }) }) }
  }), w.fn.extend({
    queue: function (e, t) {
      var n = 2;
      return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each(function () {
        var n = w.queue(this, e, t);
        w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e)
      })
    },
    dequeue: function (e) { return this.each(function () { w.dequeue(this, e) }) },
    clearQueue: function (e) { return this.queue(e || "fx", []) },
    promise: function (e, t) {
      var n, r = 1,
        i = w.Deferred(),
        o = this,
        a = this.length,
        s = function () { --r || i.resolveWith(o, [o]) };
      "string" != typeof e && (t = e, e = void 0), e = e || "fx";
      while (a--) (n = J.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
      return s(), i.promise(t)
    }
  });
  var re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
    ie = new RegExp("^(?:([+-])=|)(" + re + ")([a-z%]*)$", "i"),
    oe = ["Top", "Right", "Bottom", "Left"],
    ae = function (e, t) { return "none" === (e = t || e).style.display || "" === e.style.display && w.contains(e.ownerDocument, e) && "none" === w.css(e, "display") },
    se = function (e, t, n, r) {
      var i, o, a = {};
      for (o in t) a[o] = e.style[o], e.style[o] = t[o];
      i = n.apply(e, r || []);
      for (o in t) e.style[o] = a[o];
      return i
    };

  function ue(e, t, n, r) {
    var i, o, a = 20,
      s = r ? function () { return r.cur() } : function () { return w.css(e, t, "") },
      u = s(),
      l = n && n[3] || (w.cssNumber[t] ? "" : "px"),
      c = (w.cssNumber[t] || "px" !== l && +u) && ie.exec(w.css(e, t));
    if (c && c[3] !== l) {
      u /= 2, l = l || c[3], c = +u || 1;
      while (a--) w.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
      c *= 2, w.style(e, t, c + l), n = n || []
    }
    return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i
  }
  var le = {};

  function ce(e) {
    var t, n = e.ownerDocument,
      r = e.nodeName,
      i = le[r];
    return i || (t = n.body.appendChild(n.createElement(r)), i = w.css(t, "display"), t.parentNode.removeChild(t), "none" === i && (i = "block"), le[r] = i, i)
  }

  function fe(e, t) { for (var n, r, i = [], o = 0, a = e.length; o < a; o++)(r = e[o]).style && (n = r.style.display, t ? ("none" === n && (i[o] = J.get(r, "display") || null, i[o] || (r.style.display = "")), "" === r.style.display && ae(r) && (i[o] = ce(r))) : "none" !== n && (i[o] = "none", J.set(r, "display", n))); for (o = 0; o < a; o++) null != i[o] && (e[o].style.display = i[o]); return e }
  w.fn.extend({ show: function () { return fe(this, !0) }, hide: function () { return fe(this) }, toggle: function (e) { return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () { ae(this) ? w(this).show() : w(this).hide() }) } });
  var pe = /^(?:checkbox|radio)$/i,
    de = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
    he = /^$|^module$|\/(?:java|ecma)script/i,
    ge = { option: [1, "<select multiple='multiple'>", "</select>"], thead: [1, "<table>", "</table>"], col: [2, "<table><colgroup>", "</colgroup></table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: [0, "", ""] };
  ge.optgroup = ge.option, ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td;

  function ye(e, t) { var n; return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && N(e, t) ? w.merge([e], n) : n }

  function ve(e, t) { for (var n = 0, r = e.length; n < r; n++) J.set(e[n], "globalEval", !t || J.get(t[n], "globalEval")) }
  var me = /<|&#?\w+;/;

  function xe(e, t, n, r, i) {
    for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
      if ((o = e[d]) || 0 === o)
        if ("object" === x(o)) w.merge(p, o.nodeType ? [o] : o);
        else if (me.test(o)) {
          a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + w.htmlPrefilter(o) + u[2], c = u[0];
          while (c--) a = a.lastChild;
          w.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
        } else p.push(t.createTextNode(o));
    f.textContent = "", d = 0;
    while (o = p[d++])
      if (r && w.inArray(o, r) > -1) i && i.push(o);
      else if (l = w.contains(o.ownerDocument, o), a = ye(f.appendChild(o), "script"), l && ve(a), n) { c = 0; while (o = a[c++]) he.test(o.type || "") && n.push(o) }
    return f
  } ! function () {
    var e = r.createDocumentFragment().appendChild(r.createElement("div")),
      t = r.createElement("input");
    t.setAttribute("type", "radio"), t.setAttribute("checked", "checked"), t.setAttribute("name", "t"), e.appendChild(t), h.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", h.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue
  }();
  var be = r.documentElement,
    we = /^key/,
    Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
    Ce = /^([^.]*)(?:\.(.+)|)/;

  function Ee() { return !0 }

  function ke() { return !1 }

  function Se() { try { return r.activeElement } catch (e) { } }

  function De(e, t, n, r, i, o) {
    var a, s;
    if ("object" == typeof t) { "string" != typeof n && (r = r || n, n = void 0); for (s in t) De(e, s, n, r, t[s], o); return e }
    if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = ke;
    else if (!i) return e;
    return 1 === o && (a = i, (i = function (e) { return w().off(e), a.apply(this, arguments) }).guid = a.guid || (a.guid = w.guid++)), e.each(function () { w.event.add(this, t, i, r, n) })
  }
  w.event = {
    global: {},
    add: function (e, t, n, r, i) { var o, a, s, u, l, c, f, p, d, h, g, y = J.get(e); if (y) { n.handler && (n = (o = n).handler, i = o.selector), i && w.find.matchesSelector(be, i), n.guid || (n.guid = w.guid++), (u = y.events) || (u = y.events = {}), (a = y.handle) || (a = y.handle = function (t) { return "undefined" != typeof w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0 }), l = (t = (t || "").match(M) || [""]).length; while (l--) d = g = (s = Ce.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = w.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = w.event.special[d] || {}, c = w.extend({ type: d, origType: g, data: r, handler: n, guid: n.guid, selector: i, needsContext: i && w.expr.match.needsContext.test(i), namespace: h.join(".") }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(d, a)), f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), w.event.global[d] = !0) } },
    remove: function (e, t, n, r, i) {
      var o, a, s, u, l, c, f, p, d, h, g, y = J.hasData(e) && J.get(e);
      if (y && (u = y.events)) {
        l = (t = (t || "").match(M) || [""]).length;
        while (l--)
          if (s = Ce.exec(t[l]) || [], d = g = s[1], h = (s[2] || "").split(".").sort(), d) {
            f = w.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;
            while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
            a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, y.handle) || w.removeEvent(e, d, y.handle), delete u[d])
          } else
            for (d in u) w.event.remove(e, d + t[l], n, r, !0);
        w.isEmptyObject(u) && J.remove(e, "handle events")
      }
    },
    dispatch: function (e) {
      var t = w.event.fix(e),
        n, r, i, o, a, s, u = new Array(arguments.length),
        l = (J.get(this, "events") || {})[t.type] || [],
        c = w.event.special[t.type] || {};
      for (u[0] = t, n = 1; n < arguments.length; n++) u[n] = arguments[n];
      if (t.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, t)) { s = w.event.handlers.call(this, t, l), n = 0; while ((o = s[n++]) && !t.isPropagationStopped()) { t.currentTarget = o.elem, r = 0; while ((a = o.handlers[r++]) && !t.isImmediatePropagationStopped()) t.rnamespace && !t.rnamespace.test(a.namespace) || (t.handleObj = a, t.data = a.data, void 0 !== (i = ((w.event.special[a.origType] || {}).handle || a.handler).apply(o.elem, u)) && !1 === (t.result = i) && (t.preventDefault(), t.stopPropagation())) } return c.postDispatch && c.postDispatch.call(this, t), t.result }
    },
    handlers: function (e, t) {
      var n, r, i, o, a, s = [],
        u = t.delegateCount,
        l = e.target;
      if (u && l.nodeType && !("click" === e.type && e.button >= 1))
        for (; l !== this; l = l.parentNode || this)
          if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
            for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? w(i, this).index(l) > -1 : w.find(i, this, null, [l]).length), a[i] && o.push(r);
            o.length && s.push({ elem: l, handlers: o })
          }
      return l = this, u < t.length && s.push({ elem: l, handlers: t.slice(u) }), s
    },
    addProp: function (e, t) { Object.defineProperty(w.Event.prototype, e, { enumerable: !0, configurable: !0, get: g(t) ? function () { if (this.originalEvent) return t(this.originalEvent) } : function () { if (this.originalEvent) return this.originalEvent[e] }, set: function (t) { Object.defineProperty(this, e, { enumerable: !0, configurable: !0, writable: !0, value: t }) } }) },
    fix: function (e) { return e[w.expando] ? e : new w.Event(e) },
    special: { load: { noBubble: !0 }, focus: { trigger: function () { if (this !== Se() && this.focus) return this.focus(), !1 }, delegateType: "focusin" }, blur: { trigger: function () { if (this === Se() && this.blur) return this.blur(), !1 }, delegateType: "focusout" }, click: { trigger: function () { if ("checkbox" === this.type && this.click && N(this, "input")) return this.click(), !1 }, _default: function (e) { return N(e.target, "a") } }, beforeunload: { postDispatch: function (e) { void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result) } } }
  }, w.removeEvent = function (e, t, n) { e.removeEventListener && e.removeEventListener(t, n) }, w.Event = function (e, t) {
    if (!(this instanceof w.Event)) return new w.Event(e, t);
    e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ee : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0
  }, w.Event.prototype = {
    constructor: w.Event,
    isDefaultPrevented: ke,
    isPropagationStopped: ke,
    isImmediatePropagationStopped: ke,
    isSimulated: !1,
    preventDefault: function () {
      var e = this.originalEvent;
      this.isDefaultPrevented = Ee, e && !this.isSimulated && e.preventDefault()
    },
    stopPropagation: function () {
      var e = this.originalEvent;
      this.isPropagationStopped = Ee, e && !this.isSimulated && e.stopPropagation()
    },
    stopImmediatePropagation: function () {
      var e = this.originalEvent;
      this.isImmediatePropagationStopped = Ee, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
    }
  }, w.each({ altKey: !0, bubbles: !0, cancelable: !0, changedTouches: !0, ctrlKey: !0, detail: !0, eventPhase: !0, metaKey: !0, pageX: !0, pageY: !0, shiftKey: !0, view: !0, "char": !0, charCode: !0, key: !0, keyCode: !0, button: !0, buttons: !0, clientX: !0, clientY: !0, offsetX: !0, offsetY: !0, pointerId: !0, pointerType: !0, screenX: !0, screenY: !0, targetTouches: !0, toElement: !0, touches: !0, which: function (e) { var t = e.button; return null == e.which && we.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Te.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which } }, w.event.addProp), w.each({ mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout" }, function (e, t) {
    w.event.special[e] = {
      delegateType: t,
      bindType: t,
      handle: function (e) {
        var n, r = this,
          i = e.relatedTarget,
          o = e.handleObj;
        return i && (i === r || w.contains(r, i)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n
      }
    }
  }), w.fn.extend({ on: function (e, t, n, r) { return De(this, e, t, n, r) }, one: function (e, t, n, r) { return De(this, e, t, n, r, 1) }, off: function (e, t, n) { var r, i; if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this; if ("object" == typeof e) { for (i in e) this.off(i, t, e[i]); return this } return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each(function () { w.event.remove(this, e, n, t) }) } });
  var Ne = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
    Ae = /<script|<style|<link/i,
    je = /checked\s*(?:[^=]|=\s*.checked.)/i,
    qe = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

  function Le(e, t) { return N(e, "table") && N(11 !== t.nodeType ? t : t.firstChild, "tr") ? w(e).children("tbody")[0] || e : e }

  function He(e) { return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e }

  function Oe(e) { return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e }

  function Pe(e, t) {
    var n, r, i, o, a, s, u, l;
    if (1 === t.nodeType) {
      if (J.hasData(e) && (o = J.access(e), a = J.set(t, o), l = o.events)) {
        delete a.handle, a.events = {};
        for (i in l)
          for (n = 0, r = l[i].length; n < r; n++) w.event.add(t, i, l[i][n])
      }
      K.hasData(e) && (s = K.access(e), u = w.extend({}, s), K.set(t, u))
    }
  }

  function Me(e, t) { var n = t.nodeName.toLowerCase(); "input" === n && pe.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue) }

  function Re(e, t, n, r) {
    t = a.apply([], t);
    var i, o, s, u, l, c, f = 0,
      p = e.length,
      d = p - 1,
      y = t[0],
      v = g(y);
    if (v || p > 1 && "string" == typeof y && !h.checkClone && je.test(y)) return e.each(function (i) {
      var o = e.eq(i);
      v && (t[0] = y.call(this, i, o.html())), Re(o, t, n, r)
    });
    if (p && (i = xe(t, e[0].ownerDocument, !1, e, r), o = i.firstChild, 1 === i.childNodes.length && (i = o), o || r)) {
      for (u = (s = w.map(ye(i, "script"), He)).length; f < p; f++) l = i, f !== d && (l = w.clone(l, !0, !0), u && w.merge(s, ye(l, "script"))), n.call(e[f], l, f);
      if (u)
        for (c = s[s.length - 1].ownerDocument, w.map(s, Oe), f = 0; f < u; f++) l = s[f], he.test(l.type || "") && !J.access(l, "globalEval") && w.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? w._evalUrl && w._evalUrl(l.src) : m(l.textContent.replace(qe, ""), c, l))
    }
    return e
  }

  function Ie(e, t, n) { for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || w.cleanData(ye(r)), r.parentNode && (n && w.contains(r.ownerDocument, r) && ve(ye(r, "script")), r.parentNode.removeChild(r)); return e }
  w.extend({
    htmlPrefilter: function (e) { return e.replace(Ne, "<$1></$2>") },
    clone: function (e, t, n) {
      var r, i, o, a, s = e.cloneNode(!0),
        u = w.contains(e.ownerDocument, e);
      if (!(h.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e)))
        for (a = ye(s), r = 0, i = (o = ye(e)).length; r < i; r++) Me(o[r], a[r]);
      if (t)
        if (n)
          for (o = o || ye(e), a = a || ye(s), r = 0, i = o.length; r < i; r++) Pe(o[r], a[r]);
        else Pe(e, s);
      return (a = ye(s, "script")).length > 0 && ve(a, !u && ye(e, "script")), s
    },
    cleanData: function (e) {
      for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++)
        if (Y(n)) {
          if (t = n[J.expando]) {
            if (t.events)
              for (r in t.events) i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
            n[J.expando] = void 0
          }
          n[K.expando] && (n[K.expando] = void 0)
        }
    }
  }), w.fn.extend({
    detach: function (e) { return Ie(this, e, !0) },
    remove: function (e) { return Ie(this, e) },
    text: function (e) { return z(this, function (e) { return void 0 === e ? w.text(this) : this.empty().each(function () { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e) }) }, null, e, arguments.length) },
    append: function () { return Re(this, arguments, function (e) { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Le(this, e).appendChild(e) }) },
    prepend: function () {
      return Re(this, arguments, function (e) {
        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
          var t = Le(this, e);
          t.insertBefore(e, t.firstChild)
        }
      })
    },
    before: function () { return Re(this, arguments, function (e) { this.parentNode && this.parentNode.insertBefore(e, this) }) },
    after: function () { return Re(this, arguments, function (e) { this.parentNode && this.parentNode.insertBefore(e, this.nextSibling) }) },
    empty: function () { for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (w.cleanData(ye(e, !1)), e.textContent = ""); return this },
    clone: function (e, t) { return e = null != e && e, t = null == t ? e : t, this.map(function () { return w.clone(this, e, t) }) },
    html: function (e) {
      return z(this, function (e) {
        var t = this[0] || {},
          n = 0,
          r = this.length;
        if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
        if ("string" == typeof e && !Ae.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
          e = w.htmlPrefilter(e);
          try {
            for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (w.cleanData(ye(t, !1)), t.innerHTML = e);
            t = 0
          } catch (e) { }
        }
        t && this.empty().append(e)
      }, null, e, arguments.length)
    },
    replaceWith: function () {
      var e = [];
      return Re(this, arguments, function (t) {
        var n = this.parentNode;
        w.inArray(this, e) < 0 && (w.cleanData(ye(this)), n && n.replaceChild(t, this))
      }, e)
    }
  }), w.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function (e, t) { w.fn[e] = function (e) { for (var n, r = [], i = w(e), o = i.length - 1, a = 0; a <= o; a++) n = a === o ? this : this.clone(!0), w(i[a])[t](n), s.apply(r, n.get()); return this.pushStack(r) } });
  var We = new RegExp("^(" + re + ")(?!px)[a-z%]+$", "i"),
    $e = function (t) { var n = t.ownerDocument.defaultView; return n && n.opener || (n = e), n.getComputedStyle(t) },
    Be = new RegExp(oe.join("|"), "i");
  ! function () {
    function t() {
      if (c) {
        l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", be.appendChild(l).appendChild(c);
        var t = e.getComputedStyle(c);
        i = "1%" !== t.top, u = 12 === n(t.marginLeft), c.style.right = "60%", s = 36 === n(t.right), o = 36 === n(t.width), c.style.position = "absolute", a = 36 === c.offsetWidth || "absolute", be.removeChild(l), c = null
      }
    }

    function n(e) { return Math.round(parseFloat(e)) }
    var i, o, a, s, u, l = r.createElement("div"),
      c = r.createElement("div");
    c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", h.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(h, { boxSizingReliable: function () { return t(), o }, pixelBoxStyles: function () { return t(), s }, pixelPosition: function () { return t(), i }, reliableMarginLeft: function () { return t(), u }, scrollboxSize: function () { return t(), a } }))
  }();

  function Fe(e, t, n) { var r, i, o, a, s = e.style; return (n = n || $e(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || w.contains(e.ownerDocument, e) || (a = w.style(e, t)), !h.pixelBoxStyles() && We.test(a) && Be.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a }

  function _e(e, t) {
    return {
      get: function () {
        if (!e()) return (this.get = t).apply(this, arguments);
        delete this.get
      }
    }
  }
  var ze = /^(none|table(?!-c[ea]).+)/,
    Xe = /^--/,
    Ue = { position: "absolute", visibility: "hidden", display: "block" },
    Ve = { letterSpacing: "0", fontWeight: "400" },
    Ge = ["Webkit", "Moz", "ms"],
    Ye = r.createElement("div").style;

  function Qe(e) {
    if (e in Ye) return e;
    var t = e[0].toUpperCase() + e.slice(1),
      n = Ge.length;
    while (n--)
      if ((e = Ge[n] + t) in Ye) return e
  }

  function Je(e) { var t = w.cssProps[e]; return t || (t = w.cssProps[e] = Qe(e) || e), t }

  function Ke(e, t, n) { var r = ie.exec(t); return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t }

  function Ze(e, t, n, r, i, o) {
    var a = "width" === t ? 1 : 0,
      s = 0,
      u = 0;
    if (n === (r ? "border" : "content")) return 0;
    for (; a < 4; a += 2) "margin" === n && (u += w.css(e, n + oe[a], !0, i)), r ? ("content" === n && (u -= w.css(e, "padding" + oe[a], !0, i)), "margin" !== n && (u -= w.css(e, "border" + oe[a] + "Width", !0, i))) : (u += w.css(e, "padding" + oe[a], !0, i), "padding" !== n ? u += w.css(e, "border" + oe[a] + "Width", !0, i) : s += w.css(e, "border" + oe[a] + "Width", !0, i));
    return !r && o >= 0 && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5))), u
  }

  function et(e, t, n) {
    var r = $e(e),
      i = Fe(e, t, r),
      o = "border-box" === w.css(e, "boxSizing", !1, r),
      a = o;
    if (We.test(i)) {
      if (!n) return i;
      i = "auto"
    }
    return a = a && (h.boxSizingReliable() || i === e.style[t]), ("auto" === i || !parseFloat(i) && "inline" === w.css(e, "display", !1, r)) && (i = e["offset" + t[0].toUpperCase() + t.slice(1)], a = !0), (i = parseFloat(i) || 0) + Ze(e, t, n || (o ? "border" : "content"), a, r, i) + "px"
  }
  w.extend({
    cssHooks: { opacity: { get: function (e, t) { if (t) { var n = Fe(e, "opacity"); return "" === n ? "1" : n } } } },
    cssNumber: { animationIterationCount: !0, columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 },
    cssProps: {},
    style: function (e, t, n, r) {
      if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
        var i, o, a, s = G(t),
          u = Xe.test(t),
          l = e.style;
        if (u || (t = Je(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
        "string" == (o = typeof n) && (i = ie.exec(n)) && i[1] && (n = ue(e, t, i), o = "number"), null != n && n === n && ("number" === o && (n += i && i[3] || (w.cssNumber[s] ? "" : "px")), h.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
      }
    },
    css: function (e, t, n, r) { var i, o, a, s = G(t); return Xe.test(t) || (t = Je(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = Fe(e, t, r)), "normal" === i && t in Ve && (i = Ve[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i }
  }), w.each(["height", "width"], function (e, t) {
    w.cssHooks[t] = {
      get: function (e, n, r) { if (n) return !ze.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? et(e, t, r) : se(e, Ue, function () { return et(e, t, r) }) },
      set: function (e, n, r) {
        var i, o = $e(e),
          a = "border-box" === w.css(e, "boxSizing", !1, o),
          s = r && Ze(e, t, r, a, o);
        return a && h.scrollboxSize() === o.position && (s -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ze(e, t, "border", !1, o) - .5)), s && (i = ie.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Ke(e, n, s)
      }
    }
  }), w.cssHooks.marginLeft = _e(h.reliableMarginLeft, function (e, t) { if (t) return (parseFloat(Fe(e, "marginLeft")) || e.getBoundingClientRect().left - se(e, { marginLeft: 0 }, function () { return e.getBoundingClientRect().left })) + "px" }), w.each({ margin: "", padding: "", border: "Width" }, function (e, t) { w.cssHooks[e + t] = { expand: function (n) { for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + oe[r] + t] = o[r] || o[r - 2] || o[0]; return i } }, "margin" !== e && (w.cssHooks[e + t].set = Ke) }), w.fn.extend({
    css: function (e, t) {
      return z(this, function (e, t, n) {
        var r, i, o = {},
          a = 0;
        if (Array.isArray(t)) { for (r = $e(e), i = t.length; a < i; a++) o[t[a]] = w.css(e, t[a], !1, r); return o }
        return void 0 !== n ? w.style(e, t, n) : w.css(e, t)
      }, e, t, arguments.length > 1)
    }
  });

  function tt(e, t, n, r, i) { return new tt.prototype.init(e, t, n, r, i) }
  w.Tween = tt, tt.prototype = { constructor: tt, init: function (e, t, n, r, i, o) { this.elem = e, this.prop = n, this.easing = i || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (w.cssNumber[n] ? "" : "px") }, cur: function () { var e = tt.propHooks[this.prop]; return e && e.get ? e.get(this) : tt.propHooks._default.get(this) }, run: function (e) { var t, n = tt.propHooks[this.prop]; return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : tt.propHooks._default.set(this), this } }, tt.prototype.init.prototype = tt.prototype, tt.propHooks = { _default: { get: function (e) { var t; return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0 }, set: function (e) { w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[w.cssProps[e.prop]] && !w.cssHooks[e.prop] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit) } } }, tt.propHooks.scrollTop = tt.propHooks.scrollLeft = { set: function (e) { e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now) } }, w.easing = { linear: function (e) { return e }, swing: function (e) { return .5 - Math.cos(e * Math.PI) / 2 }, _default: "swing" }, w.fx = tt.prototype.init, w.fx.step = {};
  var nt, rt, it = /^(?:toggle|show|hide)$/,
    ot = /queueHooks$/;

  function at() { rt && (!1 === r.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(at) : e.setTimeout(at, w.fx.interval), w.fx.tick()) }

  function st() { return e.setTimeout(function () { nt = void 0 }), nt = Date.now() }

  function ut(e, t) {
    var n, r = 0,
      i = { height: e };
    for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = oe[r])] = i["padding" + n] = e;
    return t && (i.opacity = i.width = e), i
  }

  function lt(e, t, n) {
    for (var r, i = (pt.tweeners[t] || []).concat(pt.tweeners["*"]), o = 0, a = i.length; o < a; o++)
      if (r = i[o].call(n, t, e)) return r
  }

  function ct(e, t, n) {
    var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t,
      p = this,
      d = {},
      h = e.style,
      g = e.nodeType && ae(e),
      y = J.get(e, "fxshow");
    n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function () { a.unqueued || s() }), a.unqueued++, p.always(function () { p.always(function () { a.unqueued--, w.queue(e, "fx").length || a.empty.fire() }) }));
    for (r in t)
      if (i = t[r], it.test(i)) {
        if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
          if ("show" !== i || !y || void 0 === y[r]) continue;
          g = !0
        }
        d[r] = y && y[r] || w.style(e, r)
      }
    if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(d)) { f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = y && y.display) && (l = J.get(e, "display")), "none" === (c = w.css(e, "display")) && (l ? c = l : (fe([e], !0), l = e.style.display || l, c = w.css(e, "display"), fe([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === w.css(e, "float") && (u || (p.done(function () { h.display = l }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function () { h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2] })), u = !1; for (r in d) u || (y ? "hidden" in y && (g = y.hidden) : y = J.access(e, "fxshow", { display: l }), o && (y.hidden = !g), g && fe([e], !0), p.done(function () { g || fe([e]), J.remove(e, "fxshow"); for (r in d) w.style(e, r, d[r]) })), u = lt(g ? y[r] : 0, r, p), r in y || (y[r] = u.start, g && (u.end = u.start, u.start = 0)) }
  }

  function ft(e, t) {
    var n, r, i, o, a;
    for (n in e)
      if (r = G(n), i = t[r], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = w.cssHooks[r]) && "expand" in a) { o = a.expand(o), delete e[r]; for (n in o) n in e || (e[n] = o[n], t[n] = i) } else t[r] = i
  }

  function pt(e, t, n) {
    var r, i, o = 0,
      a = pt.prefilters.length,
      s = w.Deferred().always(function () { delete u.elem }),
      u = function () { if (i) return !1; for (var t = nt || st(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), o = 0, a = l.tweens.length; o < a; o++) l.tweens[o].run(r); return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1) },
      l = s.promise({
        elem: e,
        props: w.extend({}, t),
        opts: w.extend(!0, { specialEasing: {}, easing: w.easing._default }, n),
        originalProperties: t,
        originalOptions: n,
        startTime: nt || st(),
        duration: n.duration,
        tweens: [],
        createTween: function (t, n) { var r = w.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing); return l.tweens.push(r), r },
        stop: function (t) {
          var n = 0,
            r = t ? l.tweens.length : 0;
          if (i) return this;
          for (i = !0; n < r; n++) l.tweens[n].run(1);
          return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this
        }
      }),
      c = l.props;
    for (ft(c, l.opts.specialEasing); o < a; o++)
      if (r = pt.prefilters[o].call(l, e, c, l.opts)) return g(r.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)), r;
    return w.map(c, lt, l), g(l.opts.start) && l.opts.start.call(e, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), w.fx.timer(w.extend(u, { elem: e, anim: l, queue: l.opts.queue })), l
  }
  w.Animation = w.extend(pt, { tweeners: { "*": [function (e, t) { var n = this.createTween(e, t); return ue(n.elem, e, ie.exec(t), n), n }] }, tweener: function (e, t) { g(e) ? (t = e, e = ["*"]) : e = e.match(M); for (var n, r = 0, i = e.length; r < i; r++) n = e[r], pt.tweeners[n] = pt.tweeners[n] || [], pt.tweeners[n].unshift(t) }, prefilters: [ct], prefilter: function (e, t) { t ? pt.prefilters.unshift(e) : pt.prefilters.push(e) } }), w.speed = function (e, t, n) { var r = e && "object" == typeof e ? w.extend({}, e) : { complete: n || !n && t || g(e) && e, duration: e, easing: n && t || t && !g(t) && t }; return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function () { g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue) }, r }, w.fn.extend({
    fadeTo: function (e, t, n, r) { return this.filter(ae).css("opacity", 0).show().end().animate({ opacity: t }, e, n, r) },
    animate: function (e, t, n, r) {
      var i = w.isEmptyObject(e),
        o = w.speed(t, n, r),
        a = function () {
          var t = pt(this, w.extend({}, e), o);
          (i || J.get(this, "finish")) && t.stop(!0)
        };
      return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
    },
    stop: function (e, t, n) {
      var r = function (e) {
        var t = e.stop;
        delete e.stop, t(n)
      };
      return "string" != typeof e && (n = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function () {
        var t = !0,
          i = null != e && e + "queueHooks",
          o = w.timers,
          a = J.get(this);
        if (i) a[i] && a[i].stop && r(a[i]);
        else
          for (i in a) a[i] && a[i].stop && ot.test(i) && r(a[i]);
        for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
        !t && n || w.dequeue(this, e)
      })
    },
    finish: function (e) {
      return !1 !== e && (e = e || "fx"), this.each(function () {
        var t, n = J.get(this),
          r = n[e + "queue"],
          i = n[e + "queueHooks"],
          o = w.timers,
          a = r ? r.length : 0;
        for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
        for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
        delete n.finish
      })
    }
  }), w.each(["toggle", "show", "hide"], function (e, t) {
    var n = w.fn[t];
    w.fn[t] = function (e, r, i) { return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i) }
  }), w.each({ slideDown: ut("show"), slideUp: ut("hide"), slideToggle: ut("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function (e, t) { w.fn[e] = function (e, n, r) { return this.animate(t, e, n, r) } }), w.timers = [], w.fx.tick = function () {
    var e, t = 0,
      n = w.timers;
    for (nt = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
    n.length || w.fx.stop(), nt = void 0
  }, w.fx.timer = function (e) { w.timers.push(e), w.fx.start() }, w.fx.interval = 13, w.fx.start = function () { rt || (rt = !0, at()) }, w.fx.stop = function () { rt = null }, w.fx.speeds = { slow: 600, fast: 200, _default: 400 }, w.fn.delay = function (t, n) {
    return t = w.fx ? w.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function (n, r) {
      var i = e.setTimeout(n, t);
      r.stop = function () { e.clearTimeout(i) }
    })
  },
    function () {
      var e = r.createElement("input"),
        t = r.createElement("select").appendChild(r.createElement("option"));
      e.type = "checkbox", h.checkOn = "" !== e.value, h.optSelected = t.selected, (e = r.createElement("input")).value = "t", e.type = "radio", h.radioValue = "t" === e.value
    }();
  var dt, ht = w.expr.attrHandle;
  w.fn.extend({ attr: function (e, t) { return z(this, w.attr, e, t, arguments.length > 1) }, removeAttr: function (e) { return this.each(function () { w.removeAttr(this, e) }) } }), w.extend({
    attr: function (e, t, n) { var r, i, o = e.nodeType; if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? w.prop(e, t, n) : (1 === o && w.isXMLDoc(e) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? dt : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r) },
    attrHooks: { type: { set: function (e, t) { if (!h.radioValue && "radio" === t && N(e, "input")) { var n = e.value; return e.setAttribute("type", t), n && (e.value = n), t } } } },
    removeAttr: function (e, t) {
      var n, r = 0,
        i = t && t.match(M);
      if (i && 1 === e.nodeType)
        while (n = i[r++]) e.removeAttribute(n)
    }
  }), dt = { set: function (e, t, n) { return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n } }, w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) {
    var n = ht[t] || w.find.attr;
    ht[t] = function (e, t, r) { var i, o, a = t.toLowerCase(); return r || (o = ht[a], ht[a] = i, i = null != n(e, t, r) ? a : null, ht[a] = o), i }
  });
  var gt = /^(?:input|select|textarea|button)$/i,
    yt = /^(?:a|area)$/i;
  w.fn.extend({ prop: function (e, t) { return z(this, w.prop, e, t, arguments.length > 1) }, removeProp: function (e) { return this.each(function () { delete this[w.propFix[e] || e] }) } }), w.extend({ prop: function (e, t, n) { var r, i, o = e.nodeType; if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(e) || (t = w.propFix[t] || t, i = w.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t] }, propHooks: { tabIndex: { get: function (e) { var t = w.find.attr(e, "tabindex"); return t ? parseInt(t, 10) : gt.test(e.nodeName) || yt.test(e.nodeName) && e.href ? 0 : -1 } } }, propFix: { "for": "htmlFor", "class": "className" } }), h.optSelected || (w.propHooks.selected = {
    get: function (e) { var t = e.parentNode; return t && t.parentNode && t.parentNode.selectedIndex, null },
    set: function (e) {
      var t = e.parentNode;
      t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
    }
  }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () { w.propFix[this.toLowerCase()] = this });

  function vt(e) { return (e.match(M) || []).join(" ") }

  function mt(e) { return e.getAttribute && e.getAttribute("class") || "" }

  function xt(e) { return Array.isArray(e) ? e : "string" == typeof e ? e.match(M) || [] : [] }
  w.fn.extend({
    addClass: function (e) {
      var t, n, r, i, o, a, s, u = 0;
      if (g(e)) return this.each(function (t) { w(this).addClass(e.call(this, t, mt(this))) });
      if ((t = xt(e)).length)
        while (n = this[u++])
          if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
            a = 0;
            while (o = t[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
            i !== (s = vt(r)) && n.setAttribute("class", s)
          }
      return this
    },
    removeClass: function (e) {
      var t, n, r, i, o, a, s, u = 0;
      if (g(e)) return this.each(function (t) { w(this).removeClass(e.call(this, t, mt(this))) });
      if (!arguments.length) return this.attr("class", "");
      if ((t = xt(e)).length)
        while (n = this[u++])
          if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
            a = 0;
            while (o = t[a++])
              while (r.indexOf(" " + o + " ") > -1) r = r.replace(" " + o + " ", " ");
            i !== (s = vt(r)) && n.setAttribute("class", s)
          }
      return this
    },
    toggleClass: function (e, t) {
      var n = typeof e,
        r = "string" === n || Array.isArray(e);
      return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : g(e) ? this.each(function (n) { w(this).toggleClass(e.call(this, n, mt(this), t), t) }) : this.each(function () { var t, i, o, a; if (r) { i = 0, o = w(this), a = xt(e); while (t = a[i++]) o.hasClass(t) ? o.removeClass(t) : o.addClass(t) } else void 0 !== e && "boolean" !== n || ((t = mt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || "")) })
    },
    hasClass: function (e) {
      var t, n, r = 0;
      t = " " + e + " ";
      while (n = this[r++])
        if (1 === n.nodeType && (" " + vt(mt(n)) + " ").indexOf(t) > -1) return !0;
      return !1
    }
  });
  var bt = /\r/g;
  w.fn.extend({
    val: function (e) {
      var t, n, r, i = this[0]; {
        if (arguments.length) return r = g(e), this.each(function (n) {
          var i;
          1 === this.nodeType && (null == (i = r ? e.call(this, n, w(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = w.map(i, function (e) { return null == e ? "" : e + "" })), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
        });
        if (i) return (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof (n = i.value) ? n.replace(bt, "") : null == n ? "" : n
      }
    }
  }), w.extend({
    valHooks: {
      option: { get: function (e) { var t = w.find.attr(e, "value"); return null != t ? t : vt(w.text(e)) } },
      select: {
        get: function (e) {
          var t, n, r, i = e.options,
            o = e.selectedIndex,
            a = "select-one" === e.type,
            s = a ? null : [],
            u = a ? o + 1 : i.length;
          for (r = o < 0 ? u : a ? o : 0; r < u; r++)
            if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))) {
              if (t = w(n).val(), a) return t;
              s.push(t)
            }
          return s
        },
        set: function (e, t) {
          var n, r, i = e.options,
            o = w.makeArray(t),
            a = i.length;
          while (a--) ((r = i[a]).selected = w.inArray(w.valHooks.option.get(r), o) > -1) && (n = !0);
          return n || (e.selectedIndex = -1), o
        }
      }
    }
  }), w.each(["radio", "checkbox"], function () { w.valHooks[this] = { set: function (e, t) { if (Array.isArray(t)) return e.checked = w.inArray(w(e).val(), t) > -1 } }, h.checkOn || (w.valHooks[this].get = function (e) { return null === e.getAttribute("value") ? "on" : e.value }) }), h.focusin = "onfocusin" in e;
  var wt = /^(?:focusinfocus|focusoutblur)$/,
    Tt = function (e) { e.stopPropagation() };
  w.extend(w.event, {
    trigger: function (t, n, i, o) {
      var a, s, u, l, c, p, d, h, v = [i || r],
        m = f.call(t, "type") ? t.type : t,
        x = f.call(t, "namespace") ? t.namespace.split(".") : [];
      if (s = h = u = i = i || r, 3 !== i.nodeType && 8 !== i.nodeType && !wt.test(m + w.event.triggered) && (m.indexOf(".") > -1 && (m = (x = m.split(".")).shift(), x.sort()), c = m.indexOf(":") < 0 && "on" + m, t = t[w.expando] ? t : new w.Event(m, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = x.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + x.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : w.makeArray(n, [t]), d = w.event.special[m] || {}, o || !d.trigger || !1 !== d.trigger.apply(i, n))) {
        if (!o && !d.noBubble && !y(i)) {
          for (l = d.delegateType || m, wt.test(l + m) || (s = s.parentNode); s; s = s.parentNode) v.push(s), u = s;
          u === (i.ownerDocument || r) && v.push(u.defaultView || u.parentWindow || e)
        }
        a = 0;
        while ((s = v[a++]) && !t.isPropagationStopped()) h = s, t.type = a > 1 ? l : d.bindType || m, (p = (J.get(s, "events") || {})[t.type] && J.get(s, "handle")) && p.apply(s, n), (p = c && s[c]) && p.apply && Y(s) && (t.result = p.apply(s, n), !1 === t.result && t.preventDefault());
        return t.type = m, o || t.isDefaultPrevented() || d._default && !1 !== d._default.apply(v.pop(), n) || !Y(i) || c && g(i[m]) && !y(i) && ((u = i[c]) && (i[c] = null), w.event.triggered = m, t.isPropagationStopped() && h.addEventListener(m, Tt), i[m](), t.isPropagationStopped() && h.removeEventListener(m, Tt), w.event.triggered = void 0, u && (i[c] = u)), t.result
      }
    },
    simulate: function (e, t, n) {
      var r = w.extend(new w.Event, n, { type: e, isSimulated: !0 });
      w.event.trigger(r, null, t)
    }
  }), w.fn.extend({ trigger: function (e, t) { return this.each(function () { w.event.trigger(e, t, this) }) }, triggerHandler: function (e, t) { var n = this[0]; if (n) return w.event.trigger(e, t, n, !0) } }), h.focusin || w.each({ focus: "focusin", blur: "focusout" }, function (e, t) {
    var n = function (e) { w.event.simulate(t, e.target, w.event.fix(e)) };
    w.event.special[t] = {
      setup: function () {
        var r = this.ownerDocument || this,
          i = J.access(r, t);
        i || r.addEventListener(e, n, !0), J.access(r, t, (i || 0) + 1)
      },
      teardown: function () {
        var r = this.ownerDocument || this,
          i = J.access(r, t) - 1;
        i ? J.access(r, t, i) : (r.removeEventListener(e, n, !0), J.remove(r, t))
      }
    }
  });
  var Ct = e.location,
    Et = Date.now(),
    kt = /\?/;
  w.parseXML = function (t) { var n; if (!t || "string" != typeof t) return null; try { n = (new e.DOMParser).parseFromString(t, "text/xml") } catch (e) { n = void 0 } return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n };
  var St = /\[\]$/,
    Dt = /\r?\n/g,
    Nt = /^(?:submit|button|image|reset|file)$/i,
    At = /^(?:input|select|textarea|keygen)/i;

  function jt(e, t, n, r) {
    var i;
    if (Array.isArray(t)) w.each(t, function (t, i) { n || St.test(e) ? r(e, i) : jt(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r) });
    else if (n || "object" !== x(t)) r(e, t);
    else
      for (i in t) jt(e + "[" + i + "]", t[i], n, r)
  }
  w.param = function (e, t) {
    var n, r = [],
      i = function (e, t) {
        var n = g(t) ? t() : t;
        r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
      };
    if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, function () { i(this.name, this.value) });
    else
      for (n in e) jt(n, e[n], t, i);
    return r.join("&")
  }, w.fn.extend({ serialize: function () { return w.param(this.serializeArray()) }, serializeArray: function () { return this.map(function () { var e = w.prop(this, "elements"); return e ? w.makeArray(e) : this }).filter(function () { var e = this.type; return this.name && !w(this).is(":disabled") && At.test(this.nodeName) && !Nt.test(e) && (this.checked || !pe.test(e)) }).map(function (e, t) { var n = w(this).val(); return null == n ? null : Array.isArray(n) ? w.map(n, function (e) { return { name: t.name, value: e.replace(Dt, "\r\n") } }) : { name: t.name, value: n.replace(Dt, "\r\n") } }).get() } });
  var qt = /%20/g,
    Lt = /#.*$/,
    Ht = /([?&])_=[^&]*/,
    Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm,
    Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
    Mt = /^(?:GET|HEAD)$/,
    Rt = /^\/\//,
    It = {},
    Wt = {},
    $t = "*/".concat("*"),
    Bt = r.createElement("a");
  Bt.href = Ct.href;

  function Ft(e) {
    return function (t, n) {
      "string" != typeof t && (n = t, t = "*");
      var r, i = 0,
        o = t.toLowerCase().match(M) || [];
      if (g(n))
        while (r = o[i++]) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
    }
  }

  function _t(e, t, n, r) {
    var i = {},
      o = e === Wt;

    function a(s) { var u; return i[s] = !0, w.each(e[s] || [], function (e, s) { var l = s(t, n, r); return "string" != typeof l || o || i[l] ? o ? !(u = l) : void 0 : (t.dataTypes.unshift(l), a(l), !1) }), u }
    return a(t.dataTypes[0]) || !i["*"] && a("*")
  }

  function zt(e, t) { var n, r, i = w.ajaxSettings.flatOptions || {}; for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]); return r && w.extend(!0, e, r), e }

  function Xt(e, t, n) {
    var r, i, o, a, s = e.contents,
      u = e.dataTypes;
    while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
    if (r)
      for (i in s)
        if (s[i] && s[i].test(r)) { u.unshift(i); break }
    if (u[0] in n) o = u[0];
    else {
      for (i in n) {
        if (!u[0] || e.converters[i + " " + u[0]]) { o = i; break }
        a || (a = i)
      }
      o = o || a
    }
    if (o) return o !== u[0] && u.unshift(o), n[o]
  }

  function Ut(e, t, n, r) {
    var i, o, a, s, u, l = {},
      c = e.dataTypes.slice();
    if (c[1])
      for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
    o = c.shift();
    while (o)
      if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift())
        if ("*" === o) o = u;
        else if ("*" !== u && u !== o) {
          if (!(a = l[u + " " + o] || l["* " + o]))
            for (i in l)
              if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) { !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1])); break }
          if (!0 !== a)
            if (a && e["throws"]) t = a(t);
            else try { t = a(t) } catch (e) { return { state: "parsererror", error: a ? e : "No conversion from " + u + " to " + o } }
        }
    return { state: "success", data: t }
  }
  w.extend({
    active: 0,
    lastModified: {},
    etag: {},
    ajaxSettings: { url: Ct.href, type: "GET", isLocal: Pt.test(Ct.protocol), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: { "*": $t, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" }, contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ }, responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" }, converters: { "* text": String, "text html": !0, "text json": JSON.parse, "text xml": w.parseXML }, flatOptions: { url: !0, context: !0 } },
    ajaxSetup: function (e, t) { return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e) },
    ajaxPrefilter: Ft(It),
    ajaxTransport: Ft(Wt),
    ajax: function (t, n) {
      "object" == typeof t && (n = t, t = void 0), n = n || {};
      var i, o, a, s, u, l, c, f, p, d, h = w.ajaxSetup({}, n),
        g = h.context || h,
        y = h.context && (g.nodeType || g.jquery) ? w(g) : w.event,
        v = w.Deferred(),
        m = w.Callbacks("once memory"),
        x = h.statusCode || {},
        b = {},
        T = {},
        C = "canceled",
        E = {
          readyState: 0,
          getResponseHeader: function (e) {
            var t;
            if (c) {
              if (!s) { s = {}; while (t = Ot.exec(a)) s[t[1].toLowerCase()] = t[2] }
              t = s[e.toLowerCase()]
            }
            return null == t ? null : t
          },
          getAllResponseHeaders: function () { return c ? a : null },
          setRequestHeader: function (e, t) { return null == c && (e = T[e.toLowerCase()] = T[e.toLowerCase()] || e, b[e] = t), this },
          overrideMimeType: function (e) { return null == c && (h.mimeType = e), this },
          statusCode: function (e) {
            var t;
            if (e)
              if (c) E.always(e[E.status]);
              else
                for (t in e) x[t] = [x[t], e[t]];
            return this
          },
          abort: function (e) { var t = e || C; return i && i.abort(t), k(0, t), this }
        };
      if (v.promise(E), h.url = ((t || h.url || Ct.href) + "").replace(Rt, Ct.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(M) || [""], null == h.crossDomain) { l = r.createElement("a"); try { l.href = h.url, l.href = l.href, h.crossDomain = Bt.protocol + "//" + Bt.host != l.protocol + "//" + l.host } catch (e) { h.crossDomain = !0 } }
      if (h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), _t(It, h, n, E), c) return E;
      (f = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Mt.test(h.type), o = h.url.replace(Lt, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qt, "+")) : (d = h.url.slice(o.length), h.data && (h.processData || "string" == typeof h.data) && (o += (kt.test(o) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (o = o.replace(Ht, "$1"), d = (kt.test(o) ? "&" : "?") + "_=" + Et++ + d), h.url = o + d), h.ifModified && (w.lastModified[o] && E.setRequestHeader("If-Modified-Since", w.lastModified[o]), w.etag[o] && E.setRequestHeader("If-None-Match", w.etag[o])), (h.data && h.hasContent && !1 !== h.contentType || n.contentType) && E.setRequestHeader("Content-Type", h.contentType), E.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "") : h.accepts["*"]);
      for (p in h.headers) E.setRequestHeader(p, h.headers[p]);
      if (h.beforeSend && (!1 === h.beforeSend.call(g, E, h) || c)) return E.abort();
      if (C = "abort", m.add(h.complete), E.done(h.success), E.fail(h.error), i = _t(Wt, h, n, E)) {
        if (E.readyState = 1, f && y.trigger("ajaxSend", [E, h]), c) return E;
        h.async && h.timeout > 0 && (u = e.setTimeout(function () { E.abort("timeout") }, h.timeout));
        try { c = !1, i.send(b, k) } catch (e) {
          if (c) throw e;
          k(-1, e)
        }
      } else k(-1, "No Transport");

      function k(t, n, r, s) {
        var l, p, d, b, T, C = n;
        c || (c = !0, u && e.clearTimeout(u), i = void 0, a = s || "", E.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, r && (b = Xt(h, E, r)), b = Ut(h, b, E, l), l ? (h.ifModified && ((T = E.getResponseHeader("Last-Modified")) && (w.lastModified[o] = T), (T = E.getResponseHeader("etag")) && (w.etag[o] = T)), 204 === t || "HEAD" === h.type ? C = "nocontent" : 304 === t ? C = "notmodified" : (C = b.state, p = b.data, l = !(d = b.error))) : (d = C, !t && C || (C = "error", t < 0 && (t = 0))), E.status = t, E.statusText = (n || C) + "", l ? v.resolveWith(g, [p, C, E]) : v.rejectWith(g, [E, C, d]), E.statusCode(x), x = void 0, f && y.trigger(l ? "ajaxSuccess" : "ajaxError", [E, h, l ? p : d]), m.fireWith(g, [E, C]), f && (y.trigger("ajaxComplete", [E, h]), --w.active || w.event.trigger("ajaxStop")))
      }
      return E
    },
    getJSON: function (e, t, n) { return w.get(e, t, n, "json") },
    getScript: function (e, t) { return w.get(e, void 0, t, "script") }
  }), w.each(["get", "post"], function (e, t) { w[t] = function (e, n, r, i) { return g(n) && (i = i || r, r = n, n = void 0), w.ajax(w.extend({ url: e, type: t, dataType: i, data: n, success: r }, w.isPlainObject(e) && e)) } }), w._evalUrl = function (e) { return w.ajax({ url: e, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, "throws": !0 }) }, w.fn.extend({
    wrapAll: function (e) { var t; return this[0] && (g(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () { var e = this; while (e.firstElementChild) e = e.firstElementChild; return e }).append(this)), this },
    wrapInner: function (e) {
      return g(e) ? this.each(function (t) { w(this).wrapInner(e.call(this, t)) }) : this.each(function () {
        var t = w(this),
          n = t.contents();
        n.length ? n.wrapAll(e) : t.append(e)
      })
    },
    wrap: function (e) { var t = g(e); return this.each(function (n) { w(this).wrapAll(t ? e.call(this, n) : e) }) },
    unwrap: function (e) { return this.parent(e).not("body").each(function () { w(this).replaceWith(this.childNodes) }), this }
  }), w.expr.pseudos.hidden = function (e) { return !w.expr.pseudos.visible(e) }, w.expr.pseudos.visible = function (e) { return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length) }, w.ajaxSettings.xhr = function () { try { return new e.XMLHttpRequest } catch (e) { } };
  var Vt = { 0: 200, 1223: 204 },
    Gt = w.ajaxSettings.xhr();
  h.cors = !!Gt && "withCredentials" in Gt, h.ajax = Gt = !!Gt, w.ajaxTransport(function (t) {
    var n, r;
    if (h.cors || Gt && !t.crossDomain) return {
      send: function (i, o) {
        var a, s = t.xhr();
        if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
          for (a in t.xhrFields) s[a] = t.xhrFields[a];
        t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");
        for (a in i) s.setRequestHeader(a, i[a]);
        n = function (e) { return function () { n && (n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Vt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? { binary: s.response } : { text: s.responseText }, s.getAllResponseHeaders())) } }, s.onload = n(), r = s.onerror = s.ontimeout = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () { 4 === s.readyState && e.setTimeout(function () { n && r() }) }, n = n("abort");
        try { s.send(t.hasContent && t.data || null) } catch (e) { if (n) throw e }
      },
      abort: function () { n && n() }
    }
  }), w.ajaxPrefilter(function (e) { e.crossDomain && (e.contents.script = !1) }), w.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /\b(?:java|ecma)script\b/ }, converters: { "text script": function (e) { return w.globalEval(e), e } } }), w.ajaxPrefilter("script", function (e) { void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET") }), w.ajaxTransport("script", function (e) { if (e.crossDomain) { var t, n; return { send: function (i, o) { t = w("<script>").prop({ charset: e.scriptCharset, src: e.url }).on("load error", n = function (e) { t.remove(), n = null, e && o("error" === e.type ? 404 : 200, e.type) }), r.head.appendChild(t[0]) }, abort: function () { n && n() } } } });
  var Yt = [],
    Qt = /(=)\?(?=&|$)|\?\?/;
  w.ajaxSetup({ jsonp: "callback", jsonpCallback: function () { var e = Yt.pop() || w.expando + "_" + Et++; return this[e] = !0, e } }), w.ajaxPrefilter("json jsonp", function (t, n, r) { var i, o, a, s = !1 !== t.jsonp && (Qt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Qt.test(t.data) && "data"); if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Qt, "$1" + i) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function () { return a || w.error(i + " was not called"), a[0] }, t.dataTypes[0] = "json", o = e[i], e[i] = function () { a = arguments }, r.always(function () { void 0 === o ? w(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Yt.push(i)), a && g(o) && o(a[0]), a = o = void 0 }), "script" }), h.createHTMLDocument = function () { var e = r.implementation.createHTMLDocument("").body; return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length }(), w.parseHTML = function (e, t, n) { if ("string" != typeof e) return []; "boolean" == typeof t && (n = t, t = !1); var i, o, a; return t || (h.createHTMLDocument ? ((i = (t = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href, t.head.appendChild(i)) : t = r), o = A.exec(e), a = !n && [], o ? [t.createElement(o[1])] : (o = xe([e], t, a), a && a.length && w(a).remove(), w.merge([], o.childNodes)) }, w.fn.load = function (e, t, n) {
    var r, i, o, a = this,
      s = e.indexOf(" ");
    return s > -1 && (r = vt(e.slice(s)), e = e.slice(0, s)), g(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), a.length > 0 && w.ajax({ url: e, type: i || "GET", dataType: "html", data: t }).done(function (e) { o = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e) }).always(n && function (e, t) { a.each(function () { n.apply(this, o || [e.responseText, t, e]) }) }), this
  }, w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) { w.fn[t] = function (e) { return this.on(t, e) } }), w.expr.pseudos.animated = function (e) { return w.grep(w.timers, function (t) { return e === t.elem }).length }, w.offset = {
    setOffset: function (e, t, n) {
      var r, i, o, a, s, u, l, c = w.css(e, "position"),
        f = w(e),
        p = {};
      "static" === c && (e.style.position = "relative"), s = f.offset(), o = w.css(e, "top"), u = w.css(e, "left"), (l = ("absolute" === c || "fixed" === c) && (o + u).indexOf("auto") > -1) ? (a = (r = f.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), g(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (p.top = t.top - s.top + a), null != t.left && (p.left = t.left - s.left + i), "using" in t ? t.using.call(e, p) : f.css(p)
    }
  }, w.fn.extend({
    offset: function (e) { if (arguments.length) return void 0 === e ? this : this.each(function (t) { w.offset.setOffset(this, e, t) }); var t, n, r = this[0]; if (r) return r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, { top: t.top + n.pageYOffset, left: t.left + n.pageXOffset }) : { top: 0, left: 0 } },
    position: function () {
      if (this[0]) {
        var e, t, n, r = this[0],
          i = { top: 0, left: 0 };
        if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect();
        else {
          t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;
          while (e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position")) e = e.parentNode;
          e && e !== r && 1 === e.nodeType && ((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0), i.left += w.css(e, "borderLeftWidth", !0))
        }
        return { top: t.top - i.top - w.css(r, "marginTop", !0), left: t.left - i.left - w.css(r, "marginLeft", !0) }
      }
    },
    offsetParent: function () { return this.map(function () { var e = this.offsetParent; while (e && "static" === w.css(e, "position")) e = e.offsetParent; return e || be }) }
  }), w.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function (e, t) {
    var n = "pageYOffset" === t;
    w.fn[e] = function (r) {
      return z(this, function (e, r, i) {
        var o;
        if (y(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r];
        o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i
      }, e, r, arguments.length)
    }
  }), w.each(["top", "left"], function (e, t) { w.cssHooks[t] = _e(h.pixelPosition, function (e, n) { if (n) return n = Fe(e, t), We.test(n) ? w(e).position()[t] + "px" : n }) }), w.each({ Height: "height", Width: "width" }, function (e, t) {
    w.each({ padding: "inner" + e, content: t, "": "outer" + e }, function (n, r) {
      w.fn[r] = function (i, o) {
        var a = arguments.length && (n || "boolean" != typeof i),
          s = n || (!0 === i || !0 === o ? "margin" : "border");
        return z(this, function (t, n, i) { var o; return y(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? w.css(t, n, s) : w.style(t, n, i, s) }, t, a ? i : void 0, a)
      }
    })
  }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) { w.fn[t] = function (e, n) { return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t) } }), w.fn.extend({ hover: function (e, t) { return this.mouseenter(e).mouseleave(t || e) } }), w.fn.extend({ bind: function (e, t, n) { return this.on(e, null, t, n) }, unbind: function (e, t) { return this.off(e, null, t) }, delegate: function (e, t, n, r) { return this.on(t, e, n, r) }, undelegate: function (e, t, n) { return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n) } }), w.proxy = function (e, t) { var n, r, i; if ("string" == typeof t && (n = e[t], t = e, e = n), g(e)) return r = o.call(arguments, 2), i = function () { return e.apply(t || this, r.concat(o.call(arguments))) }, i.guid = e.guid = e.guid || w.guid++, i }, w.holdReady = function (e) { e ? w.readyWait++ : w.ready(!0) }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = N, w.isFunction = g, w.isWindow = y, w.camelCase = G, w.type = x, w.now = Date.now, w.isNumeric = function (e) { var t = w.type(e); return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e)) }, "function" == typeof define && define.amd && define("jquery", [], function () { return w });
  var Jt = e.jQuery,
    Kt = e.$;
  return w.noConflict = function (t) { return e.$ === w && (e.$ = Kt), t && e.jQuery === w && (e.jQuery = Jt), w }, t || (e.jQuery = e.$ = w), w
});




/*!
  * Bootstrap v4.2.1 (https://getbootstrap.com/)
  * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
*/
! function (t, e) { "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], e) : e(t.bootstrap = {}, t.jQuery) }(this, function (t, p) {
  "use strict";

  function i(t, e) {
    for (var n = 0; n < e.length; n++) {
      var i = e[n];
      i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
    }
  }

  function s(t, e, n) { return e && i(t.prototype, e), n && i(t, n), t }

  function l(o) {
    for (var t = 1; t < arguments.length; t++) {
      var r = null != arguments[t] ? arguments[t] : {},
        e = Object.keys(r);
      "function" == typeof Object.getOwnPropertySymbols && (e = e.concat(Object.getOwnPropertySymbols(r).filter(function (t) { return Object.getOwnPropertyDescriptor(r, t).enumerable }))), e.forEach(function (t) {
        var e, n, i;
        e = o, i = r[n = t], n in e ? Object.defineProperty(e, n, { value: i, enumerable: !0, configurable: !0, writable: !0 }) : e[n] = i
      })
    }
    return o
  }
  p = p && p.hasOwnProperty("default") ? p.default : p;
  var e = "transitionend";

  function n(t) {
    var e = this,
      n = !1;
    return p(this).one(m.TRANSITION_END, function () { n = !0 }), setTimeout(function () { n || m.triggerTransitionEnd(e) }, t), this
  }
  var m = {
    TRANSITION_END: "bsTransitionEnd",
    getUID: function (t) { for (; t += ~~(1e6 * Math.random()), document.getElementById(t);); return t },
    getSelectorFromElement: function (t) {
      var e = t.getAttribute("data-target");
      if (!e || "#" === e) {
        var n = t.getAttribute("href");
        e = n && "#" !== n ? n.trim() : ""
      }
      return e && document.querySelector(e) ? e : null
    },
    getTransitionDurationFromElement: function (t) {
      if (!t) return 0;
      var e = p(t).css("transition-duration"),
        n = p(t).css("transition-delay"),
        i = parseFloat(e),
        o = parseFloat(n);
      return i || o ? (e = e.split(",")[0], n = n.split(",")[0], 1e3 * (parseFloat(e) + parseFloat(n))) : 0
    },
    reflow: function (t) { return t.offsetHeight },
    triggerTransitionEnd: function (t) { p(t).trigger(e) },
    supportsTransitionEnd: function () { return Boolean(e) },
    isElement: function (t) { return (t[0] || t).nodeType },
    typeCheckConfig: function (t, e, n) {
      for (var i in n)
        if (Object.prototype.hasOwnProperty.call(n, i)) {
          var o = n[i],
            r = e[i],
            s = r && m.isElement(r) ? "element" : (a = r, {}.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase());
          if (!new RegExp(o).test(s)) throw new Error(t.toUpperCase() + ': Option "' + i + '" provided type "' + s + '" but expected type "' + o + '".')
        }
      var a
    },
    findShadowRoot: function (t) { if (!document.documentElement.attachShadow) return null; if ("function" != typeof t.getRootNode) return t instanceof ShadowRoot ? t : t.parentNode ? m.findShadowRoot(t.parentNode) : null; var e = t.getRootNode(); return e instanceof ShadowRoot ? e : null }
  };
  p.fn.emulateTransitionEnd = n, p.event.special[m.TRANSITION_END] = { bindType: e, delegateType: e, handle: function (t) { if (p(t.target).is(this)) return t.handleObj.handler.apply(this, arguments) } };
  var o = "alert",
    r = "bs.alert",
    a = "." + r,
    c = p.fn[o],
    h = { CLOSE: "close" + a, CLOSED: "closed" + a, CLICK_DATA_API: "click" + a + ".data-api" },
    u = "alert",
    f = "fade",
    d = "show",
    g = function () {
      function i(t) { this._element = t }
      var t = i.prototype;
      return t.close = function (t) {
        var e = this._element;
        t && (e = this._getRootElement(t)), this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
      }, t.dispose = function () { p.removeData(this._element, r), this._element = null }, t._getRootElement = function (t) {
        var e = m.getSelectorFromElement(t),
          n = !1;
        return e && (n = document.querySelector(e)), n || (n = p(t).closest("." + u)[0]), n
      }, t._triggerCloseEvent = function (t) { var e = p.Event(h.CLOSE); return p(t).trigger(e), e }, t._removeElement = function (e) {
        var n = this;
        if (p(e).removeClass(d), p(e).hasClass(f)) {
          var t = m.getTransitionDurationFromElement(e);
          p(e).one(m.TRANSITION_END, function (t) { return n._destroyElement(e, t) }).emulateTransitionEnd(t)
        } else this._destroyElement(e)
      }, t._destroyElement = function (t) { p(t).detach().trigger(h.CLOSED).remove() }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this),
            e = t.data(r);
          e || (e = new i(this), t.data(r, e)), "close" === n && e[n](this)
        })
      }, i._handleDismiss = function (e) { return function (t) { t && t.preventDefault(), e.close(this) } }, s(i, null, [{ key: "VERSION", get: function () { return "4.2.1" } }]), i
    }();
  p(document).on(h.CLICK_DATA_API, '[data-dismiss="alert"]', g._handleDismiss(new g)), p.fn[o] = g._jQueryInterface, p.fn[o].Constructor = g, p.fn[o].noConflict = function () { return p.fn[o] = c, g._jQueryInterface };
  var _ = "button",
    v = "bs.button",
    y = "." + v,
    E = ".data-api",
    b = p.fn[_],
    w = "active",
    T = "btn",
    C = "focus",
    S = '[data-toggle^="button"]',
    D = '[data-toggle="buttons"]',
    I = 'input:not([type="hidden"])',
    A = ".active",
    O = ".btn",
    N = { CLICK_DATA_API: "click" + y + E, FOCUS_BLUR_DATA_API: "focus" + y + E + " blur" + y + E },
    k = function () {
      function n(t) { this._element = t }
      var t = n.prototype;
      return t.toggle = function () {
        var t = !0,
          e = !0,
          n = p(this._element).closest(D)[0];
        if (n) {
          var i = this._element.querySelector(I);
          if (i) {
            if ("radio" === i.type)
              if (i.checked && this._element.classList.contains(w)) t = !1;
              else {
                var o = n.querySelector(A);
                o && p(o).removeClass(w)
              }
            if (t) {
              if (i.hasAttribute("disabled") || n.hasAttribute("disabled") || i.classList.contains("disabled") || n.classList.contains("disabled")) return;
              i.checked = !this._element.classList.contains(w), p(i).trigger("change")
            }
            i.focus(), e = !1
          }
        }
        e && this._element.setAttribute("aria-pressed", !this._element.classList.contains(w)), t && p(this._element).toggleClass(w)
      }, t.dispose = function () { p.removeData(this._element, v), this._element = null }, n._jQueryInterface = function (e) {
        return this.each(function () {
          var t = p(this).data(v);
          t || (t = new n(this), p(this).data(v, t)), "toggle" === e && t[e]()
        })
      }, s(n, null, [{ key: "VERSION", get: function () { return "4.2.1" } }]), n
    }();
  p(document).on(N.CLICK_DATA_API, S, function (t) {
    t.preventDefault();
    var e = t.target;
    p(e).hasClass(T) || (e = p(e).closest(O)), k._jQueryInterface.call(p(e), "toggle")
  }).on(N.FOCUS_BLUR_DATA_API, S, function (t) {
    var e = p(t.target).closest(O)[0];
    p(e).toggleClass(C, /^focus(in)?$/.test(t.type))
  }), p.fn[_] = k._jQueryInterface, p.fn[_].Constructor = k, p.fn[_].noConflict = function () { return p.fn[_] = b, k._jQueryInterface };
  var L = "carousel",
    P = "bs.carousel",
    x = "." + P,
    H = ".data-api",
    j = p.fn[L],
    R = { interval: 5e3, keyboard: !0, slide: !1, pause: "hover", wrap: !0, touch: !0 },
    F = { interval: "(number|boolean)", keyboard: "boolean", slide: "(boolean|string)", pause: "(string|boolean)", wrap: "boolean", touch: "boolean" },
    M = "next",
    W = "prev",
    U = "left",
    B = "right",
    q = { SLIDE: "slide" + x, SLID: "slid" + x, KEYDOWN: "keydown" + x, MOUSEENTER: "mouseenter" + x, MOUSELEAVE: "mouseleave" + x, TOUCHSTART: "touchstart" + x, TOUCHMOVE: "touchmove" + x, TOUCHEND: "touchend" + x, POINTERDOWN: "pointerdown" + x, POINTERUP: "pointerup" + x, DRAG_START: "dragstart" + x, LOAD_DATA_API: "load" + x + H, CLICK_DATA_API: "click" + x + H },
    K = "carousel",
    Q = "active",
    Y = "slide",
    V = "carousel-item-right",
    X = "carousel-item-left",
    z = "carousel-item-next",
    G = "carousel-item-prev",
    J = "pointer-event",
    Z = ".active",
    $ = ".active.carousel-item",
    tt = ".carousel-item",
    et = ".carousel-item img",
    nt = ".carousel-item-next, .carousel-item-prev",
    it = ".carousel-indicators",
    ot = "[data-slide], [data-slide-to]",
    rt = '[data-ride="carousel"]',
    st = { TOUCH: "touch", PEN: "pen" },
    at = function () {
      function r(t, e) { this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(e), this._element = t, this._indicatorsElement = this._element.querySelector(it), this._touchSupported = "ontouchstart" in document.documentElement || 0 < navigator.maxTouchPoints, this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent), this._addEventListeners() }
      var t = r.prototype;
      return t.next = function () { this._isSliding || this._slide(M) }, t.nextWhenVisible = function () { !document.hidden && p(this._element).is(":visible") && "hidden" !== p(this._element).css("visibility") && this.next() }, t.prev = function () { this._isSliding || this._slide(W) }, t.pause = function (t) { t || (this._isPaused = !0), this._element.querySelector(nt) && (m.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null }, t.cycle = function (t) { t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval)) }, t.to = function (t) {
        var e = this;
        this._activeElement = this._element.querySelector($);
        var n = this._getItemIndex(this._activeElement);
        if (!(t > this._items.length - 1 || t < 0))
          if (this._isSliding) p(this._element).one(q.SLID, function () { return e.to(t) });
          else {
            if (n === t) return this.pause(), void this.cycle();
            var i = n < t ? M : W;
            this._slide(i, this._items[t])
          }
      }, t.dispose = function () { p(this._element).off(x), p.removeData(this._element, P), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null }, t._getConfig = function (t) { return t = l({}, R, t), m.typeCheckConfig(L, t, F), t }, t._handleSwipe = function () {
        var t = Math.abs(this.touchDeltaX);
        if (!(t <= 40)) {
          var e = t / this.touchDeltaX;
          0 < e && this.prev(), e < 0 && this.next()
        }
      }, t._addEventListeners = function () {
        var e = this;
        this._config.keyboard && p(this._element).on(q.KEYDOWN, function (t) { return e._keydown(t) }), "hover" === this._config.pause && p(this._element).on(q.MOUSEENTER, function (t) { return e.pause(t) }).on(q.MOUSELEAVE, function (t) { return e.cycle(t) }), this._addTouchEventListeners()
      }, t._addTouchEventListeners = function () {
        var n = this;
        if (this._touchSupported) {
          var e = function (t) { n._pointerEvent && st[t.originalEvent.pointerType.toUpperCase()] ? n.touchStartX = t.originalEvent.clientX : n._pointerEvent || (n.touchStartX = t.originalEvent.touches[0].clientX) },
            i = function (t) { n._pointerEvent && st[t.originalEvent.pointerType.toUpperCase()] && (n.touchDeltaX = t.originalEvent.clientX - n.touchStartX), n._handleSwipe(), "hover" === n._config.pause && (n.pause(), n.touchTimeout && clearTimeout(n.touchTimeout), n.touchTimeout = setTimeout(function (t) { return n.cycle(t) }, 500 + n._config.interval)) };
          p(this._element.querySelectorAll(et)).on(q.DRAG_START, function (t) { return t.preventDefault() }), this._pointerEvent ? (p(this._element).on(q.POINTERDOWN, function (t) { return e(t) }), p(this._element).on(q.POINTERUP, function (t) { return i(t) }), this._element.classList.add(J)) : (p(this._element).on(q.TOUCHSTART, function (t) { return e(t) }), p(this._element).on(q.TOUCHMOVE, function (t) {
            var e;
            (e = t).originalEvent.touches && 1 < e.originalEvent.touches.length ? n.touchDeltaX = 0 : n.touchDeltaX = e.originalEvent.touches[0].clientX - n.touchStartX
          }), p(this._element).on(q.TOUCHEND, function (t) { return i(t) }))
        }
      }, t._keydown = function (t) {
        if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
          case 37:
            t.preventDefault(), this.prev();
            break;
          case 39:
            t.preventDefault(), this.next()
        }
      }, t._getItemIndex = function (t) { return this._items = t && t.parentNode ? [].slice.call(t.parentNode.querySelectorAll(tt)) : [], this._items.indexOf(t) }, t._getItemByDirection = function (t, e) {
        var n = t === M,
          i = t === W,
          o = this._getItemIndex(e),
          r = this._items.length - 1;
        if ((i && 0 === o || n && o === r) && !this._config.wrap) return e;
        var s = (o + (t === W ? -1 : 1)) % this._items.length;
        return -1 === s ? this._items[this._items.length - 1] : this._items[s]
      }, t._triggerSlideEvent = function (t, e) {
        var n = this._getItemIndex(t),
          i = this._getItemIndex(this._element.querySelector($)),
          o = p.Event(q.SLIDE, { relatedTarget: t, direction: e, from: i, to: n });
        return p(this._element).trigger(o), o
      }, t._setActiveIndicatorElement = function (t) {
        if (this._indicatorsElement) {
          var e = [].slice.call(this._indicatorsElement.querySelectorAll(Z));
          p(e).removeClass(Q);
          var n = this._indicatorsElement.children[this._getItemIndex(t)];
          n && p(n).addClass(Q)
        }
      }, t._slide = function (t, e) {
        var n, i, o, r = this,
          s = this._element.querySelector($),
          a = this._getItemIndex(s),
          l = e || s && this._getItemByDirection(t, s),
          c = this._getItemIndex(l),
          h = Boolean(this._interval);
        if (o = t === M ? (n = X, i = z, U) : (n = V, i = G, B), l && p(l).hasClass(Q)) this._isSliding = !1;
        else if (!this._triggerSlideEvent(l, o).isDefaultPrevented() && s && l) {
          this._isSliding = !0, h && this.pause(), this._setActiveIndicatorElement(l);
          var u = p.Event(q.SLID, { relatedTarget: l, direction: o, from: a, to: c });
          if (p(this._element).hasClass(Y)) {
            p(l).addClass(i), m.reflow(l), p(s).addClass(n), p(l).addClass(n);
            var f = parseInt(l.getAttribute("data-interval"), 10);
            this._config.interval = f ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, f) : this._config.defaultInterval || this._config.interval;
            var d = m.getTransitionDurationFromElement(s);
            p(s).one(m.TRANSITION_END, function () { p(l).removeClass(n + " " + i).addClass(Q), p(s).removeClass(Q + " " + i + " " + n), r._isSliding = !1, setTimeout(function () { return p(r._element).trigger(u) }, 0) }).emulateTransitionEnd(d)
          } else p(s).removeClass(Q), p(l).addClass(Q), this._isSliding = !1, p(this._element).trigger(u);
          h && this.cycle()
        }
      }, r._jQueryInterface = function (i) {
        return this.each(function () {
          var t = p(this).data(P),
            e = l({}, R, p(this).data());
          "object" == typeof i && (e = l({}, e, i));
          var n = "string" == typeof i ? i : e.slide;
          if (t || (t = new r(this, e), p(this).data(P, t)), "number" == typeof i) t.to(i);
          else if ("string" == typeof n) {
            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
            t[n]()
          } else e.interval && (t.pause(), t.cycle())
        })
      }, r._dataApiClickHandler = function (t) {
        var e = m.getSelectorFromElement(this);
        if (e) {
          var n = p(e)[0];
          if (n && p(n).hasClass(K)) {
            var i = l({}, p(n).data(), p(this).data()),
              o = this.getAttribute("data-slide-to");
            o && (i.interval = !1), r._jQueryInterface.call(p(n), i), o && p(n).data(P).to(o), t.preventDefault()
          }
        }
      }, s(r, null, [{ key: "VERSION", get: function () { return "4.2.1" } }, { key: "Default", get: function () { return R } }]), r
    }();
  p(document).on(q.CLICK_DATA_API, ot, at._dataApiClickHandler), p(window).on(q.LOAD_DATA_API, function () {
    for (var t = [].slice.call(document.querySelectorAll(rt)), e = 0, n = t.length; e < n; e++) {
      var i = p(t[e]);
      at._jQueryInterface.call(i, i.data())
    }
  }), p.fn[L] = at._jQueryInterface, p.fn[L].Constructor = at, p.fn[L].noConflict = function () { return p.fn[L] = j, at._jQueryInterface };
  var lt = "collapse",
    ct = "bs.collapse",
    ht = "." + ct,
    ut = p.fn[lt],
    ft = { toggle: !0, parent: "" },
    dt = { toggle: "boolean", parent: "(string|element)" },
    pt = { SHOW: "show" + ht, SHOWN: "shown" + ht, HIDE: "hide" + ht, HIDDEN: "hidden" + ht, CLICK_DATA_API: "click" + ht + ".data-api" },
    mt = "show",
    gt = "collapse",
    _t = "collapsing",
    vt = "collapsed",
    yt = "width",
    Et = "height",
    bt = ".show, .collapsing",
    wt = '[data-toggle="collapse"]',
    Tt = function () {
      function a(e, t) {
        this._isTransitioning = !1, this._element = e, this._config = this._getConfig(t), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
        for (var n = [].slice.call(document.querySelectorAll(wt)), i = 0, o = n.length; i < o; i++) {
          var r = n[i],
            s = m.getSelectorFromElement(r),
            a = [].slice.call(document.querySelectorAll(s)).filter(function (t) { return t === e });
          null !== s && 0 < a.length && (this._selector = s, this._triggerArray.push(r))
        }
        this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
      }
      var t = a.prototype;
      return t.toggle = function () { p(this._element).hasClass(mt) ? this.hide() : this.show() }, t.show = function () {
        var t, e, n = this;
        if (!this._isTransitioning && !p(this._element).hasClass(mt) && (this._parent && 0 === (t = [].slice.call(this._parent.querySelectorAll(bt)).filter(function (t) { return "string" == typeof n._config.parent ? t.getAttribute("data-parent") === n._config.parent : t.classList.contains(gt) })).length && (t = null), !(t && (e = p(t).not(this._selector).data(ct)) && e._isTransitioning))) {
          var i = p.Event(pt.SHOW);
          if (p(this._element).trigger(i), !i.isDefaultPrevented()) {
            t && (a._jQueryInterface.call(p(t).not(this._selector), "hide"), e || p(t).data(ct, null));
            var o = this._getDimension();
            p(this._element).removeClass(gt).addClass(_t), this._element.style[o] = 0, this._triggerArray.length && p(this._triggerArray).removeClass(vt).attr("aria-expanded", !0), this.setTransitioning(!0);
            var r = "scroll" + (o[0].toUpperCase() + o.slice(1)),
              s = m.getTransitionDurationFromElement(this._element);
            p(this._element).one(m.TRANSITION_END, function () { p(n._element).removeClass(_t).addClass(gt).addClass(mt), n._element.style[o] = "", n.setTransitioning(!1), p(n._element).trigger(pt.SHOWN) }).emulateTransitionEnd(s), this._element.style[o] = this._element[r] + "px"
          }
        }
      }, t.hide = function () {
        var t = this;
        if (!this._isTransitioning && p(this._element).hasClass(mt)) {
          var e = p.Event(pt.HIDE);
          if (p(this._element).trigger(e), !e.isDefaultPrevented()) {
            var n = this._getDimension();
            this._element.style[n] = this._element.getBoundingClientRect()[n] + "px", m.reflow(this._element), p(this._element).addClass(_t).removeClass(gt).removeClass(mt);
            var i = this._triggerArray.length;
            if (0 < i)
              for (var o = 0; o < i; o++) {
                var r = this._triggerArray[o],
                  s = m.getSelectorFromElement(r);
                if (null !== s) p([].slice.call(document.querySelectorAll(s))).hasClass(mt) || p(r).addClass(vt).attr("aria-expanded", !1)
              }
            this.setTransitioning(!0);
            this._element.style[n] = "";
            var a = m.getTransitionDurationFromElement(this._element);
            p(this._element).one(m.TRANSITION_END, function () { t.setTransitioning(!1), p(t._element).removeClass(_t).addClass(gt).trigger(pt.HIDDEN) }).emulateTransitionEnd(a)
          }
        }
      }, t.setTransitioning = function (t) { this._isTransitioning = t }, t.dispose = function () { p.removeData(this._element, ct), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null }, t._getConfig = function (t) { return (t = l({}, ft, t)).toggle = Boolean(t.toggle), m.typeCheckConfig(lt, t, dt), t }, t._getDimension = function () { return p(this._element).hasClass(yt) ? yt : Et }, t._getParent = function () {
        var t, n = this;
        m.isElement(this._config.parent) ? (t = this._config.parent, "undefined" != typeof this._config.parent.jquery && (t = this._config.parent[0])) : t = document.querySelector(this._config.parent);
        var e = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
          i = [].slice.call(t.querySelectorAll(e));
        return p(i).each(function (t, e) { n._addAriaAndCollapsedClass(a._getTargetFromElement(e), [e]) }), t
      }, t._addAriaAndCollapsedClass = function (t, e) {
        var n = p(t).hasClass(mt);
        e.length && p(e).toggleClass(vt, !n).attr("aria-expanded", n)
      }, a._getTargetFromElement = function (t) { var e = m.getSelectorFromElement(t); return e ? document.querySelector(e) : null }, a._jQueryInterface = function (i) {
        return this.each(function () {
          var t = p(this),
            e = t.data(ct),
            n = l({}, ft, t.data(), "object" == typeof i && i ? i : {});
          if (!e && n.toggle && /show|hide/.test(i) && (n.toggle = !1), e || (e = new a(this, n), t.data(ct, e)), "string" == typeof i) {
            if ("undefined" == typeof e[i]) throw new TypeError('No method named "' + i + '"');
            e[i]()
          }
        })
      }, s(a, null, [{ key: "VERSION", get: function () { return "4.2.1" } }, { key: "Default", get: function () { return ft } }]), a
    }();
  p(document).on(pt.CLICK_DATA_API, wt, function (t) {
    "A" === t.currentTarget.tagName && t.preventDefault();
    var n = p(this),
      e = m.getSelectorFromElement(this),
      i = [].slice.call(document.querySelectorAll(e));
    p(i).each(function () {
      var t = p(this),
        e = t.data(ct) ? "toggle" : n.data();
      Tt._jQueryInterface.call(t, e)
    })
  }), p.fn[lt] = Tt._jQueryInterface, p.fn[lt].Constructor = Tt, p.fn[lt].noConflict = function () { return p.fn[lt] = ut, Tt._jQueryInterface };
  for (var Ct = "undefined" != typeof window && "undefined" != typeof document, St = ["Edge", "Trident", "Firefox"], Dt = 0, It = 0; It < St.length; It += 1)
    if (Ct && 0 <= navigator.userAgent.indexOf(St[It])) { Dt = 1; break }
  var At = Ct && window.Promise ? function (t) { var e = !1; return function () { e || (e = !0, window.Promise.resolve().then(function () { e = !1, t() })) } } : function (t) { var e = !1; return function () { e || (e = !0, setTimeout(function () { e = !1, t() }, Dt)) } };

  function Ot(t) { return t && "[object Function]" === {}.toString.call(t) }

  function Nt(t, e) { if (1 !== t.nodeType) return []; var n = t.ownerDocument.defaultView.getComputedStyle(t, null); return e ? n[e] : n }

  function kt(t) { return "HTML" === t.nodeName ? t : t.parentNode || t.host }

  function Lt(t) {
    if (!t) return document.body;
    switch (t.nodeName) {
      case "HTML":
      case "BODY":
        return t.ownerDocument.body;
      case "#document":
        return t.body
    }
    var e = Nt(t),
      n = e.overflow,
      i = e.overflowX,
      o = e.overflowY;
    return /(auto|scroll|overlay)/.test(n + o + i) ? t : Lt(kt(t))
  }
  var Pt = Ct && !(!window.MSInputMethodContext || !document.documentMode),
    xt = Ct && /MSIE 10/.test(navigator.userAgent);

  function Ht(t) { return 11 === t ? Pt : 10 === t ? xt : Pt || xt }

  function jt(t) { if (!t) return document.documentElement; for (var e = Ht(10) ? document.body : null, n = t.offsetParent || null; n === e && t.nextElementSibling;) n = (t = t.nextElementSibling).offsetParent; var i = n && n.nodeName; return i && "BODY" !== i && "HTML" !== i ? -1 !== ["TH", "TD", "TABLE"].indexOf(n.nodeName) && "static" === Nt(n, "position") ? jt(n) : n : t ? t.ownerDocument.documentElement : document.documentElement }

  function Rt(t) { return null !== t.parentNode ? Rt(t.parentNode) : t }

  function Ft(t, e) {
    if (!(t && t.nodeType && e && e.nodeType)) return document.documentElement;
    var n = t.compareDocumentPosition(e) & Node.DOCUMENT_POSITION_FOLLOWING,
      i = n ? t : e,
      o = n ? e : t,
      r = document.createRange();
    r.setStart(i, 0), r.setEnd(o, 0);
    var s, a, l = r.commonAncestorContainer;
    if (t !== l && e !== l || i.contains(o)) return "BODY" === (a = (s = l).nodeName) || "HTML" !== a && jt(s.firstElementChild) !== s ? jt(l) : l;
    var c = Rt(t);
    return c.host ? Ft(c.host, e) : Ft(t, Rt(e).host)
  }

  function Mt(t) {
    var e = "top" === (1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : "top") ? "scrollTop" : "scrollLeft",
      n = t.nodeName;
    if ("BODY" !== n && "HTML" !== n) return t[e];
    var i = t.ownerDocument.documentElement;
    return (t.ownerDocument.scrollingElement || i)[e]
  }

  function Wt(t, e) {
    var n = "x" === e ? "Left" : "Top",
      i = "Left" === n ? "Right" : "Bottom";
    return parseFloat(t["border" + n + "Width"], 10) + parseFloat(t["border" + i + "Width"], 10)
  }

  function Ut(t, e, n, i) { return Math.max(e["offset" + t], e["scroll" + t], n["client" + t], n["offset" + t], n["scroll" + t], Ht(10) ? parseInt(n["offset" + t]) + parseInt(i["margin" + ("Height" === t ? "Top" : "Left")]) + parseInt(i["margin" + ("Height" === t ? "Bottom" : "Right")]) : 0) }

  function Bt(t) {
    var e = t.body,
      n = t.documentElement,
      i = Ht(10) && getComputedStyle(n);
    return { height: Ut("Height", e, n, i), width: Ut("Width", e, n, i) }
  }
  var qt = function () {
    function i(t, e) {
      for (var n = 0; n < e.length; n++) {
        var i = e[n];
        i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
      }
    }
    return function (t, e, n) { return e && i(t.prototype, e), n && i(t, n), t }
  }(),
    Kt = function (t, e, n) { return e in t ? Object.defineProperty(t, e, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : t[e] = n, t },
    Qt = Object.assign || function (t) { for (var e = 1; e < arguments.length; e++) { var n = arguments[e]; for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i]) } return t };

  function Yt(t) { return Qt({}, t, { right: t.left + t.width, bottom: t.top + t.height }) }

  function Vt(t) {
    var e = {};
    try {
      if (Ht(10)) {
        e = t.getBoundingClientRect();
        var n = Mt(t, "top"),
          i = Mt(t, "left");
        e.top += n, e.left += i, e.bottom += n, e.right += i
      } else e = t.getBoundingClientRect()
    } catch (t) { }
    var o = { left: e.left, top: e.top, width: e.right - e.left, height: e.bottom - e.top },
      r = "HTML" === t.nodeName ? Bt(t.ownerDocument) : {},
      s = r.width || t.clientWidth || o.right - o.left,
      a = r.height || t.clientHeight || o.bottom - o.top,
      l = t.offsetWidth - s,
      c = t.offsetHeight - a;
    if (l || c) {
      var h = Nt(t);
      l -= Wt(h, "x"), c -= Wt(h, "y"), o.width -= l, o.height -= c
    }
    return Yt(o)
  }

  function Xt(t, e) {
    var n = 2 < arguments.length && void 0 !== arguments[2] && arguments[2],
      i = Ht(10),
      o = "HTML" === e.nodeName,
      r = Vt(t),
      s = Vt(e),
      a = Lt(t),
      l = Nt(e),
      c = parseFloat(l.borderTopWidth, 10),
      h = parseFloat(l.borderLeftWidth, 10);
    n && o && (s.top = Math.max(s.top, 0), s.left = Math.max(s.left, 0));
    var u = Yt({ top: r.top - s.top - c, left: r.left - s.left - h, width: r.width, height: r.height });
    if (u.marginTop = 0, u.marginLeft = 0, !i && o) {
      var f = parseFloat(l.marginTop, 10),
        d = parseFloat(l.marginLeft, 10);
      u.top -= c - f, u.bottom -= c - f, u.left -= h - d, u.right -= h - d, u.marginTop = f, u.marginLeft = d
    }
    return (i && !n ? e.contains(a) : e === a && "BODY" !== a.nodeName) && (u = function (t, e) {
      var n = 2 < arguments.length && void 0 !== arguments[2] && arguments[2],
        i = Mt(e, "top"),
        o = Mt(e, "left"),
        r = n ? -1 : 1;
      return t.top += i * r, t.bottom += i * r, t.left += o * r, t.right += o * r, t
    }(u, e)), u
  }

  function zt(t) { if (!t || !t.parentElement || Ht()) return document.documentElement; for (var e = t.parentElement; e && "none" === Nt(e, "transform");) e = e.parentElement; return e || document.documentElement }

  function Gt(t, e, n, i) {
    var o = 4 < arguments.length && void 0 !== arguments[4] && arguments[4],
      r = { top: 0, left: 0 },
      s = o ? zt(t) : Ft(t, e);
    if ("viewport" === i) r = function (t) {
      var e = 1 < arguments.length && void 0 !== arguments[1] && arguments[1],
        n = t.ownerDocument.documentElement,
        i = Xt(t, n),
        o = Math.max(n.clientWidth, window.innerWidth || 0),
        r = Math.max(n.clientHeight, window.innerHeight || 0),
        s = e ? 0 : Mt(n),
        a = e ? 0 : Mt(n, "left");
      return Yt({ top: s - i.top + i.marginTop, left: a - i.left + i.marginLeft, width: o, height: r })
    }(s, o);
    else {
      var a = void 0;
      "scrollParent" === i ? "BODY" === (a = Lt(kt(e))).nodeName && (a = t.ownerDocument.documentElement) : a = "window" === i ? t.ownerDocument.documentElement : i;
      var l = Xt(a, s, o);
      if ("HTML" !== a.nodeName || function t(e) { var n = e.nodeName; return "BODY" !== n && "HTML" !== n && ("fixed" === Nt(e, "position") || t(kt(e))) }(s)) r = l;
      else {
        var c = Bt(t.ownerDocument),
          h = c.height,
          u = c.width;
        r.top += l.top - l.marginTop, r.bottom = h + l.top, r.left += l.left - l.marginLeft, r.right = u + l.left
      }
    }
    var f = "number" == typeof (n = n || 0);
    return r.left += f ? n : n.left || 0, r.top += f ? n : n.top || 0, r.right -= f ? n : n.right || 0, r.bottom -= f ? n : n.bottom || 0, r
  }

  function Jt(t, e, i, n, o) {
    var r = 5 < arguments.length && void 0 !== arguments[5] ? arguments[5] : 0;
    if (-1 === t.indexOf("auto")) return t;
    var s = Gt(i, n, r, o),
      a = { top: { width: s.width, height: e.top - s.top }, right: { width: s.right - e.right, height: s.height }, bottom: { width: s.width, height: s.bottom - e.bottom }, left: { width: e.left - s.left, height: s.height } },
      l = Object.keys(a).map(function (t) { return Qt({ key: t }, a[t], { area: (e = a[t], e.width * e.height) }); var e }).sort(function (t, e) { return e.area - t.area }),
      c = l.filter(function (t) {
        var e = t.width,
          n = t.height;
        return e >= i.clientWidth && n >= i.clientHeight
      }),
      h = 0 < c.length ? c[0].key : l[0].key,
      u = t.split("-")[1];
    return h + (u ? "-" + u : "")
  }

  function Zt(t, e, n) { var i = 3 < arguments.length && void 0 !== arguments[3] ? arguments[3] : null; return Xt(n, i ? zt(e) : Ft(e, n), i) }

  function $t(t) {
    var e = t.ownerDocument.defaultView.getComputedStyle(t),
      n = parseFloat(e.marginTop || 0) + parseFloat(e.marginBottom || 0),
      i = parseFloat(e.marginLeft || 0) + parseFloat(e.marginRight || 0);
    return { width: t.offsetWidth + i, height: t.offsetHeight + n }
  }

  function te(t) { var e = { left: "right", right: "left", bottom: "top", top: "bottom" }; return t.replace(/left|right|bottom|top/g, function (t) { return e[t] }) }

  function ee(t, e, n) {
    n = n.split("-")[0];
    var i = $t(t),
      o = { width: i.width, height: i.height },
      r = -1 !== ["right", "left"].indexOf(n),
      s = r ? "top" : "left",
      a = r ? "left" : "top",
      l = r ? "height" : "width",
      c = r ? "width" : "height";
    return o[s] = e[s] + e[l] / 2 - i[l] / 2, o[a] = n === a ? e[a] - i[c] : e[te(a)], o
  }

  function ne(t, e) { return Array.prototype.find ? t.find(e) : t.filter(e)[0] }

  function ie(t, n, e) {
    return (void 0 === e ? t : t.slice(0, function (t, e, n) { if (Array.prototype.findIndex) return t.findIndex(function (t) { return t[e] === n }); var i = ne(t, function (t) { return t[e] === n }); return t.indexOf(i) }(t, "name", e))).forEach(function (t) {
      t.function && console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
      var e = t.function || t.fn;
      t.enabled && Ot(e) && (n.offsets.popper = Yt(n.offsets.popper), n.offsets.reference = Yt(n.offsets.reference), n = e(n, t))
    }), n
  }

  function oe(t, n) { return t.some(function (t) { var e = t.name; return t.enabled && e === n }) }

  function re(t) {
    for (var e = [!1, "ms", "Webkit", "Moz", "O"], n = t.charAt(0).toUpperCase() + t.slice(1), i = 0; i < e.length; i++) {
      var o = e[i],
        r = o ? "" + o + n : t;
      if ("undefined" != typeof document.body.style[r]) return r
    }
    return null
  }

  function se(t) { var e = t.ownerDocument; return e ? e.defaultView : window }

  function ae(t, e, n, i) {
    n.updateBound = i, se(t).addEventListener("resize", n.updateBound, { passive: !0 });
    var o = Lt(t);
    return function t(e, n, i, o) {
      var r = "BODY" === e.nodeName,
        s = r ? e.ownerDocument.defaultView : e;
      s.addEventListener(n, i, { passive: !0 }), r || t(Lt(s.parentNode), n, i, o), o.push(s)
    }(o, "scroll", n.updateBound, n.scrollParents), n.scrollElement = o, n.eventsEnabled = !0, n
  }

  function le() {
    var t, e;
    this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (t = this.reference, e = this.state, se(t).removeEventListener("resize", e.updateBound), e.scrollParents.forEach(function (t) { t.removeEventListener("scroll", e.updateBound) }), e.updateBound = null, e.scrollParents = [], e.scrollElement = null, e.eventsEnabled = !1, e))
  }

  function ce(t) { return "" !== t && !isNaN(parseFloat(t)) && isFinite(t) }

  function he(n, i) { Object.keys(i).forEach(function (t) { var e = ""; - 1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(t) && ce(i[t]) && (e = "px"), n.style[t] = i[t] + e }) }
  var ue = Ct && /Firefox/i.test(navigator.userAgent);

  function fe(t, e, n) {
    var i = ne(t, function (t) { return t.name === e }),
      o = !!i && t.some(function (t) { return t.name === n && t.enabled && t.order < i.order });
    if (!o) {
      var r = "`" + e + "`",
        s = "`" + n + "`";
      console.warn(s + " modifier is required by " + r + " modifier in order to work, be sure to include it before " + r + "!")
    }
    return o
  }
  var de = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
    pe = de.slice(3);

  function me(t) {
    var e = 1 < arguments.length && void 0 !== arguments[1] && arguments[1],
      n = pe.indexOf(t),
      i = pe.slice(n + 1).concat(pe.slice(0, n));
    return e ? i.reverse() : i
  }
  var ge = "flip",
    _e = "clockwise",
    ve = "counterclockwise";

  function ye(t, o, r, e) {
    var s = [0, 0],
      a = -1 !== ["right", "left"].indexOf(e),
      n = t.split(/(\+|\-)/).map(function (t) { return t.trim() }),
      i = n.indexOf(ne(n, function (t) { return -1 !== t.search(/,|\s/) }));
    n[i] && -1 === n[i].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");
    var l = /\s*,\s*|\s+/,
      c = -1 !== i ? [n.slice(0, i).concat([n[i].split(l)[0]]), [n[i].split(l)[1]].concat(n.slice(i + 1))] : [n];
    return (c = c.map(function (t, e) {
      var n = (1 === e ? !a : a) ? "height" : "width",
        i = !1;
      return t.reduce(function (t, e) { return "" === t[t.length - 1] && -1 !== ["+", "-"].indexOf(e) ? (t[t.length - 1] = e, i = !0, t) : i ? (t[t.length - 1] += e, i = !1, t) : t.concat(e) }, []).map(function (t) {
        return function (t, e, n, i) {
          var o = t.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
            r = +o[1],
            s = o[2];
          if (!r) return t;
          if (0 !== s.indexOf("%")) return "vh" !== s && "vw" !== s ? r : ("vh" === s ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * r;
          var a = void 0;
          switch (s) {
            case "%p":
              a = n;
              break;
            case "%":
            case "%r":
            default:
              a = i
          }
          return Yt(a)[e] / 100 * r
        }(t, n, o, r)
      })
    })).forEach(function (n, i) { n.forEach(function (t, e) { ce(t) && (s[i] += t * ("-" === n[e - 1] ? -1 : 1)) }) }), s
  }
  var Ee = {
    placement: "bottom",
    positionFixed: !1,
    eventsEnabled: !0,
    removeOnDestroy: !1,
    onCreate: function () { },
    onUpdate: function () { },
    modifiers: {
      shift: {
        order: 100,
        enabled: !0,
        fn: function (t) {
          var e = t.placement,
            n = e.split("-")[0],
            i = e.split("-")[1];
          if (i) {
            var o = t.offsets,
              r = o.reference,
              s = o.popper,
              a = -1 !== ["bottom", "top"].indexOf(n),
              l = a ? "left" : "top",
              c = a ? "width" : "height",
              h = { start: Kt({}, l, r[l]), end: Kt({}, l, r[l] + r[c] - s[c]) };
            t.offsets.popper = Qt({}, s, h[i])
          }
          return t
        }
      },
      offset: {
        order: 200,
        enabled: !0,
        fn: function (t, e) {
          var n = e.offset,
            i = t.placement,
            o = t.offsets,
            r = o.popper,
            s = o.reference,
            a = i.split("-")[0],
            l = void 0;
          return l = ce(+n) ? [+n, 0] : ye(n, r, s, a), "left" === a ? (r.top += l[0], r.left -= l[1]) : "right" === a ? (r.top += l[0], r.left += l[1]) : "top" === a ? (r.left += l[0], r.top -= l[1]) : "bottom" === a && (r.left += l[0], r.top += l[1]), t.popper = r, t
        },
        offset: 0
      },
      preventOverflow: {
        order: 300,
        enabled: !0,
        fn: function (t, i) {
          var e = i.boundariesElement || jt(t.instance.popper);
          t.instance.reference === e && (e = jt(e));
          var n = re("transform"),
            o = t.instance.popper.style,
            r = o.top,
            s = o.left,
            a = o[n];
          o.top = "", o.left = "", o[n] = "";
          var l = Gt(t.instance.popper, t.instance.reference, i.padding, e, t.positionFixed);
          o.top = r, o.left = s, o[n] = a, i.boundaries = l;
          var c = i.priority,
            h = t.offsets.popper,
            u = {
              primary: function (t) { var e = h[t]; return h[t] < l[t] && !i.escapeWithReference && (e = Math.max(h[t], l[t])), Kt({}, t, e) },
              secondary: function (t) {
                var e = "right" === t ? "left" : "top",
                  n = h[e];
                return h[t] > l[t] && !i.escapeWithReference && (n = Math.min(h[e], l[t] - ("right" === t ? h.width : h.height))), Kt({}, e, n)
              }
            };
          return c.forEach(function (t) {
            var e = -1 !== ["left", "top"].indexOf(t) ? "primary" : "secondary";
            h = Qt({}, h, u[e](t))
          }), t.offsets.popper = h, t
        },
        priority: ["left", "right", "top", "bottom"],
        padding: 5,
        boundariesElement: "scrollParent"
      },
      keepTogether: {
        order: 400,
        enabled: !0,
        fn: function (t) {
          var e = t.offsets,
            n = e.popper,
            i = e.reference,
            o = t.placement.split("-")[0],
            r = Math.floor,
            s = -1 !== ["top", "bottom"].indexOf(o),
            a = s ? "right" : "bottom",
            l = s ? "left" : "top",
            c = s ? "width" : "height";
          return n[a] < r(i[l]) && (t.offsets.popper[l] = r(i[l]) - n[c]), n[l] > r(i[a]) && (t.offsets.popper[l] = r(i[a])), t
        }
      },
      arrow: {
        order: 500,
        enabled: !0,
        fn: function (t, e) {
          var n;
          if (!fe(t.instance.modifiers, "arrow", "keepTogether")) return t;
          var i = e.element;
          if ("string" == typeof i) { if (!(i = t.instance.popper.querySelector(i))) return t } else if (!t.instance.popper.contains(i)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), t;
          var o = t.placement.split("-")[0],
            r = t.offsets,
            s = r.popper,
            a = r.reference,
            l = -1 !== ["left", "right"].indexOf(o),
            c = l ? "height" : "width",
            h = l ? "Top" : "Left",
            u = h.toLowerCase(),
            f = l ? "left" : "top",
            d = l ? "bottom" : "right",
            p = $t(i)[c];
          a[d] - p < s[u] && (t.offsets.popper[u] -= s[u] - (a[d] - p)), a[u] + p > s[d] && (t.offsets.popper[u] += a[u] + p - s[d]), t.offsets.popper = Yt(t.offsets.popper);
          var m = a[u] + a[c] / 2 - p / 2,
            g = Nt(t.instance.popper),
            _ = parseFloat(g["margin" + h], 10),
            v = parseFloat(g["border" + h + "Width"], 10),
            y = m - t.offsets.popper[u] - _ - v;
          return y = Math.max(Math.min(s[c] - p, y), 0), t.arrowElement = i, t.offsets.arrow = (Kt(n = {}, u, Math.round(y)), Kt(n, f, ""), n), t
        },
        element: "[x-arrow]"
      },
      flip: {
        order: 600,
        enabled: !0,
        fn: function (p, m) {
          if (oe(p.instance.modifiers, "inner")) return p;
          if (p.flipped && p.placement === p.originalPlacement) return p;
          var g = Gt(p.instance.popper, p.instance.reference, m.padding, m.boundariesElement, p.positionFixed),
            _ = p.placement.split("-")[0],
            v = te(_),
            y = p.placement.split("-")[1] || "",
            E = [];
          switch (m.behavior) {
            case ge:
              E = [_, v];
              break;
            case _e:
              E = me(_);
              break;
            case ve:
              E = me(_, !0);
              break;
            default:
              E = m.behavior
          }
          return E.forEach(function (t, e) {
            if (_ !== t || E.length === e + 1) return p;
            _ = p.placement.split("-")[0], v = te(_);
            var n, i = p.offsets.popper,
              o = p.offsets.reference,
              r = Math.floor,
              s = "left" === _ && r(i.right) > r(o.left) || "right" === _ && r(i.left) < r(o.right) || "top" === _ && r(i.bottom) > r(o.top) || "bottom" === _ && r(i.top) < r(o.bottom),
              a = r(i.left) < r(g.left),
              l = r(i.right) > r(g.right),
              c = r(i.top) < r(g.top),
              h = r(i.bottom) > r(g.bottom),
              u = "left" === _ && a || "right" === _ && l || "top" === _ && c || "bottom" === _ && h,
              f = -1 !== ["top", "bottom"].indexOf(_),
              d = !!m.flipVariations && (f && "start" === y && a || f && "end" === y && l || !f && "start" === y && c || !f && "end" === y && h);
            (s || u || d) && (p.flipped = !0, (s || u) && (_ = E[e + 1]), d && (y = "end" === (n = y) ? "start" : "start" === n ? "end" : n), p.placement = _ + (y ? "-" + y : ""), p.offsets.popper = Qt({}, p.offsets.popper, ee(p.instance.popper, p.offsets.reference, p.placement)), p = ie(p.instance.modifiers, p, "flip"))
          }), p
        },
        behavior: "flip",
        padding: 5,
        boundariesElement: "viewport"
      },
      inner: {
        order: 700,
        enabled: !1,
        fn: function (t) {
          var e = t.placement,
            n = e.split("-")[0],
            i = t.offsets,
            o = i.popper,
            r = i.reference,
            s = -1 !== ["left", "right"].indexOf(n),
            a = -1 === ["top", "left"].indexOf(n);
          return o[s ? "left" : "top"] = r[n] - (a ? o[s ? "width" : "height"] : 0), t.placement = te(e), t.offsets.popper = Yt(o), t
        }
      },
      hide: {
        order: 800,
        enabled: !0,
        fn: function (t) {
          if (!fe(t.instance.modifiers, "hide", "preventOverflow")) return t;
          var e = t.offsets.reference,
            n = ne(t.instance.modifiers, function (t) { return "preventOverflow" === t.name }).boundaries;
          if (e.bottom < n.top || e.left > n.right || e.top > n.bottom || e.right < n.left) {
            if (!0 === t.hide) return t;
            t.hide = !0, t.attributes["x-out-of-boundaries"] = ""
          } else {
            if (!1 === t.hide) return t;
            t.hide = !1, t.attributes["x-out-of-boundaries"] = !1
          }
          return t
        }
      },
      computeStyle: {
        order: 850,
        enabled: !0,
        fn: function (t, e) {
          var n = e.x,
            i = e.y,
            o = t.offsets.popper,
            r = ne(t.instance.modifiers, function (t) { return "applyStyle" === t.name }).gpuAcceleration;
          void 0 !== r && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");
          var s, a, l, c, h, u, f, d, p, m, g, _, v = void 0 !== r ? r : e.gpuAcceleration,
            y = jt(t.instance.popper),
            E = Vt(y),
            b = { position: o.position },
            w = (s = t, a = window.devicePixelRatio < 2 || !ue, l = s.offsets, c = l.popper, h = l.reference, u = -1 !== ["left", "right"].indexOf(s.placement), f = -1 !== s.placement.indexOf("-"), d = h.width % 2 == c.width % 2, p = h.width % 2 == 1 && c.width % 2 == 1, m = function (t) { return t }, g = a ? u || f || d ? Math.round : Math.floor : m, _ = a ? Math.round : m, { left: g(p && !f && a ? c.left - 1 : c.left), top: _(c.top), bottom: _(c.bottom), right: g(c.right) }),
            T = "bottom" === n ? "top" : "bottom",
            C = "right" === i ? "left" : "right",
            S = re("transform"),
            D = void 0,
            I = void 0;
          if (I = "bottom" === T ? "HTML" === y.nodeName ? -y.clientHeight + w.bottom : -E.height + w.bottom : w.top, D = "right" === C ? "HTML" === y.nodeName ? -y.clientWidth + w.right : -E.width + w.right : w.left, v && S) b[S] = "translate3d(" + D + "px, " + I + "px, 0)", b[T] = 0, b[C] = 0, b.willChange = "transform";
          else {
            var A = "bottom" === T ? -1 : 1,
              O = "right" === C ? -1 : 1;
            b[T] = I * A, b[C] = D * O, b.willChange = T + ", " + C
          }
          var N = { "x-placement": t.placement };
          return t.attributes = Qt({}, N, t.attributes), t.styles = Qt({}, b, t.styles), t.arrowStyles = Qt({}, t.offsets.arrow, t.arrowStyles), t
        },
        gpuAcceleration: !0,
        x: "bottom",
        y: "right"
      },
      applyStyle: {
        order: 900,
        enabled: !0,
        fn: function (t) { var e, n; return he(t.instance.popper, t.styles), e = t.instance.popper, n = t.attributes, Object.keys(n).forEach(function (t) { !1 !== n[t] ? e.setAttribute(t, n[t]) : e.removeAttribute(t) }), t.arrowElement && Object.keys(t.arrowStyles).length && he(t.arrowElement, t.arrowStyles), t },
        onLoad: function (t, e, n, i, o) {
          var r = Zt(o, e, t, n.positionFixed),
            s = Jt(n.placement, r, e, t, n.modifiers.flip.boundariesElement, n.modifiers.flip.padding);
          return e.setAttribute("x-placement", s), he(e, { position: n.positionFixed ? "fixed" : "absolute" }), n
        },
        gpuAcceleration: void 0
      }
    }
  },
    be = function () {
      function r(t, e) {
        var n = this,
          i = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
        ! function (t, e) { if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function") }(this, r), this.scheduleUpdate = function () { return requestAnimationFrame(n.update) }, this.update = At(this.update.bind(this)), this.options = Qt({}, r.Defaults, i), this.state = { isDestroyed: !1, isCreated: !1, scrollParents: [] }, this.reference = t && t.jquery ? t[0] : t, this.popper = e && e.jquery ? e[0] : e, this.options.modifiers = {}, Object.keys(Qt({}, r.Defaults.modifiers, i.modifiers)).forEach(function (t) { n.options.modifiers[t] = Qt({}, r.Defaults.modifiers[t] || {}, i.modifiers ? i.modifiers[t] : {}) }), this.modifiers = Object.keys(this.options.modifiers).map(function (t) { return Qt({ name: t }, n.options.modifiers[t]) }).sort(function (t, e) { return t.order - e.order }), this.modifiers.forEach(function (t) { t.enabled && Ot(t.onLoad) && t.onLoad(n.reference, n.popper, n.options, t, n.state) }), this.update();
        var o = this.options.eventsEnabled;
        o && this.enableEventListeners(), this.state.eventsEnabled = o
      }
      return qt(r, [{
        key: "update",
        value: function () {
          return function () {
            if (!this.state.isDestroyed) {
              var t = { instance: this, styles: {}, arrowStyles: {}, attributes: {}, flipped: !1, offsets: {} };
              t.offsets.reference = Zt(this.state, this.popper, this.reference, this.options.positionFixed), t.placement = Jt(this.options.placement, t.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), t.originalPlacement = t.placement, t.positionFixed = this.options.positionFixed, t.offsets.popper = ee(this.popper, t.offsets.reference, t.placement), t.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", t = ie(this.modifiers, t), this.state.isCreated ? this.options.onUpdate(t) : (this.state.isCreated = !0, this.options.onCreate(t))
            }
          }.call(this)
        }
      }, { key: "destroy", value: function () { return function () { return this.state.isDestroyed = !0, oe(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[re("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this }.call(this) } }, { key: "enableEventListeners", value: function () { return function () { this.state.eventsEnabled || (this.state = ae(this.reference, this.options, this.state, this.scheduleUpdate)) }.call(this) } }, { key: "disableEventListeners", value: function () { return le.call(this) } }]), r
    }();
  be.Utils = ("undefined" != typeof window ? window : global).PopperUtils, be.placements = de, be.Defaults = Ee;
  var we = "dropdown",
    Te = "bs.dropdown",
    Ce = "." + Te,
    Se = ".data-api",
    De = p.fn[we],
    Ie = new RegExp("38|40|27"),
    Ae = { HIDE: "hide" + Ce, HIDDEN: "hidden" + Ce, SHOW: "show" + Ce, SHOWN: "shown" + Ce, CLICK: "click" + Ce, CLICK_DATA_API: "click" + Ce + Se, KEYDOWN_DATA_API: "keydown" + Ce + Se, KEYUP_DATA_API: "keyup" + Ce + Se },
    Oe = "disabled",
    Ne = "show",
    ke = "dropup",
    Le = "dropright",
    Pe = "dropleft",
    xe = "dropdown-menu-right",
    He = "position-static",
    je = '[data-toggle="dropdown"]',
    Re = ".dropdown form",
    Fe = ".dropdown-menu",
    Me = ".navbar-nav",
    We = ".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",
    Ue = "top-start",
    Be = "top-end",
    qe = "bottom-start",
    Ke = "bottom-end",
    Qe = "right-start",
    Ye = "left-start",
    Ve = { offset: 0, flip: !0, boundary: "scrollParent", reference: "toggle", display: "dynamic" },
    Xe = { offset: "(number|string|function)", flip: "boolean", boundary: "(string|element)", reference: "(string|element)", display: "string" },
    ze = function () {
      function c(t, e) { this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners() }
      var t = c.prototype;
      return t.toggle = function () {
        if (!this._element.disabled && !p(this._element).hasClass(Oe)) {
          var t = c._getParentFromElement(this._element),
            e = p(this._menu).hasClass(Ne);
          if (c._clearMenus(), !e) {
            var n = { relatedTarget: this._element },
              i = p.Event(Ae.SHOW, n);
            if (p(t).trigger(i), !i.isDefaultPrevented()) { if (!this._inNavbar) { if ("undefined" == typeof be) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)"); var o = this._element; "parent" === this._config.reference ? o = t : m.isElement(this._config.reference) && (o = this._config.reference, "undefined" != typeof this._config.reference.jquery && (o = this._config.reference[0])), "scrollParent" !== this._config.boundary && p(t).addClass(He), this._popper = new be(o, this._menu, this._getPopperConfig()) } "ontouchstart" in document.documentElement && 0 === p(t).closest(Me).length && p(document.body).children().on("mouseover", null, p.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), p(this._menu).toggleClass(Ne), p(t).toggleClass(Ne).trigger(p.Event(Ae.SHOWN, n)) }
          }
        }
      }, t.show = function () {
        if (!(this._element.disabled || p(this._element).hasClass(Oe) || p(this._menu).hasClass(Ne))) {
          var t = { relatedTarget: this._element },
            e = p.Event(Ae.SHOW, t),
            n = c._getParentFromElement(this._element);
          p(n).trigger(e), e.isDefaultPrevented() || (p(this._menu).toggleClass(Ne), p(n).toggleClass(Ne).trigger(p.Event(Ae.SHOWN, t)))
        }
      }, t.hide = function () {
        if (!this._element.disabled && !p(this._element).hasClass(Oe) && p(this._menu).hasClass(Ne)) {
          var t = { relatedTarget: this._element },
            e = p.Event(Ae.HIDE, t),
            n = c._getParentFromElement(this._element);
          p(n).trigger(e), e.isDefaultPrevented() || (p(this._menu).toggleClass(Ne), p(n).toggleClass(Ne).trigger(p.Event(Ae.HIDDEN, t)))
        }
      }, t.dispose = function () { p.removeData(this._element, Te), p(this._element).off(Ce), this._element = null, (this._menu = null) !== this._popper && (this._popper.destroy(), this._popper = null) }, t.update = function () { this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate() }, t._addEventListeners = function () {
        var e = this;
        p(this._element).on(Ae.CLICK, function (t) { t.preventDefault(), t.stopPropagation(), e.toggle() })
      }, t._getConfig = function (t) { return t = l({}, this.constructor.Default, p(this._element).data(), t), m.typeCheckConfig(we, t, this.constructor.DefaultType), t }, t._getMenuElement = function () {
        if (!this._menu) {
          var t = c._getParentFromElement(this._element);
          t && (this._menu = t.querySelector(Fe))
        }
        return this._menu
      }, t._getPlacement = function () {
        var t = p(this._element.parentNode),
          e = qe;
        return t.hasClass(ke) ? (e = Ue, p(this._menu).hasClass(xe) && (e = Be)) : t.hasClass(Le) ? e = Qe : t.hasClass(Pe) ? e = Ye : p(this._menu).hasClass(xe) && (e = Ke), e
      }, t._detectNavbar = function () { return 0 < p(this._element).closest(".navbar").length }, t._getPopperConfig = function () {
        var e = this,
          t = {};
        "function" == typeof this._config.offset ? t.fn = function (t) { return t.offsets = l({}, t.offsets, e._config.offset(t.offsets) || {}), t } : t.offset = this._config.offset;
        var n = { placement: this._getPlacement(), modifiers: { offset: t, flip: { enabled: this._config.flip }, preventOverflow: { boundariesElement: this._config.boundary } } };
        return "static" === this._config.display && (n.modifiers.applyStyle = { enabled: !1 }), n
      }, c._jQueryInterface = function (e) {
        return this.each(function () {
          var t = p(this).data(Te);
          if (t || (t = new c(this, "object" == typeof e ? e : null), p(this).data(Te, t)), "string" == typeof e) {
            if ("undefined" == typeof t[e]) throw new TypeError('No method named "' + e + '"');
            t[e]()
          }
        })
      }, c._clearMenus = function (t) {
        if (!t || 3 !== t.which && ("keyup" !== t.type || 9 === t.which))
          for (var e = [].slice.call(document.querySelectorAll(je)), n = 0, i = e.length; n < i; n++) {
            var o = c._getParentFromElement(e[n]),
              r = p(e[n]).data(Te),
              s = { relatedTarget: e[n] };
            if (t && "click" === t.type && (s.clickEvent = t), r) {
              var a = r._menu;
              if (p(o).hasClass(Ne) && !(t && ("click" === t.type && /input|textarea/i.test(t.target.tagName) || "keyup" === t.type && 9 === t.which) && p.contains(o, t.target))) {
                var l = p.Event(Ae.HIDE, s);
                p(o).trigger(l), l.isDefaultPrevented() || ("ontouchstart" in document.documentElement && p(document.body).children().off("mouseover", null, p.noop), e[n].setAttribute("aria-expanded", "false"), p(a).removeClass(Ne), p(o).removeClass(Ne).trigger(p.Event(Ae.HIDDEN, s)))
              }
            }
          }
      }, c._getParentFromElement = function (t) { var e, n = m.getSelectorFromElement(t); return n && (e = document.querySelector(n)), e || t.parentNode }, c._dataApiKeydownHandler = function (t) {
        if ((/input|textarea/i.test(t.target.tagName) ? !(32 === t.which || 27 !== t.which && (40 !== t.which && 38 !== t.which || p(t.target).closest(Fe).length)) : Ie.test(t.which)) && (t.preventDefault(), t.stopPropagation(), !this.disabled && !p(this).hasClass(Oe))) {
          var e = c._getParentFromElement(this),
            n = p(e).hasClass(Ne);
          if (n && (!n || 27 !== t.which && 32 !== t.which)) {
            var i = [].slice.call(e.querySelectorAll(We));
            if (0 !== i.length) {
              var o = i.indexOf(t.target);
              38 === t.which && 0 < o && o--, 40 === t.which && o < i.length - 1 && o++, o < 0 && (o = 0), i[o].focus()
            }
          } else {
            if (27 === t.which) {
              var r = e.querySelector(je);
              p(r).trigger("focus")
            }
            p(this).trigger("click")
          }
        }
      }, s(c, null, [{ key: "VERSION", get: function () { return "4.2.1" } }, { key: "Default", get: function () { return Ve } }, { key: "DefaultType", get: function () { return Xe } }]), c
    }();
  p(document).on(Ae.KEYDOWN_DATA_API, je, ze._dataApiKeydownHandler).on(Ae.KEYDOWN_DATA_API, Fe, ze._dataApiKeydownHandler).on(Ae.CLICK_DATA_API + " " + Ae.KEYUP_DATA_API, ze._clearMenus).on(Ae.CLICK_DATA_API, je, function (t) { t.preventDefault(), t.stopPropagation(), ze._jQueryInterface.call(p(this), "toggle") }).on(Ae.CLICK_DATA_API, Re, function (t) { t.stopPropagation() }), p.fn[we] = ze._jQueryInterface, p.fn[we].Constructor = ze, p.fn[we].noConflict = function () { return p.fn[we] = De, ze._jQueryInterface };
  var Ge = "modal",
    Je = "bs.modal",
    Ze = "." + Je,
    $e = p.fn[Ge],
    tn = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
    en = { backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean" },
    nn = { HIDE: "hide" + Ze, HIDDEN: "hidden" + Ze, SHOW: "show" + Ze, SHOWN: "shown" + Ze, FOCUSIN: "focusin" + Ze, RESIZE: "resize" + Ze, CLICK_DISMISS: "click.dismiss" + Ze, KEYDOWN_DISMISS: "keydown.dismiss" + Ze, MOUSEUP_DISMISS: "mouseup.dismiss" + Ze, MOUSEDOWN_DISMISS: "mousedown.dismiss" + Ze, CLICK_DATA_API: "click" + Ze + ".data-api" },
    on = "modal-scrollbar-measure",
    rn = "modal-backdrop",
    sn = "modal-open",
    an = "fade",
    ln = "show",
    cn = ".modal-dialog",
    hn = '[data-toggle="modal"]',
    un = '[data-dismiss="modal"]',
    fn = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
    dn = ".sticky-top",
    pn = function () {
      function o(t, e) { this._config = this._getConfig(e), this._element = t, this._dialog = t.querySelector(cn), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0 }
      var t = o.prototype;
      return t.toggle = function (t) { return this._isShown ? this.hide() : this.show(t) }, t.show = function (t) {
        var e = this;
        if (!this._isShown && !this._isTransitioning) {
          p(this._element).hasClass(an) && (this._isTransitioning = !0);
          var n = p.Event(nn.SHOW, { relatedTarget: t });
          p(this._element).trigger(n), this._isShown || n.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), p(this._element).on(nn.CLICK_DISMISS, un, function (t) { return e.hide(t) }), p(this._dialog).on(nn.MOUSEDOWN_DISMISS, function () { p(e._element).one(nn.MOUSEUP_DISMISS, function (t) { p(t.target).is(e._element) && (e._ignoreBackdropClick = !0) }) }), this._showBackdrop(function () { return e._showElement(t) }))
        }
      }, t.hide = function (t) {
        var e = this;
        if (t && t.preventDefault(), this._isShown && !this._isTransitioning) {
          var n = p.Event(nn.HIDE);
          if (p(this._element).trigger(n), this._isShown && !n.isDefaultPrevented()) {
            this._isShown = !1;
            var i = p(this._element).hasClass(an);
            if (i && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), p(document).off(nn.FOCUSIN), p(this._element).removeClass(ln), p(this._element).off(nn.CLICK_DISMISS), p(this._dialog).off(nn.MOUSEDOWN_DISMISS), i) {
              var o = m.getTransitionDurationFromElement(this._element);
              p(this._element).one(m.TRANSITION_END, function (t) { return e._hideModal(t) }).emulateTransitionEnd(o)
            } else this._hideModal()
          }
        }
      }, t.dispose = function () {
        [window, this._element, this._dialog].forEach(function (t) { return p(t).off(Ze) }), p(document).off(nn.FOCUSIN), p.removeData(this._element, Je), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
      }, t.handleUpdate = function () { this._adjustDialog() }, t._getConfig = function (t) { return t = l({}, tn, t), m.typeCheckConfig(Ge, t, en), t }, t._showElement = function (t) {
        var e = this,
          n = p(this._element).hasClass(an);
        this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.scrollTop = 0, n && m.reflow(this._element), p(this._element).addClass(ln), this._config.focus && this._enforceFocus();
        var i = p.Event(nn.SHOWN, { relatedTarget: t }),
          o = function () { e._config.focus && e._element.focus(), e._isTransitioning = !1, p(e._element).trigger(i) };
        if (n) {
          var r = m.getTransitionDurationFromElement(this._dialog);
          p(this._dialog).one(m.TRANSITION_END, o).emulateTransitionEnd(r)
        } else o()
      }, t._enforceFocus = function () {
        var e = this;
        p(document).off(nn.FOCUSIN).on(nn.FOCUSIN, function (t) { document !== t.target && e._element !== t.target && 0 === p(e._element).has(t.target).length && e._element.focus() })
      }, t._setEscapeEvent = function () {
        var e = this;
        this._isShown && this._config.keyboard ? p(this._element).on(nn.KEYDOWN_DISMISS, function (t) { 27 === t.which && (t.preventDefault(), e.hide()) }) : this._isShown || p(this._element).off(nn.KEYDOWN_DISMISS)
      }, t._setResizeEvent = function () {
        var e = this;
        this._isShown ? p(window).on(nn.RESIZE, function (t) { return e.handleUpdate(t) }) : p(window).off(nn.RESIZE)
      }, t._hideModal = function () {
        var t = this;
        this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._isTransitioning = !1, this._showBackdrop(function () { p(document.body).removeClass(sn), t._resetAdjustments(), t._resetScrollbar(), p(t._element).trigger(nn.HIDDEN) })
      }, t._removeBackdrop = function () { this._backdrop && (p(this._backdrop).remove(), this._backdrop = null) }, t._showBackdrop = function (t) {
        var e = this,
          n = p(this._element).hasClass(an) ? an : "";
        if (this._isShown && this._config.backdrop) {
          if (this._backdrop = document.createElement("div"), this._backdrop.className = rn, n && this._backdrop.classList.add(n), p(this._backdrop).appendTo(document.body), p(this._element).on(nn.CLICK_DISMISS, function (t) { e._ignoreBackdropClick ? e._ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" === e._config.backdrop ? e._element.focus() : e.hide()) }), n && m.reflow(this._backdrop), p(this._backdrop).addClass(ln), !t) return;
          if (!n) return void t();
          var i = m.getTransitionDurationFromElement(this._backdrop);
          p(this._backdrop).one(m.TRANSITION_END, t).emulateTransitionEnd(i)
        } else if (!this._isShown && this._backdrop) {
          p(this._backdrop).removeClass(ln);
          var o = function () { e._removeBackdrop(), t && t() };
          if (p(this._element).hasClass(an)) {
            var r = m.getTransitionDurationFromElement(this._backdrop);
            p(this._backdrop).one(m.TRANSITION_END, o).emulateTransitionEnd(r)
          } else o()
        } else t && t()
      }, t._adjustDialog = function () { var t = this._element.scrollHeight > document.documentElement.clientHeight; !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px") }, t._resetAdjustments = function () { this._element.style.paddingLeft = "", this._element.style.paddingRight = "" }, t._checkScrollbar = function () {
        var t = document.body.getBoundingClientRect();
        this._isBodyOverflowing = t.left + t.right < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
      }, t._setScrollbar = function () {
        var o = this;
        if (this._isBodyOverflowing) {
          var t = [].slice.call(document.querySelectorAll(fn)),
            e = [].slice.call(document.querySelectorAll(dn));
          p(t).each(function (t, e) {
            var n = e.style.paddingRight,
              i = p(e).css("padding-right");
            p(e).data("padding-right", n).css("padding-right", parseFloat(i) + o._scrollbarWidth + "px")
          }), p(e).each(function (t, e) {
            var n = e.style.marginRight,
              i = p(e).css("margin-right");
            p(e).data("margin-right", n).css("margin-right", parseFloat(i) - o._scrollbarWidth + "px")
          });
          var n = document.body.style.paddingRight,
            i = p(document.body).css("padding-right");
          p(document.body).data("padding-right", n).css("padding-right", parseFloat(i) + this._scrollbarWidth + "px")
        }
        p(document.body).addClass(sn)
      }, t._resetScrollbar = function () {
        var t = [].slice.call(document.querySelectorAll(fn));
        p(t).each(function (t, e) {
          var n = p(e).data("padding-right");
          p(e).removeData("padding-right"), e.style.paddingRight = n || ""
        });
        var e = [].slice.call(document.querySelectorAll("" + dn));
        p(e).each(function (t, e) { var n = p(e).data("margin-right"); "undefined" != typeof n && p(e).css("margin-right", n).removeData("margin-right") });
        var n = p(document.body).data("padding-right");
        p(document.body).removeData("padding-right"), document.body.style.paddingRight = n || ""
      }, t._getScrollbarWidth = function () {
        var t = document.createElement("div");
        t.className = on, document.body.appendChild(t);
        var e = t.getBoundingClientRect().width - t.clientWidth;
        return document.body.removeChild(t), e
      }, o._jQueryInterface = function (n, i) {
        return this.each(function () {
          var t = p(this).data(Je),
            e = l({}, tn, p(this).data(), "object" == typeof n && n ? n : {});
          if (t || (t = new o(this, e), p(this).data(Je, t)), "string" == typeof n) {
            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
            t[n](i)
          } else e.show && t.show(i)
        })
      }, s(o, null, [{ key: "VERSION", get: function () { return "4.2.1" } }, { key: "Default", get: function () { return tn } }]), o
    }();
  p(document).on(nn.CLICK_DATA_API, hn, function (t) {
    var e, n = this,
      i = m.getSelectorFromElement(this);
    i && (e = document.querySelector(i));
    var o = p(e).data(Je) ? "toggle" : l({}, p(e).data(), p(this).data());
    "A" !== this.tagName && "AREA" !== this.tagName || t.preventDefault();
    var r = p(e).one(nn.SHOW, function (t) { t.isDefaultPrevented() || r.one(nn.HIDDEN, function () { p(n).is(":visible") && n.focus() }) });
    pn._jQueryInterface.call(p(e), o, this)
  }), p.fn[Ge] = pn._jQueryInterface, p.fn[Ge].Constructor = pn, p.fn[Ge].noConflict = function () { return p.fn[Ge] = $e, pn._jQueryInterface };
  var mn = "tooltip",
    gn = "bs.tooltip",
    _n = "." + gn,
    vn = p.fn[mn],
    yn = "bs-tooltip",
    En = new RegExp("(^|\\s)" + yn + "\\S+", "g"),
    bn = { animation: "boolean", template: "string", title: "(string|element|function)", trigger: "string", delay: "(number|object)", html: "boolean", selector: "(string|boolean)", placement: "(string|function)", offset: "(number|string)", container: "(string|element|boolean)", fallbackPlacement: "(string|array)", boundary: "(string|element)" },
    wn = { AUTO: "auto", TOP: "top", RIGHT: "right", BOTTOM: "bottom", LEFT: "left" },
    Tn = { animation: !0, template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, selector: !1, placement: "top", offset: 0, container: !1, fallbackPlacement: "flip", boundary: "scrollParent" },
    Cn = "show",
    Sn = "out",
    Dn = { HIDE: "hide" + _n, HIDDEN: "hidden" + _n, SHOW: "show" + _n, SHOWN: "shown" + _n, INSERTED: "inserted" + _n, CLICK: "click" + _n, FOCUSIN: "focusin" + _n, FOCUSOUT: "focusout" + _n, MOUSEENTER: "mouseenter" + _n, MOUSELEAVE: "mouseleave" + _n },
    In = "fade",
    An = "show",
    On = ".tooltip-inner",
    Nn = ".arrow",
    kn = "hover",
    Ln = "focus",
    Pn = "click",
    xn = "manual",
    Hn = function () {
      function i(t, e) {
        if ("undefined" == typeof be) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");
        this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
      }
      var t = i.prototype;
      return t.enable = function () { this._isEnabled = !0 }, t.disable = function () { this._isEnabled = !1 }, t.toggleEnabled = function () { this._isEnabled = !this._isEnabled }, t.toggle = function (t) {
        if (this._isEnabled)
          if (t) {
            var e = this.constructor.DATA_KEY,
              n = p(t.currentTarget).data(e);
            n || (n = new this.constructor(t.currentTarget, this._getDelegateConfig()), p(t.currentTarget).data(e, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n)
          } else {
            if (p(this.getTipElement()).hasClass(An)) return void this._leave(null, this);
            this._enter(null, this)
          }
      }, t.dispose = function () { clearTimeout(this._timeout), p.removeData(this.element, this.constructor.DATA_KEY), p(this.element).off(this.constructor.EVENT_KEY), p(this.element).closest(".modal").off("hide.bs.modal"), this.tip && p(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, (this._activeTrigger = null) !== this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null }, t.show = function () {
        var e = this;
        if ("none" === p(this.element).css("display")) throw new Error("Please use show on visible elements");
        var t = p.Event(this.constructor.Event.SHOW);
        if (this.isWithContent() && this._isEnabled) {
          p(this.element).trigger(t);
          var n = m.findShadowRoot(this.element),
            i = p.contains(null !== n ? n : this.element.ownerDocument.documentElement, this.element);
          if (t.isDefaultPrevented() || !i) return;
          var o = this.getTipElement(),
            r = m.getUID(this.constructor.NAME);
          o.setAttribute("id", r), this.element.setAttribute("aria-describedby", r), this.setContent(), this.config.animation && p(o).addClass(In);
          var s = "function" == typeof this.config.placement ? this.config.placement.call(this, o, this.element) : this.config.placement,
            a = this._getAttachment(s);
          this.addAttachmentClass(a);
          var l = this._getContainer();
          p(o).data(this.constructor.DATA_KEY, this), p.contains(this.element.ownerDocument.documentElement, this.tip) || p(o).appendTo(l), p(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new be(this.element, o, { placement: a, modifiers: { offset: { offset: this.config.offset }, flip: { behavior: this.config.fallbackPlacement }, arrow: { element: Nn }, preventOverflow: { boundariesElement: this.config.boundary } }, onCreate: function (t) { t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t) }, onUpdate: function (t) { return e._handlePopperPlacementChange(t) } }), p(o).addClass(An), "ontouchstart" in document.documentElement && p(document.body).children().on("mouseover", null, p.noop);
          var c = function () {
            e.config.animation && e._fixTransition();
            var t = e._hoverState;
            e._hoverState = null, p(e.element).trigger(e.constructor.Event.SHOWN), t === Sn && e._leave(null, e)
          };
          if (p(this.tip).hasClass(In)) {
            var h = m.getTransitionDurationFromElement(this.tip);
            p(this.tip).one(m.TRANSITION_END, c).emulateTransitionEnd(h)
          } else c()
        }
      }, t.hide = function (t) {
        var e = this,
          n = this.getTipElement(),
          i = p.Event(this.constructor.Event.HIDE),
          o = function () { e._hoverState !== Cn && n.parentNode && n.parentNode.removeChild(n), e._cleanTipClass(), e.element.removeAttribute("aria-describedby"), p(e.element).trigger(e.constructor.Event.HIDDEN), null !== e._popper && e._popper.destroy(), t && t() };
        if (p(this.element).trigger(i), !i.isDefaultPrevented()) {
          if (p(n).removeClass(An), "ontouchstart" in document.documentElement && p(document.body).children().off("mouseover", null, p.noop), this._activeTrigger[Pn] = !1, this._activeTrigger[Ln] = !1, this._activeTrigger[kn] = !1, p(this.tip).hasClass(In)) {
            var r = m.getTransitionDurationFromElement(n);
            p(n).one(m.TRANSITION_END, o).emulateTransitionEnd(r)
          } else o();
          this._hoverState = ""
        }
      }, t.update = function () { null !== this._popper && this._popper.scheduleUpdate() }, t.isWithContent = function () { return Boolean(this.getTitle()) }, t.addAttachmentClass = function (t) { p(this.getTipElement()).addClass(yn + "-" + t) }, t.getTipElement = function () { return this.tip = this.tip || p(this.config.template)[0], this.tip }, t.setContent = function () {
        var t = this.getTipElement();
        this.setElementContent(p(t.querySelectorAll(On)), this.getTitle()), p(t).removeClass(In + " " + An)
      }, t.setElementContent = function (t, e) { var n = this.config.html; "object" == typeof e && (e.nodeType || e.jquery) ? n ? p(e).parent().is(t) || t.empty().append(e) : t.text(p(e).text()) : t[n ? "html" : "text"](e) }, t.getTitle = function () { var t = this.element.getAttribute("data-original-title"); return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t }, t._getContainer = function () { return !1 === this.config.container ? document.body : m.isElement(this.config.container) ? p(this.config.container) : p(document).find(this.config.container) }, t._getAttachment = function (t) { return wn[t.toUpperCase()] }, t._setListeners = function () {
        var i = this;
        this.config.trigger.split(" ").forEach(function (t) {
          if ("click" === t) p(i.element).on(i.constructor.Event.CLICK, i.config.selector, function (t) { return i.toggle(t) });
          else if (t !== xn) {
            var e = t === kn ? i.constructor.Event.MOUSEENTER : i.constructor.Event.FOCUSIN,
              n = t === kn ? i.constructor.Event.MOUSELEAVE : i.constructor.Event.FOCUSOUT;
            p(i.element).on(e, i.config.selector, function (t) { return i._enter(t) }).on(n, i.config.selector, function (t) { return i._leave(t) })
          }
        }), p(this.element).closest(".modal").on("hide.bs.modal", function () { i.element && i.hide() }), this.config.selector ? this.config = l({}, this.config, { trigger: "manual", selector: "" }) : this._fixTitle()
      }, t._fixTitle = function () {
        var t = typeof this.element.getAttribute("data-original-title");
        (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
      }, t._enter = function (t, e) {
        var n = this.constructor.DATA_KEY;
        (e = e || p(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), p(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusin" === t.type ? Ln : kn] = !0), p(e.getTipElement()).hasClass(An) || e._hoverState === Cn ? e._hoverState = Cn : (clearTimeout(e._timeout), e._hoverState = Cn, e.config.delay && e.config.delay.show ? e._timeout = setTimeout(function () { e._hoverState === Cn && e.show() }, e.config.delay.show) : e.show())
      }, t._leave = function (t, e) {
        var n = this.constructor.DATA_KEY;
        (e = e || p(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), p(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusout" === t.type ? Ln : kn] = !1), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = Sn, e.config.delay && e.config.delay.hide ? e._timeout = setTimeout(function () { e._hoverState === Sn && e.hide() }, e.config.delay.hide) : e.hide())
      }, t._isWithActiveTrigger = function () {
        for (var t in this._activeTrigger)
          if (this._activeTrigger[t]) return !0;
        return !1
      }, t._getConfig = function (t) { return "number" == typeof (t = l({}, this.constructor.Default, p(this.element).data(), "object" == typeof t && t ? t : {})).delay && (t.delay = { show: t.delay, hide: t.delay }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), m.typeCheckConfig(mn, t, this.constructor.DefaultType), t }, t._getDelegateConfig = function () {
        var t = {};
        if (this.config)
          for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
        return t
      }, t._cleanTipClass = function () {
        var t = p(this.getTipElement()),
          e = t.attr("class").match(En);
        null !== e && e.length && t.removeClass(e.join(""))
      }, t._handlePopperPlacementChange = function (t) {
        var e = t.instance;
        this.tip = e.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement))
      }, t._fixTransition = function () {
        var t = this.getTipElement(),
          e = this.config.animation;
        null === t.getAttribute("x-placement") && (p(t).removeClass(In), this.config.animation = !1, this.hide(), this.show(), this.config.animation = e)
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this).data(gn),
            e = "object" == typeof n && n;
          if ((t || !/dispose|hide/.test(n)) && (t || (t = new i(this, e), p(this).data(gn, t)), "string" == typeof n)) {
            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
            t[n]()
          }
        })
      }, s(i, null, [{ key: "VERSION", get: function () { return "4.2.1" } }, { key: "Default", get: function () { return Tn } }, { key: "NAME", get: function () { return mn } }, { key: "DATA_KEY", get: function () { return gn } }, { key: "Event", get: function () { return Dn } }, { key: "EVENT_KEY", get: function () { return _n } }, { key: "DefaultType", get: function () { return bn } }]), i
    }();
  p.fn[mn] = Hn._jQueryInterface, p.fn[mn].Constructor = Hn, p.fn[mn].noConflict = function () { return p.fn[mn] = vn, Hn._jQueryInterface };
  var jn = "popover",
    Rn = "bs.popover",
    Fn = "." + Rn,
    Mn = p.fn[jn],
    Wn = "bs-popover",
    Un = new RegExp("(^|\\s)" + Wn + "\\S+", "g"),
    Bn = l({}, Hn.Default, { placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' }),
    qn = l({}, Hn.DefaultType, { content: "(string|element|function)" }),
    Kn = "fade",
    Qn = "show",
    Yn = ".popover-header",
    Vn = ".popover-body",
    Xn = { HIDE: "hide" + Fn, HIDDEN: "hidden" + Fn, SHOW: "show" + Fn, SHOWN: "shown" + Fn, INSERTED: "inserted" + Fn, CLICK: "click" + Fn, FOCUSIN: "focusin" + Fn, FOCUSOUT: "focusout" + Fn, MOUSEENTER: "mouseenter" + Fn, MOUSELEAVE: "mouseleave" + Fn },
    zn = function (t) {
      var e, n;

      function i() { return t.apply(this, arguments) || this }
      n = t, (e = i).prototype = Object.create(n.prototype), (e.prototype.constructor = e).__proto__ = n;
      var o = i.prototype;
      return o.isWithContent = function () { return this.getTitle() || this._getContent() }, o.addAttachmentClass = function (t) { p(this.getTipElement()).addClass(Wn + "-" + t) }, o.getTipElement = function () { return this.tip = this.tip || p(this.config.template)[0], this.tip }, o.setContent = function () {
        var t = p(this.getTipElement());
        this.setElementContent(t.find(Yn), this.getTitle());
        var e = this._getContent();
        "function" == typeof e && (e = e.call(this.element)), this.setElementContent(t.find(Vn), e), t.removeClass(Kn + " " + Qn)
      }, o._getContent = function () { return this.element.getAttribute("data-content") || this.config.content }, o._cleanTipClass = function () {
        var t = p(this.getTipElement()),
          e = t.attr("class").match(Un);
        null !== e && 0 < e.length && t.removeClass(e.join(""))
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this).data(Rn),
            e = "object" == typeof n ? n : null;
          if ((t || !/dispose|hide/.test(n)) && (t || (t = new i(this, e), p(this).data(Rn, t)), "string" == typeof n)) {
            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
            t[n]()
          }
        })
      }, s(i, null, [{ key: "VERSION", get: function () { return "4.2.1" } }, { key: "Default", get: function () { return Bn } }, { key: "NAME", get: function () { return jn } }, { key: "DATA_KEY", get: function () { return Rn } }, { key: "Event", get: function () { return Xn } }, { key: "EVENT_KEY", get: function () { return Fn } }, { key: "DefaultType", get: function () { return qn } }]), i
    }(Hn);
  p.fn[jn] = zn._jQueryInterface, p.fn[jn].Constructor = zn, p.fn[jn].noConflict = function () { return p.fn[jn] = Mn, zn._jQueryInterface };
  var Gn = "scrollspy",
    Jn = "bs.scrollspy",
    Zn = "." + Jn,
    $n = p.fn[Gn],
    ti = { offset: 10, method: "auto", target: "" },
    ei = { offset: "number", method: "string", target: "(string|element)" },
    ni = { ACTIVATE: "activate" + Zn, SCROLL: "scroll" + Zn, LOAD_DATA_API: "load" + Zn + ".data-api" },
    ii = "dropdown-item",
    oi = "active",
    ri = '[data-spy="scroll"]',
    si = ".nav, .list-group",
    ai = ".nav-link",
    li = ".nav-item",
    ci = ".list-group-item",
    hi = ".dropdown",
    ui = ".dropdown-item",
    fi = ".dropdown-toggle",
    di = "offset",
    pi = "position",
    mi = function () {
      function n(t, e) {
        var n = this;
        this._element = t, this._scrollElement = "BODY" === t.tagName ? window : t, this._config = this._getConfig(e), this._selector = this._config.target + " " + ai + "," + this._config.target + " " + ci + "," + this._config.target + " " + ui, this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, p(this._scrollElement).on(ni.SCROLL, function (t) { return n._process(t) }), this.refresh(), this._process()
      }
      var t = n.prototype;
      return t.refresh = function () {
        var e = this,
          t = this._scrollElement === this._scrollElement.window ? di : pi,
          o = "auto" === this._config.method ? t : this._config.method,
          r = o === pi ? this._getScrollTop() : 0;
        this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), [].slice.call(document.querySelectorAll(this._selector)).map(function (t) { var e, n = m.getSelectorFromElement(t); if (n && (e = document.querySelector(n)), e) { var i = e.getBoundingClientRect(); if (i.width || i.height) return [p(e)[o]().top + r, n] } return null }).filter(function (t) { return t }).sort(function (t, e) { return t[0] - e[0] }).forEach(function (t) { e._offsets.push(t[0]), e._targets.push(t[1]) })
      }, t.dispose = function () { p.removeData(this._element, Jn), p(this._scrollElement).off(Zn), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null }, t._getConfig = function (t) {
        if ("string" != typeof (t = l({}, ti, "object" == typeof t && t ? t : {})).target) {
          var e = p(t.target).attr("id");
          e || (e = m.getUID(Gn), p(t.target).attr("id", e)), t.target = "#" + e
        }
        return m.typeCheckConfig(Gn, t, ei), t
      }, t._getScrollTop = function () { return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop }, t._getScrollHeight = function () { return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight) }, t._getOffsetHeight = function () { return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height }, t._process = function () {
        var t = this._getScrollTop() + this._config.offset,
          e = this._getScrollHeight(),
          n = this._config.offset + e - this._getOffsetHeight();
        if (this._scrollHeight !== e && this.refresh(), n <= t) {
          var i = this._targets[this._targets.length - 1];
          this._activeTarget !== i && this._activate(i)
        } else { if (this._activeTarget && t < this._offsets[0] && 0 < this._offsets[0]) return this._activeTarget = null, void this._clear(); for (var o = this._offsets.length; o--;) { this._activeTarget !== this._targets[o] && t >= this._offsets[o] && ("undefined" == typeof this._offsets[o + 1] || t < this._offsets[o + 1]) && this._activate(this._targets[o]) } }
      }, t._activate = function (e) {
        this._activeTarget = e, this._clear();
        var t = this._selector.split(",").map(function (t) { return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]' }),
          n = p([].slice.call(document.querySelectorAll(t.join(","))));
        n.hasClass(ii) ? (n.closest(hi).find(fi).addClass(oi), n.addClass(oi)) : (n.addClass(oi), n.parents(si).prev(ai + ", " + ci).addClass(oi), n.parents(si).prev(li).children(ai).addClass(oi)), p(this._scrollElement).trigger(ni.ACTIVATE, { relatedTarget: e })
      }, t._clear = function () {
        [].slice.call(document.querySelectorAll(this._selector)).filter(function (t) { return t.classList.contains(oi) }).forEach(function (t) { return t.classList.remove(oi) })
      }, n._jQueryInterface = function (e) {
        return this.each(function () {
          var t = p(this).data(Jn);
          if (t || (t = new n(this, "object" == typeof e && e), p(this).data(Jn, t)), "string" == typeof e) {
            if ("undefined" == typeof t[e]) throw new TypeError('No method named "' + e + '"');
            t[e]()
          }
        })
      }, s(n, null, [{ key: "VERSION", get: function () { return "4.2.1" } }, { key: "Default", get: function () { return ti } }]), n
    }();
  p(window).on(ni.LOAD_DATA_API, function () {
    for (var t = [].slice.call(document.querySelectorAll(ri)), e = t.length; e--;) {
      var n = p(t[e]);
      mi._jQueryInterface.call(n, n.data())
    }
  }), p.fn[Gn] = mi._jQueryInterface, p.fn[Gn].Constructor = mi, p.fn[Gn].noConflict = function () { return p.fn[Gn] = $n, mi._jQueryInterface };
  var gi = "bs.tab",
    _i = "." + gi,
    vi = p.fn.tab,
    yi = { HIDE: "hide" + _i, HIDDEN: "hidden" + _i, SHOW: "show" + _i, SHOWN: "shown" + _i, CLICK_DATA_API: "click" + _i + ".data-api" },
    Ei = "dropdown-menu",
    bi = "active",
    wi = "disabled",
    Ti = "fade",
    Ci = "show",
    Si = ".dropdown",
    Di = ".nav, .list-group",
    Ii = ".active",
    Ai = "> li > .active",
    Oi = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',
    Ni = ".dropdown-toggle",
    ki = "> .dropdown-menu .active",
    Li = function () {
      function i(t) { this._element = t }
      var t = i.prototype;
      return t.show = function () {
        var n = this;
        if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && p(this._element).hasClass(bi) || p(this._element).hasClass(wi))) {
          var t, i, e = p(this._element).closest(Di)[0],
            o = m.getSelectorFromElement(this._element);
          if (e) {
            var r = "UL" === e.nodeName || "OL" === e.nodeName ? Ai : Ii;
            i = (i = p.makeArray(p(e).find(r)))[i.length - 1]
          }
          var s = p.Event(yi.HIDE, { relatedTarget: this._element }),
            a = p.Event(yi.SHOW, { relatedTarget: i });
          if (i && p(i).trigger(s), p(this._element).trigger(a), !a.isDefaultPrevented() && !s.isDefaultPrevented()) {
            o && (t = document.querySelector(o)), this._activate(this._element, e);
            var l = function () {
              var t = p.Event(yi.HIDDEN, { relatedTarget: n._element }),
                e = p.Event(yi.SHOWN, { relatedTarget: i });
              p(i).trigger(t), p(n._element).trigger(e)
            };
            t ? this._activate(t, t.parentNode, l) : l()
          }
        }
      }, t.dispose = function () { p.removeData(this._element, gi), this._element = null }, t._activate = function (t, e, n) {
        var i = this,
          o = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? p(e).children(Ii) : p(e).find(Ai))[0],
          r = n && o && p(o).hasClass(Ti),
          s = function () { return i._transitionComplete(t, o, n) };
        if (o && r) {
          var a = m.getTransitionDurationFromElement(o);
          p(o).removeClass(Ci).one(m.TRANSITION_END, s).emulateTransitionEnd(a)
        } else s()
      }, t._transitionComplete = function (t, e, n) {
        if (e) {
          p(e).removeClass(bi);
          var i = p(e.parentNode).find(ki)[0];
          i && p(i).removeClass(bi), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !1)
        }
        if (p(t).addClass(bi), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !0), m.reflow(t), p(t).addClass(Ci), t.parentNode && p(t.parentNode).hasClass(Ei)) {
          var o = p(t).closest(Si)[0];
          if (o) {
            var r = [].slice.call(o.querySelectorAll(Ni));
            p(r).addClass(bi)
          }
          t.setAttribute("aria-expanded", !0)
        }
        n && n()
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this),
            e = t.data(gi);
          if (e || (e = new i(this), t.data(gi, e)), "string" == typeof n) {
            if ("undefined" == typeof e[n]) throw new TypeError('No method named "' + n + '"');
            e[n]()
          }
        })
      }, s(i, null, [{ key: "VERSION", get: function () { return "4.2.1" } }]), i
    }();
  p(document).on(yi.CLICK_DATA_API, Oi, function (t) { t.preventDefault(), Li._jQueryInterface.call(p(this), "show") }), p.fn.tab = Li._jQueryInterface, p.fn.tab.Constructor = Li, p.fn.tab.noConflict = function () { return p.fn.tab = vi, Li._jQueryInterface };
  var Pi = "toast",
    xi = "bs.toast",
    Hi = "." + xi,
    ji = p.fn[Pi],
    Ri = { CLICK_DISMISS: "click.dismiss" + Hi, HIDE: "hide" + Hi, HIDDEN: "hidden" + Hi, SHOW: "show" + Hi, SHOWN: "shown" + Hi },
    Fi = "fade",
    Mi = "hide",
    Wi = "show",
    Ui = "showing",
    Bi = { animation: "boolean", autohide: "boolean", delay: "number" },
    qi = { animation: !0, autohide: !0, delay: 500 },
    Ki = '[data-dismiss="toast"]',
    Qi = function () {
      function i(t, e) { this._element = t, this._config = this._getConfig(e), this._timeout = null, this._setListeners() }
      var t = i.prototype;
      return t.show = function () {
        var t = this;
        p(this._element).trigger(Ri.SHOW), this._config.animation && this._element.classList.add(Fi);
        var e = function () { t._element.classList.remove(Ui), t._element.classList.add(Wi), p(t._element).trigger(Ri.SHOWN), t._config.autohide && t.hide() };
        if (this._element.classList.remove(Mi), this._element.classList.add(Ui), this._config.animation) {
          var n = m.getTransitionDurationFromElement(this._element);
          p(this._element).one(m.TRANSITION_END, e).emulateTransitionEnd(n)
        } else e()
      }, t.hide = function (t) {
        var e = this;
        this._element.classList.contains(Wi) && (p(this._element).trigger(Ri.HIDE), t ? this._close() : this._timeout = setTimeout(function () { e._close() }, this._config.delay))
      }, t.dispose = function () { clearTimeout(this._timeout), this._timeout = null, this._element.classList.contains(Wi) && this._element.classList.remove(Wi), p(this._element).off(Ri.CLICK_DISMISS), p.removeData(this._element, xi), this._element = null, this._config = null }, t._getConfig = function (t) { return t = l({}, qi, p(this._element).data(), "object" == typeof t && t ? t : {}), m.typeCheckConfig(Pi, t, this.constructor.DefaultType), t }, t._setListeners = function () {
        var t = this;
        p(this._element).on(Ri.CLICK_DISMISS, Ki, function () { return t.hide(!0) })
      }, t._close = function () {
        var t = this,
          e = function () { t._element.classList.add(Mi), p(t._element).trigger(Ri.HIDDEN) };
        if (this._element.classList.remove(Wi), this._config.animation) {
          var n = m.getTransitionDurationFromElement(this._element);
          p(this._element).one(m.TRANSITION_END, e).emulateTransitionEnd(n)
        } else e()
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this),
            e = t.data(xi);
          if (e || (e = new i(this, "object" == typeof n && n), t.data(xi, e)), "string" == typeof n) {
            if ("undefined" == typeof e[n]) throw new TypeError('No method named "' + n + '"');
            e[n](this)
          }
        })
      }, s(i, null, [{ key: "VERSION", get: function () { return "4.2.1" } }, { key: "DefaultType", get: function () { return Bi } }]), i
    }();
  p.fn[Pi] = Qi._jQueryInterface, p.fn[Pi].Constructor = Qi, p.fn[Pi].noConflict = function () { return p.fn[Pi] = ji, Qi._jQueryInterface },
    function () { if ("undefined" == typeof p) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript."); var t = p.fn.jquery.split(" ")[0].split("."); if (t[0] < 2 && t[1] < 9 || 1 === t[0] && 9 === t[1] && t[2] < 1 || 4 <= t[0]) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0") }(), t.Util = m, t.Alert = g, t.Button = k, t.Carousel = at, t.Collapse = Tt, t.Dropdown = ze, t.Modal = pn, t.Popover = zn, t.Scrollspy = mi, t.Tab = Li, t.Toast = Qi, t.Tooltip = Hn, Object.defineProperty(t, "__esModule", { value: !0 })
});
//# sourceMappingURL=bootstrap.bundle.min.js.map









(function ($) {
  'use strict';
  var DISALLOWED_ATTRIBUTES = ['sanitize', 'whiteList', 'sanitizeFn'];
  var uriAttrs = ['background', 'cite', 'href', 'itemtype', 'longdesc', 'poster', 'src', 'xlink:href'];
  var ARIA_ATTRIBUTE_PATTERN = /^aria-[\w-]*$/i;
  var DefaultWhitelist = { '*': ['class', 'dir', 'id', 'lang', 'role', 'tabindex', 'style', ARIA_ATTRIBUTE_PATTERN], a: ['target', 'href', 'title', 'rel'], area: [], b: [], br: [], col: [], code: [], div: [], em: [], hr: [], h1: [], h2: [], h3: [], h4: [], h5: [], h6: [], i: [], img: ['src', 'alt', 'title', 'width', 'height'], li: [], ol: [], p: [], pre: [], s: [], small: [], span: [], sub: [], sup: [], strong: [], u: [], ul: [] }
  var SAFE_URL_PATTERN = /^(?:(?:https?|mailto|ftp|tel|file):|[^&:/?#]*(?:[/?#]|$))/gi;
  var DATA_URL_PATTERN = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[a-z0-9+/]+=*$/i;

  function allowedAttribute(attr, allowedAttributeList) {
    var attrName = attr.nodeName.toLowerCase()
    if ($.inArray(attrName, allowedAttributeList) !== -1) {
      if ($.inArray(attrName, uriAttrs) !== -1) { return Boolean(attr.nodeValue.match(SAFE_URL_PATTERN) || attr.nodeValue.match(DATA_URL_PATTERN)) }
      return true
    }
    var regExp = $(allowedAttributeList).filter(function (index, value) { return value instanceof RegExp })
    for (var i = 0, l = regExp.length; i < l; i++) { if (attrName.match(regExp[i])) { return true } }
    return false
  }

  function sanitizeHtml(unsafeElements, whiteList, sanitizeFn) {
    if (sanitizeFn && typeof sanitizeFn === 'function') { return sanitizeFn(unsafeElements); }
    var whitelistKeys = Object.keys(whiteList);
    for (var i = 0, len = unsafeElements.length; i < len; i++) {
      var elements = unsafeElements[i].querySelectorAll('*');
      for (var j = 0, len2 = elements.length; j < len2; j++) {
        var el = elements[j];
        var elName = el.nodeName.toLowerCase();
        if (whitelistKeys.indexOf(elName) === -1) { el.parentNode.removeChild(el); continue; }
        var attributeList = [].slice.call(el.attributes);
        var whitelistedAttributes = [].concat(whiteList['*'] || [], whiteList[elName] || []);
        for (var k = 0, len3 = attributeList.length; k < len3; k++) { var attr = attributeList[k]; if (!allowedAttribute(attr, whitelistedAttributes)) { el.removeAttribute(attr.nodeName); } }
      }
    }
  }
  if (!('classList' in document.createElement('_'))) {
    (function (view) {
      if (!('Element' in view)) return;
      var classListProp = 'classList',
        protoProp = 'prototype',
        elemCtrProto = view.Element[protoProp],
        objCtr = Object,
        classListGetter = function () { var $elem = $(this); return { add: function (classes) { classes = Array.prototype.slice.call(arguments).join(' '); return $elem.addClass(classes); }, remove: function (classes) { classes = Array.prototype.slice.call(arguments).join(' '); return $elem.removeClass(classes); }, toggle: function (classes, force) { return $elem.toggleClass(classes, force); }, contains: function (classes) { return $elem.hasClass(classes); } } };
      if (objCtr.defineProperty) {
        var classListPropDesc = { get: classListGetter, enumerable: true, configurable: true };
        try { objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc); } catch (ex) {
          if (ex.number === undefined || ex.number === -0x7FF5EC54) {
            classListPropDesc.enumerable = false;
            objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
          }
        }
      } else if (objCtr[protoProp].__defineGetter__) { elemCtrProto.__defineGetter__(classListProp, classListGetter); }
    }(window));
  }
  var testElement = document.createElement('_');
  testElement.classList.add('c1', 'c2');
  if (!testElement.classList.contains('c2')) {
    var _add = DOMTokenList.prototype.add,
      _remove = DOMTokenList.prototype.remove;
    DOMTokenList.prototype.add = function () { Array.prototype.forEach.call(arguments, _add.bind(this)); }
    DOMTokenList.prototype.remove = function () { Array.prototype.forEach.call(arguments, _remove.bind(this)); }
  }
  testElement.classList.toggle('c3', false);
  if (testElement.classList.contains('c3')) {
    var _toggle = DOMTokenList.prototype.toggle;
    DOMTokenList.prototype.toggle = function (token, force) { if (1 in arguments && !this.contains(token) === !force) { return force; } else { return _toggle.call(this, token); } };
  }
  testElement = null;

  function isEqual(array1, array2) { return array1.length === array2.length && array1.every(function (element, index) { return element === array2[index]; }); };
  if (!String.prototype.startsWith) {
    (function () {
      'use strict';
      var defineProperty = (function () {
        try { var object = {}; var $defineProperty = Object.defineProperty; var result = $defineProperty(object, object, object) && $defineProperty; } catch (error) { }
        return result;
      }());
      var toString = {}.toString;
      var startsWith = function (search) {
        if (this == null) { throw new TypeError(); }
        var string = String(this);
        if (search && toString.call(search) == '[object RegExp]') { throw new TypeError(); }
        var stringLength = string.length;
        var searchString = String(search);
        var searchLength = searchString.length;
        var position = arguments.length > 1 ? arguments[1] : undefined;
        var pos = position ? Number(position) : 0;
        if (pos != pos) { pos = 0; }
        var start = Math.min(Math.max(pos, 0), stringLength);
        if (searchLength + start > stringLength) { return false; }
        var index = -1;
        while (++index < searchLength) { if (string.charCodeAt(start + index) != searchString.charCodeAt(index)) { return false; } }
        return true;
      };
      if (defineProperty) { defineProperty(String.prototype, 'startsWith', { 'value': startsWith, 'configurable': true, 'writable': true }); } else { String.prototype.startsWith = startsWith; }
    }());
  }
  if (!Object.keys) {
    Object.keys = function (o, k, r) {
      r = [];
      for (k in o) { r.hasOwnProperty.call(o, k) && r.push(k); }
      return r;
    };
  }
  if (HTMLSelectElement && !HTMLSelectElement.prototype.hasOwnProperty('selectedOptions')) { Object.defineProperty(HTMLSelectElement.prototype, 'selectedOptions', { get: function () { return this.querySelectorAll(':checked'); } }); }

  function getSelectValues(select) {
    var result = [];
    var options = select.selectedOptions;
    var opt;
    if (select.multiple) {
      for (var i = 0, len = options.length; i < len; i++) {
        opt = options[i];
        result.push(opt.value || opt.text);
      }
    } else { result = select.value; }
    return result;
  }
  var valHooks = { useDefault: false, _set: $.valHooks.select.set };
  $.valHooks.select.set = function (elem, value) { if (value && !valHooks.useDefault) $(elem).data('selected', true); return valHooks._set.apply(this, arguments); };
  var changedArguments = null;
  var EventIsSupported = (function () { try { new Event('change'); return true; } catch (e) { return false; } })();
  $.fn.triggerNative = function (eventName) {
    var el = this[0],
      event;
    if (el.dispatchEvent) {
      if (EventIsSupported) { event = new Event(eventName, { bubbles: true }); } else {
        event = document.createEvent('Event');
        event.initEvent(eventName, true, false);
      }
      el.dispatchEvent(event);
    } else if (el.fireEvent) {
      event = document.createEventObject();
      event.eventType = eventName;
      el.fireEvent('on' + eventName, event);
    } else { this.trigger(eventName); }
  };

  function stringSearch(li, searchString, method, normalize) {
    var stringTypes = ['display', 'subtext', 'tokens'],
      searchSuccess = false;
    for (var i = 0; i < stringTypes.length; i++) {
      var stringType = stringTypes[i],
        string = li[stringType];
      if (string) {
        string = string.toString();
        if (stringType === 'display') { string = string.replace(/<[^>]+>/g, ''); }
        if (normalize) string = normalizeToBase(string);
        string = string.toUpperCase();
        if (method === 'contains') { searchSuccess = string.indexOf(searchString) >= 0; } else { searchSuccess = string.startsWith(searchString); }
        if (searchSuccess) break;
      }
    }
    return searchSuccess;
  }

  function toInteger(value) { return parseInt(value, 10) || 0; }
  var deburredLetters = { '\xc0': 'A', '\xc1': 'A', '\xc2': 'A', '\xc3': 'A', '\xc4': 'A', '\xc5': 'A', '\xe0': 'a', '\xe1': 'a', '\xe2': 'a', '\xe3': 'a', '\xe4': 'a', '\xe5': 'a', '\xc7': 'C', '\xe7': 'c', '\xd0': 'D', '\xf0': 'd', '\xc8': 'E', '\xc9': 'E', '\xca': 'E', '\xcb': 'E', '\xe8': 'e', '\xe9': 'e', '\xea': 'e', '\xeb': 'e', '\xcc': 'I', '\xcd': 'I', '\xce': 'I', '\xcf': 'I', '\xec': 'i', '\xed': 'i', '\xee': 'i', '\xef': 'i', '\xd1': 'N', '\xf1': 'n', '\xd2': 'O', '\xd3': 'O', '\xd4': 'O', '\xd5': 'O', '\xd6': 'O', '\xd8': 'O', '\xf2': 'o', '\xf3': 'o', '\xf4': 'o', '\xf5': 'o', '\xf6': 'o', '\xf8': 'o', '\xd9': 'U', '\xda': 'U', '\xdb': 'U', '\xdc': 'U', '\xf9': 'u', '\xfa': 'u', '\xfb': 'u', '\xfc': 'u', '\xdd': 'Y', '\xfd': 'y', '\xff': 'y', '\xc6': 'Ae', '\xe6': 'ae', '\xde': 'Th', '\xfe': 'th', '\xdf': 'ss', '\u0100': 'A', '\u0102': 'A', '\u0104': 'A', '\u0101': 'a', '\u0103': 'a', '\u0105': 'a', '\u0106': 'C', '\u0108': 'C', '\u010a': 'C', '\u010c': 'C', '\u0107': 'c', '\u0109': 'c', '\u010b': 'c', '\u010d': 'c', '\u010e': 'D', '\u0110': 'D', '\u010f': 'd', '\u0111': 'd', '\u0112': 'E', '\u0114': 'E', '\u0116': 'E', '\u0118': 'E', '\u011a': 'E', '\u0113': 'e', '\u0115': 'e', '\u0117': 'e', '\u0119': 'e', '\u011b': 'e', '\u011c': 'G', '\u011e': 'G', '\u0120': 'G', '\u0122': 'G', '\u011d': 'g', '\u011f': 'g', '\u0121': 'g', '\u0123': 'g', '\u0124': 'H', '\u0126': 'H', '\u0125': 'h', '\u0127': 'h', '\u0128': 'I', '\u012a': 'I', '\u012c': 'I', '\u012e': 'I', '\u0130': 'I', '\u0129': 'i', '\u012b': 'i', '\u012d': 'i', '\u012f': 'i', '\u0131': 'i', '\u0134': 'J', '\u0135': 'j', '\u0136': 'K', '\u0137': 'k', '\u0138': 'k', '\u0139': 'L', '\u013b': 'L', '\u013d': 'L', '\u013f': 'L', '\u0141': 'L', '\u013a': 'l', '\u013c': 'l', '\u013e': 'l', '\u0140': 'l', '\u0142': 'l', '\u0143': 'N', '\u0145': 'N', '\u0147': 'N', '\u014a': 'N', '\u0144': 'n', '\u0146': 'n', '\u0148': 'n', '\u014b': 'n', '\u014c': 'O', '\u014e': 'O', '\u0150': 'O', '\u014d': 'o', '\u014f': 'o', '\u0151': 'o', '\u0154': 'R', '\u0156': 'R', '\u0158': 'R', '\u0155': 'r', '\u0157': 'r', '\u0159': 'r', '\u015a': 'S', '\u015c': 'S', '\u015e': 'S', '\u0160': 'S', '\u015b': 's', '\u015d': 's', '\u015f': 's', '\u0161': 's', '\u0162': 'T', '\u0164': 'T', '\u0166': 'T', '\u0163': 't', '\u0165': 't', '\u0167': 't', '\u0168': 'U', '\u016a': 'U', '\u016c': 'U', '\u016e': 'U', '\u0170': 'U', '\u0172': 'U', '\u0169': 'u', '\u016b': 'u', '\u016d': 'u', '\u016f': 'u', '\u0171': 'u', '\u0173': 'u', '\u0174': 'W', '\u0175': 'w', '\u0176': 'Y', '\u0177': 'y', '\u0178': 'Y', '\u0179': 'Z', '\u017b': 'Z', '\u017d': 'Z', '\u017a': 'z', '\u017c': 'z', '\u017e': 'z', '\u0132': 'IJ', '\u0133': 'ij', '\u0152': 'Oe', '\u0153': 'oe', '\u0149': "'n", '\u017f': 's' };
  var reLatin = /[\xc0-\xd6\xd8-\xf6\xf8-\xff\u0100-\u017f]/g;
  var rsComboMarksRange = '\\u0300-\\u036f',
    reComboHalfMarksRange = '\\ufe20-\\ufe2f',
    rsComboSymbolsRange = '\\u20d0-\\u20ff',
    rsComboMarksExtendedRange = '\\u1ab0-\\u1aff',
    rsComboMarksSupplementRange = '\\u1dc0-\\u1dff',
    rsComboRange = rsComboMarksRange + reComboHalfMarksRange + rsComboSymbolsRange + rsComboMarksExtendedRange + rsComboMarksSupplementRange;
  var rsCombo = '[' + rsComboRange + ']';
  var reComboMark = RegExp(rsCombo, 'g');

  function deburrLetter(key) { return deburredLetters[key]; };

  function normalizeToBase(string) { string = string.toString(); return string && string.replace(reLatin, deburrLetter).replace(reComboMark, ''); }
  var escapeMap = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#x27;', '`': '&#x60;' };
  var createEscaper = function (map) { var escaper = function (match) { return map[match]; }; var source = '(?:' + Object.keys(map).join('|') + ')'; var testRegexp = RegExp(source); var replaceRegexp = RegExp(source, 'g'); return function (string) { string = string == null ? '' : '' + string; return testRegexp.test(string) ? string.replace(replaceRegexp, escaper) : string; }; };
  var htmlEscape = createEscaper(escapeMap);
  var keyCodeMap = { 32: ' ', 48: '0', 49: '1', 50: '2', 51: '3', 52: '4', 53: '5', 54: '6', 55: '7', 56: '8', 57: '9', 59: ';', 65: 'A', 66: 'B', 67: 'C', 68: 'D', 69: 'E', 70: 'F', 71: 'G', 72: 'H', 73: 'I', 74: 'J', 75: 'K', 76: 'L', 77: 'M', 78: 'N', 79: 'O', 80: 'P', 81: 'Q', 82: 'R', 83: 'S', 84: 'T', 85: 'U', 86: 'V', 87: 'W', 88: 'X', 89: 'Y', 90: 'Z', 96: '0', 97: '1', 98: '2', 99: '3', 100: '4', 101: '5', 102: '6', 103: '7', 104: '8', 105: '9' };
  var keyCodes = { ESCAPE: 27, ENTER: 13, SPACE: 32, TAB: 9, ARROW_UP: 38, ARROW_DOWN: 40 }
  var version = { success: false, major: '3' };
  try {
    version.full = ($.fn.dropdown.Constructor.VERSION || '').split(' ')[0].split('.');
    version.major = version.full[0];
    version.success = true;
  } catch (err) { }
  var selectId = 0;
  var EVENT_KEY = '.bs.select';
  var classNames = { DISABLED: 'disabled', DIVIDER: 'divider', SHOW: 'open', DROPUP: 'dropup', MENU: 'dropdown-menu', MENURIGHT: 'dropdown-menu-right', MENULEFT: 'dropdown-menu-left', BUTTONCLASS: 'btn-default', POPOVERHEADER: 'popover-title', ICONBASE: 'glyphicon', TICKICON: 'glyphicon-ok' }
  var Selector = { MENU: '.' + classNames.MENU }
  var elementTemplates = { span: document.createElement('span'), i: document.createElement('i'), subtext: document.createElement('small'), a: document.createElement('a'), li: document.createElement('li'), whitespace: document.createTextNode('\u00A0'), fragment: document.createDocumentFragment() }
  elementTemplates.a.setAttribute('role', 'option');
  elementTemplates.subtext.className = 'text-muted';
  elementTemplates.text = elementTemplates.span.cloneNode(false);
  elementTemplates.text.className = 'text';
  elementTemplates.checkMark = elementTemplates.span.cloneNode(false);
  var REGEXP_ARROW = new RegExp(keyCodes.ARROW_UP + '|' + keyCodes.ARROW_DOWN);
  var REGEXP_TAB_OR_ESCAPE = new RegExp('^' + keyCodes.TAB + '$|' + keyCodes.ESCAPE);
  var generateOption = {
    li: function (content, classes, optgroup) {
      var li = elementTemplates.li.cloneNode(false);
      if (content) { if (content.nodeType === 1 || content.nodeType === 11) { li.appendChild(content); } else { li.innerHTML = content; } }
      if (typeof classes !== 'undefined' && classes !== '') li.className = classes;
      if (typeof optgroup !== 'undefined' && optgroup !== null) li.classList.add('optgroup-' + optgroup);
      return li;
    },
    a: function (text, classes, inline) {
      var a = elementTemplates.a.cloneNode(true);
      if (text) { if (text.nodeType === 11) { a.appendChild(text); } else { a.insertAdjacentHTML('beforeend', text); } }
      if (typeof classes !== 'undefined' && classes !== '') a.className = classes;
      if (version.major === '4') a.classList.add('dropdown-item');
      if (inline) a.setAttribute('style', inline);
      return a;
    },
    text: function (options, useFragment) {
      var textElement = elementTemplates.text.cloneNode(false),
        subtextElement, iconElement;
      if (options.content) { textElement.innerHTML = options.content; } else {
        textElement.textContent = options.text;
        if (options.icon) {
          var whitespace = elementTemplates.whitespace.cloneNode(false);
          iconElement = (useFragment === true ? elementTemplates.i : elementTemplates.span).cloneNode(false);
          iconElement.className = options.iconBase + ' ' + options.icon;
          elementTemplates.fragment.appendChild(iconElement);
          elementTemplates.fragment.appendChild(whitespace);
        }
        if (options.subtext) {
          subtextElement = elementTemplates.subtext.cloneNode(false);
          subtextElement.textContent = options.subtext;
          textElement.appendChild(subtextElement);
        }
      }
      if (useFragment === true) { while (textElement.childNodes.length > 0) { elementTemplates.fragment.appendChild(textElement.childNodes[0]); } } else { elementTemplates.fragment.appendChild(textElement); }
      return elementTemplates.fragment;
    },
    label: function (options) {
      var textElement = elementTemplates.text.cloneNode(false),
        subtextElement, iconElement;
      textElement.innerHTML = options.label;
      if (options.icon) {
        var whitespace = elementTemplates.whitespace.cloneNode(false);
        iconElement = elementTemplates.span.cloneNode(false);
        iconElement.className = options.iconBase + ' ' + options.icon;
        elementTemplates.fragment.appendChild(iconElement);
        elementTemplates.fragment.appendChild(whitespace);
      }
      if (options.subtext) {
        subtextElement = elementTemplates.subtext.cloneNode(false);
        subtextElement.textContent = options.subtext;
        textElement.appendChild(subtextElement);
      }
      elementTemplates.fragment.appendChild(textElement);
      return elementTemplates.fragment;
    }
  }
  var Selectpicker = function (element, options) {
    var that = this;
    if (!valHooks.useDefault) {
      $.valHooks.select.set = valHooks._set;
      valHooks.useDefault = true;
    }
    this.$element = $(element);
    this.$newElement = null;
    this.$button = null;
    this.$menu = null;
    this.options = options;
    this.selectpicker = { main: {}, current: {}, search: {}, view: {}, keydown: { keyHistory: '', resetKeyHistory: { start: function () { return setTimeout(function () { that.selectpicker.keydown.keyHistory = ''; }, 800); } } } };
    if (this.options.title === null) { this.options.title = this.$element.attr('title'); }
    var winPad = this.options.windowPadding;
    if (typeof winPad === 'number') { this.options.windowPadding = [winPad, winPad, winPad, winPad]; }
    this.val = Selectpicker.prototype.val;
    this.render = Selectpicker.prototype.render;
    this.refresh = Selectpicker.prototype.refresh;
    this.setStyle = Selectpicker.prototype.setStyle;
    this.selectAll = Selectpicker.prototype.selectAll;
    this.deselectAll = Selectpicker.prototype.deselectAll;
    this.destroy = Selectpicker.prototype.destroy;
    this.remove = Selectpicker.prototype.remove;
    this.show = Selectpicker.prototype.show;
    this.hide = Selectpicker.prototype.hide;
    this.init();
  };
  Selectpicker.VERSION = '1.13.9';
  Selectpicker.DEFAULTS = { noneSelectedText: 'Nothing selected', noneResultsText: 'No results matched {0}', countSelectedText: function (numSelected, numTotal) { return (numSelected == 1) ? '{0} item selected' : '{0} items selected'; }, maxOptionsText: function (numAll, numGroup) { return [(numAll == 1) ? 'Limit reached ({n} item max)' : 'Limit reached ({n} items max)', (numGroup == 1) ? 'Group limit reached ({n} item max)' : 'Group limit reached ({n} items max)']; }, selectAllText: 'Select All', deselectAllText: 'Deselect All', doneButton: false, doneButtonText: 'Close', multipleSeparator: ', ', styleBase: 'btn', style: classNames.BUTTONCLASS, size: 'auto', title: null, selectedTextFormat: 'values', width: false, container: false, hideDisabled: false, showSubtext: false, showIcon: true, showContent: true, dropupAuto: true, header: false, liveSearch: false, liveSearchPlaceholder: null, liveSearchNormalize: false, liveSearchStyle: 'contains', actionsBox: false, iconBase: classNames.ICONBASE, tickIcon: classNames.TICKICON, showTick: false, template: { caret: '<span class="caret"></span>' }, maxOptions: false, mobile: false, selectOnTab: false, dropdownAlignRight: false, windowPadding: 0, virtualScroll: 600, display: false, sanitize: true, sanitizeFn: null, whiteList: DefaultWhitelist };
  Selectpicker.prototype = {
    constructor: Selectpicker,
    init: function () {
      var that = this,
        id = this.$element.attr('id');
      this.selectId = selectId++;
      this.$element[0].classList.add('bs-select-hidden');
      this.multiple = this.$element.prop('multiple');
      this.autofocus = this.$element.prop('autofocus');
      this.options.showTick = this.$element[0].classList.contains('show-tick');
      this.$newElement = this.createDropdown();
      this.$element.after(this.$newElement).prependTo(this.$newElement);
      this.$button = this.$newElement.children('button');
      this.$menu = this.$newElement.children(Selector.MENU);
      this.$menuInner = this.$menu.children('.inner');
      this.$searchbox = this.$menu.find('input');
      this.$element[0].classList.remove('bs-select-hidden');
      if (this.options.dropdownAlignRight === true) this.$menu[0].classList.add(classNames.MENURIGHT);
      if (typeof id !== 'undefined') { this.$button.attr('data-id', id); }
      this.checkDisabled();
      this.clickListener();
      if (this.options.liveSearch) this.liveSearchListener();
      this.setStyle();
      this.render();
      this.setWidth();
      if (this.options.container) { this.selectPosition(); } else {
        this.$element.on('hide' + EVENT_KEY, function () {
          if (that.isVirtual()) {
            var menuInner = that.$menuInner[0],
              emptyMenu = menuInner.firstChild.cloneNode(false);
            menuInner.replaceChild(emptyMenu, menuInner.firstChild);
            menuInner.scrollTop = 0;
          }
        });
      }
      this.$menu.data('this', this);
      this.$newElement.data('this', this);
      if (this.options.mobile) this.mobile();
      this.$newElement.on({
        'hide.bs.dropdown': function (e) {
          that.$menuInner.attr('aria-expanded', false);
          that.$element.trigger('hide' + EVENT_KEY, e);
        },
        'hidden.bs.dropdown': function (e) { that.$element.trigger('hidden' + EVENT_KEY, e); },
        'show.bs.dropdown': function (e) {
          that.$menuInner.attr('aria-expanded', true);
          that.$element.trigger('show' + EVENT_KEY, e);
        },
        'shown.bs.dropdown': function (e) { that.$element.trigger('shown' + EVENT_KEY, e); }
      });
      if (that.$element[0].hasAttribute('required')) {
        this.$element.on('invalid' + EVENT_KEY, function () {
          that.$button[0].classList.add('bs-invalid');
          that.$element.on('shown' + EVENT_KEY + '.invalid', function () { that.$element.val(that.$element.val()).off('shown' + EVENT_KEY + '.invalid'); }).on('rendered' + EVENT_KEY, function () {
            if (this.validity.valid) that.$button[0].classList.remove('bs-invalid');
            that.$element.off('rendered' + EVENT_KEY);
          });
          that.$button.on('blur' + EVENT_KEY, function () {
            that.$element.trigger('focus').trigger('blur');
            that.$button.off('blur' + EVENT_KEY);
          });
        });
      }
      setTimeout(function () {
        that.createLi();
        that.$element.trigger('loaded' + EVENT_KEY);
      });
    },
    createDropdown: function () {
      var showTick = (this.multiple || this.options.showTick) ? ' show-tick' : '',
        inputGroup = '',
        autofocus = this.autofocus ? ' autofocus' : '';
      if (version.major < 4 && this.$element.parent().hasClass('input-group')) { inputGroup = ' input-group-btn'; }
      var drop, header = '',
        searchbox = '',
        actionsbox = '',
        donebutton = '';
      if (this.options.header) { header = '<div class="' + classNames.POPOVERHEADER + '">' + '<button type="button" class="close" aria-hidden="true">&times;</button>' + this.options.header + '</div>'; }
      if (this.options.liveSearch) { searchbox = '<div class="bs-searchbox">' + '<input type="text" class="form-control" autocomplete="off"' + (this.options.liveSearchPlaceholder === null ? '' : ' placeholder="' + htmlEscape(this.options.liveSearchPlaceholder) + '"') + ' role="textbox" aria-label="Search">' + '</div>'; }
      if (this.multiple && this.options.actionsBox) { actionsbox = '<div class="bs-actionsbox">' + '<div class="btn-group btn-group-sm btn-block">' + '<button type="button" class="actions-btn bs-select-all btn ' + classNames.BUTTONCLASS + '">' + this.options.selectAllText + '</button>' + '<button type="button" class="actions-btn bs-deselect-all btn ' + classNames.BUTTONCLASS + '">' + this.options.deselectAllText + '</button>' + '</div>' + '</div>'; }
      if (this.multiple && this.options.doneButton) { donebutton = '<div class="bs-donebutton">' + '<div class="btn-group btn-block">' + '<button type="button" class="btn btn-sm ' + classNames.BUTTONCLASS + '">' + this.options.doneButtonText + '</button>' + '</div>' + '</div>'; }
      drop = '<div class="dropdown bootstrap-select' + showTick + inputGroup + '">' + '<button type="button" class="' + this.options.styleBase + ' dropdown-toggle" ' + (this.options.display === 'static' ? 'data-display="static"' : '') + 'data-toggle="dropdown"' + autofocus + ' role="button">' + '<div class="filter-option">' + '<div class="filter-option-inner">' + '<div class="filter-option-inner-inner"></div>' + '</div> ' + '</div>' + (version.major === '4' ? '' : '<span class="bs-caret">' + this.options.template.caret + '</span>') + '</button>' + '<div class="' + classNames.MENU + ' ' + (version.major === '4' ? '' : classNames.SHOW) + '" role="combobox">' + header + searchbox + actionsbox + '<div class="inner ' + classNames.SHOW + '" role="listbox" aria-expanded="false" tabindex="-1">' + '<ul class="' + classNames.MENU + ' inner ' + (version.major === '4' ? classNames.SHOW : '') + '">' + '</ul>' + '</div>' + donebutton + '</div>' + '</div>';
      return $(drop);
    },
    setPositionData: function () {
      this.selectpicker.view.canHighlight = [];
      for (var i = 0; i < this.selectpicker.current.data.length; i++) {
        var li = this.selectpicker.current.data[i],
          canHighlight = true;
        if (li.type === 'divider') {
          canHighlight = false;
          li.height = this.sizeInfo.dividerHeight;
        } else if (li.type === 'optgroup-label') {
          canHighlight = false;
          li.height = this.sizeInfo.dropdownHeaderHeight;
        } else { li.height = this.sizeInfo.liHeight; }
        if (li.disabled) canHighlight = false;
        this.selectpicker.view.canHighlight.push(canHighlight);
        li.position = (i === 0 ? 0 : this.selectpicker.current.data[i - 1].position) + li.height;
      }
    },
    isVirtual: function () { return (this.options.virtualScroll !== false) && (this.selectpicker.main.elements.length >= this.options.virtualScroll) || this.options.virtualScroll === true; },
    createView: function (isSearching, scrollTop) {
      scrollTop = scrollTop || 0;
      var that = this;
      this.selectpicker.current = isSearching ? this.selectpicker.search : this.selectpicker.main;
      var active = [];
      var selected;
      var prevActive;
      this.setPositionData();
      scroll(scrollTop, true);
      this.$menuInner.off('scroll.createView').on('scroll.createView', function (e, updateValue) {
        if (!that.noScroll) scroll(this.scrollTop, updateValue);
        that.noScroll = false;
      });

      function scroll(scrollTop, init) {
        var size = that.selectpicker.current.elements.length,
          chunks = [],
          chunkSize, chunkCount, firstChunk, lastChunk, currentChunk, prevPositions, positionIsDifferent, previousElements, menuIsDifferent = true,
          isVirtual = that.isVirtual();
        that.selectpicker.view.scrollTop = scrollTop;
        if (isVirtual === true) {
          if (that.sizeInfo.hasScrollBar && that.$menu[0].offsetWidth > that.sizeInfo.totalMenuWidth) {
            that.sizeInfo.menuWidth = that.$menu[0].offsetWidth;
            that.sizeInfo.totalMenuWidth = that.sizeInfo.menuWidth + that.sizeInfo.scrollBarWidth;
            that.$menu.css('min-width', that.sizeInfo.menuWidth);
          }
        }
        chunkSize = Math.ceil(that.sizeInfo.menuInnerHeight / that.sizeInfo.liHeight * 1.5);
        chunkCount = Math.round(size / chunkSize) || 1;
        for (var i = 0; i < chunkCount; i++) {
          var endOfChunk = (i + 1) * chunkSize;
          if (i === chunkCount - 1) { endOfChunk = size; }
          chunks[i] = [(i) * chunkSize + (!i ? 0 : 1), endOfChunk];
          if (!size) break;
          if (currentChunk === undefined && scrollTop <= that.selectpicker.current.data[endOfChunk - 1].position - that.sizeInfo.menuInnerHeight) { currentChunk = i; }
        }
        if (currentChunk === undefined) currentChunk = 0;
        prevPositions = [that.selectpicker.view.position0, that.selectpicker.view.position1];
        firstChunk = Math.max(0, currentChunk - 1);
        lastChunk = Math.min(chunkCount - 1, currentChunk + 1);
        that.selectpicker.view.position0 = isVirtual === false ? 0 : (Math.max(0, chunks[firstChunk][0]) || 0);
        that.selectpicker.view.position1 = isVirtual === false ? size : (Math.min(size, chunks[lastChunk][1]) || 0);
        positionIsDifferent = prevPositions[0] !== that.selectpicker.view.position0 || prevPositions[1] !== that.selectpicker.view.position1;
        if (that.activeIndex !== undefined) {
          prevActive = that.selectpicker.main.elements[that.prevActiveIndex];
          active = that.selectpicker.main.elements[that.activeIndex];
          selected = that.selectpicker.main.elements[that.selectedIndex];
          if (init) {
            if (that.activeIndex !== that.selectedIndex && active && active.length) { active.classList.remove('active'); if (active.firstChild) active.firstChild.classList.remove('active'); }
            that.activeIndex = undefined;
          }
          if (that.activeIndex && that.activeIndex !== that.selectedIndex && selected && selected.length) { selected.classList.remove('active'); if (selected.firstChild) selected.firstChild.classList.remove('active'); }
        }
        if (that.prevActiveIndex !== undefined && that.prevActiveIndex !== that.activeIndex && that.prevActiveIndex !== that.selectedIndex && prevActive && prevActive.length) { prevActive.classList.remove('active'); if (prevActive.firstChild) prevActive.firstChild.classList.remove('active'); }
        if (init || positionIsDifferent) {
          previousElements = that.selectpicker.view.visibleElements ? that.selectpicker.view.visibleElements.slice() : [];
          if (isVirtual === false) { that.selectpicker.view.visibleElements = that.selectpicker.current.elements; } else { that.selectpicker.view.visibleElements = that.selectpicker.current.elements.slice(that.selectpicker.view.position0, that.selectpicker.view.position1); }
          that.setOptionStatus();
          if (isSearching || (isVirtual === false && init)) menuIsDifferent = !isEqual(previousElements, that.selectpicker.view.visibleElements);
          if ((init || isVirtual === true) && menuIsDifferent) {
            var menuInner = that.$menuInner[0],
              menuFragment = document.createDocumentFragment(),
              emptyMenu = menuInner.firstChild.cloneNode(false),
              marginTop, marginBottom, elements = that.selectpicker.view.visibleElements,
              toSanitize = [];
            menuInner.replaceChild(emptyMenu, menuInner.firstChild);
            for (var i = 0, visibleElementsLen = elements.length; i < visibleElementsLen; i++) {
              var element = elements[i],
                elText, elementData;
              if (that.options.sanitize) {
                elText = element.lastChild;
                if (elText) {
                  elementData = that.selectpicker.current.data[i + that.selectpicker.view.position0];
                  if (elementData && elementData.content && !elementData.sanitized) {
                    toSanitize.push(elText);
                    elementData.sanitized = true;
                  }
                }
              }
              menuFragment.appendChild(element);
            }
            if (that.options.sanitize && toSanitize.length) { sanitizeHtml(toSanitize, that.options.whiteList, that.options.sanitizeFn); }
            if (isVirtual === true) {
              marginTop = (that.selectpicker.view.position0 === 0 ? 0 : that.selectpicker.current.data[that.selectpicker.view.position0 - 1].position);
              marginBottom = (that.selectpicker.view.position1 > size - 1 ? 0 : that.selectpicker.current.data[size - 1].position - that.selectpicker.current.data[that.selectpicker.view.position1 - 1].position);
              menuInner.firstChild.style.marginTop = marginTop + 'px';
              menuInner.firstChild.style.marginBottom = marginBottom + 'px';
            }
            menuInner.firstChild.appendChild(menuFragment);
          }
        }
        that.prevActiveIndex = that.activeIndex;
        if (!that.options.liveSearch) { that.$menuInner.trigger('focus'); } else if (isSearching && init) {
          var index = 0,
            newActive;
          if (!that.selectpicker.view.canHighlight[index]) { index = 1 + that.selectpicker.view.canHighlight.slice(1).indexOf(true); }
          newActive = that.selectpicker.view.visibleElements[index];
          if (that.selectpicker.view.currentActive) { that.selectpicker.view.currentActive.classList.remove('active'); if (that.selectpicker.view.currentActive.firstChild) that.selectpicker.view.currentActive.firstChild.classList.remove('active'); }
          if (newActive) { newActive.classList.add('active'); if (newActive.firstChild) newActive.firstChild.classList.add('active'); }
          that.activeIndex = (that.selectpicker.current.data[index] || {}).index;
        }
      }
      $(window).off('resize' + EVENT_KEY + '.' + this.selectId + '.createView').on('resize' + EVENT_KEY + '.' + this.selectId + '.createView', function () { var isActive = that.$newElement.hasClass(classNames.SHOW); if (isActive) scroll(that.$menuInner[0].scrollTop); });
    },
    setPlaceholder: function () {
      var updateIndex = false;
      if (this.options.title && !this.multiple) {
        if (!this.selectpicker.view.titleOption) this.selectpicker.view.titleOption = document.createElement('option');
        updateIndex = true;
        var element = this.$element[0],
          isSelected = false,
          titleNotAppended = !this.selectpicker.view.titleOption.parentNode;
        if (titleNotAppended) {
          this.selectpicker.view.titleOption.className = 'bs-title-option';
          this.selectpicker.view.titleOption.value = '';
          var $opt = $(element.options[element.selectedIndex]);
          isSelected = $opt.attr('selected') === undefined && this.$element.data('selected') === undefined;
        }
        if (titleNotAppended || this.selectpicker.view.titleOption.index !== 0) { element.insertBefore(this.selectpicker.view.titleOption, element.firstChild); }
        if (isSelected) element.selectedIndex = 0;
      }
      return updateIndex;
    },
    createLi: function () {
      var that = this,
        iconBase = this.options.iconBase,
        optionSelector = ':not([hidden]):not([data-hidden="true"])',
        mainElements = [],
        mainData = [],
        widestOptionLength = 0,
        optID = 0,
        startIndex = this.setPlaceholder() ? 1 : 0;
      if (this.options.hideDisabled) optionSelector += ':not(:disabled)';
      if ((that.options.showTick || that.multiple) && !elementTemplates.checkMark.parentNode) {
        elementTemplates.checkMark.className = iconBase + ' ' + that.options.tickIcon + ' check-mark';
        elementTemplates.a.appendChild(elementTemplates.checkMark);
      }
      var selectOptions = this.$element[0].querySelectorAll('select > *' + optionSelector);

      function addDivider(config) {
        var previousData = mainData[mainData.length - 1];
        if (previousData && previousData.type === 'divider' && (previousData.optID || config.optID)) { return; }
        config = config || {};
        config.type = 'divider';
        mainElements.push(generateOption.li(false, classNames.DIVIDER, (config.optID ? config.optID + 'div' : undefined)));
        mainData.push(config);
      }

      function addOption(option, config) {
        config = config || {};
        config.divider = option.getAttribute('data-divider') === 'true';
        if (config.divider) { addDivider({ optID: config.optID }); } else {
          var liIndex = mainData.length,
            cssText = option.style.cssText,
            inlineStyle = cssText ? htmlEscape(cssText) : '',
            optionClass = (option.className || '') + (config.optgroupClass || '');
          if (config.optID) optionClass = 'opt ' + optionClass;
          config.text = option.textContent;
          config.content = option.getAttribute('data-content');
          config.tokens = option.getAttribute('data-tokens');
          config.subtext = option.getAttribute('data-subtext');
          config.icon = option.getAttribute('data-icon');
          config.iconBase = iconBase;
          var textElement = generateOption.text(config);
          mainElements.push(generateOption.li(generateOption.a(textElement, optionClass, inlineStyle), '', config.optID));
          option.liIndex = liIndex;
          config.display = config.content || config.text;
          config.type = 'option';
          config.index = liIndex;
          config.option = option;
          config.disabled = config.disabled || option.disabled;
          mainData.push(config);
          var combinedLength = 0;
          if (config.display) combinedLength += config.display.length;
          if (config.subtext) combinedLength += config.subtext.length;
          if (config.icon) combinedLength += 1;
          if (combinedLength > widestOptionLength) {
            widestOptionLength = combinedLength;
            that.selectpicker.view.widestOption = mainElements[mainElements.length - 1];
          }
        }
      }

      function addOptgroup(index, selectOptions) {
        var optgroup = selectOptions[index],
          previous = selectOptions[index - 1],
          next = selectOptions[index + 1],
          options = optgroup.querySelectorAll('option' + optionSelector);
        if (!options.length) return;
        var config = { label: htmlEscape(optgroup.label), subtext: optgroup.getAttribute('data-subtext'), icon: optgroup.getAttribute('data-icon'), iconBase: iconBase },
          optgroupClass = ' ' + (optgroup.className || ''),
          headerIndex, lastIndex;
        optID++;
        if (previous) { addDivider({ optID: optID }); }
        var labelElement = generateOption.label(config);
        mainElements.push(generateOption.li(labelElement, 'dropdown-header' + optgroupClass, optID));
        mainData.push({ display: config.label, subtext: config.subtext, type: 'optgroup-label', optID: optID });
        for (var j = 0, len = options.length; j < len; j++) {
          var option = options[j];
          if (j === 0) {
            headerIndex = mainData.length - 1;
            lastIndex = headerIndex + len;
          }
          addOption(option, { headerIndex: headerIndex, lastIndex: lastIndex, optID: optID, optgroupClass: optgroupClass, disabled: optgroup.disabled });
        }
        if (next) { addDivider({ optID: optID }); }
      }
      for (var len = selectOptions.length; startIndex < len; startIndex++) { var item = selectOptions[startIndex]; if (item.tagName !== 'OPTGROUP') { addOption(item, {}); } else { addOptgroup(startIndex, selectOptions); } }
      this.selectpicker.main.elements = mainElements;
      this.selectpicker.main.data = mainData;
      this.selectpicker.current = this.selectpicker.main;
    },
    findLis: function () { return this.$menuInner.find('.inner > li'); },
    render: function () {
      this.setPlaceholder();
      var that = this,
        selectedOptions = this.$element[0].selectedOptions,
        selectedCount = selectedOptions.length,
        button = this.$button[0],
        buttonInner = button.querySelector('.filter-option-inner-inner'),
        multipleSeparator = document.createTextNode(this.options.multipleSeparator),
        titleFragment = elementTemplates.fragment.cloneNode(false),
        showCount, countMax, hasContent = false;
      this.togglePlaceholder();
      this.tabIndex();
      if (this.options.selectedTextFormat === 'static') { titleFragment = generateOption.text({ text: this.options.title }, true); } else {
        showCount = this.multiple && this.options.selectedTextFormat.indexOf('count') !== -1 && selectedCount > 1;
        if (showCount) {
          countMax = this.options.selectedTextFormat.split('>');
          showCount = (countMax.length > 1 && selectedCount > countMax[1]) || (countMax.length === 1 && selectedCount >= 2);
        }
        if (showCount === false) {
          for (var selectedIndex = 0; selectedIndex < selectedCount; selectedIndex++) {
            if (selectedIndex < 50) {
              var option = selectedOptions[selectedIndex],
                titleOptions = {},
                thisData = { content: option.getAttribute('data-content'), subtext: option.getAttribute('data-subtext'), icon: option.getAttribute('data-icon') };
              if (this.multiple && selectedIndex > 0) { titleFragment.appendChild(multipleSeparator.cloneNode(false)); }
              if (option.title) { titleOptions.text = option.title; } else if (thisData.content && that.options.showContent) {
                titleOptions.content = thisData.content.toString();
                hasContent = true;
              } else {
                if (that.options.showIcon) {
                  titleOptions.icon = thisData.icon;
                  titleOptions.iconBase = this.options.iconBase;
                }
                if (that.options.showSubtext && !that.multiple && thisData.subtext) titleOptions.subtext = ' ' + thisData.subtext;
                titleOptions.text = option.textContent.trim();
              }
              titleFragment.appendChild(generateOption.text(titleOptions, true));
            } else { break; }
          }
          if (selectedCount > 49) { titleFragment.appendChild(document.createTextNode('...')); }
        } else {
          var optionSelector = ':not([hidden]):not([data-hidden="true"]):not([data-divider="true"])';
          if (this.options.hideDisabled) optionSelector += ':not(:disabled)';
          var totalCount = this.$element[0].querySelectorAll('select > option' + optionSelector + ', optgroup' + optionSelector + ' option' + optionSelector).length,
            tr8nText = (typeof this.options.countSelectedText === 'function') ? this.options.countSelectedText(selectedCount, totalCount) : this.options.countSelectedText;
          titleFragment = generateOption.text({ text: tr8nText.replace('{0}', selectedCount.toString()).replace('{1}', totalCount.toString()) }, true);
        }
      }
      if (this.options.title == undefined) { this.options.title = this.$element.attr('title'); }
      if (!titleFragment.childNodes.length) { titleFragment = generateOption.text({ text: typeof this.options.title !== 'undefined' ? this.options.title : this.options.noneSelectedText }, true); }
      button.title = titleFragment.textContent.replace(/<[^>]*>?/g, '').trim();
      if (this.options.sanitize && hasContent) { sanitizeHtml([titleFragment], that.options.whiteList, that.options.sanitizeFn); }
      buttonInner.innerHTML = '';
      buttonInner.appendChild(titleFragment);
      if (version.major < 4 && this.$newElement[0].classList.contains('bs3-has-addon')) {
        var filterExpand = button.querySelector('.filter-expand'),
          clone = buttonInner.cloneNode(true);
        clone.className = 'filter-expand';
        if (filterExpand) { button.replaceChild(clone, filterExpand); } else { button.appendChild(clone); }
      }
      this.$element.trigger('rendered' + EVENT_KEY);
    },
    setStyle: function (newStyle, status) {
      var button = this.$button[0],
        newElement = this.$newElement[0],
        style = this.options.style.trim(),
        buttonClass;
      if (this.$element.attr('class')) { this.$newElement.addClass(this.$element.attr('class').replace(/selectpicker|mobile-device|bs-select-hidden|validate\[.*\]/gi, '')); }
      if (version.major < 4) { newElement.classList.add('bs3'); if (newElement.parentNode.classList.contains('input-group') && (newElement.previousElementSibling || newElement.nextElementSibling) && (newElement.previousElementSibling || newElement.nextElementSibling).classList.contains('input-group-addon')) { newElement.classList.add('bs3-has-addon'); } }
      if (newStyle) { buttonClass = newStyle.trim(); } else { buttonClass = style; }
      if (status == 'add') { if (buttonClass) button.classList.add.apply(button.classList, buttonClass.split(' ')); } else if (status == 'remove') { if (buttonClass) button.classList.remove.apply(button.classList, buttonClass.split(' ')); } else { if (style) button.classList.remove.apply(button.classList, style.split(' ')); if (buttonClass) button.classList.add.apply(button.classList, buttonClass.split(' ')); }
    },
    liHeight: function (refresh) {
      if (!refresh && (this.options.size === false || this.sizeInfo)) return;
      if (!this.sizeInfo) this.sizeInfo = {};
      var newElement = document.createElement('div'),
        menu = document.createElement('div'),
        menuInner = document.createElement('div'),
        menuInnerInner = document.createElement('ul'),
        divider = document.createElement('li'),
        dropdownHeader = document.createElement('li'),
        li = document.createElement('li'),
        a = document.createElement('a'),
        text = document.createElement('span'),
        header = this.options.header && this.$menu.find('.' + classNames.POPOVERHEADER).length > 0 ? this.$menu.find('.' + classNames.POPOVERHEADER)[0].cloneNode(true) : null,
        search = this.options.liveSearch ? document.createElement('div') : null,
        actions = this.options.actionsBox && this.multiple && this.$menu.find('.bs-actionsbox').length > 0 ? this.$menu.find('.bs-actionsbox')[0].cloneNode(true) : null,
        doneButton = this.options.doneButton && this.multiple && this.$menu.find('.bs-donebutton').length > 0 ? this.$menu.find('.bs-donebutton')[0].cloneNode(true) : null,
        firstOption = this.$element.find('option')[0];
      this.sizeInfo.selectWidth = this.$newElement[0].offsetWidth;
      text.className = 'text';
      a.className = 'dropdown-item ' + (firstOption ? firstOption.className : '');
      newElement.className = this.$menu[0].parentNode.className + ' ' + classNames.SHOW;
      newElement.style.width = this.sizeInfo.selectWidth + 'px';
      if (this.options.width === 'auto') menu.style.minWidth = 0;
      menu.className = classNames.MENU + ' ' + classNames.SHOW;
      menuInner.className = 'inner ' + classNames.SHOW;
      menuInnerInner.className = classNames.MENU + ' inner ' + (version.major === '4' ? classNames.SHOW : '');
      divider.className = classNames.DIVIDER;
      dropdownHeader.className = 'dropdown-header';
      text.appendChild(document.createTextNode('\u200b'));
      a.appendChild(text);
      li.appendChild(a);
      dropdownHeader.appendChild(text.cloneNode(true));
      if (this.selectpicker.view.widestOption) { menuInnerInner.appendChild(this.selectpicker.view.widestOption.cloneNode(true)); }
      menuInnerInner.appendChild(li);
      menuInnerInner.appendChild(divider);
      menuInnerInner.appendChild(dropdownHeader);
      if (header) menu.appendChild(header);
      if (search) {
        var input = document.createElement('input');
        search.className = 'bs-searchbox';
        input.className = 'form-control';
        search.appendChild(input);
        menu.appendChild(search);
      }
      if (actions) menu.appendChild(actions);
      menuInner.appendChild(menuInnerInner);
      menu.appendChild(menuInner);
      if (doneButton) menu.appendChild(doneButton);
      newElement.appendChild(menu);
      document.body.appendChild(newElement);
      var liHeight = li.offsetHeight,
        dropdownHeaderHeight = dropdownHeader ? dropdownHeader.offsetHeight : 0,
        headerHeight = header ? header.offsetHeight : 0,
        searchHeight = search ? search.offsetHeight : 0,
        actionsHeight = actions ? actions.offsetHeight : 0,
        doneButtonHeight = doneButton ? doneButton.offsetHeight : 0,
        dividerHeight = $(divider).outerHeight(true),
        menuStyle = window.getComputedStyle ? window.getComputedStyle(menu) : false,
        menuWidth = menu.offsetWidth,
        $menu = menuStyle ? null : $(menu),
        menuPadding = { vert: toInteger(menuStyle ? menuStyle.paddingTop : $menu.css('paddingTop')) + toInteger(menuStyle ? menuStyle.paddingBottom : $menu.css('paddingBottom')) + toInteger(menuStyle ? menuStyle.borderTopWidth : $menu.css('borderTopWidth')) + toInteger(menuStyle ? menuStyle.borderBottomWidth : $menu.css('borderBottomWidth')), horiz: toInteger(menuStyle ? menuStyle.paddingLeft : $menu.css('paddingLeft')) + toInteger(menuStyle ? menuStyle.paddingRight : $menu.css('paddingRight')) + toInteger(menuStyle ? menuStyle.borderLeftWidth : $menu.css('borderLeftWidth')) + toInteger(menuStyle ? menuStyle.borderRightWidth : $menu.css('borderRightWidth')) },
        menuExtras = { vert: menuPadding.vert + toInteger(menuStyle ? menuStyle.marginTop : $menu.css('marginTop')) + toInteger(menuStyle ? menuStyle.marginBottom : $menu.css('marginBottom')) + 2, horiz: menuPadding.horiz + toInteger(menuStyle ? menuStyle.marginLeft : $menu.css('marginLeft')) + toInteger(menuStyle ? menuStyle.marginRight : $menu.css('marginRight')) + 2 },
        scrollBarWidth;
      menuInner.style.overflowY = 'scroll';
      scrollBarWidth = menu.offsetWidth - menuWidth;
      document.body.removeChild(newElement);
      this.sizeInfo.liHeight = liHeight;
      this.sizeInfo.dropdownHeaderHeight = dropdownHeaderHeight;
      this.sizeInfo.headerHeight = headerHeight;
      this.sizeInfo.searchHeight = searchHeight;
      this.sizeInfo.actionsHeight = actionsHeight;
      this.sizeInfo.doneButtonHeight = doneButtonHeight;
      this.sizeInfo.dividerHeight = dividerHeight;
      this.sizeInfo.menuPadding = menuPadding;
      this.sizeInfo.menuExtras = menuExtras;
      this.sizeInfo.menuWidth = menuWidth;
      this.sizeInfo.totalMenuWidth = this.sizeInfo.menuWidth;
      this.sizeInfo.scrollBarWidth = scrollBarWidth;
      this.sizeInfo.selectHeight = this.$newElement[0].offsetHeight;
      this.setPositionData();
    },
    getSelectPosition: function () {
      var that = this,
        $window = $(window),
        pos = that.$newElement.offset(),
        $container = $(that.options.container),
        containerPos;
      if (that.options.container && $container.length && !$container.is('body')) {
        containerPos = $container.offset();
        containerPos.top += parseInt($container.css('borderTopWidth'));
        containerPos.left += parseInt($container.css('borderLeftWidth'));
      } else { containerPos = { top: 0, left: 0 }; }
      var winPad = that.options.windowPadding;
      this.sizeInfo.selectOffsetTop = pos.top - containerPos.top - $window.scrollTop();
      this.sizeInfo.selectOffsetBot = $window.height() - this.sizeInfo.selectOffsetTop - this.sizeInfo.selectHeight - containerPos.top - winPad[2];
      this.sizeInfo.selectOffsetLeft = pos.left - containerPos.left - $window.scrollLeft();
      this.sizeInfo.selectOffsetRight = $window.width() - this.sizeInfo.selectOffsetLeft - this.sizeInfo.selectWidth - containerPos.left - winPad[1];
      this.sizeInfo.selectOffsetTop -= winPad[0];
      this.sizeInfo.selectOffsetLeft -= winPad[3];
    },
    setMenuSize: function (isAuto) {
      this.getSelectPosition();
      var selectWidth = this.sizeInfo.selectWidth,
        liHeight = this.sizeInfo.liHeight,
        headerHeight = this.sizeInfo.headerHeight,
        searchHeight = this.sizeInfo.searchHeight,
        actionsHeight = this.sizeInfo.actionsHeight,
        doneButtonHeight = this.sizeInfo.doneButtonHeight,
        divHeight = this.sizeInfo.dividerHeight,
        menuPadding = this.sizeInfo.menuPadding,
        menuInnerHeight, menuHeight, divLength = 0,
        minHeight, _minHeight, maxHeight, menuInnerMinHeight, estimate;
      if (this.options.dropupAuto) {
        estimate = liHeight * this.selectpicker.current.elements.length + menuPadding.vert;
        this.$newElement.toggleClass(classNames.DROPUP, this.sizeInfo.selectOffsetTop - this.sizeInfo.selectOffsetBot > this.sizeInfo.menuExtras.vert && estimate + this.sizeInfo.menuExtras.vert + 50 > this.sizeInfo.selectOffsetBot);
      }
      if (this.options.size === 'auto') {
        _minHeight = this.selectpicker.current.elements.length > 3 ? this.sizeInfo.liHeight * 3 + this.sizeInfo.menuExtras.vert - 2 : 0;
        menuHeight = this.sizeInfo.selectOffsetBot - this.sizeInfo.menuExtras.vert;
        minHeight = _minHeight + headerHeight + searchHeight + actionsHeight + doneButtonHeight;
        menuInnerMinHeight = Math.max(_minHeight - menuPadding.vert, 0);
        if (this.$newElement.hasClass(classNames.DROPUP)) { menuHeight = this.sizeInfo.selectOffsetTop - this.sizeInfo.menuExtras.vert; }
        maxHeight = menuHeight;
        menuInnerHeight = menuHeight - headerHeight - searchHeight - actionsHeight - doneButtonHeight - menuPadding.vert;
      } else if (this.options.size && this.options.size != 'auto' && this.selectpicker.current.elements.length > this.options.size) {
        for (var i = 0; i < this.options.size; i++) { if (this.selectpicker.current.data[i].type === 'divider') divLength++; }
        menuHeight = liHeight * this.options.size + divLength * divHeight + menuPadding.vert;
        menuInnerHeight = menuHeight - menuPadding.vert;
        maxHeight = menuHeight + headerHeight + searchHeight + actionsHeight + doneButtonHeight;
        minHeight = menuInnerMinHeight = '';
      }
      if (this.options.dropdownAlignRight === 'auto') { this.$menu.toggleClass(classNames.MENURIGHT, this.sizeInfo.selectOffsetLeft > this.sizeInfo.selectOffsetRight && this.sizeInfo.selectOffsetRight < (this.sizeInfo.totalMenuWidth - selectWidth)); }
      this.$menu.css({ 'max-height': maxHeight + 'px', 'overflow': 'hidden', 'min-height': minHeight + 'px' });
      this.$menuInner.css({ 'max-height': menuInnerHeight + 'px', 'overflow-y': 'auto', 'min-height': menuInnerMinHeight + 'px' });
      this.sizeInfo.menuInnerHeight = Math.max(menuInnerHeight, 1);
      if (this.selectpicker.current.data.length && this.selectpicker.current.data[this.selectpicker.current.data.length - 1].position > this.sizeInfo.menuInnerHeight) {
        this.sizeInfo.hasScrollBar = true;
        this.sizeInfo.totalMenuWidth = this.sizeInfo.menuWidth + this.sizeInfo.scrollBarWidth;
        this.$menu.css('min-width', this.sizeInfo.totalMenuWidth);
      }
      if (this.dropdown && this.dropdown._popper) this.dropdown._popper.update();
    },
    setSize: function (refresh) {
      this.liHeight(refresh);
      if (this.options.header) this.$menu.css('padding-top', 0);
      if (this.options.size === false) return;
      var that = this,
        $window = $(window),
        selectedIndex, offset = 0;
      this.setMenuSize();
      if (this.options.liveSearch) { this.$searchbox.off('input.setMenuSize propertychange.setMenuSize').on('input.setMenuSize propertychange.setMenuSize', function () { return that.setMenuSize(); }); }
      if (this.options.size === 'auto') { $window.off('resize' + EVENT_KEY + '.' + this.selectId + '.setMenuSize' + ' scroll' + EVENT_KEY + '.' + this.selectId + '.setMenuSize').on('resize' + EVENT_KEY + '.' + this.selectId + '.setMenuSize' + ' scroll' + EVENT_KEY + '.' + this.selectId + '.setMenuSize', function () { return that.setMenuSize(); }); } else if (this.options.size && this.options.size != 'auto' && this.selectpicker.current.elements.length > this.options.size) { $window.off('resize' + EVENT_KEY + '.' + this.selectId + '.setMenuSize' + ' scroll' + EVENT_KEY + '.' + this.selectId + '.setMenuSize'); }
      if (refresh) { offset = this.$menuInner[0].scrollTop; } else if (!that.multiple) {
        var element = that.$element[0];
        selectedIndex = (element.options[element.selectedIndex] || {}).liIndex;
        if (typeof selectedIndex === 'number' && that.options.size !== false) {
          offset = that.sizeInfo.liHeight * selectedIndex;
          offset = offset - (that.sizeInfo.menuInnerHeight / 2) + (that.sizeInfo.liHeight / 2);
        }
      }
      that.createView(false, offset);
    },
    setWidth: function () {
      var that = this;
      if (this.options.width === 'auto') {
        requestAnimationFrame(function () {
          that.$menu.css('min-width', '0');
          that.$element.on('loaded' + EVENT_KEY, function () {
            that.liHeight();
            that.setMenuSize();
            var $selectClone = that.$newElement.clone().appendTo('body'),
              btnWidth = $selectClone.css('width', 'auto').children('button').outerWidth();
            $selectClone.remove();
            that.sizeInfo.selectWidth = Math.max(that.sizeInfo.totalMenuWidth, btnWidth);
            that.$newElement.css('width', that.sizeInfo.selectWidth + 'px');
          });
        });
      } else if (this.options.width === 'fit') {
        this.$menu.css('min-width', '');
        this.$newElement.css('width', '').addClass('fit-width');
      } else if (this.options.width) {
        this.$menu.css('min-width', '');
        this.$newElement.css('width', this.options.width);
      } else {
        this.$menu.css('min-width', '');
        this.$newElement.css('width', '');
      }
      if (this.$newElement.hasClass('fit-width') && this.options.width !== 'fit') { this.$newElement[0].classList.remove('fit-width'); }
    },
    selectPosition: function () {
      this.$bsContainer = $('<div class="bs-container" />');
      var that = this,
        $container = $(this.options.container),
        pos, containerPos, actualHeight, getPlacement = function ($element) {
          var containerPosition = {},
            display = that.options.display || ($.fn.dropdown.Constructor.Default ? $.fn.dropdown.Constructor.Default.display : false);
          that.$bsContainer.addClass($element.attr('class').replace(/form-control|fit-width/gi, '')).toggleClass(classNames.DROPUP, $element.hasClass(classNames.DROPUP));
          pos = $element.offset();
          if (!$container.is('body')) {
            containerPos = $container.offset();
            containerPos.top += parseInt($container.css('borderTopWidth')) - $container.scrollTop();
            containerPos.left += parseInt($container.css('borderLeftWidth')) - $container.scrollLeft();
          } else { containerPos = { top: 0, left: 0 }; }
          actualHeight = $element.hasClass(classNames.DROPUP) ? 0 : $element[0].offsetHeight;
          if (version.major < 4 || display === 'static') {
            containerPosition.top = pos.top - containerPos.top + actualHeight;
            containerPosition.left = pos.left - containerPos.left;
          }
          containerPosition.width = $element[0].offsetWidth;
          that.$bsContainer.css(containerPosition);
        };
      this.$button.on('click.bs.dropdown.data-api', function () {
        if (that.isDisabled()) { return; }
        getPlacement(that.$newElement);
        that.$bsContainer.appendTo(that.options.container).toggleClass(classNames.SHOW, !that.$button.hasClass(classNames.SHOW)).append(that.$menu);
      });
      $(window).off('resize' + EVENT_KEY + '.' + this.selectId + ' scroll' + EVENT_KEY + '.' + this.selectId).on('resize' + EVENT_KEY + '.' + this.selectId + ' scroll' + EVENT_KEY + '.' + this.selectId, function () { var isActive = that.$newElement.hasClass(classNames.SHOW); if (isActive) getPlacement(that.$newElement); });
      this.$element.on('hide' + EVENT_KEY, function () {
        that.$menu.data('height', that.$menu.height());
        that.$bsContainer.detach();
      });
    },
    setOptionStatus: function () {
      var that = this;
      that.noScroll = false;
      if (that.selectpicker.view.visibleElements && that.selectpicker.view.visibleElements.length) {
        for (var i = 0; i < that.selectpicker.view.visibleElements.length; i++) {
          var liData = that.selectpicker.current.data[i + that.selectpicker.view.position0],
            option = liData.option;
          if (option) {
            that.setDisabled(liData.index, liData.disabled);
            that.setSelected(liData.index, option.selected);
          }
        }
      }
    },
    setSelected: function (index, selected) {
      var li = this.selectpicker.main.elements[index],
        liData = this.selectpicker.main.data[index],
        activeIndexIsSet = this.activeIndex !== undefined,
        thisIsActive = this.activeIndex === index,
        prevActive, a, keepActive = thisIsActive || (selected && !this.multiple && !activeIndexIsSet);
      liData.selected = selected;
      a = li.firstChild;
      if (selected) { this.selectedIndex = index; }
      li.classList.toggle('selected', selected);
      li.classList.toggle('active', keepActive);
      if (keepActive) {
        this.selectpicker.view.currentActive = li;
        this.activeIndex = index;
      }
      if (a) {
        a.classList.toggle('selected', selected);
        a.classList.toggle('active', keepActive);
        a.setAttribute('aria-selected', selected);
      }
      if (!keepActive) {
        if (!activeIndexIsSet && selected && this.prevActiveIndex !== undefined) {
          prevActive = this.selectpicker.main.elements[this.prevActiveIndex];
          prevActive.classList.remove('active');
          if (prevActive.firstChild) { prevActive.firstChild.classList.remove('active'); }
        }
      }
    },
    setDisabled: function (index, disabled) {
      var li = this.selectpicker.main.elements[index],
        a;
      this.selectpicker.main.data[index].disabled = disabled;
      a = li.firstChild;
      li.classList.toggle(classNames.DISABLED, disabled);
      if (a) {
        if (version.major === '4') a.classList.toggle(classNames.DISABLED, disabled);
        a.setAttribute('aria-disabled', disabled);
        if (disabled) { a.setAttribute('tabindex', -1); } else { a.setAttribute('tabindex', 0); }
      }
    },
    isDisabled: function () { return this.$element[0].disabled; },
    checkDisabled: function () {
      var that = this;
      if (this.isDisabled()) {
        this.$newElement[0].classList.add(classNames.DISABLED);
        this.$button.addClass(classNames.DISABLED).attr('tabindex', -1).attr('aria-disabled', true);
      } else {
        if (this.$button[0].classList.contains(classNames.DISABLED)) {
          this.$newElement[0].classList.remove(classNames.DISABLED);
          this.$button.removeClass(classNames.DISABLED).attr('aria-disabled', false);
        }
        if (this.$button.attr('tabindex') == -1 && !this.$element.data('tabindex')) { this.$button.removeAttr('tabindex'); }
      }
      this.$button.on('click', function () { return !that.isDisabled(); });
    },
    togglePlaceholder: function () {
      var element = this.$element[0],
        selectedIndex = element.selectedIndex,
        nothingSelected = selectedIndex === -1;
      if (!nothingSelected && !element.options[selectedIndex].value) nothingSelected = true;
      this.$button.toggleClass('bs-placeholder', nothingSelected);
    },
    tabIndex: function () {
      if (this.$element.data('tabindex') !== this.$element.attr('tabindex') && (this.$element.attr('tabindex') !== -98 && this.$element.attr('tabindex') !== '-98')) {
        this.$element.data('tabindex', this.$element.attr('tabindex'));
        this.$button.attr('tabindex', this.$element.data('tabindex'));
      }
      this.$element.attr('tabindex', -98);
    },
    clickListener: function () {
      var that = this,
        $document = $(document);
      $document.data('spaceSelect', false);
      this.$button.on('keyup', function (e) {
        if (/(32)/.test(e.keyCode.toString(10)) && $document.data('spaceSelect')) {
          e.preventDefault();
          $document.data('spaceSelect', false);
        }
      });
      this.$newElement.on('show.bs.dropdown', function () {
        if (version.major > 3 && !that.dropdown) {
          that.dropdown = that.$button.data('bs.dropdown');
          that.dropdown._menu = that.$menu[0];
        }
      });
      this.$button.on('click.bs.dropdown.data-api', function () { if (!that.$newElement.hasClass(classNames.SHOW)) { that.setSize(); } });

      function setFocus() { if (that.options.liveSearch) { that.$searchbox.trigger('focus'); } else { that.$menuInner.trigger('focus'); } }

      function checkPopperExists() { if (that.dropdown && that.dropdown._popper && that.dropdown._popper.state.isCreated) { setFocus(); } else { requestAnimationFrame(checkPopperExists); } }
      this.$element.on('shown' + EVENT_KEY, function () {
        if (that.$menuInner[0].scrollTop !== that.selectpicker.view.scrollTop) { that.$menuInner[0].scrollTop = that.selectpicker.view.scrollTop; }
        if (version.major > 3) { requestAnimationFrame(checkPopperExists); } else { setFocus(); }
      });
      this.$menuInner.on('click', 'li a', function (e, retainActive) {
        var $this = $(this),
          position0 = that.isVirtual() ? that.selectpicker.view.position0 : 0,
          clickedData = that.selectpicker.current.data[$this.parent().index() + position0],
          clickedIndex = clickedData.index,
          prevValue = getSelectValues(that.$element[0]),
          prevIndex = that.$element.prop('selectedIndex'),
          triggerChange = true;
        if (that.multiple && that.options.maxOptions !== 1) { e.stopPropagation(); }
        e.preventDefault();
        if (!that.isDisabled() && !$this.parent().hasClass(classNames.DISABLED)) {
          var $options = that.$element.find('option'),
            option = clickedData.option,
            $option = $(option),
            state = option.selected,
            $optgroup = $option.parent('optgroup'),
            $optgroupOptions = $optgroup.find('option'),
            maxOptions = that.options.maxOptions,
            maxOptionsGrp = $optgroup.data('maxOptions') || false;
          if (clickedIndex === that.activeIndex) retainActive = true;
          if (!retainActive) {
            that.prevActiveIndex = that.activeIndex;
            that.activeIndex = undefined;
          }
          if (!that.multiple) {
            $options.prop('selected', false);
            option.selected = true;
            that.setSelected(clickedIndex, true);
          } else {
            option.selected = !state;
            that.setSelected(clickedIndex, !state);
            $this.trigger('blur');
            if (maxOptions !== false || maxOptionsGrp !== false) {
              var maxReached = maxOptions < $options.filter(':selected').length,
                maxReachedGrp = maxOptionsGrp < $optgroup.find('option:selected').length;
              if ((maxOptions && maxReached) || (maxOptionsGrp && maxReachedGrp)) {
                if (maxOptions && maxOptions == 1) {
                  $options.prop('selected', false);
                  $option.prop('selected', true);
                  for (var i = 0; i < $options.length; i++) { that.setSelected(i, false); }
                  that.setSelected(clickedIndex, true);
                } else if (maxOptionsGrp && maxOptionsGrp == 1) {
                  $optgroup.find('option:selected').prop('selected', false);
                  $option.prop('selected', true);
                  for (var i = 0; i < $optgroupOptions.length; i++) {
                    var option = $optgroupOptions[i];
                    that.setSelected($options.index(option), false);
                  }
                  that.setSelected(clickedIndex, true);
                } else {
                  var maxOptionsText = typeof that.options.maxOptionsText === 'string' ? [that.options.maxOptionsText, that.options.maxOptionsText] : that.options.maxOptionsText,
                    maxOptionsArr = typeof maxOptionsText === 'function' ? maxOptionsText(maxOptions, maxOptionsGrp) : maxOptionsText,
                    maxTxt = maxOptionsArr[0].replace('{n}', maxOptions),
                    maxTxtGrp = maxOptionsArr[1].replace('{n}', maxOptionsGrp),
                    $notify = $('<div class="notify"></div>');
                  if (maxOptionsArr[2]) {
                    maxTxt = maxTxt.replace('{var}', maxOptionsArr[2][maxOptions > 1 ? 0 : 1]);
                    maxTxtGrp = maxTxtGrp.replace('{var}', maxOptionsArr[2][maxOptionsGrp > 1 ? 0 : 1]);
                  }
                  $option.prop('selected', false);
                  that.$menu.append($notify);
                  if (maxOptions && maxReached) {
                    $notify.append($('<div>' + maxTxt + '</div>'));
                    triggerChange = false;
                    that.$element.trigger('maxReached' + EVENT_KEY);
                  }
                  if (maxOptionsGrp && maxReachedGrp) {
                    $notify.append($('<div>' + maxTxtGrp + '</div>'));
                    triggerChange = false;
                    that.$element.trigger('maxReachedGrp' + EVENT_KEY);
                  }
                  setTimeout(function () { that.setSelected(clickedIndex, false); }, 10);
                  $notify.delay(750).fadeOut(300, function () { $(this).remove(); });
                }
              }
            }
          }
          if (!that.multiple || (that.multiple && that.options.maxOptions === 1)) { that.$button.trigger('focus'); } else if (that.options.liveSearch) { that.$searchbox.trigger('focus'); }
          if (triggerChange) {
            if ((prevValue != getSelectValues(that.$element[0]) && that.multiple) || (prevIndex != that.$element.prop('selectedIndex') && !that.multiple)) {
              changedArguments = [option.index, $option.prop('selected'), prevValue];
              that.$element.triggerNative('change');
            }
          }
        }
      });
      this.$menu.on('click', 'li.' + classNames.DISABLED + ' a, .' + classNames.POPOVERHEADER + ', .' + classNames.POPOVERHEADER + ' :not(.close)', function (e) {
        if (e.currentTarget == this) {
          e.preventDefault();
          e.stopPropagation();
          if (that.options.liveSearch && !$(e.target).hasClass('close')) { that.$searchbox.trigger('focus'); } else { that.$button.trigger('focus'); }
        }
      });
      this.$menuInner.on('click', '.divider, .dropdown-header', function (e) {
        e.preventDefault();
        e.stopPropagation();
        if (that.options.liveSearch) { that.$searchbox.trigger('focus'); } else { that.$button.trigger('focus'); }
      });
      this.$menu.on('click', '.' + classNames.POPOVERHEADER + ' .close', function () { that.$button.trigger('click'); });
      this.$searchbox.on('click', function (e) { e.stopPropagation(); });
      this.$menu.on('click', '.actions-btn', function (e) {
        if (that.options.liveSearch) { that.$searchbox.trigger('focus'); } else { that.$button.trigger('focus'); }
        e.preventDefault();
        e.stopPropagation();
        if ($(this).hasClass('bs-select-all')) { that.selectAll(); } else { that.deselectAll(); }
      });
      this.$element.on('change' + EVENT_KEY, function () {
        that.render();
        that.$element.trigger('changed' + EVENT_KEY, changedArguments);
        changedArguments = null;
      }).on('focus' + EVENT_KEY, function () { if (!that.options.mobile) that.$button.trigger('focus'); });
    },
    liveSearchListener: function () {
      var that = this,
        noResults = document.createElement('li');
      this.$button.on('click.bs.dropdown.data-api', function () { if (!!that.$searchbox.val()) { that.$searchbox.val(''); } });
      this.$searchbox.on('click.bs.dropdown.data-api focus.bs.dropdown.data-api touchend.bs.dropdown.data-api', function (e) { e.stopPropagation(); });
      this.$searchbox.on('input propertychange', function () {
        var searchValue = that.$searchbox.val();
        that.selectpicker.search.elements = [];
        that.selectpicker.search.data = [];
        if (searchValue) {
          var i, searchMatch = [],
            q = searchValue.toUpperCase(),
            cache = {},
            cacheArr = [],
            searchStyle = that._searchStyle(),
            normalizeSearch = that.options.liveSearchNormalize;
          if (normalizeSearch) q = normalizeToBase(q);
          that._$lisSelected = that.$menuInner.find('.selected');
          for (var i = 0; i < that.selectpicker.main.data.length; i++) {
            var li = that.selectpicker.main.data[i];
            if (!cache[i]) { cache[i] = stringSearch(li, q, searchStyle, normalizeSearch); }
            if (cache[i] && li.headerIndex !== undefined && cacheArr.indexOf(li.headerIndex) === -1) {
              if (li.headerIndex > 0) {
                cache[li.headerIndex - 1] = true;
                cacheArr.push(li.headerIndex - 1);
              }
              cache[li.headerIndex] = true;
              cacheArr.push(li.headerIndex);
              cache[li.lastIndex + 1] = true;
            }
            if (cache[i] && li.type !== 'optgroup-label') cacheArr.push(i);
          }
          for (var i = 0, cacheLen = cacheArr.length; i < cacheLen; i++) {
            var index = cacheArr[i],
              prevIndex = cacheArr[i - 1],
              li = that.selectpicker.main.data[index],
              liPrev = that.selectpicker.main.data[prevIndex];
            if (li.type !== 'divider' || (li.type === 'divider' && liPrev && liPrev.type !== 'divider' && cacheLen - 1 !== i)) {
              that.selectpicker.search.data.push(li);
              searchMatch.push(that.selectpicker.main.elements[index]);
            }
          }
          that.activeIndex = undefined;
          that.noScroll = true;
          that.$menuInner.scrollTop(0);
          that.selectpicker.search.elements = searchMatch;
          that.createView(true);
          if (!searchMatch.length) {
            noResults.className = 'no-results';
            noResults.innerHTML = that.options.noneResultsText.replace('{0}', '"' + htmlEscape(searchValue) + '"');
            that.$menuInner[0].firstChild.appendChild(noResults);
          }
        } else {
          that.$menuInner.scrollTop(0);
          that.createView(false);
        }
      });
    },
    _searchStyle: function () { return this.options.liveSearchStyle || 'contains'; },
    val: function (value) {
      if (typeof value !== 'undefined') {
        var prevValue = getSelectValues(this.$element[0]);
        changedArguments = [null, null, prevValue];
        this.$element.val(value).trigger('changed' + EVENT_KEY, changedArguments);
        this.render();
        changedArguments = null;
        return this.$element;
      } else { return this.$element.val(); }
    },
    changeAll: function (status) {
      if (!this.multiple) return;
      if (typeof status === 'undefined') status = true;
      var element = this.$element[0],
        previousSelected = 0,
        currentSelected = 0,
        prevValue = getSelectValues(element);
      element.classList.add('bs-select-hidden');
      for (var i = 0, len = this.selectpicker.current.elements.length; i < len; i++) {
        var liData = this.selectpicker.current.data[i],
          option = liData.option;
        if (option && !liData.disabled && liData.type !== 'divider') {
          if (liData.selected) previousSelected++;
          option.selected = status;
          if (status) currentSelected++;
        }
      }
      element.classList.remove('bs-select-hidden');
      if (previousSelected === currentSelected) return;
      this.setOptionStatus();
      this.togglePlaceholder();
      changedArguments = [null, null, prevValue];
      this.$element.triggerNative('change');
    },
    selectAll: function () { return this.changeAll(true); },
    deselectAll: function () { return this.changeAll(false); },
    toggle: function (e) {
      e = e || window.event;
      if (e) e.stopPropagation();
      this.$button.trigger('click.bs.dropdown.data-api');
    },
    keydown: function (e) {
      var $this = $(this),
        isToggle = $this.hasClass('dropdown-toggle'),
        $parent = isToggle ? $this.closest('.dropdown') : $this.closest(Selector.MENU),
        that = $parent.data('this'),
        $items = that.findLis(),
        index, isActive, liActive, activeLi, offset, updateScroll = false,
        downOnTab = e.which === keyCodes.TAB && !isToggle && !that.options.selectOnTab,
        isArrowKey = REGEXP_ARROW.test(e.which) || downOnTab,
        scrollTop = that.$menuInner[0].scrollTop,
        isVirtual = that.isVirtual(),
        position0 = isVirtual === true ? that.selectpicker.view.position0 : 0;
      isActive = that.$newElement.hasClass(classNames.SHOW);
      if (!isActive && (isArrowKey || (e.which >= 48 && e.which <= 57) || (e.which >= 96 && e.which <= 105) || (e.which >= 65 && e.which <= 90))) { that.$button.trigger('click.bs.dropdown.data-api'); if (that.options.liveSearch) { that.$searchbox.trigger('focus'); return; } }
      if (e.which === keyCodes.ESCAPE && isActive) {
        e.preventDefault();
        that.$button.trigger('click.bs.dropdown.data-api').trigger('focus');
      }
      if (isArrowKey) {
        if (!$items.length) return;
        index = isVirtual === true ? $items.index($items.filter('.active')) : that.activeIndex;
        if (index === undefined) index = -1;
        if (index !== -1) {
          liActive = that.selectpicker.current.elements[index + position0];
          liActive.classList.remove('active');
          if (liActive.firstChild) liActive.firstChild.classList.remove('active');
        }
        if (e.which === keyCodes.ARROW_UP) { if (index !== -1) index--; if (index + position0 < 0) index += $items.length; if (!that.selectpicker.view.canHighlight[index + position0]) { index = that.selectpicker.view.canHighlight.slice(0, index + position0).lastIndexOf(true) - position0; if (index === -1) index = $items.length - 1; } } else if (e.which === keyCodes.ARROW_DOWN || downOnTab) { index++; if (index + position0 >= that.selectpicker.view.canHighlight.length) index = 0; if (!that.selectpicker.view.canHighlight[index + position0]) { index = index + 1 + that.selectpicker.view.canHighlight.slice(index + position0 + 1).indexOf(true); } }
        e.preventDefault();
        var liActiveIndex = position0 + index;
        if (e.which === keyCodes.ARROW_UP) {
          if (position0 === 0 && index === $items.length - 1) {
            that.$menuInner[0].scrollTop = that.$menuInner[0].scrollHeight;
            liActiveIndex = that.selectpicker.current.elements.length - 1;
          } else {
            activeLi = that.selectpicker.current.data[liActiveIndex];
            offset = activeLi.position - activeLi.height;
            updateScroll = offset < scrollTop;
          }
        } else if (e.which === keyCodes.ARROW_DOWN || downOnTab) {
          if (index === 0) {
            that.$menuInner[0].scrollTop = 0;
            liActiveIndex = 0;
          } else {
            activeLi = that.selectpicker.current.data[liActiveIndex];
            offset = activeLi.position - that.sizeInfo.menuInnerHeight;
            updateScroll = offset > scrollTop;
          }
        }
        liActive = that.selectpicker.current.elements[liActiveIndex];
        if (liActive) { liActive.classList.add('active'); if (liActive.firstChild) liActive.firstChild.classList.add('active'); }
        that.activeIndex = that.selectpicker.current.data[liActiveIndex].index;
        that.selectpicker.view.currentActive = liActive;
        if (updateScroll) that.$menuInner[0].scrollTop = offset;
        if (that.options.liveSearch) { that.$searchbox.trigger('focus'); } else { $this.trigger('focus'); }
      } else if ((!$this.is('input') && !REGEXP_TAB_OR_ESCAPE.test(e.which)) || (e.which === keyCodes.SPACE && that.selectpicker.keydown.keyHistory)) {
        var searchMatch, matches = [],
          keyHistory;
        e.preventDefault();
        that.selectpicker.keydown.keyHistory += keyCodeMap[e.which];
        if (that.selectpicker.keydown.resetKeyHistory.cancel) clearTimeout(that.selectpicker.keydown.resetKeyHistory.cancel);
        that.selectpicker.keydown.resetKeyHistory.cancel = that.selectpicker.keydown.resetKeyHistory.start();
        keyHistory = that.selectpicker.keydown.keyHistory;
        if (/^(.)\1+$/.test(keyHistory)) { keyHistory = keyHistory.charAt(0); }
        for (var i = 0; i < that.selectpicker.current.data.length; i++) {
          var li = that.selectpicker.current.data[i],
            hasMatch;
          hasMatch = stringSearch(li, keyHistory, 'startsWith', true);
          if (hasMatch && that.selectpicker.view.canHighlight[i]) { matches.push(li.index); }
        }
        if (matches.length) {
          var matchIndex = 0;
          $items.removeClass('active').find('a').removeClass('active');
          if (keyHistory.length === 1) { matchIndex = matches.indexOf(that.activeIndex); if (matchIndex === -1 || matchIndex === matches.length - 1) { matchIndex = 0; } else { matchIndex++; } }
          searchMatch = matches[matchIndex];
          activeLi = that.selectpicker.main.data[searchMatch];
          if (scrollTop - activeLi.position > 0) {
            offset = activeLi.position - activeLi.height;
            updateScroll = true;
          } else {
            offset = activeLi.position - that.sizeInfo.menuInnerHeight;
            updateScroll = activeLi.position > scrollTop + that.sizeInfo.menuInnerHeight;
          }
          liActive = that.selectpicker.main.elements[searchMatch];
          liActive.classList.add('active');
          if (liActive.firstChild) liActive.firstChild.classList.add('active');
          that.activeIndex = matches[matchIndex];
          liActive.firstChild.focus();
          if (updateScroll) that.$menuInner[0].scrollTop = offset;
          $this.trigger('focus');
        }
      }
      if (isActive && ((e.which === keyCodes.SPACE && !that.selectpicker.keydown.keyHistory) || e.which === keyCodes.ENTER || (e.which === keyCodes.TAB && that.options.selectOnTab))) {
        if (e.which !== keyCodes.SPACE) e.preventDefault();
        if (!that.options.liveSearch || e.which !== keyCodes.SPACE) {
          that.$menuInner.find('.active a').trigger('click', true);
          $this.trigger('focus');
          if (!that.options.liveSearch) {
            e.preventDefault();
            $(document).data('spaceSelect', true);
          }
        }
      }
    },
    mobile: function () { this.$element[0].classList.add('mobile-device'); },
    refresh: function () {
      var config = $.extend({}, this.options, this.$element.data());
      this.options = config;
      this.checkDisabled();
      this.setStyle();
      this.render();
      this.createLi();
      this.setWidth();
      this.setSize(true);
      this.$element.trigger('refreshed' + EVENT_KEY);
    },
    hide: function () { this.$newElement.hide(); },
    show: function () { this.$newElement.show(); },
    remove: function () {
      this.$newElement.remove();
      this.$element.remove();
    },
    destroy: function () {
      this.$newElement.before(this.$element).remove();
      if (this.$bsContainer) { this.$bsContainer.remove(); } else { this.$menu.remove(); }
      this.$element.off(EVENT_KEY).removeData('selectpicker').removeClass('bs-select-hidden selectpicker');
      $(window).off(EVENT_KEY + '.' + this.selectId);
    }
  };

  function Plugin(option) {
    var args = arguments;
    var _option = option;
    [].shift.apply(args);
    if (!version.success) {
      try { version.full = ($.fn.dropdown.Constructor.VERSION || '').split(' ')[0].split('.'); } catch (err) {
        if (Selectpicker.BootstrapVersion) { version.full = Selectpicker.BootstrapVersion.split(' ')[0].split('.'); } else {
          version.full = [version.major, '0', '0'];
          console.warn('There was an issue retrieving Bootstrap\'s version. ' + 'Ensure Bootstrap is being loaded before bootstrap-select and there is no namespace collision. ' + 'If loading Bootstrap asynchronously, the version may need to be manually specified via $.fn.selectpicker.Constructor.BootstrapVersion.', err);
        }
      }
      version.major = version.full[0];
      version.success = true;
    }
    if (version.major === '4') {
      var toUpdate = [];
      if (Selectpicker.DEFAULTS.style === classNames.BUTTONCLASS) toUpdate.push({ name: 'style', className: 'BUTTONCLASS' });
      if (Selectpicker.DEFAULTS.iconBase === classNames.ICONBASE) toUpdate.push({ name: 'iconBase', className: 'ICONBASE' });
      if (Selectpicker.DEFAULTS.tickIcon === classNames.TICKICON) toUpdate.push({ name: 'tickIcon', className: 'TICKICON' });
      classNames.DIVIDER = 'dropdown-divider';
      classNames.SHOW = 'show';
      classNames.BUTTONCLASS = 'btn-light';
      classNames.POPOVERHEADER = 'popover-header';
      classNames.ICONBASE = '';
      classNames.TICKICON = 'bs-ok-default';
      for (var i = 0; i < toUpdate.length; i++) {
        var option = toUpdate[i];
        Selectpicker.DEFAULTS[option.name] = classNames[option.className];
      }
    }
    var value;
    var chain = this.each(function () {
      var $this = $(this);
      if ($this.is('select')) {
        var data = $this.data('selectpicker'),
          options = typeof _option == 'object' && _option;
        if (!data) {
          var dataAttributes = $this.data();
          for (var dataAttr in dataAttributes) { if (dataAttributes.hasOwnProperty(dataAttr) && $.inArray(dataAttr, DISALLOWED_ATTRIBUTES) !== -1) { delete dataAttributes[dataAttr]; } }
          var config = $.extend({}, Selectpicker.DEFAULTS, $.fn.selectpicker.defaults || {}, dataAttributes, options);
          config.template = $.extend({}, Selectpicker.DEFAULTS.template, ($.fn.selectpicker.defaults ? $.fn.selectpicker.defaults.template : {}), dataAttributes.template, options.template);
          $this.data('selectpicker', (data = new Selectpicker(this, config)));
        } else if (options) { for (var i in options) { if (options.hasOwnProperty(i)) { data.options[i] = options[i]; } } }
        if (typeof _option == 'string') { if (data[_option] instanceof Function) { value = data[_option].apply(data, args); } else { value = data.options[_option]; } }
      }
    });
    if (typeof value !== 'undefined') { return value; } else { return chain; }
  }
  var old = $.fn.selectpicker;
  $.fn.selectpicker = Plugin;
  $.fn.selectpicker.Constructor = Selectpicker;
  $.fn.selectpicker.noConflict = function () { $.fn.selectpicker = old; return this; };
  $(document).off('keydown.bs.dropdown.data-api').on('keydown' + EVENT_KEY, '.bootstrap-select [data-toggle="dropdown"], .bootstrap-select [role="listbox"], .bootstrap-select .bs-searchbox input', Selectpicker.prototype.keydown).on('focusin.modal', '.bootstrap-select [data-toggle="dropdown"], .bootstrap-select [role="listbox"], .bootstrap-select .bs-searchbox input', function (e) { e.stopPropagation(); });
  $(window).on('load' + EVENT_KEY + '.data-api', function () {
    $('.selectpicker').each(function () {
      var $selectpicker = $(this);
      Plugin.call($selectpicker, $selectpicker.data());
    })
  });
})(jQuery);


! function (i) { "use strict"; "function" == typeof define && define.amd ? define(["jquery"], i) : "undefined" != typeof exports ? module.exports = i(require("jquery")) : i(jQuery) }(function (i) {
  "use strict";
  var e = window.Slick || {};
  (e = function () {
    var e = 0;
    return function (t, o) {
      var s, n = this;
      n.defaults = { accessibility: !0, adaptiveHeight: !1, appendArrows: i(t), appendDots: i(t), arrows: !0, asNavFor: null, prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>', nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>', autoplay: !1, autoplaySpeed: 3e3, centerMode: !1, centerPadding: "50px", cssEase: "ease", customPaging: function (e, t) { return i('<button type="button" />').text(t + 1) }, dots: !1, dotsClass: "slick-dots", draggable: !0, easing: "linear", edgeFriction: .35, fade: !1, focusOnSelect: !1, focusOnChange: !1, infinite: !0, initialSlide: 0, lazyLoad: "ondemand", mobileFirst: !1, pauseOnHover: !0, pauseOnFocus: !0, pauseOnDotsHover: !1, respondTo: "window", responsive: null, rows: 1, rtl: !1, slide: "", slidesPerRow: 1, slidesToShow: 1, slidesToScroll: 1, speed: 500, swipe: !0, swipeToSlide: !1, touchMove: !0, touchThreshold: 5, useCSS: !0, useTransform: !0, variableWidth: !1, vertical: !1, verticalSwiping: !1, waitForAnimate: !0, zIndex: 1e3 }, n.initials = { animating: !1, dragging: !1, autoPlayTimer: null, currentDirection: 0, currentLeft: null, currentSlide: 0, direction: 1, $dots: null, listWidth: null, listHeight: null, loadIndex: 0, $nextArrow: null, $prevArrow: null, scrolling: !1, slideCount: null, slideWidth: null, $slideTrack: null, $slides: null, sliding: !1, slideOffset: 0, swipeLeft: null, swiping: !1, $list: null, touchObject: {}, transformsEnabled: !1, unslicked: !1 }, i.extend(n, n.initials), n.activeBreakpoint = null, n.animType = null, n.animProp = null, n.breakpoints = [], n.breakpointSettings = [], n.cssTransitions = !1, n.focussed = !1, n.interrupted = !1, n.hidden = "hidden", n.paused = !0, n.positionProp = null, n.respondTo = null, n.rowCount = 1, n.shouldClick = !0, n.$slider = i(t), n.$slidesCache = null, n.transformType = null, n.transitionType = null, n.visibilityChange = "visibilitychange", n.windowWidth = 0, n.windowTimer = null, s = i(t).data("slick") || {}, n.options = i.extend({}, n.defaults, o, s), n.currentSlide = n.options.initialSlide, n.originalSettings = n.options, void 0 !== document.mozHidden ? (n.hidden = "mozHidden", n.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (n.hidden = "webkitHidden", n.visibilityChange = "webkitvisibilitychange"), n.autoPlay = i.proxy(n.autoPlay, n), n.autoPlayClear = i.proxy(n.autoPlayClear, n), n.autoPlayIterator = i.proxy(n.autoPlayIterator, n), n.changeSlide = i.proxy(n.changeSlide, n), n.clickHandler = i.proxy(n.clickHandler, n), n.selectHandler = i.proxy(n.selectHandler, n), n.setPosition = i.proxy(n.setPosition, n), n.swipeHandler = i.proxy(n.swipeHandler, n), n.dragHandler = i.proxy(n.dragHandler, n), n.keyHandler = i.proxy(n.keyHandler, n), n.instanceUid = e++, n.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, n.registerBreakpoints(), n.init(!0)
    }
  }()).prototype.activateADA = function () { this.$slideTrack.find(".slick-active").attr({ "aria-hidden": "false" }).find("a, input, button, select").attr({ tabindex: "0" }) }, e.prototype.addSlide = e.prototype.slickAdd = function (e, t, o) {
    var s = this;
    if ("boolean" == typeof t) o = t, t = null;
    else if (t < 0 || t >= s.slideCount) return !1;
    s.unload(), "number" == typeof t ? 0 === t && 0 === s.$slides.length ? i(e).appendTo(s.$slideTrack) : o ? i(e).insertBefore(s.$slides.eq(t)) : i(e).insertAfter(s.$slides.eq(t)) : !0 === o ? i(e).prependTo(s.$slideTrack) : i(e).appendTo(s.$slideTrack), s.$slides = s.$slideTrack.children(this.options.slide), s.$slideTrack.children(this.options.slide).detach(), s.$slideTrack.append(s.$slides), s.$slides.each(function (e, t) { i(t).attr("data-slick-index", e) }), s.$slidesCache = s.$slides, s.reinit()
  }, e.prototype.animateHeight = function () {
    var i = this;
    if (1 === i.options.slidesToShow && !0 === i.options.adaptiveHeight && !1 === i.options.vertical) {
      var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
      i.$list.animate({ height: e }, i.options.speed)
    }
  }, e.prototype.animateSlide = function (e, t) {
    var o = {},
      s = this;
    s.animateHeight(), !0 === s.options.rtl && !1 === s.options.vertical && (e = -e), !1 === s.transformsEnabled ? !1 === s.options.vertical ? s.$slideTrack.animate({ left: e }, s.options.speed, s.options.easing, t) : s.$slideTrack.animate({ top: e }, s.options.speed, s.options.easing, t) : !1 === s.cssTransitions ? (!0 === s.options.rtl && (s.currentLeft = -s.currentLeft), i({ animStart: s.currentLeft }).animate({ animStart: e }, { duration: s.options.speed, easing: s.options.easing, step: function (i) { i = Math.ceil(i), !1 === s.options.vertical ? (o[s.animType] = "translate(" + i + "px, 0px)", s.$slideTrack.css(o)) : (o[s.animType] = "translate(0px," + i + "px)", s.$slideTrack.css(o)) }, complete: function () { t && t.call() } })) : (s.applyTransition(), e = Math.ceil(e), !1 === s.options.vertical ? o[s.animType] = "translate3d(" + e + "px, 0px, 0px)" : o[s.animType] = "translate3d(0px," + e + "px, 0px)", s.$slideTrack.css(o), t && setTimeout(function () { s.disableTransition(), t.call() }, s.options.speed))
  }, e.prototype.getNavTarget = function () {
    var e = this,
      t = e.options.asNavFor;
    return t && null !== t && (t = i(t).not(e.$slider)), t
  }, e.prototype.asNavFor = function (e) {
    var t = this.getNavTarget();
    null !== t && "object" == typeof t && t.each(function () {
      var t = i(this).slick("getSlick");
      t.unslicked || t.slideHandler(e, !0)
    })
  }, e.prototype.applyTransition = function (i) {
    var e = this,
      t = {};
    !1 === e.options.fade ? t[e.transitionType] = e.transformType + " " + e.options.speed + "ms " + e.options.cssEase : t[e.transitionType] = "opacity " + e.options.speed + "ms " + e.options.cssEase, !1 === e.options.fade ? e.$slideTrack.css(t) : e.$slides.eq(i).css(t)
  }, e.prototype.autoPlay = function () {
    var i = this;
    i.autoPlayClear(), i.slideCount > i.options.slidesToShow && (i.autoPlayTimer = setInterval(i.autoPlayIterator, i.options.autoplaySpeed))
  }, e.prototype.autoPlayClear = function () {
    var i = this;
    i.autoPlayTimer && clearInterval(i.autoPlayTimer)
  }, e.prototype.autoPlayIterator = function () {
    var i = this,
      e = i.currentSlide + i.options.slidesToScroll;
    i.paused || i.interrupted || i.focussed || (!1 === i.options.infinite && (1 === i.direction && i.currentSlide + 1 === i.slideCount - 1 ? i.direction = 0 : 0 === i.direction && (e = i.currentSlide - i.options.slidesToScroll, i.currentSlide - 1 == 0 && (i.direction = 1))), i.slideHandler(e))
  }, e.prototype.buildArrows = function () { var e = this; !0 === e.options.arrows && (e.$prevArrow = i(e.options.prevArrow).addClass("slick-arrow"), e.$nextArrow = i(e.options.nextArrow).addClass("slick-arrow"), e.slideCount > e.options.slidesToShow ? (e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.prependTo(e.options.appendArrows), e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.appendTo(e.options.appendArrows), !0 !== e.options.infinite && e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({ "aria-disabled": "true", tabindex: "-1" })) }, e.prototype.buildDots = function () {
    var e, t, o = this;
    if (!0 === o.options.dots) {
      for (o.$slider.addClass("slick-dotted"), t = i("<ul />").addClass(o.options.dotsClass), e = 0; e <= o.getDotCount(); e += 1) t.append(i("<li />").append(o.options.customPaging.call(this, o, e)));
      o.$dots = t.appendTo(o.options.appendDots), o.$dots.find("li").first().addClass("slick-active")
    }
  }, e.prototype.buildOut = function () {
    var e = this;
    e.$slides = e.$slider.children(e.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), e.slideCount = e.$slides.length, e.$slides.each(function (e, t) { i(t).attr("data-slick-index", e).data("originalStyling", i(t).attr("style") || "") }), e.$slider.addClass("slick-slider"), e.$slideTrack = 0 === e.slideCount ? i('<div class="slick-track"/>').appendTo(e.$slider) : e.$slides.wrapAll('<div class="slick-track"/>').parent(), e.$list = e.$slideTrack.wrap('<div class="slick-list"/>').parent(), e.$slideTrack.css("opacity", 0), !0 !== e.options.centerMode && !0 !== e.options.swipeToSlide || (e.options.slidesToScroll = 1), i("img[data-lazy]", e.$slider).not("[src]").addClass("slick-loading"), e.setupInfinite(), e.buildArrows(), e.buildDots(), e.updateDots(), e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), !0 === e.options.draggable && e.$list.addClass("draggable")
  }, e.prototype.buildRows = function () {
    var i, e, t, o, s, n, r, l = this;
    if (o = document.createDocumentFragment(), n = l.$slider.children(), l.options.rows > 1) {
      for (r = l.options.slidesPerRow * l.options.rows, s = Math.ceil(n.length / r), i = 0; i < s; i++) {
        var d = document.createElement("div");
        for (e = 0; e < l.options.rows; e++) {
          var a = document.createElement("div");
          for (t = 0; t < l.options.slidesPerRow; t++) {
            var c = i * r + (e * l.options.slidesPerRow + t);
            n.get(c) && a.appendChild(n.get(c))
          }
          d.appendChild(a)
        }
        o.appendChild(d)
      }
      l.$slider.empty().append(o), l.$slider.children().children().children().css({ width: 100 / l.options.slidesPerRow + "%", display: "inline-block" })
    }
  }, e.prototype.checkResponsive = function (e, t) {
    var o, s, n, r = this,
      l = !1,
      d = r.$slider.width(),
      a = window.innerWidth || i(window).width();
    if ("window" === r.respondTo ? n = a : "slider" === r.respondTo ? n = d : "min" === r.respondTo && (n = Math.min(a, d)), r.options.responsive && r.options.responsive.length && null !== r.options.responsive) {
      s = null;
      for (o in r.breakpoints) r.breakpoints.hasOwnProperty(o) && (!1 === r.originalSettings.mobileFirst ? n < r.breakpoints[o] && (s = r.breakpoints[o]) : n > r.breakpoints[o] && (s = r.breakpoints[o]));
      null !== s ? null !== r.activeBreakpoint ? (s !== r.activeBreakpoint || t) && (r.activeBreakpoint = s, "unslick" === r.breakpointSettings[s] ? r.unslick(s) : (r.options = i.extend({}, r.originalSettings, r.breakpointSettings[s]), !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e)), l = s) : (r.activeBreakpoint = s, "unslick" === r.breakpointSettings[s] ? r.unslick(s) : (r.options = i.extend({}, r.originalSettings, r.breakpointSettings[s]), !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e)), l = s) : null !== r.activeBreakpoint && (r.activeBreakpoint = null, r.options = r.originalSettings, !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e), l = s), e || !1 === l || r.$slider.trigger("breakpoint", [r, l])
    }
  }, e.prototype.changeSlide = function (e, t) {
    var o, s, n, r = this,
      l = i(e.currentTarget);
    switch (l.is("a") && e.preventDefault(), l.is("li") || (l = l.closest("li")), n = r.slideCount % r.options.slidesToScroll != 0, o = n ? 0 : (r.slideCount - r.currentSlide) % r.options.slidesToScroll, e.data.message) {
      case "previous":
        s = 0 === o ? r.options.slidesToScroll : r.options.slidesToShow - o, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide - s, !1, t);
        break;
      case "next":
        s = 0 === o ? r.options.slidesToScroll : o, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide + s, !1, t);
        break;
      case "index":
        var d = 0 === e.data.index ? 0 : e.data.index || l.index() * r.options.slidesToScroll;
        r.slideHandler(r.checkNavigable(d), !1, t), l.children().trigger("focus");
        break;
      default:
        return
    }
  }, e.prototype.checkNavigable = function (i) {
    var e, t;
    if (e = this.getNavigableIndexes(), t = 0, i > e[e.length - 1]) i = e[e.length - 1];
    else
      for (var o in e) {
        if (i < e[o]) { i = t; break }
        t = e[o]
      }
    return i
  }, e.prototype.cleanUpEvents = function () {
    var e = this;
    e.options.dots && null !== e.$dots && (i("li", e.$dots).off("click.slick", e.changeSlide).off("mouseenter.slick", i.proxy(e.interrupt, e, !0)).off("mouseleave.slick", i.proxy(e.interrupt, e, !1)), !0 === e.options.accessibility && e.$dots.off("keydown.slick", e.keyHandler)), e.$slider.off("focus.slick blur.slick"), !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow && e.$prevArrow.off("click.slick", e.changeSlide), e.$nextArrow && e.$nextArrow.off("click.slick", e.changeSlide), !0 === e.options.accessibility && (e.$prevArrow && e.$prevArrow.off("keydown.slick", e.keyHandler), e.$nextArrow && e.$nextArrow.off("keydown.slick", e.keyHandler))), e.$list.off("touchstart.slick mousedown.slick", e.swipeHandler), e.$list.off("touchmove.slick mousemove.slick", e.swipeHandler), e.$list.off("touchend.slick mouseup.slick", e.swipeHandler), e.$list.off("touchcancel.slick mouseleave.slick", e.swipeHandler), e.$list.off("click.slick", e.clickHandler), i(document).off(e.visibilityChange, e.visibility), e.cleanUpSlideEvents(), !0 === e.options.accessibility && e.$list.off("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().off("click.slick", e.selectHandler), i(window).off("orientationchange.slick.slick-" + e.instanceUid, e.orientationChange), i(window).off("resize.slick.slick-" + e.instanceUid, e.resize), i("[draggable!=true]", e.$slideTrack).off("dragstart", e.preventDefault), i(window).off("load.slick.slick-" + e.instanceUid, e.setPosition)
  }, e.prototype.cleanUpSlideEvents = function () {
    var e = this;
    e.$list.off("mouseenter.slick", i.proxy(e.interrupt, e, !0)), e.$list.off("mouseleave.slick", i.proxy(e.interrupt, e, !1))
  }, e.prototype.cleanUpRows = function () {
    var i, e = this;
    e.options.rows > 1 && ((i = e.$slides.children().children()).removeAttr("style"), e.$slider.empty().append(i))
  }, e.prototype.clickHandler = function (i) { !1 === this.shouldClick && (i.stopImmediatePropagation(), i.stopPropagation(), i.preventDefault()) }, e.prototype.destroy = function (e) {
    var t = this;
    t.autoPlayClear(), t.touchObject = {}, t.cleanUpEvents(), i(".slick-cloned", t.$slider).detach(), t.$dots && t.$dots.remove(), t.$prevArrow && t.$prevArrow.length && (t.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove()), t.$nextArrow && t.$nextArrow.length && (t.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove()), t.$slides && (t.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function () { i(this).attr("style", i(this).data("originalStyling")) }), t.$slideTrack.children(this.options.slide).detach(), t.$slideTrack.detach(), t.$list.detach(), t.$slider.append(t.$slides)), t.cleanUpRows(), t.$slider.removeClass("slick-slider"), t.$slider.removeClass("slick-initialized"), t.$slider.removeClass("slick-dotted"), t.unslicked = !0, e || t.$slider.trigger("destroy", [t])
  }, e.prototype.disableTransition = function (i) {
    var e = this,
      t = {};
    t[e.transitionType] = "", !1 === e.options.fade ? e.$slideTrack.css(t) : e.$slides.eq(i).css(t)
  }, e.prototype.fadeSlide = function (i, e) { var t = this; !1 === t.cssTransitions ? (t.$slides.eq(i).css({ zIndex: t.options.zIndex }), t.$slides.eq(i).animate({ opacity: 1 }, t.options.speed, t.options.easing, e)) : (t.applyTransition(i), t.$slides.eq(i).css({ opacity: 1, zIndex: t.options.zIndex }), e && setTimeout(function () { t.disableTransition(i), e.call() }, t.options.speed)) }, e.prototype.fadeSlideOut = function (i) { var e = this; !1 === e.cssTransitions ? e.$slides.eq(i).animate({ opacity: 0, zIndex: e.options.zIndex - 2 }, e.options.speed, e.options.easing) : (e.applyTransition(i), e.$slides.eq(i).css({ opacity: 0, zIndex: e.options.zIndex - 2 })) }, e.prototype.filterSlides = e.prototype.slickFilter = function (i) {
    var e = this;
    null !== i && (e.$slidesCache = e.$slides, e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.filter(i).appendTo(e.$slideTrack), e.reinit())
  }, e.prototype.focusHandler = function () {
    var e = this;
    e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*", function (t) {
      t.stopImmediatePropagation();
      var o = i(this);
      setTimeout(function () { e.options.pauseOnFocus && (e.focussed = o.is(":focus"), e.autoPlay()) }, 0)
    })
  }, e.prototype.getCurrent = e.prototype.slickCurrentSlide = function () { return this.currentSlide }, e.prototype.getDotCount = function () {
    var i = this,
      e = 0,
      t = 0,
      o = 0;
    if (!0 === i.options.infinite)
      if (i.slideCount <= i.options.slidesToShow) ++o;
      else
        for (; e < i.slideCount;) ++o, e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
    else if (!0 === i.options.centerMode) o = i.slideCount;
    else if (i.options.asNavFor)
      for (; e < i.slideCount;) ++o, e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
    else o = 1 + Math.ceil((i.slideCount - i.options.slidesToShow) / i.options.slidesToScroll);
    return o - 1
  }, e.prototype.getLeft = function (i) {
    var e, t, o, s, n = this,
      r = 0;
    return n.slideOffset = 0, t = n.$slides.first().outerHeight(!0), !0 === n.options.infinite ? (n.slideCount > n.options.slidesToShow && (n.slideOffset = n.slideWidth * n.options.slidesToShow * -1, s = -1, !0 === n.options.vertical && !0 === n.options.centerMode && (2 === n.options.slidesToShow ? s = -1.5 : 1 === n.options.slidesToShow && (s = -2)), r = t * n.options.slidesToShow * s), n.slideCount % n.options.slidesToScroll != 0 && i + n.options.slidesToScroll > n.slideCount && n.slideCount > n.options.slidesToShow && (i > n.slideCount ? (n.slideOffset = (n.options.slidesToShow - (i - n.slideCount)) * n.slideWidth * -1, r = (n.options.slidesToShow - (i - n.slideCount)) * t * -1) : (n.slideOffset = n.slideCount % n.options.slidesToScroll * n.slideWidth * -1, r = n.slideCount % n.options.slidesToScroll * t * -1))) : i + n.options.slidesToShow > n.slideCount && (n.slideOffset = (i + n.options.slidesToShow - n.slideCount) * n.slideWidth, r = (i + n.options.slidesToShow - n.slideCount) * t), n.slideCount <= n.options.slidesToShow && (n.slideOffset = 0, r = 0), !0 === n.options.centerMode && n.slideCount <= n.options.slidesToShow ? n.slideOffset = n.slideWidth * Math.floor(n.options.slidesToShow) / 2 - n.slideWidth * n.slideCount / 2 : !0 === n.options.centerMode && !0 === n.options.infinite ? n.slideOffset += n.slideWidth * Math.floor(n.options.slidesToShow / 2) - n.slideWidth : !0 === n.options.centerMode && (n.slideOffset = 0, n.slideOffset += n.slideWidth * Math.floor(n.options.slidesToShow / 2)), e = !1 === n.options.vertical ? i * n.slideWidth * -1 + n.slideOffset : i * t * -1 + r, !0 === n.options.variableWidth && (o = n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite ? n.$slideTrack.children(".slick-slide").eq(i) : n.$slideTrack.children(".slick-slide").eq(i + n.options.slidesToShow), e = !0 === n.options.rtl ? o[0] ? -1 * (n.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, !0 === n.options.centerMode && (o = n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite ? n.$slideTrack.children(".slick-slide").eq(i) : n.$slideTrack.children(".slick-slide").eq(i + n.options.slidesToShow + 1), e = !0 === n.options.rtl ? o[0] ? -1 * (n.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, e += (n.$list.width() - o.outerWidth()) / 2)), e
  }, e.prototype.getOption = e.prototype.slickGetOption = function (i) { return this.options[i] }, e.prototype.getNavigableIndexes = function () {
    var i, e = this,
      t = 0,
      o = 0,
      s = [];
    for (!1 === e.options.infinite ? i = e.slideCount : (t = -1 * e.options.slidesToScroll, o = -1 * e.options.slidesToScroll, i = 2 * e.slideCount); t < i;) s.push(t), t = o + e.options.slidesToScroll, o += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow;
    return s
  }, e.prototype.getSlick = function () { return this }, e.prototype.getSlideCount = function () { var e, t, o = this; return t = !0 === o.options.centerMode ? o.slideWidth * Math.floor(o.options.slidesToShow / 2) : 0, !0 === o.options.swipeToSlide ? (o.$slideTrack.find(".slick-slide").each(function (s, n) { if (n.offsetLeft - t + i(n).outerWidth() / 2 > -1 * o.swipeLeft) return e = n, !1 }), Math.abs(i(e).attr("data-slick-index") - o.currentSlide) || 1) : o.options.slidesToScroll }, e.prototype.goTo = e.prototype.slickGoTo = function (i, e) { this.changeSlide({ data: { message: "index", index: parseInt(i) } }, e) }, e.prototype.init = function (e) {
    var t = this;
    i(t.$slider).hasClass("slick-initialized") || (i(t.$slider).addClass("slick-initialized"), t.buildRows(), t.buildOut(), t.setProps(), t.startLoad(), t.loadSlider(), t.initializeEvents(), t.updateArrows(), t.updateDots(), t.checkResponsive(!0), t.focusHandler()), e && t.$slider.trigger("init", [t]), !0 === t.options.accessibility && t.initADA(), t.options.autoplay && (t.paused = !1, t.autoPlay())
  }, e.prototype.initADA = function () {
    var e = this,
      t = Math.ceil(e.slideCount / e.options.slidesToShow),
      o = e.getNavigableIndexes().filter(function (i) { return i >= 0 && i < e.slideCount });
    e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({ "aria-hidden": "true", tabindex: "-1" }).find("a, input, button, select").attr({ tabindex: "-1" }), null !== e.$dots && (e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function (t) {
      var s = o.indexOf(t);
      i(this).attr({ role: "tabpanel", id: "slick-slide" + e.instanceUid + t, tabindex: -1 }), -1 !== s && i(this).attr({ "aria-describedby": "slick-slide-control" + e.instanceUid + s })
    }), e.$dots.attr("role", "tablist").find("li").each(function (s) {
      var n = o[s];
      i(this).attr({ role: "presentation" }), i(this).find("button").first().attr({ role: "tab", id: "slick-slide-control" + e.instanceUid + s, "aria-controls": "slick-slide" + e.instanceUid + n, "aria-label": s + 1 + " of " + t, "aria-selected": null, tabindex: "-1" })
    }).eq(e.currentSlide).find("button").attr({ "aria-selected": "true", tabindex: "0" }).end());
    for (var s = e.currentSlide, n = s + e.options.slidesToShow; s < n; s++) e.$slides.eq(s).attr("tabindex", 0);
    e.activateADA()
  }, e.prototype.initArrowEvents = function () { var i = this; !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.off("click.slick").on("click.slick", { message: "previous" }, i.changeSlide), i.$nextArrow.off("click.slick").on("click.slick", { message: "next" }, i.changeSlide), !0 === i.options.accessibility && (i.$prevArrow.on("keydown.slick", i.keyHandler), i.$nextArrow.on("keydown.slick", i.keyHandler))) }, e.prototype.initDotEvents = function () { var e = this; !0 === e.options.dots && (i("li", e.$dots).on("click.slick", { message: "index" }, e.changeSlide), !0 === e.options.accessibility && e.$dots.on("keydown.slick", e.keyHandler)), !0 === e.options.dots && !0 === e.options.pauseOnDotsHover && i("li", e.$dots).on("mouseenter.slick", i.proxy(e.interrupt, e, !0)).on("mouseleave.slick", i.proxy(e.interrupt, e, !1)) }, e.prototype.initSlideEvents = function () {
    var e = this;
    e.options.pauseOnHover && (e.$list.on("mouseenter.slick", i.proxy(e.interrupt, e, !0)), e.$list.on("mouseleave.slick", i.proxy(e.interrupt, e, !1)))
  }, e.prototype.initializeEvents = function () {
    var e = this;
    e.initArrowEvents(), e.initDotEvents(), e.initSlideEvents(), e.$list.on("touchstart.slick mousedown.slick", { action: "start" }, e.swipeHandler), e.$list.on("touchmove.slick mousemove.slick", { action: "move" }, e.swipeHandler), e.$list.on("touchend.slick mouseup.slick", { action: "end" }, e.swipeHandler), e.$list.on("touchcancel.slick mouseleave.slick", { action: "end" }, e.swipeHandler), e.$list.on("click.slick", e.clickHandler), i(document).on(e.visibilityChange, i.proxy(e.visibility, e)), !0 === e.options.accessibility && e.$list.on("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().on("click.slick", e.selectHandler), i(window).on("orientationchange.slick.slick-" + e.instanceUid, i.proxy(e.orientationChange, e)), i(window).on("resize.slick.slick-" + e.instanceUid, i.proxy(e.resize, e)), i("[draggable!=true]", e.$slideTrack).on("dragstart", e.preventDefault), i(window).on("load.slick.slick-" + e.instanceUid, e.setPosition), i(e.setPosition)
  }, e.prototype.initUI = function () { var i = this; !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.show(), i.$nextArrow.show()), !0 === i.options.dots && i.slideCount > i.options.slidesToShow && i.$dots.show() }, e.prototype.keyHandler = function (i) {
    var e = this;
    i.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === i.keyCode && !0 === e.options.accessibility ? e.changeSlide({ data: { message: !0 === e.options.rtl ? "next" : "previous" } }) : 39 === i.keyCode && !0 === e.options.accessibility && e.changeSlide({ data: { message: !0 === e.options.rtl ? "previous" : "next" } }))
  }, e.prototype.lazyLoad = function () {
    function e(e) {
      i("img[data-lazy]", e).each(function () {
        var e = i(this),
          t = i(this).attr("data-lazy"),
          o = i(this).attr("data-srcset"),
          s = i(this).attr("data-sizes") || n.$slider.attr("data-sizes"),
          r = document.createElement("img");
        r.onload = function () { e.animate({ opacity: 0 }, 100, function () { o && (e.attr("srcset", o), s && e.attr("sizes", s)), e.attr("src", t).animate({ opacity: 1 }, 200, function () { e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading") }), n.$slider.trigger("lazyLoaded", [n, e, t]) }) }, r.onerror = function () { e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), n.$slider.trigger("lazyLoadError", [n, e, t]) }, r.src = t
      })
    }
    var t, o, s, n = this;
    if (!0 === n.options.centerMode ? !0 === n.options.infinite ? s = (o = n.currentSlide + (n.options.slidesToShow / 2 + 1)) + n.options.slidesToShow + 2 : (o = Math.max(0, n.currentSlide - (n.options.slidesToShow / 2 + 1)), s = n.options.slidesToShow / 2 + 1 + 2 + n.currentSlide) : (o = n.options.infinite ? n.options.slidesToShow + n.currentSlide : n.currentSlide, s = Math.ceil(o + n.options.slidesToShow), !0 === n.options.fade && (o > 0 && o--, s <= n.slideCount && s++)), t = n.$slider.find(".slick-slide").slice(o, s), "anticipated" === n.options.lazyLoad)
      for (var r = o - 1, l = s, d = n.$slider.find(".slick-slide"), a = 0; a < n.options.slidesToScroll; a++) r < 0 && (r = n.slideCount - 1), t = (t = t.add(d.eq(r))).add(d.eq(l)), r--, l++;
    e(t), n.slideCount <= n.options.slidesToShow ? e(n.$slider.find(".slick-slide")) : n.currentSlide >= n.slideCount - n.options.slidesToShow ? e(n.$slider.find(".slick-cloned").slice(0, n.options.slidesToShow)) : 0 === n.currentSlide && e(n.$slider.find(".slick-cloned").slice(-1 * n.options.slidesToShow))
  }, e.prototype.loadSlider = function () {
    var i = this;
    i.setPosition(), i.$slideTrack.css({ opacity: 1 }), i.$slider.removeClass("slick-loading"), i.initUI(), "progressive" === i.options.lazyLoad && i.progressiveLazyLoad()
  }, e.prototype.next = e.prototype.slickNext = function () { this.changeSlide({ data: { message: "next" } }) }, e.prototype.orientationChange = function () {
    var i = this;
    i.checkResponsive(), i.setPosition()
  }, e.prototype.pause = e.prototype.slickPause = function () {
    var i = this;
    i.autoPlayClear(), i.paused = !0
  }, e.prototype.play = e.prototype.slickPlay = function () {
    var i = this;
    i.autoPlay(), i.options.autoplay = !0, i.paused = !1, i.focussed = !1, i.interrupted = !1
  }, e.prototype.postSlide = function (e) {
    var t = this;
    t.unslicked || (t.$slider.trigger("afterChange", [t, e]), t.animating = !1, t.slideCount > t.options.slidesToShow && t.setPosition(), t.swipeLeft = null, t.options.autoplay && t.autoPlay(), !0 === t.options.accessibility && (t.initADA(), t.options.focusOnChange && i(t.$slides.get(t.currentSlide)).attr("tabindex", 0).focus()))
  }, e.prototype.prev = e.prototype.slickPrev = function () { this.changeSlide({ data: { message: "previous" } }) }, e.prototype.preventDefault = function (i) { i.preventDefault() }, e.prototype.progressiveLazyLoad = function (e) {
    e = e || 1;
    var t, o, s, n, r, l = this,
      d = i("img[data-lazy]", l.$slider);
    d.length ? (t = d.first(), o = t.attr("data-lazy"), s = t.attr("data-srcset"), n = t.attr("data-sizes") || l.$slider.attr("data-sizes"), (r = document.createElement("img")).onload = function () { s && (t.attr("srcset", s), n && t.attr("sizes", n)), t.attr("src", o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"), !0 === l.options.adaptiveHeight && l.setPosition(), l.$slider.trigger("lazyLoaded", [l, t, o]), l.progressiveLazyLoad() }, r.onerror = function () { e < 3 ? setTimeout(function () { l.progressiveLazyLoad(e + 1) }, 500) : (t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), l.$slider.trigger("lazyLoadError", [l, t, o]), l.progressiveLazyLoad()) }, r.src = o) : l.$slider.trigger("allImagesLoaded", [l])
  }, e.prototype.refresh = function (e) {
    var t, o, s = this;
    o = s.slideCount - s.options.slidesToShow, !s.options.infinite && s.currentSlide > o && (s.currentSlide = o), s.slideCount <= s.options.slidesToShow && (s.currentSlide = 0), t = s.currentSlide, s.destroy(!0), i.extend(s, s.initials, { currentSlide: t }), s.init(), e || s.changeSlide({ data: { message: "index", index: t } }, !1)
  }, e.prototype.registerBreakpoints = function () {
    var e, t, o, s = this,
      n = s.options.responsive || null;
    if ("array" === i.type(n) && n.length) {
      s.respondTo = s.options.respondTo || "window";
      for (e in n)
        if (o = s.breakpoints.length - 1, n.hasOwnProperty(e)) {
          for (t = n[e].breakpoint; o >= 0;) s.breakpoints[o] && s.breakpoints[o] === t && s.breakpoints.splice(o, 1), o--;
          s.breakpoints.push(t), s.breakpointSettings[t] = n[e].settings
        }
      s.breakpoints.sort(function (i, e) { return s.options.mobileFirst ? i - e : e - i })
    }
  }, e.prototype.reinit = function () {
    var e = this;
    e.$slides = e.$slideTrack.children(e.options.slide).addClass("slick-slide"), e.slideCount = e.$slides.length, e.currentSlide >= e.slideCount && 0 !== e.currentSlide && (e.currentSlide = e.currentSlide - e.options.slidesToScroll), e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0), e.registerBreakpoints(), e.setProps(), e.setupInfinite(), e.buildArrows(), e.updateArrows(), e.initArrowEvents(), e.buildDots(), e.updateDots(), e.initDotEvents(), e.cleanUpSlideEvents(), e.initSlideEvents(), e.checkResponsive(!1, !0), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().on("click.slick", e.selectHandler), e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), e.setPosition(), e.focusHandler(), e.paused = !e.options.autoplay, e.autoPlay(), e.$slider.trigger("reInit", [e])
  }, e.prototype.resize = function () {
    var e = this;
    i(window).width() !== e.windowWidth && (clearTimeout(e.windowDelay), e.windowDelay = window.setTimeout(function () { e.windowWidth = i(window).width(), e.checkResponsive(), e.unslicked || e.setPosition() }, 50))
  }, e.prototype.removeSlide = e.prototype.slickRemove = function (i, e, t) {
    var o = this;
    if (i = "boolean" == typeof i ? !0 === (e = i) ? 0 : o.slideCount - 1 : !0 === e ? --i : i, o.slideCount < 1 || i < 0 || i > o.slideCount - 1) return !1;
    o.unload(), !0 === t ? o.$slideTrack.children().remove() : o.$slideTrack.children(this.options.slide).eq(i).remove(), o.$slides = o.$slideTrack.children(this.options.slide), o.$slideTrack.children(this.options.slide).detach(), o.$slideTrack.append(o.$slides), o.$slidesCache = o.$slides, o.reinit()
  }, e.prototype.setCSS = function (i) {
    var e, t, o = this,
      s = {};
    !0 === o.options.rtl && (i = -i), e = "left" == o.positionProp ? Math.ceil(i) + "px" : "0px", t = "top" == o.positionProp ? Math.ceil(i) + "px" : "0px", s[o.positionProp] = i, !1 === o.transformsEnabled ? o.$slideTrack.css(s) : (s = {}, !1 === o.cssTransitions ? (s[o.animType] = "translate(" + e + ", " + t + ")", o.$slideTrack.css(s)) : (s[o.animType] = "translate3d(" + e + ", " + t + ", 0px)", o.$slideTrack.css(s)))
  }, e.prototype.setDimensions = function () { var i = this; !1 === i.options.vertical ? !0 === i.options.centerMode && i.$list.css({ padding: "0px " + i.options.centerPadding }) : (i.$list.height(i.$slides.first().outerHeight(!0) * i.options.slidesToShow), !0 === i.options.centerMode && i.$list.css({ padding: i.options.centerPadding + " 0px" })), i.listWidth = i.$list.width(), i.listHeight = i.$list.height(), !1 === i.options.vertical && !1 === i.options.variableWidth ? (i.slideWidth = Math.ceil(i.listWidth / i.options.slidesToShow), i.$slideTrack.width(Math.ceil(i.slideWidth * i.$slideTrack.children(".slick-slide").length))) : !0 === i.options.variableWidth ? i.$slideTrack.width(5e3 * i.slideCount) : (i.slideWidth = Math.ceil(i.listWidth), i.$slideTrack.height(Math.ceil(i.$slides.first().outerHeight(!0) * i.$slideTrack.children(".slick-slide").length))); var e = i.$slides.first().outerWidth(!0) - i.$slides.first().width(); !1 === i.options.variableWidth && i.$slideTrack.children(".slick-slide").width(i.slideWidth - e) }, e.prototype.setFade = function () {
    var e, t = this;
    t.$slides.each(function (o, s) { e = t.slideWidth * o * -1, !0 === t.options.rtl ? i(s).css({ position: "relative", right: e, top: 0, zIndex: t.options.zIndex - 2, opacity: 0 }) : i(s).css({ position: "relative", left: e, top: 0, zIndex: t.options.zIndex - 2, opacity: 0 }) }), t.$slides.eq(t.currentSlide).css({ zIndex: t.options.zIndex - 1, opacity: 1 })
  }, e.prototype.setHeight = function () {
    var i = this;
    if (1 === i.options.slidesToShow && !0 === i.options.adaptiveHeight && !1 === i.options.vertical) {
      var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
      i.$list.css("height", e)
    }
  }, e.prototype.setOption = e.prototype.slickSetOption = function () {
    var e, t, o, s, n, r = this,
      l = !1;
    if ("object" === i.type(arguments[0]) ? (o = arguments[0], l = arguments[1], n = "multiple") : "string" === i.type(arguments[0]) && (o = arguments[0], s = arguments[1], l = arguments[2], "responsive" === arguments[0] && "array" === i.type(arguments[1]) ? n = "responsive" : void 0 !== arguments[1] && (n = "single")), "single" === n) r.options[o] = s;
    else if ("multiple" === n) i.each(o, function (i, e) { r.options[i] = e });
    else if ("responsive" === n)
      for (t in s)
        if ("array" !== i.type(r.options.responsive)) r.options.responsive = [s[t]];
        else {
          for (e = r.options.responsive.length - 1; e >= 0;) r.options.responsive[e].breakpoint === s[t].breakpoint && r.options.responsive.splice(e, 1), e--;
          r.options.responsive.push(s[t])
        }
    l && (r.unload(), r.reinit())
  }, e.prototype.setPosition = function () {
    var i = this;
    i.setDimensions(), i.setHeight(), !1 === i.options.fade ? i.setCSS(i.getLeft(i.currentSlide)) : i.setFade(), i.$slider.trigger("setPosition", [i])
  }, e.prototype.setProps = function () {
    var i = this,
      e = document.body.style;
    i.positionProp = !0 === i.options.vertical ? "top" : "left", "top" === i.positionProp ? i.$slider.addClass("slick-vertical") : i.$slider.removeClass("slick-vertical"), void 0 === e.WebkitTransition && void 0 === e.MozTransition && void 0 === e.msTransition || !0 === i.options.useCSS && (i.cssTransitions = !0), i.options.fade && ("number" == typeof i.options.zIndex ? i.options.zIndex < 3 && (i.options.zIndex = 3) : i.options.zIndex = i.defaults.zIndex), void 0 !== e.OTransform && (i.animType = "OTransform", i.transformType = "-o-transform", i.transitionType = "OTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (i.animType = !1)), void 0 !== e.MozTransform && (i.animType = "MozTransform", i.transformType = "-moz-transform", i.transitionType = "MozTransition", void 0 === e.perspectiveProperty && void 0 === e.MozPerspective && (i.animType = !1)), void 0 !== e.webkitTransform && (i.animType = "webkitTransform", i.transformType = "-webkit-transform", i.transitionType = "webkitTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (i.animType = !1)), void 0 !== e.msTransform && (i.animType = "msTransform", i.transformType = "-ms-transform", i.transitionType = "msTransition", void 0 === e.msTransform && (i.animType = !1)), void 0 !== e.transform && !1 !== i.animType && (i.animType = "transform", i.transformType = "transform", i.transitionType = "transition"), i.transformsEnabled = i.options.useTransform && null !== i.animType && !1 !== i.animType
  }, e.prototype.setSlideClasses = function (i) {
    var e, t, o, s, n = this;
    if (t = n.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"), n.$slides.eq(i).addClass("slick-current"), !0 === n.options.centerMode) {
      var r = n.options.slidesToShow % 2 == 0 ? 1 : 0;
      e = Math.floor(n.options.slidesToShow / 2), !0 === n.options.infinite && (i >= e && i <= n.slideCount - 1 - e ? n.$slides.slice(i - e + r, i + e + 1).addClass("slick-active").attr("aria-hidden", "false") : (o = n.options.slidesToShow + i, t.slice(o - e + 1 + r, o + e + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === i ? t.eq(t.length - 1 - n.options.slidesToShow).addClass("slick-center") : i === n.slideCount - 1 && t.eq(n.options.slidesToShow).addClass("slick-center")), n.$slides.eq(i).addClass("slick-center")
    } else i >= 0 && i <= n.slideCount - n.options.slidesToShow ? n.$slides.slice(i, i + n.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : t.length <= n.options.slidesToShow ? t.addClass("slick-active").attr("aria-hidden", "false") : (s = n.slideCount % n.options.slidesToShow, o = !0 === n.options.infinite ? n.options.slidesToShow + i : i, n.options.slidesToShow == n.options.slidesToScroll && n.slideCount - i < n.options.slidesToShow ? t.slice(o - (n.options.slidesToShow - s), o + s).addClass("slick-active").attr("aria-hidden", "false") : t.slice(o, o + n.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false"));
    "ondemand" !== n.options.lazyLoad && "anticipated" !== n.options.lazyLoad || n.lazyLoad()
  }, e.prototype.setupInfinite = function () {
    var e, t, o, s = this;
    if (!0 === s.options.fade && (s.options.centerMode = !1), !0 === s.options.infinite && !1 === s.options.fade && (t = null, s.slideCount > s.options.slidesToShow)) {
      for (o = !0 === s.options.centerMode ? s.options.slidesToShow + 1 : s.options.slidesToShow, e = s.slideCount; e > s.slideCount - o; e -= 1) t = e - 1, i(s.$slides[t]).clone(!0).attr("id", "").attr("data-slick-index", t - s.slideCount).prependTo(s.$slideTrack).addClass("slick-cloned");
      for (e = 0; e < o + s.slideCount; e += 1) t = e, i(s.$slides[t]).clone(!0).attr("id", "").attr("data-slick-index", t + s.slideCount).appendTo(s.$slideTrack).addClass("slick-cloned");
      s.$slideTrack.find(".slick-cloned").find("[id]").each(function () { i(this).attr("id", "") })
    }
  }, e.prototype.interrupt = function (i) {
    var e = this;
    i || e.autoPlay(), e.interrupted = i
  }, e.prototype.selectHandler = function (e) {
    var t = this,
      o = i(e.target).is(".slick-slide") ? i(e.target) : i(e.target).parents(".slick-slide"),
      s = parseInt(o.attr("data-slick-index"));
    s || (s = 0), t.slideCount <= t.options.slidesToShow ? t.slideHandler(s, !1, !0) : t.slideHandler(s)
  }, e.prototype.slideHandler = function (i, e, t) {
    var o, s, n, r, l, d = null,
      a = this;
    if (e = e || !1, !(!0 === a.animating && !0 === a.options.waitForAnimate || !0 === a.options.fade && a.currentSlide === i))
      if (!1 === e && a.asNavFor(i), o = i, d = a.getLeft(o), r = a.getLeft(a.currentSlide), a.currentLeft = null === a.swipeLeft ? r : a.swipeLeft, !1 === a.options.infinite && !1 === a.options.centerMode && (i < 0 || i > a.getDotCount() * a.options.slidesToScroll)) !1 === a.options.fade && (o = a.currentSlide, !0 !== t ? a.animateSlide(r, function () { a.postSlide(o) }) : a.postSlide(o));
      else if (!1 === a.options.infinite && !0 === a.options.centerMode && (i < 0 || i > a.slideCount - a.options.slidesToScroll)) !1 === a.options.fade && (o = a.currentSlide, !0 !== t ? a.animateSlide(r, function () { a.postSlide(o) }) : a.postSlide(o));
      else { if (a.options.autoplay && clearInterval(a.autoPlayTimer), s = o < 0 ? a.slideCount % a.options.slidesToScroll != 0 ? a.slideCount - a.slideCount % a.options.slidesToScroll : a.slideCount + o : o >= a.slideCount ? a.slideCount % a.options.slidesToScroll != 0 ? 0 : o - a.slideCount : o, a.animating = !0, a.$slider.trigger("beforeChange", [a, a.currentSlide, s]), n = a.currentSlide, a.currentSlide = s, a.setSlideClasses(a.currentSlide), a.options.asNavFor && (l = (l = a.getNavTarget()).slick("getSlick")).slideCount <= l.options.slidesToShow && l.setSlideClasses(a.currentSlide), a.updateDots(), a.updateArrows(), !0 === a.options.fade) return !0 !== t ? (a.fadeSlideOut(n), a.fadeSlide(s, function () { a.postSlide(s) })) : a.postSlide(s), void a.animateHeight(); !0 !== t ? a.animateSlide(d, function () { a.postSlide(s) }) : a.postSlide(s) }
  }, e.prototype.startLoad = function () { var i = this; !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.hide(), i.$nextArrow.hide()), !0 === i.options.dots && i.slideCount > i.options.slidesToShow && i.$dots.hide(), i.$slider.addClass("slick-loading") }, e.prototype.swipeDirection = function () { var i, e, t, o, s = this; return i = s.touchObject.startX - s.touchObject.curX, e = s.touchObject.startY - s.touchObject.curY, t = Math.atan2(e, i), (o = Math.round(180 * t / Math.PI)) < 0 && (o = 360 - Math.abs(o)), o <= 45 && o >= 0 ? !1 === s.options.rtl ? "left" : "right" : o <= 360 && o >= 315 ? !1 === s.options.rtl ? "left" : "right" : o >= 135 && o <= 225 ? !1 === s.options.rtl ? "right" : "left" : !0 === s.options.verticalSwiping ? o >= 35 && o <= 135 ? "down" : "up" : "vertical" }, e.prototype.swipeEnd = function (i) {
    var e, t, o = this;
    if (o.dragging = !1, o.swiping = !1, o.scrolling) return o.scrolling = !1, !1;
    if (o.interrupted = !1, o.shouldClick = !(o.touchObject.swipeLength > 10), void 0 === o.touchObject.curX) return !1;
    if (!0 === o.touchObject.edgeHit && o.$slider.trigger("edge", [o, o.swipeDirection()]), o.touchObject.swipeLength >= o.touchObject.minSwipe) {
      switch (t = o.swipeDirection()) {
        case "left":
        case "down":
          e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide + o.getSlideCount()) : o.currentSlide + o.getSlideCount(), o.currentDirection = 0;
          break;
        case "right":
        case "up":
          e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide - o.getSlideCount()) : o.currentSlide - o.getSlideCount(), o.currentDirection = 1
      }
      "vertical" != t && (o.slideHandler(e), o.touchObject = {}, o.$slider.trigger("swipe", [o, t]))
    } else o.touchObject.startX !== o.touchObject.curX && (o.slideHandler(o.currentSlide), o.touchObject = {})
  }, e.prototype.swipeHandler = function (i) {
    var e = this;
    if (!(!1 === e.options.swipe || "ontouchend" in document && !1 === e.options.swipe || !1 === e.options.draggable && -1 !== i.type.indexOf("mouse"))) switch (e.touchObject.fingerCount = i.originalEvent && void 0 !== i.originalEvent.touches ? i.originalEvent.touches.length : 1, e.touchObject.minSwipe = e.listWidth / e.options.touchThreshold, !0 === e.options.verticalSwiping && (e.touchObject.minSwipe = e.listHeight / e.options.touchThreshold), i.data.action) {
      case "start":
        e.swipeStart(i);
        break;
      case "move":
        e.swipeMove(i);
        break;
      case "end":
        e.swipeEnd(i)
    }
  }, e.prototype.swipeMove = function (i) { var e, t, o, s, n, r, l = this; return n = void 0 !== i.originalEvent ? i.originalEvent.touches : null, !(!l.dragging || l.scrolling || n && 1 !== n.length) && (e = l.getLeft(l.currentSlide), l.touchObject.curX = void 0 !== n ? n[0].pageX : i.clientX, l.touchObject.curY = void 0 !== n ? n[0].pageY : i.clientY, l.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(l.touchObject.curX - l.touchObject.startX, 2))), r = Math.round(Math.sqrt(Math.pow(l.touchObject.curY - l.touchObject.startY, 2))), !l.options.verticalSwiping && !l.swiping && r > 4 ? (l.scrolling = !0, !1) : (!0 === l.options.verticalSwiping && (l.touchObject.swipeLength = r), t = l.swipeDirection(), void 0 !== i.originalEvent && l.touchObject.swipeLength > 4 && (l.swiping = !0, i.preventDefault()), s = (!1 === l.options.rtl ? 1 : -1) * (l.touchObject.curX > l.touchObject.startX ? 1 : -1), !0 === l.options.verticalSwiping && (s = l.touchObject.curY > l.touchObject.startY ? 1 : -1), o = l.touchObject.swipeLength, l.touchObject.edgeHit = !1, !1 === l.options.infinite && (0 === l.currentSlide && "right" === t || l.currentSlide >= l.getDotCount() && "left" === t) && (o = l.touchObject.swipeLength * l.options.edgeFriction, l.touchObject.edgeHit = !0), !1 === l.options.vertical ? l.swipeLeft = e + o * s : l.swipeLeft = e + o * (l.$list.height() / l.listWidth) * s, !0 === l.options.verticalSwiping && (l.swipeLeft = e + o * s), !0 !== l.options.fade && !1 !== l.options.touchMove && (!0 === l.animating ? (l.swipeLeft = null, !1) : void l.setCSS(l.swipeLeft)))) }, e.prototype.swipeStart = function (i) {
    var e, t = this;
    if (t.interrupted = !0, 1 !== t.touchObject.fingerCount || t.slideCount <= t.options.slidesToShow) return t.touchObject = {}, !1;
    void 0 !== i.originalEvent && void 0 !== i.originalEvent.touches && (e = i.originalEvent.touches[0]), t.touchObject.startX = t.touchObject.curX = void 0 !== e ? e.pageX : i.clientX, t.touchObject.startY = t.touchObject.curY = void 0 !== e ? e.pageY : i.clientY, t.dragging = !0
  }, e.prototype.unfilterSlides = e.prototype.slickUnfilter = function () {
    var i = this;
    null !== i.$slidesCache && (i.unload(), i.$slideTrack.children(this.options.slide).detach(), i.$slidesCache.appendTo(i.$slideTrack), i.reinit())
  }, e.prototype.unload = function () {
    var e = this;
    i(".slick-cloned", e.$slider).remove(), e.$dots && e.$dots.remove(), e.$prevArrow && e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.remove(), e.$nextArrow && e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.remove(), e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
  }, e.prototype.unslick = function (i) {
    var e = this;
    e.$slider.trigger("unslick", [e, i]), e.destroy()
  }, e.prototype.updateArrows = function () {
    var i = this;
    Math.floor(i.options.slidesToShow / 2), !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && !i.options.infinite && (i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === i.currentSlide ? (i.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : i.currentSlide >= i.slideCount - i.options.slidesToShow && !1 === i.options.centerMode ? (i.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : i.currentSlide >= i.slideCount - 1 && !0 === i.options.centerMode && (i.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
  }, e.prototype.updateDots = function () {
    var i = this;
    null !== i.$dots && (i.$dots.find("li").removeClass("slick-active").end(), i.$dots.find("li").eq(Math.floor(i.currentSlide / i.options.slidesToScroll)).addClass("slick-active"))
  }, e.prototype.visibility = function () {
    var i = this;
    i.options.autoplay && (document[i.hidden] ? i.interrupted = !0 : i.interrupted = !1)
  }, i.fn.slick = function () {
    var i, t, o = this,
      s = arguments[0],
      n = Array.prototype.slice.call(arguments, 1),
      r = o.length;
    for (i = 0; i < r; i++)
      if ("object" == typeof s || void 0 === s ? o[i].slick = new e(o[i], s) : t = o[i].slick[s].apply(o[i].slick, n), void 0 !== t) return t;
    return o
  }
});


(function (window, document, $, undefined) {
  "use strict";
  var H = $("html"),
    W = $(window),
    D = $(document),
    F = $.fancybox = function () { F.open.apply(this, arguments); },
    IE = navigator.userAgent.match(/msie/i),
    didUpdate = null,
    isTouch = document.createTouch !== undefined,
    isQuery = function (obj) { return obj && obj.hasOwnProperty && obj instanceof $; },
    isString = function (str) { return str && $.type(str) === "string"; },
    isPercentage = function (str) { return isString(str) && str.indexOf('%') > 0; },
    isScrollable = function (el) { return (el && !(el.style.overflow && el.style.overflow === 'hidden') && ((el.clientWidth && el.scrollWidth > el.clientWidth) || (el.clientHeight && el.scrollHeight > el.clientHeight))); },
    getScalar = function (orig, dim) {
      var value = parseInt(orig, 10) || 0;
      if (dim && isPercentage(orig)) { value = F.getViewport()[dim] / 100 * value; }
      return Math.ceil(value);
    },
    getValue = function (value, dim) { return getScalar(value, dim) + 'px'; };
  $.extend(F, {
    version: '2.1.5',
    defaults: { padding: 15, margin: 20, width: 800, height: 600, minWidth: 100, minHeight: 100, maxWidth: 9999, maxHeight: 9999, pixelRatio: 1, autoSize: true, autoHeight: false, autoWidth: false, autoResize: true, autoCenter: !isTouch, fitToView: true, aspectRatio: false, topRatio: 0.5, leftRatio: 0.5, scrolling: 'auto', wrapCSS: '', arrows: true, closeBtn: true, closeClick: false, nextClick: false, mouseWheel: true, autoPlay: false, playSpeed: 3000, preload: 3, modal: false, loop: true, ajax: { dataType: 'html', headers: { 'X-fancyBox': true } }, iframe: { scrolling: 'auto', preload: true }, swf: { wmode: 'transparent', allowfullscreen: 'true', allowscriptaccess: 'always' }, keys: { next: { 13: 'left', 34: 'up', 39: 'left', 40: 'up' }, prev: { 8: 'right', 33: 'down', 37: 'right', 38: 'down' }, close: [27], play: [32], toggle: [70] }, direction: { next: 'left', prev: 'right' }, scrollOutside: true, index: 0, type: null, href: null, content: null, title: null, tpl: { wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>', image: '<img class="fancybox-image" src="{href}" alt="" />', iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' + (IE ? ' allowtransparency="true"' : '') + '></iframe>', error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>', closeBtn: '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>', next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>', prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>' }, openEffect: 'fade', openSpeed: 250, openEasing: 'swing', openOpacity: true, openMethod: 'zoomIn', closeEffect: 'fade', closeSpeed: 250, closeEasing: 'swing', closeOpacity: true, closeMethod: 'zoomOut', nextEffect: 'elastic', nextSpeed: 250, nextEasing: 'swing', nextMethod: 'changeIn', prevEffect: 'elastic', prevSpeed: 250, prevEasing: 'swing', prevMethod: 'changeOut', helpers: { overlay: true, title: true }, onCancel: $.noop, beforeLoad: $.noop, afterLoad: $.noop, beforeShow: $.noop, afterShow: $.noop, beforeChange: $.noop, beforeClose: $.noop, afterClose: $.noop },
    group: {},
    opts: {},
    previous: null,
    coming: null,
    current: null,
    isActive: false,
    isOpen: false,
    isOpened: false,
    wrap: null,
    skin: null,
    outer: null,
    inner: null,
    player: { timer: null, isActive: false },
    ajaxLoad: null,
    imgPreload: null,
    transitions: {},
    helpers: {},
    open: function (group, opts) {
      if (!group) { return; }
      if (!$.isPlainObject(opts)) { opts = {}; }
      if (false === F.close(true)) { return; }
      if (!$.isArray(group)) { group = isQuery(group) ? $(group).get() : [group]; }
      $.each(group, function (i, element) {
        var obj = {},
          href, title, content, type, rez, hrefParts, selector;
        if ($.type(element) === "object") {
          if (element.nodeType) { element = $(element); }
          if (isQuery(element)) { obj = { href: element.data('fancybox-href') || element.attr('href'), title: element.data('fancybox-title') || element.attr('title'), isDom: true, element: element }; if ($.metadata) { $.extend(true, obj, element.metadata()); } } else { obj = element; }
        }
        href = opts.href || obj.href || (isString(element) ? element : null);
        title = opts.title !== undefined ? opts.title : obj.title || '';
        content = opts.content || obj.content;
        type = content ? 'html' : (opts.type || obj.type);
        if (!type && obj.isDom) {
          type = element.data('fancybox-type');
          if (!type) {
            rez = element.prop('class').match(/fancybox\.(\w+)/);
            type = rez ? rez[1] : null;
          }
        }
        if (isString(href)) {
          if (!type) {
            if (F.isImage(href)) { type = 'image'; } else if (F.isSWF(href)) { type = 'swf'; } else if (href.charAt(0) === '#') { type = 'inline'; } else if (isString(element)) {
              type = 'html';
              content = element;
            }
          }
          if (type === 'ajax') {
            hrefParts = href.split(/\s+/, 2);
            href = hrefParts.shift();
            selector = hrefParts.shift();
          }
        }
        if (!content) {
          if (type === 'inline') { if (href) { content = $(isString(href) ? href.replace(/.*(?=#[^\s]+$)/, '') : href); } else if (obj.isDom) { content = element; } } else if (type === 'html') { content = href; } else if (!type && !href && obj.isDom) {
            type = 'inline';
            content = element;
          }
        }
        $.extend(obj, { href: href, type: type, content: content, title: title, selector: selector });
        group[i] = obj;
      });
      F.opts = $.extend(true, {}, F.defaults, opts);
      if (opts.keys !== undefined) { F.opts.keys = opts.keys ? $.extend({}, F.defaults.keys, opts.keys) : false; }
      F.group = group;
      return F._start(F.opts.index);
    },
    cancel: function () {
      var coming = F.coming;
      if (!coming || false === F.trigger('onCancel')) { return; }
      F.hideLoading();
      if (F.ajaxLoad) { F.ajaxLoad.abort(); }
      F.ajaxLoad = null;
      if (F.imgPreload) { F.imgPreload.onload = F.imgPreload.onerror = null; }
      if (coming.wrap) { coming.wrap.stop(true, true).trigger('onReset').remove(); }
      F.coming = null;
      if (!F.current) { F._afterZoomOut(coming); }
    },
    close: function (event) {
      F.cancel();
      if (false === F.trigger('beforeClose')) { return; }
      F.unbindEvents();
      if (!F.isActive) { return; }
      if (!F.isOpen || event === true) {
        $('.fancybox-wrap').stop(true).trigger('onReset').remove();
        F._afterZoomOut();
      } else {
        F.isOpen = F.isOpened = false;
        F.isClosing = true;
        $('.fancybox-item, .fancybox-nav').remove();
        F.wrap.stop(true, true).removeClass('fancybox-opened');
        F.transitions[F.current.closeMethod]();
      }
    },
    play: function (action) {
      var clear = function () { clearTimeout(F.player.timer); },
        set = function () { clear(); if (F.current && F.player.isActive) { F.player.timer = setTimeout(F.next, F.current.playSpeed); } },
        stop = function () {
          clear();
          D.unbind('.player');
          F.player.isActive = false;
          F.trigger('onPlayEnd');
        },
        start = function () {
          if (F.current && (F.current.loop || F.current.index < F.group.length - 1)) {
            F.player.isActive = true;
            D.bind({ 'onCancel.player beforeClose.player': stop, 'onUpdate.player': set, 'beforeLoad.player': clear });
            set();
            F.trigger('onPlayStart');
          }
        };
      if (action === true || (!F.player.isActive && action !== false)) { start(); } else { stop(); }
    },
    next: function (direction) {
      var current = F.current;
      if (current) {
        if (!isString(direction)) { direction = current.direction.next; }
        F.jumpto(current.index + 1, direction, 'next');
      }
    },
    prev: function (direction) {
      var current = F.current;
      if (current) {
        if (!isString(direction)) { direction = current.direction.prev; }
        F.jumpto(current.index - 1, direction, 'prev');
      }
    },
    jumpto: function (index, direction, router) {
      var current = F.current;
      if (!current) { return; }
      index = getScalar(index);
      F.direction = direction || current.direction[(index >= current.index ? 'next' : 'prev')];
      F.router = router || 'jumpto';
      if (current.loop) {
        if (index < 0) { index = current.group.length + (index % current.group.length); }
        index = index % current.group.length;
      }
      if (current.group[index] !== undefined) {
        F.cancel();
        F._start(index);
      }
    },
    reposition: function (e, onlyAbsolute) {
      var current = F.current,
        wrap = current ? current.wrap : null,
        pos;
      if (wrap) {
        pos = F._getPosition(onlyAbsolute);
        if (e && e.type === 'scroll') {
          delete pos.position;
          wrap.stop(true, true).animate(pos, 200);
        } else {
          wrap.css(pos);
          current.pos = $.extend({}, current.dim, pos);
        }
      }
    },
    update: function (e) {
      var type = (e && e.type),
        anyway = !type || type === 'orientationchange';
      if (anyway) {
        clearTimeout(didUpdate);
        didUpdate = null;
      }
      if (!F.isOpen || didUpdate) { return; }
      didUpdate = setTimeout(function () {
        var current = F.current;
        if (!current || F.isClosing) { return; }
        F.wrap.removeClass('fancybox-tmp');
        if (anyway || type === 'load' || (type === 'resize' && current.autoResize)) { F._setDimension(); }
        if (!(type === 'scroll' && current.canShrink)) { F.reposition(e); }
        F.trigger('onUpdate');
        didUpdate = null;
      }, (anyway && !isTouch ? 0 : 300));
    },
    toggle: function (action) {
      if (F.isOpen) {
        F.current.fitToView = $.type(action) === "boolean" ? action : !F.current.fitToView;
        if (isTouch) {
          F.wrap.removeAttr('style').addClass('fancybox-tmp');
          F.trigger('onUpdate');
        }
        F.update();
      }
    },
    hideLoading: function () {
      D.unbind('.loading');
      $('#fancybox-loading').remove();
    },
    showLoading: function () {
      var el, viewport;
      F.hideLoading();
      el = $('<div id="fancybox-loading"><div></div></div>').click(F.cancel).appendTo('body');
      D.bind('keydown.loading', function (e) {
        if ((e.which || e.keyCode) === 27) {
          e.preventDefault();
          F.cancel();
        }
      });
      if (!F.defaults.fixed) {
        viewport = F.getViewport();
        el.css({ position: 'absolute', top: (viewport.h * 0.5) + viewport.y, left: (viewport.w * 0.5) + viewport.x });
      }
    },
    getViewport: function () {
      var locked = (F.current && F.current.locked) || false,
        rez = { x: W.scrollLeft(), y: W.scrollTop() };
      if (locked) {
        rez.w = locked[0].clientWidth;
        rez.h = locked[0].clientHeight;
      } else {
        rez.w = isTouch && window.innerWidth ? window.innerWidth : W.width();
        rez.h = isTouch && window.innerHeight ? window.innerHeight : W.height();
      }
      return rez;
    },
    unbindEvents: function () {
      if (F.wrap && isQuery(F.wrap)) { F.wrap.unbind('.fb'); }
      D.unbind('.fb');
      W.unbind('.fb');
    },
    bindEvents: function () {
      var current = F.current,
        keys;
      if (!current) { return; }
      W.bind('orientationchange.fb' + (isTouch ? '' : ' resize.fb') + (current.autoCenter && !current.locked ? ' scroll.fb' : ''), F.update);
      keys = current.keys;
      if (keys) {
        D.bind('keydown.fb', function (e) {
          var code = e.which || e.keyCode,
            target = e.target || e.srcElement;
          if (code === 27 && F.coming) { return false; }
          if (!e.ctrlKey && !e.altKey && !e.shiftKey && !e.metaKey && !(target && (target.type || $(target).is('[contenteditable]')))) {
            $.each(keys, function (i, val) {
              if (current.group.length > 1 && val[code] !== undefined) {
                F[i](val[code]);
                e.preventDefault();
                return false;
              }
              if ($.inArray(code, val) > -1) {
                F[i]();
                e.preventDefault();
                return false;
              }
            });
          }
        });
      }
      if ($.fn.mousewheel && current.mouseWheel) {
        F.wrap.bind('mousewheel.fb', function (e, delta, deltaX, deltaY) {
          var target = e.target || null,
            parent = $(target),
            canScroll = false;
          while (parent.length) {
            if (canScroll || parent.is('.fancybox-skin') || parent.is('.fancybox-wrap')) { break; }
            canScroll = isScrollable(parent[0]);
            parent = $(parent).parent();
          }
          if (delta !== 0 && !canScroll) {
            if (F.group.length > 1 && !current.canShrink) {
              if (deltaY > 0 || deltaX > 0) { F.prev(deltaY > 0 ? 'down' : 'left'); } else if (deltaY < 0 || deltaX < 0) { F.next(deltaY < 0 ? 'up' : 'right'); }
              e.preventDefault();
            }
          }
        });
      }
    },
    trigger: function (event, o) {
      var ret, obj = o || F.coming || F.current;
      if (!obj) { return; }
      if ($.isFunction(obj[event])) { ret = obj[event].apply(obj, Array.prototype.slice.call(arguments, 1)); }
      if (ret === false) { return false; }
      if (obj.helpers) { $.each(obj.helpers, function (helper, opts) { if (opts && F.helpers[helper] && $.isFunction(F.helpers[helper][event])) { F.helpers[helper][event]($.extend(true, {}, F.helpers[helper].defaults, opts), obj); } }); }
      D.trigger(event);
    },
    isImage: function (str) { return isString(str) && str.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i); },
    isSWF: function (str) { return isString(str) && str.match(/\.(swf)((\?|#).*)?$/i); },
    _start: function (index) {
      var coming = {},
        obj, href, type, margin, padding;
      index = getScalar(index);
      obj = F.group[index] || null;
      if (!obj) { return false; }
      coming = $.extend(true, {}, F.opts, obj);
      margin = coming.margin;
      padding = coming.padding;
      if ($.type(margin) === 'number') { coming.margin = [margin, margin, margin, margin]; }
      if ($.type(padding) === 'number') { coming.padding = [padding, padding, padding, padding]; }
      if (coming.modal) { $.extend(true, coming, { closeBtn: false, closeClick: false, nextClick: false, arrows: false, mouseWheel: false, keys: null, helpers: { overlay: { closeClick: false } } }); }
      if (coming.autoSize) { coming.autoWidth = coming.autoHeight = true; }
      if (coming.width === 'auto') { coming.autoWidth = true; }
      if (coming.height === 'auto') { coming.autoHeight = true; }
      coming.group = F.group;
      coming.index = index;
      F.coming = coming;
      if (false === F.trigger('beforeLoad')) { F.coming = null; return; }
      type = coming.type;
      href = coming.href;
      if (!type) {
        F.coming = null;
        if (F.current && F.router && F.router !== 'jumpto') { F.current.index = index; return F[F.router](F.direction); }
        return false;
      }
      F.isActive = true;
      if (type === 'image' || type === 'swf') {
        coming.autoHeight = coming.autoWidth = false;
        coming.scrolling = 'visible';
      }
      if (type === 'image') { coming.aspectRatio = true; }
      if (type === 'iframe' && isTouch) { coming.scrolling = 'scroll'; }
      coming.wrap = $(coming.tpl.wrap).addClass('fancybox-' + (isTouch ? 'mobile' : 'desktop') + ' fancybox-type-' + type + ' fancybox-tmp ' + coming.wrapCSS).appendTo(coming.parent || 'body');
      $.extend(coming, { skin: $('.fancybox-skin', coming.wrap), outer: $('.fancybox-outer', coming.wrap), inner: $('.fancybox-inner', coming.wrap) });
      $.each(["Top", "Right", "Bottom", "Left"], function (i, v) { coming.skin.css('padding' + v, getValue(coming.padding[i])); });
      F.trigger('onReady');
      if (type === 'inline' || type === 'html') { if (!coming.content || !coming.content.length) { return F._error('content'); } } else if (!href) { return F._error('href'); }
      if (type === 'image') { F._loadImage(); } else if (type === 'ajax') { F._loadAjax(); } else if (type === 'iframe') { F._loadIframe(); } else { F._afterLoad(); }
    },
    _error: function (type) {
      $.extend(F.coming, { type: 'html', autoWidth: true, autoHeight: true, minWidth: 0, minHeight: 0, scrolling: 'no', hasError: type, content: F.coming.tpl.error });
      F._afterLoad();
    },
    _loadImage: function () {
      var img = F.imgPreload = new Image();
      img.onload = function () {
        this.onload = this.onerror = null;
        F.coming.width = this.width / F.opts.pixelRatio;
        F.coming.height = this.height / F.opts.pixelRatio;
        F._afterLoad();
      };
      img.onerror = function () {
        this.onload = this.onerror = null;
        F._error('image');
      };
      img.src = F.coming.href;
      if (img.complete !== true) { F.showLoading(); }
    },
    _loadAjax: function () {
      var coming = F.coming;
      F.showLoading();
      F.ajaxLoad = $.ajax($.extend({}, coming.ajax, {
        url: coming.href,
        error: function (jqXHR, textStatus) { if (F.coming && textStatus !== 'abort') { F._error('ajax', jqXHR); } else { F.hideLoading(); } },
        success: function (data, textStatus) {
          if (textStatus === 'success') {
            coming.content = data;
            F._afterLoad();
          }
        }
      }));
    },
    _loadIframe: function () {
      var coming = F.coming,
        iframe = $(coming.tpl.iframe.replace(/\{rnd\}/g, new Date().getTime())).attr('scrolling', isTouch ? 'auto' : coming.iframe.scrolling).attr('src', coming.href);
      $(coming.wrap).bind('onReset', function () { try { $(this).find('iframe').hide().attr('src', '//about:blank').end().empty(); } catch (e) { } });
      if (coming.iframe.preload) {
        F.showLoading();
        iframe.one('load', function () {
          $(this).data('ready', 1);
          if (!isTouch) { $(this).bind('load.fb', F.update); }
          $(this).parents('.fancybox-wrap').width('100%').removeClass('fancybox-tmp').show();
          F._afterLoad();
        });
      }
      coming.content = iframe.appendTo(coming.inner);
      if (!coming.iframe.preload) { F._afterLoad(); }
    },
    _preloadImages: function () {
      var group = F.group,
        current = F.current,
        len = group.length,
        cnt = current.preload ? Math.min(current.preload, len - 1) : 0,
        item, i;
      for (i = 1; i <= cnt; i += 1) { item = group[(current.index + i) % len]; if (item.type === 'image' && item.href) { new Image().src = item.href; } }
    },
    _afterLoad: function () {
      var coming = F.coming,
        previous = F.current,
        placeholder = 'fancybox-placeholder',
        current, content, type, scrolling, href, embed;
      F.hideLoading();
      if (!coming || F.isActive === false) { return; }
      if (false === F.trigger('afterLoad', coming, previous)) {
        coming.wrap.stop(true).trigger('onReset').remove();
        F.coming = null;
        return;
      }
      if (previous) {
        F.trigger('beforeChange', previous);
        previous.wrap.stop(true).removeClass('fancybox-opened').find('.fancybox-item, .fancybox-nav').remove();
      }
      F.unbindEvents();
      current = coming;
      content = coming.content;
      type = coming.type;
      scrolling = coming.scrolling;
      $.extend(F, { wrap: current.wrap, skin: current.skin, outer: current.outer, inner: current.inner, current: current, previous: previous });
      href = current.href;
      switch (type) {
        case 'inline':
        case 'ajax':
        case 'html':
          if (current.selector) { content = $('<div>').html(content).find(current.selector); } else if (isQuery(content)) {
            if (!content.data(placeholder)) { content.data(placeholder, $('<div class="' + placeholder + '"></div>').insertAfter(content).hide()); }
            content = content.show().detach();
            current.wrap.bind('onReset', function () { if ($(this).find(content).length) { content.hide().replaceAll(content.data(placeholder)).data(placeholder, false); } });
          }
          break;
        case 'image':
          content = current.tpl.image.replace('{href}', href);
          break;
        case 'swf':
          content = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + href + '"></param>';
          embed = '';
          $.each(current.swf, function (name, val) {
            content += '<param name="' + name + '" value="' + val + '"></param>';
            embed += ' ' + name + '="' + val + '"';
          });
          content += '<embed src="' + href + '" type="application/x-shockwave-flash" width="100%" height="100%"' + embed + '></embed></object>';
          break;
      }
      if (!(isQuery(content) && content.parent().is(current.inner))) { current.inner.append(content); }
      F.trigger('beforeShow');
      current.inner.css('overflow', scrolling === 'yes' ? 'scroll' : (scrolling === 'no' ? 'hidden' : scrolling));
      F._setDimension();
      F.reposition();
      F.isOpen = false;
      F.coming = null;
      F.bindEvents();
      if (!F.isOpened) { $('.fancybox-wrap').not(current.wrap).stop(true).trigger('onReset').remove(); } else if (previous.prevMethod) { F.transitions[previous.prevMethod](); }
      F.transitions[F.isOpened ? current.nextMethod : current.openMethod]();
      F._preloadImages();
    },
    _setDimension: function () {
      var viewport = F.getViewport(),
        steps = 0,
        canShrink = false,
        canExpand = false,
        wrap = F.wrap,
        skin = F.skin,
        inner = F.inner,
        current = F.current,
        width = current.width,
        height = current.height,
        minWidth = current.minWidth,
        minHeight = current.minHeight,
        maxWidth = current.maxWidth,
        maxHeight = current.maxHeight,
        scrolling = current.scrolling,
        scrollOut = current.scrollOutside ? current.scrollbarWidth : 0,
        margin = current.margin,
        wMargin = getScalar(margin[1] + margin[3]),
        hMargin = getScalar(margin[0] + margin[2]),
        wPadding, hPadding, wSpace, hSpace, origWidth, origHeight, origMaxWidth, origMaxHeight, ratio, width_, height_, maxWidth_, maxHeight_, iframe, body;
      wrap.add(skin).add(inner).width('auto').height('auto').removeClass('fancybox-tmp');
      wPadding = getScalar(skin.outerWidth(true) - skin.width());
      hPadding = getScalar(skin.outerHeight(true) - skin.height());
      wSpace = wMargin + wPadding;
      hSpace = hMargin + hPadding;
      origWidth = isPercentage(width) ? (viewport.w - wSpace) * getScalar(width) / 100 : width;
      origHeight = isPercentage(height) ? (viewport.h - hSpace) * getScalar(height) / 100 : height;
      if (current.type === 'iframe') {
        iframe = current.content;
        if (current.autoHeight && iframe.data('ready') === 1) {
          try {
            if (iframe[0].contentWindow.document.location) {
              inner.width(origWidth).height(9999);
              body = iframe.contents().find('body');
              if (scrollOut) { body.css('overflow-x', 'hidden'); }
              origHeight = body.outerHeight(true);
            }
          } catch (e) { }
        }
      } else if (current.autoWidth || current.autoHeight) {
        inner.addClass('fancybox-tmp');
        if (!current.autoWidth) { inner.width(origWidth); }
        if (!current.autoHeight) { inner.height(origHeight); }
        if (current.autoWidth) { origWidth = inner.width(); }
        if (current.autoHeight) { origHeight = inner.height(); }
        inner.removeClass('fancybox-tmp');
      }
      width = getScalar(origWidth);
      height = getScalar(origHeight);
      ratio = origWidth / origHeight;
      minWidth = getScalar(isPercentage(minWidth) ? getScalar(minWidth, 'w') - wSpace : minWidth);
      maxWidth = getScalar(isPercentage(maxWidth) ? getScalar(maxWidth, 'w') - wSpace : maxWidth);
      minHeight = getScalar(isPercentage(minHeight) ? getScalar(minHeight, 'h') - hSpace : minHeight);
      maxHeight = getScalar(isPercentage(maxHeight) ? getScalar(maxHeight, 'h') - hSpace : maxHeight);
      origMaxWidth = maxWidth;
      origMaxHeight = maxHeight;
      if (current.fitToView) {
        maxWidth = Math.min(viewport.w - wSpace, maxWidth);
        maxHeight = Math.min(viewport.h - hSpace, maxHeight);
      }
      maxWidth_ = viewport.w - wMargin;
      maxHeight_ = viewport.h - hMargin;
      if (current.aspectRatio) {
        if (width > maxWidth) {
          width = maxWidth;
          height = getScalar(width / ratio);
        }
        if (height > maxHeight) {
          height = maxHeight;
          width = getScalar(height * ratio);
        }
        if (width < minWidth) {
          width = minWidth;
          height = getScalar(width / ratio);
        }
        if (height < minHeight) {
          height = minHeight;
          width = getScalar(height * ratio);
        }
      } else {
        width = Math.max(minWidth, Math.min(width, maxWidth));
        if (current.autoHeight && current.type !== 'iframe') {
          inner.width(width);
          height = inner.height();
        }
        height = Math.max(minHeight, Math.min(height, maxHeight));
      }
      if (current.fitToView) {
        inner.width(width).height(height);
        wrap.width(width + wPadding);
        width_ = wrap.width();
        height_ = wrap.height();
        if (current.aspectRatio) {
          while ((width_ > maxWidth_ || height_ > maxHeight_) && width > minWidth && height > minHeight) {
            if (steps++ > 19) { break; }
            height = Math.max(minHeight, Math.min(maxHeight, height - 10));
            width = getScalar(height * ratio);
            if (width < minWidth) {
              width = minWidth;
              height = getScalar(width / ratio);
            }
            if (width > maxWidth) {
              width = maxWidth;
              height = getScalar(width / ratio);
            }
            inner.width(width).height(height);
            wrap.width(width + wPadding);
            width_ = wrap.width();
            height_ = wrap.height();
          }
        } else {
          width = Math.max(minWidth, Math.min(width, width - (width_ - maxWidth_)));
          height = Math.max(minHeight, Math.min(height, height - (height_ - maxHeight_)));
        }
      }
      if (scrollOut && scrolling === 'auto' && height < origHeight && (width + wPadding + scrollOut) < maxWidth_) { width += scrollOut; }
      inner.width(width).height(height);
      wrap.width(width + wPadding);
      width_ = wrap.width();
      height_ = wrap.height();
      canShrink = (width_ > maxWidth_ || height_ > maxHeight_) && width > minWidth && height > minHeight;
      canExpand = current.aspectRatio ? (width < origMaxWidth && height < origMaxHeight && width < origWidth && height < origHeight) : ((width < origMaxWidth || height < origMaxHeight) && (width < origWidth || height < origHeight));
      $.extend(current, { dim: { width: getValue(width_), height: getValue(height_) }, origWidth: origWidth, origHeight: origHeight, canShrink: canShrink, canExpand: canExpand, wPadding: wPadding, hPadding: hPadding, wrapSpace: height_ - skin.outerHeight(true), skinSpace: skin.height() - height });
      if (!iframe && current.autoHeight && height > minHeight && height < maxHeight && !canExpand) { inner.height('auto'); }
    },
    _getPosition: function (onlyAbsolute) {
      var current = F.current,
        viewport = F.getViewport(),
        margin = current.margin,
        width = F.wrap.width() + margin[1] + margin[3],
        height = F.wrap.height() + margin[0] + margin[2],
        rez = { position: 'absolute', top: margin[0], left: margin[3] };
      if (current.autoCenter && current.fixed && !onlyAbsolute && height <= viewport.h && width <= viewport.w) { rez.position = 'fixed'; } else if (!current.locked) {
        rez.top += viewport.y;
        rez.left += viewport.x;
      }
      rez.top = getValue(Math.max(rez.top, rez.top + ((viewport.h - height) * current.topRatio)));
      rez.left = getValue(Math.max(rez.left, rez.left + ((viewport.w - width) * current.leftRatio)));
      return rez;
    },
    _afterZoomIn: function () {
      var current = F.current;
      if (!current) { return; }
      F.isOpen = F.isOpened = true;
      F.wrap.css('overflow', 'visible').addClass('fancybox-opened');
      F.update();
      if (current.closeClick || (current.nextClick && F.group.length > 1)) {
        F.inner.css('cursor', 'pointer').bind('click.fb', function (e) {
          if (!$(e.target).is('a') && !$(e.target).parent().is('a')) {
            e.preventDefault();
            F[current.closeClick ? 'close' : 'next']();
          }
        });
      }
      if (current.closeBtn) {
        $(current.tpl.closeBtn).appendTo(F.skin).bind('click.fb', function (e) {
          e.preventDefault();
          F.close();
        });
      }
      if (current.arrows && F.group.length > 1) {
        if (current.loop || current.index > 0) { $(current.tpl.prev).appendTo(F.outer).bind('click.fb', F.prev); }
        if (current.loop || current.index < F.group.length - 1) { $(current.tpl.next).appendTo(F.outer).bind('click.fb', F.next); }
      }
      F.trigger('afterShow');
      if (!current.loop && current.index === current.group.length - 1) { F.play(false); } else if (F.opts.autoPlay && !F.player.isActive) {
        F.opts.autoPlay = false;
        F.play();
      }
    },
    _afterZoomOut: function (obj) {
      obj = obj || F.current;
      $('.fancybox-wrap').trigger('onReset').remove();
      $.extend(F, { group: {}, opts: {}, router: false, current: null, isActive: false, isOpened: false, isOpen: false, isClosing: false, wrap: null, skin: null, outer: null, inner: null });
      F.trigger('afterClose', obj);
    }
  });
  F.transitions = {
    getOrigPosition: function () {
      var current = F.current,
        element = current.element,
        orig = current.orig,
        pos = {},
        width = 50,
        height = 50,
        hPadding = current.hPadding,
        wPadding = current.wPadding,
        viewport = F.getViewport();
      if (!orig && current.isDom && element.is(':visible')) { orig = element.find('img:first'); if (!orig.length) { orig = element; } }
      if (isQuery(orig)) {
        pos = orig.offset();
        if (orig.is('img')) {
          width = orig.outerWidth();
          height = orig.outerHeight();
        }
      } else {
        pos.top = viewport.y + (viewport.h - height) * current.topRatio;
        pos.left = viewport.x + (viewport.w - width) * current.leftRatio;
      }
      if (F.wrap.css('position') === 'fixed' || current.locked) {
        pos.top -= viewport.y;
        pos.left -= viewport.x;
      }
      pos = { top: getValue(pos.top - hPadding * current.topRatio), left: getValue(pos.left - wPadding * current.leftRatio), width: getValue(width + wPadding), height: getValue(height + hPadding) };
      return pos;
    },
    step: function (now, fx) {
      var ratio, padding, value, prop = fx.prop,
        current = F.current,
        wrapSpace = current.wrapSpace,
        skinSpace = current.skinSpace;
      if (prop === 'width' || prop === 'height') {
        ratio = fx.end === fx.start ? 1 : (now - fx.start) / (fx.end - fx.start);
        if (F.isClosing) { ratio = 1 - ratio; }
        padding = prop === 'width' ? current.wPadding : current.hPadding;
        value = now - padding;
        F.skin[prop](getScalar(prop === 'width' ? value : value - (wrapSpace * ratio)));
        F.inner[prop](getScalar(prop === 'width' ? value : value - (wrapSpace * ratio) - (skinSpace * ratio)));
      }
    },
    zoomIn: function () {
      var current = F.current,
        startPos = current.pos,
        effect = current.openEffect,
        elastic = effect === 'elastic',
        endPos = $.extend({ opacity: 1 }, startPos);
      delete endPos.position;
      if (elastic) { startPos = this.getOrigPosition(); if (current.openOpacity) { startPos.opacity = 0.1; } } else if (effect === 'fade') { startPos.opacity = 0.1; }
      F.wrap.css(startPos).animate(endPos, { duration: effect === 'none' ? 0 : current.openSpeed, easing: current.openEasing, step: elastic ? this.step : null, complete: F._afterZoomIn });
    },
    zoomOut: function () {
      var current = F.current,
        effect = current.closeEffect,
        elastic = effect === 'elastic',
        endPos = { opacity: 0.1 };
      if (elastic) { endPos = this.getOrigPosition(); if (current.closeOpacity) { endPos.opacity = 0.1; } }
      F.wrap.animate(endPos, { duration: effect === 'none' ? 0 : current.closeSpeed, easing: current.closeEasing, step: elastic ? this.step : null, complete: F._afterZoomOut });
    },
    changeIn: function () {
      var current = F.current,
        effect = current.nextEffect,
        startPos = current.pos,
        endPos = { opacity: 1 },
        direction = F.direction,
        distance = 200,
        field;
      startPos.opacity = 0.1;
      if (effect === 'elastic') {
        field = direction === 'down' || direction === 'up' ? 'top' : 'left';
        if (direction === 'down' || direction === 'right') {
          startPos[field] = getValue(getScalar(startPos[field]) - distance);
          endPos[field] = '+=' + distance + 'px';
        } else {
          startPos[field] = getValue(getScalar(startPos[field]) + distance);
          endPos[field] = '-=' + distance + 'px';
        }
      }
      if (effect === 'none') { F._afterZoomIn(); } else { F.wrap.css(startPos).animate(endPos, { duration: current.nextSpeed, easing: current.nextEasing, complete: F._afterZoomIn }); }
    },
    changeOut: function () {
      var previous = F.previous,
        effect = previous.prevEffect,
        endPos = { opacity: 0.1 },
        direction = F.direction,
        distance = 200;
      if (effect === 'elastic') { endPos[direction === 'down' || direction === 'up' ? 'top' : 'left'] = (direction === 'up' || direction === 'left' ? '-' : '+') + '=' + distance + 'px'; }
      previous.wrap.animate(endPos, { duration: effect === 'none' ? 0 : previous.prevSpeed, easing: previous.prevEasing, complete: function () { $(this).trigger('onReset').remove(); } });
    }
  };
  F.helpers.overlay = {
    defaults: { closeClick: true, speedOut: 200, showEarly: true, css: {}, locked: !isTouch, fixed: true },
    overlay: null,
    fixed: false,
    el: $('html'),
    create: function (opts) {
      opts = $.extend({}, this.defaults, opts);
      if (this.overlay) { this.close(); }
      this.overlay = $('<div class="fancybox-overlay"></div>').appendTo(F.coming ? F.coming.parent : opts.parent);
      this.fixed = false;
      if (opts.fixed && F.defaults.fixed) {
        this.overlay.addClass('fancybox-overlay-fixed');
        this.fixed = true;
      }
    },
    open: function (opts) {
      var that = this;
      opts = $.extend({}, this.defaults, opts);
      if (this.overlay) { this.overlay.unbind('.overlay').width('auto').height('auto'); } else { this.create(opts); }
      if (!this.fixed) {
        W.bind('resize.overlay', $.proxy(this.update, this));
        this.update();
      }
      if (opts.closeClick) {
        this.overlay.bind('click.overlay', function (e) {
          if ($(e.target).hasClass('fancybox-overlay')) {
            if (F.isActive) { F.close(); } else { that.close(); }
            return false;
          }
        });
      }
      this.overlay.css(opts.css).show();
    },
    close: function () {
      var scrollV, scrollH;
      W.unbind('resize.overlay');
      if (this.el.hasClass('fancybox-lock')) {
        $('.fancybox-margin').removeClass('fancybox-margin');
        scrollV = W.scrollTop();
        scrollH = W.scrollLeft();
        this.el.removeClass('fancybox-lock');
        W.scrollTop(scrollV).scrollLeft(scrollH);
      }
      $('.fancybox-overlay').remove().hide();
      $.extend(this, { overlay: null, fixed: false });
    },
    update: function () {
      var width = '100%',
        offsetWidth;
      this.overlay.width(width).height('100%');
      if (IE) { offsetWidth = Math.max(document.documentElement.offsetWidth, document.body.offsetWidth); if (D.width() > offsetWidth) { width = D.width(); } } else if (D.width() > W.width()) { width = D.width(); }
      this.overlay.width(width).height(D.height());
    },
    onReady: function (opts, obj) {
      var overlay = this.overlay;
      $('.fancybox-overlay').stop(true, true);
      if (!overlay) { this.create(opts); }
      if (opts.locked && this.fixed && obj.fixed) {
        if (!overlay) { this.margin = D.height() > W.height() ? $('html').css('margin-right').replace("px", "") : false; }
        obj.locked = this.overlay.append(obj.wrap);
        obj.fixed = false;
      }
      if (opts.showEarly === true) { this.beforeShow.apply(this, arguments); }
    },
    beforeShow: function (opts, obj) {
      var scrollV, scrollH;
      if (obj.locked) {
        if (this.margin !== false) {
          $('*').filter(function () { return ($(this).css('position') === 'fixed' && !$(this).hasClass("fancybox-overlay") && !$(this).hasClass("fancybox-wrap")); }).addClass('fancybox-margin');
          this.el.addClass('fancybox-margin');
        }
        scrollV = W.scrollTop();
        scrollH = W.scrollLeft();
        this.el.addClass('fancybox-lock');
        W.scrollTop(scrollV).scrollLeft(scrollH);
      }
      this.open(opts);
    },
    onUpdate: function () { if (!this.fixed) { this.update(); } },
    afterClose: function (opts) { if (this.overlay && !F.coming) { this.overlay.fadeOut(opts.speedOut, $.proxy(this.close, this)); } }
  };
  F.helpers.title = {
    defaults: { type: 'float', position: 'bottom' },
    beforeShow: function (opts) {
      var current = F.current,
        text = current.title,
        type = opts.type,
        title, target;
      if ($.isFunction(text)) { text = text.call(current.element, current); }
      if (!isString(text) || $.trim(text) === '') { return; }
      title = $('<div class="fancybox-title fancybox-title-' + type + '-wrap">' + text + '</div>');
      switch (type) {
        case 'inside':
          target = F.skin;
          break;
        case 'outside':
          target = F.wrap;
          break;
        case 'over':
          target = F.inner;
          break;
        default:
          target = F.skin;
          title.appendTo('body');
          if (IE) { title.width(title.width()); }
          title.wrapInner('<span class="child"></span>');
          F.current.margin[2] += Math.abs(getScalar(title.css('margin-bottom')));
          break;
      }
      title[(opts.position === 'top' ? 'prependTo' : 'appendTo')](target);
    }
  };
  $.fn.fancybox = function (options) {
    var index, that = $(this),
      selector = this.selector || '',
      run = function (e) {
        var what = $(this).blur(),
          idx = index,
          relType, relVal;
        if (!(e.ctrlKey || e.altKey || e.shiftKey || e.metaKey) && !what.is('.fancybox-wrap')) {
          relType = options.groupAttr || 'data-fancybox-group';
          relVal = what.attr(relType);
          if (!relVal) {
            relType = 'rel';
            relVal = what.get(0)[relType];
          }
          if (relVal && relVal !== '' && relVal !== 'nofollow') {
            what = selector.length ? $(selector) : that;
            what = what.filter('[' + relType + '="' + relVal + '"]');
            idx = what.index(this);
          }
          options.index = idx;
          if (F.open(what, options) !== false) { e.preventDefault(); }
        }
      };
    options = options || {};
    index = options.index || 0;
    if (!selector || options.live === false) { that.unbind('click.fb-start').bind('click.fb-start', run); } else { D.undelegate(selector, 'click.fb-start').delegate(selector + ":not('.fancybox-item, .fancybox-nav')", 'click.fb-start', run); }
    this.filter('[data-fancybox-start=1]').trigger('click');
    return this;
  };
  D.ready(function () {
    var w1, w2;
    if ($.scrollbarWidth === undefined) {
      $.scrollbarWidth = function () {
        var parent = $('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo('body'),
          child = parent.children(),
          width = child.innerWidth() - child.height(99).innerWidth();
        parent.remove();
        return width;
      };
    }
    if ($.support.fixedPosition === undefined) {
      $.support.fixedPosition = (function () {
        var elem = $('<div style="position:fixed;top:20px;"></div>').appendTo('body'),
          fixed = (elem[0].offsetTop === 20 || elem[0].offsetTop === 15);
        elem.remove();
        return fixed;
      }());
    }
    $.extend(F.defaults, { scrollbarWidth: $.scrollbarWidth(), fixed: $.support.fixedPosition, parent: $('body') });
    w1 = $(window).width();
    H.addClass('fancybox-lock-test');
    w2 = $(window).width();
    H.removeClass('fancybox-lock-test');
    $("<style type='text/css'>.fancybox-margin{margin-right:" + (w2 - w1) + "px;}</style>").appendTo("head");
  });
}(window, document, jQuery));



// Zoom Core Scripts

(function (o) {
  var t = { url: !1, callback: !1, target: !1, duration: 120, on: "mouseover", touch: !0, onZoomIn: !1, onZoomOut: !1, magnify: 1 };
  o.zoom = function (t, n, e, i) {
    var u, c, a, r, m, l, s, f = o(t),
      h = f.css("position"),
      d = o(n);
    return t.style.position = /(absolute|fixed)/.test(h) ? h : "relative", t.style.overflow = "hidden", e.style.width = e.style.height = "", o(e).addClass("zoomImg").css({ position: "absolute", top: 0, left: 0, opacity: 0, width: e.width * i, height: e.height * i, border: "none", maxWidth: "none", maxHeight: "none" }).appendTo(t), {
      init: function () { c = f.outerWidth(), u = f.outerHeight(), n === t ? (r = c, a = u) : (r = d.outerWidth(), a = d.outerHeight()), m = (e.width - c) / r, l = (e.height - u) / a, s = d.offset() },
      move: function (o) {
        var t = o.pageX - s.left,
          n = o.pageY - s.top;
        n = Math.max(Math.min(n, a), 0), t = Math.max(Math.min(t, r), 0), e.style.left = t * -m + "px", e.style.top = n * -l + "px"
      }
    }
  }, o.fn.zoom = function (n) {
    return this.each(function () {
      var e = o.extend({}, t, n || {}),
        i = e.target && o(e.target)[0] || this,
        u = this,
        c = o(u),
        a = document.createElement("img"),
        r = o(a),
        m = "mousemove.zoom",
        l = !1,
        s = !1;
      if (!e.url) { var f = u.querySelector("img"); if (f && (e.url = f.getAttribute("data-src") || f.currentSrc || f.src), !e.url) return }
      c.one("zoom.destroy", function (o, t) { c.off(".zoom"), i.style.position = o, i.style.overflow = t, a.onload = null, r.remove() }.bind(this, i.style.position, i.style.overflow)), a.onload = function () {
        function t(t) { f.init(), f.move(t), r.stop().fadeTo(o.support.opacity ? e.duration : 0, 1, o.isFunction(e.onZoomIn) ? e.onZoomIn.call(a) : !1) }

        function n() { r.stop().fadeTo(e.duration, 0, o.isFunction(e.onZoomOut) ? e.onZoomOut.call(a) : !1) }
        var f = o.zoom(i, u, a, e.magnify);
        "grab" === e.on ? c.on("mousedown.zoom", function (e) { 1 === e.which && (o(document).one("mouseup.zoom", function () { n(), o(document).off(m, f.move) }), t(e), o(document).on(m, f.move), e.preventDefault()) }) : "click" === e.on ? c.on("click.zoom", function (e) { return l ? void 0 : (l = !0, t(e), o(document).on(m, f.move), o(document).one("click.zoom", function () { n(), l = !1, o(document).off(m, f.move) }), !1) }) : "toggle" === e.on ? c.on("click.zoom", function (o) { l ? n() : t(o), l = !l }) : "mouseover" === e.on && (f.init(), c.on("mouseenter.zoom", t).on("mouseleave.zoom", n).on(m, f.move)), e.touch && c.on("touchstart.zoom", function (o) { o.preventDefault(), s ? (s = !1, n()) : (s = !0, t(o.originalEvent.touches[0] || o.originalEvent.changedTouches[0])) }).on("touchmove.zoom", function (o) { o.preventDefault(), f.move(o.originalEvent.touches[0] || o.originalEvent.changedTouches[0]) }).on("touchend.zoom", function (o) { o.preventDefault(), s && (s = !1, n()) }), o.isFunction(e.callback) && e.callback.call(a)
      }, a.src = e.url
    })
  }, o.fn.zoom.defaults = t
})(window.jQuery);







// Validate min

! function (a) { "function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof module && module.exports ? module.exports = a(require("jquery")) : a(jQuery) }(function (a) {
  a.extend(a.fn, {
    validate: function (b) {
      if (!this.length) return void (b && b.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing."));
      var c = a.data(this[0], "validator");
      return c ? c : (this.attr("novalidate", "novalidate"), c = new a.validator(b, this[0]), a.data(this[0], "validator", c), c.settings.onsubmit && (this.on("click.validate", ":submit", function (b) { c.settings.submitHandler && (c.submitButton = b.target), a(this).hasClass("cancel") && (c.cancelSubmit = !0), void 0 !== a(this).attr("formnovalidate") && (c.cancelSubmit = !0) }), this.on("submit.validate", function (b) {
        function d() { var d, e; return !c.settings.submitHandler || (c.submitButton && (d = a("<input type='hidden'/>").attr("name", c.submitButton.name).val(a(c.submitButton).val()).appendTo(c.currentForm)), e = c.settings.submitHandler.call(c, c.currentForm, b), c.submitButton && d.remove(), void 0 !== e && e) }
        return c.settings.debug && b.preventDefault(), c.cancelSubmit ? (c.cancelSubmit = !1, d()) : c.form() ? c.pendingRequest ? (c.formSubmitted = !0, !1) : d() : (c.focusInvalid(), !1)
      })), c)
    },
    valid: function () { var b, c, d; return a(this[0]).is("form") ? b = this.validate().form() : (d = [], b = !0, c = a(this[0].form).validate(), this.each(function () { b = c.element(this) && b, b || (d = d.concat(c.errorList)) }), c.errorList = d), b },
    rules: function (b, c) {
      var d, e, f, g, h, i, j = this[0];
      if (null != j && null != j.form) {
        if (b) switch (d = a.data(j.form, "validator").settings, e = d.rules, f = a.validator.staticRules(j), b) {
          case "add":
            a.extend(f, a.validator.normalizeRule(c)), delete f.messages, e[j.name] = f, c.messages && (d.messages[j.name] = a.extend(d.messages[j.name], c.messages));
            break;
          case "remove":
            return c ? (i = {}, a.each(c.split(/\s/), function (b, c) { i[c] = f[c], delete f[c], "required" === c && a(j).removeAttr("aria-required") }), i) : (delete e[j.name], f)
        }
        return g = a.validator.normalizeRules(a.extend({}, a.validator.classRules(j), a.validator.attributeRules(j), a.validator.dataRules(j), a.validator.staticRules(j)), j), g.required && (h = g.required, delete g.required, g = a.extend({ required: h }, g), a(j).attr("aria-required", "true")), g.remote && (h = g.remote, delete g.remote, g = a.extend(g, { remote: h })), g
      }
    }
  }), a.extend(a.expr[":"], { blank: function (b) { return !a.trim("" + a(b).val()) }, filled: function (b) { var c = a(b).val(); return null !== c && !!a.trim("" + c) }, unchecked: function (b) { return !a(b).prop("checked") } }), a.validator = function (b, c) { this.settings = a.extend(!0, {}, a.validator.defaults, b), this.currentForm = c, this.init() }, a.validator.format = function (b, c) { return 1 === arguments.length ? function () { var c = a.makeArray(arguments); return c.unshift(b), a.validator.format.apply(this, c) } : void 0 === c ? b : (arguments.length > 2 && c.constructor !== Array && (c = a.makeArray(arguments).slice(1)), c.constructor !== Array && (c = [c]), a.each(c, function (a, c) { b = b.replace(new RegExp("\\{" + a + "\\}", "g"), function () { return c }) }), b) }, a.extend(a.validator, {
    defaults: {
      messages: {},
      groups: {},
      rules: {},
      errorClass: "error",
      pendingClass: "pending",
      validClass: "valid",
      errorElement: "label",
      focusCleanup: !1,
      focusInvalid: !0,
      errorContainer: a([]),
      errorLabelContainer: a([]),
      onsubmit: !0,
      ignore: ":hidden",
      ignoreTitle: !1,
      onfocusin: function (a) { this.lastActive = a, this.settings.focusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, a, this.settings.errorClass, this.settings.validClass), this.hideThese(this.errorsFor(a))) },
      onfocusout: function (a) { this.checkable(a) || !(a.name in this.submitted) && this.optional(a) || this.element(a) },
      onkeyup: function (b, c) {
        var d = [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225];
        9 === c.which && "" === this.elementValue(b) || a.inArray(c.keyCode, d) !== -1 || (b.name in this.submitted || b.name in this.invalid) && this.element(b)
      },
      onclick: function (a) { a.name in this.submitted ? this.element(a) : a.parentNode.name in this.submitted && this.element(a.parentNode) },
      highlight: function (b, c, d) { "radio" === b.type ? this.findByName(b.name).addClass(c).removeClass(d) : a(b).addClass(c).removeClass(d) },
      unhighlight: function (b, c, d) { "radio" === b.type ? this.findByName(b.name).removeClass(c).addClass(d) : a(b).removeClass(c).addClass(d) }
    },
    setDefaults: function (b) { a.extend(a.validator.defaults, b) },
    messages: { required: "This field is required.", remote: "Please fix this field.", email: "Please enter a valid email address.", url: "Please enter a valid URL.", date: "Please enter a valid date.", dateISO: "Please enter a valid date (ISO).", number: "Please enter a valid number.", digits: "Please enter only digits.", equalTo: "Please enter the same value again.", maxlength: a.validator.format("Please enter no more than {0} characters."), minlength: a.validator.format("Please enter at least {0} characters."), rangelength: a.validator.format("Please enter a value between {0} and {1} characters long."), range: a.validator.format("Please enter a value between {0} and {1}."), max: a.validator.format("Please enter a value less than or equal to {0}."), min: a.validator.format("Please enter a value greater than or equal to {0}."), step: a.validator.format("Please enter a multiple of {0}.") },
    autoCreateRanges: !1,
    prototype: {
      init: function () {
        function b(b) {
          !this.form && this.hasAttribute("contenteditable") && (this.form = a(this).closest("form")[0]);
          var c = a.data(this.form, "validator"),
            d = "on" + b.type.replace(/^validate/, ""),
            e = c.settings;
          e[d] && !a(this).is(e.ignore) && e[d].call(c, this, b)
        }
        this.labelContainer = a(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || a(this.currentForm), this.containers = a(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
        var c, d = this.groups = {};
        a.each(this.settings.groups, function (b, c) { "string" == typeof c && (c = c.split(/\s/)), a.each(c, function (a, c) { d[c] = b }) }), c = this.settings.rules, a.each(c, function (b, d) { c[b] = a.validator.normalizeRule(d) }), a(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable]", b).on("click.validate", "select, option, [type='radio'], [type='checkbox']", b), this.settings.invalidHandler && a(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler), a(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required", "true")
      },
      form: function () { return this.checkForm(), a.extend(this.submitted, this.errorMap), this.invalid = a.extend({}, this.errorMap), this.valid() || a(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid() },
      checkForm: function () { this.prepareForm(); for (var a = 0, b = this.currentElements = this.elements(); b[a]; a++) this.check(b[a]); return this.valid() },
      element: function (b) {
        var c, d, e = this.clean(b),
          f = this.validationTargetFor(e),
          g = this,
          h = !0;
        return void 0 === f ? delete this.invalid[e.name] : (this.prepareElement(f), this.currentElements = a(f), d = this.groups[f.name], d && a.each(this.groups, function (a, b) { b === d && a !== f.name && (e = g.validationTargetFor(g.clean(g.findByName(a))), e && e.name in g.invalid && (g.currentElements.push(e), h = g.check(e) && h)) }), c = this.check(f) !== !1, h = h && c, c ? this.invalid[f.name] = !1 : this.invalid[f.name] = !0, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), a(b).attr("aria-invalid", !c)), h
      },
      showErrors: function (b) {
        if (b) {
          var c = this;
          a.extend(this.errorMap, b), this.errorList = a.map(this.errorMap, function (a, b) { return { message: a, element: c.findByName(b)[0] } }), this.successList = a.grep(this.successList, function (a) { return !(a.name in b) })
        }
        this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
      },
      resetForm: function () {
        a.fn.resetForm && a(this.currentForm).resetForm(), this.invalid = {}, this.submitted = {}, this.prepareForm(), this.hideErrors();
        var b = this.elements().removeData("previousValue").removeAttr("aria-invalid");
        this.resetElements(b)
      },
      resetElements: function (a) {
        var b;
        if (this.settings.unhighlight)
          for (b = 0; a[b]; b++) this.settings.unhighlight.call(this, a[b], this.settings.errorClass, ""), this.findByName(a[b].name).removeClass(this.settings.validClass);
        else a.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)
      },
      numberOfInvalids: function () { return this.objectLength(this.invalid) },
      objectLength: function (a) { var b, c = 0; for (b in a) a[b] && c++; return c },
      hideErrors: function () { this.hideThese(this.toHide) },
      hideThese: function (a) { a.not(this.containers).text(""), this.addWrapper(a).hide() },
      valid: function () { return 0 === this.size() },
      size: function () { return this.errorList.length },
      focusInvalid: function () { if (this.settings.focusInvalid) try { a(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin") } catch (a) { } },
      findLastActive: function () { var b = this.lastActive; return b && 1 === a.grep(this.errorList, function (a) { return a.element.name === b.name }).length && b },
      elements: function () {
        var b = this,
          c = {};
        return a(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function () { var d = this.name || a(this).attr("name"); return !d && b.settings.debug && window.console && console.error("%o has no name assigned", this), this.hasAttribute("contenteditable") && (this.form = a(this).closest("form")[0]), !(d in c || !b.objectLength(a(this).rules())) && (c[d] = !0, !0) })
      },
      clean: function (b) { return a(b)[0] },
      errors: function () { var b = this.settings.errorClass.split(" ").join("."); return a(this.settings.errorElement + "." + b, this.errorContext) },
      resetInternals: function () { this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = a([]), this.toHide = a([]) },
      reset: function () { this.resetInternals(), this.currentElements = a([]) },
      prepareForm: function () { this.reset(), this.toHide = this.errors().add(this.containers) },
      prepareElement: function (a) { this.reset(), this.toHide = this.errorsFor(a) },
      elementValue: function (b) {
        var c, d, e = a(b),
          f = b.type;
        return "radio" === f || "checkbox" === f ? this.findByName(b.name).filter(":checked").val() : "number" === f && "undefined" != typeof b.validity ? b.validity.badInput ? "NaN" : e.val() : (c = b.hasAttribute("contenteditable") ? e.text() : e.val(), "file" === f ? "C:\\fakepath\\" === c.substr(0, 12) ? c.substr(12) : (d = c.lastIndexOf("/"), d >= 0 ? c.substr(d + 1) : (d = c.lastIndexOf("\\"), d >= 0 ? c.substr(d + 1) : c)) : "string" == typeof c ? c.replace(/\r/g, "") : c)
      },
      check: function (b) {
        b = this.validationTargetFor(this.clean(b));
        var c, d, e, f = a(b).rules(),
          g = a.map(f, function (a, b) { return b }).length,
          h = !1,
          i = this.elementValue(b);
        if ("function" == typeof f.normalizer) {
          if (i = f.normalizer.call(b, i), "string" != typeof i) throw new TypeError("The normalizer should return a string value.");
          delete f.normalizer
        }
        for (d in f) { e = { method: d, parameters: f[d] }; try { if (c = a.validator.methods[d].call(this, i, b, e.parameters), "dependency-mismatch" === c && 1 === g) { h = !0; continue } if (h = !1, "pending" === c) return void (this.toHide = this.toHide.not(this.errorsFor(b))); if (!c) return this.formatAndAdd(b, e), !1 } catch (a) { throw this.settings.debug && window.console && console.log("Exception occurred when checking element " + b.id + ", check the '" + e.method + "' method.", a), a instanceof TypeError && (a.message += ".  Exception occurred when checking element " + b.id + ", check the '" + e.method + "' method."), a } }
        if (!h) return this.objectLength(f) && this.successList.push(b), !0
      },
      customDataMessage: function (b, c) { return a(b).data("msg" + c.charAt(0).toUpperCase() + c.substring(1).toLowerCase()) || a(b).data("msg") },
      customMessage: function (a, b) { var c = this.settings.messages[a]; return c && (c.constructor === String ? c : c[b]) },
      findDefined: function () {
        for (var a = 0; a < arguments.length; a++)
          if (void 0 !== arguments[a]) return arguments[a]
      },
      defaultMessage: function (b, c) {
        "string" == typeof c && (c = { method: c });
        var d = this.findDefined(this.customMessage(b.name, c.method), this.customDataMessage(b, c.method), !this.settings.ignoreTitle && b.title || void 0, a.validator.messages[c.method], "<strong>Warning: No message defined for " + b.name + "</strong>"),
          e = /\$?\{(\d+)\}/g;
        return "function" == typeof d ? d = d.call(this, c.parameters, b) : e.test(d) && (d = a.validator.format(d.replace(e, "{$1}"), c.parameters)), d
      },
      formatAndAdd: function (a, b) {
        var c = this.defaultMessage(a, b);
        this.errorList.push({ message: c, element: a, method: b.method }), this.errorMap[a.name] = c, this.submitted[a.name] = c
      },
      addWrapper: function (a) { return this.settings.wrapper && (a = a.add(a.parent(this.settings.wrapper))), a },
      defaultShowErrors: function () {
        var a, b, c;
        for (a = 0; this.errorList[a]; a++) c = this.errorList[a], this.settings.highlight && this.settings.highlight.call(this, c.element, this.settings.errorClass, this.settings.validClass), this.showLabel(c.element, c.message);
        if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)
          for (a = 0; this.successList[a]; a++) this.showLabel(this.successList[a]);
        if (this.settings.unhighlight)
          for (a = 0, b = this.validElements(); b[a]; a++) this.settings.unhighlight.call(this, b[a], this.settings.errorClass, this.settings.validClass);
        this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
      },
      validElements: function () { return this.currentElements.not(this.invalidElements()) },
      invalidElements: function () { return a(this.errorList).map(function () { return this.element }) },
      showLabel: function (b, c) {
        var d, e, f, g, h = this.errorsFor(b),
          i = this.idOrName(b),
          j = a(b).attr("aria-describedby");
        h.length ? (h.removeClass(this.settings.validClass).addClass(this.settings.errorClass), h.html(c)) : (h = a("<" + this.settings.errorElement + ">").attr("id", i + "-error").addClass(this.settings.errorClass).html(c || ""), d = h, this.settings.wrapper && (d = h.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.length ? this.labelContainer.append(d) : this.settings.errorPlacement ? this.settings.errorPlacement.call(this, d, a(b)) : d.insertAfter(b), h.is("label") ? h.attr("for", i) : 0 === h.parents("label[for='" + this.escapeCssMeta(i) + "']").length && (f = h.attr("id"), j ? j.match(new RegExp("\\b" + this.escapeCssMeta(f) + "\\b")) || (j += " " + f) : j = f, a(b).attr("aria-describedby", j), e = this.groups[b.name], e && (g = this, a.each(g.groups, function (b, c) { c === e && a("[name='" + g.escapeCssMeta(b) + "']", g.currentForm).attr("aria-describedby", h.attr("id")) })))), !c && this.settings.success && (h.text(""), "string" == typeof this.settings.success ? h.addClass(this.settings.success) : this.settings.success(h, b)), this.toShow = this.toShow.add(h)
      },
      errorsFor: function (b) {
        var c = this.escapeCssMeta(this.idOrName(b)),
          d = a(b).attr("aria-describedby"),
          e = "label[for='" + c + "'], label[for='" + c + "'] *";
        return d && (e = e + ", #" + this.escapeCssMeta(d).replace(/\s+/g, ", #")), this.errors().filter(e)
      },
      escapeCssMeta: function (a) { return a.replace(/([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g, "\\$1") },
      idOrName: function (a) { return this.groups[a.name] || (this.checkable(a) ? a.name : a.id || a.name) },
      validationTargetFor: function (b) { return this.checkable(b) && (b = this.findByName(b.name)), a(b).not(this.settings.ignore)[0] },
      checkable: function (a) { return /radio|checkbox/i.test(a.type) },
      findByName: function (b) { return a(this.currentForm).find("[name='" + this.escapeCssMeta(b) + "']") },
      getLength: function (b, c) {
        switch (c.nodeName.toLowerCase()) {
          case "select":
            return a("option:selected", c).length;
          case "input":
            if (this.checkable(c)) return this.findByName(c.name).filter(":checked").length
        }
        return b.length
      },
      depend: function (a, b) { return !this.dependTypes[typeof a] || this.dependTypes[typeof a](a, b) },
      dependTypes: { boolean: function (a) { return a }, string: function (b, c) { return !!a(b, c.form).length }, function: function (a, b) { return a(b) } },
      optional: function (b) { var c = this.elementValue(b); return !a.validator.methods.required.call(this, c, b) && "dependency-mismatch" },
      startRequest: function (b) { this.pending[b.name] || (this.pendingRequest++, a(b).addClass(this.settings.pendingClass), this.pending[b.name] = !0) },
      stopRequest: function (b, c) { this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[b.name], a(b).removeClass(this.settings.pendingClass), c && 0 === this.pendingRequest && this.formSubmitted && this.form() ? (a(this.currentForm).submit(), this.formSubmitted = !1) : !c && 0 === this.pendingRequest && this.formSubmitted && (a(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1) },
      previousValue: function (b, c) { return c = "string" == typeof c && c || "remote", a.data(b, "previousValue") || a.data(b, "previousValue", { old: null, valid: !0, message: this.defaultMessage(b, { method: c }) }) },
      destroy: function () { this.resetForm(), a(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur") }
    },
    classRuleSettings: { required: { required: !0 }, email: { email: !0 }, url: { url: !0 }, date: { date: !0 }, dateISO: { dateISO: !0 }, number: { number: !0 }, digits: { digits: !0 }, creditcard: { creditcard: !0 } },
    addClassRules: function (b, c) { b.constructor === String ? this.classRuleSettings[b] = c : a.extend(this.classRuleSettings, b) },
    classRules: function (b) {
      var c = {},
        d = a(b).attr("class");
      return d && a.each(d.split(" "), function () { this in a.validator.classRuleSettings && a.extend(c, a.validator.classRuleSettings[this]) }), c
    },
    normalizeAttributeRule: function (a, b, c, d) { /min|max|step/.test(c) && (null === b || /number|range|text/.test(b)) && (d = Number(d), isNaN(d) && (d = void 0)), d || 0 === d ? a[c] = d : b === c && "range" !== b && (a[c] = !0) },
    attributeRules: function (b) {
      var c, d, e = {},
        f = a(b),
        g = b.getAttribute("type");
      for (c in a.validator.methods) "required" === c ? (d = b.getAttribute(c), "" === d && (d = !0), d = !!d) : d = f.attr(c), this.normalizeAttributeRule(e, g, c, d);
      return e.maxlength && /-1|2147483647|524288/.test(e.maxlength) && delete e.maxlength, e
    },
    dataRules: function (b) {
      var c, d, e = {},
        f = a(b),
        g = b.getAttribute("type");
      for (c in a.validator.methods) d = f.data("rule" + c.charAt(0).toUpperCase() + c.substring(1).toLowerCase()), this.normalizeAttributeRule(e, g, c, d);
      return e
    },
    staticRules: function (b) {
      var c = {},
        d = a.data(b.form, "validator");
      return d.settings.rules && (c = a.validator.normalizeRule(d.settings.rules[b.name]) || {}), c
    },
    normalizeRules: function (b, c) {
      return a.each(b, function (d, e) {
        if (e === !1) return void delete b[d];
        if (e.param || e.depends) {
          var f = !0;
          switch (typeof e.depends) {
            case "string":
              f = !!a(e.depends, c.form).length;
              break;
            case "function":
              f = e.depends.call(c, c)
          }
          f ? b[d] = void 0 === e.param || e.param : (a.data(c.form, "validator").resetElements(a(c)), delete b[d])
        }
      }), a.each(b, function (d, e) { b[d] = a.isFunction(e) && "normalizer" !== d ? e(c) : e }), a.each(["minlength", "maxlength"], function () { b[this] && (b[this] = Number(b[this])) }), a.each(["rangelength", "range"], function () {
        var c;
        b[this] && (a.isArray(b[this]) ? b[this] = [Number(b[this][0]), Number(b[this][1])] : "string" == typeof b[this] && (c = b[this].replace(/[\[\]]/g, "").split(/[\s,]+/), b[this] = [Number(c[0]), Number(c[1])]))
      }), a.validator.autoCreateRanges && (null != b.min && null != b.max && (b.range = [b.min, b.max], delete b.min, delete b.max), null != b.minlength && null != b.maxlength && (b.rangelength = [b.minlength, b.maxlength], delete b.minlength, delete b.maxlength)), b
    },
    normalizeRule: function (b) {
      if ("string" == typeof b) {
        var c = {};
        a.each(b.split(/\s/), function () { c[this] = !0 }), b = c
      }
      return b
    },
    addMethod: function (b, c, d) { a.validator.methods[b] = c, a.validator.messages[b] = void 0 !== d ? d : a.validator.messages[b], c.length < 3 && a.validator.addClassRules(b, a.validator.normalizeRule(b)) },
    methods: {
      required: function (b, c, d) { if (!this.depend(d, c)) return "dependency-mismatch"; if ("select" === c.nodeName.toLowerCase()) { var e = a(c).val(); return e && e.length > 0 } return this.checkable(c) ? this.getLength(b, c) > 0 : b.length > 0 },
      email: function (a, b) { return this.optional(b) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(a) },
      url: function (a, b) { return this.optional(b) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(a) },
      date: function (a, b) { return this.optional(b) || !/Invalid|NaN/.test(new Date(a).toString()) },
      dateISO: function (a, b) { return this.optional(b) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(a) },
      number: function (a, b) { return this.optional(b) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(a) },
      digits: function (a, b) { return this.optional(b) || /^\d+$/.test(a) },
      minlength: function (b, c, d) { var e = a.isArray(b) ? b.length : this.getLength(b, c); return this.optional(c) || e >= d },
      maxlength: function (b, c, d) { var e = a.isArray(b) ? b.length : this.getLength(b, c); return this.optional(c) || e <= d },
      rangelength: function (b, c, d) { var e = a.isArray(b) ? b.length : this.getLength(b, c); return this.optional(c) || e >= d[0] && e <= d[1] },
      min: function (a, b, c) { return this.optional(b) || a >= c },
      max: function (a, b, c) { return this.optional(b) || a <= c },
      range: function (a, b, c) { return this.optional(b) || a >= c[0] && a <= c[1] },
      step: function (b, c, d) {
        var e, f = a(c).attr("type"),
          g = "Step attribute on input type " + f + " is not supported.",
          h = ["text", "number", "range"],
          i = new RegExp("\\b" + f + "\\b"),
          j = f && !i.test(h.join()),
          k = function (a) { var b = ("" + a).match(/(?:\.(\d+))?$/); return b && b[1] ? b[1].length : 0 },
          l = function (a) { return Math.round(a * Math.pow(10, e)) },
          m = !0;
        if (j) throw new Error(g);
        return e = k(d), (k(b) > e || l(b) % l(d) !== 0) && (m = !1), this.optional(c) || m
      },
      equalTo: function (b, c, d) { var e = a(d); return this.settings.onfocusout && e.not(".validate-equalTo-blur").length && e.addClass("validate-equalTo-blur").on("blur.validate-equalTo", function () { a(c).valid() }), b === e.val() },
      remote: function (b, c, d, e) {
        if (this.optional(c)) return "dependency-mismatch";
        e = "string" == typeof e && e || "remote";
        var f, g, h, i = this.previousValue(c, e);
        return this.settings.messages[c.name] || (this.settings.messages[c.name] = {}), i.originalMessage = i.originalMessage || this.settings.messages[c.name][e], this.settings.messages[c.name][e] = i.message, d = "string" == typeof d && { url: d } || d, h = a.param(a.extend({ data: b }, d.data)), i.old === h ? i.valid : (i.old = h, f = this, this.startRequest(c), g = {}, g[c.name] = b, a.ajax(a.extend(!0, {
          mode: "abort",
          port: "validate" + c.name,
          dataType: "json",
          data: g,
          context: f.currentForm,
          success: function (a) {
            var d, g, h, j = a === !0 || "true" === a;
            f.settings.messages[c.name][e] = i.originalMessage, j ? (h = f.formSubmitted, f.resetInternals(), f.toHide = f.errorsFor(c), f.formSubmitted = h, f.successList.push(c), f.invalid[c.name] = !1, f.showErrors()) : (d = {}, g = a || f.defaultMessage(c, { method: e, parameters: b }), d[c.name] = i.message = g, f.invalid[c.name] = !0, f.showErrors(d)), i.valid = j, f.stopRequest(c, j)
          }
        }, d)), "pending")
      }
    }
  });
  var b, c = {};
  a.ajaxPrefilter ? a.ajaxPrefilter(function (a, b, d) { var e = a.port; "abort" === a.mode && (c[e] && c[e].abort(), c[e] = d) }) : (b = a.ajax, a.ajax = function (d) {
    var e = ("mode" in d ? d : a.ajaxSettings).mode,
      f = ("port" in d ? d : a.ajaxSettings).port;
    return "abort" === e ? (c[f] && c[f].abort(), c[f] = b.apply(this, arguments), c[f]) : b.apply(this, arguments)
  })
});



// Custom Scripts here

$.noConflict();

// jQuery(function () {
//     jQuery('.datepicker').datepicker();
// })

// Tooltip
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip();
})

jQuery('.slide-toggle').on('click', function (event) {
  jQuery('.switcher').toggleClass('active');
});
jQuery('.alertbox').on('click', function (event) {
  jQuery('.switcher').toggleClass('active');
});
//paste this code under head tag or in a seperate js file.
// Wait for window load
jQuery(window).on('load', function () {
  // Animate loader off screen
  jQuery('.se-pre-con').fadeOut("slow");
});


// Fancy Box For Product Detail Page
jQuery(document).ready(function () {
  jQuery(".fancybox-button").fancybox({
    openEffect: 'none',
    closeEffect: 'none',
    prevEffect: 'none',
    nextEffect: 'none',
    closeBtn: true,
    margin: [20, 60, 20, 60],
    helpers: {
      title: { type: 'inside' },
      buttons: {}
    }
  });
});


jQuery(".swticher-rtl").click(function () {
  jQuery("body").toggleClass("bodyrtl");
  jQuery(".swticher-rtl").toggleClass("active");

  return false;

});

jQuery(".swticher-boxed").click(function () {

  jQuery("html").toggleClass("boxed");
  jQuery(".swticher-boxed").toggleClass("active");
  return false;
});


function notificationCart() {

  jQuery('#notificationCart').show();
  setTimeout(function () {
    jQuery('#notificationCart').hide('slow');
  }, 2000);
}

function notificationWishlist() {

  jQuery('#notificationWishlist').show();
  setTimeout(function () {
    jQuery('#notificationWishlist').hide('slow');
  }, 2000);
}

function notificationCompare() {

  jQuery('#notificationCompare').show();
  setTimeout(function () {
    jQuery('#notificationCompare').hide('slow');
  }, 2000);
}


// Color Scheme Change
jQuery(document).on("click", "#switchColor a", function () {
  var cssValue = jQuery(this).attr("id");
  jQuery("#switchColor li").removeClass('active');
  jQuery(this).parent().addClass('active');

  if (cssValue == "default") {
    jQuery('link[rel=stylesheet][href="css/yellow.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/green.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/navy-blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/red.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/pink.css"]').remove();
  } else if (cssValue == "yellow") {
    jQuery('head').append('<link type="text/css" rel="stylesheet" href="css/yellow.css">');
    jQuery('link[rel=stylesheet][href="css/default.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/green.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/navy-blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/red.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/pink.css"]').remove();
  } else if (cssValue == "blue") {
    jQuery('head').append('<link type="text/css" rel="stylesheet" href="css/blue.css">');
    jQuery('link[rel=stylesheet][href="css/default.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/yellow.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/green.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/navy-blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/red.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/pink.css"]').remove();
  } else if (cssValue == "green") {
    jQuery('head').append('<link type="text/css" rel="stylesheet" href="css/green.css">');
    jQuery('link[rel=stylesheet][href="css/default.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/yellow.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/navy-blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/red.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/pink.css"]').remove();
  } else if (cssValue == "navy-blue") {
    jQuery('head').append('<link type="text/css" rel="stylesheet" href="css/navy-blue.css">');
    jQuery('link[rel=stylesheet][href="css/default.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/green.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/yellow.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/red.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/pink.css"]').remove();
  } else if (cssValue == "red") {
    jQuery('head').append('<link type="text/css" rel="stylesheet" href="css/red.css">');
    jQuery('link[rel=stylesheet][href="css/default.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/green.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/navy-blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/yellow.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/pink.css"]').remove();
  } else if (cssValue == "pink") {
    jQuery('head').append('<link type="text/css" rel="stylesheet" href="css/pink.css">');
    jQuery('link[rel=stylesheet][href="css/default.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/green.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/navy-blue.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/red.css"]').remove();
    jQuery('link[rel=stylesheet][href="css/yellow.css"]').remove();
  }

  return false;
});






//Display grid/list 4 Column
jQuery(document).ready(function () {

  jQuery('#list_4column').on('click', function () {
    jQuery('#swap .col-12').removeClass('griding');
    jQuery('#swap .col-12').removeClass('col-lg-3');

    jQuery('#swap .col-12').removeClass('col-sm-6');
    jQuery('#swap .col-12').addClass('listing');
    jQuery(this).addClass('active');
    jQuery('#grid_4column').removeClass('active');
  });
  jQuery('#grid_4column').on('click', function () {
    jQuery('#swap .col-12').removeClass('listing');
    jQuery('#swap .col-12').addClass('col-lg-3');

    jQuery('#swap .col-12').addClass('col-sm-6');

    jQuery('#swap .col-12').addClass('griding');
    jQuery(this).addClass('active');
    jQuery('#list_4column').removeClass('active');
  });


});



//Display grid/list 3 Column
jQuery(document).ready(function () {

  // jQuery('#list_3column').on('click', function() {
  // jQuery('#swap .col-12').removeClass('griding');
  // jQuery('#swap .col-12').removeClass('col-lg-4');
  // jQuery('#swap .col-12').removeClass('col-sm-6');
  // jQuery('#swap .col-12').addClass('listing');
  // jQuery(this).addClass('active');
  // jQuery('#grid_3column').removeClass('active');
  // });
  jQuery('#list_3column').on('click', function () {

    jQuery('#swap .col-12').removeClass('col-lg-4');
    jQuery('#swap .col-12').removeClass('col-sm-6');
    jQuery('#swap .col-12').addClass('col-lg-3');
    jQuery('#swap .col-12').addClass('col-sm-3');
    jQuery(this).addClass('active');
    jQuery('#grid_3column').removeClass('active');

  });
  jQuery('#grid_3column').on('click', function () {
    jQuery('#swap .col-12').removeClass('col-lg-3');
    jQuery('#swap .col-12').removeClass('col-sm-3');
    // jQuery('#swap .col-12').removeClass('listing');
    jQuery('#swap .col-12').addClass('col-lg-4');
    jQuery('#swap .col-12').addClass('col-sm-6');

    // jQuery('#swap .col-12').addClass('griding');
    jQuery(this).addClass('active');
    jQuery('#list_3column').removeClass('active');
  });


});

// Add To Cart Button Enable
jQuery(document).ready(function () {

  jQuery('.color-selection ul li a').on('click', function () {
    jQuery('.color-selection ul li').removeClass("active");
    jQuery(this).parent().addClass("active");
  });
  jQuery('.size-selection ul li a').on('click', function () {
    jQuery('.size-selection ul li').removeClass("active");
    jQuery(this).parent().addClass("active");
  });

});

jQuery('.cta').on('click', function () {

  jQuery(this).removeClass("active");

  jQuery(this).removeClass("show");

  //jQuery(this).parents('.nav li a').eq(5).addClass( "active");
  //jQuery(this).parents('.nav li a').addClass( "show");
});

jQuery('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {

  var hashValue = jQuery(e.target).attr('href');

  jQuery("#pills-shipping-tab").removeClass("active");
  jQuery("#pills-billing-tab").removeClass("active");
  jQuery("#pills-method-tab").removeClass("active");
  jQuery("#pills-order-tab").removeClass("active");
  jQuery(hashValue + "-tab").addClass("active");



})


//sticky header

window.onscroll = function () { myFunction() };

var header = document.getElementById("stickyHeader");

function myFunction() {
  if (window.pageYOffset > 100) {

    header.classList.add("sticky-header");
  } else {
    header.classList.remove("sticky-header");
  }
}


// Flash Sale Counter
jQuery(document).ready(function () {
  setInterval(function time() {
    var d = new Date();
    var days = 365 - d.getDay();
    var hours = 24 - d.getHours();
    var min = 60 - d.getMinutes();
    if ((min + '').length == 1) {
      min = '0' + min;
    }
    var sec = 60 - d.getSeconds();
    if ((sec + '').length == 1) {
      sec = '0' + sec;
    }
    jQuery('.countdown .days').html(days + "<small>Days</small>");
    jQuery('.countdown .hours').html(hours + "<small>Hour</small>");
    jQuery('.countdown .mintues').html(min + "<small>Min</small>");
    jQuery('.countdown .seconds').html(sec + "<small>Sec</small>");
  }, 1000);
});

// Scroll to top

if (jQuery('#back-to-top').length) {
  var scrollTrigger = 100, // px
    backToTop = function () {
      var scrollTop = jQuery(window).scrollTop();
      if (scrollTop > scrollTrigger) {
        jQuery('#back-to-top').addClass('show');
      } else {
        jQuery('#back-to-top').removeClass('show');
      }
    };
  backToTop();
  jQuery(window).on('scroll', function () {
    backToTop();
  });
  jQuery('#back-to-top').on('click', function (e) {
    e.preventDefault();
    jQuery('html,body').animate({
      scrollTop: 0
    }, 700);
  });
}

// jQuery(".main-manu").click(function(e){
// e.preventDefault();
// var currentIsActive = jQuery(this).hasClass('collapsed');

// })

// Mobile Menu
jQuery(document).ready(function () {
  const targetElement = document.getElementById("popup"); //only popup can scroll

  jQuery('.navigation-mobile-toggler').on('click', function () {

    jQuery('#navigation-mobile').toggleClass('navigation-active');
    jQuery('.mobile-overlay').addClass('active');

    //put this when popup opens, to stop body scrolling
    bodyScrollLock.disableBodyScroll(targetElement);
    jQuery('html').css('overflow', 'hidden');
    jQuery('body').css('overflow', 'hidden');
  });

  jQuery('.mobile-overlay').on('click', function () {
    jQuery('#navigation-mobile').removeClass('navigation-active');
    jQuery('.mobile-overlay').removeClass('active');

    //put this when close popup and show scrollbar in body
    bodyScrollLock.enableBodyScroll(targetElement);

    jQuery('html').css('overflow', 'auto');
    jQuery('body').css('overflow', 'auto');
  });
});


// Header 3 Searchbar
jQuery(document).ready(function () {
  jQuery('#dropdownSearch').on('click', function () {
    jQuery('#dropdown-searchbar').css('display', 'block');
  });

  jQuery('.close').on('click', function () {
    jQuery('#dropdown-searchbar').css('display', 'none');
  });
});


// Quantiy Counter

jQuery(document).ready(function () {
  var quantitiy = 0;
  jQuery('.quantity-left-minus').click(function (e) {

    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var quantity = parseInt(jQuery('#quantity').val());

    // If is not undefined

    jQuery('#quantity').val(quantity + 1);

    // Increment

  });

  jQuery('.quantity-right-plus').click(function (e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var quantity = parseInt(jQuery('#quantity').val());

    // If is not undefined

    // Increment
    if (quantity > 0) {
      jQuery('#quantity').val(quantity - 1);
    }
  });
});


// Quantiy Counter Product
jQuery(document).ready(function () {
  var quantitiy = 0;
  jQuery('.quantity-minus').click(function (e) {

    // Stop acting like a button
    e.preventDefault();
    // Get the field name

    p_id = jQuery(this).val();
    var quantity = parseInt(jQuery("#" + p_id).val());
    if (quantity != 0)
      jQuery("#" + p_id).val(quantity - 1);

    // Decrement

  });
  jQuery('.quantity-plus').click(function (e) {

    // Stop acting like a button
    e.preventDefault();
    // Get the field name

    p_id = jQuery(this).val();
    var quantity = parseInt(jQuery("#" + p_id).val());
    jQuery("#" + p_id).val(quantity + 1);

    // Increment

  });
});





// Wait for the DOM to be ready
jQuery(function () {

  jQuery.validator.addMethod("valueNotEquals", function (value, element, arg) {
    return arg !== value;
  }, "Value must not equal arg.");

  // Initialize form validation on the general-form form.
  // It has the name attribute "general-form"
  jQuery("form[name='general-form']").validate({
    // Specify validation rules



    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fullname: "required",
      firstname: "required",
      lastname: "required",
      address: "required",

      SelectName: { valueNotEquals: "default" },
      SelectStateName: { valueNotEquals: "default" },
      postcode: "required",

      phone: "required",

      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      fullname: "Please enter your fullname",
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      address: "Please enter your address",

      SelectName: { valueNotEquals: "Please select an Option!" },
      SelectStateName: { valueNotEquals: "Please select an Option!" },

      postcode: "Please enter postal code",

      phone: "Please enter your phone number",

      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      form.submit();
    }
  });
});

// Wait for the DOM to be ready
jQuery(function () {

  jQuery.validator.addMethod("valueNotEquals", function (value, element, arg) {
    return arg !== value;
  }, "Value must not equal arg.");

  // Initialize form validation on the login form.
  // It has the name attribute "login"
  jQuery("form[name='login']").validate({
    // Specify validation rules



    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side

      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {

      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      form.submit();
    }
  });
});


// Wait for the DOM to be ready
jQuery(function () {
  // Initialize form validation on the contact form.
  // It has the name attribute "contact"
  jQuery("form[name='contact']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      subject: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      msg: "required"
    },
    // Specify validation error messages
    messages: {
      name: "Please enter your name",
      subject: "Please enter your subject",
      email: "Please enter a valid email address",
      msg: "Please enter your message",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      jQuery.ajax({
        url: "contact.php",
        type: "POST",
        data: jQuery(form).serialize(),
        cache: false,
        processData: false,
        success: function (data) {
          jQuery("#alert-box").show();
          jQuery("#alert-msg").html(data);


          //setTimeout(function(){ jQuery("#alert-msg").show(); }, 2000);


        }
      });


      return false;
    }
  });
});


// Product SLICK
jQuery('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  infinite: false,
  draggable: false,
  fade: true,
  asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  centerMode: true,
  centerPadding: '60px',
  dots: true,
  arrows: false,
  focusOnSelect: true
});


// Product vertical SLICK
jQuery('.slider-for-vertical').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  infinite: false,
  draggable: false,
  fade: true,
  asNavFor: '.slider-nav-vertical'
});
jQuery('.slider-nav-vertical').slick({
  dots: false,
  arrows: false,
  vertical: true,
  asNavFor: '.slider-for-vertical',
  slidesToShow: 3,
  // centerMode: true,
  slidesToScroll: 1,
  verticalSwiping: true,
  focusOnSelect: true
});


jQuery(function () {
  // ZOOM
  jQuery('.ex1').zoom();

});

// var tpj = jQuery; 
// var revapi1077;
// tpj(document).ready(function() {
// if (tpj("#rev_slider_1077_1").revolution == undefined) {
// revslider_showDoubleJqueryError("#rev_slider_1077_1");
// } else {
// revapi1077 = tpj("#rev_slider_1077_1").show().revolution({
// sliderType: "standard",
// jsFileLocation: "../revolution/js/",
// sliderLayout:"fullscreen",
// dottedOverlay: "none",
// delay: 9000,
// navigation: {
// keyboardNavigation: "off",
// keyboard_direction: "horizontal",
// mouseScrollNavigation: "off",
// mouseScrollReverse: "default",
// onHoverStop: "off",
// touch: {
// touchenabled: "on",
// swipe_threshold: 75,
// swipe_min_touches: 1,
// swipe_direction: "horizontal",
// drag_block_vertical: false
// },
// bullets: {
// enable: true,
// hide_onmobile: true,
// hide_under: 960,
// style: "hermes",
// hide_onleave: false,
// direction: "horizontal",
// h_align: "center",
// v_align: "bottom",
// h_offset: 0,
// v_offset: 30,
// space: 5,
// tmp: ''
// }
// },
// responsiveLevels: [1400, 1200, 992, 576],
// visibilityLevels: [1400, 1200, 992, 576],
// gridwidth: [1280, 992, 576, 320],
// gridheight: [482, 380, 300, 220],
// lazyType: "none",
// parallax: {
// type: "mouse",
// origo: "slidercenter",
// speed: 2000,
// levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55],
// type: "mouse",
// disable_onmobile: "on"
// },
// shadow: 0,
// spinner: "off",
// stopLoop: "on",
// stopAfterLoops: 0,
// stopAtSlide: 0,
// shuffle: "off",
// autoHeight: "off",
// fullScreenAutoWidth: "off",
// fullScreenAlignForce: "off",
// fullScreenOffsetContainer: "",
// fullScreenOffset: "60px",
// disableProgressBar: "on",
// hideThumbsOnMobile: "off",
// hideSliderAtLimit: 0,
// hideCaptionAtLimit: 0,
// hideAllCaptionAtLilmit: 0,
// debugMode: false,
// fallbacks: {
// simplifyAll: "off",
// nextSlideOnWindowFocus: "off",
// disableFocusListener: false,
// }
// });
// var newCall = new Object(),
// cslide;

// newCall.callback = function() {
// var proc = revapi1077.revgetparallaxproc(),
// fade = 1 + proc,
// scale = 1 + (Math.abs(proc) / 10);

// punchgs.TweenLite.set(revapi1077.find('.slotholder, .rs-background-video-layer'), { opacity: fade, scale: scale });
// }
// newCall.inmodule = "parallax";
// newCall.atposition = "start";

// revapi1077.bind("revolution.slide.onloaded", function(e) {
// revapi1077.revaddcallback(newCall);
// });
// }
// });
/*ready*/

// Gift pack slider
(function (jQuery) {
  var tabCarousel = jQuery('.tab-carousel-js-gift');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 200,
        slidesToShow: item || 2,
        slidesToScroll: item || 2,
        adaptiveHeight: true,
        responsive: [
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: itemmobile,
              slidesToScroll: itemmobile
            }
          },
        ]
      });
    });
  };
})(jQuery);

// cart carousel slider for mobile view 
(function (jQuery) {
  jQuery('.cart-slick-js').slick({
    infinite: true,
    slidesToShow: 1.07,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1.03,
        slidesToScroll: 1
      }
    }
    ]
  });
})(jQuery);

//welcome to store 
(function (jQuery) {
  var tabCarousel = jQuery('.welcomeToStore-js');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');

      thisCarousel.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        var currentSlideIndex = (currentSlide ? currentSlide : 0);

        // Check if slider is at the start
        if (currentSlideIndex === 0) {
          thisCarousel.find('.slick-prev').hide(); // Hide left arrow
        } else {
          thisCarousel.find('.slick-prev').show(); // Show left arrow
        }

        // Check if slider is at the end
        if (currentSlideIndex + slick.options.slidesToShow >= slick.slideCount) {
          thisCarousel.find('.slick-next').hide(); // Hide right arrow
        } else {
          thisCarousel.find('.slick-next').show(); // Show right arrow
        }
      });

      thisCarousel.slick({
        dots: false,
        arrows: true,
        slidesToShow: 1.2,
        slidesToShow: item || 4, // Display item number or 4 cards at one time
        slidesToScroll: item || 4, // Scroll item number or 4 cards at a time
        infinite: false,
        autoplay: true,
        autoplaySpeed: 2000, // Autoplay speed in milliseconds
        speed: 200,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 3.1,
            slidesToScroll: 3,
            arrows: true,
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1,
            arrows: false
          }
        }
        ]
      });
    });
  }
})(jQuery);

//Two Row Caurosal 
(function (jQuery) {
  var tabCarousel = jQuery('.tab-carousel-js-row');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');

      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: false,
        infinite: true,
        rows: 2,
        //rtl:true,
        speed: 300,
        slidesToShow: item || 4,
        slidesToScroll: item || 4,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            rows: 2,
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 791,
          settings: {
            rows: 1,
            slidesToShow: 2,
            slidesToScroll: 2,

          }
        },
        {
          breakpoint: 650,
          settings: {
            rows: 1,
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        },
        {
          breakpoint: 320,
          settings: {
            rows: 1,
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }

        ]
      });
    });
  };
})(jQuery);

(function (jQuery) {
  jQuery('.landpageCarousel-js').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
})(jQuery);

//Single GiftWrapiing slider Start
(function (jQuery) {
  var tabCarousel = jQuery('.single-giftwraping');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');
      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: false,
        //rtl:true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 1,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);
//Single GiftWrapiing slider End


(function (jQuery) {
  // Get the modal
  var modal = document.getElementById("elevate-plus-modal");

  // Get the button that opens the modal
  var btn = document.getElementById("elevate-plus-icon");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("elevate-Plus-modalclose")[0];

  // Function to open the modal and prevent body scrolling
  function openModal() {
    modal.style.display = "block";
    document.body.classList.add("no-scroll"); // Prevent scrolling
    setTimeout(function () {
      modal.style.opacity = "1"; // Fade in
    }, 10); // Small delay to ensure display property is set before opacity transition
  }

  // Function to close the modal and re-enable body scrolling
  function closeModal() {
    modal.style.opacity = "0"; // Fade out
    setTimeout(function () {
      modal.style.display = "none";
      document.body.classList.remove("no-scroll"); // Re-enable scrolling
    }, 500); // Delay to match the transition duration
  }

  // When the user clicks the button, open the modal 
  btn.onclick = openModal;

  // When the user clicks on <span> (x), close the modal
  span.onclick = closeModal;

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      closeModal();
    }
  }
})(jQuery);

(function (jQuery) {
  // Get the modal
  var modal = document.getElementById("elevate-plus-modal2");

  // Get the button that opens the modal
  var btn = document.getElementById("elevate-plus-icon2");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("elevate-Plus-modalclose2")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function () {
    modal.style.display = "block";
    document.body.classList.add("no-scroll"); // Prevent scrolling
    setTimeout(function () {
      modal.style.opacity = "1"; // Fade in
    }, 10); // Small delay to ensure display property is set before opacity transition
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.opacity = "0"; // Fade out
    document.body.classList.remove("no-scroll"); // Prevent scrolling
    setTimeout(function () {
      modal.style.display = "none";
    }, 500); // Delay to match the transition duration
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.opacity = "0"; // Fade out
      setTimeout(function () {
        modal.style.display = "none";
      }, 500); // Delay to match the transition duration
    }
  }
})(jQuery);

(function (jQuery) {
  // Get the modal
  var modal = document.getElementById("elevate-plus-modal3");

  // Get the button that opens the modal
  var btn = document.getElementById("elevate-plus-icon3");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("elevate-Plus-modalclose3")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function () {
    modal.style.display = "block";
    document.body.classList.add("no-scroll"); // Prevent scrolling
    setTimeout(function () {
      modal.style.opacity = "1"; // Fade in
    }, 10); // Small delay to ensure display property is set before opacity transition
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.opacity = "0"; // Fade out
    document.body.classList.remove("no-scroll");
    setTimeout(function () {
      modal.style.display = "none";
    }, 500); // Delay to match the transition duration
  }
  // When the user clicks anywhere outside of the modal content, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.opacity = "0"; // Fade out
      document.body.classList.remove("no-scroll");
      setTimeout(function () {
        modal.style.display = "none";
      }, 500); // Delay to match the transition duration
    }
  }

  // Prevent clicks inside the modal content from closing the modal
  modalContent.onclick = function (event) {
    event.stopPropagation();
  }

})(jQuery);

(function (jQuery) {
  var tabCarousel = jQuery('.tab-carousel-js');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');

      thisCarousel.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        var currentSlideIndex = (currentSlide ? currentSlide : 0);

        // Check if slider is at the start
        if (currentSlideIndex === 0) {
          thisCarousel.find('.slick-prev').hide(); // Hide left arrow
        } else {
          thisCarousel.find('.slick-prev').show(); // Show left arrow
        }

        // Check if slider is at the end
        if (currentSlideIndex + slick.options.slidesToShow >= slick.slideCount) {
          thisCarousel.find('.slick-next').hide(); // Hide right arrow
        } else {
          thisCarousel.find('.slick-next').show(); // Show right arrow
        }
      });

      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: true,
        infinite: true,
        //rtl:true,
        speed: 300,
        slidesToShow: item || 5,
        slidesToScroll: item || 5,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 2,
            slidesToScroll: itemmobile || 2,
            arrows: false
          }
        }
        ]
      });
    });
  };
})(jQuery);


(function (jQuery) {
  var tabCarousel = jQuery('.vertical-slider');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this);

      thisCarousel.slick({
        vertical: true,
        infinite: false,
        dots: false,
        arrows: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
          breakpoint: 1025,
          settings: {
            vertical: true,
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            vertical: false,
            arrows: false,
            slidesToShow: 3.5,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]

      });
    });
  };
})(jQuery);

//add to cart
(function (jQuery) {
  var tabCarousel = jQuery('.tab-carousel-js-addcart');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: true,
        infinite: true,
        //rtl:true,
        speed: 300,
        slidesToShow: item || 5,
        slidesToScroll: item || 5,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);

(function (jQuery) {
  var tabCarousel = jQuery('.tab-carousel-js-single');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: true,
        infinite: true,
        //rtl:true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 4,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);

//Gift card Slider Start

(function (jQuery) {
  var tabCarousel = jQuery('.tab-carousel-js-giftcard');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: true,
        infinite: true,
        //rtl:true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 1,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);

//Gift card Slider End

(function (jQuery) {
  var tabCarousel = jQuery('.product-carousel');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: false,
        infinite: true,
        //rtl:true,
        speed: 300,
        slidesToShow: item || 4,
        slidesToScroll: item || 4,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 2,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);

(function (jQuery) {
  var tabCarousel = jQuery('.product-carousel2');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        //rtl:true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 1,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);

(function (jQuery) {
  var tabCarouselContent = jQuery('#tabCarousel');

  jQuery('a[data-toggle="tab"]').length && jQuery('body').on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
    jQuery('.slick-slider').each(function () {
      jQuery(this).slick("getSlick").refresh();
    });

  });
})(jQuery);


// megadropdown

(function (jQuery) {
  var jsCarouselProducts = jQuery('.mega-dropdown-carousel-js');
  if (jsCarouselProducts.length) {
    jsCarouselProducts.each(function () {
      var slick = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');

      if (slick.item == 2) {
        slick.slick({
          lazyLoad: 'progressive',
          dots: false,
          arrows: true,
          infinite: true,
          outline: false,
          speed: 300,
          slidesToShow: item,
          slidesToScroll: item,
          adaptiveHeight: true,
          responsive: [{
            breakpoint: 1240,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 791,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          ]
        });
      };
      slick.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: true,

        infinite: true,
        speed: 300,
        slidesToShow: item || 2,
        slidesToScroll: item || 2,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);


// popular section

(function (jQuery) {
  var jsCarouselProducts = jQuery('.popular-carousel-js');
  if (jsCarouselProducts.length) {
    jsCarouselProducts.each(function () {
      var slick = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');

      if (slick.item == 2) {
        slick.slick({
          lazyLoad: 'progressive',
          dots: false,
          arrows: true,
          infinite: true,
          outline: false,
          speed: 300,
          slidesToShow: item,
          slidesToScroll: item,
          adaptiveHeight: true,
          responsive: [{
            breakpoint: 1240,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 791,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          ]
        });
      };
      slick.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: item || 3,
        slidesToScroll: item || 3,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);



(function (jQuery) {
  var blogCarousel = jQuery('.blog-carousel-js');
  if (blogCarousel.length) {
    blogCarousel.each(function () {
      var thisBlogCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisBlogCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 4,
        slidesToScroll: item || 4,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);

// disabled dot
(function (jQuery) {
  var blogCarousel = jQuery('.blog-carousel-js-new');
  if (blogCarousel.length) {
    blogCarousel.each(function () {
      var thisBlogCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisBlogCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        autoplay: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 1,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);


(function (jQuery) {
  var blogCarousel = jQuery('.pro-category-carousel-js-1');
  if (blogCarousel.length) {
    blogCarousel.each(function () {
      var thisBlogCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisBlogCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 1,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);

(function (jQuery) {
  var blogCarousel = jQuery('.pro-category-carousel-js-2');
  if (blogCarousel.length) {
    blogCarousel.each(function () {
      var thisBlogCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisBlogCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 1,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);
(function (jQuery) {
  var blogCarousel = jQuery('.pro-category-carousel-js-3');
  if (blogCarousel.length) {
    blogCarousel.each(function () {
      var thisBlogCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisBlogCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 1,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);

(function (jQuery) {
  var tabCarousel = jQuery('.tab-category-carousel-js');
  if (tabCarousel.length) {
    tabCarousel.each(function () {

      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 4,
        slidesToScroll: item || 4,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1901,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5
          }
        },
        {
          breakpoint: 1501,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);


(function (jQuery) {
  var tabCarousel = jQuery('.benefits-info-slider');
  if (tabCarousel.length) {
    tabCarousel.each(function () {

      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 4,
        slidesToScroll: item || 4,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1901,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5
          }
        },
        {
          breakpoint: 1501,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 3,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);
(function (jQuery) {
  var blogCarousel = jQuery('.testimonials-carousel-js');
  if (blogCarousel.length) {
    blogCarousel.each(function () {
      var thisBlogCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisBlogCarousel.slick({
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 1,
        slidesToScroll: item || 1,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);


(function (jQuery) {
  var tabCarousel = jQuery('.brand-carousel-js');
  if (tabCarousel.length) {
    tabCarousel.each(function () {

      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');


      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 5,
        slidesToScroll: item || 5,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1901,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 6
          }
        },
        {
          breakpoint: 1501,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5
          }
        },
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 1,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);


(function (jQuery) {
  var tabCarousel = jQuery('.aboutUs-carousel-js');
  if (tabCarousel.length) {
    tabCarousel.each(function () {
      var thisCarousel = jQuery(this),
        item = jQuery(this).data('item'),
        itemmobile = jQuery(this).data('itemmobile');

      if (thisCarousel.item == 5) {
        thisCarousel.slick({
          lazyLoad: 'progressive',
          dots: true,
          arrows: false,
          infinite: true,
          speed: 300,
          slidesToShow: item,
          slidesToScroll: item,
          adaptiveHeight: true,
          responsive: [{
            breakpoint: 1240,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4
            }
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 791,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }
          ]
        });
      };
      thisCarousel.slick({
        lazyLoad: 'progressive',
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: item || 4,
        slidesToScroll: item || 4,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 791,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: itemmobile || 2,
            slidesToScroll: itemmobile || 1
          }
        }
        ]
      });
    });
  };
})(jQuery);


jQuery(document).on("click", ".alert .close", function () {

  jQuery(this).animate({ opacity: 0 }, 1000).hide('slow');

});

(function (jQuery) {
  var mainSlider = jQuery('.js-newCore-items-slider-container .slider-for'),
    navSlider = jQuery('.js-newCore-items-slider-container .slider-nav');

  mainSlider.slick({
    lazyLoad: 'progressive',
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    adaptiveHeight: true,
    asNavFor: navSlider
  });

  navSlider.slick({
    lazyLoad: 'progressive',
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 8,
    slidesToScroll: 1,
    focusOnSelect: true,
    asNavFor: mainSlider,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2
      }
    }
    ]
  });
})(jQuery);





