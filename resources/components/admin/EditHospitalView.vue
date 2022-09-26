<template>
    <div>
        <Sidebar />

        <div class="content-wrapper">
            <section class="content">
            <div class="container-fluid">
                <div class="row mt-4">
                <div class="col-8 offset-3 mt-5">
                    <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                        <legend class="text-center">Edit BloodRequest</legend>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity" v-for="detail in details" :key="detail.id">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Volume</label>

                                    <input type="text" class="form-control" id="inputName" placeholder="volume" v-model="detail.volume">
                                </div>

                                <div class="form-group row">
                                    <label for="ph_number" class="col-sm-12 col-form-label">Hospital ID</label>

                                    <input type="text" class="form-control" id="ph_number" placeholder="id" v-model="detail.hospital_id">
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Approve</label>

                                    <input type="text" class="form-control" id="location" placeholder="status" v-model="updateDetail.state">
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" @click="update(detail.id)" class="btn bg-dark text-white col-md-8">Update</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </div>
    </div>
</template>

<script src="../../js/admin/edit_hospital.js"></script>
