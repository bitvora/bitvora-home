<?php
include('includes/config.php');
?>
<html lang="en">

<head>
  <?php
  $pageTitle = "Bitcoin & Lightning API | Bitvora";
  $pageURL = $config['base_url'];
  $pageImage = $config['base_url'] . "/assets/bitvora.png";
  $robots = "noindex, nofollow";

  include('includes/header.php'); ?>
</head>

<body>
  <?php include('includes/navbar.php'); ?>


  <main class="mt-10 pt-10 sm:mt-0 md:mt-2 lg:mt-4 xl:mt-4 2xl:mt-4 w-full mb-8 pb-8">
    <section class="flex justify-between items-center px-6 py-5 container mx-auto w-full">
      <div class="relative block lg:flex w-full">
        <div id="hero-section"
          class="w-full relative md:w-[600px] md:mx-auto lg:mx-[unset] lg:w-[600px] xl:w-[600px] 2xl:w-[600px] lg:max-w-[40%] xl:max-w-[40%] 2xl:max-w-[40%] mt-4 sm:mt-6 md:mt-6 lg:mt-8 xl:mt-8 2xl:mt-8 pt-4 sm:pt-[40px] md:pt-[50px] lg:pt-[70px] xl:pt-[70px] 2xl:pt-[70px]">
          <h1
            class="text-white text-3xl z-[1] sm:text-4xl md:text-3xl lg:text-4xl 2xl:text-5xl uppercase mb-4 pb-4 tracking-normal leading-tight text-center lg:text-left font-semibold md:font-medium">
            the simplest bitcoin and lightning payments API
          </h1>

          <p
            class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left sm:font-medium">
            Power your business with a lightning fast bitcoin API that abstracts away all the
            complexities of infrastructure and node management.
          </p>

          <a href="#pricing"
            class="bg-primary text-white font-bold px-7 py-[18px] rounded-md text-[17px] mt-5 hover:bg-darkBg hidden lg:inline-block">Get
            Started for Free</a>
        </div>

        <div
          class="relative w-full lg:w-[60%] xl:w-[60%] 2xl:w-[60%] -mt-[0px] sm:-mt-[0px] md:-mt-[150px] lg:-mt-10 xl:-mt-10 2xl:-mt-10">
          <img src="/assets/blackhole.png"
            class="w-[250%] sm:w-[150%] md:w-[150%] lg:w-[120%] xl:w-[120%] 2xl:w-[120%] max-w-none -ml-[250px] sm:-ml-[150px] md:-ml-[210px] lg:ml-[unset] xl:ml-[unset] 2xl:ml-[unset] -mt-[120px] md:mt-[unset]" />

          <img src="/assets/coins.svg"
            class="absolute top-1/2 left-1/2 sm:left-5/7 md:left-5/7 lg:left-2/3 xl:left-2/3 2xl:left-2/3 transform -translate-x-1/2 -translate-y-1/2 w-full sm:w-2/5 md:w-1/2 lg:w-1/2 xl:w-1/2 2xl:w-1/2 h-1/2 object-contain z-10" />
        </div>
      </div>
    </section>

    <section id="product"
      class="justify-center items-center px-6 py-5 container mx-auto w-full text-center mt-[15px] sm:mt-[5px] md:-mt-[25px] lg:mt-[75px] xl:mt-[75px] 2xl:mt-[75px] pt-[15px] sm:pt-[5px] md:pt-[75px] lg:pt-[75px] xl:pt-[75px] 2xl:pt-[75px] mb-8 pb-8">
      <h3
        class="text-white text-2xl sm:text-3xl 2xl:text-4xl font-normal md:font-semibold uppercase mb-4 sm:mb-6 md:mb-8 pb-4 sm:pb-6 md:pb-8 tracking-normal leading-tight">
        Why Choose Bitvora?
      </h3>

      <div class="relative">
        <div id="section-1"
          class="flex overflow-x-auto hide-scrollbar md:grid md:grid-cols-2 md:border-[1px] border-light md:border-primary md:auto-rows-fr why-choose-bitvora mt-4 sm:mt-6 md:mt-8 border-opacity-40">
          <div data-index="0"
            class="scroll-item w-[320px] min-w-[320px] sm:w-[360px] sm:min-w-[360px] md:min-w-[unset] border-[1px] md:w-full bg-transparent md:border-b-[1px] md:border-r-[1px] border-opacity-40 border-light md:border-primary px-[20px] sm:px-[40px] md:px-[30px] lg:px-[80px] py-4 sm:py-4 md:py-4 lg:py-[40px] text-center md:text-left justify-center md:justify-start">
            <div class="mt-1 sm:mt-3 md:mt-4 pt-4 mb-4 pb-4">
              <img src="/assets/api.svg" class="h-10 lg:h-12 w-12 lg:w-12 2xl:h-14 2xl:w-14 mx-auto md:mx-[unset]" />
            </div>

            <h5
              class="text-white text-xl sm:text-lg lg:text-xl 2xl:text-2xl font-normal uppercase mb-2 md:mb-3 pb-2 md:pb-3 tracking-normal leading-tight">
              zero complexity api
            </h5>

            <p
              class="text-light font-normal mb-0 md:mb-4 pb-4 text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg justify-center md:justify-start text-center md:text-left">
              Start sending bitcoin and lightning payments with just a few lines of code. No prior
              knowledge of bitcoin is required to get started.
            </p>
          </div>

          <div data-index="1"
            class="scroll-item w-[320px] min-w-[320px] sm:w-[360px] sm:min-w-[360px] md:min-w-[unset] border-[1px] md:w-full bg-transparent border-b-[1px] border-light md:border-primary px-[20px] sm:px-[40px] md:px-[30px] lg:px-[80px] py-6 sm:py-4 md:py-4 lg:py-[40px] text-center md:text-left justify-center md:justify-start border-opacity-40">
            <div class="mt-1 sm:mt-3 md:mt-4 pt-4 mb-4 pb-4">
              <img src="/assets/always-on.svg"
                class="h-10 lg:h-12 w-12 lg:w-12 2xl:h-14 2xl:w-14 mx-auto md:mx-[unset]" />
            </div>

            <h5
              class="text-white text-xl sm:text-lg lg:text-xl 2xl:text-2xl font-normal uppercase mb-2 md:mb-3 pb-2 md:pb-3 tracking-normal leading-tight">
              Managed Infrastructure
            </h5>

            <p
              class="text-light font-normal mb-0 md:mb-4 pb-4 text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg justify-center md:justify-start text-center md:text-left">
              Multiple redundant nodes, automatic backups, and 24/7 monitoring ensure your
              payments are always on.
            </p>
          </div>

          <div data-index="2"
            class="scroll-item w-[320px] min-w-[320px] sm:w-[360px] sm:min-w-[360px] md:min-w-[unset] border-[1px] md:w-full bg-transparent border-b-[1px] md:border-r-[1px] border-light md:border-primary px-[20px] sm:px-[40px] md:px-[30px] lg:px-[80px] py-6 sm:py-4 md:py-4 lg:py-[40px] text-center md:text-left justify-center md:justify-start border-opacity-40">
            <div class="mt-1 sm:mt-3 md:mt-4 pt-4 mb-4 pb-4">
              <img src="/assets/fees.svg" class="h-10 lg:h-12 w-12 lg:w-12 2xl:h-14 2xl:w-14 mx-auto md:mx-[unset]" />
            </div>

            <h5
              class="text-white text-xl sm:text-lg lg:text-xl 2xl:text-2xl font-normal uppercase mb-2 md:mb-3 pb-2 md:pb-3 tracking-normal leading-tight">
              Predictable Costs, no Hidden Fees
            </h5>

            <p
              class="text-light font-normal mb-0 md:mb-4 pb-4 text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg justify-center md:justify-start text-center md:text-left">
              Our transparent, low-cost structure means you get predictable pricing, without the
              network fee volatility.
            </p>
          </div>

          <div data-index="3"
            class="scroll-item w-[320px] min-w-[320px] sm:w-[360px] sm:min-w-[360px] md:min-w-[unset] border-[1px] border-light md:w-full bg-transparent px-[20px] sm:px-[40px] md:px-[30px] lg:px-[80px] py-6 sm:py-4 md:py-4 lg:py-[40px] text-center md:text-left justify-center md:justify-start border-opacity-40">
            <div class="mt-1 sm:mt-3 md:mt-4 pt-4 mb-4 pb-4">
              <img src="/assets/security.svg"
                class="h-10 lg:h-12 w-12 lg:w-12 2xl:h-14 2xl:w-14 mx-auto md:mx-[unset]" />
            </div>

            <h5
              class="text-white text-xl sm:text-lg lg:text-xl 2xl:text-2xl font-normal uppercase mb-2 md:mb-3 pb-2 md:pb-3 tracking-normal leading-tight">
              Enterprise Security
            </h5>

            <p
              class="text-light font-normal mb-0 md:mb-4 pb-4 text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg justify-center md:justify-start text-center md:text-left">
              Native multisig, bot and DDoS protection, fraud detection, and more keep your funds
              safe and secure.
            </p>
          </div>
        </div>

        <div class="absolute -bottom-[45px] left-0 right-0 flex justify-center items-center gap-1 md:hidden"
          id="dots-1">
          <span class="dot" data-dot="0"></span>
          <span class="dot" data-dot="1"></span>
          <span class="dot" data-dot="2"></span>
          <span class="dot" data-dot="3"></span>
        </div>
      </div>
    </section>

    <section
      class="justify-center items-center px-2 sm:px-4 lg:px-6 py-5 container mx-auto w-full text-center mt-[50px] lg:mt-[75px] pt-[25px] lg:pt-[75px] md:mx-auto">
      <h3
        class="text-white text-2xl sm:text-2xl 2xl:text-3xl font-normal md:font-semibold uppercase mb-2 sm:mb-0 md:mb-8 pb-2 sm:pb-6 md:pb-8 tracking-normal leading-tight">
        How Bitvora works
      </h3>

      <div
        class="grid md:grid-cols-2 border-light border-b-[1px] md:border-primary auto-rows-fr mt-4 sm:mt-0 md:mt-5 lg:mt-10 sm:pb-0 md:pb-5 lg:pb-5 px-4 sm:px-6 md:px-1 lg:px-8 mb-0 sm:mb-4 lg:mb-8 pb-0 mx-4 sm:mx-6 md:mx-2 lg:mx-8">
        <div class="w-full md:w-full flex items-center gap-6 sm:gap-10 md:gap-4 lg:gap-6">
          <img src="/assets/connect.svg" class="w-7 h-7 lg:w-8 lg:h-8 mt-[60px] md:mt-0" />

          <p
            class="text-white text-sm sm:text-[15px] lg:text-xl 2xl:text-2xl font-semibold md:font-medium 2xl:font-semibold">
            CONNECT YOUR APPLICATION
          </p>
        </div>

        <div
          class="text-left sm:w-full md:w-full lg:w-full xl:w-full 2xl:w-full ml-[50px] sm:ml-[65px] md:ml-0 -mt-4 md:mt-0">
          <p class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-left">
            Easily integrate with our API directly our using our library of developer friendly
            SDKs.
          </p>
        </div>
      </div>

      <div
        class="grid md:grid-cols-2 border-b-[1px] border-light md:border-primary auto-rows-fr mt-2 sm:mt-6 md:mt-5 px-4 sm:px-4 md:px-1 lg:px-8 mb-0 sm:mb-6 lg:mb-8 pb-0 sm:pb-4 lg:pb-8 mx-4 sm:mx-6 md:mx-2 lg:mx-8">
        <div class="w-full md:w-full flex items-center gap-6 sm:gap-10 md:gap-4 lg:gap-6">
          <img src="/assets/heavy.svg" class="w-7 h-7 lg:w-8 lg:h-8 mt-[60px] md:mt-0" />

          <p
            class="text-white text-sm sm:text-[15px] lg:text-xl 2xl:text-2xl font-semibold md:font-medium 2xl:font-semibold">
            WE HANDLE THE HEAVY LIFTING
          </p>
        </div>

        <div
          class="text-left sm:w-full md:w-full lg:w-full xl:w-full 2xl:w-full ml-[50px] sm:ml-[65px] md:ml-0 -mt-4 md:mt-0">
          <p class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-left">
            From channel management, security, backups and staying up to date, we handle all the
            complexities of Bitcoin & Lightning.
          </p>
        </div>
      </div>

      <div
        class="grid md:grid-cols-2 border-b-[1px] border-light md:border-primary auto-rows-fr mt-2 sm:mt-6 md:mt-5 px-4 sm:px-4 md:px-1 lg:px-8 mb-0 sm:mb-6 lg:mb-8 pb-0 sm:pb-4 lg:pb-8 mx-4 sm:mx-6 md:mx-2 lg:mx-8">
        <div class="w-full md:w-full flex items-center gap-6 sm:gap-10 md:gap-4 lg:gap-6">
          <img src="/assets/building.svg" class="w-7 h-7 lg:w-8 lg:h-8 mt-[60px] md:mt-0" />

          <p
            class="text-white text-sm sm:text-[15px] lg:text-xl 2xl:text-2xl font-semibold md:font-medium 2xl:font-semibold">
            FOCUS ON BUILDING
          </p>
        </div>

        <div
          class="text-left sm:w-full md:w-full lg:w-full xl:w-full 2xl:w-full ml-[50px] sm:ml-[65px] md:ml-0 -mt-4 md:mt-0">
          <p class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-left">
            Concentrate on creating outstanding customer experiences - we'll take care of the
            bitcoin infrastructure.
          </p>
        </div>
      </div>
    </section>

    <section id="difference"
      class="grid md:grid-cols-2 px-2 sm:px-4 md:px-6 py-2 sm:py-3 md:py-5 container w-full mt-[15px] sm:mt-[5px] md:mt-[25px] lg:mt-[75px] pt-[15px] sm:pt-[5px] md:pt-[25px] lg:pt-[75px] mx-auto">
      <div
        class="w-full flex items-center md:border-b-[1px] md:border-t-[1px] md:border-r-[1px] md:border-primary h-full">
        <div
          class="w-full sm:w-4/5 lg:w-4/5 px-4 sm:px-2 md:px-6 lg:px-[60px] py-8 mb-8 md:mb-0 sm:py-2 md:py-8 mx-auto lg:mx-[unset] justify-center md:justify-start text-center lg:text-left">
          <div
            class="sm:flex md:block gap-2 mb-2 sm:mb-4 md:mb-4 lg:mb-4 xl:mb-4 2xl:mb-4 pb-2 sm:pb-4 md:pb-4 lg:pb-4 xl:pb-4 2xl:pb-4 text-center justify-center lg:text-left lg:justify-start">
            <h3
              class="text-white text-2xl sm:text-2xl md:text-xl lg:text-3xl xl:text-3xl 2xl:text-4xl font-normal uppercase mb-1 pb-1 tracking-normal leading-tight">
              the bitvora
            </h3>
            <h3
              class="text-white text-2xl sm:text-2xl md:text-xl lg:text-3xl xl:text-3xl 2xl:text-4xl font-normal uppercase tracking-normal leading-tight">
              difference
            </h3>
          </div>

          <div class="text-center md:text-left w-full justify-center md:justify-start">
            <p
              class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-center sm:text-left md:text-center lg:text-left">
              Managing your own Bitcoin infrastructure can be costly and complex. Bitvora saves
              you time, money, and resources by providing a robust, secure platform, so you can
              focus on building your business
            </p>
          </div>
        </div>
      </div>

      <div class="md:border-t-[1px] md:border-b-[1px] md:border-primary">
        <div
          class="md:flex md:gap-4 lg:gap-8 xl:gap-8 2xl:gap-8 items-center px-10 sm:px-[60px] md:px-[40px] lg:px-[60px] py-4 sm:py-8 md:py-6 lg:py-8 xl:py-8 2xl:py-8 md:border-b-[1px] md:border-primary">
          <img src="/assets/cost.svg"
            class="w-8 h-8 md:w-9 md:h-9 lg:w-10 lg:h-10 xl:w-10 xl:h-10 2xl:w-12 2xl:h-12 mx-auto md:mx-[unset]" />

          <div
            class="md:ml-0 lg:ml-4 xl:ml-4 2xl:ml-4 sm:pl-4 md:pl-4 lg:pl-0 w-full mt-4 sm:mt-0 md:mt-[unset] pt-4 md:pt-[unset]">
            <p
              class="uppercase text-white text-[15px] lg:text-lg 2xl:text-xl text-center md:text-left justify-center md:justify-start">
              Cost-Efficient
            </p>

            <div class="text-left w-full mt-4 sm:mt-1 md:mt-1 lg:mt-1 xl:mt-1 2xl:mt-1">
              <p
                class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-center sm:text-left md:text-left lg:text-left xl:text-left 2xl:text-left">
                Reduce operational costs by eliminating the need to manage your own infrastructure
              </p>
            </div>
          </div>
        </div>

        <div
          class="md:flex md:gap-4 items-center px-10 md:px-[40px] lg:px-[60px] py-4 sm:py-2 md:py-6 md:border-b-[1px] md:border-primary w-full mt-[50px] sm:mt-[10px] md:mt-[unset]">
          <img src="/assets/developer.svg"
            class="w-8 h-8 md:w-9 md:h-9 lg:w-10 lg:h-10 xl:w-10 xl:h-10 2xl:w-12 2xl:h-12 mx-auto md:mx-[unset]" />

          <div
            class="md:ml-0 lg:ml-4 xl:ml-4 2xl:ml-4 sm:pl-4 md:pl-4 lg:pl-4 xl:pl-4 2xl:pl-4 w-full mt-4 sm:mt-0 md:mt-[unset] pt-4 md:pt-[unset]">
            <p
              class="uppercase text-white text-[15px] lg:text-lg 2xl:text-xl text-center md:text-left justify-center md:justify-start">
              Developer-Friendly
            </p>

            <div class="text-left w-full mt-4 sm:mt-1 md:mt-1 lg:mt-1 xl:mt-1 2xl:mt-1">
              <p
                class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-center sm:text-left md:text-left lg:text-left xl:text-left 2xl:text-left">
                Skip the complexities—our API is simple, fast, and built for developers.
              </p>
            </div>
          </div>
        </div>

        <div
          class="md:flex md:gap-4 items-center px-10 md:px-[40px] lg:px-[60px] py-4 sm:py-2 md:py-6 md:border-b-[1px] md:border-primary w-full mt-[50px] sm:mt-[10px] md:mt-[unset]">
          <img src="/assets/regulatory.svg"
            class="w-8 h-8 md:w-9 md:h-9 lg:w-10 lg:h-10 xl:w-10 xl:h-10 2xl:w-12 2xl:h-12 mx-auto md:mx-[unset]" />

          <div
            class="md:ml-0 lg:ml-4 xl:ml-4 2xl:ml-4 sm:pl-4 md:pl-4 lg:pl-4 xl:pl-4 2xl:pl-4 w-full mt-4 sm:mt-0 md:mt-[unset] pt-4 md:pt-[unset]">
            <p
              class="uppercase text-white text-[15px] lg:text-lg 2xl:text-xl text-center md:text-left justify-center md:justify-start">
              Regulatory Advantage
            </p>

            <div
              class="text-left w-full sm:w-full md:w-full lg:w-full xl:w-full 2xl:w-full mt-4 sm:mt-1 md:mt-1 lg:mt-1 xl:mt-1 2xl:mt-1">
              <p
                class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-center sm:text-left md:text-left lg:text-left xl:text-left 2xl:text-left">
                Based in Canada where regulations are well established and fairly enforced.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="developers"
      class="justify-center items-center px-6 sm:px-4 md:px-6 py-2 sm:py-3 md:py-5 container mx-auto w-full text-center mt-[25px] sm:mt-[15px] md:mt-[75px] pt-[25px] sm:pt-[5px] md:pt-[75px] mb-2 sm:mb-4 md:mb-8 pb-8 sm:pb-4 md:pb-8">
      <div class="mb-8 sm:mb-2 md:mb-8 pb-8 sm:pb-2 md:pb-8 w-[180%] md:w-[unset] ml-[00px] md:ml-[unset]">
        <img src="/assets/code.png" class="w-full md:h-[300px] object-contain max-w-full max-h-full" />
      </div>

      <h3
        class="text-white text-2xl sm:text-2xl 2xl:text-3xl font-normal md:font-semibold uppercase mb-4 sm:mb-2 md:mb-4 pb-4 sm:pb-2 md:pb-4 tracking-normal leading-tight mt-4 sm:mt-2 md:mt-4 pt-4 sm:pt-2 md:pt-4">
        Developer resources
      </h3>

      <div class="md:flex justify-center items-stretch md:gap-4 lg:gap-8 mt-2 lg:mt-5 pt-2 lg:pt-5">
        <a href="https://developers.bitvora.com/" target="_blank" rel="noopener noreferrer"
          class="flex-grow md:flex md:flex-col">
          <div
            class="hover:bg-darkBg hover:border-darkBg md:flex-1 lg:flex-[unset] w-full md:w-[350px] lg:w-[400px] border-[1px] border-light md:border-primary border-opacity-40 transition-all duration-300 ease-in-out px-6 sm:px-8 md:px-6 lg:px-12 py-6 sm:py-8 md:py-6 lg:py-12 mt-8 md:mt-0">
            <div class="flex justify-between items-center">
              <p
                class="uppercase text-white text-[15px] md:text-[13px] lg:text-lg 2xl:text-xl font-bold md:font-semibold text-left">
                API Documentation:
              </p>

              <img src="/assets/right-arrow.svg" />
            </div>

            <div class="text-left w-full mt-2 sm:mt-2 pt-2 sm:pt-2">
              <p class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-left">
                Comprehensive documentation to get you started quickly.
              </p>
            </div>
          </div>
        </a>

        <a href="https://developers.bitvora.com/sdks" target="_blank" rel="noopener noreferrer"
          class="flex-grow md:flex md:flex-col">
          <div
            class="hover:bg-darkBg hover:border-darkBg md:flex-1 lg:flex-[unset] w-full md:w-[350px] lg:w-[400px] border-[1px] border-light md:border-primary border-opacity-40 hover:border-opacity-50 px-6 sm:px-8 md:px-6 lg:px-12 py-6 sm:py-8 md:py-6 lg:py-12 mt-8 md:mt-0">
            <div class="flex justify-between items-center">
              <p
                class="text-white text-[15px] md:text-[13px] lg:text-lg 2xl:text-xl font-bold md:font-semibold text-left">
                SDKs & TOOLS:
              </p>

              <img src="/assets/right-arrow.svg" />
            </div>

            <div class="text-left w-full mt-2 sm:mt-2 pt-2 sm:pt-2">
              <p class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-left">
                Access SDKs and tools designed to simplify your integration.
              </p>
            </div>
          </div>
        </a>

        <a href="mailto:support@bitvora.com" class="flex-grow md:flex md:flex-col">
          <div
            class="hover:bg-darkBg hover:border-darkBg md:flex-1 lg:flex-[unset] w-full md:w-[350px] lg:w-[400px] border-[1px] border-light md:border-primary border-opacity-40 hover:border-opacity-50 px-6 sm:px-8 md:px-6 lg:px-12 py-6 sm:py-8 md:py-6 lg:py-12 mt-8 md:mt-0">
            <div class="flex justify-between items-center">
              <p
                class="uppercase text-white text-[15px] md:text-[13px] lg:text-lg 2xl:text-xl font-bold md:font-semibold text-left">
                Support:
              </p>

              <img src="/assets/right-arrow.svg" />
            </div>

            <div class="text-left w-full mt-2 sm:mt-2 pt-2 sm:pt-2">
              <p class="text-light font-normal text-[15px] sm:text-[15px] lg:text-base 2xl:text-lg text-left">
                Get help from our expert team anytime you need it.
              </p>
            </div>
          </div>
        </a>
      </div>
    </section>

    <section id="pricing"
      class="justify-center items-center px-6 py-5 container mx-auto w-full text-center mt-[25px] sm:mt-[75px] md:mt-[25px] lg:mt-[75px] xl:mt-[75px] 2xl:mt-[75px] pt-[25px] sm:pt-[75px] md:pt-[25px] lg:pt-[75px] xl:pt-[75px] 2xl:pt-[75px] mb-6 sm:mb-12 md:mb-6 lg:mb-12 xl:mb-12 2xl:mb-12 pb-6 sm:pb-12 md:pb-6 lg:pb-12 xl:pb-12 2xl:pb-12">
      <div class="flex lg:hidden justify-center mx-auto">
        <p class="text-gold font-semibold uppercase rounded-3xl bg-[#1C1712] px-4 py-2 text-sm">
          BITVORA PRICING
        </p>
      </div>

      <h3
        class="text-white text-2xl 2xl:text-3xl uppercase mb-4 pb-4 tracking-normal leading-tight mt-2 md:mt-4 pt-4 font-medium md:font-semibold">
        Simple, transparent pricing
      </h3>

      <div class="relative">
        <div id="section-2"
          class="w-full overflow-x-auto hide-scrollbar flex lg:justify-center gap-2 lg:gap-8 mt-5 pt-5 pricing-container">
          <div data-index="0"
            class="flex flex-col scroll-item pricing-item active-pricing min-w-[300px] lg:min-w-[unset] w-[300px] sm:w-[400px] lg:w-[350px] border-[1px] border-light md:border-primary border-opacity-40 px-8 lg:px-10 py-8 lg:py-10 text-left">
            <div class="mb-2 pb-2 text-left">
              <h5 class="uppercase text-white text-lg lg:text-xl 2xl:text-2xl font-normal mb-3 tracking-wide">
                playground
              </h5>

              <h6 class="text-white text-[15px] sm:text-[14px] lg:text-[15px] 2xl:text-[17px] font-light">
                For Developers
              </h6>
            </div>

            <div class="mt-4 pt-4 w-full border-b-[1px] border-light border-opacity-40 pb-5">
              <p class="text-white text-3xl font-semibold tracking-wide">0.5%</p>
              <p class="text-white text-[15px] sm:text-[14px] lg:text-[15px] 2xl:text-[17px] font-light mt-1">
                Transaction Fees
              </p>
            </div>

            <ul class="text-left w-full mt-4 pt-4 pricing-list">
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                <span class="text-white font-medium">$0</span> / month
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                <span class="text-white font-medium">$500</span> / month limit
              </li>

              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Unlimited Transactions
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Lightning Only
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Shared Node
              </li>
            </ul>

            <div class="mt-0 pt-0 w-full active-link">
              <a href="<?php echo $config['base_url']; ?>/auth/signup" target="_blank" rel="noopener noreferrer"
                class="text-black bg-white px-4 py-3 rounded-md w-full flex text-center justify-center text-sm font-medium">
                Get Started
              </a>
            </div>
          </div>

          <div data-index="1"
            class="flex flex-col scroll-item pricing-item min-w-[300px] lg:min-w-[unset] w-[300px] sm:w-[400px] lg:w-[350px] border-[1px] border-light md:border-primary border-opacity-40 px-10 py-10 text-left">
            <div class="mb-2 pb-2 text-left">
              <h5 class="uppercase text-white text-lg lg:text-xl 2xl:text-2xl font-normal mb-3 tracking-wide">
                STARTUP
              </h5>

              <h6 class="text-white text-[15px] sm:text-[14px] lg:text-[15px] 2xl:text-[17px] font-light">
                For small businesses
              </h6>
            </div>

            <div class="mt-4 pt-4 w-full border-b-[1px] border-light border-opacity-40 pb-5">
              <p class="text-white text-3xl font-semibold tracking-wide">0.4%</p>
              <p class="text-white text-[15px] sm:text-[14px] lg:text-[15px] 2xl:text-[17px] font-light mt-1">
                Transaction Fees
              </p>
            </div>

            <ul class="text-left w-full mt-4 pt-4 pricing-list">
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                <span class="text-white font-medium">$399</span> / month
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                <span class="text-white font-medium">$100,000</span> / month limit
              </li>

              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Unlimited Transactions
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Lightning and On-Chain
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Whitelabel Lightning Addresses
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                High Performance Node Cluster
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Priority Email Support
              </li>
            </ul>

            <div class="mt-4 pt-4 w-full active-link">
              <button
                class="text-black bg-white px-4 py-3 rounded-md w-full flex text-center justify-center text-sm font-medium contact-sales-btn">
                Contact Sales
              </button>
            </div>
          </div>

          <div data-index="2"
            class="flex flex-col scroll-item pricing-item min-w-[300px] lg:min-w-[unset] w-[300px] sm:w-[400px] lg:w-[350px] border-[1px] border-light md:border-primary border-opacity-40 px-10 py-10 text-left">
            <div class="mb-2 pb-2 text-left">
              <h5 class="uppercase text-white text-lg lg:text-xl 2xl:text-2xl font-normal mb-3 tracking-wide">
                GROWTH
              </h5>

              <h6 class="text-white text-[15px] sm:text-[14px] lg:text-[15px] 2xl:text-[17px] font-light">
                For large businesses
              </h6>
            </div>

            <div class="mt-4 pt-4 w-full border-b-[1px] border-light border-opacity-40 pb-5">
              <p class="text-white text-3xl font-semibold tracking-wide">0.3%</p>
              <p class="text-white text-[15px] sm:text-[14px] lg:text-[15px] 2xl:text-[17px] font-light mt-1">
                Transaction Fees
              </p>
            </div>

            <ul class="text-left w-full mt-4 pt-4 pricing-list">
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                <span class="text-white font-medium">$2,999</span> / month
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                <span class="text-white font-medium">$3,000,000</span> / month limit
              </li>

              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Unlimited Transactions
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Lightning and On-Chain
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Whitelabel Lightning Addresses
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                High Performance Node Cluster
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Approval for Custom Limits System
              </li>
              <li
                class="text-light font-normal text-[15px] sm:text-[15px] md:text-base lg:text-base xl:text-base 2xl:text-base text-left capitalize mb-2">
                Priority Email Support and phone support
              </li>
            </ul>

            <div class="mt-4 pt-4 w-full active-link">
              <button
                class="text-black bg-white px-4 py-3 rounded-md w-full flex text-center justify-center text-sm font-medium contact-sales-btn">
                Contact Sales
              </button>
            </div>
          </div>
        </div>

        <div class="absolute -bottom-[45px] left-0 right-0 flex justify-center items-center gap-1 lg:hidden"
          id="dots-2">
          <span class="dot" data-dot="0"></span>
          <span class="dot" data-dot="1"></span>
          <span class="dot" data-dot="2"></span>
        </div>
      </div>
    </section>
  </main>



  <?php include('includes/footer.php'); ?>



</body>

</html>