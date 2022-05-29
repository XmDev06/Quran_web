<?php
include "header.php";
?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Poppins:wght@200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lateef&display=swap');

        .card-body {
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            transition: all 0.5s;
        }

        .card-body:hover {
            transform: translateY(-10px);
        }


        .col-md-4 .card-body {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.001);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }


        body {
            background-image: url("assets/images/resources/slide-4.jpg");
            background-attachment: fixed;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .icons i {
            color: #b5b3b3;
            border: 1px solid #b5b3b3;
            padding: 6px;
            margin-left: 4px;
            border-radius: 5px;
            cursor: pointer;
        }

        .activity-done {
            font-weight: 600;
        }

        .list-group li {
            margin-bottom: 12px;
        }


        .ayahs_list {
            list-style: none;
            padding: 10px;
            border: 1px solid #e3dada;
            margin-top: 12px;
            border-radius: 5px;
            background: #fff;
        }

        .arab-text{
            font-family: 'Lateef', cursive;
            font-size: 45px;
        }

        .profile-image img {
            margin-left: 3px;
        }

        .audio_hover {
            transition: 1.5s;
            transform: scale(1.05);
        }

        @media only screen and (max-width: 1030px) {
            .container {
                margin-top: 50px;
            }
        }
    </style>


    <section>
        <div class="container" id="surahs" style="margin-top: 150px;">
            <div class="row">
                <!--========bu yerga sura cardlari tushadi========-->
            </div>
        </div>
    </section>

    <section id="oyatlar" class="d-none">
        <div class="container" id="surahs" style="margin-top: 150px;">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6" id="suraTitle">

                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" id="cut" class="form-control" placeholder="Choose ayahs"
                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button" onclick="yodlash()"> Cut</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row audio_row mt-3 p-3">
                <!--========bu yerga oyatlar tushadi========-->
            </div>
        </div>
    </section>


<?php

include "footer.php";
