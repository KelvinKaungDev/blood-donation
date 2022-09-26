<template>
    <div>
        <UserSidebar />

        <div class="content-wrapper">
            <section class="content">
            <div class="container-fluid">
                <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Donation History</h3>

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
                            <th>User Name</th>
                            <th>User Age</th>
                            <th>Email</th>
                            <th>Blood Type</th>
                            <th>Date</th>
                            <th>State</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="detail in details" :key="detail.id">
                                <td>{{ detail.id }}</td>
                                <td>{{ detail.name }}</td>
                                <td>{{ detail.age }}</td>
                                <td>{{ detail.email }}</td>
                                <td>{{ detail.blood_type }}</td>
                                <td>{{ detail.created_at }}</td>
                                <td>{{ detail.approve ? detail.approve : 'Pending' }}</td>
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

<script src="../../js/user/history.js"></script>
