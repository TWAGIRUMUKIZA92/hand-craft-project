/*
 Template Name: Drixo - Bootstrap 4 Admin InnoDashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: InnoDashboard js
 */

!function ($) {
    "use strict";

    var Dashboard = function () {
    };


    //creates area chart
    Dashboard.prototype.createAreaChart = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 0,
            lineWidth: 0,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            resize: true,
            gridLineColor: '#eee',
            hideHover: 'auto',
            lineColors: lineColors,
            fillOpacity: 0.7,
            behaveLikeLine: true
        });
    },

    //creates area chart
    Dashboard.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            gridLineColor: '#eef0f2',
            barSizeRatio: 0.4,
            resize: true,
            hideHover: 'auto',
            barColors: lineColors
        });
    },

    //creates Donut chart
    Dashboard.prototype.createDonutChart = function (element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true,
            colors: colors,
        });
    },

    //donut
    $('.peity-donut').each(function () {
        $(this).peity("donut", $(this).data());
    });

    //pie
    $('.peity-pie').each(function () {
        $(this).peity("pie", $(this).data());
    });

    /* BEGIN SVG WEATHER ICON */
    if (typeof Skycons !== 'undefined'){
        var icons = new Skycons(
            {"color": "#fff"},
            {"resizeClear": true}
            ),
                list  = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

            for(i = list.length; i--; )
            icons.set(list[i], list[i]);
            icons.play();
        };

    Dashboard.prototype.init = function () {

        //creating area chart
        var $areaData = [
            {y: '2015', a: 0, b: 0, c:0 ,d:0},
            {y: '2016', a: 10, b: 5, c:20 ,d:6},
            {y: '2017', a: 15, b: 20, c:22 ,d:10},
            {y: '2018', a: 15, b: 30, c:23 ,d:14},
            {y: '2019', a: 40, b: 70, c:50 ,d:30},
            {y: '2020', a: 70, b: 70, c:67 ,d:50},
            {y: '2021', a: 80, b: 90, c:85 ,d:78}
        ];
        this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a', 'b', 'c', 'd'], ['Project 1', 'Project 2', 'Project 3', 'Project n'], ['#ff5560', '#083ea5', '#73dd14', '#759dde']);

        //creating bar chart
        var $barData = [
            {y: '2014', a: 75, b: 65},
            {y: '2015', a: 50, b: 40},
            {y: '2016', a: 75, b: 65},
            {y: '2017', a: 100, b: 90},
            {y: '2018', a: 90, b: 75}
        ];
        this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#508aeb', '#fcc24c']);

        //creating donut chart
        var $donutData = [
            {label: "Bitcoin", value: 12},
            {label: "Ethereum", value: 42},
            {label: "Cardano", value: 20},
            {label: "Ripple", value: 26}
        ];
        this.createDonutChart('morris-donut-example', $donutData, ['#54cc96', "#508aeb", '#ff5560', '#fcc24c']);

    },
        //init
        $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.Dashboard.init();
    }(window.jQuery);
