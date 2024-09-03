/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#0D6EFD", // Vibrant blue for primary actions and elements
                secondary: "#6C757D", // Neutral gray for secondary elements and text
                accent: "#FF6F61", // Bright coral accent for highlighting and attention
                background: "#F8F9FA", // Light gray for backgrounds and surfaces
                foreground: "#343A40", // Dark gray for main text and prominent elements
                success: "#198754", // Green for success messages and confirmations
                warning: "#FFC107", // Yellow for warnings and alerts
                danger: "#DC3545", // Red for errors and critical actions
                info: "#0DCAF0", // Light blue for informational messages
                dark: "#041b3e", // Dark color for headers and footers
                light: "#F1F3F5", // Very light gray for backgrounds and subtle accents
                muted: "#6C757D", // Muted gray for less prominent text or disabled states
                highlight: "#FFD700", // Gold for special highlights and emphasis
                overlay: "rgba(0, 0, 0, 0.6)", // Semi-transparent black for overlays and modals
            },
            fontFamily: {
                sans: ["Nunito", "sans-serif"], // Modern, readable sans-serif font
                serif: ["Playfair Display", "serif"], // Elegant serif for headings
                mono: ["Fira Code", "monospace"], // Monospace font for code blocks
                display: ["Oswald", "sans-serif"], // Bold, impactful display font
            },
            fontSize: {
                xs: ".75rem",
                sm: ".875rem",
                base: "1rem",
                lg: "1.125rem",
                xl: "1.25rem",
                "2xl": "1.5rem",
                "3xl": "1.875rem",
                "4xl": "2.25rem",
                "5xl": "3rem",
                "6xl": "4rem",
                "7xl": "5rem", // Very large size for impactful headlines
                "8xl": "6rem", // Ultra-large for hero sections
                "9xl": "8rem", // Maximum size for prominent titles
            },
            spacing: {
                1: "0.25rem",
                2: "0.5rem",
                3: "0.75rem",
                4: "1rem",
                5: "1.25rem",
                6: "1.5rem",
                8: "2rem",
                10: "2.5rem",
                12: "3rem",
                14: "3.5rem",
                16: "4rem",
                20: "5rem",
                24: "6rem",
                28: "7rem",
                32: "8rem",
                36: "9rem", // Extra large spacing for visual separation
                40: "10rem",
                44: "11rem",
                48: "12rem",
                52: "13rem",
                56: "14rem",
                60: "15rem",
                64: "16rem",
                72: "18rem", // Additional spacing for larger gaps
                80: "20rem",
                96: "24rem",
            },
            borderRadius: {
                none: "0",
                sm: "0.125rem",
                DEFAULT: "0.375rem",
                md: "0.5rem",
                lg: "0.75rem",
                xl: "1rem",
                "2xl": "1.5rem",
                "3xl": "2rem", // Larger rounding for more modern look
                "4xl": "2.5rem", // Ultra-large rounding for card designs
                full: "9999px", // Fully rounded for avatars or circular buttons
            },
            boxShadow: {
                sm: "0 1px 2px rgba(0, 0, 0, 0.05)",
                DEFAULT:
                    "0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.05)",
                md: "0 6px 12px rgba(0, 0, 0, 0.15)",
                lg: "0 10px 20px rgba(0, 0, 0, 0.2)",
                xl: "0 20px 40px rgba(0, 0, 0, 0.25)",
                "2xl": "0 25px 50px rgba(0, 0, 0, 0.3)",
                "3xl": "0 35px 60px rgba(0, 0, 0, 0.4)", // Deep shadow for floating effect
                "4xl": "0 45px 70px rgba(0, 0, 0, 0.5)", // Extra deep shadow for high contrast
                none: "none",
                glow: "0 0 15px rgba(255, 105, 180, 0.5)", // Pink glow for soft effects
            },
            animation: {
                bounce: "bounce 1s infinite",
                spin: "spin 2s linear infinite",
                pulse: "pulse 2s infinite", // Smooth pulsing for subtle animations
                slide: "slide 1s ease-in-out infinite", // Sliding effect for dynamic content
                fadeIn: "fadeIn 0.5s ease-in-out", // Smooth fade-in animation
                zoomIn: "zoomIn 0.7s ease-in-out", // Zoom-in animation for elements
            },
            keyframes: {
                slide: {
                    "0%, 100%": { transform: "translateX(0)" },
                    "50%": { transform: "translateX(-5%)" },
                },
                fadeIn: {
                    "0%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
                zoomIn: {
                    "0%": { transform: "scale(0.9)" },
                    "100%": { transform: "scale(1)" },
                },
            },
            zIndex: {
                "-10": "-10", // Allow elements to be behind others
                0: "0",
                10: "10",
                20: "20",
                30: "30",
                40: "40",
                50: "50",
                100: "100", // High z-index for modals and overlays
            },
            transitionProperty: {
                width: "width",
                spacing: "margin, padding",
            },
            transitionTimingFunction: {
                "in-expo": "cubic-bezier(0.95, 0.05, 0.795, 0.035)", // Snappy ease-in transition
                "out-expo": "cubic-bezier(0.19, 1, 0.22, 1)", // Snappy ease-out transition
            },
        },
    },
    plugins: [],
};
