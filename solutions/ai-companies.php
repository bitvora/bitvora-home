<?php
include('../includes/config.php');
?>

<html lang="en">

<head>
    <?php
    $pageTitle = "Bitcoin Payments for AI Companies | Bitvora";
    $pageURL =  $config['base_url'] . "/solutions/ai-companies";
    $pageImage = $config['base_url'] . "/assets/bitvora.png";
    $robots = "index, follow";

    include('../includes/header.php'); ?>
</head>

<body>
    <?php include('../includes/navbar.php'); ?>


    <main class="w-full mb-8 pb-8">
        <section class="justify-between items-center lg:px-6 mb-6 lg:mb-2 container mx-auto w-full">
            <div class="relative w-full justify-center text-center flex flex-col-reverse lg:flex-col">
                <div
                    class="relative w-full h-full sm:h-[300px] lg:h-[400px] flex justify-end sm:justify-center lg:justify-end lg:py-12 mt-12 py-1 lg:mt-0">
                    <img src="/assets/ai.svg"
                        class="w-full h-full object-contain solutions-header-image hidden md:flex" />
                    <img src="/assets/ai-mobile.svg" class="w-full h-full object-fill md:hidden" />
                </div>

                <div id="hero-section"
                    class="w-full px-6 md:w-9/12 lg:w-10/12 xl:w-9/12 2xl:w-8/12 relative mx-auto mt-[150px] sm:mt-[120px] md:mt-[140px] lg:mt-2 xl:mt-2 2xl:mt-2 pt-2 sm:pt-[40px] md:pt-2 lg:pt-2 xl:pt-2 2xl:pt-2 justify-center text-center">
                    <h1
                        class="text-white text-4xl mx-auto justify-center z-[1] sm:text-4xl md:text-3xl lg:text-4xl 2xl:text-5xl uppercase mb-4 pb-4 tracking-normal leading-tight text-center font-medium lg:w-2/3">
                        Bitcoin Payments for AI Companies
                    </h1>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center sm:font-medium justify-center">
                        Unlock innovative new business models like pay per inference or agent to agent payments, lower your costs with instant, low fee payments powered by Bitcoin and the Lightning network. Join thousands of AI companies making the switch to Bitcoin today.
                    </p>

                    <a href="<?php echo $config['console_url']; ?>/auth/signup"
                        class="bg-primary text-white font-bold px-2 py-3 lg:py-4 rounded-md text-[14px] lg:text-[17px] mt-5 hover:bg-darkBg w-full md:w-[200px] lg:w-[220px] flex text-center justify-center mx-auto">
                        Get Started For Free</a>
                </div>
            </div>
        </section>

        <section
            class="w-full px-6 py-5 container mx-auto mt-[90px] sm:mt-[80px] md:-mt-[45px] lg:mt-[45px] xl:mt-[45px] 2xl:mt-[45px] pt-[15px] sm:pt-[5px] md:pt-[50px] lg:pt-[45px] xl:pt-[45px] 2xl:pt-[45px] mb-8 pb-8">
            <h4
                class="text-white text-2xl sm:text-2xl 2xl:text-3xl font-normal uppercase mb-12 sm:mb-6 md:mb-8 pb-12 sm:pb-6 md:pb-8 tracking-normal leading-tight text-center justify-center md:w-8/12 lg:w-6/12 mx-auto">
                How Bitcoin Improves Payments for AI Software
            </h4>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12  mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Pay Per Inference
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Micropayments aren’t possible on traditional payment processors because of the high base fee. The bitcoin lightning network allows you to send payments less than $0.01, enabling new innovative pay per inference models.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src="/assets/micropayment.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/micropayment-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>

            <div
                class="flex flex-col lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12 lg:mt-12 lg:pt-12 mb-6 pb-6">
                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/lock.svg" class="solutions-image hidden md:flex" />
                    <img src=" /assets/security-mobile.svg" class="solutions-image md:hidden" />
                </div>

                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Improved Security and Fraud Prevention
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Unlike credit cards which are rife with fraud from stolen numbers and carding techniques, payments made with bitcoin can only be made by the bearer and are irreversible. Say goodbye to chargebacks and dispute fees with instant settlement, only available with Bitcoin and the Lightning network.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12 mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Reach New Audiences
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Bitcoin advocates enthusiastically support businesses that accept bitcoin as a form of payment. Enjoy the benefits of free marketing for your AI business simply by accepting a superior form of payment. Get listed on many popular websites that showcase businesses that are joining the bitcoin ecosystem.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/hand-shake.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/hand-shake-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>

            <div class="flex flex-col lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12">
                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/rates-left.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/rates-mobile.svg" class="solutions-image md:hidden" />
                </div>

                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Increase Conversion
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Reach more new customers by offering your services without monthly lock in fees, while not requiring customers to go through the high friction experience of signing up for new accounts and entering credit card information. Simply display a QR code to your users and receive payments instantly.
                    </p>
                </div>
            </div>
        </section>

        <?php
        $faqItems = [
            [
                'question' => 'What are the advantages of Bitcoin Payments for AI Companies?',
                'answer' => 'Bitcoin provides a faster, safer, more private and lower cost form of payment that improves the experience for both your users and your business. Remove the friction traditionally associated with sign ups and subscriptions using micropayments with Bitcoin.'
            ],

            [
                'question' => 'How Do Bitcoin Payments Protect My Customer’s Privacy?',
                'answer' => 'Unlike credit and debit cards, bitcoin payments do not have identities associated with them. Payments made over the lightning network do not appear on the blockchain and are impossible to determine the source of the payment. Blockchain payments are traceable, however they do not have any personally identifiable information associated with them.'
            ],

            [
                'question' => 'Can Bitcoin Payments support automatic monthly payments?',
                'answer' => 'While not yet widely supported, Bitcoin can support automatic monthly payments using a new protocol called Nostr Wallet Connect (NWC). As support for this new protocol increases, you’ll be able to benefit from predictable monthly payments from your users.',
            ],

            [
                'question' => 'Will Accepting Bitcoin Payments Attract more customers to my business?',
                'answer' => 'Yes! There are dozens of websites that will gladly promote your business to the bitcoin community when you start accepting bitcoin payments. Many bitcoin enthusiasts specifically seek out businesses that align with their values and will gladly support and promote your business when you start accepting Bitcoin.',
            ],

            [
                'question' => 'Will Bitcoin Payments Lower My Transaction Costs?',
                'answer' => 'Traditional card networks charge a base fee and up to 10% fees, depending on the industry, to process a credit card transaction. Accepting bitcoin payments with bitvora can reduce these costs by up to 90% which can increase your profit margins or pass those savings along to your customers.',
            ],

        ];

        include('../includes/faq.php'); ?>

        <?php
        $header = "Power your software with Bitcoin and Bitvora";
        $text = "Are you ready to lower your transaction costs, broaden your customer base and join the future of online payments? Sign up for a free account today or contact a Bitvora sales representative for more information on how Bitcoin payments can power your AI app today!";
        include('../includes/footer.php'); ?>

        <script src="/js/main.js"></script>
        <script src="/js/menu.js"></script>
</body>

</html>