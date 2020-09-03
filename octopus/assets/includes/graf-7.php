//$ ---------------------------------- inicio de graficas --------------------------------------------
<h2 class="mt-none">Flot Charts</h2>
<p class="mb-lg">Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage,
    attractive looks and interactive features.</p>

<div class="row">
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Basic Chart</h2>
                <p class="panel-subtitle">You don't have to do much to get an attractive plot. Create a
                    placeholder, make sure it has dimensions (so Flot knows at what size to draw the
                    plot), then call the plot function with your data.</p>
            </header>
            <div class="panel-body">

                <!-- Flot: Basic -->
                <div class="chart chart-md" id="flotBasic"></div>
                <script type="text/javascript">
                    var flotBasicData = [{
                        data: [
                            [0, 170],
                            [1, 169],
                            [2, 173],
                            [3, 188],
                            [4, 147],
                            [5, 113],
                            [6, 128],
                            [7, 169],
                            [8, 173],
                            [9, 128],
                            [10, 128]
                        ],
                        label: "Serie 1",
                        color: "#0088cc"
                    }, {
                        data: [
                            [0, 115],
                            [1, 124],
                            [2, 114],
                            [3, 121],
                            [4, 115],
                            [5, 83],
                            [6, 102],
                            [7, 148],
                            [8, 147],
                            [9, 103],
                            [10, 113]
                        ],
                        label: "Series 2",
                        color: "#2baab1"
                    }, {
                        data: [
                            [0, 70],
                            [1, 69],
                            [2, 73],
                            [3, 88],
                            [4, 47],
                            [5, 13],
                            [6, 28],
                            [7, 69],
                            [8, 73],
                            [9, 28],
                            [10, 28]
                        ],
                        label: "Series 3",
                        color: "#734ba9"
                    }];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.
                </script>

            </div>
        </section>
    </div>
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Real-Time Chart</h2>
                <p class="panel-subtitle">You can update a chart periodically to get a real-time effect
                    by using a timer to insert the new data in the plot and redraw it.</p>
            </header>
            <div class="panel-body">

                <!-- Flot: Curves -->
                <div class="chart chart-md" id="flotRealTime"></div>

            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Bars Chart</h2>
                <p class="panel-subtitle">With the categories plugin you can plot categories/textual
                    data easily.</p>
            </header>
            <div class="panel-body">

                <!-- Flot: Bars -->
                <div class="chart chart-md" id="flotBars"></div>
                <script type="text/javascript">
                    var flotBarsData = [
                        ["Jan", 28],
                        ["Feb", 42],
                        ["Mar", 25],
                        ["Apr", 23],
                        ["May", 37],
                        ["Jun", 33],
                        ["Jul", 18],
                        ["Aug", 14],
                        ["Sep", 18],
                        ["Oct", 15],
                        ["Nov", 4],
                        ["Dec", 7]
                    ];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.
                </script>

            </div>
        </section>
    </div>
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Pie Chart</h2>
                <p class="panel-subtitle">Default Pie Chart</p>
            </header>
            <div class="panel-body">

                <!-- Flot: Pie -->
                <div class="chart chart-md" id="flotPie"></div>
                <script type="text/javascript">
                    var flotPieData = [{
                        label: "Series 1",
                        data: [
                            [1, 60]
                        ],
                        color: '#0088cc'
                    }, {
                        label: "Series 2",
                        data: [
                            [1, 10]
                        ],
                        color: '#2baab1'
                    }, {
                        label: "Series 3",
                        data: [
                            [1, 15]
                        ],
                        color: '#734ba9'
                    }, {
                        label: "Series 4",
                        data: [
                            [1, 15]
                        ],
                        color: '#E36159'
                    }];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.
                </script>

            </div>
        </section>
    </div>
</div>

<h2>Morris Charts</h2>
<p class="mb-lg">Good-looking charts shouldn't be difficult.</p>

<div class="row">
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Line Chart</h2>
                <p class="panel-subtitle">A style of chart that is created by connecting a series of
                    data points together with a line.</p>
            </header>
            <div class="panel-body">

                <!-- Morris: Line -->
                <div class="chart chart-md" id="morrisLine"></div>
                <script type="text/javascript">
                    var morrisLineData = [{
                        y: '2006',
                        a: 100,
                        b: 90
                    }, {
                        y: '2007',
                        a: 75,
                        b: 65
                    }, {
                        y: '2008',
                        a: 50,
                        b: 40
                    }, {
                        y: '2009',
                        a: 75,
                        b: 65
                    }, {
                        y: '2010',
                        a: 50,
                        b: 40
                    }, {
                        y: '2011',
                        a: 75,
                        b: 65
                    }, {
                        y: '2012',
                        a: 100,
                        b: 90
                    }, {
                        y: '2013',
                        a: 75,
                        b: 65
                    }, {
                        y: '2014',
                        a: 100,
                        b: 90
                    }];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.
                </script>

            </div>
        </section>
    </div>
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Donut Chart</h2>
                <p class="panel-subtitle">Donut Chart are functionally identical to pie charts.</p>
            </header>
            <div class="panel-body">

                <!-- Morris: Donut -->
                <div class="chart chart-md" id="morrisDonut"></div>
                <script type="text/javascript">
                    var morrisDonutData = [{
                        label: "Porto Template",
                        value: 32
                    }, {
                        label: "Tucson Template",
                        value: 18
                    }, {
                        label: "Porto Admin",
                        value: 20
                    }];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.
                </script>

            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- 1graf -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Bar Chart</h2>
                <p class="panel-subtitle">A bar chart is a way of summarizing a set of categorical data.
                </p>
            </header>
            <div class="panel-body">

                <!-- Morris: Bar -->
                <div class="chart chart-md" id="morrisBar"></div>
                <script type="text/javascript">
                    var morrisBarData = [{
                        y: '2004',
                        a: 10,
                        b: 30
                    }, {
                        y: '2005',
                        a: 100,
                        b: 25
                    }, {
                        y: '2006',
                        a: 60,
                        b: 25
                    }, {
                        y: '2007',
                        a: 75,
                        b: 35
                    }, {
                        y: '2008',
                        a: 90,
                        b: 20
                    }, {
                        y: '2009',
                        a: 75,
                        b: 15
                    }, {
                        y: '2010',
                        a: 50,
                        b: 10
                    }, {
                        y: '2011',
                        a: 75,
                        b: 25
                    }, {
                        y: '2012',
                        a: 30,
                        b: 10
                    }, {
                        y: '2013',
                        a: 75,
                        b: 5
                    }, {
                        y: '2014',
                        a: 60,
                        b: 8
                    }];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.
                </script>

            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Stacked Chart</h2>
                <p class="panel-subtitle">Stacked Bar Chart.</p>
            </header>
            <div class="panel-body">

                <!-- Morris: Area -->
                <div class="chart chart-md" id="morrisStacked"></div>
                <script type="text/javascript">
                    var morrisStackedData = [{
                        y: '2004',
                        a: 10,
                        b: 30
                    }, {
                        y: '2005',
                        a: 100,
                        b: 25
                    }, {
                        y: '2006',
                        a: 60,
                        b: 25
                    }, {
                        y: '2007',
                        a: 75,
                        b: 35
                    }, {
                        y: '2008',
                        a: 90,
                        b: 20
                    }, {
                        y: '2009',
                        a: 75,
                        b: 15
                    }, {
                        y: '2010',
                        a: 50,
                        b: 10
                    }, {
                        y: '2011',
                        a: 75,
                        b: 25
                    }, {
                        y: '2012',
                        a: 30,
                        b: 10
                    }, {
                        y: '2013',
                        a: 75,
                        b: 5
                    }, {
                        y: '2014',
                        a: 60,
                        b: 8
                    }];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.
                </script>

            </div>
        </section>
    </div>
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Area Chart</h2>
                <p class="panel-subtitle">An area chart or area graph displays graphically quantitive
                    data.</p>
            </header>
            <div class="panel-body">

                <!-- Morris: Area -->
                <div class="chart chart-md" id="morrisArea"></div>
                <script type="text/javascript">
                    var morrisAreaData = [{
                        y: '2004',
                        a: 10,
                        b: 30
                    }, {
                        y: '2005',
                        a: 100,
                        b: 25
                    }, {
                        y: '2006',
                        a: 60,
                        b: 25
                    }, {
                        y: '2007',
                        a: 75,
                        b: 35
                    }, {
                        y: '2008',
                        a: 90,
                        b: 20
                    }, {
                        y: '2009',
                        a: 75,
                        b: 15
                    }, {
                        y: '2010',
                        a: 50,
                        b: 10
                    }, {
                        y: '2011',
                        a: 75,
                        b: 25
                    }, {
                        y: '2012',
                        a: 30,
                        b: 10
                    }, {
                        y: '2013',
                        a: 75,
                        b: 5
                    }, {
                        y: '2014',
                        a: 60,
                        b: 8
                    }];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.
                </script>

            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <h2>Circular Charts</h2>
        <p class="mb-lg">Easy pie chart is a jQuery plugin that uses the canvas element to render simple
            pie charts for single values.</p>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Easy Pie Chart</h2>
                        <p class="panel-subtitle">Lightweight jQuery plugin to render and animate nice
                            pie charts with the HTML5 canvas element.</p>
                    </header>
                    <div class="panel-body">
                        <div class="row text-center">
                            <div class="col-md-6">
                                <div class="circular-bar">
                                    <div class="circular-bar-chart" data-percent="85" data-plugin-options='{ "barColor": "#0088CC", "delay": 300 }'>
                                        <strong>Design</strong>
                                        <label><span class="percent">85</span>%</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="circular-bar">
                                    <div class="circular-bar-chart" data-percent="60" data-plugin-options='{ "barColor": "#2BAAB1", "delay": 600 }'>
                                        <strong>HTML</strong>
                                        <label><span class="percent">60</span>%</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <h2>Gauge Charts</h2>
        <p class="mb-lg">Animated Gauge Charts</p>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Gauge</h2>
                        <p class="panel-subtitle">100% native and cool looking animated
                            JavaScript/CoffeScript gauge.</p>
                    </header>
                    <div class="panel-body">
                        <div class="row text-center">
                            <div class="col-md-6">
                                <div class="gauge-chart">
                                    <canvas id="gaugeBasic" width="180" height="110" data-plugin-options='{ "value": 2150, "maxValue": 3000 }'></canvas>
                                    <strong>Design</strong>
                                    <label id="gaugeBasicTextfield"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="gauge-chart">
                                    <canvas id="gaugeAlternative" width="180" height="110" data-plugin-options='{ "value": 1350, "maxValue": 3000 }'></canvas>
                                    <strong>HTML</strong>
                                    <label id="gaugeAlternativeTextfield"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h2>Liquid Charts</h2>
        <p class="mb-lg">Adds animated liquid charts.</p>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Liquid Meter</h2>
                        <p class="panel-subtitle">Exclusive Plug-in by Okler Themes</p>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <meter min="0" max="100" value="35" id="meter"></meter>
                            </div>
                            <div class="col-md-6">
                                <meter min="0" max="100" value="85" id="meterDark"></meter>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h2>Small Inline Charts</h2>
        <p class="mb-lg">Adds tiny charts called sparklines.</p>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Sparklines</h2>
                        <p class="panel-subtitle">This jQuery plugin generates sparklines (small inline
                            charts).</p>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6 col-lg-4">
                                <div class="small-chart-wrapper">
                                    <div class="small-chart" id="sparklineLine"></div>
                                    <div class="small-chart-info">
                                        <label>Average</label>
                                        <strong>1567.89</strong>
                                    </div>
                                    <script type="text/javascript">
                                        var sparklineLineData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
                                    </script>
                                </div>
                            </div>

                            <div class="col-xs-6 col-lg-4">
                                <div class="small-chart-wrapper">
                                    <div class="small-chart" id="sparklineBar"></div>
                                    <div class="small-chart-info">
                                        <label>Average</label>
                                        <strong>5000</strong>
                                    </div>
                                    <script type="text/javascript">
                                        var sparklineBarData = [5, 6, 7, 2, 0, 4, 2, 4, 2, 0, 4, 2, 4, 2, 0, 4];
                                    </script>
                                </div>
                            </div>

                            <div class="col-xs-6 col-lg-4">
                                <div class="small-chart-wrapper">
                                    <div class="small-chart" id="sparklineTristate"></div>
                                    <div class="small-chart-info">
                                        <label>Average</label>
                                        <strong>1567.89</strong>
                                    </div>
                                    <script type="text/javascript">
                                        var sparklineTristateData = [1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1];
                                    </script>
                                </div>
                            </div>

                            <div class="col-xs-6 col-lg-4">
                                <div class="small-chart-wrapper">
                                    <div class="small-chart" id="sparklineDiscrete"></div>
                                    <div class="small-chart-info">
                                        <label>Average</label>
                                        <strong>1567.89</strong>
                                    </div>
                                    <script type="text/javascript">
                                        var sparklineDiscreteData = [5, 6, 7, 9, 10, 5, 3, 2, 2, 4, 6, 7];
                                    </script>
                                </div>
                            </div>

                            <div class="col-xs-6 col-lg-4">
                                <div class="small-chart-wrapper">
                                    <div class="small-chart" id="sparklineBullet"></div>
                                    <div class="small-chart-info">
                                        <label>Average</label>
                                        <strong>1567.89</strong>
                                    </div>
                                    <script type="text/javascript">
                                        var sparklineBulletData = [10, 12, 12, 9, 7];
                                    </script>
                                </div>
                            </div>

                            <div class="col-xs-6 col-lg-4">
                                <div class="small-chart-wrapper">
                                    <div class="small-chart text-center" id="sparklinePie"></div>
                                    <div class="small-chart-info">
                                        <label>Average</label>
                                        <strong>1567.89</strong>
                                    </div>
                                    <script type="text/javascript">
                                        var sparklinePieData = [1, 1, 2];
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- end: page -->
//$ ---------------------------------- Fin de graficas --------------------------------------------