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
                        <legend class="text-center">Edit Hospital</legend>
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
                                    <label for="ph_number" class="col-sm-2 col-form-label">ID</label>

                                    <input type="text" class="form-control" id="ph_number" placeholder="Email">
                                </div>

                                <div class="form-group row">
                                    <label for="location" class="col-sm-2 col-form-label">Location</label>

                                    <input type="text" class="form-control" id="location" placeholder="Location">
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>

                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">True</option>
                                        <option value="2">False</option>
                                    </select>
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

<script src="../../js/admin/edit_hospital.js"></script>
