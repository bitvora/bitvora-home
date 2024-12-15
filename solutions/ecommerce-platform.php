<?php
include('../includes/config.php');
?>

<html lang="en">

<head>
    <?php
    $pageTitle = "Bitcoin Payments for e-Commerce Platforms | Bitvora";
    $pageURL =  $config['base_url'] . "/solutions/ecommerce-platform";
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
                    <img src="/assets/e-commerce.svg"
                        class="w-full h-full object-contain solutions-header-image hidden md:flex" />
                    <img src="/assets/e-commerce-mobile.svg" class="w-full h-full object-fill md:hidden" />
                </div>

                <div id="hero-section"
                    class="w-full px-6 md:w-9/12 lg:w-10/12 xl:w-9/12 2xl:w-8/12 relative mx-auto mt-[150px] sm:mt-[120px] md:mt-[140px] lg:mt-2 xl:mt-2 2xl:mt-2 pt-2 sm:pt-[40px] md:pt-2 lg:pt-2 xl:pt-2 2xl:pt-2 justify-center text-center">
                    <h1
                        class="text-white text-4xl mx-auto justify-center z-[1] sm:text-4xl md:text-3xl lg:text-4xl 2xl:text-5xl uppercase mb-4 pb-4 tracking-normal leading-tight text-center font-medium lg:w-2/3">
                        Bitcoin Payments for E-Commerce
                    </h1>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center sm:font-medium justify-center">
                        Increase your sales and profit margins by accepting the lower cost payment option with the Bitcoin and Lightning networks. Reach a new audience of enthusiastic customers who will love supporting your online store.
                    </p>

                    <a href="<?php echo $config['base_url']; ?>/auth/signup"
                        class="bg-primary text-white font-bold px-2 py-3 lg:py-4 rounded-md text-[14px] lg:text-[17px] mt-5 hover:bg-darkBg w-full md:w-[200px] lg:w-[220px] flex text-center justify-center mx-auto">
                        Get Started For Free</a>
                </div>
            </div>
        </section>

        <section
            class="w-full px-6 py-5 container mx-auto mt-[90px] sm:mt-[80px] md:-mt-[45px] lg:mt-[45px] xl:mt-[45px] 2xl:mt-[45px] pt-[15px] sm:pt-[5px] md:pt-[50px] lg:pt-[45px] xl:pt-[45px] 2xl:pt-[45px] mb-8 pb-8">
            <h4
                class="text-white text-2xl sm:text-2xl 2xl:text-3xl font-normal uppercase mb-12 sm:mb-6 md:mb-8 pb-12 sm:pb-6 md:pb-8 tracking-normal leading-tight text-center justify-center md:w-8/12 lg:w-6/12 mx-auto">
                Improving the E-Commerce Checkout Process with Bitcoin
            </h4>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12  mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Increase Conversion Rates
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Remove the friction in the checkout process by displaying a QR code for payments instead of the traditional credit card experience and reach customers who don’t have access to credit cards or where credit cards aren’t available.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src="/assets/rates-right.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/rates-mobile.svg" class="solutions-image md:hidden" />
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
                        Bitcoin advocates enthusiastically support online stores that accept bitcoin as a form of payment. Enjoy the benefits of free marketing for your e-commerce business simply by accepting a superior form of payment. Get listed on many popular websites that showcase businesses that are joining the bitcoin ecosystem.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/hand-shake.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/hand-shake-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>

            <div
                class="flex flex-col lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12 lg:mt-12 lg:pt-12 mb-6 pb-6">
                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/increase-left.svg" class="solutions-image hidden md:flex" />
                    <img src=" /assets/increase-left-mobile.svg" class="solutions-image md:hidden" />
                </div>

                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Increase Your Profit Margin
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Credit card payments are taking on average 3% of all your revenue, and that doesn’t count all the dispute fees and charge backs that are lost using the legacy payment rails. With bitvora, you can accept payments for as low as 0.3% and never lose another charge back again.
                    </p>
                </div>
            </div>


        </section>

        <?php
        $faqItems = [
            [
                'question' => 'What are the advantages of Bitcoin Payments for Online Stores?',
                'answer' => 'Bitcoin provides a faster, safer, more private and lower cost form of payment that improves the experience for both your users and your business. Remove the friction traditionally associated with credit card checkouts with Bitcoin.'
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
                'question' => 'Will Accepting Bitcoin Payments Attract more Customers to my online store?',
                'answer' => 'Yes! There are dozens of websites that will promote your business to the bitcoin community when you start accepting bitcoin payments. Many bitcoin enthusiasts specifically seek out online stores that align with their values and will gladly support and promote you when you start accepting Bitcoin.',
            ],

            [
                'question' => 'Will Bitcoin Payments Lower My Transaction Costs?',
                'answer' => 'Traditional card networks charge a base fee and up to 10% fees, depending on the industry, to process a credit card transaction. Accepting bitcoin payments with Bitvora can reduce these costs by up to 90% which can increase your profit margins or pass those savings along to your customers.',
            ],

        ];

        include('../includes/faq.php'); ?>

        <?php
        $header = "Power your online business with Bitcoin and Bitvora";
        $text = "Are you ready to lower your transaction costs, broaden your customer base and join the future of online payments? Sign up for a free account today or contact a Bitvora sales representative for more information on how Bitcoin payments can power your business today!";
        include('../includes/footer.php'); ?>

        <script src="/js/main.js"></script>
        <script src="/js/menu.js"></script>
</body>

</html>