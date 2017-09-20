var query = location.search;
switch (query) {
    case '?ships':
        var options = {
            valueNames: ['name', 'tier', 'id', 'type', 'nation']
        };
        new List('ships', options);
        break;
    case '?caches':
        var options = {
            valueNames: ['no', 'filename', 'filecount', 'mdate']
        };
        new List('caches', options);
        break;
    case '?chart':
        $.getJSON("database/records.json", function(json) {
            var data = json['daily'];

            var dateList = $.map(data, function(value, index) {
                var y = index.substring(0, 4)
                var m = index.substring(6, 4)
                var d = index.substring(8, 6)
                return [y + '/' + m + '/' + d];
            });
            var valueList = $.map(data, function(value, index) {
                return [value];
            });

            var dailyDownloadChart = echarts.init(document.getElementById("daily"));
            var maxValue = Math.max.apply(Math, valueList);

            option = {

                // Make gradient line here
                visualMap: {
                    show: false,
                    type: 'continuous',
                    seriesIndex: 0,
                    min: 0,
                    max: maxValue
                },
                title: {
                    left: 'center',
                    text: '每日下載量'
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    data: dateList
                },
                yAxis: {
                    splitLine: { show: false }
                },
                dataZoom: [{
                    startValue: '2017/09/04'
                }, {
                    type: 'inside'
                }],
                series: {
                    name: '下載數',
                    type: 'line',
                    showSymbol: true,
                    data: valueList
                }
            };

            dailyDownloadChart.setOption(option);

        });
        break;
    case '':
        $.getJSON("database/complete.json", function(json) {
            var nObj = Object.keys(json);
            var doneData = [];
            var nationData = [];

            for (var i = 0; i < nObj.length; i++) {
                var nation = nObj[i];
                var data = json[nation];
                var percent = Math.round(data[0] / data[1] * 100);
                doneData.push(percent);

                switch (nation) {
                    case 'commonwealth':
                        nation = "聯邦";
                        break;
                    case 'france':
                        nation = "法國";
                        break;
                    case 'germany':
                        nation = "德國";
                        break;
                    case 'italy':
                        nation = "義大利";
                        break;
                    case 'japan':
                        nation = "日本";
                        break;
                    case 'panasia':
                        nation = "泛亞";
                        break;
                    case 'poland':
                        nation = "波蘭";
                        break;
                    case 'uk':
                        nation = "英國";
                        break;
                    case 'usa':
                        nation = "美國";
                        break;
                    case 'ussr':
                        nation = "蘇聯";
                        break;
                }
                nationData.push(nation);

            }

            var nationCompleteChart = echarts.init(document.getElementById("nationComplete"));


            option = {
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow'
                    }
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    top: '3%',
                    containLabel: true
                },
                xAxis: {
                    type: 'value',
                    scale: true,
                    min: 0,
                    max: 100
                },
                yAxis: {
                    type: 'category',
                    data: nationData.reverse()
                },
                series: [{
                    name: '完成數(%)',
                    type: 'bar',
                    label: {
                        normal: {
                            show: true,
                            position: 'insideRight',
                            formatter: '{c}%'
                        }
                    },
                    data: doneData.reverse()
                }]
            };
            nationCompleteChart.setOption(option);

        });



        break;
}