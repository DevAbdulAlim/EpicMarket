<div id="toast-container" class="fixed bottom-5 right-5 z-50 space-y-2 max-w-64 w-full"></div>

<script>
    window.toastHandler = function() {
        return {
            addNotification(message, type) {
                // Create a new toast element
                const toast = document.createElement('div');
                toast.className = `toast-item relative bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden px-4 py-3 flex items-center space-x-3 mb-3 transform transition duration-500 ease-in-out ${
                    type === 'success' ? 'border-l-4 border-green-500' :
                    type === 'error' ? 'border-l-4 border-red-500' :
                    type === 'warning' ? 'border-l-4 border-yellow-500' :
                    'border-l-4 border-blue-500'
                } opacity-0 translate-x-10`; // Initially hidden off-screen to the right

                // Create the light, highly transparent overlay that will shrink from right to left
                const overlay = document.createElement('div');
                overlay.className = 'absolute inset-0 opacity-20'; // Highly transparent overlay
                overlay.style.backgroundColor = type === 'success' ? '#22c55e' :
                    type === 'error' ? '#ef4444' :
                    type === 'warning' ? '#fbbf24' :
                    '#3b82f6'; // Color matching the type
                overlay.style.width = '100%'; // Start at full width
                overlay.style.transition = 'width 3s linear'; // Transition for shrinking effect
                toast.appendChild(overlay);

                // Create the icon
                const icon = document.createElement('div');
                icon.innerHTML = type === 'success' ? '<i class="fas fa-check-circle text-green-500"></i>' :
                    type === 'error' ? '<i class="fas fa-times-circle text-red-500"></i>' :
                    type === 'warning' ? '<i class="fas fa-exclamation-circle text-yellow-500"></i>' :
                    '<i class="fas fa-info-circle text-blue-500"></i>';
                icon.className = 'text-base z-10'; // Slightly smaller icon for compact design
                toast.appendChild(icon);

                // Create the message
                const messageDiv = document.createElement('div');
                messageDiv.className =
                    'flex-1 text-xs font-medium text-gray-800 z-10'; // Smaller text for compact design
                messageDiv.textContent = message;
                toast.appendChild(messageDiv);

                // Create the close button
                const closeButton = document.createElement('button');
                closeButton.className = 'text-gray-400 hover:text-gray-600 focus:outline-none z-10';
                closeButton.innerHTML = '<i class="fas fa-times"></i>';
                closeButton.style.fontSize = '10px'; // Smaller close button for compact design
                closeButton.onclick = function() {
                    toast.remove();
                };
                toast.appendChild(closeButton);

                // Append the toast to the container
                const container = document.getElementById('toast-container');
                container.appendChild(toast);

                // Animate the toast in (slide in from the right)
                setTimeout(() => {
                    toast.classList.remove('opacity-0', 'translate-x-10');
                    toast.classList.add('opacity-100', 'translate-x-0');
                }, 100); // Slight delay for the animation

                // Shrink the overlay from right to left over 3 seconds
                setTimeout(() => {
                    overlay.style.width = '0%'; // Shrink the overlay width
                }, 100);

                // Remove the toast after 3 seconds
                setTimeout(() => {
                    toast.classList.add('opacity-0', 'translate-x-10'); // Animate out (slide to the right)
                    setTimeout(() => {
                        toast.remove();
                    }, 500); // Wait for the animation to complete before removing
                }, 3000);
            }
        };
    };

    window.addNotification = window.toastHandler().addNotification;
</script>
