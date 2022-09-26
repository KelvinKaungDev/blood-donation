<template>

    <div class="row container-fluid mt-5">
        <div class="col-md-6 mt-5">
            <img :src="donationImg" class="login-img">
        </div>

        <div class="col-md-5 mt-5 m-5">

            <h2 class="mb-5">
                Steps <span class="text-underline"> To Donate Your Blood</span>
            </h2>

            <div class="alert alert-danger" role="alert" v-show="errorStatus">
                Your age does not match
            </div>

            <div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>

                    <input
                        required
                        id="name"
                        type="text"
                        placeholder="name"
                        class="form-control"
                        v-model="userData.name"
                    >
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Age</label>

                    <input
                        required
                        id="name"
                        type="text"
                        placeholder="age"
                        class="form-control"
                        v-model="userData.age"
                    >
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Email</label>

                    <input
                        required
                        id="name"
                        type="email"
                        placeholder="Email"
                        class="form-control"
                        v-model="userData.email"
                    >
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Blood Type</label>

                    <input
                        required
                        id="name"
                        type="text"
                        placeholder="Blood Type"
                        class="form-control"
                        v-model="userData.blood_type"
                    >
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <button
                        type="submit"
                        @click="registerToDonate()"
                        class="btn btn-outline-fg-primary w-75 p-3 hero-btn active"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

</template>

<script src="../js/donation.js"></script>

