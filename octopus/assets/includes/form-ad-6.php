<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Spinners</h2>
            </header>
            <div class="panel-body">

                <form class="form-horizontal form-bordered" action="#">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Default Spinner</label>
                        <div class="col-md-6">
                            <div data-plugin-spinner>
                                <div class="input-group input-small">
                                    <input type="text" class="spinner-input form-control" readonly="readonly">
                                    <div class="spinner-buttons input-group-btn btn-group-vertical">
                                        <button type="button" class="btn spinner-up btn-xs btn-default">
                                            <i class="fa fa-angle-up"></i>
                                        </button>
                                        <button type="button" class="btn spinner-down btn-xs btn-default">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Disabled</label>
                        <div class="col-md-6">
                            <div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
                                <div class="input-group input-small">
                                    <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                    <div class="spinner-buttons input-group-btn btn-group-vertical">
                                        <button type="button" class="btn spinner-up btn-xs">
                                            <i class="fa fa-angle-up"></i>
                                        </button>
                                        <button type="button" class="btn spinner-down btn-xs">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Horizontal buttons</label>
                        <div class="col-md-6">
                            <div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
                                <div class="input-group" style="width:150px;">
                                    <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                    <div class="spinner-buttons input-group-btn">
                                        <button type="button" class="btn btn-default spinner-up">
                                            <i class="fa fa-angle-up"></i>
                                        </button>
                                        <button type="button" class="btn btn-default spinner-down">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p>
                                with <code>max</code> value set to 10
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alternative</label>
                        <div class="col-md-6">
                            <div data-plugin-spinner data-plugin-options='{ "value":0, "step": 5, "min": 0, "max": 200 }'>
                                <div class="input-group">
                                    <div class="spinner-buttons input-group-btn">
                                        <button type="button" class="btn btn-default spinner-up">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                    <div class="spinner-buttons input-group-btn">
                                        <button type="button" class="btn btn-default spinner-down">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p>
                                with <code>step</code> set to 5
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>