document.oncontextmenu = returnFasle;
document.onkeydown = disablekeyboardnavigation;
if (document.layers) {
    document.captureEvents(Event.KEYDOWN);
}
document.keydown = disablekeyboardnavigation;
document.onkeypress = restrictEnterKey;
document.onkeypress = getProfile;

function returnFasle() {
    return false;
}

function getNewKeyAjax() {
    var postData = "";
    $.ajax({
        url: 'getnewkey.html', type: "POST", data: postData, success: function (data) {
            var jsondata = eval("(" + data + ")");
            var pbkey = window.localStorage || (window.globalStorage ? globalStorage[location.hostname] : null);
            pbkey = jsondata.KeyName;
            sessionStorage._cid = jsondata.KeyName;
        }
    });
}

function checksession() {
    setInterval(function () {
        $.ajax({
            url: 'session.html', type: "POST", data: "", success: function (data) {
                if (data === "-1") {
                    window.location.href = "login.html?expirysession=true";
                }
            }
        });
    }, 60000);
}

function SendTxnRequest(p_action) {
    if (!validateAndSet(document.frmmain)) {
        return false;
    }
    document.frmmain.flgAction.value = p_action;
    document.frmmain.submit();
    disableForm(document.frmmain);
    return true;
}

function SendRequest() {
    document.frmmain.submit();
    disableForm(document.frmmain);
    return true;
}

function SendActionRequest(p_action) {
    if (!validateAndSet(document.frmmain)) {
        return false;
    }
    document.frmmain.flgAction.value = p_action;
    document.frmmain.submit();
    return true;
}

function validateAndSet(p_form) {
    var obj = null;
    var tmpObj = null;
    var regObj = null;
    for (i = 0; i < p_form.elements.length; i++) {
        obj = p_form.elements[i];
        if ((!obj.disabled) && (obj.type == 'select-one' || obj.type == 'text')) {
            if (obj.id != "") {
                tmpObj = obj.id.split("#");
                if (tmpObj.length > 1) {
                    regObj = new RegExp(tmpObj[1]);
                    if (!regObj.test(obj.value)) {
                        alert("Please Enter " + tmpObj[0]);
                        obj.focus();
                        return false;
                    }
                }
            }
        }
        if (obj.type == 'select-one') {
            if ((tmpObj = p_form.elements[obj.name + 'text']) != null) {
                tmpObj.value = obj.options[obj.selectedIndex].text;
            }
        }
    }
    return true;
}

function disableForm(p_form) {
    var obj = null;
    var tmpObj = null;
    var regObj = null;
    for (i = 0; i < p_form.elements.length; i++) {
        if (p_form.elements[i].type == 'select-one' || p_form.elements[i].type == 'button' || p_form.elements[i].type == 'submit' || p_form.elements[i].type == 'checkbox' || p_form.elements[i].type == 'text') {
            p_form.elements[i].disabled = true;
        }
    }
    return true;
}

function enableForm(p_form) {
    var obj = null;
    var tmpObj = null;
    var regObj = null;
    for (i = 0; i < p_form.elements.length; i++) {
        if (p_form.elements[i].type == 'select-one' || p_form.elements[i].type == 'button' || p_form.elements[i].type == 'submit' || p_form.elements[i].type == 'checkbox') {
            p_form.elements[i].disabled = false;
        }
    }
    return true;
}

function disablekeyboardnavigation(e) {
    if (navigator.appName == 'Microsoft Internet Explorer') {
        if (event.keyCode == 8) {
            if ((event.keyCode == 8) && (event.srcElement.tagName != "INPUT")) {
                if (event.srcElement.tagName != "TEXTAREA") return false;
            }
        }
        if ((event.keyCode == 13) && (event.srcElement.tagName == "INPUT")) {
            return false;
        }
    } else if (navigator.appName == 'Netscape') {
        if ((e.which || e.keyCode) == 116) {
            alert(" This operation (Netscape) is not allowed.");
            return false;
        }
    }
    if (navigator.appName == "Microsoft Internet Explorer") {
        if (event.keyCode == 116) {
            alert("This operation (IE) is not allowed.");
            return false;
        }
    }
    return true;
}

function restrictEnterKey(evt) {
    var evt = (evt) ? evt : ((event) ? event : null);
    var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
    if ((evt.keyCode == 13) && (node.type == "text") || (evt.keyCode == 13) && (node.type == "button")) {
        return false;
    }
}

function getAcctDetailAjax(accountNo, itemTo) {
    $.ajax({
        dataType: 'json',
        url: 'ajaxGetAcctDetail.html',
        type: "POST",
        data: {acctNo: accountNo},
        success: function (data) {
            if (data !== null && typeof (data) !== 'undefined' && typeof (data.accountDetails) !== 'undefined' && data.accountDetails !== null) {
                itemTo.val(data.accountDetails.account.accountDesc);
            } else {
                itemTo.val("Tài khoản không tồn tại");
            }
        }
    });
}

function filterTable(items, _fname, _fvalue) {
    var _resultItem;
    $(items).find("tr").show();
    $(items).find("tr").each(function (index) {
        if (_fname === '') {
            _resultItem = $(this).find(".find:Contains(" + _fvalue + ")");
        } else {
            _resultItem = $(this).find(".find[name='" + _fname + "']:Contains(" + _fvalue + ")");
        }
        if (_resultItem.text()) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

function formatAllNumber() {
    $('.money').each(function () {
        formatNumber($(this));
        $(this).on('blur', function () {
            formatNumber($(this));
        });
    });
}

function formatNumber(obj) {
    var amt;
    amt = obj.val();
    var pos = amt.indexOf(",");
    if (pos > 0) {
        amt = amt.replace(/,/g, "");
    }
    var bvalue = CommaFormatted(amt);
    obj.val(bvalue);
}

function CommaFormatted(amount) {
    var delimiter = ",";
    var a = amount.split('.', 2);
    var d = a[1];
    var i = parseInt(a[0], 10);
    if (isNaN(i)) {
        return '';
    }
    var minus = '';
    if (i < 0) {
        minus = '-';
    }
    i = Math.abs(i);
    var n = String(i);
    var a = [];
    while (n.length > 3) {
        var nn = n.substr(n.length - 3);
        a.unshift(nn);
        n = n.substr(0, n.length - 3);
    }
    if (n.length > 0) {
        a.unshift(n);
    }
    n = a.join(delimiter);
    if (d == undefined) {
        amount = n;
    } else {
        amount = n;
    }
    amount = minus + amount;
    return amount;
}

function getKeys() {
    $.jCryption.getKeys("encSer.html", function (receivedKeys) {
        keys = receivedKeys;
    });
}

function SendEncRequest(p_element, keys, p_action) {
    var tmpVal = null;
    var tmpName = null;
    var regObj = null;
    if (p_element.type === 'hidden' || p_element.type === 'text' || p_element.type === 'password') {
        tmpVal = p_element.value;
        tmpName = p_element.name;
        $.jCryption.encrypt(tmpVal, keys, function (encrypted) {
            p_element.value = encrypted;
            $('#frmmain').append('<input type="hidden" name="jE" value="' + tmpName + '" />');
            if (p_action === '' || p_action === null) {
                SendRequest();
            } else {
                SendTxnRequest(p_action);
            }
        });
    }
}

function getProfile(e) {
    var keycode = e.keyCode;
    var alt = e.altKey;
    var ctrl = e.ctrlKey;
    var shift = e.shiftKey;
    if (keycode == '30' && shift == true && ctrl == true) {
        showProfile();
    }
}

function showProfile() {
    window.open("profile.html", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=50, width=1050, height=700");
}

function Stringformat(format, etc) {
    var arg = arguments;
    var i = 1;
    return format.replace(/%((%)|s)/g, function (m) {
        return m[2] || arg[i++]
    })
}

function printContent(divID, lablePrint, path) {
    document.frmmain.flgAction.value = "printDocument";
    var content = document.getElementById(divID).innerHTML;
    var headContent = document.getElementsByTagName('head')[0].innerHTML;
    var lablePrintName = lablePrint;
    var lableUserName = JsUser.UserName;
    if (typeof lablePrintName === 'undefined') {
        lablePrintName = '';
    }
    if (typeof lableUserName === 'undefined') {
        lableUserName = '';
    } else {
        lableUserName = 'Khách hàng: ' + lableUserName;
    }
    var strcontent = "<div class=\"row\"><div id=\"header\">    <div class=\"col-xs-1 \"><a href=\"#\"></a><a href=\"#\"><img class=\"visible-xs\" src=\"" + path + "/images/logovieta_sx.png\" style=\"height: 64px; float: left;\"></a></div><div class=\"col-xs-9 col-xs-offset-2 \" style=\"margin-top: 20px;font-weight: bold;padding-top: 15px;font-size: 18px;\">NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN VIỆT Á</div></div><div class=\"col-md-12\"><div class=\"row\"><div class=\"col-xs-6 col-xs-offset-3 text-center\"><h4><p>%s</p></h4></div></div><div class=\"row\"><div class=\"col-xs-10 col-xs-offset-2 text-left\" style=\"margin-top: 10px;margin-bottom: 40px;\">%s</div></div></div><div class=\"col-md-12\"><div class=\"row\">%s</div></div><div class=\"pull-left\" style=\"margin-top: 30px;margin-bottom: 50px; padding-left: 50px;\">Người duyệt</div>    <div class=\"pull-right\" style=\"margin-top: 30px;margin-bottom: 50px; padding-right: 50px;\">Người lập</div></div>";
    var catContent = Stringformat(strcontent, lablePrintName, lableUserName, content);
    catContent = catContent.replace(/\[lg|sm|md]/g, "xs");
    var tmp = '';
    tmp = tmp + '<html><head><title>Print</title>';
    tmp = tmp + headContent;
    tmp = tmp + '</head><body>';
    tmp = tmp + catContent;
    tmp = tmp + '</body>';
    tmp = tmp + '</html>';
    var oldPage = document.body.innerHTML;
    document.body.innerHTML = "";
    document.body.innerHTML = tmp;
    window.print();
    document.body.innerHTML = oldPage;
}

function addMarkInputError(nameinput, isfocus) {
    $('[name="' + nameinput + '"]').parent().parent().addClass("has-error");
    if (isfocus == 'Y') {
        $('[name="' + nameinput + '"]').focus();
    }
}

function writeCookie(name, value, days) {
    var expiration = "";
    if (parseInt(days) > 0) {
        var date = new Date();
        date.setTime(date.getTime() + parseInt(days) * 24 * 60 * 60 * 1000);
        expiration = '; expires=' + date.toGMTString();
    }
    document.cookie = name + '=' + value + expiration + '; path=/';
}

function readCookie(name) {
    if (!document.cookie) {
        return '';
    }
    var searchName = name + '=';
    var data = document.cookie.split(';');
    for (var i = 0; i < data.length; i++) {
        while (data[i].charAt(0) === ' ') {
            data[i] = data[i].substring(1, data[i].length);
        }
        if (data[i].indexOf(searchName) === 0) {
            return data[i].substring(searchName.length, data[i].length);
        }
    }
    return '';
}

function close_popup() {
    return true;
}

function gotourl() {
    location.href = window.location.pathname;
}