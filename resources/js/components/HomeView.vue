<template>
    <div>
        <div class="row container-fluid mt-5 p-5">
            <div class="col-md-5 mt-5 m-5">
                <div class="container-fluid py-5">
                    <h1 class="display-6 fw-bold text-danger">
                        Steps To <span class="text-underline"> Donate Your Blood </span>
                    </h1>

                    <div class="col-md-12 fs-5 mt-5 mb-5">
                        <p class="align-content-center">
                            Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.
                        </p>
                    </div>
                    <button class="btn btn-lg w-75 btn-outline-fg-primary hero-btn" type="button">Register</button>
                </div>
            </div>

            <div class="col-md-6">
                <img :src="homeImg" class="home-img">
            </div>
        </div>
    </div>
</template>

<script src="../home.js"></script>
