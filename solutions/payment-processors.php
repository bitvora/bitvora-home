<?php
include('../includes/config.php');
?>

<html lang="en">

<head>
    <?php
    $pageTitle = "Bitcoin Payments for Payment Processors | Bitvora";
    $pageURL =  $config['base_url'] . "/solutions/payment-processors";
    $pageImage = $config['base_url'] . "/assets/bitvora.png";
    $robots = "noindex, nofollow";

    include('../includes/header.php'); ?>
</head>

<body>
    <?php include('../includes/navbar.php'); ?>

    <main class="w-full mb-8 pb-8">
        <section class="justify-between items-center lg:px-6 mb-6 lg:mb-2 container mx-auto w-full">
            <div class="relative w-full justify-center text-center flex flex-col-reverse lg:flex-col">
                <div
                    class="relative w-full h-full sm:h-[300px] lg:h-[400px] flex justify-end sm:justify-center lg:justify-end lg:py-12 mt-12 py-1 lg:mt-0">
                    <img src="/assets/payment-processors.svg"
                        class="w-full h-full object-contain solutions-header-image hidden md:flex" />
                    <img src="/assets/payment-processors-mobile.svg" class="w-full h-full object-fill md:hidden" />
                </div>

                <div id="hero-section"
                    class="w-full px-6 md:w-9/12 lg:w-10/12 xl:w-9/12 2xl:w-8/12 relative mx-auto mt-[150px] sm:mt-[120px] md:mt-[140px] lg:mt-2 xl:mt-2 2xl:mt-2 pt-2 sm:pt-[40px] md:pt-2 lg:pt-2 xl:pt-2 2xl:pt-2 justify-center text-center">
                    <h1
                        class="text-white text-4xl mx-auto justify-center z-[1] sm:text-4xl md:text-3xl lg:text-4xl 2xl:text-5xl uppercase mb-4 pb-4 tracking-normal leading-tight text-center font-medium lg:w-2/3">
                        Bitcoin for Payment Processors
                    </h1>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center sm:font-medium justify-center">
                        Cut out the banks, card networks and long settlement times by rolling out Bitcoin payments to all your merchants. Increase your profits and customer satisfaction by powering your business with Bitcoin and the Lightning Network.
                    </p>

                    <a href="<?php echo $config['base_url']; ?>/auth/signup"
                        class="bg-primary text-white font-bold px-2 py-3 lg:py-4 rounded-md text-[14px] lg:text-[17px] mt-5 hover:bg-darkBg w-full md:w-[200px] lg:w-[220px] flex text-center justify-center mx-auto">
                        Get Started Today</a>
                </div>
            </div>
        </section>

        <section
            class="w-full px-6 py-5 container mx-auto mt-[90px] sm:mt-[80px] md:-mt-[45px] lg:mt-[45px] xl:mt-[45px] 2xl:mt-[45px] pt-[15px] sm:pt-[5px] md:pt-[50px] lg:pt-[45px] xl:pt-[45px] 2xl:pt-[45px] mb-8 pb-8">
            <h4
                class="text-white text-2xl sm:text-2xl 2xl:text-3xl font-normal uppercase mb-12 sm:mb-6 md:mb-8 pb-12 sm:pb-6 md:pb-8 tracking-normal leading-tight text-center justify-center md:w-8/12 lg:w-6/12 mx-auto">
                How Bitcoin Has Changed The Game For International Payments
            </h4>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12  mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        No middlemen
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Traditional card networks require so many middlemen that erode your profits. Bitcoin payments go directly from one wallet to another, allowing you to capture significantly more profit and offer your merchants instant settlement on their payments.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src="/assets/middleman-right.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/middleman-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>

            <div class="flex flex-col lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12">
                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src="/assets/globe.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/globe-mobile.svg" class="solutions-image md:hidden" />
                </div>

                <div class="col-span-3 w-full">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Global Reach
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Do business with clients in any country without restrictions and without costly currency conversion fees. Bitcoin is money without borders. Bitcoin is completely permissionless and as long as you have internet access (even partially), you can send and receive Bitcoin payments.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12 mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Smaller Payments Made Simple
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Small payments are not practical when sending through traditional methods like a bank wire, as it can be costly and time consuming to submit a bank wire. The Bitcoin lightning network allows you to send and receive payments less than $0.01, for the cost of a tiny fraction of this amount. You can now pay suppliers, partners and users in less than a minute, for small invoices, allowing you the flexibility of offering smaller, quicker payments.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center">
                    <img src="/assets/payment-right.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/payment-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>

            <div class="flex flex-col lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12">
                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/lock.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/security-mobile.svg" class="solutions-image md:hidden" />
                </div>

                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Improved Security and Fraud Prevention
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Unlike credit cards, payments made with bitcoin can only be made by the bearer and are irreversible. There is no chargeback risk. This protects you when receiving payment for a bill of goods or services, knowing that you’re safe from having those funds reversed.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12 mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Minimize Costs
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Conducting business across borders can get expensive as you have to deal with sending and receiving payments with hefty fees, either through services such as Paypal or through bank wires. Accepting payments with Bitvora are as low as 0.3%, which is up to 90%-95% less expensive than traditional international money services.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src="/assets/cash.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/cash-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>


        </section>

        <?php
        $faqItems = [
            [
                'question' => 'What are the advantages of Bitcoin for Payment Processors?',
                'answer' => 'Bitcoin provides a faster, safer, more private and lower cost form of payment that improves the experience for both your users and your business. Offer far more flexible settlement options for your customers, partners and users than competitors who only provide traditional methods.'
            ],

            [
                'question' => 'How Do Bitcoin Payments Protect My Customer’s Privacy?',
                'answer' => 'Unlike credit and debit cards or other international money transfer methods, bitcoin payments do not have identities associated with them. Payments made over the lightning network do not appear on the blockchain and are impossible to determine the source of the payment. Blockchain payments are traceable, however they do not have any personally identifiable information associated with them.'
            ],

            [
                'question' => 'Will Accepting Bitcoin Payments Attract more customers to my business?',
                'answer' => 'Yes! There are dozens of websites that will gladly promote your business to the bitcoin community when you start accepting bitcoin payments. Many bitcoin enthusiasts specifically seek out businesses that align with their values and will gladly support and promote your business and brand when you start accepting Bitcoin. Bitcoin is very international, you may find new customers, partners and users who want to, or even prefer to transact in Bitcoin, from all over the world..',
            ],

            [
                'question' => 'Will Bitcoin Payments Lower My Transaction Costs?',
                'answer' => 'Card networks and banks charge sizable fees to move money, and costs are unpredictable depending on the bank or card. Accepting bitcoin payments with Bitvora can reduce these costs by up to 90% to 95% which can increase your profit margins or pass those savings along to your customers.',
            ],

        ];

        include('../includes/faq.php'); ?>

        <?php
        $header = "Power your business with Bitcoin and Bitvora";
        $text = "Are you ready to lower your transaction costs, broaden your customer base and join the future of online payments? Sign up for a free account today or contact a Bitvora sales representative for more information on how Bitcoin payments can power your payment processing business today!";
        include('../includes/footer.php'); ?>

        <script src="/js/main.js"></script>
        <script src="/js/menu.js"></script>
</body>

</html>