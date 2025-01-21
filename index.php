<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/tailwind-config.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
    .__hideScroller::-webkit-scrollbar {
      display: none; /* Masque la scrollbar pour les navigateurs basés sur WebKit */
    }
    .__hideScroller {
      -ms-overflow-style: none; /* Masque la scrollbar pour Internet Explorer */
      scrollbar-width: none;    /* Masque la scrollbar pour Firefox */
    }
  </style>
</head>
<body>
    <!--Start header-->
    <?php include('./globals/header.php'); 
    $jsonData = file_get_contents('./json/images.json');
    $images = json_decode($jsonData, true);
    ?>

 <!--End header-->
 <!--Start section Bissmillah-->
   <section>
   <div 
   class="pt-2.5 sm:pt-5 md:pb-10 bg-cover bg-no-repeat bg-bottom md:bg-none" 
   style="background-image: url('./assets/images/svg/Mo WAve home gris.svg');">
 <div class="mb-5 sm:mb-[30px]">
    <h1 class="text-center text-transparent bg-clip-text bg-gradient-to-r from-redLi to-redA font-sans font-bold text-lg sm:text-[25px] sm:mb-[5px]" >بِسْمِ اللَّـهِ الرَّحْمَـٰنِ الرَّحِيمِ</h1>
    <h3 class="text-center font-ubuntuR text-transparent bg-clip-text bg-gradient-to-r from-redLi to-redA text-[10px] sm:text-[15px]">In the name of Allah, Most Gracious, Most Merciful</h3>
 </div>
 <!--<h4 class="text-center md:text-[20px] leading-[18px] sm:leading-[22px] text-blueBlack/30 font-ubuntu">
    Welcome to MyOumma!<br>
    Where Muslims publish their contents ...
 </h4>-->
 
  </div>

  <div class="lg:flex items-center relative lg:w-[700px] xl:w-[800px] lg:mx-auto">
  <div class="w-full lg:w-8/12 lg:mx-auto ">
    <div class="relative w-full sm:w-[400px] md:w-[450px]  sm:mx-auto lg:mx-0 px-5">
      
      <div class="flex justify-end">
       
        <!--<img class="hidden sm:flex h-[520px]  sm:w-[50%]  sm:h-[700px] xl:w-[248px]  justify-end" src="~/assets/webp/Mo-challenge-Doua-screen.webp" alt="">-->
        <!--<img class="flex h-[520px]  w-[40%] sm:mr-20 sm:h-[700px] sm:w-[50%] xl:w-[248px] mt-2.5  justify-end" src="~/assets/webp/MOU-challenge-INVC-Phone-3D.webp" alt="">-->
        <img class="flex  h-[244px] mt-[30px] w-[244px]" src="./assets/images/png/Mo logo chall MyMas 01.png" alt="">
        
    </div>
    <div class="flex justify-end">
        <p class="font-ubuntu font-bold w-[185px] mr-5 text-center text-sm leading-[16px] text-grayG ">Publish the best video presenting your mosque and win up to £ 10K*!</p>
    </div>
      <div class="absolute top-2.5">
          <div class="">
        <h2 class="uppercase font-arialBlack text-[28px] leading-[30px] text-darkLi mb-5 w-[60%]">FOR RAMADAN BIG VIDEO contest</h2>
        <div class="w-[40%] text-center">
            <img class="my-5 mx-auto" src="./assets/images/png/Mo logo chall PLAY 02.png" alt="">
          </div>
        <div class="flex gap-[10px] items-center">
          <p class="font-ubuntu font-bold text-[15px] leading-4 text-end text-gold w-10">Win up to</p>
          <h1 class="text-[28px] text-darkLi font-ubuntu font-bold">£ 10K</h1>
        </div>
        <p class=" font-ubuntu font-bold  text-darkLi text-[10px] leading-3">for your masjid + 10% for you*</p>
      </div>
    
        </div>
        <div class="flex justify-center  my-10 lg:hidden">
    <button 
            class=" uppercase cursor-pointer flex flex-col items-center text-darkLightblue border-2 px-2.5 py-2.5 uppercase border-darkLightblue rounded-full  w-[300px] text-center">
            <span class="uppercase font-ubuntu font-bold">Bismillah</span>
            <span class="lowercase text-sm">Become Sponsor</span>
    </button>
  </div>
  
    </div>
    </div>

<!--End section Bissmillah-->
<!--Start section masjid-->
<section class="w-full sm:flex sm:w-[650px] sm:mx-auto lg:hidden sm:gap-5 md:order-3 justify-center sm:items-center px-5">
    <div class="my-2.5 sm:w-1/2">
      <video class="w-full" controls poster="./assets/images/png/Vignette Jap Masjd vid.jpg">
      <source src="./assets/video/Japan mosque.mp4" type="video/mp4">
      Your browser does not support the video tag.
  </video>
    </div>
    <div class="sm:w-1/2">
    <p class="text-lg font-ubuntu text-grayLM text-center"> <span class="font-ubuntu font-bold ">Welcome to the International « Showcase Your Mosque » Contest,</span> a global initiative to highlight the architecture, culture, and unique stories of mosques while celebrating the spirituality <span class="font-ubuntu font-bold "> of Ramadan. </span></p>
</div>
  </section>

  <div class="w-[300px] mx-auto lg:hidden">
  <button
    class="w-full py-2 rounded-lg bg-darkLightblue my-10"
    onclick="toggleModal()"
  >
    <div class="text-white font-ubuntu font-bold uppercase">Bismillah</div>
    <div class="text-xs text-white font-ubuntu">Make donation</div>
  </button>
</div>
  <!--modal-->
  <div  id="modal" class=" absolute hidden top-10 left-5 flex items-center w-full ">
  <div  class=" z-50 bg-grayLightest  rounded-lg shadow-lg w-[90%] max-w-lg sm:mx-auto">
  <div class="p-5 relative">
  <img onclick="toggleModal()" class="absolute right-[5px] top-[5px]" src="./assets/images/svg/close.svg" alt="">
    <img class="mx-auto mb-2.5 h-[80px]" src="./assets/images/png/Logo mini MyMasjisd.png" alt="" >
    <p class="text-blueLighter font-ubunru font-bold text-lg text-center mb-[5px]">
        Support Mosques Globally and Help Them Shine!
    </p>
    <p class="text-blueLighter text-center font-ubunru mb-[5px]">
    Your support helps preserve and celebrate our cultural and spiritual heritage.
    </p>
    </div>
    
   <div class="bg-white py-5">
     <div class="text-center text-lg leading-4 text-darkLi font-ubuntu font-bold">Contribution Options :</div>
     <div class="text-center text-darkLi font-ubuntu mb-2.5">Bank Transfer</div>
     <div class="text-center text-lg leading-4 text-darkLi font-ubuntu font-bold">Compagni Name: </div>
     <div class="text-center text-darkLi font-ubuntu mb-2.5">Yathiqu LTD</div>
     <div class="text-center text-lg leading-4 text-darkLi font-ubuntu font-bold">Reference:</div>
     <div class="text-center text-darkLi  font-ubuntu mb-2.5">“MyMasjid Donation – Your Name”</div>
     <div class="text-center text-lg leading-4 text-darkLi font-ubuntu font-bold">in GBP - £:</div>
     <div class="text-center text-darkLi font-ubuntu">Account No: 29660232</div>
     <div class="text-center text-darkLi leading-[14px] font-ubuntu mb-2.5">Sort Code: 232221</div>
     <div class="text-center text-lg leading-4 text-darkLi font-ubuntu font-bold">in Euro - €:</div>
     <div class="text-center text-darkLi  font-ubuntu">IBAN: IE33CPAY99119949147185</div>
     <div class="text-center text-darkLi leading-[14px] font-ubuntu mb-2.5">BIC: CPAYIE2D</div>
     <div class="text-center text-lg leading-4 text-darkLi font-ubuntu font-bold">Bank Address: </div>
     <div class="text-center text-darkLi  font-ubuntu">Fire Financial Services Limited</div>
     <div class="text-center text-darkLi leading-[14px] font-ubuntu ">Custom HouseQuay, Dublin 1, D01 Y6H7, Ireland</div>
   </div>
    <div class="px-5 py-5">
      <p class="text-grayLM font-ubuntu text-center mb-5">After making your contribution, kindly email your payment confirmation to <span class="text-darkLightblue font-ubuntu font-bold ">partners@myoumma.app </span><br>
      or if you have any question</p>
      <p class="text-grayLM font-ubuntu text-center mb-5">
      We’ll share our heartfelt thanks along with a detailed report on how your donation is making a difference.
      </p>
      <div class="px-5">
        <div class="text-center text-grayLM font-ubuntu font-bold">MyOumma ©</div>
        <div class="text-center text-grayLM font-ubuntu"> is provided by Yathiqu Limited </div>
        <div class="text-center text-grayLM font-ubuntu mb-5">Registration N° 700286</div>
        <p class="text-grayLM font-ubuntu text-center">
        address : Pod 2, the old station house, 15a main street, Co.Dublin
        </p>
      </div>
    </div>
  </div>
  </div>
  

<!--modal-->
<!--End section masjid-->
<!--Start section form-->
<div class="w-full lg:w-4/12 hidden md:block lg:bg-white mt-2.5 pt-10 lg:pt-0 pb-5 lg:pb-[60px] lg:pb-5 px-[15px] flex flex-col justify-center items-center lg:px-0 bg-grayLightest md:order-2">
  <div class="w-full sm:w-80 sm:mx-auto lg:w-full">
    <form id="registrationForm" method="POST" action="save_registration.php">
      <input
        class="h-[50px] w-[300px] mx-auto font-ubuntuR text-lg text-grayM outline-none border-[8px] p-2 rounded-[12px] border-grayLighte"
        type="email"
        id="email"
        name="email"
        required
        placeholder="Email"
      />
      <div class="py-5">
        <div class="flex space-x-1 justify-center items-center md:justify-start">
          <div class="flex items-center">
            <input
              id="sponsor"
              class="w-[26px] h-[26px]"
              type="radio"
              name="role"
              value="Sponsor"
              checked
            />
          </div>
          <label class="flex pl-2.5" for="sponsor">
            <div class="my-auto capitalize ml-3 text-darkLi font-ubuntu">Sponsor</div>
          </label>
        </div>
        <div class="flex mt-2 space-x-1 justify-center items-center md:justify-start">
          <div class="flex items-center">
            <input
              id="candidate"
              class="w-[26px] h-[26px]"
              type="radio"
              name="role"
              value="Candidate"
            />
          </div>
          <label class="flex pl-2.5" for="candidate">
            <div class="my-auto capitalize ml-3 text-darkLi font-ubuntu">Candidate</div>
          </label>
        </div>
      </div>
      <div class="mb-10 sm:w-80 sm:mx-auto lg:w-full">
        <div class="font-ubuntu px-5 text-darkLi">Keep me informed</div>
        <button
          type="submit"
          class="py-2 rounded-lg bg-darkLightblue w-[300px] mx-auto"
        >
          <div class="text-white font-ubuntu font-bold uppercase">Bismillah</div>
          <div class="text-xs text-white font-ubuntu">Register for the contest free</div>
        </button>
      </div>
    </form>

  </div>
</div>

</div>
</section>
<!--end section form-->
<section class="w-full  sm:w-[650px] sm:mx-auto hidden lg:flex sm:gap-5 md:order-3 justify-center sm:items-center px-5">
    <div class="my-2.5 sm:w-1/2">
      <video class="w-full" controls poster="./assets/images/png/Vignette Jap Masjd vid.jpg">
      <source src="./assets/video/Japan mosque.mp4" type="video/mp4">
      Your browser does not support the video tag.
  </video>
    </div>
    <div class="sm:w-1/2">
    <p class="text-lg font-ubuntu text-grayLM text-center"> <span class="font-ubuntu font-bold ">Welcome to the International « Showcase Your Mosque » Contest,</span> a global initiative to highlight the architecture, culture, and unique stories of mosques while celebrating the spirituality <span class="font-ubuntu font-bold "> of Ramadan. </span></p>
</div>
  </section>

  <div class="w-[300px] mx-auto hidden lg:block">
  <button
    class="w-full py-2 rounded-lg bg-darkLightblue my-10"
    onclick="toggleModal()"
  >
    <div class="text-white font-ubuntu font-bold uppercase">Bismillah</div>
    <div class="text-xs text-white font-ubuntu">Make donation</div>
  </button>
</div>
<!--start section carousel -->
<section class="bg-grayLightest py-5">
  <div class="lg:w-[800px] xl:w-[900px] lg:mx-auto mx-auto">
  <p class="font-ubuntu text-grayLM px-5 text-lg pb-2.5">Discover and Share the Beauty of Your Mosque with the World during Ramadan.</p>
  <p class="font-ubuntu font-bold text-grayLM text-lg px-5 pb-2.5">« Showcase Your Mosque » Contest : a global celebration of the architectural, spiritual and cultural diversity of mosques, and the people who make them shine.</p>
  <p class="font-ubuntu text-grayLM px-5 text-lg pb-2.5">Tell the story of your mosque through an inspiring video that highlights its importance to your local community or its international influence.</p>
  <div class="relative w-full py-5 rounded-lg">
        <div class="carousel px-5 flex gap-5 overflow-x-auto __hideScroller transition-transform duration-500" id="carousel">
            <?php foreach ($images['images'] as $image): ?>
                <div class="flex-shrink-0 w-[150px] text-center">
                    <img src="<?= $image['src'] ?>" alt="<?= $image['alt'] ?>" class="w-[150px] h-[150px] object-cover">
                    <p class="mt-2 text-gray-500 text-xs text-end"><?= $image['copyright'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
  <p class="font-ubuntu text-grayLM text-lg px-5 pb-2.5">Whether you're passionate about culture, a video enthusiast or simply proud of your place of prayer, this contest is your opportunity to shine and share an inspiring video of your mosque with the world.</p>
  <p class="font-ubuntu text-grayLM text-lg px-5 pb-2.5">Join us today and let your mosque inspire millions! 
  Sign up now to be notified of the official launch.</p>
  </div>
  
</section>
<!--end section carousel -->
<!--Start section form-->
<div class="w-full lg:w-4/12 md:hidden bg-white mt-2.5 pt-10 lg:pt-0 pb-5 lg:pb-[60px] lg:pb-5 px-[15px]  lg:px-0  md:order-2">
  <div class="w-full sm:w-80 sm:mx-auto lg:w-full">
    <form class="items-center flex flex-col" id="registrationForm" method="POST" action="save_registration.php">
      <input
        class="w-[300px] mx-auto h-[50px] font-ubuntuR text-lg text-grayM outline-none border-[8px] p-2 rounded-[12px] border-grayLighte"
        type="email"
        id="email"
        name="email"
        required
        placeholder="Email"
      />
      <div class="py-5">
        <div class="flex space-x-1 justify-start">
          <div class="flex items-center">
            <input
              id="sponsor"
              class="w-[26px] h-[26px]"
              type="radio"
              name="role"
              value="Sponsor"
              checked
            />
          </div>
          <label class="flex pl-2.5" for="sponsor">
            <div class="my-auto capitalize ml-3 text-darkLi font-ubuntu">Sponsor</div>
          </label>
        </div>
        <div class="flex mt-2 space-x-1 justify-start">
          <div class="flex items-center">
            <input
              id="candidate"
              class="w-[26px] h-[26px]"
              type="radio"
              name="role"
              value="Candidate"
            />
          </div>
          <label class="flex pl-2.5" for="candidate">
            <div class="my-auto capitalize ml-3 text-darkLi font-ubuntu">Candidate</div>
          </label>
        </div>
      </div>
      <div class="mb-10 sm:w-80 sm:mx-auto lg:w-full">
        <div class="font-ubuntu px-5 text-darkLi">Keep me informed</div>
        <button
          type="submit"
          class=" py-2 rounded-lg bg-darkLightblue w-[300px] mx-auto"
        >
          <div class="text-white font-ubuntuB uppercase">Bismillah</div>
          <div class="text-xs text-white font-ubuntuR">Register for the contest free</div>
        </button>
      </div>
    </form>

  </div>
</div>

</div>
</section>
<!--end section form-->
<!--Start section Faq-->

<div class="bg-grayLightest pt-5 border-t border-grayLighte pb-[60px]">
    <div class="lg:w-[800px] xl:w-[900px] lg:mx-auto py-5 lg:pb-10">
        <h1 class="uppercase text-darkB font-ubuntu font-bold text-center text-3xl leading-8">FAQ</h1>
        <h5 class="text-grayL font-ubuntu font-bold text-sm md:text-base text-center leading-4">Frequently asked questions</h5>

        <div id="faq-container">
            <?php
            $faqs = json_decode(file_get_contents('./json/faqs.json'), true);
            ?>
            <?php foreach ($faqs as $faq): ?>
                <div class="faq-item w-full px-6 mb-4">
                    <div class="cursor-pointer text-grayL h-[70px] text-lg font-ubuntu font-bold flex items-center justify-between" onclick="toggleFAQ(this)">
                        <span><?php echo $faq['title']; ?></span>
                        <svg class="flex-shrink-0 w-6 h-6 text-blueLighter my-auto close-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M20 12H4"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 ml-[5px] w-6 h-6 text-blueLighter my-auto open-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <p class="bg-grayLi font-ubuntu px-5 text-blueLight text-lg py-[18px] hidden">
                    <?= $faq['content']; ?>
                    </p>
                    <hr class="border-grayI" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

  <!--end section Faq-->
<!--start section footer-->
<?php include('./globals/footer.php'); ?>
<!--end section footer-->


 <!-- start Modal -->
 <div id="successModal"
            class="hidden fixed inset-0 p-5 flex flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
            <div class="w-full max-w-lg bg-grayLightest shadow-lg rounded-lg p-6 relative">
                <svg xmlns="http://www.w3.org/2000/svg" id="closeModalBtn"
                    class="w-5 cursor-pointer shrink-0 fill-gray-400 hover:fill-red-500 float-right" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>

                <div class="my-8 text-center">
                   <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-14 shrink-0 fill-green-500 inline" viewBox="0 0 512 512">
                        <path
                            d="M383.841 171.838c-7.881-8.31-21.02-8.676-29.343-.775L221.987 296.732l-63.204-64.893c-8.005-8.213-21.13-8.393-29.35-.387-8.213 7.998-8.386 21.137-.388 29.35l77.492 79.561a20.687 20.687 0 0 0 14.869 6.275 20.744 20.744 0 0 0 14.288-5.694l147.373-139.762c8.316-7.888 8.668-21.027.774-29.344z"
                            data-original="#000000" />
                        <path
                            d="M256 0C114.84 0 0 114.84 0 256s114.84 256 256 256 256-114.84 256-256S397.16 0 256 0zm0 470.487c-118.265 0-214.487-96.214-214.487-214.487 0-118.265 96.221-214.487 214.487-214.487 118.272 0 214.487 96.221 214.487 214.487 0 118.272-96.215 214.487-214.487 214.487z"
                            data-original="#000000" />
                    </svg>-->
                    <h4 class="text-2xl text-gray-800 font-semibold mt-4">Macha Allah!</h4>
                    <p class=" text-gray-500 leading-relaxed">Congratulations Your registration has been successful.</p>
                </div>
            </div>
        </div>
<!-- end Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
  <script src="./js/script.js"></script>
  <script>
  <?php if (isset($_GET['success']) && $_GET['success'] == 'true') { ?>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('successModal').classList.remove('hidden');
    });
  <?php } ?>
  document.getElementById('closeModalBtn')?.addEventListener('click', function() {
    document.getElementById('successModal').classList.add('hidden'); 
  });

  const carousel = document.getElementById('carousel');
        const next = document.getElementById('next');
        const prev = document.getElementById('prev');
        let index = 0;

        const slideWidth = carousel.querySelector('div').offsetWidth;
        const totalSlides = <?= count($images['images']) ?>;

        next.addEventListener('click', () => {
            if (index < totalSlides - 1) {
                index++;
                carousel.style.transform = `translateX(-${index * slideWidth}px)`;
            }
        });

        prev.addEventListener('click', () => {
            if (index > 0) {
                index--;
                carousel.style.transform = `translateX(-${index * slideWidth}px)`;
            }
        });

        function toggleModal() {
            const modal = document.getElementById('modal');
            modal.classList.toggle('hidden');
        }
</script>

</body>
</html>