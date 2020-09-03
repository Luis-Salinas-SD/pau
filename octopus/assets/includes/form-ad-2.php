<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Multi-select</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered" action="#">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Basic Multi-select</label>
                        <div class="col-md-6">
                            <select class="form-control" multiple="multiple" data-plugin-multiselect id="ms_example0">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes" selected>Tomatoes</option>
                                <option value="mozarella" selected>Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Basic Multi-select (Only One)</label>
                        <div class="col-md-6">
                            <select class="form-control" data-plugin-multiselect id="ms_example1">
                                <option value="cheese" selected>Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">With Preselected Options</label>
                        <div class="col-md-6">
                            <select class="form-control" multiple="multiple" data-plugin-multiselect id="ms_example2">
                                <option value="cheese" selected>Cheese</option>
                                <option value="tomatoes" selected>Tomatoes</option>
                                <option value="mozarella" selected>Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Link button</label>
                        <div class="col-md-6">
                            <select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "buttonClass": "btn btn-link" }' id="ms_example3">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">With icon</label>
                        <div class="col-md-6">
                            <div class="input-group btn-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <select class="form-control" multiple="multiple" data-plugin-multiselect id="ms_example4">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Select All Option</label>
                        <div class="col-md-6">
                            <select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "includeSelectAllOption": true }' id="ms_example5">
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="discrete">Discrete Mathematics</option>
                                    <option value="numerical">Numerical Analysis</option>
                                    <option value="probability">Probability Theory</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="automata">Automata Theory</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">With Search</label>
                        <div class="col-md-6">
                            <select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "enableCaseInsensitiveFiltering": true }' id="ms_example6">
                                <optgroup label="Mathematics">
                                    <option value="analysis">Analysis</option>
                                    <option value="algebra">Linear Algebra</option>
                                    <option value="discrete">Discrete Mathematics</option>
                                    <option value="numerical">Numerical Analysis</option>
                                    <option value="probability">Probability Theory</option>
                                </optgroup>
                                <optgroup label="Computer Science">
                                    <option value="programming">Introduction to Programming</option>
                                    <option value="automata">Automata Theory</option>
                                    <option value="complexity">Complexity Theory</option>
                                    <option value="software">Software Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Toggle All Button</label>
                        <div class="col-md-6">
                            <div class="btn-group">
                                <select class="form-control" multiple="multiple" data-plugin-multiselect data-multiselect-toggle-all="true" id="ms_example7">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                                <button id="ms_example7-toggle" class="btn btn-primary">Select
                                    All</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>