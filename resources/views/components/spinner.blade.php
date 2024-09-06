<!-- Loading Line Bar -->
<div id="loading-bar" class="fixed top-0 left-0 w-0 h-1 bg-primary z-50"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadingBar = document.getElementById('loading-bar');

        // Function to simulate progress
        function simulateLoading() {
            let width = 0;
            const interval = setInterval(function() {
                if (width >= 100) {
                    clearInterval(interval);
                    loadingBar.style.width = '0'; // Reset the bar after load
                } else {
                    width += 1;
                    loadingBar.style.width = width + '%';
                }
            }, 1); // Speed of loading, adjust as needed
        }

        // Show the loading bar when the page is loading
        window.addEventListener('load', function() {
            simulateLoading(); // Start the loading simulation
        });

        // Show the loading bar on form submissions (if applicable)
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function() {
                loadingBar.style.width = '0'; // Reset the bar before starting
                simulateLoading(); // Start loading on form submission
            });
        }
    });
</script>
