<template>
    <div>
        <Sidebar />

        <div class="content-wrapper">
            <section class="content">
            <div class="container-fluid">
                <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                        <button class="btn btn-sm btn-outline-dark">Add Category</button>
                        </h3>

                        <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <font-awesome-icon icon="fa-solid fa-magnifying-glass" />
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap text-center">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Hospital Name</th>
                            <th>Ph Number</th>
                            <th>Location</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Vegatable</td>
                            <td>09773458236</td>
                            <td>Bangkok</td>
                            <td>
                                <button class="btn btn-sm bg-dark text-white mr-2">
                                    <font-awesome-icon icon="fa-solid fa-pen-to-square" />
                                </button>

                                <button class="btn btn-sm bg-danger text-white">
                                    <font-awesome-icon icon="fa-solid fa-trash" />
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Seafood</td>
                            <td>09773458236</td>
                            <td>Bangkok</td>
                            <td>
                                <button class="btn btn-sm bg-dark text-white mr-2">
                                    <font-awesome-icon icon="fa-solid fa-pen-to-square" />
                                </button>

                                <button class="btn btn-sm bg-danger text-white">
                                    <font-awesome-icon icon="fa-solid fa-trash" />
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>Thailand</td>
                            <td>09773458236</td>
                            <td>Bangkok</td>
                            <td>
                                <button class="btn btn-sm bg-dark text-white mr-2">
                                    <font-awesome-icon icon="fa-solid fa-pen-to-square" />
                                </button>

                                <button class="btn btn-sm bg-danger text-white">
                                    <font-awesome-icon icon="fa-solid fa-trash" />
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>USA</td>
                            <td>09773458236</td>
                            <td>Bangkok</td>
                            <td>
                                <button class="btn btn-sm bg-dark text-white mr-2">
                                    <font-awesome-icon icon="fa-solid fa-pen-to-square" />
                                </button>

                                <button class="btn btn-sm bg-danger text-white">
                                    <font-awesome-icon icon="fa-solid fa-trash" />
                                </button>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                </div>

            </div><!-- /.container-fluid -->
            </section>
        </div>
    </div>
</template>

<script src="../../js/admin/admin.js"></script>
