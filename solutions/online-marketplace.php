<?php
include('../includes/config.php');
?>

<html lang="en">

<head>
    <?php 
   $pageTitle = "Online Marketplace";
   $pageURL =  $config['base_url'] . "/solutions/online-marketplace";
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
                    <img src="/assets/online-marketplace.svg"
                        class="w-full h-full object-contain solutions-header-image hidden md:flex" />
                    <img src="/assets/online-marketplace-mobile.svg" class="w-full h-full object-fill md:hidden" />
                </div>

                <div id="hero-section"
                    class="w-full px-6 md:w-9/12 lg:w-10/12 xl:w-9/12 2xl:w-8/12 relative mx-auto mt-[150px] sm:mt-[120px] md:mt-[140px] lg:mt-2 xl:mt-2 2xl:mt-2 pt-2 sm:pt-[40px] md:pt-2 lg:pt-2 xl:pt-2 2xl:pt-2 justify-center text-center">
                    <h1
                        class="text-white text-4xl mx-auto justify-center z-[1] sm:text-4xl md:text-3xl lg:text-4xl 2xl:text-5xl uppercase mb-4 pb-4 tracking-normal leading-tight text-center font-medium lg:w-2/3">
                        Bitcoin Payments for Online Marketplaces
                    </h1>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center sm:font-medium justify-center">
                        Every year, more and more online marketplaces are choosing to integrate Bitcoin and Lightning Network payments. Allowing instant, cheap, irreversible Bitcoin payments is bringing a whole new set of advantages to online marketplaces who wish to add Bitcoin as an additional form of payment alongside credit cards and Paypal, or completely replace their traditional payment flows.
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
                How Bitcoin Is broadening the range of what Online Marketplaces can offer
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
                        Micropayments aren’t possible on traditional payment processors because of the high base fee. The bitcoin lightning network allows you to send payments less than $0.01, enabling new innovative pay per use business models. Broaden the horizons of what products and services you can offer with frictionless micropayments, opening the door to microtasking and low cost digital products.
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
                    <img src=" /assets/time-left.svg" class="solutions-image hidden md:flex" />
                    <img src=" /assets/time-mobile.svg" class="solutions-image md:hidden" />
                </div>

                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Instant Payouts and Payments
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Typical online payments such as credit cards and Paypal are often subject to holding periods and don’t instantly settle. With Bitcoin, payments can be delivered instantly and become spendable, without any potential hang-ups or additional steps needed for your customers or suppliers. Deliver products and services to customers faster, with payments that are secure and spendable in an instant.
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col-reverse lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12 mb-6 pb-6">
                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Global Reach
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Do business with clients in any country without restrictions and without costly currency conversion fees. Bitcoin is money without borders. Bitcoin is completely permissionless and preferable to customers in countries that have difficulties or restrictions in payments and banking. Bitcoin is becoming the currency of the internet.

                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/globe.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/globe-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>

            <div class="flex flex-col lg:grid lg:grid-cols-5 w-full lg:w-11/12 mx-auto lg:mb-12 lg:pb-12">
                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/security-right.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/security-mobile.svg" class="solutions-image md:hidden" />
                </div>

                <div class="col-span-3 w-full px-2 lg:px-1">
                    <h4
                        class="text-white text-lg sm:text-lg xl:text-2xl 2xl:text-3xl font-semibold lg:font-normal text-center lg:text-left lg:uppercase mb-2 pb-2 tracking-normal leading-tight">
                        Improved Security and Fraud Prevention
                    </h4>

                    <p
                        class="text-light font-medium mb-6 pb-6 text-[14px] sm:text-[14px] lg:text-[16px] 2xl:text-[24px] text-center lg:text-left">
                        Unlike credit cards, debit cards or Paypal, payments made with bitcoin can only be made by the bearer and are irreversible. There is no chargeback risk. This protects you and your customers goods or services, knowing that you’re safe from having those funds reversed.

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
                        Operating an online marketplace is a lot of work and comes with many risks, you shouldn’t have to lose 10% or more of your revenue in payment processing fees. Accepting payments with Bitvora are as low as 0.3%, which is up to 90% less expensive than traditional payment processors.
                    </p>
                </div>

                <div class="col-span-2 w-full flex justify-center items-center mb-2 pb-2 lg:mb-0 lg:pb-0">
                    <img src=" /assets/cash-left.svg" class="solutions-image hidden md:flex" />
                    <img src="/assets/cash-mobile.svg" class="solutions-image md:hidden" />
                </div>
            </div>
        </section>

        <?php 
            $faqItems = [
                [
                    'question' => 'What are the advantages of Bitcoin Payments for Online Marketplaces?', 
                    'answer' => 'Bitcoin provides a faster, safer, more private and lower cost form of payment that improves the experience for both your users and your business. Offer more options for your customers to pay faster, cheaper and without taking on additional risks.'
                ],

                [
                    'question' => 'How Do Bitcoin Payments Protect My Customer’s Privacy?', 
                    'answer' => 'Unlike credit cards, debit cards or Paypal, bitcoin payments do not have identities associated with them. Payments made over the lightning network do not appear on the blockchain and are impossible to determine the source of the payment. Blockchain payments are traceable, however they do not have any personally identifiable information associated with them.'],

                [
                    'question' => 'Can Bitcoin Payments support automatic monthly payments?',
                    'answer' => 'While not yet widely supported, Bitcoin can support automatic monthly payments using a new protocol called Nostr Wallet Connect (NWC). As support for this new protocol increases, you’ll be able to benefit from predictable monthly payments from your customers.',
                ],

                [
                    'question' => 'Will Accepting Bitcoin Payments Attract more customers to my business?',
                    'answer' => 'Yes! There are dozens of websites that will gladly promote your business to the bitcoin community when you start accepting bitcoin payments. Many bitcoin enthusiasts specifically seek out businesses that align with their values and will gladly support and promote your business and brand when you start accepting Bitcoin. Bitcoin is very international, you may find new customers who will use your marketplace because it is more accessible to them, from all over the world.',
                ],

                [
                    'question' => 'Will Bitcoin Payments Lower My Transaction Costs?',
                    'answer' => 'Credit card, debit cards and online processors take fees up to and above 3% to process your customers’ transactions. Accepting bitcoin payments with Bitvora can reduce these costs by up to 90% which can increase your profit margins or pass those savings along to your customers.',
                ],

            ];
            
            include('../includes/faq.php'); ?>

        <?php 
        $header = "Power your marketplace with Bitcoin and Bitvora";
        $text = "Are you ready to lower your transaction costs, broaden your customer base and join the future of online payments? Sign up for a free account today or contact a Bitvora sales representative for more information on how Bitcoin payments can power your online marketplace today!";
        include('../includes/footer.php'); ?>

        <script src="/js/main.js"></script>
        <script src="/js/menu.js"></script>
</body>

</html>