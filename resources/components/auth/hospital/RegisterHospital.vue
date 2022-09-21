<template>
    <div class="row container-fluid mt-5">
        <div class="col-md-6">
            <img :src="registerImg" class="register-img">
        </div>

        <div class="col-md-5 m-5">
            <h2 class="mb-3">
                Register <span class="text-underline"> as Hospital </span>
            </h2>

            <div class="alert alert-danger" role="alert" v-show="errorStatus">
                This Email and Password do not match
            </div>

            <div>
                 <div class="mb-3 mt-5">
                    <label for="name" class="form-label">Hospital Name</label>

                    <input
                        required
                        id="name"
                        type="text"
                        class="form-control"
                        v-model="userData.name"
                    >
                </div>

                <div class="mb-3">
                    <label for="id" class="form-label">Hospital ID</label>

                    <input
                        required
                        id="id"
                        type="text"
                        class="form-control"
                        v-model="userData.hospital_id"
                    >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>

                    <input
                        required
                        id="email"
                        type="email"
                        class="form-control"
                        v-model="userData.email"
                    >
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>

                    <input
                        required
                        id="password"
                        type="password"
                        class="form-control"
                        v-model="userData.password"
                    >
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <button
                        type="submit"
                        @click="registerHospital()"
                        class="btn btn-outline-fg-primary w-75 p-3 hero-btn active"
                    >
                        Register
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="../../../js/auth/hospital/register.js"></script>

