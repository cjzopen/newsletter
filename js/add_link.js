$(document).ready(function() {
    $.add_links = function(node, te, ln) {
        var pos, skip, spannode, middlebit, endbit, middleclone;
        skip = 0;
        if (node.nodeType == 3) {
            pos = node.data.toUpperCase().indexOf(te);
            if (pos >= 0 && node.parentNode.className != 'keyword') {
                var pre = node.nodeValue.substr(pos - 1, 1);
                var post = node.nodeValue.substr(pos + te.length, 1)
                spannode = document.createElement('a');
                spannode.href = ln;
                spannode.className = 'keyword';
                spannode.target = '_blank';
                middlebit = node.splitText(pos);
                endbit = middlebit.splitText(te.length);
                middleclone = middlebit.cloneNode(true);
                spannode.appendChild(middleclone);
                middlebit.parentNode.replaceChild(spannode, middlebit);
                skip = 1;
            }
        } else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName) && node.nodeName != 'A') {
            for (var i = 0; i < node.childNodes.length; ++i) {
                i += $.add_links(node.childNodes[i], te, ln);
            }
        }
        return skip;
    }

    function set_link(keyword, url) {
        this.keyword = keyword;
        this.url = url;
    }

    var links = new Array();

    links.push(new set_link('AFEIS', 'https://www.ares.com.tw/products/afeis'));
    links.push(new set_link('ARGOERP', 'https://argoerp.ares.com.tw'));
    links.push(new set_link('CIMES', 'https://cimes.ares.com.tw'));
    links.push(new set_link('EARESBANK', 'https://www.ares.com.tw/products/earesbank'));
    links.push(new set_link('ERP', 'https://argoerp.ares.com.tw'));
    links.push(new set_link('FSTP', 'https://www.ares.com.tw/products/fstp'));
    links.push(new set_link('GD-CRM', 'https://www.ares.com.tw/products/gd-crm'));
    links.push(new set_link('GV', 'https://www.ares.com.tw/products/Local-Template/#gv'));
    links.push(new set_link('GIB', 'https://www.ares.com.tw/products/Local-Template/#gib'));
    links.push(new set_link('電子發票', 'https://www.ares.com.tw/products/Local-Template/#egui'));
    links.push(new set_link('EGUI', 'https://www.ares.com.tw/products/Local-Template/#egui'));
    links.push(new set_link('十號公報', 'https://www.ares.com.tw/products/Local-Template/#sfas'));
    links.push(new set_link('HCP', 'https://hcp.ares.com.tw'));
    links.push(new set_link('NM', 'https://www.ares.com.tw/products/Local-Template/#nm'));
    links.push(new set_link('UIAM', 'https://pki.ares.com.tw/home.asp'));
    links.push(new set_link('UPKI', 'https://pki.ares.com.tw/home.asp'));
    links.push(new set_link('PLM', 'https://oracle.ares.com.tw/plm/'));
    // links.push(new set_link('SWIFT', 'https://www.ares.com.tw/products/swift'));
    links.push(new set_link('IAM', 'https://pki.ares.com.tw/'));
    links.push(new set_link('PKI', 'https://pki.ares.com.tw/'));
    links.push(new set_link('SSO', 'https://pki.ares.com.tw/home.asp?productId=uiam'));
    links.push(new set_link('單一簽入', 'https://pki.ares.com.tw/home.asp?productId=uiam'));
    links.push(new set_link('SINGLE SIGN ON', 'https://pki.ares.com.tw/home.asp?productId=uiam'));
    links.push(new set_link('人力資產規劃系統', 'https://hcp.ares.com.tw'));
    links.push(new set_link('HRM', 'https://hcp.ares.com.tw'));
    links.push(new set_link('HR', 'https://hcp.ares.com.tw'));
    links.push(new set_link('人力資源', 'https://hcp.ares.com.tw'));
    links.push(new set_link('製造執行系統', 'https://cimes.ares.com.tw'));
    links.push(new set_link('MES', 'https://cimes.ares.com.tw'));
    // links.push(new set_link('E管家', 'https://www.ares.com.tw/services/emsg'));
    links.push(new set_link('生產履歷', 'https://cimes.ares.com.tw'));
    links.push(new set_link('IFRS', 'https://argoerp.ares.com.tw/trend/IFRS'));
    // links.push(new set_link('EUP', 'https://www.ares.com.tw/services/eup'));
    links.push(new set_link('委外服務', 'https://www.ares.com.tw/services/outsourcing/'));
    links.push(new set_link('委外', 'https://www.ares.com.tw/services'));
    links.push(new set_link('政府專案', 'https://www.ares.com.tw/services/gov/'));
    // links.push(new set_link('AML', 'https://www.ares.com.tw/products/aml'));
    // links.push(new set_link('洗錢防治', 'https://www.ares.com.tw/products/aml'));
    // links.push(new set_link('知識管理', 'https://www.ares.com.tw/services/km/'));
    links.push(new set_link('薪資密封袋', 'https://pki.ares.com.tw/products/usp/'));
    links.push(new set_link('KM', 'https://smekm.moeasmea.gov.tw'));
    links.push(new set_link('E公務', 'https://g2e.nat.gov.tw'));
    links.push(new set_link('CRYPTO SERVER', 'https://pki.ares.com.tw/home.asp?productId=cryptoserver'));
    links.push(new set_link("NUNTIO","https://www.ares.com.tw/products/nuntio/"));
    links.push(new set_link('資通商業智慧 KPI 管理模組', 'https://www.ares.com.tw/products/analyzer/aresbi-kpitemplate/'));
    links.push(new set_link('ARES BI KPI TEMPLATE', 'https://www.ares.com.tw/products/analyzer/aresbi-kpitemplate/'));
    links.push(new set_link("資通法規報表申報平台","https://www.ares.com.tw/products/nuntio/"));
    links.push(new set_link('OBU', 'https://www.ares.com.tw/products/afeis/'));
    links.push(new set_link('大陸核心系統', 'https://www.ares.com.tw/products/ascbs/'));
    links.push(new set_link('GCRS', 'https://www.ares.com.tw/products/gcrs/'));
    links.push(new set_link('集團合併報表系統', 'https://www.ares.com.tw/products/gcrs/'));
    links.push(new set_link('隱私保鑣', 'https://ares-pp.ares.com.tw/'));
    links.push(new set_link('ARES PRIVACY PROTECTOR', 'https://ares-pp.ares.com.tw/'));
    links.push(new set_link('ARES PP', 'https://ares-pp.ares.com.tw/'));
    links.push(new set_link('ORACLE EBS', 'https://oracle.ares.com.tw/'));
    // links.push(new set_link('CTR', 'https://www.ares.com.tw/products/ctr/'));
    // links.push(new set_link('報表管理系統', 'https://www.ares.com.tw/products/ctr/'));
    // links.push(new set_link('CMO', 'https://www.ares.com.tw/products/cmo/'));
    // links.push(new set_link('預算編製系統', 'https://www.ares.com.tw/products/cmo/'));
    links.push(new set_link('NHMS', 'https://www.ares.com.tw/products/nhms/'));
    links.push(new set_link('CRYPTO SERVER', 'https://pki.ares.com.tw/en/products/cs/'));
    links.push(new set_link('MOTP', 'https://pki.ares.com.tw/products/motp/'));
    // links.push(new set_link('威航', 'https://www.ares.com.tw/events/ArgoERP-Vair-Contract'));
    // links.push(new set_link('V AIR', 'https://www.ares.com.tw/events/ArgoERP-Vair-Contract'));
    links.push(new set_link('資通電腦', 'https://www.ares.com.tw/'));
    links.push(new set_link('資通', 'https://www.ares.com.tw/'));
    links.push(new set_link('ANALYZER', 'https://www.ares.com.tw/products/analyzer/'));
    links.push(new set_link('FORTIFY', 'https://www.ares.com.tw/products/fortify/'));

    $('article,aside,.key-words').each(function() {
        for (var i = 0; i < links.length; i++) {
            $.add_links(this, links[i].keyword, links[i].url);
        }
    });

});
