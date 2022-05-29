// fetch ('http://api.alquran.cloud/v1/surah')
// .then(data=>data.json())
// .then(data=>{
//     data.data.forEach((element,index) => {
//         console.log(element);
//         str = `<div class="accordion" id="accordionExample">
//         <div class="accordion-item">
//           <h2 class="accordion-header" id="headingOne">
//             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
//               ${element.englishName}
//             </button>
//           </h2>
//           <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
//             <div class="accordion-body">
//               <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
//             </div>
//           </div>
//         </div>
//       </div>`
//       document.getElementById("accardionId").innerHTML+=str;
//     });
// })

// function show_one_page(){
//     document.getElementById('onePage').classList.add("d-none");
//     document.getElementById('onePageDubl').classList.remove("d-none");
// }

let audio = document.querySelector('.quranPLayer');
let surahsContainer = document.querySelector('.surahs');
let ayah = document.querySelector('.ayah');
let next = document.querySelector('.next');
let play = document.querySelector('.play');
let prev = document.querySelector('.prev');

getSurahs()
function getSurahs() {
    fetch('https://api.quran.sutanlab.id/surah')
    .then(response=>response.json())
    .then(data=>{
        for (let sura in data.data) {
            surahsContainer.innerHTML += `
            <div class="d-flex justify-content-between">
                <p>${data.data[sura].name.long}</p>
                <p>${data.data[sura].name.transliteration.id}</p>
                <p>${data.data[sura].numberOfVerses} - Ayahs</p>
            </div>`;
        }
        let allSurahs = document.querySelectorAll('.surahs div'),
        ayahsAudio,
        ayahsText;
        allSurahs.forEach((element,index) => {
            element.addEventListener('click',()=>{
                fetch(`https://api.quran.sutanlab.id/surah/${index+1}`)
                .then(response => response.json())
                .then(data=>{
                    let verses = data.data.verses;
                    ayahsText = [];
                    ayahsAudio = [];
                    verses.forEach(e=>{
                        ayahsText.push(e.text.arab);
                        ayahsAudio.push(e.audio.primary);
                    })

                    ayahsIndex=0;
                    changeAyah(ayahsIndex);

                    audio.addEventListener("ended", ()=>{
                        ayahsIndex++;
                        if (ayahsIndex < ayahsAudio.length) {
                            changeAyah(ayahsIndex);
                            console.log(ayahsIndex);
                    
                        }else{
                            ayahsIndex = 0;
                            changeAyah(ayahsIndex)
                            audio.pause();
                            Swal.fire({
                                position: 'center-center',
                                icon: 'success',
                                title: 'Surah has been ended',
                                showConfirmButton: false,
                                timer: 1000
                              })
                            isPlaying = true;
                            togglePlay();                              
                        }
                    })
                    next.addEventListener('click', ()=>{
                        ayahsIndex<ayahsAudio.length -1 ? ayahsIndex++ : ayahsIndex = 0;
                        changeAyah(ayahsIndex);
                    })
                    prev.addEventListener('click', ()=>{
                        ayahsIndex==0 ? ayahsIndex = ayahsAudio.length-1 :
                        ayahsIndex--;
                        changeAyah(ayahsIndex);
                    })

                    let isPlaying = false;
                    function togglePlay() {
                        if (isPlaying) {
                            audio.pause();
                            play.innerHTML =`<i class="fas fa-play">`;
                            isPlaying=false;
                        }else{
                            audio.play();
                            play.innerHTML =`<i class="fas fa-pause">`;
                            isPlaying=true;
                        }
                    }
                    play.addEventListener('click', togglePlay)

                    function changeAyah(index){
                        audio.src = ayahsAudio[index];
                        ayah.innerHTML = ayahsText[index];
                        audio.play();
                    }
                    
                })
            })
        });
        
    })
}








fetch('http://api.alquran.cloud/v1/surah')
.then((data)=>data.json())
.then(data=>{
    data.data.forEach((e,i)=>{
        document.querySelector('.read').innerHTML +=`
        <div class="d-flex block justify-content-between align-items-center bg-danger my-2 border rounded-pill">
                <div class="d-flex align-items-center">
                    <span class="me-4 ms-2 px-3 py-2 surah_number">
                        ${e.number}
                    </span>
                    <div>
                        <h2 class="my-0">${e.englishName}</h2>
                        <p class="text-light py-0 my-1">${e.revelationType} - <span>${e.numberOfAyahs} VERSES</span></p>
                    </div>
                </div>
                <span class="pe-3">${e.name}</span>
        </div>`
    });
    let block_div = document.querySelectorAll('.block')
    block_div.forEach((element, index)=>{
        index++;
        element.addEventListener('click', ()=>{
            fetch(`http://api.alquran.cloud/v1/surah/${index}/en.asad`)
            .then(response => response.json())
            .then(data=>{
                document.getElementById('suraPage').classList.add('d-none');
                document.getElementById('readPage').classList.remove('d-none');
                console.log(data.data);
                data.data.ayahs.forEach(element => {
                    document.getElementById('words').innerHTML += `<p class="px-1 text-danger"><sup>${element.number}.</sup> ${element.text}  </p>`
                });
            })
        })
    })
})

