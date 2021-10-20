Travel.SearchPrm = {
    Itinerary: 1,
    MonthSelect: !1,
    Adt: 1,
    Chd: 0,
    Inf: 0,
    Flight: [{
        Id: 0,
        StartPoint: "",
        StartPointText: "",
        EndPoint: "",
        EndPointText: "",
        DepartureDate: Travel.Date.DepartureDate(),
        ReturnDate: Travel.Date.ReturnDate(),
        DepartureMonth: Travel.Date.CurrentMonth(),
        ReturnMonth: Travel.Date.CurrentMonth()
    }]
};
Travel.Search = {
    Form: function () {
        var t = Travel.SearchPrm, n = "";
        n += '<div class="ftl-base-header ftl-search-header"><span>' + TravelSearchLabel.lblTitle + "<\/span><\/div>";
        n += '<ul class="tab-services clearfix"><li class="tab-flight active"><span>Vé máy bay<\/span><\/li><\/ul>';
        n += '<ul class="ftlSearch-option">';
        n += '   <li name="ftlSearch-trips" value="1"><span class="checkmark ' + (t.Itinerary == 1 ? "ftl-active" : "") + '"><\/span><span>' + TravelSearchLabel.lblOneWay + "<\/span><\/li>";
        n += '   <li name="ftlSearch-trips" value="2"><span class="checkmark ' + (t.Itinerary == 2 ? "ftl-active" : "") + '"><\/span><span> ' + TravelSearchLabel.lblRoundTrips + "<\/span><\/li>";
        n += '   <li name="ftlSearch-trips" value="3"><span class="checkmark ' + (t.Itinerary == 3 ? "ftl-active" : "") + '"><\/span><span> ' + TravelSearchLabel.lblMutilTrips + "<\/span><\/li>";
        n += '   <li><div name="ftlSearch-month"><span class="checkmark' + (t.MonthSelect ? " ftl-active" : "") + ' ftl-mobile"><\/span><span>Tìm vé rẻ cả tháng &nbsp;<\/span><span class="checkmark ' + (t.MonthSelect ? " ftl-active" : "") + ' ftl-desktop"><\/span><\/div><\/li>';
        n += "<\/ul>";
        n += '<div class="ftlSearch-main">';
        n += '  <div class="ftlSearch-flight">';
        n += t.Itinerary == 1 || t.Itinerary == 2 ? Travel.Search.Main(t) : Travel.Search.MainMutil(t);
        n += "  <\/div>";
        n += '  <div class="ftlSearch-wraper">';
        n += '     <div class="ftlSearch-posion">';
        n += '        <div class="ftlSearch-passager ftl-tooltip">';
        n += '           <p class="ftlSearch-adt">' + TravelSearchLabel.lblAdutl + "<\/p>";
        n += '           <ul class="ftlSearch-number" type="adt">';
        n += '              <li><button type="button" class="ftlSearch-minu"><i class="fa fa-minus-square-o ' + (t.Adt > 1 ? "ftl-active" : "ftl-unactive") + '"><\/i><\/button><\/li>';
        n += "              <li><span>" + t.Adt + "<\/span><\/li>";
        n += '              <li><button type="button" class="ftlSearch-plus"><i class="fa fa-plus-square-o ' + (t.Adt < 9 ? "ftl-active" : "ftl-unactive") + '"><\/i><\/button><\/li>';
        n += "           <\/ul>";
        n += '           <div class="ftl-tooltip-box">' + TravelSearchLabel.lblPaxAdt + "<\/div>";
        n += "        <\/div>";
        n += '        <div class="ftlSearch-passager ftl-tooltip">';
        n += '           <p class="ftlSearch-chd">' + TravelSearchLabel.lblChild + "<\/p>";
        n += '           <ul class="ftlSearch-number" type="chd">';
        n += '              <li><button type="button" class="ftlSearch-minu"><i class="fa fa-minus-square-o ' + (t.Chd > 0 ? "ftl-active" : "ftl-unactive") + '"><\/i><\/button><\/li>';
        n += "              <li><span>" + t.Chd + "<\/span><\/li>";
        n += '              <li><button type="button" class="ftlSearch-plus"><i class="fa fa-plus-square-o ' + (t.Chd < 9 ? "ftl-active" : "ftl-unactive") + '"><\/i><\/button><\/li>';
        n += "           <\/ul>";
        n += '           <div class="ftl-tooltip-box">' + TravelSearchLabel.lblPaxChd + "<\/div>";
        n += "        <\/div>";
        n += '        <div class="ftlSearch-passager ftl-tooltip">';
        n += '           <p class="ftlSearch-inf">' + TravelSearchLabel.lblInfant + "<\/p>";
        n += '           <ul class="ftlSearch-number" type="inf">';
        n += '              <li><button type="button" class="ftlSearch-minu"><i class="fa fa-minus-square-o ' + (t.Inf > 0 ? "ftl-active" : "ftl-unactive") + '"><\/i><\/button><\/li>';
        n += "              <li><span>" + t.Inf + "<\/span><\/li>";
        n += '              <li><button type="button" class="ftlSearch-plus"><i class="fa fa-plus-square-o ' + (t.Inf < 2 ? "ftl-active" : "ftl-unactive") + '"><\/i><\/button><\/li>';
        n += "           <\/ul>";
        n += '           <div class="ftl-tooltip-box">' + TravelSearchLabel.lblPaxInf + "<\/div>";
        n += "        <\/div>";
        n += "     <\/div>";
        n += '     <div class="ftlSearch-posion">';
        n += '        <button type="button" class="ftlSearch-button"><i class="fa fa-search"><\/i> ' + TravelSearchLabel.lblButtonSearch + "<\/button>";
        n += "     <\/div>";
        n += "  <\/div>";
        n += "<\/div>";
        n += '<div class="ftl-clear" />';
        $("#vmbSearch").html(n);
        t.Itinerary == 3 ? Travel.Date.DateMutil() : Travel.Date.DatePicker()
    }, Main: function (n) {
        var e = n.Flight, i = null, f = "", r = "", u, t;
        try {
            i = e[0];
            _flightReturn = e[1];
            i != undefined && (f = i.DepartureDate, r = i.ReturnDate);
            _flightReturn != undefined && (r = _flightReturn.ReturnDate, r == undefined && (r = f))
        } catch (s) {
            console.log(s)
        }
        if (u = n.Itinerary == 1 ? "ftl-unactive" : "", t = "", t += '<ul class="ftlSearch-list">', t += "  <li>", t += "     <p>" + TravelSearchLabel.lblDeparture + "<\/p>", t += '     <div class="ftlSearch-group">', t += '        <input type="text" class="ftl-search-req ftl-location" location="departure" placeholder="' + TravelSearchLabel.lblAirCodeInput + '" value="' + i.StartPointText + '" readonly>', t += '        <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>', t += "     <\/div>", t += "  <\/li>", t += '  <li class="button convert"><\/li>', t += "  <li>", t += "     <p>" + TravelSearchLabel.lblArrived + "<\/p>", t += '     <div class="ftlSearch-group">', t += '       <input type="text" class="ftl-search-req ftl-location" location="arrived" placeholder="' + TravelSearchLabel.lblAirCodeInput + '" value="' + i.EndPointText + '" readonly>', t += '       <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>', t += "     <\/div>", t += "  <\/li>", n.MonthSelect) {
            var h = Travel.Date.CurrentMonth(), c = i.DepartureMonth, o = i.ReturnMonth, l = Travel.Date.ListMonth(h),
                a = Travel.Date.ListMonth(o);
            t += "  <li>";
            t += "     <p>" + TravelSearchLabel.lblHolMonthDeparture + "<\/p>";
            t += '     <div class="ftlSearch-group">';
            t += Travel.Search.SelectMonth("departure", l, c, u);
            t += '        <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>';
            t += "     <\/div>";
            t += "  <\/li>";
            t += '  <li class="button"><\/li>';
            t += '  <li class="' + (n.Itinerary == 1 ? "ftl-unactive" : "") + '">';
            t += "     <p>" + TravelSearchLabel.lblHolMonthReturn + "<\/p>";
            t += '     <div class="ftlSearch-group">';
            t += Travel.Search.SelectMonth("return", a, o, u);
            t += '        <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>';
            t += "     <\/div>";
            t += "  <\/li>"
        } else t += "  <li>", t += "     <p>" + TravelSearchLabel.lblHolDateDeparture + "<\/p>", t += '     <div class="ftlSearch-group">', t += '        <input type="datetime" id="ftl-date-departure" class="ftl-search-req"  placeholder="' + TravelSearchLabel.lblDateDepartureSelect + '" value="' + f + '" readonly>', t += '        <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>', t += "     <\/div>", t += "  <\/li>", t += '  <li class="button"><\/li>', t += '  <li class="' + u + '">', t += "     <p>" + TravelSearchLabel.lblHolDateReturn + "<\/p>", t += '     <div class="ftlSearch-group">', t += '        <input type="datetime" id="ftl-date-return" class="ftl-search-req" placeholder="' + TravelSearchLabel.lblDateReturnSelect + '" value="' + r + '" readonly ' + (n.Itinerary == 1 ? "disabled" : "") + ">", t += '        <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>', t += "     <\/div>", t += "     <\/li>";
        return t + "<\/ul>"
    }, MainMutil: function (n) {
        var i = n.Flight, t = "";
        return i.map(function (n, i) {
            t += '<ul class="ftlSearch-list" itinerary="' + n.Id + '">';
            t += "  <li>";
            t += "     <p>" + TravelSearchLabel.lblDeparture + "<\/p>";
            t += '     <div class="ftlSearch-group">';
            t += '        <input type="text" class="ftl-search-req ftl-location" location="departure" placeholder="' + TravelSearchLabel.lblAirCodeInput + '" value="' + n.StartPointText + '" readonly>';
            t += '        <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>';
            t += "     <\/div>";
            t += "  <\/li>";
            t += '  <li class="button convert"><\/li>';
            t += "  <li>";
            t += "     <p>" + TravelSearchLabel.lblArrived + "<\/p>";
            t += '     <div class="ftlSearch-group">';
            t += '        <input type="text" class="ftl-search-req ftl-location" location="arrived" placeholder="' + TravelSearchLabel.lblAirCodeInput + '" value="' + n.EndPointText + '" readonly>';
            t += '        <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>';
            t += "     <\/div>";
            t += "  <\/li>";
            t += "  <li>";
            t += "     <p>" + TravelSearchLabel.lblHolDateDeparture + "<\/p>";
            t += '     <div class="ftlSearch-group">';
            t += '        <input type="datetime" class="ftl-search-req ftl-date-mutil" value="' + n.DepartureDate + '" readonly>';
            t += '        <span class="ftl-input-icon"><i class="fa fa-angle-down"><\/i><\/span>';
            t += "     <\/div>";
            t += "  <\/li>";
            t += '  <li class="button"><\/li>';
            t += '  <li class="ftlSearch-action ' + (i == 0 ? "ftl-unactive" : "") + '">';
            t += '     <div class="ftl-search-multi">';
            t += '       <button type="button" class="ftlSearchBtn Delete"><span class="fa fa-minus-square-o"><\/span> ' + TravelSearchLabel.lblDelete + "<\/button>";
            t += '       <button type="button" class="ftlSearchBtn Add"><span class="fa fa-plus-square-o"><\/span> ' + TravelSearchLabel.lblAdd + "<\/button>";
            t += "     <\/div>";
            t += "  <\/li>";
            t += "<\/ul>"
        }), t
    }, AutoAirPort: function (n, t, i) {
        var e = Travel.SearchPrm, u;
        i ? ($li = n.parent().closest("li"), objMobile = $li.find(".ftl-city-search-mobile"), obj = objMobile.find(".ftl-search-geocode")) : ($li = n, obj = $li.find(".ftl-search-geocode"));
        var o = e.Location, h = $li.parent().closest("ul"), s = parseInt(h.attr("itinerary")) || 0, f = "",
            r = e.Flight;
        t.map(function (n) {
            var i = "", t, u;
            e.Itinerary != 3 && o == "arrived" ? r != null && r.length > 0 && (t = r[0], i = t.StartPoint) : e.Itinerary == 3 && o == "arrived" && r != null && r.length > 0 && (t = r.filter(function (n) {
                return n.Id == s
            })[0]);
            n.AirportCode != i && (u = e.MonthSelect ? " ftl-disable" : "", f += '<div class="ftl-search-auto' + (n.CountryCode.toLowerCase() != "vn" ? u : "") + '" code="' + n.AirportCode + '" city-name="' + n.CityName + '" country-name="' + n.CountryName + '" location="' + o + '">', f += "   <label><b>" + n.AirportCode + "<\/b>" + n.AirportName.concat(", ").concat(n.CityName) + "<\/label>", f += '   <span class="ftl-search-auto-name">' + n.CountryName + "<\/span>", f += "<\/div>")
        });
        obj.length == 0 ? (u = "", i ? (u += '<div class="ftl-search-geocode ftl-modal ftl-open">', u += f, u += "<\/div>", $(".ftl-search-geocode").remove(), $(".ftl-city-search-mobile .ftl-input-group").append(u)) : (u += '<div class="ftl-search-geocode ftl-modal ftl-open">', u += f, u += "<\/div>", $li.append(u))) : (obj.html(f), obj.addClass("ftl-open"));
        $(".ftl-search-auto").click(function () {
            var n;
            $(".ftl-modal").removeClass("ftl-open");
            var t = $(this).attr("code"), u = $(this).attr("city-name"), f = $(this).attr("country-name"),
                h = Travel.SearchPrm.Location, i = u.concat(", ").concat(f).concat(" - ").concat(t);
            e.Itinerary == 3 ? (n = r.filter(function (n) {
                return n.Id == s
            })[0], n != null && (o == "departure" ? (n.StartPoint = t, n.StartPointText = i) : (n.EndPoint = t, n.EndPointText = i))) : r != null && r.length > 0 && (n = r[0], h == "departure" ? (n.StartPoint = t, n.StartPointText = i) : (n.EndPoint = t, n.EndPointText = i));
            Travel.Search.Form()
        })
    }, AirportQuick: function (n) {
        var t = "", f = "", i = "", r = Travel.SearchPrm.Location,
            v = r == "departure" ? TravelSearchLabel.lblCityDeparture : TravelSearchLabel.lblCityArrived, l, a, h, c, u;
        if (t += '<div class="ftl-city-box-header">', t += '  <p><i class="fa fa-map-marker-alt"><\/i> ' + v + "<\/p>", t += '  <a class="ftl-city-close">', t += '    <i class="fa fa-times"><\/i>', t += "  <\/a>", t += "<\/div>", t += '<div class="ftl-city-search-mobile">', t += '    <div class="ftl-input-group">', t += '      <input type="text" class="ftl-location-mobile" placeholder="' + TravelSearchLabel.lblAirCodeInput + '">', t += '      <span class="ftl-input-icon">', t += "      <\/span>", t += "    <\/div>", t += "<\/div>", f = '<div class="ftl-tabs-city"><ul class="ftl-tabs-container">', l = n.parent().closest("ul"), a = parseInt(l.attr("itinerary")) || 0, TravelSearchGeo != undefined && TravelSearchGeo.length > 0) {
            var e = "", o = Travel.SearchPrm, s = o.Flight;
            s != null && s.length > 0 && (o.Itinerary == 3 && r == "arrived" ? (h = s.filter(function (n) {
                return n.Id == a
            })[0], e = h.StartPoint) : o.Itinerary != 3 && r == "arrived" && (h = s[0], e = h.StartPoint));
            TravelSearchGeo.map(function (n, t) {
                var u = "tab-".concat((t + 1).toString()), h = t == 0 ? ' class="ftl-active"' : "",
                    c = t == 0 ? " ftl-open" : "", s = o.MonthSelect ? ' class="ftl-disable"' : "";
                f += "<li" + h + ' target="' + u + '"><a>' + n.title + "<\/a><\/li>";
                i += '<div class="ftl-list-cities' + c + '" id="' + u + '">';
                n.subData == null || n.subData.length == 0 ? (i += '<div class="ftl-region-title alone">' + n.title + "<\/div>", i += '<ul class="ftl-list-point">', n.dataGeoCode.map(function (n) {
                    if (n.code != e) {
                        var t = n.fontWeight != null && n.fontWeight ? ' class="ftl-highlight"' : "";
                        i += "<li" + (n.countryCode.toLowerCase() != "vn" ? s : "") + ' code="' + n.code + '" city-name="' + n.cityName + '" country-name="' + n.countryName + '" country-code="' + n.countryCode + '" location="' + r + '">';
                        i += "  <label" + t + ">" + n.cityName.concat(" (").concat(n.code).concat(")") + "<\/label>";
                        i += "<\/li>"
                    }
                }), i += "<\/ul>") : n.subData.map(function (n) {
                    i += '<div class="ftl-region-title">' + n.title + "<\/div>";
                    i += '<ul class="ftl-list-point">';
                    n.dataGeoCode.map(function (n) {
                        if (n.code != e) {
                            var t = n.fontWeight != null && n.fontWeight ? ' class="ftl-highlight"' : "";
                            i += "<li" + (n.countryCode.toLowerCase() != "vn" ? s : "") + ' code="' + n.code + '" city-name="' + n.cityName + '" country-name="' + n.countryName + '" country-code="' + n.countryCode + '" location="' + r + '">';
                            i += "  <label" + t + ">" + n.cityName.concat(" (").concat(n.code).concat(")") + "<\/label>";
                            i += "<\/li>"
                        }
                    });
                    i += "<\/ul>"
                });
                i += "<\/div>"
            })
        }
        f += "<\/ul>";
        t += f + i + "<\/div>";
        c = n.find(".ftl-search-code");
        c.length == 0 ? (u = "", u += '<div class="ftl-search-code ftl-city-box ftl-modal ftl-open">', u += t, u += "<\/div>", n.append(u)) : (c.html(t), c.addClass("ftl-open"))
    }, SelectMonth: function (n, t, i, r) {
        var u = '<select id="ftl-month-' + n + '" class="ftl-input" ' + r + ">";
        return t.map(function (n) {
            var t = "";
            n == i && (t = "selected");
            u += "<option " + t + ">" + n + "<\/option>"
        }), u += "<\/select>"
    }
};
Travel.SearchReady = function () {
    $(document).on("click", "[name=ftlSearch-trips]", function () {
        var t = parseInt($(this).val()) || 0, n = Travel.SearchPrm, i, r;
        n.Itinerary = t;
        i = n.Flight;
        FlightFirst = i.filter(function (n) {
            return n.Id == 0
        })[0];
        n.Flight = [];
        n.Flight.push(FlightFirst);
        t == 3 && (n.MonthSelect = !1, r = {
            Id: FlightFirst.Id + 1,
            StartPoint: FlightFirst.EndPoint,
            StartPointText: FlightFirst.EndPointText,
            EndPoint: "",
            EndPointText: "",
            DepartureDate: FlightFirst.DepartureDate,
            ReturnDate: FlightFirst.ReturnDate
        }, n.Flight.push(r));
        Travel.Search.Form()
    });
    $(document).on("click", "[name=ftlSearch-month]", function () {
        var n = Travel.SearchPrm, t = n.MonthSelect;
        n.MonthSelect = t ? !1 : !0;
        n.Itinerary == 3 && (n.Itinerary = 2);
        Travel.Search.Form()
    });
    $(document).on("click", ".ftlSearch-plus", function () {
        var r = Travel.SearchPrm, n = r.Adt, i = r.Chd, t = r.Inf, u;
        $parent = $(this).closest("ul");
        u = $parent.attr("type");
        u == "adt" ? (n < 9 && n++, n > 1 && n < 9 && $parent.find(".ftlSearch-minu > i").removeClass("ftl-unactive").addClass("ftl-active"), n == 9 && $(this).find("i").removeClass("ftl-active").addClass("ftl-unactive"), $parent.find("span").text(n)) : u == "chd" ? (i < 9 && i++, i > 0 && i < 9 && $parent.find(".ftlSearch-minu > i").removeClass("ftl-unactive").addClass("ftl-active"), i == 9 && $(this).find("i").removeClass("ftl-active").addClass("ftl-unactive"), $parent.find("span").text(i)) : u == "inf" && (t < 2 && t < n && t++, t > 0 && t < 2 && $parent.find(".ftlSearch-minu > i").removeClass("ftl-unactive").addClass("ftl-active"), t == 2 && $(this).find("i").removeClass("ftl-active").addClass("ftl-unactive"), $parent.find("span").text(t));
        r.Adt = n;
        r.Chd = i;
        r.Inf = t
    });
    $(document).on("click", ".ftlSearch-minu", function () {
        var n = Travel.SearchPrm, t = n.Adt, i = n.Chd, r = n.Inf, u;
        $parent = $(this).closest("ul");
        u = $parent.attr("type");
        u == "adt" ? (t > 1 && t--, t == 1 ? $(this).find("i").removeClass("ftl-active").addClass("ftl-unactive") : $parent.find("i").removeClass("ftl-unactive").addClass("ftl-active"), $parent.find("span").text(t)) : u == "chd" ? (i > 0 && i--, i == 0 ? $(this).find("i").removeClass("ftl-active").addClass("ftl-unactive") : $parent.find("i").removeClass("ftl-unactive").addClass("ftl-active"), $parent.find("span").text(i)) : u == "inf" && (r > 0 && r--, r == 0 ? $(this).find("i").removeClass("ftl-active").addClass("ftl-unactive") : $parent.find("i").removeClass("ftl-unactive").addClass("ftl-active"), $parent.find("span").text(r));
        n.Adt = t;
        n.Chd = i;
        n.Inf = r
    });
    $(document).on("click", ".ftlSearchBtn.Delete", function () {
        var t = $(this).parents(".ftlSearch-list"), i = parseInt(t.attr("itinerary")) || 0, r = Travel.SearchPrm.Flight,
            n = r.filter(function (n) {
                return n.Id != i
            });
        n != null && n.length > 1 ? (n.map(function (n, t) {
            n.Id = t
        }), Travel.SearchPrm.Flight = n) : Travel.SearchPrm.Itinerary = 2;
        Travel.Search.Form()
    });
    $(document).on("click", ".ftlSearchBtn.Add", function () {
        var r = $(this).parents(".ftlSearch-list"), i = parseInt(r.attr("itinerary")) || 0, t = Travel.SearchPrm.Flight,
            n = [], u;
        t != null && t.length > 0 && t.length < 5 && (u = {}, t.map(function (t, r) {
            if (r < i) n.push(t); else if (r == i) {
                n.push(t);
                var u = {
                    Id: r + 1,
                    StartPoint: t.EndPoint,
                    StartPointText: t.EndPointText,
                    EndPoint: "",
                    EndPointText: "",
                    DepartureDate: t.DepartureDate,
                    RerturnDate: t.RerturnDate
                };
                n.push(u)
            } else t.Id = r + 1, n.push(t)
        }), Travel.SearchPrm.Flight = n);
        Travel.Search.Form()
    });
    $(document).on("change", "#ftl-month-departure", function () {
        var i = $(this).val(), r = Travel.SearchPrm, n = r.Flight, t;
        n != null && n.length > 0 && (t = n[0], t.DepartureMonth = i, t.ReturnMonth = i);
        Travel.Search.Form()
    });
    $(document).on("change", "#ftl-month-return", function () {
        var i = $(this).val(), r = Travel.SearchPrm, n = r.Flight, t;
        n != null && n.length > 0 && (t = n[0], t.ReturnMonth = i)
    });
    $(document).on("change", "input.ftl-date-mutil", function () {
        var t, i, n, r;
        $ul = $(this).parent().closest("ul");
        t = parseInt($ul.attr("itinerary")) || 0;
        i = Travel.SearchPrm.Flight;
        i != null && i.length > 0 && (n = $(this).val(), r = Travel.Date.ConvertYYYMMDD(n), i.map(function (i, u) {
            var f = Travel.Date.ConvertYYYMMDD(i.DepartureDate);
            t > u && f > r ? i.DepartureDate = n : t < u && f < r ? i.DepartureDate = n : u == t && (i.DepartureDate = n)
        }));
        Travel.Search.Form()
    });
    $(document).on("click", "input.ftl-location", function () {
        $(".ftl-city-box").remove();
        var n = $(this).attr("location");
        $(this).removeClass("ftl-req-active");
        $li = $(this).parent().closest("li");
        Travel.SearchPrm.Location = n;
        Travel.Search.AirportQuick($li);
        $li.children().find(".ftl-location-mobile").focus()
    });
    $(document).on("keyup", "input.ftl-location", function () {
        $(".ftl-city-box").remove();
        var n = $(this).attr("location");
        $(this).removeClass("ftl-req-active");
        $li = $(this).parent().closest("li");
        Travel.SearchPrm.Location = n;
        Travel.Search.AirportQuick($li);
        $li.children().find(".ftl-location-mobile").focus()
    });
    $(document).on("keyup", "input.ftl-location-mobile", function () {
        var t = $(this).parent().closest("div"), i = t.children("span"), n;
        i.addClass("ftl-input-loading");
        n = $(this).val();
        n.trim().length >= 2 ? Travel.Connect.GeoAirPort(n, t, !0) : n.length < 2 && i.removeClass("ftl-input-loading")
    });
    $(document).on("click", "ul.ftl-tabs-container > li", function () {
        $(this).parent().children("li").removeClass("ftl-active");
        $(this).addClass("ftl-active");
        var n = $(this).attr("target");
        $(".ftl-list-cities").removeClass("ftl-open");
        $("#".concat(n)).addClass("ftl-open")
    });
    $(document).on("click", ".ftl-city-close", function () {
        $(".ftl-modal").removeClass("ftl-open")
    });
    $(document).on("click", "ul.ftl-list-point > li", function () {
        var n;
        $(".ftl-modal").removeClass("ftl-open");
        var t = $(this).attr("code"), e = $(this).attr("city-name"), o = $(this).attr("country-name"),
            u = $(this).attr("location"), i = e.concat(", ").concat(o).concat(" - ").concat(t),
            s = $(this).parent().closest("li"), r = Travel.SearchPrm, f = r.Flight;
        if (r.Itinerary == 1 || r.Itinerary == 2) n = f[0], u == "departure" ? (n.StartPoint = t, n.StartPointText = i) : (n.EndPoint = t, n.EndPointText = i); else {
            var h = s.parent().closest("ul"), c = parseInt(h.attr("itinerary")) || 0, n = f[c];
            u == "departure" ? (n.StartPoint = t, n.StartPointText = i) : (n.EndPoint = t, n.EndPointText = i)
        }
        Travel.Search.Form();
        Travel.Func.CheckGeo()
    });
    $(document).on("click", ".ftlSearch-button", function () {
        var n = !0;
        $(".ftl-search-req").each(function (t) {
            obj = $(this).parent().closest("div");
            var i = $(this).val();
            i == "" ? (obj.addClass("ftl-req-active"), t == 0 && $(this).focus(), n = !1) : obj.removeClass("ftl-req-active")
        });
        n && Travel.Func.SearchSubmit()
    });
    $(document).on("click", ".ftlSearch-group i", function () {
        $(this).parent().find("input.ftl-location").val("")
    })
};
Travel.ResultPrm = {
    loading: !0,
    prms: {},
    config: {},
    filter: {
        sort: [],
        fare: "full",
        airline: ["ALL"],
        time: {departure: {start: "00:00", end: "24:00"}, arrived: {start: "00:00", end: "24:00"}},
        price: {min: {value: 0, title: ""}, max: {value: 0, title: ""}, selected: {min: 0, max: 0}},
        duration: {min: {value: 0, title: ""}, max: {value: 0, title: ""}, selected: {min: 0, max: 0}},
        stop: []
    },
    flight: {
        Step: 1,
        Itinerary: 0,
        FlightType: "domestic",
        ListAirline: [],
        ListAircraft: [],
        ListGeoCode: [],
        Domestic: [],
        International: {Itinerary: [], List: []},
        Month: [],
        MonthSelected: [],
        FlightSelect: [],
        FareRules: [],
        Customer: {Adt: null, Chd: null, Inf: null},
        Baggage: {List: [], Selected: []},
        SearchAirline: {Select: !1, Total: 0, Counter: 0, Success: !1}
    },
    book: {FeePercent: 0, PaymentFee: 0, PaymentMethod: "", IsBilling: !1, Booking: {}},
    isMobi: window.innerWidth > 479 ? !1 : !0,
    rule: !1,
    itinerary: {Journeys: []},
    IpRequest: "",
    paymentReturn: !1
};
Travel.Result = {
    Init: function () {
        var st = window.location.href.toUpperCase(), a = Travel.Func.GetQueryParams(st), g = a.REQUEST, nt = a.CONFIRM,
            tt = a.STATUS, r = Travel.ResultPrm.prms, v = !0, s = Travel.ResultPrm.flight, t, u, i, f, k, n, et, ot, c,
            d, l;
        if (g != undefined) {
            if (t = g.split("-"), t.length > 3) {
                var it = parseInt(t[t.length - 1]) || 0, rt = parseInt(t[t.length - 2]) || 0,
                    ut = parseInt(t[t.length - 3]) || 1;
                r.Inf = it;
                r.Chd = rt;
                r.Adt = ut;
                u = Travel.SearchPrm;
                u.Adt = ut;
                u.Chd = rt;
                u.Inf = it;
                u.Itinerary = t.length == 4 ? 1 : t.length == 5 ? 2 : 3;
                u.Flight = [];
                r.ListFlight = [];
                r.ListGeoCode = [];
                Travel.ResultPrm.flight.Itinerary = t.length - 3;
                var y = "", p = "", w = "", b = "";
                for (i = 0; i < t.length - 3; i++) if (f = t[i], f.length == 14) {
                    s.MonthSelect = !1;
                    k = Travel.Date.List7Day(f.substring(6, 14));
                    n = k.filter(function (n) {
                        return n.focus === !0
                    })[0];
                    i == 0 ? (y = n.dayyyyyMMdd, p = n.dayddMMyyyy, w = n.dayyyyyMMdd, b = n.dayddMMyyyy) : (y > n.dayyyyyMMdd && (y = n.dayyyyyMMdd, p = n.dayddMMyyyy), w < n.dayyyyyMMdd && (w = n.dayyyyyMMdd, b = n.dayddMMyyyy));
                    var e = f.substring(0, 3), o = f.substring(3, 6), ft = {
                        Leg: i,
                        LabelDay: n.day,
                        LabelDate: n.dayOffWeek.concat(", ").concat(n.day),
                        ListDays: k,
                        StartPoint: e,
                        EndPoint: o,
                        DepartDate: f.substring(6, 14),
                        Airline: ""
                    };
                    r.ListGeoCode.push(e);
                    r.ListGeoCode.push(o);
                    r.ListFlight.push(ft);
                    et = {Leg: i, StartPoint: e, EndPoint: o, List: []};
                    s.Domestic.push(et);
                    ot = {Leg: i, StartPoint: e, EndPoint: o, LabelDate: n.dayOffWeek.concat(", ").concat(n.day)};
                    s.International.Itinerary.push(ot);
                    c = {Leg: i, type: "timeup", value: "asc"};
                    Travel.ResultPrm.filter.sort.push(c);
                    u.MonthSelect = !1;
                    l = {
                        Id: i,
                        StartPoint: e,
                        StartPointText: "",
                        EndPoint: o,
                        EndPointText: "",
                        DepartureDate: n.day,
                        ReturnDate: n.day,
                        DepartureMonth: Travel.Date.CurrentMonth(),
                        ReturnMonth: Travel.Date.CurrentMonth()
                    };
                    u.Flight.push(l)
                } else if (f.length == 12) {
                    s.MonthSelect = !0;
                    var e = f.substring(0, 3), o = f.substring(3, 6), h = f.substring(6, 12), ft = {
                        Leg: i,
                        StartPoint: e,
                        EndPoint: o,
                        LabelDate: Travel.Date.MonthFomat(h),
                        DepartureMonth: h,
                        ReturnMonth: h,
                        Airline: ""
                    };
                    r.ListGeoCode.push(e);
                    r.ListGeoCode.push(o);
                    r.ListFlight.push(ft);
                    c = {Leg: i, type: "timeup", value: "asc"};
                    Travel.ResultPrm.filter.sort.push(c);
                    u.MonthSelect = !0;
                    d = h.substring(0, 2) + "-" + h.substring(2, 6);
                    l = {
                        Id: i,
                        StartPoint: e,
                        StartPointText: "",
                        EndPoint: o,
                        EndPointText: "",
                        DepartureDate: Travel.Date.CurrentDate(),
                        ReturnDate: Travel.Date.CurrentDate(),
                        DepartureMonth: d,
                        ReturnMonth: d
                    };
                    u.Flight.push(l)
                } else {
                    v = !1;
                    break
                }
            }
            return v ? (s.MinDate = p, s.MaxDate = b) : Travel.Result.Messages(TravelResultLabel.lblErrorParameter, "return"), v
        }
        if (nt != undefined) {
            s.Step = 3;
            try {
                return Travel.Booking = {Code: nt}, (tt != undefined || tt == "RETURN") && (Travel.ResultPrm.paymentReturn = !0), !0
            } catch (ht) {
                console.log(ht)
            }
        } else Travel.Result.Messages(TravelResultLabel.lblErrorParameter, "return");
        return !1
    }, Messages: function (n, t) {
        $("#ftl-modal-backdrop").removeClass("ftl-none");
        $("#ftl-modal-message").removeClass("ftl-waiting").removeClass("ftl-none").addClass("ftl-block");
        var i = "";
        i += '<div class="ftl-message">';
        i += "  <p>" + n + "<\/p>";
        t == "alert" ? i += '  <button type="button" id="ftl-message-cancel"><i class="fa fa-times" aria-hidden="true"><\/i> ' + TravelResultLabel.lblMessageCancel + "<\/button>" : t == "return" ? i += '  <button type="button" id="ftl-message-return"><i class="fa fa-undo" aria-hidden="true"><\/i> ' + TravelResultLabel.lblMessageReturn + "<\/button>" : t == "confirm" && (i += '  <button type="button" id="ftl-message-cancel"><i class="fa fa-times" aria-hidden="true"><\/i> ' + TravelResultLabel.lblConfirmCancel + "<\/button>", i += '  <button type="button" id="ftl-message-accept"><i class="fa fa-check" aria-hidden="true"><\/i> ' + TravelResultLabel.lblConfirmAccept + "<\/button>");
        i += "<\/div>";
        $("#ftl-modal-message").html(i);
        $(document).on("click", "#ftl-message-return", function () {
            window.location.href = "/"
        })
    }, Loading: function () {
        var o, a, s, l;
        try {
            var t = Travel.Func, r = Travel.ResultPrm.isMobi, n = "", h = "", v = Travel.ResultPrm.prms;
            if (v != null && v.ListFlight != undefined) {
                var u = v.ListFlight, c = Travel.ResultPrm.flight, i = c.ListGeoCode;
                if (u.length == 1) {
                    var y = u[0], f = t.GetById(i, "AirportCode", y.StartPoint),
                        e = t.GetById(i, "AirportCode", y.EndPoint),
                        p = r ? f.CityName : f.CityName.concat(", ").concat(f.CountryName),
                        w = r ? e.CityName : e.CityName.concat(", ").concat(e.CountryName);
                    n += "<p>".concat(p).concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(w).concat("<\/p>");
                    n += "<span>".concat(c.MonthSelect ? TravelResultLabel.lblMonthDeparture : TravelResultLabel.lblDateDeparture).concat(": ").concat(y.LabelDate).concat("<\/span>");
                    h = n
                } else if (u.length == 2) if (o = u[0], a = u[1], o.StartPoint == a.EndPoint && o.EndPoint == a.StartPoint) {
                    var f = t.GetById(i, "AirportCode", o.StartPoint), e = t.GetById(i, "AirportCode", o.EndPoint),
                        p = r ? f.CityName.concat(" (").concat(f.AirportCode).concat(")") : f.CityName.concat(", ").concat(f.CountryName),
                        w = r ? e.CityName.concat(" (").concat(e.AirportCode).concat(")") : e.CityName.concat(", ").concat(e.CountryName);
                    n += "<p>".concat(p).concat(' <i class="fa fa-arrows-h"><\/i> ').concat(w).concat("<\/p>");
                    n += "<span>".concat(c.MonthSelect ? TravelResultLabel.lblMonthDeparture : TravelResultLabel.lblDateDeparture).concat(": ").concat(o.LabelDate).concat(' <i class="fa fa-arrows-h"><\/i> ').concat(c.MonthSelect ? TravelResultLabel.lblMonthReturn : TravelResultLabel.lblDateReturn).concat(": ").concat(a.LabelDate).concat("<\/span>");
                    h = n
                } else s = 0, u.map(function (u) {
                    var f = t.GetById(i, "AirportCode", u.StartPoint), e = t.GetById(i, "AirportCode", u.EndPoint),
                        o = r ? f.CityName : f.CityName.concat(", ").concat(f.CountryName),
                        c = r ? e.CityName : e.CityName.concat(", ").concat(e.CountryName);
                    n += "<p>".concat(o).concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(c).concat("<\/p>");
                    n += "<span>".concat(TravelResultLabel.lblDateDeparture).concat(": ").concat(u.LabelDate).concat("<\/span>");
                    s == 0 && (h = n);
                    s++
                }); else s = 0, u.map(function (u) {
                    var f = t.GetById(i, "AirportCode", u.StartPoint), e = t.GetById(i, "AirportCode", u.EndPoint),
                        o = r ? f.CityName.concat(" (").concat(f.AirportCode).concat(")") : f.CityName.concat(", ").concat(f.CountryName).concat(" (").concat(f.AirportCode).concat(")"),
                        c = r ? e.CityName.concat(" (").concat(e.AirportCode).concat(")") : e.CityName.concat(", ").concat(e.CountryName).concat(" (").concat(e.AirportCode).concat(")");
                    n += "<p>".concat(o).concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(c).concat("<\/p>");
                    n += "<span>".concat(TravelResultLabel.lblDateDeparture).concat(": ").concat(u.LabelDate).concat("<\/span>");
                    s == 0 && (h = n);
                    s++
                });
                c.International.Title = h;
                $(".ftl-onload-journey").html(n);
                l = Travel.SearchPrm;
                l.Flight.map(function (n) {
                    var r = t.GetById(i, "AirportCode", n.StartPoint), u = t.GetById(i, "AirportCode", n.EndPoint);
                    r != undefined && (n.StartPointText = r.CityName.concat(", ").concat(r.CountryName).concat(" (").concat(r.AirportCode).concat(")"));
                    u != undefined && (n.EndPointText = u.CityName.concat(", ").concat(u.CountryName).concat(" (").concat(u.AirportCode).concat(")"))
                });
                l.Itinerary == 2 && (l.Flight[0].ReturnDate = l.Flight[1].DepartureDate)
            }
        } catch (b) {
            console.log(b);
            Travel.Result.Messages(TravelResultLabel.lblErrorParameter, "return")
        }
    }, Waiting: function () {
        var n;
        Travel.Booking == undefined ? (n = "", n += '<div class="ftl-onload-form">', n += '  <div class="ftl-onload-label">' + TravelResultLabel.lblWaiting + "<\/div>", n += '  <div class="ftl-onload-journey"><\/div>', n += "<\/div>", n += '<div id="ftlResult-form"><\/div>') : (n = "", n += '<div id="ftlResult-form" class="' + (Travel.ResultPrm.isMobi ? "" : "ftl-flex") + '">', n += '  <div class="ftl-container ftl-mob">', n += '    <div id="ftl-box-wraper">', n += '       <div id="vmbSearch" class="ftl-mob" />', n += "    <\/div>", n += "  <\/div>", n += '  <div class="ftl-content">', n += '    <div id="ftl-flight-selected" class="ftl-flight-confirm">', n += '          <div id="ftl-loading-e1" class="ftl-loading"><\/div><div id="ftl-loading-e2" class="ftl-loading"><\/div><div id="ftl-loading-e3" class="ftl-loading"><\/div>', n += '          <div id="ftl-loading-e4" class="ftl-loading"><\/div><div id="ftl-loading-e5" class="ftl-loading"><\/div><div id="ftl-loading-e6" class="ftl-loading"><\/div>', n += '          <div id="ftl-loading-e7" class="ftl-loading"><\/div><div id="ftl-loading-e8" class="ftl-loading"><\/div>', n += "      <\/div>", n += "    <\/div>", n += "  <\/div>", n += "<\/div>");
        $("#vmbResult").html(n)
    }, Step: function (n) {
        var e = Travel.ResultPrm.isMobi, i = Travel.ResultPrm.flight, u;
        i.FlightType == "domestic" && i.Step != 3 ? (u = i.FlightSelect, i.Step = u.length == i.Itinerary ? 2 : 1) : i.FlightType == "international" && i.Step != 3 && (i.Step = i.FlightSelect.length > 0 ? 2 : 1);
        var f = i.Step, r = "", t = "";
        if (t += '  <li class="ftl-active">', t += '    <div class="ftl-circle-first">1<\/div>', t += "    <span>" + (e ? TravelResultLabel.lblStepMobile1 : TravelResultLabel.lblStep1) + "<\/span>", t += "  <\/li>", f == 1 ? (t += "  <li>", t += '     <div class="ftl-arrow-active"><\/div>', t += '    <div class="ftl-circle">2<\/div>', t += "    <span>" + TravelResultLabel.lblStep2 + "<\/span>", t += "  <\/li>", t += "  <li>", t += '     <div class="ftl-arrow"><\/div>', t += '    <div class="ftl-circle">3<\/div>', t += "    <span>" + TravelResultLabel.lblStep3 + "<\/span>", t += "  <\/li>") : f == 2 ? (t += '  <li class="ftl-active">', t += '     <div class="ftl-arrow-active"><\/div>', t += '    <div class="ftl-circle">2<\/div>', t += "    <span>" + TravelResultLabel.lblStep2 + "<\/span>", t += "  <\/li>", t += "  <li>", t += '     <div class="ftl-arrow-active"><\/div>', t += '    <div class="ftl-circle">3<\/div>', t += "    <span>" + TravelResultLabel.lblStep3 + "<\/span>", t += "  <\/li>") : (t += '  <li class="ftl-active">', t += '     <div class="ftl-arrow-active"><\/div>', t += '    <div class="ftl-circle">2<\/div>', t += "    <span>" + TravelResultLabel.lblStep2 + "<\/span>", t += "  <\/li>", t += '  <li class="ftl-active">', t += '     <div class="ftl-arrow-active"><\/div>', t += '    <div class="ftl-circle">3<\/div>', t += "    <span>" + TravelResultLabel.lblStep3 + "<\/span>", t += "  <\/li>"), n) $("ul.ftl-step").html(t); else return r += '<ul class="ftl-step">', r += t, r + "<\/ul>"
    }, ListDate: function (n, t) {
        var i = "", u = Travel.ResultPrm.filter.fare, f = Travel.ResultPrm.prms.ListFlight[n], r = f.ListDays;
        if (r != null && r.length > 0) if (t) r.map(function (n) {
            i += n.focus ? '<li class="ftl-date-active" date-value="' + n.dayddMMyyyy + '">' : '<li date-value="' + n.dayddMMyyyy + '">';
            i += "<span>" + n.day + "<\/span>";
            i += '<span class="ftl-date-day"><i class="fa fa-calendar-alt-alt"><\/i> ' + n.dayOffWeek + "<\/span>";
            i += '<span class="ftl-date-price">' + (u == "base" ? n.priceFormat : n.priceFullFormat) + "<\/span>";
            i += "<\/li>"
        }), $("#ftl-flight-list".concat(n)).find(".ftl-list-date").html(i); else return i += '<ul class="ftl-list-date">', r.map(function (n) {
            i += n.focus ? '<li class="ftl-price-loading ftl-date-active" date-value="' + n.dayddMMyyyy + '">' : '<li class="ftl-price-loading" date-value="' + n.dayddMMyyyy + '">';
            i += "<span>" + n.day + "<\/span>";
            i += '<span class="ftl-date-day"><i class="fa fa-calendar-alt-alt"><\/i> ' + n.dayOffWeek + "<\/span>";
            i += '<span class="ftl-date-price"><\/span>';
            i += "<\/li>"
        }), i += "<\/ul>"; else return i
    }, FlightMonthMain: function (n) {
        var u = Travel.ResultPrm.flight, f = Travel.Func, e = Travel.ResultPrm.prms.ListFlight, t, i, r;
        e.length == u.Month.length && (t = "", i = "", t += '<div class="ftl-content">', t += '  <div class="ftl-flight">', t += '    <ul id="ftl-filter-mobile">', t += "       <li>", t += '          <div class="left-arrow"><\/div>', t += '          <span><i class="fa fa-filter"><\/i> ' + TravelResultLabel.lblFilterFlight + "<\/span>", t += "       <\/li>", t += "       <li>", t += '         <span><i class="fa fa-search"><\/i> ' + TravelResultLabel.lblFlightSearch + "<\/span>", t += '         <div class="right-arrow"><\/div>', t += "       <\/li>", t += "    <\/ul>", t += '<div id="ftl-flight-selected">', t += "<\/div>", i += '<div class="ftl-container">', i += '   <div id="ftl-box-wraper">', i += Travel.Result.BoxFare(), i += Travel.Result.BoxSearch(), i += "   <\/div>", i += "<\/div>", r = u.ListGeoCode, e.map(function (n, i) {
            var u = f.GetById(r, "AirportCode", n.StartPoint), e = f.GetById(r, "AirportCode", n.EndPoint),
                o = u.CityName.concat(", ").concat(u.CountryName), s = e.CityName.concat(", ").concat(e.CountryName),
                h = u.CityName, c = e.CityName, l = u.AirportCode.concat(e.AirportCode);
            t += '<div class="ftl-flight-list" id="ftl-flight-list' + i + '" leg="' + i + '" flight-type="domestic">';
            t += '   <div class="ftl-flight-header ftl-color-theme">';
            t += '      <div class="ftl-icon"><\/div>';
            t += '      <div class="ftl-flight-title">';
            t += "        <p>" + o.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(s) + "<\/p>";
            t += "        <span>" + n.LabelDate + "<\/span>";
            t += "      <\/div>";
            t += '      <div class="ftl-flight-title-mobile">';
            t += "        <p>" + h.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(c) + "<\/p>";
            t += "        <span>" + n.LabelDate + "<\/span>";
            t += "      <\/div>";
            t += "   <\/div>";
            t += '   <div class="ftl-flight-main">';
            t += Travel.Result.FlightMonth(n.DepartureMonth, l, u.CityName, e.CityName);
            t += "   <\/div>";
            t += "<\/div>"
        }), t += "  <\/div>", t += "<\/div>", n ? $(".ftl-content").html(t) : ($("#ftlResult-form").html(i + t), Travel.ResultPrm.isMobi || $("#ftlResult-form").addClass("ftl-flex"), Travel.Search.Form()), $(".ftl-onload-form").addClass("ftl-none"), n || (Travel.Search.Form(), Travel.SearchReady()))
    }, FlightMonth: function (n, t, i, r) {
        $("#ftl-result-form").addClass("ftl-flex").removeClass("ftl-none");
        $("#ftl-onload-form").addClass("ftl-none");
        var f = Travel.Func, s = Travel.ResultPrm.flight, o = Travel.ResultPrm.filter.fare,
            h = Travel.Date.ConverMonth(n), c = Travel.ResultPrm.flight.Month, e = f.GetById(c, "Itinerary", t);
        if (e != null) {
            var l = e.MinTotalAdt, a = e.MinFareAdt, v = e.ListFare, u = '<table class="ftl-flight-calendar">';
            return u += "<tr>", u += '  <th class="ftl-month-day">' + TravelDayLabel[0] + "<\/th>", u += '  <th class="ftl-month-day">' + TravelDayLabel[1] + "<\/th>", u += '  <th class="ftl-month-day">' + TravelDayLabel[2] + "<\/th>", u += '  <th class="ftl-month-day">' + TravelDayLabel[3] + "<\/th>", u += '  <th class="ftl-month-day">' + TravelDayLabel[4] + "<\/th>", u += '  <th class="ftl-month-day">' + TravelDayLabel[5] + "<\/th>", u += '  <th class="ftl-month-day">' + TravelDayLabel[6] + "<\/th>", u += "<\/tr>", h.map(function (e, h) {
                var w = h % 7, y, p;
                w == 0 && (u += "<tr>");
                var b = "", k = t.concat(e.day).concat(n), c = f.GetById(v, "Key", k);
                if (e.day != 0 && e.active || (b = "ftl-calendar-disable"), y = "", o == "base" ? c != null && c.MinFareAdt == a && (y = "ftl-calendar-min") : c != null && c.MinTotalAdt == l && (y = "ftl-calendar-min"), u += '<td class="' + b + '">', u += '  <div id="' + k + '" class="ftl-calendar-box ' + y + ' ftl-tooltip" itinerary="' + t + '">', u += "    <p>" + e.day + "<\/p>", c != null && c.MinFareAdt > 0) {
                    var tt = f.GetById(s.ListAirline, "Code", c.Airline), d = Travel.Validate.Logo(tt),
                        g = c != null ? c.MinTotalAdtFormat : "", nt = f.MoneyShort(c.MinTotalAdt);
                    o == "base" && (g = c != null ? c.MinFareAdtFormat : "", nt = f.MoneyShort(c.MinFareAdt));
                    u += "<p>" + g + "<\/p>";
                    u += '<p><img src="' + d + '" /><\/p>';
                    u += "<p>" + nt + '<img src="' + d + '" /><\/p>';
                    p = c.ListFareData;
                    p != null && (u += '<div class="ftl-tooltip-box">', p.map(function (n) {
                        var e = f.GetById(s.ListAirline, "Code", n.Airline), h = Travel.Validate.Logo(e), t = null;
                        n.ListFlight != null && n.ListFlight.length > 0 && (t = n.ListFlight[0]);
                        u += '<ul class="ftl-flight-info">';
                        u += '   <li><img src="' + h + '" /><\/li>';
                        u += "   <li>";
                        u += '     <div class="ftl-flight-city">' + i + "<\/div>";
                        u += '     <div class="ftl-flight-time">' + (t != null ? t.StartTime : "") + "<\/div>";
                        u += "   <\/li>";
                        u += "   <li>";
                        u += '     <div class="ftl-flight-numb">';
                        u += o == "base" ? n.FareAdtFormat : n.TotalPriceFormat;
                        u += "     <\/div>";
                        u += '     <div class="ftl-flight-line"><div class="ftl-flight-fly ftl-line"><\/div><\/div>';
                        u += "   <\/li>";
                        u += "   <li>";
                        u += '      <div class="ftl-flight-city">' + r + "<\/div>";
                        u += '      <div class="ftl-flight-time">' + (t != null ? t.EndTime : "") + "<\/div>";
                        u += "   <\/li>";
                        u += "<\/ul>"
                    }), u += "<\/div>")
                }
                u += "  <\/div>";
                u += "<\/td>";
                w == 6 && (u += "<\/tr>")
            }), u += "<\/table>"
        }
    }, FlightMonthSelect: function () {
        var n = "", t = Travel.ResultPrm.flight, i = Travel.Func, r = Travel.ResultPrm.flight.MonthSelected;
        n += '<div class="ftl-fare-wraper">';
        n += ' <div class="ftl-title">' + TravelResultLabel.lblFlightSelectTitle + "<\/div>";
        r.map(function (r) {
            var f = r.FareDatas, e = r.Key, h = f.ListFareData,
                o = i.GetById(t.ListGeoCode, "AirportCode", e.substring(0, 3)),
                s = i.GetById(t.ListGeoCode, "AirportCode", e.substring(3, 6)), u = f.DepartDate;
            n += '<h2 style="padding: 16px 10px 0px 10px; margin: 0px; font-size: 16px; font-weight: 600">' + o.CityName.concat(", ").concat(o.CountryName) + ' <i class="fa fa-long-arrow-right"><\/i> ' + s.CityName.concat(", ").concat(s.CountryName) + "<\/h2>";
            n += '<span style="padding: 0px 10px; margin: 0px; font-size: 12px;">Ngày ' + u.substring(0, 2) + "-" + u.substring(2, 4) + "-" + u.substring(4, 8) + "<\/span>";
            h.map(function (r) {
                n += '<div class="ftl-box-item" style="padding: 0px 8px;">';
                var u = t.fare == "base" ? r.FareAdtFormat : r.TotalPriceFormat, f = r.ListFlight;
                f.map(function (r) {
                    var o = i.GetById(t.ListGeoCode, "AirportCode", r.StartPoint),
                        s = i.GetById(t.ListGeoCode, "AirportCode", r.EndPoint),
                        f = i.GetById(Travel.ResultPrm.flight.ListAirline, "Code", r.Airline),
                        e = Travel.Validate.Logo(f);
                    n += '<div class="ftl-flight-item select">';
                    n += ' <ul class="ftl-flight-info" style="padding: 0px">';
                    n += '  <li><img src="' + e + '" /><p>' + (f != null ? f.Name : "") + "<\/p><\/li>";
                    n += "  <li>";
                    n += '    <div class="ftl-flight-city">' + o.CityName + "<\/div>";
                    n += '    <div class="ftl-flight-time">' + r.StartTime + "<\/div>";
                    n += "  <\/li>";
                    n += "  <li>";
                    n += '    <div class="ftl-flight-line" style="margin-top: 30px;"><div class="ftl-flight-fly ftl-line"><\/div><\/div>';
                    n += "   <\/li>";
                    n += "   <li>";
                    n += '      <div class="ftl-flight-city">' + s.CityName + "<\/div>";
                    n += '      <div class="ftl-flight-time">' + r.EndTime + "<\/div>";
                    n += "    <\/li>";
                    n += "    <li>";
                    n += '      <div class="ftl-flight-price">' + u + " <span> VND<\/span><\/div>";
                    n += "    <\/li>";
                    n += "  <\/ul>";
                    n += '  <ul class="ftl-flight-info-mobile">';
                    n += '    <li><img src="' + e + '" /><\/li>';
                    n += "    <li>";
                    n += '      <div class="ftl-flight-price">' + u + " <span> VND<\/span><\/div>";
                    n += "    <\/li>";
                    n += "    <li>";
                    n += "    <\/li>";
                    n += "  <\/ul>";
                    n += "<\/div>"
                });
                n += " <\/div>"
            })
        });
        n += ' <div style="padding: 10px; text-align: right"><button id="btn-flight-detail" class="ftl-btn" style="width: 100px">Chi tiết<\/button><\/div>';
        n += "<\/div>";
        $("#ftl-flight-selected").html(n)
    }, DomesticMain: function () {
        var r = Travel.ResultPrm.flight, i = Travel.Func, u = Travel.ResultPrm.prms.ListFlight, n = "", t;
        n += ' <div class="ftl-page-title">';
        n += Travel.Result.Step(!1);
        n += " <\/div>";
        n += ' <div class="ftl-container ftl-mob">';
        n += '   <div id="ftl-box-wraper" />';
        n += "<\/div>";
        n += '<div class="ftl-content">';
        n += '  <div class="ftl-flight">';
        n += '    <ul id="ftl-filter-mobile">';
        n += '       <li><div class="left-arrow"><\/div><span><i class="fa fa-filter"><\/i> ' + TravelResultLabel.lblFilterFlight + "<\/span><\/li>";
        n += '       <li><span><i class="fa fa-search"><\/i> ' + TravelResultLabel.lblFlightSearch + '<\/span><div class="right-arrow"><\/div><\/li>';
        n += "    <\/ul>";
        n += '    <div id="ftl-flight-selected"><\/div>';
        t = r.ListGeoCode;
        u.map(function (r, u) {
            var f = i.GetById(t, "AirportCode", r.StartPoint), e = i.GetById(t, "AirportCode", r.EndPoint),
                o = f.CityName.concat(", ").concat(f.CountryName).concat(" (").concat(f.AirportCode).concat(")"),
                s = e.CityName.concat(", ").concat(e.CountryName).concat(" (").concat(e.AirportCode).concat(")"),
                h = f.CityName.concat(" (").concat(f.AirportCode).concat(")"),
                c = e.CityName.concat(" (").concat(e.AirportCode).concat(")");
            n += '<div class="ftl-flight-list" id="ftl-flight-list' + u + '" leg="' + u + '" flight-type="domestic">';
            n += '   <div class="ftl-flight-header">';
            n += '      <div class="ftl-icon"><\/div>';
            n += '      <div class="ftl-flight-title">';
            n += "        <p>" + o.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(s) + "<\/p>";
            n += "        <span>" + r.LabelDate + "<\/span>";
            n += "      <\/div>";
            n += '      <div class="ftl-flight-title-mobile">';
            n += "        <p>" + h.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(c) + "<\/p>";
            n += "        <span>" + r.LabelDate + "<\/span>";
            n += "      <\/div>";
            n += "   <\/div>";
            n += '   <div class="progress-wrap progress ftl-none" data-progress-percent="100"><div class="progress-bar progress"><\/div><\/div>';
            n += Travel.Result.ListDate(u, !1);
            n += '   <div class="ftl-flight-main">';
            n += '      <div id="ftl-loading">';
            n += '          <img src="https://ibe.vemaybay.vn/Resources/Images/Icon/flight-loading.gif" alt="">';
            n += "      <\/div>";
            n += '    <div class="LoadingMsg">';
            n += "   Đang tìm kiếm chuyến bay...<br>";
            n += "   Quý khách vui lòng chờ trong giây lát";
            n += "    <\/div>";
            n += "   <\/div>";
            n += "<\/div>"
        });
        n += "  <\/div>";
        n += "<\/div>";
        $(".ftl-onload-form").addClass("ftl-none");
        $("#ftlResult-form").html(n);
        Travel.ResultPrm.isMobi || $("#ftlResult-form").addClass("ftl-flex");
        var f = Travel.Result.BoxCart(!1), e = Travel.Result.BoxFare(), o = Travel.Result.BoxAirline(!1),
            s = Travel.Result.BoxSort(), h = Travel.Result.BoxSearch();
        $("#ftl-box-wraper").prepend(h);
        $("#ftl-box-wraper").prepend(o);
        $("#ftl-box-wraper").prepend(e);
        $("#ftl-box-wraper").prepend(f);
        $("#ftl-box-wraper").prepend(s);
        Travel.Search.Form();
        Travel.SearchReady()
    }, Domestic: function () {
        var f = Travel.Func;
        $("#ftl-result-form").addClass("ftl-flex").removeClass("ftl-none");
        $("#ftl-onload-form").addClass("ftl-none");
        var n = Travel.ResultPrm.flight, t = Travel.ResultPrm.filter, e = n.Domestic, u = t.airline,
            i = t.time.departure, r = t.time.arrived;
        e.map(function (e) {
            var o = "", v = "", y = f.GetById(n.ListGeoCode, "AirportCode", e.StartPoint),
                p = f.GetById(n.ListGeoCode, "AirportCode", e.EndPoint), h = e.List, s, l, a, c;
            h != null && h.length > 0 ? (s = null, s = u != null && u.indexOf("ALL") > -1 ? h.filter(function (n) {
                return n.StartTime >= i.start && n.StartTime <= i.end && n.EndTime >= r.start && n.EndTime <= r.end
            }) : h.filter(function (n) {
                return u.indexOf(n.Airline) > -1 && n.StartTime >= i.start && n.StartTime <= i.end && n.EndTime >= r.start && n.EndTime <= r.end
            }), l = 0, s != null && s.length > 0 ? (s.map(function (i) {
                var r = Travel.Result.DomesticFlight(i, n, t, y, p, !1);
                v += r
            }), l = t.fare == "base" ? Math.min.apply(null, s.map(n => n.FareAdt)) : Math.min.apply(null, s.map(n => n.FareAdtFull)), o = "" + v) : o = '<p class="ftl-notification">' + TravelResultLabel.lblEmptyFlight + "<p>", c = $("#ftl-flight-list".concat(e.Leg)).find(".ftl-flight-main"), c.html(o), a = $("#ftl-flight-list".concat(e.Leg)).find(".ftl-date-active"), a.removeClass("ftl-price-loading"), a.find(".ftl-date-price").text(Travel.Func.MoneyFormat(l))) : (n.SearchAirline.Success ? o = '<p class="ftl-notification">' + TravelResultLabel.lblEmptyFlight + "<\/p>" : (o += '      <div id="ftl-loading">', o += '          <img src="/Resources/Images/Icon/flight-loading.gif" alt="">', o += "      <\/div>"), c = $("#ftl-flight-list".concat(e.Leg)).find(".ftl-flight-main"), c.html(o))
        });
        setTimeout(function () {
            $(".ftl-flight-fly").addClass("ftl-line")
        }, 500)
    }, DomesticFlight: function (n, t, i, r, u, f) {
        var e = "", s = t.ListAirline.filter(function (t) {
            return t.Code == n.Airline
        })[0], c = Travel.Validate.Logo(s), l = i.fare == "base" ? n.FareAdtFormat : n.FareAdtFullFormat, o = null, h;
        return n.Airline != n.AirlineOperating && (o = t.ListAirline.filter(function (t) {
            return t.Code == n.AirlineOperating
        })[0]), h = "", o != null && (h = " operating-mobile"), e += '<div id="' + n.Id + '"  class="ftl-flight-item ' + (f ? " ftl-flight-top" : "") + '">', e += ' <ul class="ftl-flight-info">', e += '   <li><img src="' + c + '" />', e += "     <p>", e += o != null ? '<img src="' + Travel.Validate.Logo(o) + '" />' : s != null ? s.Name : "", e += "     <\/p>", e += "   <\/li>", e += "   <li>", e += '     <div class="ftl-flight-city">' + r.CityName + "<\/div>", e += '     <div class="ftl-flight-time">' + n.StartTime + "<\/div>", e += "   <\/li>", e += "   <li>", e += '     <div class="ftl-flight-numb">', e += n.FlightNumber, e += "     <\/div>", e += '     <div class="ftl-flight-line"><div class="ftl-flight-fly"><\/div><\/div>', e += '     <a class="ftl-flight-detail">' + TravelResultLabel.lblFlightDetail + "<\/a>", e += "   <\/li>", e += "   <li>", e += '      <div class="ftl-flight-city">' + u.CityName + "<\/div>", e += '      <div class="ftl-flight-time">' + n.EndTime + "<\/div>", e += "   <\/li>", e += "   <li>", e += '      <div class="ftl-flight-price">' + l + " <span>" + n.Currency + "<\/span><\/div>", e += '      <button type="button">' + TravelResultLabel.lblFlightSelect + "<\/button>", e += "   <\/li>", e += "  <\/ul>", e += '  <ul class="ftl-flight-info-mobile' + h + '">', e += '   <li><img src="' + c + '" />', o != null && (e += '<div class="airline-operating"><i class="fa fa-exclamation-triangle"><\/i> Chuyến bay được điều hành bởi: ' + (o != null ? o.Name : "") + "<\/div>"), e += "   <\/li>", e += "    <li>", e += '      <div class="ftl-flight-price">' + l + " <span>" + n.Currency + "<\/span><\/div>", e += "    <\/li>", e += "    <li>", e += '      <button type="button">' + TravelResultLabel.lblFlightSelectMobile + "<\/button>", e += "    <\/li>", e += "  <\/ul>", e += '  <div class="ftl-flight-box-detail"><\/div>', e + "<\/div>"
    }, DomesticIndex: function (n, t) {
        var u = Travel.Func, i = "", r = null, f = null, e = null, h = Travel.ResultPrm.flight.Domestic,
            l = Travel.ResultPrm.flight.ListGeoCode, o, s, c;
        return h != null && h.length > 0 && (o = u.GetById(h, "Leg", n), o.List != null && o.List.length > 0 && (r = u.GetById(o.List, "Id", t))), r != null && (i += '<div class="ftl-box-item">', i += '  <p><i class="fa fa-info-circle"><\/i> ' + TravelResultLabel.lblDetailTitleFlight + "<\/p>", s = r.ListSegment, s != null && s.length > 0 && (s.map(function (n) {
            f = u.GetById(l, "AirportCode", n.StartPoint);
            e = u.GetById(l, "AirportCode", n.EndPoint);
            var r = u.GetById(Travel.ResultPrm.flight.ListAircraft, "IATA", n.Plane),
                t = u.GetById(Travel.ResultPrm.flight.ListAirline, "Code", n.Airline), o = Travel.Validate.Logo(t);
            i += '  <ul class="ftl-box-item-flight">';
            i += '    <li><img src="' + o + '" /><p>' + (t != null ? t.Name : "") + "<\/p><\/li>";
            i += "    <li>";
            i += "      <span><b>" + f.CityName + " - " + f.AirportCode + "<\/b><\/span>";
            i += "      <span><i>" + f.AirportName + "<\/i><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailTimeUp + ": <b> " + n.StartTime + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailDate + ": <b>" + n.StartDate + "<\/b><\/span>";
            i += "    <\/li>";
            i += "    <li>";
            i += "      <span><b>" + e.CityName + " - " + e.AirportCode + "<\/b><\/span>";
            i += "      <span><i>" + e.AirportName + "<\/i><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailTimeDown + ": <b> " + n.EndTime + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailDate + ": <b>" + n.EndDate + "<\/b><\/span>";
            i += "    <\/li>";
            i += "    <li>";
            i += "      <span>" + TravelResultLabel.lblDetailFlightNumber + ": <b>" + n.FlightNumber + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailFlightDuration + ":<b> " + n.Duration + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailFlightClass + ":<b> " + n.Class + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailFlightPlan + ": <b>" + (r != null ? r.Model : "") + "<\/b><\/span>";
            i += "    <\/li>";
            i += "  <\/ul>"
        }), r.Airline != r.AirlineOperating && (c = u.GetById(Travel.ResultPrm.flight.ListAirline, "Code", r.AirlineOperating), i += '<div class="airline-operating"><i class="fa fa-exclamation-triangle"><\/i> Chuyến bay được điều hành bởi: ' + (c != null ? c.Name : "") + "<\/div>")), i += "<\/div>", i += '<div class="ftl-box-item">', i += '  <p><i class="fa fa-eye"><\/i> ' + TravelResultLabel.lblDetailFareTitle + "<\/p>", i += '  <ul class="ftl-box-item-fare">', i += "    <li><b>" + TravelResultLabel.lblDetailFareCustomer + "<\/b><\/li>", i += "    <li><b>" + TravelResultLabel.lblDetailFareQuanlity + "<\/b><\/li>", i += "    <li><b>" + TravelResultLabel.lblDetailFarePrice + "<\/b><\/li>", i += "    <li><b>" + TravelResultLabel.lblDetailFeeTax + "<\/b><\/li>", i += "    <li><b>" + TravelResultLabel.lblDetailTotalMoney + "<\/b><\/li>", i += "  <\/ul>", i += '  <ul class="ftl-box-item-fare">', i += "    <li>" + TravelResultLabel.lblDetailAdt + "<\/li>", i += "    <li>" + r.Adt + "<\/li>", i += "    <li>" + r.FareAdtFormat + "<\/li>", i += "    <li>" + r.TotalFeeTaxAdtFormat + "<\/li>", i += "    <li>" + r.TotalFareAdtFormat + "<\/li>", i += "  <\/ul>", r.Chd > 0 && (i += '  <ul class="ftl-box-item-fare">', i += "    <li>" + TravelResultLabel.lblDetailChd + "<\/li>", i += "    <li>" + r.Chd + "<\/li>", i += "    <li>" + r.FareChdFormat + "<\/li>", i += "    <li>" + r.TotalFeeTaxChdFormat + "<\/li>", i += "    <li>" + r.TotalFareChdFormat + "<\/li>", i += "  <\/ul>"), r.Inf > 0 && (i += '  <ul class="ftl-box-item-fare">', i += "    <li>" + TravelResultLabel.lblDetailInf + "<\/li>", i += "    <li>" + r.Inf + "<\/li>", i += "    <li>" + r.FareInfFormat + "<\/li>", i += "    <li>" + r.TotalFeeTaxInfFormat + "<\/li>", i += "    <li>" + r.TotalFareInfFormat + "<\/li>", i += "  <\/ul>"), i += '  <ul class="ftl-box-item-fare ftl-total">', i += "    <li>" + TravelResultLabel.lblDetailTotalPrice + " (" + r.Currency + "):<\/li>", i += "    <li>" + r.TotalPriceFormat + "<\/li>", i += "  <\/ul>", i += "<\/div>", i += '<div class="ftl-box-item">', i += '  <p><i class="fa fa-ticket"><\/i> ' + TravelResultLabel.lblDetailConditionFareTitle + "<\/p>", i += '  <div class="ftl-fare-rule">', i += "  <\/div>", i += "<div>"), i
    }, DomesticSelect: function () {
        var n = "", i = Travel.ResultPrm.flight, r = Travel.Func, t;
        obj = $("#ftl-flight-selected");
        t = i.FlightSelect;
        t != null && t.length > 0 ? (n += '<div class="ftl-fare-wraper">', n += ' <div class="ftl-title">' + TravelResultLabel.lblFlightSelectTitle + "<\/div>", n += ' <div class="ftl-box-item">', r.Sort(t, "Leg", "asc", !0), t.map(function (t) {
            var o = r.GetById(i.ListGeoCode, "AirportCode", t.StartPoint),
                s = r.GetById(i.ListGeoCode, "AirportCode", t.EndPoint),
                f = i.fare == "base" ? t.FareAdtFormat : t.FareAdtFullFormat,
                u = r.GetById(Travel.ResultPrm.flight.ListAirline, "Code", t.Airline), e = Travel.Validate.Logo(u);
            n += '<div id="' + t.Id + '" class="ftl-flight-item select" flight-type="domestic" leg="' + t.Leg + '">';
            n += ' <ul class="ftl-flight-info">';
            n += '  <li><img src="' + e + '" /><p>' + (u != null ? u.Name : "") + "<\/p><\/li>";
            n += "  <li>";
            n += '    <div class="ftl-flight-city">' + o.CityName + "<\/div>";
            n += '    <div class="ftl-flight-time">' + t.StartTime + "<\/div>";
            n += '    <div class="ftl-flight-date">' + t.StartDate + "<\/div>";
            n += "  <\/li>";
            n += "  <li>";
            n += '    <div class="ftl-flight-numb">';
            n += '       <i class="fa fa-plane"><\/i>  ' + t.FlightNumber;
            n += "    <\/div>";
            n += '    <div class="ftl-flight-line"><div class="ftl-flight-fly ftl-line"><\/div><\/div>';
            n += '      <a class="ftl-flight-detail">' + TravelResultLabel.lblFlightDetail + "<\/a>";
            n += "    <\/li>";
            n += "    <li>";
            n += '      <div class="ftl-flight-city">' + s.CityName + "<\/div>";
            n += '      <div class="ftl-flight-time">' + t.EndTime + "<\/div>";
            n += '      <div class="ftl-flight-date">' + t.EndDate + "<\/div>";
            n += "    <\/li>";
            n += "    <li>";
            n += '      <div class="ftl-flight-price">' + f + " <span>" + t.Currency + "<\/span><\/div>";
            n += '      <button type="button" class="ftl-btn-return">' + TravelResultLabel.lblFlightReturn + "<\/button>";
            n += "    <\/li>";
            n += "  <\/ul>";
            n += '  <ul class="ftl-flight-info-mobile">';
            n += '    <li><img src="' + e + '" /><\/li>';
            n += "    <li>";
            n += '      <div class="ftl-flight-price">' + f + " <span>" + t.Currency + "<\/span><\/div>";
            n += "    <\/li>";
            n += "    <li>";
            n += '      <button type="button" class="ftl-btn-return">' + TravelResultLabel.lblFlightReturn + "<\/button>";
            n += "    <\/li>";
            n += "  <\/ul>";
            n += '  <div class="ftl-flight-box-detail"><\/div>';
            n += "<\/div>"
        }), n += " <\/div>", n += "<\/div>", t.length == i.Itinerary ? (n += Travel.Result.Passenger(!1), n += Travel.Result.Contact(), n += Travel.Result.Payment(), obj.html(n), Travel.Connect.Baggage()) : obj.html(n), obj.removeClass("ftl-none")) : (obj.html(""), obj.addClass("ftl-none"))
    }, InternationalMain: function () {
        var t = Travel.ResultPrm.flight, n = "";
        n += ' <div class="ftl-page-title">';
        n += Travel.Result.Step(!1);
        n += " <\/div>";
        n += ' <div class="ftl-container ftl-mob">';
        n += '   <div id="ftl-box-wraper" />';
        n += "<\/div>";
        n += '<div class="ftl-content">';
        n += '    <ul id="ftl-filter-mobile">';
        n += '       <li><div class="left-arrow"><\/div><span><i class="fa fa-filter"><\/i> ' + TravelResultLabel.lblFilterFlight + "<\/span><\/li>";
        n += '       <li><span><i class="fa fa-search"><\/i> ' + TravelResultLabel.lblFlightSearch + '<\/span><div class="right-arrow"><\/div><\/li>';
        n += "    <\/ul>";
        n += '    <div class="ftl-flight">';
        n += '      <div id="ftl-flight-selected" class="ftl-flight-selected ftl-none"><\/div>';
        n += '      <div id="ftl-flight-international">';
        n += '        <div class="ftl-flight-header">';
        n += '          <div class="ftl-icon"><\/i><\/div>';
        n += '          <div class="ftl-flight-title">';
        n += t.International.Title;
        n += "          <\/div>";
        n += '          <div class="ftl-flight-title-mobile">';
        n += t.International.Title;
        n += "          <\/div>";
        n += "        <\/div>";
        n += Travel.Result.ListDate(0, !1);
        n += '        <div id="ftl-flight-list" flight-type="international"><\/div>';
        n += "      <\/div>";
        n += "  <\/div>";
        n += " <\/div>";
        $(".ftl-onload-form").addClass("ftl-none");
        $("#ftlResult-form").html(n);
        Travel.ResultPrm.isMobi || $("#ftlResult-form").addClass("ftl-flex");
        var i = Travel.Result.BoxCart(!1), r = Travel.Result.BoxAirline(!1), u = Travel.Result.BoxSort(),
            f = Travel.Result.BoxSearch();
        $("#ftl-box-wraper").prepend(f);
        $("#ftl-box-wraper").prepend(r);
        $("#ftl-box-wraper").prepend(i);
        $("#ftl-box-wraper").prepend(u);
        Travel.Search.Form();
        Travel.SearchReady()
    }, International: function () {
        var n = "";
        $("#ftl-result-form").addClass("ftl-flex").removeClass("ftl-none");
        $("#ftl-onload-form").addClass("ftl-none");
        var u = Travel.Func, i = Travel.ResultPrm.flight, t = Travel.ResultPrm.filter, f = t.airline,
            e = i.International, o = e.List, s = e.Itinerary, r = [];
        r = f != null && f.indexOf("ALL") > -1 ? o : o.filter(function (n) {
            return f.indexOf(n.PlatingCarrier) > -1
        });
        r != null && r.length > 0 && r.map(function (r) {
            var f = "", o = t.time.departure, h = t.time.arrived, l = t.price.selected.min, a = t.price.selected.max,
                v = t.duration.selected.min, y = t.duration.selected.max, p = t.stop, c = [], e;
            p.map(function (n) {
                n.isSelect && c.push(n.value)
            });
            e = !0;
            s.map(function (n) {
                var t = u.GetById(i.ListGeoCode, "AirportCode", n.StartPoint),
                    s = u.GetById(i.ListGeoCode, "AirportCode", n.EndPoint), p = r.ListFlight.filter(function (t) {
                        return t.Leg == n.Leg && t.StartTime >= o.start && t.StartTime <= o.end && t.EndTime >= h.start && t.EndTime <= h.end && c.indexOf(t.StopNum) > -1 && r.TotalPrice >= l && r.TotalPrice <= a && r.TotalDuration >= v && r.TotalDuration <= y
                    });
                p != null && p.length > 0 ? (f += '<div class="ftl-fare-index">', f += '  <div class="ftl-fare-header">', f += "   <label>" + t.CityName + '  <i class="fa fa-long-arrow-right"><\/i>   ' + s.CityName + "<\/label>", f += "   <span>" + n.LabelDate + "<\/span>", f += "  <\/div>", p.map(function (n, o) {
                    o == 0 && (n.IsSelect = !0);
                    var h = u.GetById(i.ListAirline, "Code", n.Airline), c = "", l = "";
                    h != undefined ? (c = Travel.Validate.Logo(h), l = h.Name) : e = !1;
                    var a = n.ListSegment != null && n.ListSegment.length > 0 ? n.ListSegment.length - 1 : 0,
                        v = a > 0 ? a.toString().concat(" " + TravelResultLabel.lblFlightStopNumber) : TravelResultLabel.lblFlightLineNumber,
                        y = Travel.ResultPrm.isMobi ? t.CityName : t.CityName,
                        p = Travel.ResultPrm.isMobi ? s.CityName : s.CityName;
                    f += '<div class="ftl-flight-fare" leg="' + n.Leg + '" flight-value="' + n.FlightValue + '">';
                    f += ' <ul class="ftl-flight-info">';
                    f += '  <li><img src="' + c + '" /><p>' + l + "<\/p><\/li>";
                    f += "  <li>";
                    f += '    <div class="ftl-flight-city">' + y + "<\/div>";
                    f += '    <div class="ftl-flight-time">' + n.StartTime + "<\/div>";
                    f += "  <\/li>";
                    f += "  <li>";
                    f += '    <div class="ftl-flight-segment">';
                    f += '       <i class="fa fa-stop-circle-o"><\/i> ' + v;
                    f += "    <\/div>";
                    f += '    <div class="ftl-flight-line"><div class="ftl-flight-fly"><\/div><\/div>';
                    f += '      <a class="ftl-flight-detail">' + TravelResultLabel.lblFlightDetail + "<\/a>";
                    f += "    <\/li>";
                    f += "    <li>";
                    f += '      <div class="ftl-flight-city">' + p + "<\/div>";
                    f += '      <div class="ftl-flight-time">' + n.EndTime + "<\/div>";
                    f += "    <\/li>";
                    f += "    <li>";
                    f += '      <label class="flight-select" name="ftl_group_' + n.Leg.toString().concat("_").concat(r.FareDataId) + '">';
                    f += '        <i class="fa fa-check-circle' + (n.IsSelect ? " ftl-active" : "") + '"><\/i>';
                    f += "      <\/label>";
                    f += "    <\/li>";
                    f += "  <\/ul>";
                    f += '  <div class="ftl-flight-box-detail"><\/div>';
                    f += "<\/div>"
                }), f += "<\/div>") : e = !1
            });
            e && (n += '<div class="ftl-fare-item" fare-id="' + r.FareDataId + '">', n += '  <div class="ftl-fare-content">', n += f, n += '   <div class="ftl-fare-box-rule" />', n += '   <div class="ftl-fare-box-detail" />', n += "  <\/div>", n += '  <div class="ftl-fare-footer ftl-color-button">', n += "    <ul>", n += "      <li>", n += '         <a class="ftl-fare-rule"><i class="fa fa-ticket"><\/i> ' + TravelResultLabel.lblFlightRoleFare + "<\/a>", n += "      <\/li>", n += "      <li>", n += '         <a class="ftl-fare-detail"><i class="fa fa-eye"><\/i> ' + TravelResultLabel.lblDetailFareTitle + "<\/a>", n += "      <\/li>", n += "      <li>", n += '          <div class="ftl-fare-price"><span>' + r.TotalPriceFormat + "<\/span><span>" + r.Currency + "<\/span><\/div>", n += "      <\/li>", n += "      <li>", n += "         <div>", n += '            <button type="button" class="ftl-fare-button"> ' + (Travel.ResultPrm.isMobi ? TravelResultLabel.lblFlightSelectMobile : TravelResultLabel.lblFlightSelect) + "<\/button>", n += "         <\/div>", n += "      <\/li>", n += "    <\/ul>", n += "  <\/div>", n += '  <div class="ftl-clear"><\/div>', n += "<\/div>")
        });
        n.length == 0 && (n = '<p class="ftl-notification">' + TravelResultLabel.lblEmptyFlight + "<p>");
        $("#ftl-flight-list").html(n);
        setTimeout(function () {
            $(".ftl-flight-fly").addClass("ftl-line")
        }, 500)
    }, InternationalIndex: function (n, t) {
        var r = Travel.Func, i = "", f = null, s = Travel.ResultPrm.flight.ListGeoCode,
            h = Travel.ResultPrm.flight.International, e = h.List, o, u;
        return e != null && e.length > 0 && (o = r.GetById(e, "FareDataId", n), o != null && (f = r.GetById(o.ListFlight, "FlightValue", t))), f != null && (i += '<div class="ftl-box-item">', i += '  <p><i class="fa fa-info-circle"><\/i> ' + TravelResultLabel.lblDetailTitleFlight + "<\/p>", u = f.ListSegment, u != null && u.length > 0 && u.map(function (n) {
            var t = r.GetById(s, "AirportCode", n.StartPoint), u = r.GetById(s, "AirportCode", n.EndPoint),
                e = r.GetById(Travel.ResultPrm.flight.ListAircraft, "IATA", n.Plane),
                f = r.GetById(Travel.ResultPrm.flight.ListAirline, "Code", n.Airline), o = Travel.Validate.Logo(f),
                h = t != null ? t.CityName.concat(" - ").concat(t.AirportCode) : "",
                c = u != null ? u.CityName.concat(" - ").concat(u.AirportCode) : "";
            i += '  <ul class="ftl-box-item-flight">';
            i += '    <li><img src="' + o + '" /><p>' + (f != null ? f.Name : "") + "<\/p><\/li>";
            i += "    <li>";
            i += "      <span><b>" + h + "<\/b><\/span>";
            i += "      <span><i>" + t.AirportName + "<\/i><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailTimeUp + ": <b> " + n.StartTime + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailDate + ": <b>" + n.StartDate + "<\/b><\/span>";
            i += "    <\/li>";
            i += "    <li>";
            i += "      <span><b>" + c + "<\/b><\/label><\/span>";
            i += "      <span><i>" + u.AirportName + "<\/i><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailTimeDown + ": <b> " + n.EndTime + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailDate + ": <b>" + n.EndDate + "<\/b><\/span>";
            i += "    <\/li>";
            i += "    <li>";
            i += "      <span>" + TravelResultLabel.lblDetailFlightNumber + ": <b>" + n.FlightNumber + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailFlightDuration + ":<b> " + n.Duration + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailFlightClass + ":<b> " + n.Class + "<\/b><\/span>";
            i += "      <span>" + TravelResultLabel.lblDetailFlightPlan + ": <b>" + (e != null ? e.Model : "") + "<\/b><\/span>";
            i += "    <\/li>";
            i += "  <\/ul>"
        }), i += "<\/div>"), i
    }, InternationalSelect: function () {
        var r = Travel.Func, u = Travel.ResultPrm.prms, f = u.Adt, e = u.Chd, o = u.Inf, i = Travel.ResultPrm.flight,
            t = i.FlightSelect[0], s = i.International, h = s.Itinerary, n = "";
        t != null ? (n += '<div class="ftl-fare-wraper">', n += ' <div class="ftl-title">' + TravelResultLabel.lblFlightSelectTitle + "<\/div>", n += ' <div class="ftl-fare-item" fare-id="' + t.FareDataId + '">', h.map(function (u) {
            var f = r.GetById(i.ListGeoCode, "AirportCode", u.StartPoint),
                e = r.GetById(i.ListGeoCode, "AirportCode", u.EndPoint), o = t.ListFlight.filter(function (n) {
                    return n.Leg == u.Leg && n.IsSelect == !0
                });
            o != null && o.length > 0 && o.map(function (t) {
                var u = r.GetById(i.ListAirline, "Code", t.Airline), s = Travel.Validate.Logo(u),
                    o = t.ListSegment != null && t.ListSegment.length > 0 ? t.ListSegment.length - 1 : 0,
                    h = o > 0 ? o.toString().concat(TravelResultLabel.lblFlightStopNumber) : TravelResultLabel.lblFlightLineNumber,
                    c = Travel.ResultPrm.isMobi ? f.CityName : f.CityName.concat("<span>(").concat(f.AirportCode).concat(")<\/span>"),
                    l = Travel.ResultPrm.isMobi ? e.CityName : e.CityName.concat("<span>(").concat(e.AirportCode).concat(")<\/span>");
                n += '<div class="ftl-flight-fare" leg="' + t.Leg + '" flight-value="' + t.FlightValue + '">';
                n += ' <ul class="ftl-flight-info">';
                n += '   <li><img src="' + s + '" /><p>' + (u != null ? u.Name : "") + "<\/p><\/li>";
                n += "   <li>";
                n += '     <div class="ftl-flight-city">' + c + "<\/div>";
                n += '     <div class="ftl-flight-time">' + t.StartTime + "<\/div>";
                n += '     <div class="ftl-flight-date">' + t.StartDate + "<\/div>";
                n += "   <\/li>";
                n += "   <li>";
                n += '      <div class="ftl-flight-segment">';
                n += '          <i class="fa fa-stop-circle-o"><\/i> ' + h;
                n += "      <\/div>";
                n += '      <div class="ftl-flight-line"><div class="ftl-flight-fly ftl-line"><\/div><\/div>';
                n += "      <span>" + Travel.Date.DurationFormat(t.Duration) + "<\/span>";
                n += "    <\/li>";
                n += "    <li>";
                n += '      <div class="ftl-flight-city">' + l + "<\/div>";
                n += '      <div class="ftl-flight-time">' + t.EndTime + "<\/div>";
                n += '      <div class="ftl-flight-date">' + t.EndDate + "<\/div>";
                n += "    <\/li>";
                n += "    <li>";
                n += '      <a class="ftl-flight-detail">' + TravelResultLabel.lblFlightDetail + "<\/a>";
                n += "    <\/li>";
                n += "  <\/ul>";
                n += '  <div class="ftl-flight-box-detail"><\/div>';
                n += "<\/div>"
            })
        }), n += " <\/div>", n += ' <div class="ftl-box-option">', n += '  <p><i class="fa fa-eye"><\/i> ' + TravelResultLabel.lblDetailFareTitle + "<\/p>", n += '  <ul class="ftl-box-item-fare">', n += "    <li><b>" + TravelResultLabel.lblDetailFareCustomer + "<\/b><\/li>", n += "    <li><b>" + TravelResultLabel.lblDetailFareQuanlity + "<\/b><\/li>", n += "    <li><b>" + TravelResultLabel.lblDetailFarePrice + "<\/b><\/li>", n += "    <li><b>" + TravelResultLabel.lblDetailFeeTax + "<\/b><\/li>", n += "    <li><b>" + TravelResultLabel.lblDetailTotalMoney + "<\/b><\/li>", n += "  <\/ul>", f > 0 && f <= 9 && (n += '  <ul class="ftl-box-item-fare">', n += "    <li>" + TravelResultLabel.lblDetailAdt + "<\/li>", n += "    <li>" + t.Adt + "<\/li>", n += "    <li>" + t.FareAdtFormat + "<\/li>", n += "    <li>" + t.TotalFeeTaxAdtFormat + "<\/li>", n += "    <li>" + t.TotalFareAdtFormat + "<\/li>", n += "  <\/ul>"), e > 0 && e <= 9 && (n += '  <ul class="ftl-box-item-fare">', n += "    <li>" + TravelResultLabel.lblDetailChd + "<\/li>", n += "    <li>" + t.Chd + "<\/li>", n += "    <li>" + t.FareChdFormat + "<\/li>", n += "    <li>" + t.TotalFeeTaxChdFormat + "<\/li>", n += "    <li>" + t.TotalFareChdFormat + "<\/li>", n += "  <\/ul>"), o > 0 && o <= 2 && (n += '  <ul class="ftl-box-item-fare">', n += "    <li>" + TravelResultLabel.lblDetailInf + "<\/li>", n += "    <li>" + t.Inf + "<\/li>", n += "    <li>" + t.FareInfFormat + "<\/li>", n += "    <li>" + t.TotalFeeTaxInfFormat + "<\/li>", n += "    <li>" + t.TotalFareInfFormat + "<\/li>", n += "  <\/ul>"), n += " <\/div>", n += ' <div class="ftl-price">' + TravelResultLabel.lblDetailTotalPrice + ': <span class="ftl-color-focus"> ' + t.TotalPriceFormat + " " + t.Currency + "<\/span><\/div>", n += " <\/div>", n += Travel.Result.Passenger(!1), n += Travel.Result.Contact(), n += Travel.Result.Payment(), $("#ftl-flight-selected").html(n), $("#ftl-flight-selected").removeClass("ftl-none"), Travel.Connect.Baggage()) : $("#ftl-flight-selected").html("")
    }, InternationalPrice: function (n, t) {
        var f = Travel.Func, i = "", r = null, e = Travel.ResultPrm.flight.International, u = e.List;
        u != null && u.length > 0 && (r = f.GetById(u, "FareDataId", n));
        i += '<div class="ftl-fare-header">';
        i += '  <label><i class="fa fa-eye"><\/i> ' + TravelResultLabel.lblDetailFareTitle + "<\/label>";
        i += '  <span class="ftl-fare-close" targer="price"><i class="fa fa-times"><\/i><\/span>';
        i += "<\/div>";
        i += '<div class="ftl-box-option">';
        i += '  <ul class="ftl-box-item-fare">';
        i += "    <li><b>" + TravelResultLabel.lblDetailFareCustomer + "<\/b><\/li>";
        i += "    <li><b>" + TravelResultLabel.lblDetailFareQuanlity + "<\/b><\/li>";
        i += "    <li><b>" + TravelResultLabel.lblDetailFarePrice + "<\/b><\/li>";
        i += "    <li><b>" + TravelResultLabel.lblDetailFeeTax + "<\/b><\/li>";
        i += "    <li><b>" + TravelResultLabel.lblDetailTotalMoney + "<\/b><\/li>";
        i += "  <\/ul>";
        i += '  <ul class="ftl-box-item-fare">';
        i += "    <li>" + TravelResultLabel.lblDetailAdt + "<\/li>";
        i += "    <li>" + r.Adt + "<\/li>";
        i += "    <li>" + r.FareAdtFormat + "<\/li>";
        i += "    <li>" + r.TotalFeeTaxAdtFormat + "<\/li>";
        i += "    <li>" + r.TotalFareAdtFormat + "<\/li>";
        i += "  <\/ul>";
        i += '  <ul class="ftl-box-item-fare">';
        i += "    <li>" + TravelResultLabel.lblDetailChd + "<\/li>";
        i += "    <li>" + r.Chd + "<\/li>";
        i += "    <li>" + r.FareChdFormat + "<\/li>";
        i += "    <li>" + r.TotalFeeTaxChdFormat + "<\/li>";
        i += "    <li>" + r.TotalFareChdFormat + "<\/li>";
        i += "  <\/ul>";
        i += '  <ul class="ftl-box-item-fare">';
        i += "    <li>" + TravelResultLabel.lblDetailInf + "<\/li>";
        i += "    <li>" + r.Inf + "<\/li>";
        i += "    <li>" + r.FareInfFormat + "<\/li>";
        i += "    <li>" + r.TotalFeeTaxInfFormat + "<\/li>";
        i += "    <li>" + r.TotalFareInfFormat + "<\/li>";
        i += "  <\/ul>";
        i += " <\/div>";
        i += ' <div class="ftl-price">' + TravelResultLabel.lblDetailTotalPrice + ':<span class="ftl-color-focus">' + r.TotalPriceFormat + " " + r.Currency + "<\/span><\/div>";
        i += "<\/div>";
        t.html(i)
    }, Rules: function (n, t) {
        var i = "", r, u;
        if (Travel.ResultPrm.flight.FlightType == "domestic") {
            if (n != null && n.length > 0 && (r = n[0].ListRulesGroup, r != null && r.length > 0)) {
                u = r[0].ListRulesText;
                try {
                    i = u[0]
                } catch (f) {
                }
            }
        } else i += '<div class="ftl-fare-header">', i += '  <label><i class="fa fa-ticket"><\/i> ' + TravelResultLabel.lblFlightRoleFare + "<\/label>", i += '  <span class="ftl-fare-close" targer="rule"><i class="fa fa-times"><\/i><\/span>', i += "<\/div>", i += '<div class="ftl-box-option ftl-rule-content">', n != null && n.length > 0 && n.map(function (n) {
            var r = n.Route, t;
            i += '<div class="ftl-box-option-header"><i class="fa fa-plane"><\/i> ' + r + "<\/div>";
            t = n.ListRulesGroup;
            t.map(function (n) {
                var r = n.RulesTitle, t;
                i += "<p>" + r + "<\/p>";
                t = n.ListRulesText;
                t.map(function (n) {
                    i += n
                })
            })
        }), i += "<\/div>";
        t != undefined && t.html(i);
        $(".ftl-fare-rule").removeClass("ftl-waiting-rule")
    }, BoxSort: function () {
        var t = Travel.Config.StartSortListFlight, i = TravelResultLabel.lblBoxSortByArline,
            r = TravelResultLabel.lblBoxSortByTimeUp, u = TravelResultLabel.lblBoxSortByTotalTime,
            f = TravelResultLabel.lblBoxSortByTimeDown, e = TravelResultLabel.lblBoxSortByPrice, n = "";
        return n += '<div class="ftl-box-temp">', n += '  <div class="ftl-base-header"><i class="fa fa-filter"><\/i> <span>' + TravelResultLabel.lblBoxSortTitle + "<\/span><\/div>", n += '  <ul class="ftl-box-sort">', n += '  <li sort-value="price">', n += '  <label for="price" class="radio">', n += '  <input type="radio" id="price" class="sort" name="sort" checked="checked" value="_price"><span class="label ' + (t == "price" ? "ftl-asc" : "") + '"><\/span><span>' + e + "<\/span><\/label > ", n += "  <\/li>", n += '  <li sort-value="timeup">', n += '  <label for="timeup" class="radio">', n += '  <input type="radio" id="timeup" class="sort" name="sort" value="_timeup"><span class="label ' + (t == "timeup" ? "ftl-asc" : "") + '"><\/span><span>' + r + "<\/span><\/label > ", n += "  <\/li>", n += '  <li sort-value="timedown">', n += '  <label for="timedown" class="radio">', n += '  <input type="radio" id="timedown" class="sort" name="sort" value="_price"><span class="label' + (t == "timedown" ? "ftl-asc" : "") + '"><\/span><span>' + f + "<\/span><\/label > ", n += "  <\/li>", n += '  <li sort-value="totaltime">', n += '  <label for="totaltime" class="radio">', n += '  <input type="radio" id="totaltime" class="sort" name="sort" value="_totaltime"><span class="label' + (t == "totaltime" ? "ftl-asc" : "") + '"><\/span><span>' + u + "<\/span><\/label > ", n += "  <\/li>", n += '  <li sort-value="airline">', n += '  <label for="airline" class="radio">', n += '  <input type="radio" id="airline" class="sort" name="sort" value="true"><span class="label' + (t == "airline" ? "ftl - asc" : "") + '"><\/span><span>' + i + "<\/span><\/label>", n += "  <\/li>", n += "  <\/ul>", n + "<\/div>"
    }, BoxFare: function () {
        var t = Travel.ResultPrm.filter.fare, n = "";
        return n += '<div id="ftl-base-fare" class="ftl-box-temp">', n += '  <div class="ftl-base-header"><i class="fa fa-eye"><\/i> <span>' + TravelResultLabel.lblBoxFareTitle + "<\/span><\/div>", n += '  <ul class="ftl-base-fare">', n += '    <li value="base">', n += '      <span class="checkmark' + (t == "base" ? " ftl-active" : "") + '"><\/span><span>' + TravelResultLabel.lblBoxFareBase + "<\/span>", n += "    <\/li>", n += '    <li value="full">', n += '      <span class="checkmark' + (t != "base" ? " ftl-active" : "") + '"><\/span><span>' + TravelResultLabel.lblBoxFareTotal + "<\/span>", n += "    <\/li>", n += "  <\/ul>", n + "<\/div>"
    }, BoxAirline: function (n) {
        var u = Travel.ResultPrm.filter, e = u.fare, r = u.airline, o = u.duration, s = u.stop, h = u.price,
            i = Travel.ResultPrm.flight, f = i.ListAirline, t = "";
        if (n) t += '<ul class="ftl-base-filter">', t += '  <li value="ALL"' + (r.indexOf("ALL") > -1 ? " checked" : "") + ">", t += '     <span class="checkmark ' + (r.indexOf("ALL") > -1 ? "ftl-active" : "") + '"><\/span>', t += "     <span>" + TravelResultLabel.lblBoxFilterAll + "<\/span>", t += "  <\/li>", f != null && f.length > 0 && n && f.map(function (n) {
            var h, f, u, o;
            if (i.FlightType == "domestic") h = i.Domestic, f = [], h.map(function (t) {
                var r = t.List, i, u;
                r != null && r.length > 0 && (i = r.filter(function (t) {
                    return t.Airline.toLowerCase() == n.Code.toLowerCase()
                }), i != null && i.length > 0 && (u = Math.min.apply(Math, i.map(function (n) {
                    return e == "base" ? n.FareAdt : n.FareAdtFull
                })), f.push(u)))
            }), f.length > 0 && (u = Math.min.apply(null, f), o = Travel.Func.MoneyShort(u), t += '<li value="' + n.Code + '"' + (r.indexOf(n.Code) > -1 ? " checked" : "") + ">", t += '    <span class="checkmark ' + (r.indexOf(n.Code) > -1 ? "ftl-active" : "") + '"><\/span>', t += "    <span>" + n.Name + "<\/span>", t += '    <span class="ftl-checkbox-price">' + o + "<\/span>", t += "<\/li>"); else {
                var u = 0, c = i.International, s = c.List.filter(function (t) {
                    return t.PlatingCarrier.toLowerCase() == n.Code.toLowerCase()
                });
                s != null && s.length > 0 && (u = Math.min.apply(Math, s.map(function (n) {
                    return n.TotalPrice
                })));
                o = Travel.Func.MoneyShort(u);
                u > 0 && (t += '<li value="' + n.Code + '"' + (r.indexOf(n.Code) > -1 ? " checked" : "") + ">", t += '    <span class="checkmark ' + (r.indexOf(n.Code) > -1 ? "ftl-active" : "") + '"><\/span>', t += "    <span>" + n.Name + "<\/span>", t += '    <span class="ftl-checkbox-price">' + o + "<\/span>", t += "<\/li>")
            }
        }), t += "<\/ul>", i.MonthSelect || (t += '    <div class="ftl-base-label">', t += "      <span>" + TravelResultLabel.lblBoxHoursSelect + "<\/span>", t += '      <i class="fa fa-clock-o"><\/i>', t += "    <\/div>", t += '    <div class="ftl-range-slider">', t += "      <p>" + TravelResultLabel.lblBoxSortByTimeUp + "<\/p>", t += '      <div class="ftl-ranger-line">', t += '          <input type="text" id="ftl-filter-timeup" />', t += "      <\/div>", t += '      <div class="ftl-range-label">00:00 h - 24:00 h<\/div>', t += "    <\/div>", t += '    <div class="ftl-range-slider">', t += "      <p>" + TravelResultLabel.lblBoxSortByTimeDown + "<\/p>", t += '      <div class="ftl-ranger-line">', t += '          <input type="text" id="ftl-filter-timedown" />', t += "      <\/div>", t += '      <div class="ftl-range-label">00:00 h - 24:00 h<\/div>', t += "    <\/div>"), i.MonthSelect || i.FlightType == "domestic" || (t += '    <div class="ftl-base-label">', t += "      <span>" + TravelResultLabel.lblBoxStopNumSelect + "<\/span>", t += '      <i class="fa fa-stop-circle"><\/i>', t += "    <\/div>", t += '    <ul class="ftl-base-stopnum"><\/ul>', t += '    <div class="ftl-base-label">', t += "      <span>" + TravelResultLabel.lblBoxSumTimeJourney + "<\/span>", t += '      <i class="fa fa-exchange"><\/i>', t += "    <\/div>", t += '    <div class="ftl-range-slider ftl-base-time"><\/div>', t += '    <div class="ftl-base-label">', t += "      <span>" + TravelResultLabel.lblBoxPriceSelect + "<\/span>", t += '      <i class="fa fa-usd"><\/i>', t += "    <\/div>", t += '    <div class="ftl-range-slider ftl-base-price"><\/div>'), $("#ftl-base-airline-content").html(t), i.MonthSelect || (Travel.Result.BoxFilterStop(s), Travel.Result.BoxFilterDuration(o), Travel.Result.BoxFilterPrice(h)), Travel.Slider(); else return t += '<div id="ftl-base-airline" class="ftl-box-temp">', t += '  <div class="ftl-base-header">', t += '     <i class="fa fa-filter"><\/i> <span>' + TravelResultLabel.lblBoxFilterTitle + "<\/span>", t += "  <\/div>", t += '  <div class="ftl-base-content">', t += '    <div class="ftl-base-label">', t += "      <span>" + TravelResultLabel.lblBoxAirlineSelect + "<\/span>", t += '      <i class="fa fa-plane" style="transform: rotate(-135deg)"><\/i>', t += "    <\/div>", t += '    <div id="ftl-base-airline-content">', t += "    <\/div>", t += "  <\/div>", t += "<\/div>"
    }, BoxFilterStop: function (n) {
        Travel.Func.Sort(n, "value", "asc", !0);
        var t = "";
        n.map(function (n) {
            var i = n.isSelect ? "checked" : "";
            t += '<li value="' + n.value + '">';
            t += "  <span>" + (n.value == 0 ? TravelResultLabel.lblBoxStopnumLine : n.value.toString().concat(TravelResultLabel.lblBoxStopnumPoinStop)) + "<\/span>";
            t += '  <span class="checkmark ' + (i ? "ftl-active" : "") + '"><\/span>';
            t += "<\/li>"
        });
        $(".ftl-base-stopnum").html(t)
    }, BoxFilterDuration: function (n) {
        var t = "", i = n.min.value, r = n.min.title, u = n.max.value, f = n.max.title;
        t += '<div class="ftl-ranger-line">';
        t += '   <input type="text" id="ftl-filter-duration" />';
        t += "<\/div>";
        t += '<div class="ftl-range-label">';
        t += r.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(f);
        t += "<\/div>";
        $(".ftl-base-time").html(t);
        new rSlider({
            target: "#ftl-filter-duration",
            values: {min: i, max: u},
            step: 10,
            range: !0,
            tooltip: !1,
            scale: !1,
            labels: !1,
            onChange: function (n) {
                Travel.Func.Range("ftl-filter-duration", n)
            }
        })
    }, BoxFilterPrice: function (n) {
        var t = "", i = n.min.value, u = Travel.Func.MoneyShort(i), r = n.max.value, f = Travel.Func.MoneyShort(r);
        t += '<div class="ftl-ranger-line">';
        t += '  <input type="text" id="ftl-filter-price" />';
        t += "<\/div>";
        t += '<div class="ftl-range-label">';
        t += u.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(f);
        t += "<\/div>";
        $(".ftl-base-price").html(t);
        new rSlider({
            target: "#ftl-filter-price",
            values: {min: i, max: r},
            step: 1e4,
            range: !0,
            tooltip: !1,
            scale: !1,
            labels: !1,
            onChange: function (n) {
                Travel.Func.Range("ftl-filter-price", n)
            }
        })
    }, BoxCart: function (n) {
        var o = Travel.Func, b = Travel.ResultPrm.prms, r = Travel.ResultPrm.flight, s = Travel.ResultPrm.book,
            h = Travel.ResultPrm.itinerary, i, tt, e, p, w;
        h.Journeys = [];
        var u = r.Coupon, t = "", c = b.Adt, l = b.Chd, a = b.Inf;
        if (n) {
            var f = Travel.ResultPrm.flight.Baggage.selected, k = 0, v = 0, y = "";
            if (r.FlightType == "domestic") {
                t += '<div class="ftl-base-header"><i class="fa fa-shopping-cart"><\/i> <span>' + TravelResultLabel.lblBoxCartTitle + "<\/span><\/div>";
                t += ' <div class="ftl-base-content">';
                t += "  <ul>";
                var d = 0, g = 0, nt = 0, tt = r.FlightSelect;
                tt.map(function (n) {
                    var u = o.GetById(r.ListGeoCode, "AirportCode", n.StartPoint),
                        f = o.GetById(r.ListGeoCode, "AirportCode", n.EndPoint), e = r.ListAirline.filter(function (t) {
                            return t.Code == n.Airline
                        })[0], s = Travel.Validate.Logo(e), i;
                    t += "<li>";
                    t += "  <span>" + u.AirportCode.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(f.AirportCode) + "<\/span>";
                    t += '  <span class="ftl-cart-time"><i class="fa fa-clock-o"><\/i> ' + n.StartTime.concat(" ").concat(n.StartDate.substring(0, 5)) + "<\/span>";
                    t += '  <span><img src="' + s + '" /><\/span>';
                    t += "<\/li>";
                    d += n.FareAdtFull;
                    g += n.FareChdFull;
                    nt += n.FareInfFull;
                    y = n.Currency;
                    i = {Airline: n.Airline, StartPoint: n.StartPoint, EndPoint: n.EndPoint};
                    h.Journeys.push(i)
                });
                t += "<\/ul>";
                var it = c * d, rt = l * g, ut = a * nt, k = it + rt + ut;
                t += '<ul class="ftl-cart-sumary">';
                t += "  <li><span>" + TravelResultLabel.lblCartSummary + '<\/span><span class="ftl-align-right">' + TravelResultLabel.lblCartTotalMoney + "<\/span><\/li>";
                c > 0 && c <= 9 && (t += "<li>", t += '  <span class="ftl-cart-people">' + TravelResultLabel.lblCartAdt + "<\/span>", t += '  <span class="ftl-cart-quanlity">' + c + " x " + Travel.Func.MoneyFormat(d) + "<\/span>", t += '  <span class="ftl-cart-price">' + Travel.Func.MoneyFormat(it) + "<\/span>", t += "<\/li>");
                l > 0 && l <= 9 && (t += "<li>", t += '  <span class="ftl-cart-people">' + TravelResultLabel.lblCartChd + "<\/span>", t += '  <span class="ftl-cart-quanlity">' + l + " x " + Travel.Func.MoneyFormat(g) + "<\/span>", t += '  <span class="ftl-cart-price">' + Travel.Func.MoneyFormat(rt) + "<\/span>", t += "<\/li>");
                a > 0 && a <= 2 && (t += "<li>", t += '  <span class="ftl-cart-people">' + TravelResultLabel.lblCartInf + "<\/span>", t += '  <span class="ftl-cart-quanlity">' + a + " x " + Travel.Func.MoneyFormat(nt) + "<\/span>", t += '  <span class="ftl-cart-price">' + Travel.Func.MoneyFormat(ut) + "<\/span>", t += "<\/li>");
                f != null && f.length > 0 && f.map(function (n) {
                    v += parseFloat(n.Price) || 0;
                    n.Price != 0 && (t += '  <li><span class="ftl-cart-people"><i class="fa fa-suitcase"><\/i> ' + TravelResultLabel.lblPaxBaggage + '<\/span><span class="ftl-cart-quanlity">' + n.Name + '<\/span><span class="ftl-cart-price">' + Travel.Func.MoneyFormat(n.Price) + "<\/span><\/li>")
                })
            } else t += '<div class="ftl-base-header"><i class="fa fa-shopping-cart"><\/i> <span>' + TravelResultLabel.lblBoxCartTitle + "<\/span><\/div>", t += '<div class="ftl-base-content">', t += "  <ul>", r = Travel.ResultPrm.flight, i = r.FlightSelect[0], i != null ? (tt = i.ListFlight.filter(function (n) {
                return n.IsSelect
            }), tt.map(function (n) {
                var u = o.GetById(r.ListGeoCode, "AirportCode", n.StartPoint),
                    f = o.GetById(r.ListGeoCode, "AirportCode", n.EndPoint),
                    e = Travel.ResultPrm.flight.ListAirline.filter(function (t) {
                        return t.Code == n.Airline
                    })[0], s = Travel.Validate.Logo(e), i;
                t += "<li>";
                t += "  <span>" + u.AirportCode.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(f.AirportCode) + "<\/span>";
                t += '  <span class="ftl-cart-time"><i class="fa fa-clock-o"><\/i> ' + n.StartTime.concat(" ").concat(n.StartDate.substring(0, 5)) + "<\/span>";
                t += '  <img src="' + s + '" />';
                t += "<\/li>";
                i = {Airline: n.Airline, StartPoint: n.StartPoint, EndPoint: n.EndPoint};
                h.Journeys.push(i)
            }), t += "<\/ul>", t += '<ul class="ftl-cart-sumary">', t += "  <li><span>" + TravelResultLabel.lblCartSummary + '<\/span><span class="ftl-align-right">' + TravelResultLabel.lblCartTotalMoney + "<\/span><\/li>", i.Adt > 0 && i.Adt <= 9 && (t += '  <li><span class="ftl-cart-people">' + TravelResultLabel.lblCartAdt + '<\/span><span class="ftl-cart-quanlity">' + i.Adt + " x " + i.FareAdtFullFormat + '<\/span><span class="ftl-cart-price">' + i.TotalFareAdtFormat + "<\/span><\/li>"), i.Chd > 0 && i.Chd <= 9 && (t += '  <li><span class="ftl-cart-people">' + TravelResultLabel.lblCartChd + '<\/span><span class="ftl-cart-quanlity">' + i.Chd + " x " + i.FareChdFullFormat + '<\/span><span class="ftl-cart-price">' + i.TotalFareChdFormat + "<\/span><\/li>"), i.Inf > 0 && i.Inf <= 2 && (t += '  <li><span class="ftl-cart-people">' + TravelResultLabel.lblCartInf + '<\/span><span class="ftl-cart-quanlity">' + i.Inf + " x " + i.FareInfFull + '<\/span><span class="ftl-cart-price">' + i.TotalFareInfFormat + "<\/span><\/li>"), k = i.TotalPrice, y = i.Currency, f != null && f.length > 0 && f.map(function (n) {
                v += parseFloat(n.Price) || 0;
                n.Price != 0 && (t += '  <li><span class="ftl-cart-people"><i class="fa fa-suitcase"><\/i> ' + TravelResultLabel.lblPaxBaggage + '<\/span><span class="ftl-cart-quanlity">' + n.Name + '<\/span><span class="ftl-cart-price">' + Travel.Func.MoneyFormat(n.Price) + "<\/span><\/li>")
            })) : t = "";
            h.TotalPrice = k + v;
            e = k + v - (u != null && u.CouponAmount > 0 ? u.CouponAmount : 0);
            s.FeePercent > 0 ? (p = e * s.FeePercent / 100, s.PaymentFee = p, e = e + p, t += "<li>", t += '   <span class="ftl-cart-people">Phí thanh toán:<\/span>', t += '   <span class="ftl-cart-price">' + Travel.Func.MoneyFormat(p) + "<\/span>", t += "<\/li>") : s.PaymentFee = 0;
            t += ' <li class="ftl-coupon">';
            t += '   <p><i class="fa fa-gift"><\/i>  ' + TravelResultLabel.lblCouponTitle + "<\/p>";
            t += '   <span id="ftl-coupon-message">' + (u != null ? u.Message : "") + "<\/span>";
            t += '   <div class="ftl-coupon-line">';
            t += '      <input placeholder="' + TravelResultLabel.lblCouponHolder + '" />';
            t += '      <button type="button">' + TravelResultLabel.lblCouponButton + "<\/button>";
            t += '      <span class="ftl-coupon-amount">' + (u != null ? u.CouponAmountFormat : "") + "<\/span>";
            t += "   <\/div>";
            t += " <\/li>";
            t += '  <li><span class="ftl-cart-summary-title">' + TravelResultLabel.lblCartSumMoney + ':<\/span><span class="ftl-cart-total">' + Travel.Func.MoneyFormat(e) + " " + y + "<\/span><\/li>";
            t += "<\/ul>";
            t += "<\/div>";
            $("#ftl-base-cart").html(t);
            w = "";
            w += "<span>" + TravelResultLabel.lblBoxCartTitle + "<\/span>";
            w += "<span>∑ " + Travel.Func.MoneyFormat(e) + " " + y + "<\/span>";
            $(".ftl-cart-basket").html(w)
        } else t += '<div id="ftl-base-cart" class="ftl-box-temp ftl-mob"><\/div>';
        return t
    }, BoxSearch: function () {
        return '<div id="vmbSearch" class="ftl-mob" />'
    }, Passenger: function (n) {
        var u = Travel.Func, t, o, s, r, h, c, l;
        if (n) {
            var a = Travel.ResultPrm.prms, i = Travel.ResultPrm.flight, v = a.Adt, f = a.Chd, e = a.Inf, y = !1;
            if ((f > 0 || e > 0) && (y = !0), t = "", t += '<div class="ftl-title">' + TravelResultLabel.lblPaxTitle + "<\/div>", t += '<div class="ftl-box-option">', t += ' <ul class="ftl-pax-info">', t += "   <li>", t += '     <div class="ftl-pax-customer ftl-pax-cus">' + TravelResultLabel.lblPaxCustomer + "<\/div>", t += '     <div class="ftl-pax-customer ftl-pax-sex">' + TravelResultLabel.lblPaxSex + ' <span class="ftl-required">*<\/span><\/div>', t += '     <div class="ftl-pax-customer ftl-pax-firstname">' + TravelResultLabel.lblPaxSortName + ' <span class="ftl-required">*<\/span><\/div>', t += '     <div class="ftl-pax-customer ftl-pax-lastname">' + TravelResultLabel.lblPaxFullName + ' <span class="ftl-required">*<\/span><\/div>', y && (t += ' <div class="ftl-pax-customer ftl-pax-bir">' + TravelResultLabel.lblPaxBirthday + ' <span class="ftl-required">*<\/span><\/div>'), t += "  <\/li>", v > 0 && v <= 9) for (r = 1; r <= v; r++) t += '<li type="adt" value="' + r + '">', t += '   <div class="ftl-pax-row">', t += '      <div class="ftl-pax-customer ftl-pax-cus adt">' + TravelResultLabel.lblPaxAdt.concat(" ").concat(r) + "<\/div>", t += '      <div class="ftl-pax-customer ftl-pax-sex">', t += '          <div class="ftl-input-group">', t += '             <select class="ftl-input ftl-input-gender">', t += '               <option value="true">' + TravelResultLabel.lblPaxMale + '<\/option><option value="false">' + TravelResultLabel.lblPaxFeMale + "<\/option>", t += "             <\/select>", t += "          <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-firstname">', t += '          <div class="ftl-input-group">', t += '             <input class="ftl-input ftl-req ftl-input-firstname" type="text" maxlength="160" placeholder="' + TravelResultLabel.lblPaxHolderFirstName + '" />', t += "          <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-lastname">', t += '          <div class="ftl-input-group">', t += '             <input class="ftl-input ftl-req ftl-input-lastname" type="text" maxlength="160" placeholder="' + TravelResultLabel.lblPaxHolderLastName + '" />', t += "          <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-bir"><\/div>', t += "  <\/div>", o = i.FlightSelect, s = [], s = i.FlightType == "domestic" ? o : o[0].ListFlight.filter(function (n) {
                return n.IsSelect == !0
            }), s.map(function (n) {
                var h = u.GetById(i.ListGeoCode, "AirportCode", n.StartPoint),
                    c = u.GetById(i.ListGeoCode, "AirportCode", n.EndPoint), r = null, o, s, f, e;
                try {
                    r = i.Baggage.list.filter(function (t) {
                        return t.Leg == n.Leg
                    })
                } catch (l) {
                    r = null
                }
                o = u.GetById(i.ListAirline, "Code", n.Airline);
                s = Travel.Validate.Logo(o);
                r != null && r.length > 0 && (f = "", e = !1, r.map(function (n) {
                    var t = TravelResultLabel.lblPaxSumTitle.concat(n.Name).concat(": ").concat(Travel.Func.MoneyFormat(n.Price)).concat(" ").concat(n.Currency);
                    n.Price == 0 ? (e = !0, f += '<option value="' + n.Code + '" selected>' + t + "<\/option>") : f += '<option value="' + n.Code + '">' + t + "<\/option>"
                }), t += '<div class="ftl-pax-baggage">', t += '  <div class="ftl-pax-customer ftl-pax-deposit">', t += '    <p><img src="' + s + '" />' + h.CityName.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(c.CityName) + "<\/p>", t += '    <div class="ftl-input-group">', t += '        <select class="ftl-input ftl-input-baggage" name="ftl-pax-baggage" leg="' + n.Leg + '">', e || (t += '           <option value="0">' + TravelResultLabel.lblPaxSelect + "<\/option>"), t += f, t += "        <\/select>", t += "    <\/div>", t += "  <\/div>", t += "<\/div>")
            }), t += "<\/li>";
            if (f > 0 && f <= 9) for (r = 1; r <= f; r++) t += '  <li type="chd" value="' + r + '">', t += '    <div class="ftl-pax-row">', t += '      <div class="ftl-pax-customer ftl-pax-cus chd">' + TravelResultLabel.lblPaxChd.concat(" ").concat(r) + "<\/div>", t += '      <div class="ftl-pax-customer ftl-pax-sex">', t += '         <div class="ftl-input-group">', t += '           <select class="ftl-input ftl-input-gender"><option value="true">' + TravelResultLabel.lblPaxMale + '<\/option><option value="false">' + TravelResultLabel.lblPaxFeMale + "<\/option><\/select>", t += "         <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-firstname">', t += '          <div class="ftl-input-group">', t += '             <input class="ftl-input ftl-req ftl-input-firstname" type="text" maxlength="160" placeholder="' + TravelResultLabel.lblPaxHolderFirstName + '" />', t += "          <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-lastname">', t += '          <div class="ftl-input-group">', t += '             <input class="ftl-input ftl-req ftl-input-lastname" type="text" maxlength="160" placeholder="' + TravelResultLabel.lblPaxHolderLastName + '" />', t += "          <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-bir">', t += '         <div class="ftl-input-group">', t += '            <input name="ftl-pax-birthday" class="ftl-input ftl-req ftl-picker-chd" placeholder="dd-MM-yyyy" type="datetime" readonly>', t += '            <span class="ftl-input-icon"><i class="fa fa-calendar-alt"><\/i><\/span>', t += "        <\/div>", t += "      <\/div>", t += "    <\/div>", o = i.FlightSelect, s = [], s = i.FlightType == "domestic" ? o : o[0].ListFlight.filter(function (n) {
                return n.IsSelect == !0
            }), s.map(function (n) {
                var h = u.GetById(i.ListGeoCode, "AirportCode", n.StartPoint),
                    c = u.GetById(i.ListGeoCode, "AirportCode", n.EndPoint), r = null, o, s, f, e;
                try {
                    r = i.Baggage.list.filter(function (t) {
                        return t.Leg == n.Leg
                    })
                } catch (l) {
                    r = null
                }
                o = u.GetById(i.ListAirline, "Code", n.Airline);
                s = Travel.Validate.Logo(o);
                r != null && r.length > 0 && (f = "", e = !1, r.map(function (n) {
                    var t = TravelResultLabel.lblPaxSumTitle.concat(n.Name).concat(": ").concat(Travel.Func.MoneyFormat(n.Price)).concat(" ").concat(n.Currency);
                    n.Price == 0 ? (e = !0, f += '<option value="' + n.Code + '" selected>' + t + "<\/option>") : f += '<option value="' + n.Code + '">' + t + "<\/option>"
                }), t += '<div class="ftl-pax-baggage">', t += '  <div class="ftl-pax-deposit">', t += '    <p><img src="' + s + '" />' + h.CityName.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(c.CityName) + "<\/p>", t += '    <div class="ftl-input-group">', t += '       <select class="ftl-input ftl-input-baggage" name="ftl-pax-baggage" leg="' + n.Leg + '">', e || (t += '           <option value="0">' + TravelResultLabel.lblPaxSelect + "<\/option>"), t += f, t += "       <\/select>", t += "    <\/div>", t += "  <\/div>", t += "<\/div>")
            }), t += "  <\/li>";
            if (e > 0 && e <= 2) for (r = 1; r <= e; r++) t += '  <li type="inf" value="' + r + '">', t += '    <div class="ftl-pax-row">', t += '      <div class="ftl-pax-customer ftl-pax-cus inf">' + TravelResultLabel.lblPaxInf.concat(" ").concat(r) + "<\/div>", t += '      <div class="ftl-pax-customer ftl-pax-sex">', t += '         <div class="ftl-input-group">', t += '           <select class="ftl-input ftl-input-gender"><option value="true">' + TravelResultLabel.lblPaxMale + '<\/option><option value="false">' + TravelResultLabel.lblPaxFeMale + "<\/option><\/select>", t += "         <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-firstname">', t += '          <div class="ftl-input-group">', t += '             <input class="ftl-input ftl-req ftl-input-firstname" type="text" maxlength="160" placeholder="' + TravelResultLabel.lblPaxHolderFirstName + '" />', t += "          <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-lastname">', t += '          <div class="ftl-input-group">', t += '             <input class="ftl-input ftl-req ftl-input-lastname" type="text" maxlength="160" placeholder="' + TravelResultLabel.lblPaxHolderLastName + '" />', t += "          <\/div>", t += "      <\/div>", t += '      <div class="ftl-pax-customer ftl-pax-bir">', t += '        <div class="ftl-input-group">', t += '           <input name="ftl-pax-birthday" class="ftl-input ftl-req ftl-picker-inf" placeholder="dd-MM-yyyy" type="datetime" readonly>', t += '           <span class="ftl-input-icon"><i class="fa fa-calendar-alt"><\/i><\/span>', t += "        <\/div>", t += "      <\/div>", t += "    <\/div>", t += "  <\/li>";
            if (t += " <\/ul>", Travel.ResultPrm.BaggageMesage != undefined && (t += '<div class="ftl-pax-note">', t += Travel.ResultPrm.BaggageMesage, t += "<\/div>"), f > 0 || e > 0) {
                var p = Travel.Date.PickerFormat, w = p.options_chd, b = p.options_inf;
                t += ' <div class="ftl-pax-note">';
                t += '   <span><i class="fa fa-exclamation-triangle"><\/i> ' + TravelResultLabel.lblPaxNote + "<\/span>";
                t += "   <ul>";
                f > 0 && (h = Travel.Date.ConvertPaxDay(i.MinDate, i.MaxDate, 2, 12), l = "<b> ".concat(h.from).concat("<\/b> đến <b>").concat(h.to).concat("<\/b>"), w.startDate = h.startDate, w.endDate = h.endDate, t += '<li><i class="fa fa-hand-o-right"><\/i> ' + TravelResultLabel.lblPaxNoteChd.concat(l) + "<\/li>");
                e > 0 && (c = Travel.Date.ConvertPaxDay(i.MinDate, i.MaxDate, 0, 2), l = "<b> ".concat(c.from).concat("<\/b> đến <b>").concat(c.to).concat("<\/b>"), b.startDate = c.startDate, b.endDate = c.endDate, t += '<li><i class="fa fa-hand-o-right"><\/i> ' + TravelResultLabel.lblPaxNoteInf.concat(l) + "<\/li>");
                t += '      <li><i class="fa fa-hand-o-right"><\/i> ' + TravelResultLabel.lblPaxNoteOrther + "<\/li>";
                t += "   <\/ul>";
                t += " <\/div>"
            }
            t += "<\/div>";
            $("#ftl-pax-info").html(t);
            $(".ftl-picker-chd").datepicker(Travel.Date.PickerFormat.options_chd).on("show", function () {
                $(".datepicker .next").html('<i class="fa fa-arrow-right"><\/i>');
                $(".datepicker .prev").html('<i class="fa fa-arrow-left"><\/i>');
                $("body").removeAttr("style")
            });
            $(".ftl-picker-inf").datepicker(Travel.Date.PickerFormat.options_inf).on("show", function () {
                $(".datepicker .next").html('<i class="fa fa-arrow-right"><\/i>');
                $(".datepicker .prev").html('<i class="fa fa-arrow-left"><\/i>');
                $("body").removeAttr("style")
            });
            $(".ftl-input-passport-expiredate").datepicker(Travel.Date.PickerFormat.options_passport).on("show", function () {
                $(".datepicker .next").html('<i class="fa fa-arrow-right"><\/i>');
                $(".datepicker .prev").html('<i class="fa fa-arrow-left"><\/i>');
                $("body").removeAttr("style")
            })
        } else return '<div class="ftl-fare-wraper" id="ftl-pax-info"><\/div>'
    }, Contact: function () {
        var n = "";
        return n += '<div class="ftl-fare-wraper" id="ftl-contact">', n += ' <div class="ftl-title">' + TravelResultLabel.lblContactTitle + "<\/div>", n += ' <div class="ftl-box-option">', n += '   <ul class="ftl-contact">', n += "     <li>", n += "       <p>" + TravelResultLabel.lblContactRemark + "<\/p>", n += '       <div class="ftl-input-group">', n += '         <select class="ftl-input" name="ftl-contact">', n += '            <option value="1">' + TravelResultLabel.lblContactMr + '<\/option><option value="2">' + TravelResultLabel.lblContactMss + "<\/option>", n += "         <\/select>", n += "       <\/div>", n += "     <\/li>", n += "     <li>", n += "       <p>" + TravelResultLabel.lblContactFullname + '<span class="ftl-required"> *<\/span><\/p>', n += '       <div class="ftl-input-group">', n += '          <input class="ftl-input ftl-req" type="text" placeholder="' + TravelResultLabel.lblContactFullname + '" name="ftl-contact" maxlength="100" />', n += "       <\/div>", n += "     <\/li>", n += "     <li>", n += "       <p>" + TravelResultLabel.lblContactPhone + '<span class="ftl-required"> *<\/span><\/p>', n += '       <div class="ftl-input-group">', n += '          <input class="ftl-input ftl-req" type="tel" placeholder="' + TravelResultLabel.lblContactPhone + '" name="ftl-contact" maxlength="15" />', n += "       <\/div>", n += "     <\/li>", n += "     <li>", n += "       <p>" + TravelResultLabel.lblContactEmail + '<span class="ftl-required"> *<\/span><\/p>', n += '       <div class="ftl-input-group">', n += '          <input class="ftl-input ftl-req" type="email" placeholder="' + TravelResultLabel.lblContactEmail + '" name="ftl-contact" maxlength="100" />', n += "       <\/div>", n += "     <\/li>", n += "     <li>", n += "       <p>" + TravelResultLabel.lblContactAddress + "<\/p>", n += '       <div class="ftl-input-group">', n += '          <input class="ftl-input" type="text" placeholder="' + TravelResultLabel.lblContactAddress + '" name="ftl-contact" maxlength="250" />', n += "       <\/div>", n += "     <\/li>", n += "     <li>", n += "       <p>" + TravelResultLabel.lblContactDes + "<\/p>", n += '       <div class="ftl-input-group">', n += '          <textarea class="ftl-input" type="text" placeholder="' + TravelResultLabel.lblContactNotes + '" name="ftl-contact" maxlength="250"><\/textarea>', n += "       <\/div>", n += "     <\/li>", n += "   <\/ul>", n += " <\/div>", n += ' <div class="ftl-box-option ftl-boder-top">', n += '    <label class="ftl-checkbox ftl-invoice-title"><input type="checkbox" name="ftl-select-invoice"><span class="ftl-checkbox-mark"><\/span>   ' + TravelResultLabel.lblContactExport + "<\/label>", n += '    <div id="ftl-invoice"><\/div>', n += " <\/div>", n + "<\/div>"
    }, Invoice: function () {
        var n = "";
        Travel.ResultPrm.book.IsBilling && (n += '<ul class="ftl-invoice">', n += "  <li>", n += "     <p>" + TravelResultLabel.lblInvoiceCompany + '<span class="ftl-required"> *<\/span><\/p>', n += '     <div class="ftl-input-group">', n += '       <input class="ftl-input ftl-req" type="text" placeholder="' + TravelResultLabel.lblInvoiceCompany + '" name="ftl-invoice" maxlength="500" />', n += "     <\/div>", n += "  <\/li>", n += "  <li>", n += "     <p>" + TravelResultLabel.lblInvoiceAddress + '<span class="ftl-required"> *<\/span><\/p>', n += '     <div class="ftl-input-group">', n += '       <input class="ftl-input ftl-req" type="text" placeholder="' + TravelResultLabel.lblInvoiceAddress + '" name="ftl-invoice" maxlength="500" />', n += "     <\/div>", n += "  <\/li>", n += "  <li>", n += "     <p>" + TravelResultLabel.lblInvoiceCity + '<span class="ftl-required"> *<\/span><\/p>', n += '     <div class="ftl-input-group">', n += '       <input class="ftl-input ftl-req" type="text" placeholder="' + TravelResultLabel.lblInvoiceCity + '" name="ftl-invoice" maxlength="250" />', n += "     <\/div>", n += "  <\/li>", n += "  <li>", n += "     <p>" + TravelResultLabel.lblInvoiceVAT + '<span class="ftl-required"> *<\/span><\/p>', n += '     <div class="ftl-input-group">', n += '       <input class="ftl-input ftl-req" type="text" placeholder="' + TravelResultLabel.lblInvoiceVAT + '" name="ftl-invoice" maxlength="50" />', n += "     <\/div>", n += "  <\/li>", n += "  <li>", n += "     <p>" + TravelResultLabel.lblInvoiceRevice + '<span class="ftl-required"> *<\/span><\/p>', n += '     <div class="ftl-input-group">', n += '       <input class="ftl-input ftl-req" type="text" placeholder="' + TravelResultLabel.lblInvoiceRevice + '" name="ftl-invoice" maxlength="100" />', n += "     <\/div>", n += "  <\/li>", n += "  <li>", n += "     <p>" + TravelResultLabel.lblInvoiceEmail + "<\/p>", n += '     <div class="ftl-input-group">', n += '        <input class="ftl-input" type="text" placeholder="' + TravelResultLabel.lblInvoiceEmail + '" name="ftl-invoice" maxlength="150" />', n += "     <\/div>", n += "  <\/li>", n += "<\/ul>");
        $("#ftl-invoice").html(n)
    }, Payment: function () {
        var n = "", t;
        return Travel.ResultPrm.book.FeePercent = 0, t = Travel.Config.PaymentMethod, t != null && (n += '<div class="ftl-fare-wraper" id="ftl-payment-method">', n += '  <div class="ftl-title">', n += TravelResultLabel.lblPaymentTitle, n += "  <\/div>", n += '  <div class="ftl-box-option">', n += "  <\/div>", n += '  <div class="ftl-box-option">', n += '   <ul class="ftl-payment">', t.map(function (t, i) {
            var r = i == 0 ? 'checked="checked"' : "";
            t.Gateway == "DTC" ? (n += '<li name="payment-method" value="' + t.Id + '">', n += '  <div class="ftl-group-box">', n += '     <i class="fa fa-check-circle' + (r ? " ftl-active" : "") + '"><\/i>', n += "     <span>" + t.Name + "<\/span>", n += "  <\/div>", n += '  <div class="ftl-payment-content ' + (i > 0 ? "ftl-none" : "") + '">' + t.Description + "<\/div>", n += "<\/li>") : (n += '<li name="payment-method" value="' + t.Id + '">', n += '  <div class="ftl-group-box">', n += '     <i class="fa fa-check-circle' + (r ? " ftl-active" : "") + '"><\/i>', n += "     <span>" + t.Name + "<\/span>", n += "  <\/div>", n += '  <div class="ftl-payment-content ftl-none">', n += "    <p>" + t.Description + "<\/p>", n += "    <p>", n += '      <img src="https://ibe.vemaybay.vn//Resources/Images/Payment/onepay.png" />', n += '      <img src="' + t.Logo + '" />', n += "    <\/p>", n += '    <p style="text-align: left; color:green !important; font-size: 16px !important;"><span class="fa fa-usd"><\/span> Phí dịch vụ: ' + t.FeePercent + "% giá trị đơn hàng<\/p>", n += "  <\/div>", n += "<\/li>")
        }), n += "   <\/ul>", n += " <\/div>", n += ' <div class="ftl-footer">', n += '   <div class="ftl-fare-back">', n += '     <button type="button" id="ftl-btn-back" class="ftl-btn"><i class="fa fa-chevron-left"><\/i> <span>' + TravelResultLabel.lblButtonBack + "<\/span><\/button>", n += "   <\/div>", n += '   <div class="ftl-fare-booking">', n += '     <button type="button" id="ftl-btn-booking" class="ftl-btn"><span>' + TravelResultLabel.lblButtonBooking + '<\/span> <i class="fa fa-chevron-right"><\/i><\/button>', n += "   <\/div>", n += " <\/div>", n += "<\/div>"), n
    }, BookingConfirm: function (n, t = true) {
        var s = Travel.Config.PaymentMethod, i = "", r, e, u, f, o;
        n == null ? i = '<p class="ftl-notification">Không tìm thấy Booking.<\/p>' : (r = Travel.Func, i += '<div class="ftl-fare-wraper">', i += '  <div class="ftl-title">' + TravelResultLabel.lblConfirmCode.concat(n.Code) + "<\/div >", i += '  <div class="ftl-book-status">' + (n.MessageAgent != undefined ? n.MessageAgent : n.Message) + "<\/div>", i += "<\/div>", i += '<div class="ftl-fare-wraper">', i += '  <div class="ftl-title">' + TravelResultLabel.lblConfirmDetail + "<\/div>", n.Flights != null && n.Flights.map(function (t) {
            _geoStart = r.GetById(n.ListGeoCode, "AirportCode", t.StartPoint);
            _geoEnd = r.GetById(n.ListGeoCode, "AirportCode", t.EndPoint);
            i += '<div class="ftl-confirm-flight-title">';
            i += " <span>" + TravelResultLabel.lblConfirmFlight + ": " + _geoStart.CityName.concat(", ").concat(_geoStart.CountryName).concat(' <i class="fa fa-long-arrow-right"><\/i> ') + _geoEnd.CityName.concat(", ").concat(_geoEnd.CountryName) + "<\/span>";
            t.Code != "" && (i += "<span>" + TravelResultLabel.lblConfirmCodeBooking + ':<\/span> <span class="ftl-color-text">' + t.Code + "<\/span>");
            i += "<\/div>";
            i += '<div class="ftl-box-item">';
            var u = t.ListSegment;
            u != null && u.length > 0 && u.map(function (t) {
                var u = r.GetById(n.ListGeoCode, "AirportCode", t.StartPoint),
                    f = r.GetById(n.ListGeoCode, "AirportCode", t.EndPoint),
                    o = r.GetById(n.ListAircraft, "IATA", t.Plane.toString()),
                    e = r.GetById(n.ListAirline, "Code", t.Airline), s = Travel.Validate.Logo(e);
                i += '  <ul class="ftl-box-item-flight">';
                i += '    <li><img src="' + s + '" /><p>' + (e != null ? e.Name : "") + "<\/p><\/li>";
                i += "    <li>";
                i += "      <span><b>" + u.CityName + " - " + u.AirportCode + "<\/b><\/span>";
                i += "      <span><i>" + u.AirportName + "<\/i><\/span>";
                i += "      <span>" + TravelResultLabel.lblDetailTimeUp + ": <b> " + t.StartTime + "<\/b><\/span>";
                i += "      <span>" + TravelResultLabel.lblDetailDate + ": <b>" + t.StartDate + "<\/b><\/span>";
                i += "    <\/li>";
                i += "    <li>";
                i += "      <span><b>" + f.CityName + " - " + f.AirportCode + "<\/b><\/span>";
                i += "      <span><i>" + f.AirportName + "<\/i><\/span>";
                i += "      <span>" + TravelResultLabel.lblDetailTimeDown + ": <b> " + t.EndTime + "<\/b><\/span>";
                i += "      <span>" + TravelResultLabel.lblDetailDate + ": <b>" + t.EndDate + "<\/b><\/span>";
                i += "    <\/li>";
                i += "    <li>";
                i += "      <span>" + TravelResultLabel.lblDetailFlightNumber + ": <b>" + t.FlightNumber + "<\/b><\/span>";
                i += "      <span>" + TravelResultLabel.lblDetailFlightDuration + ":<b> " + t.Duration + "<\/b><\/span>";
                i += "      <span>" + TravelResultLabel.lblDetailFlightClass + ":<b> " + t.Class + "<\/b><\/span>";
                i += "      <span>" + TravelResultLabel.lblDetailFlightPlan + ": <b>" + (o != null ? o.Model : "") + "<\/b><\/span>";
                i += "    <\/li>";
                i += "  <\/ul>"
            });
            i += "<\/div>"
        }), i += "<\/div>", n.Passengers != null && n.Passengers.length > 0 && (i += '<div class="ftl-fare-wraper">', i += '  <div class="ftl-title">' + TravelResultLabel.lblConfirmInfomation + "<\/div>", i += '  <div class="ftl-confirm-flight-title">', i += "      <span>" + TravelResultLabel.lblConfirmFlightTitle + "<\/span>", i += "  <\/div>", i += '  <div class="ftl-box-item">', i += '     <table class="ftl-confirm-pax">', i += "        <tr>", i += "           <th>" + TravelResultLabel.lblConfirmFlightNo + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmFlightCustomer + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmFlightSex + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmFlightBirthday + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmFlightCountry + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmFlightPassport + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmFlightPassportExpiredate + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmFlightTotal + "<\/th>", i += "        <\/tr>", n.Passengers.map(function (n, t) {
            i += "        <tr>";
            i += "           <td>" + (t + 1) + "<\/td>";
            i += "           <td>" + n.FirstName + " " + n.LastName + "<\/td>";
            i += "           <td>" + (n.Sex ? TravelResultLabel.lblPaxMale : TravelResultLabel.lblPaxFeMale) + "<\/td>";
            i += "           <td>" + n.Birthday + "<\/td>";
            i += "           <td>" + (n.Nationality != undefined ? n.Nationality : "") + "<\/td>";
            i += "           <td>" + (n.PassportNumber != undefined ? n.PassportNumber : "") + "<\/td>";
            i += "           <td>" + (n.PassportExpirationDate != undefined ? n.PassportExpirationDate : "") + "<\/td>";
            i += "           <td>" + n.TotalFeeFormat + "<\/td>";
            i += "        <\/tr>"
        }), n.Baggages != null && n.Baggages.length > 0 && (i += "        <tr>", i += '           <td colspan="8"><span>' + n.TotalPassengers + "<\/span><\/td>", i += "        <\/tr>"), i += "      <\/table>", i += "  <\/div>", n.Baggages != null && n.Baggages.length > 0 && (i += '  <div class="ftl-confirm-flight-title">', i += "      <span>" + TravelResultLabel.lblConfirmBaggageTitle + "<\/span>", i += "  <\/div>", i += '  <div class="ftl-box-item">', i += '     <table class="ftl-confirm-pax">', i += "        <tr>", i += "           <th>" + TravelResultLabel.lblConfirmBaggageNo + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmBaggageCustomer + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmBaggageService + "<\/th>", i += "           <th>" + TravelResultLabel.lblConfirmBaggageFee + "<\/th>", i += "        <\/tr>", n.Baggages.map(function (t, u) {
            var f = r.GetById(n.ListGeoCode, "AirportCode", t.StartPoint),
                e = r.GetById(n.ListGeoCode, "AirportCode", t.EndPoint),
                o = f.CityName.concat(' <i class="fa fa-long-arrow-right"><\/i> ').concat(e.CityName);
            i += "        <tr>";
            i += "           <td>" + (u + 1) + "<\/td>";
            i += "           <td>" + t.FullName + "<\/td>";
            i += "           <td>" + o + ": " + TravelResultLabel.lblConfirmBaggageTitle + " " + t.Service + "<\/td>";
            i += "           <td>" + t.FeeFormat + "<\/td>";
            i += "        <\/tr>"
        }), i += "        <tr>", i += '           <td colspan="4"><span>' + n.TotalBaggage + "<\/span><\/td>", i += "        <\/tr>", i += "      <\/table>", i += "  <\/div>"), n.CouponAmount != "" && (i += '  <div class="ftl-confirm-coupon">' + TravelResultLabel.lblConfirmCouponTitle + ": <span> - " + n.CouponAmount + "<\/span><\/div>"), e = parseFloat(n.PaymentFee) || 0, e > 0 && (i += '  <div class="ftl-confirm-coupon">Phí thanh toán: <span>' + Travel.Func.MoneyFormat(e) + "<\/span><\/div>"), i += '  <div class="ftl-confirm-total">' + TravelResultLabel.lblConfirmTotalFee + ":  <span>" + n.TotalMoney + " " + n.Currency + "<\/span><\/div>", n.ErrorCode == "000" && (i += '  <p class="ftl-book-alert"><i class="fa fa-exclamation-triangle"><\/i> <b>' + TravelResultLabel.lblConfirmExpirationDateTitle + "<\/b>: " + TravelResultLabel.lblConfirmExpirationDate + n.ExpirationDate + "<\/p>"), i += "<\/div>"), n.Contact != null && (u = n.Contact, i += '<div class="ftl-fare-wraper">', i += '  <div class="ftl-title">' + TravelResultLabel.lblContactTitle + "<\/div>", i += '  <div class="ftl-box-item">', i += '      <ul class="ftl-confirm-infor">', i += "          <li><span>" + TravelResultLabel.lblContactFullname + ":<\/span>" + u.Name + "<\/li>", i += "          <li><span>" + TravelResultLabel.lblContactEmail + ":<\/span>" + u.Email + "<\/li>", i += "          <li><span>" + TravelResultLabel.lblContactPhone + ":<\/span>" + u.Phone + "<\/li>", i += "          <li><span>" + TravelResultLabel.lblContactNotes + ":<\/span>" + u.Requiter + "<\/li>", i += "          <li><span>" + TravelResultLabel.lblPaymentTitle + ":<\/span>" + n.PaymentMethod + "<\/li>", i += "      <\/ul>", i += '      <div class="ftl-clear" />', i += "  <\/div>", i += "<\/div>"), t && n.PaymentCode != null && (n.PaymentCode == "OP_DC" || n.PaymentCode == "OP_CC" || n.PaymentCode == "PO") && (f = s.find(t => t.Gateway == n.PaymentCode), f != null && (i += '<div class="ftl-fare-wraper ftl-confirm-payment">', i += '  <div class="ftl-title">' + n.PaymentMethod + "<\/div>", i += '  <div class="ftl-box-item">', i += '    <div class="ftl-payment-select">', i += "      <p>" + f.Description + "<\/p>", i += '      <img src="' + f.Logo + '" />', i += "    <\/div>", i += "  <\/div>", i += '  <div class="ftl-confirm-footer">', i += '      <button type="button" id="ftl-btn-payment" class="ftl-btn" payment-code="' + n.PaymentCode + '">' + TravelResultLabel.lblConfirmPayment + "<\/button>", i += "  <\/div>", i += "<\/div>")));
        $("#ftl-flight-selected").html(i);
        $("#ftlResult-form").prepend('<div class="ftl-page-title">' + Travel.Result.Step(!1) + "<\/div>");
        Travel.ResultPrm.paymentReturn && (o = {Url: window.location.search}, Travel.Connect.PaymentStatus(o))
    }
};
Travel.ResultReady = function () {
    $(document).on("click", "button.ftl-modal-close", function () {
        $("#ftl-modal-backdrop").removeClass("ftl-block").addClass("ftl-none");
        $("#ftl-modal-container").removeClass("ftl-flex").addClass("ftl-none");
        $(".ftl-mob").removeClass(".ftl-block").removeClass("ftl-flex").addClass("ftl-none")
    });
    $(document).on("click", "#ftl-modal-cart", function () {
        $("#ftl-modal-backdrop").addClass("ftl-block");
        $("#ftl-modal-container").addClass("ftl-flex");
        $(".ftl-mob").removeClass("ftl-block").addClass("ftl-none");
        $("#ftl-base-cart").addClass("ftl-block");
        $("#ftl-modal-container").prepend($("#ftl-base-cart"))
    });
    $(document).on("click", ".ftl-calendar-box", function () {
        var r = $(this).attr("id"), n = $(this).attr("itinerary"), f = Travel.ResultPrm.flight.Month,
            t = Travel.ResultPrm.flight.MonthSelected;
        if (t != undefined && t.length > 0) {
            var e = f.find(t => t.Itinerary == n), u = e.ListFare, i = t.find(t => t.Key == n);
            i == undefined ? (i = {
                Key: n,
                FareDatas: u.find(n => n.Key == r)
            }, t.push(i)) : i.FareDatas = u.find(n => n.Key == r)
        } else {
            var e = f.find(t => t.Itinerary == n), u = e.ListFare, o = {Key: n, FareDatas: u.find(n => n.Key == r)};
            t.push(o)
        }
        Travel.Result.FlightMonthSelect();
        $("html, body").animate({scrollTop: $("#ftl-flight-selected").offset().top - 100}, 1500)
    });
    $(document).on("click", "#btn-flight-detail", function () {
        var u = Travel.Config, n = Travel.ResultPrm.prms, f = Travel.ResultPrm.flight.MonthSelected, t = "", i = 0, r;
        f.map(function (n) {
            var r = n.FareDatas;
            t += (i == 0 ? "" : "-") + r.Key;
            i++
        });
        r = u.UrlResult + "?request=" + t + "-" + n.Adt + "-" + n.Chd + "-" + n.Chd;
        window.open(r, "_blank")
    });
    $(document).on("click", "ul.ftl-list-date li", function () {
        var n = "?request=", i = Travel.ResultPrm.prms, f = i.Adt, e = i.Chd, o = i.Inf,
            r = $(this).parent().closest("div").attr("leg"), t = $(this).attr("date-value"), s = i.ListFlight, u;
        s.map(function (i) {
            var e = i.StartPoint, o = i.EndPoint, s = i.ListDays, u = Travel.Func.GetById(s, "focus", !0).dayddMMyyyy,
                f;
            i.Leg < parseInt(r) ? (f = Travel.Date.CompareDate(u, t), f && (u = t)) : i.Leg == parseInt(r) ? u = t : (f = Travel.Date.CompareDate(u, t), f || (u = t));
            n += e.concat(o).concat(u).concat("-")
        });
        n.length > 0 && (n = n.substring(0, n.length - 1).concat("-").concat(f).concat("-").concat(e).concat("-").concat(o));
        u = window.location.href.split("?request");
        window.location.href = u[0].concat(n)
    });
    $(document).on("click", ".ftl-flight-main button", function () {
        var i;
        obj = $(this).parents(".ftl-flight-list");
        $parent = $(this).parents(".ftl-flight-item");
        var t = parseInt(obj.attr("leg")) || 0, r = $parent.attr("id"), n = Travel.ResultPrm.flight;
        n.FlightType == "domestic" && (i = n.Domestic.filter(function (n) {
            return n.Leg == t
        })[0].List, _flightSelect = Travel.Func.GetById(i, "Id", r), n.FlightSelect.push(_flightSelect), n.FlightSelect.length == n.Itinerary && ($(".ftl-box-temp").fadeOut(), Travel.Result.Step(!0), $("#ftl-filter-mobile").addClass("ftl-none")), $("#ftl-base-cart").fadeIn(), $("#ftl-flight-list".concat(t)).fadeOut(), $("#ftl-modal-cart").removeClass("ftl-none"), Travel.Result.DomesticSelect(), Travel.Result.BoxCart(!0));
        $("html, body").animate({scrollTop: $("#ftl-flight-selected").offset().top - 100}, 1500)
    });
    $(document).on("click", "button.ftl-btn-return", function () {
        obj = $(this).parent().closest("div");
        var i = obj.attr("leg"), r = obj.attr("id"), n = Travel.ResultPrm.flight, t = n.FlightSelect;
        t != null && t.length > 0 && (n.FlightSelect = t.filter(function (n) {
            return n.Id != r
        }), $("#ftl-flight-list".concat(i)).fadeIn(), Travel.Result.DomesticSelect());
        $(".ftl-box-temp").fadeIn();
        n.FlightSelect.length == 0 && ($("#ftl-base-cart").fadeOut(), $("#ftl-modal-cart").removeClass("ftl-flex").addClass("ftl-none"), $("#ftl-filter-mobile").removeClass("ftl-none"), n.Coupon = null);
        n.Baggage.selected = [];
        Travel.Result.BoxCart(!0);
        Travel.Result.Step(!0)
    });
    $(document).on("click", "button.ftl-fare-button", function () {
        obj = $(this).parents(".ftl-fare-item");
        var i = parseInt(obj.attr("fare-id")) || 0, n = Travel.ResultPrm.flight, r = n.International.List,
            t = Travel.Func.GetById(r, "FareDataId", i);
        n.FlightSelect.push(t);
        t != null && ($("#ftl-flight-international").fadeOut(), Travel.Result.InternationalSelect(), Travel.Result.BoxCart(!0), Travel.Result.Step(!0), $(".ftl-box-temp").fadeOut(), $("#ftl-base-cart").fadeIn(), $("html, body").animate({scrollTop: $("#ftl-flight-selected").offset().top - 100}, 1e3), $("#ftl-filter-mobile").addClass("ftl-none"), $("#ftl-modal-cart").removeClass("ftl-none"))
    });
    $(document).on("click", ".ftl-flight-item a.ftl-flight-detail", function () {
        var r, u;
        $parent = $(this).parent().closest("div");
        var n = 0, t = $parent.attr("id"), i = $parent.attr("flight-type");
        i == undefined ? (obj = $(this).parents(".ftl-flight-list"), i = obj.attr("flight-type"), n = parseInt(obj.attr("leg")) || 0) : n = parseInt($parent.attr("leg")) || 0;
        $(this).hasClass("ftl-flight-active") ? ($parent.children("ftl-flight-box-detail").fadeIn(), $(this).removeClass("ftl-flight-active"), $parent.children("div").fadeOut()) : ($(this).addClass("ftl-flight-active"), $parent.children("div").fadeIn());
        $(this).hasClass("ftl-flight-active") && (r = Travel.Result.DomesticIndex(n, t), $parent.children("div").html(r), u = $parent.find(".ftl-fare-rule"), Travel.Connect.FareRule(n, t, u))
    });
    $(document).on("click", ".flight-select", function () {
        var i, n;
        $item = $(this).parents(".ftl-fare-item");
        $parent = $(this).parents(".ftl-flight-fare");
        var r = parseInt($item.attr("fare-id")) || 0, u = parseInt($parent.attr("leg")) || 0,
            f = $parent.attr("flight-value"), e = Travel.ResultPrm.flight, o = e.International.List,
            t = Travel.Func.GetById(o, "FareDataId", r);
        t != null && (i = t.ListFlight.filter(function (n) {
            return n.Leg == u
        }), n = !0, i.map(function (t) {
            t.FlightValue == f && n ? (t.IsSelect = !0, n = !1) : t.IsSelect = !1
        }), $index = $(this).parents(".ftl-fare-index"), $index.find(".ftl-active").removeClass("ftl-active"), $(this).find("i").addClass("ftl-active"))
    });
    $(document).on("click", ".ftl-flight-fare a.ftl-flight-detail", function () {
        var n, t, i;
        $item = $(this).parents(".ftl-fare-item");
        $parent = $(this).parents(".ftl-flight-fare");
        n = $item.attr("fare-id");
        t = $parent.attr("flight-value");
        $(this).hasClass("ftl-flight-active") ? ($parent.children("ftl-flight-box-detail").fadeIn(), $(this).removeClass("ftl-flight-active"), $parent.children("div").fadeOut()) : ($(this).addClass("ftl-flight-active"), $parent.children("div").fadeIn());
        $(this).hasClass("ftl-flight-active") && (i = Travel.Result.InternationalIndex(n, t), $parent.children("div").html(i))
    });
    $(document).on("click", "#ftl-filter-mobile li:first-child", function () {
        $("#ftl-modal-backdrop").addClass("ftl-block");
        $("#ftl-modal-container").addClass("ftl-flex");
        $(".ftl-mob").removeClass("ftl-block").addClass("ftl-none");
        $(".ftl-container").addClass("ftl-block");
        $("#ftl-modal-container").prepend($(".ftl-container"));
        Travel.Result.BoxAirline(!0)
    });
    $(document).on("click", "#ftl-filter-mobile li:last-child", function () {
        $("#ftl-modal-backdrop").addClass("ftl-block");
        $("#ftl-modal-container").addClass("ftl-flex");
        $(".ftl-mob").removeClass("ftl-block").addClass("ftl-none");
        $("#vmbSearch").addClass("ftl-block");
        $("#ftl-modal-container").prepend($("#vmbSearch"))
    });
    $(document).on("click", "ul.ftl-base-filter li", function () {
        var n = Travel.ResultPrm.filter.airline, t = $(this).attr("value"), i = $(this).attr("checked");
        i != undefined ? n = t == "ALL" ? [] : n.filter(function (n) {
            return n != t
        }) : t == "ALL" ? n = ["ALL"] : (n = n.filter(function (n) {
            return n != "ALL"
        }), n.push(t));
        Travel.ResultPrm.filter.airline = n;
        Travel.Result.BoxAirline(!0);
        Travel.ResultPrm.flight.FlightType == "domestic" ? Travel.Result.Domestic() : Travel.Result.International()
    });
    $(document).on("click", "ul.ftl-base-stopnum li", function () {
        var r = $(this).attr("value"), t = Travel.ResultPrm.filter.stop, n = Travel.Func.GetById(t, "value", r), i;
        n != undefined && (i = n.isSelect, n.isSelect = !i);
        Travel.Result.International();
        Travel.Result.BoxFilterStop(t)
    });
    $(document).on("click", "ul.ftl-base-fare li", function () {
        var i = $(this).attr("value"), t, n;
        Travel.ResultPrm.filter.fare = i;
        t = Travel.ResultPrm.flight;
        t.MonthSelect ? Travel.Result.FlightMonthMain(!0) : (n = Travel.ResultPrm.prms.ListFlight, n != null && n.length > 0 && n.map(function (n, t) {
            Travel.Result.ListDate(t, !0)
        }), Travel.Result.Domestic(), Travel.Result.BoxAirline(!0));
        $(".ftl-base-fare").find(".checkmark").removeClass("ftl-active");
        $(this).find(".checkmark").addClass("ftl-active")
    });
    $(document).on("click", "ul.ftl-box-sort .sort", function () {
        var t, n;
        if (Travel.ResultPrm.flight.FlightType == "domestic") {
            var i = parseInt($(this).parent().closest("div").attr("leg")) || 0,
                t = $(this).parent().parent().attr("sort-value"),
                n = Travel.Func.GetById(Travel.ResultPrm.filter.sort, "Leg", i);
            n.type == t ? n.value == "asc" ? (n.value = "desc", $(this).children("span").removeClass("ftl-asc").addClass("ftl-desc")) : (n.value = "asc", $(this).children("span").removeClass("ftl-desc").addClass("ftl-asc")) : (n.type = t, n.value = "asc", $(this).parent("ul").find("span").removeClass("ftl-desc").removeClass("ftl-asc"), $(this).children("span").addClass("ftl-asc"));
            Travel.Func.SortDomes(i)
        } else t = $(this).attr("sort-value"), n = Travel.ResultPrm.filter.sort, n.type == t ? n.value == "asc" ? (n.value = "desc", $(this).children("span").removeClass("ftl-asc").addClass("ftl-desc")) : (n.value = "asc", $(this).children("span").removeClass("ftl-desc").addClass("ftl-asc")) : (n.type = t, n.value = "asc", $(this).parent("ul").find("span").removeClass("ftl-desc").removeClass("ftl-asc"), $(this).children("span").addClass("ftl-asc")), Travel.Func.SortInter()
    });
    $(document).on("click", "a.ftl-fare-rule", function () {
        if ($parent = $(this).parent().closest(".ftl-fare-item"), obj = $parent.find(".ftl-fare-box-rule"), $(this).hasClass("ftl-rule-active")) $(this).removeClass("ftl-rule-active"), $(this).removeClass("ftl-waiting-rule"), obj.html(""); else {
            var n = parseInt($parent.attr("fare-id")) || 0;
            Travel.Connect.FareRule(0, n, obj);
            $(this).addClass("ftl-rule-active");
            $(this).addClass("ftl-waiting-rule")
        }
    });
    $(document).on("click", "span.ftl-fare-close", function () {
        $parent = $(this).parent().closest(".ftl-fare-item");
        var n = $(this).attr("targer");
        n == "price" ? (obj = $parent.find(".ftl-fare-box-detail"), $parent.find(".ftl-fare-detail").removeClass("ftl-detail-active")) : (obj = $parent.find(".ftl-fare-box-rule"), $rule = $parent.find(".ftl-fare-rule"), $rule.removeClass("ftl-rule-active"), $rule.removeClass("ftl-waiting-rule"));
        obj.html("")
    });
    $(document).on("click", "a.ftl-fare-detail", function () {
        if ($parent = $(this).parent().closest(".ftl-fare-item"), obj = $parent.find(".ftl-fare-box-detail"), $(this).hasClass("ftl-detail-active")) $(this).removeClass("ftl-detail-active"), obj.html(""); else {
            var n = parseInt($parent.attr("fare-id")) || 0;
            Travel.Result.InternationalPrice(n, obj);
            $(this).addClass("ftl-detail-active")
        }
    });
    $(document).on("click", "#ftl-btn-back", function () {
        var n = Travel.ResultPrm.flight;
        n.FlightSelect = [];
        n.Coupon = null;
        n.Baggage = {List: [], Selected: []};
        n.FlightType == "domestic" ? $(".ftl-flight-list").fadeIn() : $("#ftl-flight-international").fadeIn();
        $(".ftl-box-temp").fadeIn();
        $("#ftl-base-cart").html("");
        $("#ftl-flight-selected").html("");
        $("#ftl-filter-mobile").removeClass("ftl-none");
        $("#ftl-modal-cart").removeClass("ftl-flex").addClass("ftl-none");
        Travel.Result.Step(!0)
    });
    $(document).on("click", "li[name=payment-method]", function () {
        $(".ftl-payment").find("i").removeClass("ftl-active");
        $(".ftl-payment-content").removeClass("ftl-block").addClass("ftl-none");
        var i = parseInt($(this).attr("value")) || 0, r = Travel.Config.PaymentMethod, t = Travel.ResultPrm.book,
            n = Travel.Func.GetById(r, "Id", i);
        n != null && ($(this).find("i").addClass("ftl-active"), $(this).find(".ftl-payment-content").removeClass("ftl-none").addClass("ftl-block"), t.PaymentCode = n.Gateway, t.PaymentMethod = n.Name, t.FeePercent = n.FeePercent);
        Travel.Result.BoxCart(!0)
    });
    $(document).on("change", "select[name=ftl-pax-baggage]", function () {
        var n = Travel.ResultPrm.flight.Baggage;
        n.selected = [];
        $("select[name=ftl-pax-baggage]").each(function () {
            var r = $(this).attr("leg"), t = $(this).val(), u = n.list, i;
            t != 0 && (i = u.filter(function (n) {
                return n.Code == t && n.Leg == r
            })[0], n.selected.push(i))
        });
        Travel.Result.BoxCart(!0)
    });
    $(document).on("click", "input[name=ftl-select-invoice]", function () {
        var n = $(this).is(":checked");
        Travel.ResultPrm.book.IsBilling = n;
        Travel.Result.Invoice()
    });
    $(document).on("click", "#ftl-btn-booking", function () {
        Travel.Validate.Booking()
    });
    $(document).on("click", "#ftl-btn-payment", function () {
        Travel.Connect.BookingPayment()
    });
    $(document).on("click", "#ftl-message-cancel", function () {
        $("#ftl-modal-backdrop").removeClass("ftl-block").addClass("ftl-none");
        $("#ftl-modal-message").removeClass("ftl-block").addClass("ftl-none")
    });
    $(document).on("click", "#ftl-message-return", function () {
        window.location.href = "/"
    });
    $(document).on("click", "#ftl-message-accept", function () {
        $("#ftl-modal-backdrop").removeClass("ftl-none").addClass("ftl-block");
        $("#ftl-modal-message").html("");
        $("#ftl-modal-message").addClass("ftl-waiting");
        $("#ftl-modal-message").append('<span class="ftl-waiting-text">' + TravelResultLabel.lblBookingWating + "<\/span>");
        Travel.Func.BookingReq()
    });
    $(document).on("keyup", ".ftl-coupon input", function () {
        var n = Travel.ResultPrm.flight.Coupon;
        n != null && (Travel.ResultPrm.flight.Coupon = null, Travel.Result.BoxCart(!0));
        $(".ftl-coupon span:first").html("");
        $(".ftl-coupon span:last").html("0")
    });
    $(document).on("click", ".ftl-coupon button", function () {
        var n = $(".ftl-coupon input").val();
        n == "" ? $(".ftl-coupon span:first").html(TravelResultLabel.lblCouponError) : (Travel.ResultPrm.itinerary.Code = n, Travel.Connect.Coupon())
    });
    $(document).on("click", ".ftl-rules i", function () {
        var n = Travel.ResultPrm.rule;
        n ? ($(this).removeClass("ftl-active"), $(".ftl-fare-booking").addClass("ftl-disable")) : ($(this).addClass("ftl-active"), $(".ftl-fare-booking").removeClass("ftl-disable"));
        Travel.ResultPrm.rule = !n
    })
};
$(document).ready(function () {
    var i = window.location.href.toUpperCase(), n = Travel.Func.GetQueryParams(i), r = n.CHECKSUM, t = n.STATUS;
    t != null && r != null && (t == "1" ? alert("Thành công: Tạo mã Payoo 88xxx thành công. Mời bạn kiểm tra số điện thoại hoặc email và làm theo hướng dẫn khi thanh toán.") : alert("Lỗi: Tạo mã Payoo 88xxx không thành công"));
    $("#vmbResult").length > 0 ? Travel.ResultReady() : Travel.SearchReady();
    $.getJSON("https://api.ipify.org/?format=json", function (n) {
        Travel.ResultPrm.IpRequest = n.ip
    })
});
$(document).mouseup(function (n) {
    var t = $(".ftl-modal");
    t.is(n.target) || t.has(n.target).length !== 0 || t.removeClass("ftl-open")
});
