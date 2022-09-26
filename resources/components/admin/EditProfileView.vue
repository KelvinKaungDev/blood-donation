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
                        <legend class="text-center">Eidt User</legend>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity" v-for="detail in details" :key="detail.id">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>

                                    <input type="email" class="form-control" id="inputName" placeholder="Name" v-model="detail.name">
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Age</label>

                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email" v-model="detail.age">
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-12 col-form-label">Blood Type</label>

                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email" v-model="detail.blood_type">
                                </div>


                                <div class="form-group row" v-if="detail.approve == true">
                                    <label for="role" class="col-sm-2 col-form-label">Approve</label>

                                    <input type="text" class="form-control" id="role" placeholder="false" v-model="detail.approve">
                                </div>

                                <div class="form-group row" v-else>
                                    <label for="role" class="col-sm-2 col-form-label">Approve</label>

                                    <input type="text" class="form-control" id="role" placeholder="false" v-model="updateDetail.approve">
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" @click="update()" class="btn bg-dark text-white col-md-8">Update</button>
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

<script src="../../js/admin/edit_profile.js"></script>
