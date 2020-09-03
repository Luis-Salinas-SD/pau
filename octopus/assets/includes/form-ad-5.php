<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Slider Range</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered">

                    <div class="form-group">
                        <label class="col-md-3 control-label">One Value</label>
                        <div class="col-md-6">
                            <div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "value": 50, "range": "min", "max": 100 }' data-plugin-slider-output="#listenSlider">
                                <input id="listenSlider" type="hidden" value="50" />
                            </div>
                            <p class="output">The current <code>value</code> is: <b>50</b></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Range</label>
                        <div class="col-md-6">
                            <div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "values": [ 25, 75 ], "range": true, "max": 100 }' data-plugin-slider-output="#listenSlider2">
                                <input id="listenSlider2" type="hidden" value="25, 75" />
                            </div>
                            <p class="output2">The <code>min</code> is: <b class="min">25</b> and the
                                <code>max</code> is: <b class="max">75</b></p>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </div>
</div>