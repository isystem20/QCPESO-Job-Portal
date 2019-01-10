/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";
    // ============================================================== 
    // Sales overview
    // ============================================================== 
    var monthly_applicants = $('#sales-overview2').data('values');

    var labels = [], madata=[], highest = 0 ;


    for (var key in monthly_applicants) {
        var value = monthly_applicants[key];
        console.log(key, value);
        labels.push(key);
        madata.push(value);
        if (value > highest) {
            highest = value;
        }
    }


    new Chartist.Line('#sales-overview2', {

        labels: labels,
        series: [
            { meta: "Monthly Applicant Registration", data: madata }
        ]


    }, {
        low: 0,
        high: highest,
        showArea: true,
        divisor: 10,
        lineSmooth: false,
        fullWidth: true,
        showLine: true,
        chartPadding: 30,
        axisX: {
            showLabel: true,
            showGrid: false,
            offset: 20
        },
        plugins: [
            Chartist.plugins.tooltip()
        ],
        // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
        axisY: {
            onlyInteger: true,
            showLabel: true,
            scaleMinSpace: 50,
            showGrid: true,
            offset: 10,
            labelInterpolationFnc: function(value) {
                return (value / 1000) + 'k'
            },

        }

    });
    // ============================================================== 
    // Sales overview 2
    // ============================================================== 

    var all_year = $('#ct-sales3-chart').data('values');

    var labels1 = [], madata1=[], highest = 0 ;


    for (var key in all_year) {
        var value = all_year[key];
        console.log(key, value);
        labels1.push(key);
        madata1.push(value);
        if (value > highest) {
            highest = value;
        }
    }
    new Chartist.Bar('#ct-sales3-chart', {
        labels: labels1,
        series: [madata1]
    }, {
        stackBars: true,
        axisX: {
            showGrid: false
        },
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value);
            },
            showGrid: true
        }, plugins: [
        	Chartist.plugins.tooltip()
      	],
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 15px'
            });
        }
    });


    
    // ============================================================== 
    // world map
    // ==============================================================
    jQuery('#visitfromworld').vectorMap({
        map: 'world_mill_en',
        backgroundColor: '#fff',
        borderColor: '#000',
        borderOpacity: 0.9,
        borderWidth: 1,
        zoomOnScroll: false,
        color: '#ddd',
        regionStyle: {
            initial: {
                fill: '#fff',
                'stroke-width': 1,
                'stroke': '#a6b7bf'
            }
        },
        markerStyle: {
            initial: {
                r: 5,
                'fill': '#26c6da',
                'fill-opacity': 1,
                'stroke': '#fff',
                'stroke-width': 1,
                'stroke-opacity': 1
            },
        },
        enableZoom: true,
        hoverColor: '#79e580',
        markers: [{
                latLng: [21.00, 78.00],
                name: 'India : 9347',
                style: { fill: '#398bf7' }
            },
            {
                latLng: [-33.00, 151.00],
                name: 'Australia : 250',
                style: { fill: '#398bf7' }
            },
            {
                latLng: [36.77, -119.41],
                name: 'USA : 250',
                style: { fill: '#398bf7' }
            },
            {
                latLng: [55.37, -3.41],
                name: 'UK   : 250',
                style: { fill: '#398bf7' }
            },
            {
                latLng: [25.20, 55.27],
                name: 'UAE : 250',
                style: { fill: '#398bf7' }
            }
        ],
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#fff', '#ccc'],
        selectedColor: '#c9dfaf',
        selectedRegions: [],
        showTooltip: true,
        onRegionClick: function(element, code, region) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
            alert(message);
        }
    });
       // $.toast({
        //     heading: 'Welcome to Adminpros',
        //     text: 'Most powerfull and elegant design with tons of elements.',
        //     position: 'top-right',
        //     loaderBg: '#f33c49',
        //     icon: 'info',
        //     hideAfter: 6000,
        //     stack: 6
        // })
});