<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Tag Autocomplete</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered form-bordered">
                    <div class="form-group">
                        <label for="tags-input" class="col-md-3 control-label">Input Tags</label>
                        <div class="col-md-7">
                            <input name="tags" id="tags-input" data-role="tagsinput" data-tag-class="label label-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing,Cairo" />
                            <p>
                                Just add <code>data-role="tagsinput"</code> to your input field to
                                automatically change it to a tags input field.
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tags-input-multiple" class="col-md-3 control-label">True multi
                            value</label>
                        <div class="col-md-7">
                            <select id="tags-input-multiple" multiple data-role="tagsinput" data-tag-class="label label-primary">
                                <option value="Amsterdam">Amsterdam</option>
                                <option value="Washington">Washington</option>
                                <option value="Sydney">Sydney</option>
                                <option value="Beijing">Beijing</option>
                                <option value="Cairo">Cairo</option>
                            </select>
                            <p>
                                Use a <code>&lt;select multiple /&gt;</code> as your input element for a
                                tags input, to gain true multivalue support. Instead of a comma
                                separated string, the values will be set in an array. Existing
                                <code>&lt;option /&gt;</code> elements will automatically be set as
                                tags. This makes it also possible to create tags containing a comma.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>