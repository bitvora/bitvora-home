<section
    class="w-full justify-center items-center px-3 lg:px-6 py-3 lg:py-5 container mx-auto text-center mt-[50px] lg:mt-[100px]">
    <h4
        class="text-white text-xl sm:text-2xl 2xl:text-3xl font-normal uppercase mb-4 sm:mb-6 md:mb-8 pb-4 sm:pb-6 md:pb-8 tracking-normal leading-tight">
        Frequently Asked Questions
    </h4>

    <div id="accordion" class="space-y-4 lg:px-6">
        <?php foreach ($faqItems ?? [] as $index => $faq): ?>
        <div class="accordion-item rounded w-full">
            <button
                class="accordion-header flex justify-between items-center w-full px-2 lg:px-4 py-2 text-left border-b-[1px] lg:uppercase gap-3 pb-4 text-[13px] lg:text-[15px] 2xl:text-[18px] border-light border-opacity-20 font-light"
                onclick="toggleAccordion(<?php echo $index; ?>)">
                <p><?php echo $faq['question']; ?></p>
                <span class="indicator text-3xl lg:text-2xl">+</span>
            </button>

            <div class="accordion-body hidden px-4 py-4 w-11/12">
                <p class="text-light font-light mb-6 pb-6 text-[13px] sm:text-[13px] lg:text-[14px] 2xl:text-[16px] text-left">
                    <?php echo $faq['answer']; ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
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
