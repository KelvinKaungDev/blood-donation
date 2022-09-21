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
                        <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Blood Type</th>
                                <th scope="col">Volume</th>
                                <th scope="col">Date</th>
                                <th scope="col">State</th>
                                <th scope="col">Emergency</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="detail in details" :key="detail.id">
                                    <th scope="row">{{ detail.id }}</th>
                                    <td>{{ detail.blood_type }}</td>
                                    <td>{{ detail.volume }}</td>
                                    <td>{{ detail.created_at }}</td>
                                    <td>{{ detail.state ? detail.state : 'Pending' }}</td>
                                    <td>{{ detail.emergency }}</td>
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
