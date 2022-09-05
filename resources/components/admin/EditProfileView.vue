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
                        <legend class="text-center">User Profile</legend>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>

                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>

                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>

                                <div class="form-group row">
                                    <label for="role" class="col-sm-2 col-form-label">Approve</label>

                                    <input type="text" class="form-control" id="role" placeholder="false">
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn bg-dark text-white col-md-8">Update</button>
                                </div>
                            </form>
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
