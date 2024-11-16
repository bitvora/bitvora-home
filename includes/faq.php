<section
            class="w-full justify-center items-center px-3 lg:px-6 py-3 lg:py-5 container mx-auto text-center mt-[15px] sm:mt-[5px] md:-mt-[25px] lg:mt-[75px] xl:mt-[75px] 2xl:mt-[75px] pt-[15px] sm:pt-[5px] md:pt-[75px] lg:pt-[75px] xl:pt-[75px] 2xl:pt-[75px] mb-8 pb-8">
            <h4
                class="text-white text-xl sm:text-2xl 2xl:text-3xl font-normal uppercase mb-4 sm:mb-6 md:mb-8 pb-4 sm:pb-6 md:pb-8 tracking-normal leading-tight">
                Frequently Asked Questions
            </h4>

            <div id="accordion" class="space-y-4 lg:px-6">
                <div class="accordion-item rounded w-full">
                    <button
                        class="accordion-header flex justify-between items-center w-full px-2 lg:px-4 py-2 text-left border-b-[1px] lg:uppercase gap-3 pb-4 text-[13px] lg:text-[15px] 2xl:text-[18px] border-light border-opacity-20 font-light"
                        onclick="toggleAccordion(0)">
                        <p>What are the benefits of using Bitcoin for online gambling?</p>
                        <span class="indicator text-3xl lg:text-2xl">+</span>
                    </button>

                    <div class="accordion-body hidden px-4 py-4 w-11/12">
                        <p class="text-light font-light mb-6 pb-6 text-[13px] sm:text-[13px] lg:text-[14px]
                        2xl:text-[16px] text-left">Bitcoin uses the world's most secure
                            payment network, leveraging blockchain technology.
                            Transactions are verified by a decentralized network, making it nearly impossible for
                            fraudsters to tamper with them.</p>
                    </div>
                </div>

                <div class="accordion-item rounded w-full">
                    <button
                        class="accordion-header flex justify-between items-center w-full px-2 lg:px-4 py-2 text-left border-b-[1px] lg:uppercase gap-3 pb-4 text-[13px] lg:text-[15px] 2xl:text-[18px] border-light border-opacity-20 font-light"
                        onclick="toggleAccordion(1)">
                        <p>How secure are Bitcoin payments in online casinos?</p>
                        <span class="indicator text-3xl lg:text-2xl">+</span>
                    </button>

                    <div class="accordion-body hidden px-4 py-4 w-11/12">
                        <p class="text-light font-light mb-6 pb-6 text-[13px] sm:text-[13px] lg:text-[14px]
                        2xl:text-[16px] text-left">Bitcoin uses the world's most secure
                            payment network, leveraging blockchain technology.
                            Transactions are verified by a decentralized network, making it nearly impossible for
                            fraudsters to tamper with them.</p>
                    </div>
                </div>

                <div class="accordion-item rounded w-full">
                    <button
                        class="accordion-header flex justify-between items-center w-full px-2 lg:px-4 py-2 text-left border-b-[1px] lg:uppercase gap-3 pb-4 text-[13px] lg:text-[15px] 2xl:text-[18px] border-light border-opacity-20 font-light"
                        onclick="toggleAccordion(2)">
                        <p>How does Bitcoin reduce payment processing time?</p>
                        <span class="indicator text-3xl lg:text-2xl">+</span>
                    </button>

                    <div class="accordion-body hidden px-4 py-4 w-11/12">
                        <p class="text-light font-light mb-6 pb-6 text-[13px] sm:text-[13px] lg:text-[14px]
                        2xl:text-[16px] text-left">Bitcoin uses the world's most secure
                            payment network, leveraging blockchain technology.
                            Transactions are verified by a decentralized network, making it nearly impossible for
                            fraudsters to tamper with them.</p>
                    </div>
                </div>

                <div class="accordion-item rounded w-full">
                    <button
                        class="accordion-header flex justify-between items-center w-full px-2 lg:px-4 py-2 text-left border-b-[1px] lg:uppercase gap-3 pb-4 text-[13px] lg:text-[15px] 2xl:text-[18px] border-light border-opacity-20 font-light"
                        onclick="toggleAccordion(3)">
                        <p>Are Bitcoin payments anonymous?</p>
                        <span class="indicator text-3xl lg:text-2xl">+</span>
                    </button>

                    <div class="accordion-body hidden px-4 py-4 w-11/12">
                        <p class="text-light font-light mb-6 pb-6 text-[13px] sm:text-[13px] lg:text-[14px]
                        2xl:text-[16px] text-left">Bitcoin uses the world's most secure
                            payment network, leveraging blockchain technology.
                            Transactions are verified by a decentralized network, making it nearly impossible for
                            fraudsters to tamper with them.</p>
                    </div>
                </div>

                <div class="accordion-item rounded w-full">
                    <button
                        class="accordion-header flex justify-between items-center w-full px-2 lg:px-4 py-2 text-left border-b-[1px] lg:uppercase gap-3 pb-4 text-[13px] lg:text-[15px] 2xl:text-[18px] border-light border-opacity-20 font-light"
                        onclick="toggleAccordion(4)">
                        <p>Can Bitcoin help attract a global player base?</p>
                        <span class="indicator text-3xl lg:text-2xl">+</span>
                    </button>

                    <div class="accordion-body hidden px-4 py-4 w-11/12">
                        <p class="text-light font-light mb-6 pb-6 text-[13px] sm:text-[13px] lg:text-[14px]
                        2xl:text-[16px] text-left">Bitcoin uses the world's most secure
                            payment network, leveraging blockchain technology.
                            Transactions are verified by a decentralized network, making it nearly impossible for
                            fraudsters to tamper with them.</p>
                    </div>
                </div>
            </div>
        </section>


        <script>
            const accordionBodies = document.querySelectorAll('.accordion-body');
            const indicators = document.querySelectorAll('.indicator');

            function toggleAccordion(index) {
                accordionBodies.forEach((body, i) => {
                    if (i === index) {
                        const isHidden = body.classList.contains('hidden');
                        body.classList.toggle('hidden', !isHidden);
                        indicators[i].textContent = isHidden ? '-' : '+';
                    } else {
                        body.classList.add('hidden');
                        indicators[i].textContent = '+';
                    }
                });
            }
        </script>