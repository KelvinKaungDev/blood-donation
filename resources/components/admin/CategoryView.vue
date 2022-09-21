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
                            <button class="btn btn-sm btn-outline-dark">Add Hospital</button>
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
                            <th>Hospital ID</th>
                            <th>Email</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="detail in details" :key="detail.id">
                                <td>{{ detail.id }}</td>
                                <td>{{ detail.name }}</td>
                                <td>{{ detail.hospital_id }}</td>
                                <td>{{ detail.email }}</td>
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

<script src="../../js/admin/category.js"></script>

