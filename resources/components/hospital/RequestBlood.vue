<template>
    <div>
        <HospitalSidebar />

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row mt-4">
                        <div class="col-8 offset-3 mt-5">
                            <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                <legend class="text-center">Blood Request</legend>
                                </div>

                                <div class="alert alert-danger" role="alert" v-show="errorStatus">
                                    This Hospital ID do not match
                                </div>

                                <div class="alert alert-success" role="alert" v-show="successStatus">
                                    Request Successfully
                                </div>
                                <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-12 col-form-label">Blood Type</label>

                                            <input type="text" class="form-control" id="inputName" placeholder="Blood Type" v-model="userData.blood_type">
                                        </div>

                                        <div class="form-group row">
                                            <label for="status" class="col-sm-12 col-form-label">Hospital ID</label>

                                            <input type="text" class="form-control" id="volume" placeholder="Hospital ID" v-model="userData.hospital_id">
                                        </div>

                                        <div class="form-group row">
                                            <label for="volume" class="col-sm-2 col-form-label">Volume</label>

                                            <input type="text" class="form-control" id="volume" placeholder="Volume" v-model="userData.volume">
                                        </div>

                                        <div class="form-group row">
                                            <label for="status" class="col-sm-12 col-form-label">Emergency</label>

                                            <input type="text" class="form-control" id="volume" placeholder="Volume" v-model="userData.emergency">
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" @click="submit()" class="btn bg-dark text-white col-md-8">
                                                Submit
                                            </button>
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

<script src="../../js/hospital/request.js"></script>
