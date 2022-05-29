var alpha = [ //kirill-lotin uchun lotin alfaviti
    'A', 'B', 'V', 'G', 'D', 'E', 'Yo', 'J', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P',
    'R', 'S', 'T', 'U', 'F', 'X', 'Ts', 'Ch', 'Sh', 'Sh', '\'', 'I', '', 'E', 'Yu', 'Ya', 'G\'', 'Q', 'H', 'O\'',
    'a', 'b', 'v', 'g', 'd', 'e', 'yo', 'j', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p',
    'r', 's', 't', 'u', 'f', 'x', 'ts', 'ch', 'sh', 'sh', '\'', 'i', '', 'e', 'yu', 'ya', 'g\'', 'q', 'h', 'o\'',
];

var alphaLatin = [ //lotin-kirill uchun lotin alfaviti
    'A', 'B', 'V', 'G', 'D', 'E', '‡', 'J', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P',
    'R', 'S', 'T', 'U', 'F', 'X', '‡', '‡', '‡', '‡', '‡', '‡', '‡', '‡', '‡', '‡', '‡', 'Q', 'H', '‡',
    'a', 'b', 'v', 'g', 'd', 'e', '‡', 'j', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p',
    'r', 's', 't', 'u', 'f', 'x', '‡', '‡', '‡', '‡', '\'', '‡', '‡', '‡', '‡', '‡', '‡', 'q', 'h', '‡',
];
var alphaRus = [
    'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П',
    'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'Ғ', 'Қ', 'Ҳ', 'Ў',
    'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п',
    'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'ғ', 'қ', 'ҳ', 'ў',
];


/*=================kirillga o'girish=================== */

function kirillga(originalMessage) {
    /*original textni olyapti */
    var CyrillicTranslated = "";         //kirill ga o'girilgan xabar
    /*avval bu harf birikmalar o'zgartirilsin : */
    originalMessage = originalMessage.replace(/`/g, "\'");
    originalMessage = originalMessage.replace(/ʹ/g, "\'");
    originalMessage = originalMessage.replace(/ʻ/g, "\'");
    originalMessage = originalMessage.replace(/ʼ/g, "\'");
    originalMessage = originalMessage.replace(/ʽ/g, "\'");
    originalMessage = originalMessage.replace(/ˊ/g, "\'");
    originalMessage = originalMessage.replace(/ˋ/g, "\'");
    originalMessage = originalMessage.replace(/‘/g, "\'");
    //bu O' ning shapkasi. Har xil variantda tarjima qiladi :)

    originalMessage = originalMessage.replace(/Ye/g, "Е");
    originalMessage = originalMessage.replace(/YE/g, "Е");
    originalMessage = originalMessage.replace(/Yo/g, "Ё");
    originalMessage = originalMessage.replace(/YO/g, "Ё");
    originalMessage = originalMessage.replace(/Ch/g, "Ч");
    originalMessage = originalMessage.replace(/CH/g, "Ч");
    originalMessage = originalMessage.replace(/Sh/g, "Ш");
    originalMessage = originalMessage.replace(/SH/g, "Ш");
    originalMessage = originalMessage.replace(/Yu/g, "Ю");
    originalMessage = originalMessage.replace(/YU/g, "Ю");
    originalMessage = originalMessage.replace(/Ya/g, "Я");
    originalMessage = originalMessage.replace(/YA/g, "Я");
    originalMessage = originalMessage.replace(/Ts/g, "Ц");
    originalMessage = originalMessage.replace(/TS/g, "Ц");

    originalMessage = originalMessage.replace(/G\'/g, "Ғ");
    originalMessage = originalMessage.replace(/O\'/g, "Ў");

    originalMessage = originalMessage.replace(/ye/g, "е");
    originalMessage = originalMessage.replace(/yo/g, "ё");
    originalMessage = originalMessage.replace(/ch/g, "ч");
    originalMessage = originalMessage.replace(/sh/g, "ш");
    originalMessage = originalMessage.replace(/yu/g, "ю");
    originalMessage = originalMessage.replace(/ya/g, "я");
    originalMessage = originalMessage.replace(/ts/g, "ц");
    originalMessage = originalMessage.replace(/g\'/g, "ғ");
    originalMessage = originalMessage.replace(/o\'/g, "ў");

    function Eliser(currentWord) {//bu e harfini nastroyka qiladi ;)

        if (currentWord[0] === 'E') {
            // currentWord.charAt(0) = 'Э'; or   currentWord[0] = 'э'; //this is read only ! u cant modify it :)
            var E = currentWord.replace(/E/i, "Э");
            //i means case insensitive. regular expressions are written without quotes. replace() method replaces only the first match
            return E;
        } else if (currentWord[0] === 'e') {
            var e = currentWord.replace(/e/i, "э");
            return e;
        } else {
            return currentWord;//shu bug ni deb aaancha vatim ketdi! Nega boshqa so'zlarni qaytarmaydi deyman-a yana :)
        }
    }

    let letterE = originalMessage.split(' ').map(Eliser).join(' ');
    originalMessage = letterE;

    /*kirillga o'girish algoritmi :*/
    function encrypt(string) {
        /*asosiy kirill ga o'girish algoritmi */
        for (var i = 0; i < string.length; i++) {
            for (var j = 0; j < alphaLatin.length; j++) {


                if (string[i] == alphaLatin[j]) {
                    CyrillicTranslated += alphaRus[j];
                    break;
                }
                /*simvollarni va shuningdek o'zi kirill alifbosidagi harflarni ham o'zgartirmaydi: */
                else if ((string.charCodeAt(i) >= 9 && string.charCodeAt(i) <= 11) || (string.charCodeAt(i) > 32 && string.charCodeAt(i) < 39) || (string.charCodeAt(i) > 39 && string.charCodeAt(i) <= 64) || (string.charCodeAt(i) >= 91 && string.charCodeAt(i) < 96) || (string.charCodeAt(i) >= 123 && string.charCodeAt(i) <= 1300)) {
                    CyrillicTranslated += string[i];
                    break;
                    // alert("son simvol topdi");
                } else if (string.charCodeAt(i) === 32) { /* probelni necha bo'lsa shuncha qo'shadi :)*/
                    CyrillicTranslated += " ";
                    break;
                }
            }
        }
        // console.log(CyrillicTranslated)
    }

    encrypt(originalMessage);//keyin tarjima uchun yubor :)
    /*natijani return qiladi */
    return CyrillicTranslated;

};

/*====================lotinga o'girish==============================*/

function lotinga(CyrillicMessage) {
    var LatinTranslated = "";           //lotin ga o'girilgan xabar

    function Eliser2(currentWord) {//bu e harfini nastroyka qiladi ;)

        if (currentWord[0] === 'Ц') {//bu harf xat boshida kelsa, "S" yoziladi
            currentWord = currentWord.replace(/Ц/, "S");
        } else if (currentWord[0] === 'ц') {
            currentWord = currentWord.replace(/ц/, "s");
        }
        for (let r = 0; r < currentWord.length; r++) {//Agar Shu harflar capital letter bolib kelsa, So'z qandayligiga qarab nastroyka qiladi
            if (currentWord[r] === 'Ё') {
                for (let z = r + 1; z < currentWord.length; z++) {
                    if (currentWord.charCodeAt(z) >= 1040 && currentWord.charCodeAt(z) <= 1071) {
                        currentWord = currentWord.replace(/Ё/i, "YO");
                    }
                }
            } else if (currentWord[r] === 'Ц') {// bundan oldingi harf undosh bolsa(unli bolmasa), "S" yoziladi
                if (currentWord.charCodeAt(r - 1) !== 1040 && currentWord.charCodeAt(r - 1) !== 1045 && currentWord.charCodeAt(r - 1) !== 1048 && currentWord.charCodeAt(r - 1) !== 1054 && currentWord.charCodeAt(r - 1) !== 1059 && currentWord.charCodeAt(r - 1) !== 1069 && currentWord.charCodeAt(r - 1) !== 1070 && currentWord.charCodeAt(r - 1) !== 1071 && currentWord.charCodeAt(r - 1) !== 1072 && currentWord.charCodeAt(r - 1) !== 1077 && currentWord.charCodeAt(r - 1) !== 1080 && currentWord.charCodeAt(r - 1) !== 1086 && currentWord.charCodeAt(r - 1) !== 1091 && currentWord.charCodeAt(r - 1) !== 1101 && currentWord.charCodeAt(r - 1) !== 1102 && currentWord.charCodeAt(r - 1) !== 1103) {
                    currentWord = currentWord.replace(/Ц/i, "S");
                }
                for (let z = r + 1; z < currentWord.length; z++) {
                    if (currentWord.charCodeAt(z) >= 1040 && currentWord.charCodeAt(z) <= 1071) {
                        currentWord = currentWord.replace(/Ц/i, "TS");
                    }
                }
            } else if (currentWord[r] === 'ц') {// bundan oldingi harf undosh bolsa(unli bolmasa), "s" yoziladi
                if (currentWord.charCodeAt(r - 1) !== 1040 && currentWord.charCodeAt(r - 1) !== 1045 && currentWord.charCodeAt(r - 1) !== 1048 && currentWord.charCodeAt(r - 1) !== 1054 && currentWord.charCodeAt(r - 1) !== 1059 && currentWord.charCodeAt(r - 1) !== 1069 && currentWord.charCodeAt(r - 1) !== 1070 && currentWord.charCodeAt(r - 1) !== 1071 && currentWord.charCodeAt(r - 1) !== 1072 && currentWord.charCodeAt(r - 1) !== 1077 && currentWord.charCodeAt(r - 1) !== 1080 && currentWord.charCodeAt(r - 1) !== 1086 && currentWord.charCodeAt(r - 1) !== 1091 && currentWord.charCodeAt(r - 1) !== 1101 && currentWord.charCodeAt(r - 1) !== 1102 && currentWord.charCodeAt(r - 1) !== 1103) {
                    currentWord = currentWord.replace(/ц/i, "s");
                }
            } else if (currentWord[r] === 'Ч') {
                for (let z = r + 1; z < currentWord.length; z++) {
                    if (currentWord.charCodeAt(z) >= 1040 && currentWord.charCodeAt(z) <= 1071) {
                        currentWord = currentWord.replace(/Ч/i, "CH");
                    }
                }
            } else if (currentWord[r] === 'Ш') {
                for (let z = r + 1; z < currentWord.length; z++) {
                    if (currentWord.charCodeAt(z) >= 1040 && currentWord.charCodeAt(z) <= 1071) {
                        currentWord = currentWord.replace(/Ш/i, "SH");
                    }
                }
            } else if (currentWord[r] === 'Ю') {
                for (let z = r + 1; z < currentWord.length; z++) {
                    if (currentWord.charCodeAt(z) >= 1040 && currentWord.charCodeAt(z) <= 1071) {
                        currentWord = currentWord.replace(/Ю/i, "YU");
                    }
                }
            } else if (currentWord[r] === 'Я') {
                for (let z = r + 1; z < currentWord.length; z++) {
                    if (currentWord.charCodeAt(z) >= 1040 && currentWord.charCodeAt(z) <= 1071) {
                        currentWord = currentWord.replace(/Я/i, "YA");
                    }
                }
            }
        }

        if (currentWord[0] === 'Е') { //agar E bosh harfda Upper case bo'lib kelsa :
            for (let z = 1; z < currentWord.length; z++) {
                if (currentWord.charCodeAt(z) >= 1040 && currentWord.charCodeAt(z) <= 1071) {
                    var E = currentWord.replace(/Е/i, "YE"); //agar so'z ikkinchi harfidan boshlab (z=1) upper case da bo'lsa, "YE" deb o'zgartir !
                    return E;
                } else {
                    var E = currentWord.replace(/Е/i, "Ye"); //aks holda "Ye" deb o'zgartir !
                    return E;
                }
            }
        } else if (currentWord[0] === 'е') {//agar e bosh harfda lower case bolib kelsa:
            var e = currentWord.replace(/е/i, "ye");
            return e;
        } else {
            return currentWord;
        }
    }

    let letterE2 = CyrillicMessage.split(" ").map(Eliser2).join(' ');
    CyrillicMessage = letterE2;

    /*lotinga o'girish algoritmi :*/
    function decrypt(string) {

        for (var i = 0; i < string.length; i++) {
            for (var j = 0; j < alphaRus.length; j++) {
                /* lotinchaga o'tkazadi*/
                if (string[i] == alphaRus[j]) {
                    LatinTranslated += alpha[j];
                }
                /*simvollar va lotin alfavitidagi so'zlar o'girilmaydi */
                else if ((string.charCodeAt(i) >= 9 && string.charCodeAt(i) <= 11) || (string.charCodeAt(i) > 32 && string.charCodeAt(i) < 1000) || (string.charCodeAt(i) > 1300)) {
                    LatinTranslated += string[i];
                    break;
                }
                /* probelni necha bo'lsa shuncha qo'shadi :)*/
                else if (string.charCodeAt(i) === 32) {
                    LatinTranslated += " ";
                    break;
                }
            }
        }
    }

    decrypt(CyrillicMessage);
    /*natijani return qiladi */

    return LatinTranslated;
};

// function start() {
//     localStorage.setItem('leng', 'uz');
//     localStorage.setItem('qori', 'uz.sodik');
//     localStorage.setItem('reactor', 'ar.alafasy');
// }
//
// start();


let qori = localStorage.getItem('qori');

function text(text) {
    let leng = localStorage.getItem('leng');
    if (leng === 'kr') {
        if (text === 'Meccan') {
            return 'Меккан'
        } else {
            return kirillga(text)
        }
    }
    if (leng === 'uz') {
        return lotinga(text)
    }
    if (leng === 'en') {
        if (text === ' - sura') {
            return ' surah'
        }
        if (text === ' ta oyat') {
            return ' verses'
        }
        if (text === 'Nozil qilingan yer: ') {
            return 'Revelation place: '
        }
        return lotinga(text)
    }
    if (leng === 'ru') {
        if (text === 'Meccan') {
            return 'Меккан'
        }
        if (text === ' - sura') {
            return ' - сура'
        }
        if (text === ' ta oyat') {
            return ' аят'
        }
        if (text === 'Nozil qilingan yer: ') {
            return 'Место откровения: '
        }
        return kirillga(text)

    }
}


function myFunction() {
    var x = document.getElementById("til").value;
}


async function get(link) {
    let data = await fetch(link);
    let natija = await data.json();
    return natija;
}

// Asosiy page yaratildi
async function suralar() {
    let data = await get("http://api.alquran.cloud/v1/surah");
    data.data.forEach((e) => {
        let row = document.querySelector("#surahs .row");
        row.innerHTML += ` <div onclick="oyatlar('${e.number}','${qori}')" class="col-md-4 searchList text-center mb-3">
                                <div class=" p-1">
                                    <div class="card-body">
                                        <p class="my-0 py-0 text-white">${e.number}${text(' - sura')}</p>
                                        <p class="my-0 py-0 text-white">${e.numberOfAyahs}${text(' ta oyat')}</p>
                                        <h5 class="my-0 py-0 fw-900 text-white">${text(e.englishName)}</h5>
                                        <p class="mt-2 mb-1 text-warning">${text('Nozil qilingan yer: ')}${text(e.revelationType)}</p>
                                    </div>
                                </div>
                            </div>`;
    });
}

suralar();


// Oyatlar page yaratildi

let reactor = localStorage.getItem('reactor');

async function oyatlar(id, qori) {
    document.querySelector("#surahs").classList.add("d-none");
    document.querySelector("#oyatlar").classList.remove("d-none");

    let oyatlarRows = document.querySelector(".audio_row");
    oyatlarRows.innerHTML = "";
    let uz = await get(`https://api.alquran.cloud/v1/surah/${id}/${qori}`);
    let arab = await get(`https://api.alquran.cloud/v1/surah/${id}/${reactor}`);
    let arab_massiv = arab.data.ayahs;
    document.querySelector('#suraTitle').innerHTML = `<h3 class="text-warning text-center">${text(uz.data.englishName)}</h3>`

    uz.data.ayahs.forEach((e, i) => {
        oyatlarRows.innerHTML += `
                                <div class="ayahs_list searchList col-md-12 m-2 p-4">
                                    <p class="translation">${i + 1}) ${text(e.text)}</p>
                                    <h6 class="surah text-right arab-text">${arab_massiv[i].text}</h6>
                                    <audio id="audio" controls style="width:300px;">
                                        <source src="${arab_massiv[i].audio}" type="audio/mpeg">
                                    </audio>
                                </div>`;
    });


    document.querySelectorAll(".ayahs_list audio").forEach((e, i) => {
        e.onplay = () => {
            document.querySelectorAll(".ayahs_list")[i].classList.add('audio_hover');
            document.querySelectorAll(".ayahs_list audio").forEach((element, index) => {
                if (index != i) {
                    element.pause();
                    document.querySelectorAll(".ayahs_list")[index].classList.remove('audio_hover');
                }
            })
        }

        e.onended = () => {
            document.querySelectorAll(".ayahs_list")[i].classList.remove('audio_hover')
            document.querySelectorAll(".ayahs_list audio")[i + 1].currentTime = 0;
            document.querySelectorAll(".ayahs_list audio")[i + 1].play();
            document.querySelectorAll(".ayahs_list")[i + 1].classList.add('audio_hover')
        };

        e.onpause = () => {
            document.querySelectorAll(".ayahs_list")[i].classList.remove('audio_hover')
        }
    });
}


function yodlash() {
    let input = document.getElementById("cut").value.split("-");
    let begin = input[0];
    let end = input[1];
    let lists = document.querySelectorAll(".ayahs_list");

    lists.forEach((e, i) => {
        e.classList.add('d-none');

        e.querySelector('audio').pause();

    })

    for (let index = parseInt(begin) - 1; index < parseInt(end); index++) {
        lists[index].classList.remove('d-none');
    }

    document.querySelectorAll(".ayahs_list audio")[begin - 1].play();
    document.querySelectorAll(".ayahs_list audio")[end - 1].onended = () => {
        document.querySelectorAll(".ayahs_list audio")[begin - 1].play();
    };
}


function search(needle, searchList) {
    let input = needle.value.toLowerCase();
    document.querySelectorAll(searchList).forEach(e => {
        let element = e.innerText.toLowerCase();
        if (!element.includes(input)) {
            e.classList.add('d-none')
        } else {
            e.classList.remove('d-none')
        }
    })
}















  