<x-layout>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advanced Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Advanced Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Select2 (Default Theme)</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">


            <!-- /.col -->

            <!-- /.row -->

            <h5>Custom Color Variants</h5>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label>Minimal (.select2-danger)</label>
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                            style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label>Multiple (.select2-purple)</label>
                        <div class="select2-purple">
                            <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                data-dropdown-css-class="select2-purple" style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.card-body -->





            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label class="input-group-text" for="inputGroupSelect02">Options</label>
            </div>

            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="button">Button</button>
                <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button class="btn btn-outline-secondary" type="button">Button</button>
            </div>
        </div>
    </div>
</x-layout>
