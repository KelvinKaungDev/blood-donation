<template>
    <div>
        <HospitalSidebar />

        <div class="content-wrapper">
            <section class="content">
            <div class="container-fluid">
                <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Request History</h3>

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
                            <th>Date</th>
                            <th>Blood Type</th>
                            <th>Volume</th>
                            <th>State</th>
                            <th>Emergency</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>5/09/2022</td>
                                <td>B</td>
                                <td>5</td>
                                <td>Rejected</td>
                                <td>N/A</td>
                            </tr>

                            <tr>
                                <td>5/09/2022</td>
                                <td>B</td>
                                <td>5</td>
                                <td>Approved</td>
                                <td>True</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </section>
        </div>
    </div>
</template>

<script src="../../js/hospital/history.js"></script>
