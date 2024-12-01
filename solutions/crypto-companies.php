<?php
include('../includes/config.php');
?>

<html lang="en">

<head>
    <?php 
   $pageTitle = "Crypto Companies";
   $pageURL =  $config['base_url'] . "/solutions/crypto-companies";
   $pageImage = $config['base_url'] . "/assets/bitvora.png";
  
  include('../includes/header.php'); ?>
</head>

<body>
    <?php include('../includes/navbar.php'); ?>

    <main class="w-full mb-8 pb-8">
        <section class="justify-between items-center lg:px-6 mb-6 lg:mb-2 container mx-auto w-full">
            <div class="relative w-full justify-center text-center flex flex-col-reverse lg:flex-col">
                <div
                    class="relative w-full h-full sm:h-[300px] lg:h-[400px] flex justify-end sm:justify-center lg:justify-end lg:py-12 mt-12 py-1 lg:mt-0">
                    <img src="/assets/crypto-companies.svg"
                        class="w-full h-full object-contain solutions-header-image hidden md:flex" />
                    <img src="/assets/crypto-companies-mobile.svg" class="w-full h-full object-fill md:hidden" />
                </div>

                <div id="hero-section"
                    class="w-full px-6 md:w-9/12 lg:w-10/12 xl:w-9/12 2xl:w-8/12 relative mx-auto mt-[150px] sm:mt-[120px] md:mt-[140px] lg:mt-2 xl:mt-2 2xl:mt-2 pt-2 sm:pt-[40px] md:pt-2 lg:pt-2 xl:pt-2 2xl:pt-2 justify-center text-center">
                    <h1
                        class="text-white text-4xl mx-auto justify-center z-[1] sm:text-4xl md:text-3xl lg:text-4xl 2xl:text-5xl uppercase mb-4 pb-4 tracking-normal leading-tight text-center font-medium lg:w-2/3">
                        Bitcoin Payments for Crypto Companies
                    </h1>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center sm:font-medium justify-center">
                        As time has gone on, more and more cryptocurrencies have launched and competed for users’ mindshare. However, Bitcoin still remains the original, largest and highest volume cryptocurrency demanded by the market. While Bitcoin is often misunderstood to be too slow and expensive to operate with a high throughput business or with low transaction sizes, with the advent of the Lightning Network, Bitcoin can be used in manners that are often faster and cheaper than most other cryptocurrencies. With Bitvora we enable you to use Bitcoin to its full potential in your crypto company.
                    </p>

                    <a href="<?php echo $config['base_url']; ?>/auth/signup"
                        class="bg-primary text-white font-bold px-2 py-3 lg:py-4 rounded-md text-[14px] lg:text-[17px] mt-5 hover:bg-darkBg w-full md:w-[200px] lg:w-[220px] flex text-center justify-center mx-auto">
                        Get Started For Free</a>
                </div>
            </div>
        </section>

        <section
            class="w-full px-6 py-5 container mx-auto mt-[90px] sm:mt-[80px] md:-mt-[45px] lg:mt-[85px] xl:mt-[85px] 2xl:mt-[85px] pt-[15px] sm:pt-[5px] md:pt-[85px] lg:pt-[85px] xl:pt-[85px] 2xl:pt-[85px] mb-8 pb-8">
            <h4
                class="text-white text-2xl sm:text-2xl 2xl:text-3xl font-normal uppercase mb-12 sm:mb-6 md:mb-8 pb-12 sm:pb-6 md:pb-8 tracking-normal leading-tight text-center justify-center md:w-8/12 lg:w-6/12 mx-auto">
                How Bitcoin on the Lightning Network is enabling innovation for Crypto Companies
            </h4>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12  mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Micropayments
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Micropayments aren’t possible on traditional payment processors because of the high base fee.
                        The bitcoin lightning network allows you to send payments less than $0.01, enabling new
                        innovative pay per use business models.
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
                        Instant Settlement and Payments
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Basic Bitcoin on chain payments typically take at least 10 minutes to confirm, but this can be wildly unreliable; sometimes taking up to an hour to be confirmed on the blockchain or requiring intervention to increase the fee. With the Lightning Network, payments can be delivered instantly and become spendable, without any potential hang-ups or additional steps needed for your customers or users. Deliver services to customers faster, with payments that are secure and spendable in an instant. Whether you’re looking for simple payouts, or want to use Bitcoin as one step in a complex multi-asset bridging operation, integrating with the Lightning Network will remove a lot of the friction.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12 mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Streaming Payments Live
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        You can offer live streaming of money through the Lightning Network. The unique combination of extremely cheap transaction fees, with near instant payment settlement means you can send smaller payments, faster. You can unlock completely new business models with our Bitcoin ecosystem tools.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/payment-right.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/payment-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>

            <div class="flex flex-col lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12">
                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/cash-left.svg" class="solutions-image hidden md:flex" />
                <img src="/assets/cash-mobile.svg" class="solutions-image md:hidden" />
            </div>

            <div class="col-span-3 w-full px-2 lg:px-1">
                <h4
                    class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                    Minimize Costs
                </h4>

                <p
                    class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                    Operating a crypto business comes with many risks and challenges, you shouldn’t have to be saddled with paying potentially high network fees to manage and send Bitcoin payments. Accepting payments with Bitvora are as low as 0.3% for Lightning payments, which gives you the freedom to not worry about the volatility of Bitcoin’s fees and the impact on your bottom line.
                </p>
            </div>
            </div>
        </section>

        <?php 
            $faqItems = [
                [
                    'question' => 'What are the advantages of Bitcoin Payments for Crypto Companies?', 
                    'answer' => 'Bitcoin provides a faster, safer, more private and lower cost form of payment that improves the experience for both your users and your business. Offer more options for your customers to pay faster, cheaper and without taking on additional risks.'
                ],

                [
                    'question' => 'How Do Bitcoin Payments Protect My Customer’s Privacy?', 
                    'answer' => 'Like many other cryptocurrencies, bitcoin payments do not have identities associated with them. Payments made over the lightning network do not appear on the blockchain and are impossible to determine the source of the payment. Blockchain payments are traceable, however they do not have any personally identifiable information associated with them.'
                ],

                [
                    'question' => 'Can Bitcoin Payments support automatic monthly payments?',
                    'answer' => 'While not yet widely supported, Bitcoin can support automatic monthly payments using a new protocol called Nostr Wallet Connect (NWC). As support for this new protocol increases, you’ll be able to benefit from predictable monthly payments from your customers.',
                ],

                [
                    'question' => 'Will Accepting Bitcoin Payments Attract more customers to my business?',
                    'answer' => 'Yes! There are dozens of websites that will gladly promote your business to the bitcoin community when you start accepting bitcoin payments. Many bitcoin enthusiasts specifically seek out businesses that align with their values and will gladly support and promote your business and brand when you start accepting Bitcoin. Recall that Lightning Network payments are supported by several large exchanges that your customers may already use, such as Coinbase, Binance and Kraken.',
                ],

                [
                    'question' => 'Will Bitcoin Payments over the Lightning Network Lower My Transaction Costs?',
                    'answer' => 'Regular Bitcoin payments come with a transaction fee that is dependent on market conditions; if there is a lot of activity on Bitcoin, it may be very expensive to send a transaction. Accepting bitcoin payments over the Lightning Network with Bitvora can reduce these costs, which can increase your profit margins or pass those savings along to your customers.',
                ],

            ];
            
            include('../includes/faq.php'); ?>

        <?php 
        $header = "Power your app with Bitcoin and Bitvora";
        $text = "Are you ready to lower your transaction costs, broaden your customer base and join the future of online payments? Sign up for a free account today or contact a Bitvora sales representative for more information on how Bitcoin payments can power your app today!";
        include('../includes/footer.php'); ?>

        <script src="/js/main.js"></script>
        <script src="/js/menu.js"></script>
</body>

</html>