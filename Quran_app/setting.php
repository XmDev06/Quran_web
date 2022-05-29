<?php

include 'header.php';
?>
    <style>
        body {
            background-image: url("assets/images/resources/slide-4.jpg");
            background-attachment: fixed;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-6">
                <label for="leng" class="form-label text-white">Kerakli tilni tanlang</label><br>
                <select id="leng" class="form-select">
                    <option value="uz" selected>Tilni tanlang</option>
                    <option value="uz">Uzbek</option>
                    <option value="kr">Krill</option>
                    <option value="ru">Rus</option>
                    <option value="en">English</option>
                </select>
            </div>
            <div class="col-md-6 text-right">
                <label for="qori" class="form-label text-white">Qorini tanlang</label><br>
                <select id="qori" class="form-select">
                    <option value="ar.alafasy" selected>Qorini tanlang</option>
                    <?php
                    $data = json_decode(file_get_contents('https://api.alquran.cloud/v1/edition/format/audio'));

                    foreach ($data->data as $datum) {
                        echo '<option value="' . $datum->identifier . '">' . $datum->englishName . '</option>';
                    }
                    ?>

                </select>
            </div>
        </div>
    </div>
    <script>
        let leng = document.querySelector('#leng');
        leng.onchange = () => {
            if (leng.value === 'ru') {
                localStorage.setItem('qori', 'ru.kuliev');
            }
            if (leng.value === 'kr') {
                localStorage.setItem('qori', 'uz.sodik');
            }
            if (leng.value === 'uz') {
                localStorage.setItem('qori', 'uz.sodik');
            }
            if (leng.value === 'en') {
                localStorage.setItem('qori', 'en.asad');
            }
            localStorage.setItem('leng', leng.value);
        }

        let qorilar = document.querySelector('#qori');
        qorilar.onchange = () => {

            localStorage.setItem('reactor', qorilar.value);

        }

    </script>

<?php
include 'footer.php';

?>