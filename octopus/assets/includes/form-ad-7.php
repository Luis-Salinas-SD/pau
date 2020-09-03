<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Masked Inputs</h2>
                <p class="panel-subtitle">
                    Input masks allows a user to more easily enter fixed width input where you would
                    like them to enter the data in a certain format (dates,phones, etc).
                </p>
            </header>
            <div class="panel-body">
                <div class="form-body">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Date</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                    <input id="date" data-plugin-masked-input data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone</label>
                            <div class="col-md-6 control-label">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input id="phone" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Key</label>
                            <div class="col-md-6 control-label">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-tag"></i>
                                    </span>
                                    <input id="product-key" data-plugin-masked-input data-input-mask="(aa) 99-999" placeholder="(ab) 12-123" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="fc_inputmask_1">SSN</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <input id="fc_inputmask_1" data-plugin-masked-input data-input-mask="999-99-9999" placeholder="___-__-____" class="form-control">
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </section>
    </div>
</div>