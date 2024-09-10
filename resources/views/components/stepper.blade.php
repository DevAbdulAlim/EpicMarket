<div x-data="stepper({{ json_encode($steps) }})" class="w-full">
    <!-- Step Indicator -->
    <div class="flex flex-col md:flex-row justify-between items-center md:mb-8 mb-4 w-full">
        <template x-for="(step, index) in steps" :key="index">
            <div class="flex-1 relative w-full">
                <div class="flex flex-col items-center p-2 border justify-center text-center cursor-pointer transition duration-300 ease-in-out w-full md:w-auto"
                    @click="goToStep(index)"
                    :class="{
                        'bg-green-500 text-white': currentStep > index, // Completed step
                        'bg-blue-600 text-white shadow-lg': currentStep === index, // Active step
                        'bg-gray-100 text-gray-600': currentStep < index // Upcoming step
                    }"
                    class="rounded-none h-16 flex items-center justify-center mx-auto border md:border-0"
                    :style="index === steps.length - 1 ? 'border-right: none;' : ''">
                    <!-- Ensure valid icon class is applied -->
                    <i :class="[step.icon ? step.icon : 'fas fa-circle']" class="text-2xl"></i>
                    <!-- Add fallback icon if empty -->
                    <span class="mt-1 text-sm font-semibold" x-text="step.name"></span>
                </div>
            </div>
        </template>
    </div>

    <!-- Step Content -->
    <div class="p-6 border border-gray-200 rounded shadow-md bg-white">
        <div x-show="currentStep === 0">
            {{ $slot1 }}
        </div>
        <div x-show="currentStep === 1">
            {{ $slot2 }}
        </div>
        <div x-show="currentStep === 2">
            {{ $slot3 }}
        </div>
        <div x-show="currentStep === 3">
            {{ $slot4 }}
        </div>
        <div x-show="currentStep === 4">
            {{ $slot5 }}
        </div>
        <div x-show="currentStep === 5">
            {{ $slot6 }}
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="mt-4 flex justify-between">
        <button x-show="currentStep > 0" @click="previous"
            class="px-4 py-2 bg-gray-300 text-gray-700 hover:bg-gray-400 rounded transition">
            {{ $previousLabel ?? 'Previous' }}
        </button>

        <button x-show="currentStep < steps.length - 1" @click="next"
            class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-700 rounded ml-auto transition">
            {{ $nextLabel ?? 'Next' }}
        </button>

        <button x-show="currentStep === steps.length - 1" @click="finish"
            class="px-4 py-2 bg-green-600 text-white hover:bg-green-700 rounded ml-auto transition">
            {{ $finishLabel ?? 'Finish' }}
        </button>
    </div>
</div>

<script>
    function stepper(steps) {
        return {
            currentStep: 0,
            steps: steps,
            next() {
                if (this.currentStep < this.steps.length - 1) {
                    this.currentStep++;
                }
            },
            previous() {
                if (this.currentStep > 0) {
                    this.currentStep--;
                }
            },
            goToStep(index) {
                this.currentStep = index;
            },
            finish() {
                alert('Stepper completed!');
            }
        }
    }
</script>
