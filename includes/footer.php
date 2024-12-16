<?php
include(__DIR__ . '/config.php');
?>
<footer id="footer">
  <section
    class="bg-white w-full px-4 sm:px-[50px] lg:px-[90px] xl:px-[150px] py-[10px] sm:py-[20px] md:py-[30px] lg:py-[50px] mt-[35px] sm:mt-[45px] lg:mt-[75px] pt-[35px] sm:pt-[45px] md:pt-[40px] lg:pt-[75px] mb-12 pb-12 2xl:container">
    <div
      class="w-80 md:w-[300px] lg:w-[600px] flex md:block items-center justify-center md:justify-start text-center md:text-left mx-auto md:mx-[unset]">
      <h4
        class="text-black text-2xl lg:text-3xl 2xl:text-4xl font-normal md:font-light uppercase tracking-normal leading-tight">
        <?php echo isset($header) ? $header : 'Ready to Simplify Bitcoin Payments?'; ?>
      </h4>
    </div>

    <div
      class="mt-2 sm:mt-2 md:mt-2 lg:mt-2 xl:mt-2 2xl:mt-2 pt-2 sm:pt-2 md:pt-2 lg:pt-2 xl:pt-2 2xl:pt-2 md:flex justify-between items-center">
      <div class="w-full md:w-6/12 text-center md:text-left">
        <p class="text-text font-light text-[14px] lg:text-[16px] 2xl:text-[18px]">
          <?php echo isset($text) ? $text : 'Join the millions of users around the world switching to Bitcoin as their money of choice.'; ?>
        </p>
      </div>

      <div
        class="block sm:flex sm:justify-center gap-6 md:gap-3 lg:gap-6 items-center mt-[50px] sm:mt-[20px] sm:mb-[30px] md:mb-0 md:mt-6/12">
        <button
          class="contact-sales-btn bg-transparent text-black hover:bg-darkBg hover:text-white px-5 md:px-4 lg:px-5 py-3.5 md:py-3 lg:py-3.5 rounded-md text-sm md:text-[13px] lg:text-sm 2xl:text-lg mt-5 border-[1px] border-text border-opacity-60 w-full sm:w-[unset] flex text-center justify-center font-semibold">
          Contact Sales
        </button>

        <a href="<?php echo $config['console_url']; ?>/auth/signup" target="_blank" rel="noopener noreferrer"
          class="bg-primary text-white px-5 md:px-3 lg:px-5 py-3.5 md:py-3 lg:py-3.5 rounded-md text-sm md:text-[13px] lg:text-sm 2xl:text-lg mt-5 hover:bg-darkBg flex text-center justify-center font-semibold">
          <?php echo isset($buttonText) ? $buttonText : 'Get
            Started with Bitvora'; ?>
        </a>
      </div>
    </div>
  </section>

  <section
    class="w-full px-8 sm:px-[50px] lg:px-[150px] py-[20px] sm:py-[20px] lg:py-[50px] mt-[20px] lg:mt-[50px] pt-[20px] lg:pt-[50px] mb-6 lg:mb-12 pb-6 lg:pb-12 2xl:container">
    <div class="w-full border-b-[1px] border-light border-opacity-40 pb-4 sm:pb-[20px] justify-center text-center">
      <h3
        class="text-white text-xl sm:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl font-normal uppercase mb-2 md:mb-4 pb-2 lg:pb-4 tracking-normal leading-tight">
        Bitvora: Your Partner in Bitcoin Infrastructure.
      </h3>
    </div>

    <div class="block sm:hidden w-full mt-2 pt-2 border-b-[1px] border-light border-opacity-40 pb-[20px]">
      <div class="w-full justify-center text-center flex">
        <a class="logo" href="/">
          <img src="/assets/logo.svg" />
        </a>
      </div>

      <div class="mt-2 pt-2 flex gap-8 justify-between">
        <div class="w-full">
          <h4
            class="text-[#645C70] text-sm 2xl:text-lg font-bold uppercase mb-2 pb-2 sm:pb-2 tracking-normal leading-tight">
            SITEMAP
          </h4>

          <div class="mb-2 sm:mb-2 md:mb-2 lg:mb-2 xl:mb-2 2xl:mb-2">
            <a href="/"
              class="text-white font-bold text-sm 2xl:text-base text-left capitalize mb-2 hover:text-light">Home</a>
          </div>

          <div class="mb-2 sm:mb-2 md:mb-2 lg:mb-2 xl:mb-2 2xl:mb-2">
            <a href="https://developers.bitvora.com/" target="_blank" rel="noopener noreferrer"
              class="text-white font-bold text-sm text-left capitalize mb-2 hover:text-light">API Documentation</a>
          </div>

          <div class="mb-2 sm:mb-2 md:mb-2 lg:mb-2 xl:mb-2 2xl:mb-2">
            <a href="https://bitvora.instatus.com" target="_blank"
              class="text-white font-bold text-sm text-left capitalize mb-2 hover:text-light">System Status</a>
          </div>
        </div>

        <div class="w-full">
          <h4 class="text-[#645C70] text-sm font-bold uppercase mb-2 pb-2 sm:pb-2 tracking-normal leading-tight">
            Social Media
          </h4>



          <div class="mb-2">
            <a href="https://x.com/bitvora" target="_blank" rel="noopener noreferrer"
              class="text-white font-bold text-sm text-left capitalize mb-2 hover:text-light">Twitter</a>
          </div>



          <div class="mb-2">
            <a href="https://njump.me/npub13tv0rauv3cgevcjzu298eg2ujd4j82ve6haer0lyu3rjuttw4a2s6mgea0" target="_blank"
              rel="noopener noreferrer"
              class="text-white font-bold text-sm text-left capitalize mb-2 hover:text-light">Nostr</a>
          </div>
        </div>
      </div>
    </div>

    <div class="flex w-full mt-2 pt-[20px] pb-[20px] px-6 justify-between sm:hidden">
      <div>
        <a href="/terms-of-service"
          class="text-white font-bold text-sm text-left capitalize mb-2 hover:text-light">Terms of Service</a>
      </div>

      <div>
        <a href="/privacy-policy"
          class="text-white font-bold text-sm text-left capitalize mb-2 hover:text-light">Privacy Policy</a>
      </div>
    </div>

    <div
      class="hidden sm:grid grid-cols-5 sm:grid-cols-4 lg:grid-cols-5 gap-4 w-full mt-6 sm:mt-4 lg:mt-6 pt-6 sm:pt-4 lg:pt-6 border-b-[1px] border-light border-opacity-40 pb-[40px]">
      <div class="col-span-2 sm:col-span-1 lg:col-span-2">
        <a class="logo" href="/">
          <img src="/assets/logo.svg" />
        </a>
      </div>

      <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1 xl:col-span-1 2xl:col-span-1">
        <h4
          class="text-white text-[15px] sm:text-sm md:text-[15px] lg:text-lg 2xl:text-xl font-semibold uppercase mb-2 pb-2 tracking-normal leading-tight">
          SITEMAP
        </h4>

        <div class="mb-2">
          <a href="/"
            class="text-white font-light text-base sm:text-base lg:text-lg 2xl:text-xl text-left capitalize mb-2 hover:text-light">Home</a>
        </div>

        <div class="mb-2">
          <a href="https://developers.bitvora.com/" target="_blank" rel="noopener noreferrer"
            class="text-white font-light text-base sm:text-base lg:text-lg 2xl:text-xl text-left capitalize mb-2 hover:text-light">API
            Documentation</a>
        </div>

        <div class="mb-2">
          <a href="https://bitvora.instatus.com"
            class="text-white font-light text-base sm:text-base lg:text-lg 2xl:text-xl text-left capitalize mb-2 hover:text-light">System
            Status</a>
        </div>
      </div>

      <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1 xl:col-span-1 2xl:col-span-1">
        <h4
          class="text-white text-[15px] sm:text-sm md:text-[15px] lg:text-lg 2xl:text-xl font-semibold uppercase mb-2 sm:mb-2 md:mb-2 lg:mb-2 xl:mb-2 2xl:mb-2 pb-2 sm:pb-2 md:pb-2 lg:pb-2 xl:pb-2 2xl:pb-2 tracking-normal leading-tight">
          Social Media
        </h4>



        <div class="mb-2">
          <a href="https://x.com/bitvora" target="_blank" rel="noopener noreferrer"
            class="text-white font-light text-base sm:text-base lg:text-lg 2xl:text-xl text-left capitalize mb-2 hover:text-light">Twitter</a>
        </div>



        <div class="mb-2">
          <a href="https://njump.me/npub13tv0rauv3cgevcjzu298eg2ujd4j82ve6haer0lyu3rjuttw4a2s6mgea0" target="_blank"
            rel="noopener noreferrer"
            class="text-white font-light text-base sm:text-base lg:text-lg 2xl:text-xl text-left capitalize mb-2 hover:text-light">Nostr</a>
        </div>
      </div>

      <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1 xl:col-span-1 2xl:col-span-1">
        <h4
          class="text-white text-[15px] sm:text-sm md:text-[15px] lg:text-lg 2xl:text-xl font-semibold uppercase mb-2 sm:mb-2 md:mb-2 lg:mb-2 xl:mb-2 2xl:mb-2 pb-2 sm:pb-2 md:pb-2 lg:pb-2 xl:pb-2 2xl:pb-2 tracking-normal leading-tight">
          legal
        </h4>

        <div class="mb-2">
          <a href="/terms-of-service"
            class="text-white font-light text-base sm:text-base lg:text-lg 2xl:text-xl text-left capitalize mb-2 hover:text-light">Terms
            of Service</a>
        </div>

        <div class="mb-2">
          <a href="/privacy-policy"
            class="text-white font-light text-base sm:text-base lg:text-lg 2xl:text-xl text-left capitalize mb-2 hover:text-light">Privacy
            Policy</a>
        </div>
      </div>
    </div>
  </section>
</footer>

<div id="contact-sales-modal" class="modal z-[10000]">
  <div class="modal-content">
    <span class="close">&times;</span>

    <div class="form-content">
      <h4 class="form-header">Request Access</h4>

      <form class="form" id="emailForm">
        <div>
          <label for="fullname">Full Name:</label>
          <div>
            <input type="text" id="fullname" name="fullname" required />
          </div>
        </div>
        <div>
          <label for="email">Email Address</label>
          <div>
            <input type="email" id="email" name="email" required />
          </div>
        </div>
        <div>
          <label for="company_url">Company URL:</label>
          <div>
            <input type="url" id="company_url" name="company_url" required />
          </div>
        </div>
        <div>
          <label for="job_title">Job Title:</label>
          <div>
            <input type="text" id="job_title" name="job_title" required />
          </div>
        </div>

        <button class="join" type="submit">Go!</button>
      </form>
    </div>
  </div>
</div>

<script>
  function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  function setCookie(name, value, days) {
    let expires = '';
    if (days) {
      const date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = '; expires=' + date.toUTCString();
    }
    document.cookie =
      name + '=' + value + expires + '; path=/; domain=.bitvora.com; SameSite=None; Secure';
  }

  const referralCode = getQueryParam('r');

  if (referralCode) {
    setCookie('referral_code', referralCode, 30);
  }
</script>

<script src="/js/main.js"></script>
<script src="/js/menu.js"></script>